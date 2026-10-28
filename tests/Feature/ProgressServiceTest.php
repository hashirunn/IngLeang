<?php

namespace Tests\Feature;

use App\Models\Level;
use App\Models\User;
use App\Services\ProgressService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class ProgressServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_first_learning_session_starts_the_streak(): void
    {
        $this->travelTo(Carbon::parse('2026-10-22 09:00', User::STREAK_TIMEZONE));

        $user = User::factory()->create(['streak_count' => 0, 'last_active_date' => null]);

        $this->progressService()->touchStreak($user);

        $user->refresh();

        $this->assertSame(1, $user->streak_count);
        $this->assertSame('2026-10-22', $user->last_active_date->toDateString());
    }

    public function test_learning_after_jakarta_midnight_adds_a_streak_day(): void
    {
        // 2026-10-23 01:00 in Jakarta is still 2026-10-22 18:00 on the server clock.
        $this->travelTo(Carbon::parse('2026-10-22 18:00', 'UTC'));

        $user = User::factory()->create(['streak_count' => 3, 'last_active_date' => '2026-10-22']);

        $this->progressService()->touchStreak($user);

        $user->refresh();

        $this->assertSame(4, $user->streak_count);
        $this->assertSame('2026-10-23', $user->last_active_date->toDateString());
    }

    public function test_learning_again_on_the_same_jakarta_day_keeps_one_streak_day(): void
    {
        $this->travelTo(Carbon::parse('2026-10-23 00:30', User::STREAK_TIMEZONE));

        $user = User::factory()->create(['streak_count' => 3, 'last_active_date' => '2026-10-23']);

        $this->progressService()->touchStreak($user);

        $this->assertSame(3, $user->refresh()->streak_count);
    }

    public function test_streak_restarts_after_a_missed_jakarta_day(): void
    {
        $this->travelTo(Carbon::parse('2026-10-24 10:00', User::STREAK_TIMEZONE));

        $user = User::factory()->create(['streak_count' => 7, 'last_active_date' => '2026-10-21']);

        $this->progressService()->touchStreak($user);

        $this->assertSame(1, $user->refresh()->streak_count);
    }

    public function test_expired_streak_is_hidden_until_the_next_learning_session(): void
    {
        $this->travelTo(Carbon::parse('2026-10-24 10:00', User::STREAK_TIMEZONE));

        $alive = User::factory()->create(['streak_count' => 5, 'last_active_date' => '2026-10-23']);
        $expired = User::factory()->create(['streak_count' => 5, 'last_active_date' => '2026-10-22']);

        $this->actingAs($alive)->get(route('levels.index'))->assertOk()->assertSee('5 hari');
        $this->actingAs($expired)->get(route('levels.index'))->assertOk()->assertSee('0 hari');
    }

    public function test_opening_the_dashboard_after_midnight_restores_the_streak(): void
    {
        $this->travelTo(Carbon::parse('2026-10-24 00:15', User::STREAK_TIMEZONE));

        $this->makeLevel();
        $user = User::factory()->create(['streak_count' => 5, 'last_active_date' => '2026-10-23']);

        $this->actingAs($user)->get(route('dashboard'))->assertOk()->assertSee('6 hari');

        $user->refresh();

        $this->assertSame(6, $user->streak_count);
        $this->assertSame('2026-10-24', $user->last_active_date->toDateString());
    }

    private function makeLevel(): Level
    {
        return Level::create([
            'slug' => 'beginner',
            'name' => 'Beginner',
            'level_order' => 1,
            'cefr' => 'A1 - A2',
            'tagline' => 'Tagline',
            'description' => 'Deskripsi level',
            'theme' => 'beginner',
            'unlock_threshold' => 60,
        ]);
    }

    private function progressService(): ProgressService
    {
        return $this->app->make(ProgressService::class);
    }
}
