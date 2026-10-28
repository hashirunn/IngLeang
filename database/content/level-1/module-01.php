<?php

/**
 * Level 1 — Modul 01: Basic Vocabulary
 *
 * Format file konten:
 * - sections  : materi pelajaran (body berupa HTML tepercaya)
 * - vocabulary: daftar kosakata {word, phonetic, meaning, example}
 * - questions : latihan {type, skill, prompt, ...}
 *
 * Tipe soal:
 * - mcq         : options (list), answer (index 0-based), prompt boleh HTML
 * - fill_blank  : answer (string), accepted (list alternatif opsional)
 * - true_false  : answer (bool) — prompt berupa pernyataan
 * - matching    : pairs [{left, right}] (4-6 pasang)
 * - speaking    : target (kalimat yang diucapkan), hint (arti)
 *
 * Skill: vocabulary | grammar | reading | listening | speaking | writing
 * Listening = soal dengan audio_text (diucapkan TTS, tidak ditampilkan).
 * Setiap modul wajib punya minimal 1 soal listening dan 1 soal speaking.
 * Tandai 2 soal representatif dengan 'is_placement' => true.
 */
return [
    'title' => 'Basic Vocabulary',
    'slug' => 'basic-vocabulary',
    'subtitle' => 'Greetings, numbers, days, months, family, occupations',
    'summary' => 'Belajar kosakata paling dasar: sapaan, angka, hari, bulan, keluarga, dan pekerjaan, plus cara memperkenalkan diri.',
    'icon' => '👋',
    'objectives' => [
        'Mengucapkan sapaan yang tepat sesuai waktu dan situasi',
        'Menyebutkan angka, hari, dan bulan dalam bahasa Inggris',
        'Menyebutkan nama anggota keluarga dan pekerjaan',
        'Memperkenalkan diri dan orang lain secara sederhana',
    ],
    'sections' => [
        [
            'heading' => 'Sapaan (Greetings)',
            'body' => '<p>Sapaan dipilih berdasarkan <strong>waktu</strong> dan <strong>situasi</strong>. Di pagi hari sampai siang, kita memakai <em>good morning</em>; setelah sore, kita memakai <em>good afternoon</em> dan <em>good evening</em>.</p>
<table>
<thead><tr><th>Sapaan</th><th>Waktu / Situasi</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>Good morning</td><td>06.00 – 10.59</td><td>Selamat pagi</td></tr>
<tr><td>Good afternoon</td><td>11.00 – 17.59</td><td>Selamat siang/sore</td></tr>
<tr><td>Good evening</td><td>18.00 – malam</td><td>Selamat malam (ketemu)</td></tr>
<tr><td>Good night</td><td>Saat berpisah/menguap tidur</td><td>Selamat malam (pamit)</td></tr>
</tbody>
</table>
<p><em>Good night</em> bukan sapaan pembuka, melainkan ucapan saat <strong>berpisah</strong> pada malam hari.</p>',
            'examples' => [
                ['en' => 'Good morning, Mrs. Smith!', 'id' => 'Selamat pagi, Ibu Smith!'],
                ['en' => 'Good evening. How are you?', 'id' => 'Selamat malam. Apa kabar?'],
                ['en' => 'Good night, Mom. See you tomorrow.', 'id' => 'Selamat malam, Bu. Sampai jumpa besok.'],
            ],
        ],
        [
            'heading' => 'Angka (Numbers)',
            'body' => '<p>Angka digunakan untuk waktu, harga, umur, dan nomor telepon. Perhatikan penulisan angka yang sering tertukar: <strong>fifteen</strong> (15) berbeda dengan <strong>fifty</strong> (50).</p>
<table>
<thead><tr><th>Angka</th><th>Tulisan</th><th>Angka</th><th>Tulisan</th></tr></thead>
<tbody>
<tr><td>0</td><td>zero</td><td>11</td><td>eleven</td></tr>
<tr><td>1</td><td>one</td><td>12</td><td>twelve</td></tr>
<tr><td>2</td><td>two</td><td>13</td><td>thirteen</td></tr>
<tr><td>5</td><td>five</td><td>15</td><td>fifteen</td></tr>
<tr><td>7</td><td>seven</td><td>20</td><td>twenty</td></tr>
<tr><td>10</td><td>ten</td><td>21</td><td>twenty-one</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'My sister is fifteen years old.', 'id' => 'Saudara perempuanku berusia lima belas tahun.'],
                ['en' => 'The shop opens at nine o\'clock.', 'id' => 'Toko buka pada pukul sembilan.'],
            ],
        ],
        [
            'heading' => 'Hari dan Bulan (Days & Months)',
            'body' => '<p>Nama hari dan bulan dalam bahasa Inggris <strong>selalu diawali huruf besar</strong>. Kata <em>on</em> dipakai untuk hari, sedangkan <em>in</em> dipakai untuk bulan dan tahun.</p>
<table>
<thead><tr><th>Hari</th><th>Arti</th><th>Bulan</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>Monday</td><td>Senin</td><td>January</td><td>Januari</td></tr>
<tr><td>Tuesday</td><td>Selasa</td><td>February</td><td>Februari</td></tr>
<tr><td>Wednesday</td><td>Rabu</td><td>March</td><td>Maret</td></tr>
<tr><td>Thursday</td><td>Kamis</td><td>April</td><td>April</td></tr>
<tr><td>Friday</td><td>Jumat</td><td>July</td><td>Juli</td></tr>
<tr><td>Saturday</td><td>Sabtu</td><td>December</td><td>Desember</td></tr>
<tr><td>Sunday</td><td>Minggu</td><td>October</td><td>Oktober</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'We play football on Saturday.', 'id' => 'Kami bermain sepak bola pada hari Sabtu.'],
                ['en' => 'My birthday is in July.', 'id' => 'Ulang tahunku pada bulan Juli.'],
            ],
        ],
        [
            'heading' => 'Keluarga dan Pekerjaan (Family & Occupations)',
            'body' => '<p>Kata ganti kepemilikan memakai <em>my, your, his, her</em>. Untuk pekerjaan, gunakan artikel <em>a/an</em> di depannya saat menyebutkan satu pekerjaan.</p>
<ul>
<li><strong>parents</strong> (orang tua), <strong>siblings</strong> (saudara kandung), <strong>grandparents</strong> (kakek-nenek)</li>
<li><strong>doctor</strong> (dokter), <strong>teacher</strong> (guru), <strong>engineer</strong> (insinyur), <strong>nurse</strong> (perawat), <strong>farmer</strong> (petani), <strong>driver</strong> (sopir)</li>
<li><strong>student</strong> (pelajar/mahasiswa), <strong>homemaker</strong> (pengurus rumah tangga)</li>
</ul>',
            'examples' => [
                ['en' => 'This is my brother. He is a driver.', 'id' => 'Ini saudara laki-lakiku. Dia seorang sopir.'],
                ['en' => 'Her mother is a teacher at my school.', 'id' => 'Ibunya adalah seorang guru di sekolahku.'],
            ],
        ],
        [
            'heading' => 'Memperkenalkan Diri (Introductions)',
            'body' => '<p>Gunakan pola berikut saat pertama kali bertemu orang lain:</p>
<blockquote><p><strong>Nice to meet you.</strong> &mdash; Senang bertemu denganmu.<br>
<strong>My name is ...</strong> &mdash; Namaku ...<br>
<strong>I am from ...</strong> &mdash; Saya berasal dari ...<br>
<strong>This is my friend, Rina.</strong> &mdash; Ini temanku, Rina.</p></blockquote>
<p>Ketika memperkenalkan orang lain, gunakan <em>this is</em>, bukan <em>he is/she is</em>.</p>',
            'examples' => [
                ['en' => 'Hello, my name is Budi. I am from Surabaya.', 'id' => 'Halo, nama saya Budi. Saya berasal dari Surabaya.'],
                ['en' => 'Nice to meet you, too.', 'id' => 'Senang bertemu denganmu juga.'],
                ['en' => 'This is my sister, Dita. She is a nurse.', 'id' => 'Ini saudara perempuanku, Dita. Dia seorang perawat.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'hello', 'phonetic' => '/həˈləʊ/', 'meaning' => 'halo', 'example' => 'Hello, my name is Andi.'],
        ['word' => 'goodbye', 'phonetic' => '/ɡʊdˈbaɪ/', 'meaning' => 'selamat tinggal', 'example' => 'Goodbye, see you tomorrow!'],
        ['word' => 'please', 'phonetic' => '/pliːz/', 'meaning' => 'tolong / tolonglah', 'example' => 'Please sit down.'],
        ['word' => 'thank you', 'phonetic' => '/ˈθæŋk juː/', 'meaning' => 'terima kasih', 'example' => 'Thank you for your help.'],
        ['word' => 'fifteen', 'phonetic' => '/ˌfɪfˈtiːn/', 'meaning' => 'lima belas (15)', 'example' => 'I have fifteen books.'],
        ['word' => 'fifty', 'phonetic' => '/ˈfɪfti/', 'meaning' => 'lima puluh (50)', 'example' => 'He is fifty years old.'],
        ['word' => 'Monday', 'phonetic' => '/ˈmʌndeɪ/', 'meaning' => 'Senin', 'example' => 'The class starts on Monday.'],
        ['word' => 'Sunday', 'phonetic' => '/ˈsʌndeɪ/', 'meaning' => 'Minggu', 'example' => 'We eat together on Sunday.'],
        ['word' => 'July', 'phonetic' => '/dʒuˈlaɪ/', 'meaning' => 'Juli', 'example' => 'My holiday is in July.'],
        ['word' => 'brother', 'phonetic' => '/ˈbrʌðər/', 'meaning' => 'saudara laki-laki', 'example' => 'My brother works in Jakarta.'],
        ['word' => 'sister', 'phonetic' => '/ˈsɪstər/', 'meaning' => 'saudara perempuan', 'example' => 'My sister is a student.'],
        ['word' => 'doctor', 'phonetic' => '/ˈdɒktər/', 'meaning' => 'dokter', 'example' => 'My uncle is a doctor.'],
        ['word' => 'teacher', 'phonetic' => '/ˈtiːtʃər/', 'meaning' => 'guru', 'example' => 'Our English teacher is kind.'],
        ['word' => 'engineer', 'phonetic' => '/ˌendʒɪˈnɪər/', 'meaning' => 'insinyur', 'example' => 'She wants to be an engineer.'],
        ['word' => 'occupation', 'phonetic' => '/ˌɒkjuˈpeɪʃn/', 'meaning' => 'pekerjaan', 'example' => 'What is your occupation?'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Saat bertemu seseorang untuk pertama kali, kamu mengucapkan: <strong>&ldquo;Nice to ___ you.&rdquo;</strong>',
            'options' => ['meet', 'meets', 'meeting', 'met'],
            'answer' => 0,
            'explanation' => 'Ekspresi baku: <em>nice to meet you</em> memakai kata kerja dasar setelah <em>to</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'My mother&rsquo;s daughter is my ___.',
            'options' => ['aunt', 'sister', 'cousin', 'grandmother'],
            'answer' => 1,
            'explanation' => 'Anak perempuan ibu adalah saudara kandung perempuan, yaitu <em>sister</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'We always play badminton ___ Sunday morning.',
            'options' => ['in', 'on', 'at', 'of'],
            'answer' => 1,
            'explanation' => 'Gunakan <em>on</em> untuk hari: <em>on Sunday morning</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Which one is the correct spelling of number 15?',
            'options' => ['fifty', 'fiveteen', 'fifteen', 'fifteenh'],
            'answer' => 2,
            'explanation' => 'Angka 15 ditulis <strong>fifteen</strong>, sedangkan 50 adalah <em>fifty</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My birthday is ___ July.',
            'answer' => 'in',
            'accepted' => ['in'],
            'explanation' => 'Gunakan <em>in</em> untuk bulan dan tahun, sedangkan <em>on</em> untuk hari.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'She works in a hospital and helps sick people. She is a ___.',
            'answer' => 'nurse',
            'accepted' => ['nurse', 'a nurse', 'the nurse'],
            'explanation' => '<em>Nurse</em> (perawat) merawat pasien di rumah sakit.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'The first day of the week in English is ___.',
            'answer' => 'Monday',
            'accepted' => ['monday'],
            'explanation' => 'Dalam bahasa Inggris, minggu dimulai dari <em>Monday</em> (Senin). Jawaban tidak membedakan huruf besar/kecil.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;Good night&rdquo; digunakan saat bertemu orang pada malam hari.',
            'answer' => false,
            'explanation' => '<em>Good night</em> dipakai saat <strong>berpisah</strong> atau hendak tidur. Untuk menyapa pada malam hari gunakan <em>good evening</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Bulan ketiga dalam setahun adalah March (Maret).',
            'answer' => true,
            'explanation' => 'Urutan bulan: January, February, <strong>March</strong> &hellip; sehingga March adalah bulan ketiga.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan nama hari dengan terjemahannya.',
            'pairs' => [
                ['left' => 'Monday', 'right' => 'Senin'],
                ['left' => 'Thursday', 'right' => 'Kamis'],
                ['left' => 'Friday', 'right' => 'Jumat'],
                ['left' => 'Saturday', 'right' => 'Sabtu'],
                ['left' => 'Sunday', 'right' => 'Minggu'],
            ],
            'explanation' => 'Hari dalam bahasa Inggris selalu ditulis dengan huruf besar di awal.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan pekerjaan dengan artinya.',
            'pairs' => [
                ['left' => 'doctor', 'right' => 'dokter'],
                ['left' => 'teacher', 'right' => 'guru'],
                ['left' => 'engineer', 'right' => 'insinyur'],
                ['left' => 'farmer', 'right' => 'petani'],
                ['left' => 'driver', 'right' => 'sopir'],
            ],
            'explanation' => 'Ingat: pekerjaan ditulis tanpa huruf besar kecuali di awal kalimat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The meeting starts at nine o\'clock.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'The meeting starts at nine o\'clock.',
                'The meeting starts at ten o\'clock.',
                'The meeting starts on Sunday.',
                'The meeting starts at night.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>nine o\'clock</em> (pukul sembilan), bukan <em>ten</em> (sepuluh).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'My sister is a teacher.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;My sister is a ___&rdquo;',
            'answer' => 'teacher',
            'accepted' => ['teacher'],
            'explanation' => 'Kalimat yang terdengar: <em>My sister is a teacher</em> (Saudariku seorang guru).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>My name is Rina. I have one brother and two sisters. My father is a doctor and my mother is a teacher. We live in Bandung. On Sunday, our family eats together.</p></div><p>What is Rina&rsquo;s father&rsquo;s job?</p>',
            'options' => ['a teacher', 'a doctor', 'a driver', 'a farmer'],
            'answer' => 1,
            'explanation' => 'Kalimat <em>&ldquo;My father is a doctor&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Perkenalkan dirimu dengan kalimat berikut.',
            'target' => 'Good morning. My name is Rina. Nice to meet you.',
            'hint' => 'Arti: Selamat pagi. Nama saya Rina. Senang bertemu denganmu.',
            'explanation' => 'Pada perkenalan, urutannya: sapaan &rarr; nama &rarr; ungkapan senang bertemu.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sebutkan jumlah anggota keluargamu dengan kalimat ini.',
            'target' => 'I have two brothers and one sister.',
            'hint' => 'Arti: Saya punya dua saudara laki-laki dan satu saudara perempuan.',
            'explanation' => 'Gunakan <em>I have ...</em> untuk menyebutkan kepemilikan; angka diletakkan sebelum kata benda.',
        ],
    ],
];
