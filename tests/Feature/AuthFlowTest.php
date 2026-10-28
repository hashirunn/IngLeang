<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_is_redirected_to_login(): void
    {
        $this->get(route('dashboard'))->assertRedirect(route('login'));
    }

    public function test_registration_logs_the_user_in_and_routes_to_the_placement_test(): void
    {
        $response = $this->post(route('register.store'), [
            'name' => 'Sari',
            'email' => 'sari@example.com',
            'password' => 'rahasia123',
            'password_confirmation' => 'rahasia123',
        ]);

        $response->assertRedirect(route('placement.show'));
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', ['email' => 'sari@example.com']);
    }

    public function test_registration_requires_a_unique_email(): void
    {
        User::create([
            'name' => 'Existing',
            'email' => 'taken@example.com',
            'password' => 'rahasia123',
        ]);

        $response = $this->from(route('register'))->post(route('register.store'), [
            'name' => 'Duplikat',
            'email' => 'taken@example.com',
            'password' => 'rahasia123',
            'password_confirmation' => 'rahasia123',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_login_with_valid_credentials(): void
    {
        User::create([
            'name' => 'Learner',
            'email' => 'learner@example.com',
            'password' => 'rahasia123',
        ]);

        $response = $this->post(route('login.store'), [
            'email' => 'learner@example.com',
            'password' => 'rahasia123',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticated();
    }

    public function test_login_with_invalid_credentials_fails(): void
    {
        User::create([
            'name' => 'Learner',
            'email' => 'learner@example.com',
            'password' => 'rahasia123',
        ]);

        $response = $this->post(route('login.store'), [
            'email' => 'learner@example.com',
            'password' => 'salah',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_logout_invalidates_the_session(): void
    {
        $user = User::create([
            'name' => 'Learner',
            'email' => 'learner@example.com',
            'password' => 'rahasia123',
        ]);

        $this->actingAs($user)
            ->post(route('logout'))
            ->assertRedirect(route('login'));

        $this->assertGuest();
    }
}
