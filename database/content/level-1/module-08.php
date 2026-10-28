<?php

/**
 * Level 1 — Modul 08: Simple Past
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
    'title' => 'Simple Past',
    'slug' => 'simple-past',
    'subtitle' => 'Pengalaman dan aktivitas masa lalu, termasuk irregular verbs',
    'summary' => 'Belajar menceritakan kegiatan dan pengalaman yang sudah selesai di masa lalu, lengkap dengan kata kerja tidak beraturan, bentuk negatif, dan tanya.',
    'icon' => '📜',
    'objectives' => [
        'Membentuk kalimat simple past untuk kata kerja beraturan dan tidak beraturan',
        'Menggunakan kata kunci masa lalu seperti yesterday, last night, dan ago',
        'Membuat bentuk negatif dan tanya dengan did/didn&rsquo;t',
        'Menggunakan was/were untuk kata kerja to be di masa lalu',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Simple Past?',
            'body' => '<p><strong>Simple past</strong> digunakan untuk menceritakan kegiatan yang <strong>sudah selesai di masa lalu</strong>. Waktunya sudah berlalu dan sering disebutkan, misalnya <em>yesterday</em>, <em>last night</em>, atau <em>in 2020</em>.</p>
<p>Rumusnya: <strong>Subject + kata kerja lampau (V2)</strong></p>
<ul>
<li>I <strong>watched</strong> a movie last night. (Saya menonton film semalam.)</li>
<li>She <strong>went</strong> to the market yesterday. (Dia pergi ke pasar kemarin.)</li>
<li>We <strong>played</strong> football after school. (Kami bermain sepak bola setelah sekolah.)</li>
</ul>
<p>Kata kerja beraturan (regular) cukup ditambah <strong>-ed</strong>, sedangkan kata kerja tidak beraturan (irregular) berubah bentuk secara khusus dan harus dihafal.</p>',
            'examples' => [
                ['en' => 'I watched a movie with my family last night.', 'id' => 'Saya menonton film bersama keluargaku semalam.'],
                ['en' => 'My brother visited his teacher yesterday.', 'id' => 'Saudaraku mengunjungi gurunya kemarin.'],
                ['en' => 'We cleaned our classroom after the lesson.', 'id' => 'Kami membersihkan kelas kami setelah pelajaran.'],
                ['en' => 'She walked home because the bus was late.', 'id' => 'Dia berjalan kaki karena busnya terlambat.'],
            ],
        ],
        [
            'heading' => 'Kata Kerja Tidak Beraturan (Irregular Verbs)',
            'body' => '<p>Berikut kata kerja tidak beraturan yang paling sering dipakai sehari-hari. Bentuk lampau kata-kata ini tidak dibentuk dengan -ed, sehingga harus dihafal.</p>
<table>
<thead><tr><th>V1 (dasar)</th><th>V2 (lampau)</th><th>Arti V1</th><th>V1 (dasar)</th><th>V2 (lampau)</th><th>Arti V1</th></tr></thead>
<tbody>
<tr><td>go</td><td>went</td><td>pergi</td><td>eat</td><td>ate</td><td>makan</td></tr>
<tr><td>see</td><td>saw</td><td>melihat</td><td>buy</td><td>bought</td><td>membeli</td></tr>
<tr><td>take</td><td>took</td><td>mengambil</td><td>come</td><td>came</td><td>datang</td></tr>
<tr><td>have</td><td>had</td><td>memiliki</td><td>do</td><td>did</td><td>melakukan</td></tr>
<tr><td>make</td><td>made</td><td>membuat</td><td>write</td><td>wrote</td><td>menulis</td></tr>
<tr><td>drink</td><td>drank</td><td>minum</td><td>swim</td><td>swam</td><td>berenang</td></tr>
<tr><td>say</td><td>said</td><td>mengatakan</td><td>give</td><td>gave</td><td>memberi</td></tr>
<tr><td>sleep</td><td>slept</td><td>tidur</td><td>read</td><td>read</td><td>membaca</td></tr>
</tbody>
</table>
<p>Catatan: kata <em>read</em> lampau ditulis sama, tetapi dibaca /red/.</p>',
            'examples' => [
                ['en' => 'I drank a glass of milk this morning.', 'id' => 'Saya minum segelas susu pagi ini.'],
                ['en' => 'She gave me a beautiful card on my birthday.', 'id' => 'Dia memberiku kartu yang indah di hari ulang tahunku.'],
            ],
        ],
        [
            'heading' => 'Bentuk Negatif dan Tanya',
            'body' => '<p>Untuk membentuk negatif dan tanya, gunakan bantuan <strong>did</strong>. Setelah <em>did</em> atau <em>didn&rsquo;t</em>, kata kerja selalu kembali ke <strong>bentuk dasar (V1)</strong>.</p>
<table>
<thead><tr><th>Rumus</th><th>Contoh</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>Subject + <strong>didn&rsquo;t</strong> + V1</td><td>I didn&rsquo;t watch TV last night.</td><td>Saya tidak menonton TV semalam.</td></tr>
<tr><td><strong>Did</strong> + subject + V1 ...?</td><td>Did she call you yesterday?</td><td>Apakah dia meneleponmu kemarin?</td></tr>
<tr><td>Jawaban singkat</td><td>Yes, she did. / No, she didn&rsquo;t.</td><td>Ya, dia menelepon. / Tidak, dia tidak menelepon.</td></tr>
</tbody>
</table>
<p>Contoh kesalahan: <em>&ldquo;He didn&rsquo;t went home&rdquo;</em> &rarr; yang benar adalah <em>&ldquo;He didn&rsquo;t go home.&rdquo;</em></p>',
            'examples' => [
                ['en' => 'They did not go to school last Monday.', 'id' => 'Mereka tidak pergi ke sekolah Senin lalu.'],
                ['en' => 'Did you buy the tickets yesterday?', 'id' => 'Apakah kamu membeli tiket kemarin?'],
                ['en' => 'No, I didn&rsquo;t. I bought them this morning.', 'id' => 'Tidak, saya tidak membelinya. Saya membelinya tadi pagi.'],
            ],
        ],
        [
            'heading' => 'To Be di Masa Lalu: Was dan Were',
            'body' => '<p>Kata kerja <em>to be</em> memiliki bentuk lampau sendiri: <strong>was</strong> untuk <em>I, he, she, it</em> dan <strong>were</strong> untuk <em>you, we, they</em>.</p>
<ul>
<li>He <strong>was</strong> at home last night. (Dia ada di rumah semalam.)</li>
<li>They <strong>were</strong> in the classroom ten minutes ago. (Mereka ada di kelas sepuluh menit yang lalu.)</li>
<li>Bentuk negatif: <em>wasn&rsquo;t / weren&rsquo;t</em>; bentuk tanya: <em>Was he ...? / Were they ...?</em></li>
</ul>
<p>Kata kerja <em>to be</em> tidak memerlukan bantuan <em>did</em> dalam bentuk negatif dan tanya.</p>',
            'examples' => [
                ['en' => 'I was very tired last night.', 'id' => 'Saya sangat lelah semalam.'],
                ['en' => 'Was the food delicious yesterday?', 'id' => 'Apakah makanannya lezat kemarin?'],
                ['en' => 'We were not at home when you called.', 'id' => 'Kami tidak ada di rumah saat kamu menelepon.'],
            ],
        ],
        [
            'heading' => 'Kata Kunci Masa Lalu',
            'body' => '<p>Kata kunci berikut menunjukkan waktu yang sudah lewat dan menjadi penanda utama simple past:</p>
<ul>
<li><strong>yesterday</strong> (kemarin), <strong>this morning</strong> (pagi tadi), <strong>just now</strong> (baru saja)</li>
<li><strong>last night / week / month / year</strong> (semalam / minggu lalu / bulan lalu / tahun lalu)</li>
<li><strong>two days ago</strong> (dua hari yang lalu), <strong>in 2020</strong> (pada tahun 2020)</li>
</ul>
<p>Jika kamu menemukan kata kunci ini dalam sebuah kalimat, biasanya jawabannya adalah bentuk simple past.</p>',
            'examples' => [
                ['en' => 'We went to Malang last weekend.', 'id' => 'Kami pergi ke Malang akhir pekan lalu.'],
                ['en' => 'I saw that movie two years ago.', 'id' => 'Saya melihat film itu dua tahun yang lalu.'],
                ['en' => 'My parents bought this car in 2019.', 'id' => 'Orang tuaku membeli mobil ini pada tahun 2019.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'yesterday', 'phonetic' => '/ˈjestədeɪ/', 'meaning' => 'kemarin', 'example' => 'I watched a movie yesterday.'],
        ['word' => 'last night', 'phonetic' => '/lɑːst naɪt/', 'meaning' => 'semalam', 'example' => 'We ate at a restaurant last night.'],
        ['word' => 'last week', 'phonetic' => '/lɑːst wiːk/', 'meaning' => 'minggu lalu', 'example' => 'My family went to the beach last week.'],
        ['word' => 'ago', 'phonetic' => '/əˈɡəʊ/', 'meaning' => 'yang lalu', 'example' => 'He came here two hours ago.'],
        ['word' => 'visit', 'phonetic' => '/ˈvɪzɪt/', 'meaning' => 'mengunjungi', 'example' => 'I visited my grandmother last Sunday.'],
        ['word' => 'watch', 'phonetic' => '/wɒtʃ/', 'meaning' => 'menonton', 'example' => 'She watched television last night.'],
        ['word' => 'buy', 'phonetic' => '/baɪ/', 'meaning' => 'membeli', 'example' => 'I bought a new bag yesterday.'],
        ['word' => 'went', 'phonetic' => '/went/', 'meaning' => 'pergi (lampau dari go)', 'example' => 'They went to school by bus.'],
        ['word' => 'ate', 'phonetic' => '/et/', 'meaning' => 'makan (lampau dari eat)', 'example' => 'We ate noodles for lunch.'],
        ['word' => 'delicious', 'phonetic' => '/dɪˈlɪʃəs/', 'meaning' => 'lezat', 'example' => 'The fried chicken was delicious.'],
        ['word' => 'trip', 'phonetic' => '/trɪp/', 'meaning' => 'perjalanan / wisata', 'example' => 'We had a great trip to Malang.'],
        ['word' => 'station', 'phonetic' => '/ˈsteɪʃn/', 'meaning' => 'stasiun', 'example' => 'My father waited at the train station.'],
        ['word' => 'already', 'phonetic' => '/ɔːlˈredi/', 'meaning' => 'sudah', 'example' => 'She already finished her homework.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Yesterday, I ___ a new book at the market.',
            'options' => ['buy', 'buys', 'bought', 'buying'],
            'answer' => 2,
            'explanation' => 'Kata <em>yesterday</em> menandakan masa lalu. Kata kerja <em>buy</em> adalah irregular verb dengan bentuk lampau <em>bought</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'She ___ TV with her brother last night.',
            'options' => ['watch', 'watches', 'watched', 'is watching'],
            'answer' => 2,
            'explanation' => '<em>Last night</em> menunjukkan waktu masa lalu, sehingga <em>watch</em> menjadi <em>watched</em> (regular verb + -ed).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ your father go to work by car this morning?',
            'options' => ['Do', 'Did', 'Was', 'Is'],
            'answer' => 1,
            'explanation' => 'Pertanyaan simple past dibantu dengan <em>did</em> + kata kerja dasar: <em>Did your father go to work ...?</em>',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Last weekend, we ___ to the zoo. We saw many animals there.',
            'options' => ['go', 'went', 'gone', 'are going'],
            'answer' => 1,
            'explanation' => 'Kata kerja <em>go</em> adalah irregular verb; bentuk lampaunya adalah <em>went</em>. Kalimat kedua, <em>we saw</em>, juga menegaskan waktu masa lalu.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'They ___ (be) at the library yesterday afternoon.',
            'answer' => 'were',
            'accepted' => ['were'],
            'explanation' => 'Subjek jamak <em>they</em> menggunakan <em>were</em> sebagai bentuk lampau dari <em>to be</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Last night, my mother ___ (make) fried rice for us.',
            'answer' => 'made',
            'accepted' => ['made'],
            'explanation' => 'Kata kerja <em>make</em> adalah irregular verb; bentuk lampaunya adalah <em>made</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Ali ___ (go) to Bandung with his family last month.',
            'answer' => 'went',
            'accepted' => ['went'],
            'explanation' => 'Setelah subjek tunggal <em>Ali</em> dan kata kunci <em>last month</em>, gunakan bentuk lampau <em>went</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'The cake was very ___. We finished all of it.',
            'answer' => 'delicious',
            'accepted' => ['delicious', 'yummy'],
            'explanation' => '<em>Delicious</em> berarti lezat; kue yang lezat menjelaskan mengapa semuanya habis dimakan.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;He didn&rsquo;t called me yesterday&rdquo; sudah benar.',
            'answer' => false,
            'explanation' => 'Setelah <em>didn&rsquo;t</em>, kata kerja harus berbentuk dasar. Yang benar: <em>He didn&rsquo;t call me yesterday</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Ungkapan &ldquo;last week&rdquo; menunjukkan waktu masa lalu dan biasanya dipakai bersama simple past.',
            'answer' => true,
            'explanation' => '<em>Last week</em> berarti minggu lalu, yaitu waktu yang sudah lewat, sehingga tepat dipakai dengan simple past: <em>We visited them last week</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata kunci masa lalu berikut dengan artinya.',
            'pairs' => [
                ['left' => 'yesterday', 'right' => 'kemarin'],
                ['left' => 'last night', 'right' => 'semalam'],
                ['left' => 'two days ago', 'right' => 'dua hari yang lalu'],
                ['left' => 'last month', 'right' => 'bulan lalu'],
                ['left' => 'this morning', 'right' => 'pagi tadi'],
            ],
            'explanation' => 'Semua ungkapan ini merujuk pada waktu yang sudah lewat, sehingga biasanya dijawab dengan bentuk simple past.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'We visited the museum last Sunday.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'We visited the museum last Sunday.',
                'We visited the market last Sunday.',
                'We visit the museum every Sunday.',
                'We visited the museum last Saturday.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>visited the museum last Sunday</em>, bukan <em>market</em>, <em>every Sunday</em>, atau <em>Saturday</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'My brother bought a new bicycle last month.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;My brother ___ a new bicycle last month.&rdquo;',
            'answer' => 'bought',
            'accepted' => ['bought'],
            'explanation' => 'Kalimat yang terdengar: <em>My brother bought a new bicycle last month</em> (Saudaraku membeli sepeda baru bulan lalu).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Last holiday, Rani and her family went to Yogyakarta. They stayed there for four days. On the first day, they visited the palace. On the second day, they went to the beach and ate grilled fish. It was delicious. On the last day, they bought gifts for their relatives at the market. Rani was very happy because the trip was fun.</p></div><p>What did Rani&rsquo;s family buy on the last day?</p>',
            'options' => [
                'A new bicycle.',
                'Gifts for their relatives.',
                'Some grilled fish.',
                'Tickets to the palace.',
            ],
            'answer' => 1,
            'explanation' => 'Kalimat <em>&ldquo;On the last day, they bought gifts for their relatives at the market&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan kegiatanmu kemarin dengan kalimat berikut.',
            'target' => 'Yesterday, I played football with my friends.',
            'hint' => 'Arti: Kemarin, saya bermain sepak bola bersama teman-temanku.',
            'explanation' => 'Gunakan kata kunci <em>yesterday</em> di awal kalimat dan kata kerja lampau <em>played</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan kegiatanmu semalam dengan kalimat berikut.',
            'target' => 'Last night, I watched a movie with my family.',
            'hint' => 'Arti: Semalam, saya menonton film bersama keluargaku.',
            'explanation' => 'Gunakan <em>last night</em> sebagai penanda waktu dan kata kerja lampau <em>watched</em>.',
        ],
    ],
];
