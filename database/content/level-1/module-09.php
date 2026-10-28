<?php

/**
 * Level 1 — Modul 09: Future Forms
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
    'title' => 'Future Forms',
    'slug' => 'future-forms',
    'subtitle' => 'Will vs be going to untuk kegiatan masa depan',
    'summary' => 'Belajar menyatakan masa depan dengan will dan be going to, memahami kapan masing-masing dipakai, serta mengenal present continuous untuk jadwal tetap.',
    'icon' => '🔮',
    'objectives' => [
        'Membentuk kalimat dengan will + verb dasar',
        'Membentuk kalimat dengan am/is/are going to + verb dasar',
        'Membedakan penggunaan will dan be going to',
        'Menggunakan kata kunci masa depan seperti tomorrow, next week, dan soon',
    ],
    'sections' => [
        [
            'heading' => 'Will: Keputusan Spontan, Janji, dan Prediksi',
            'body' => '<p><strong>Will</strong> dipakai untuk menyatakan masa depan tanpa merencanakannya terlebih dahulu, yaitu untuk:</p>
<ul>
<li><strong>Keputusan spontan</strong> saat itu juga: <em>The phone is ringing. I will answer it.</em> (Telepon berbunyi. Saya akan mengangkatnya.)</li>
<li><strong>Janji dan tawaran</strong>: <em>I will help you with your homework.</em> (Saya akan membantumu mengerjakan pekerjaan rumah.)</li>
<li><strong>Prediksi</strong> berdasarkan perasaan atau pendapat: <em>I think it will rain tomorrow.</em> (Saya pikir besok akan hujan.)</li>
</ul>
<p>Rumusnya: <strong>Subject + will + verb dasar</strong>. Bentuk negatifnya: <strong>will not (won&rsquo;t)</strong>. Bentuk tanyanya: <strong>Will + subject + verb dasar ...?</strong></p>',
            'examples' => [
                ['en' => 'Don&rsquo;t worry. I will help you.', 'id' => 'Jangan khawatir. Saya akan membantumu.'],
                ['en' => 'I think the bus will arrive soon.', 'id' => 'Saya pikir bus akan segera tiba.'],
                ['en' => 'I promise I will come to your party.', 'id' => 'Saya berjanji saya akan datang ke pesta-mu.'],
                ['en' => 'Will you open the window, please?', 'id' => 'Apakah kamu mau membuka jendela, tolong?'],
            ],
        ],
        [
            'heading' => 'Be Going To: Rencana dan Prediksi Berbukti',
            'body' => '<p><strong>Be going to</strong> dipakai untuk:</p>
<ul>
<li><strong>Rencana</strong> yang sudah dipikirkan sebelumnya: <em>I am going to visit my cousin tomorrow.</em> (Saya akan mengunjungi sepupuku besok.)</li>
<li><strong>Prediksi</strong> berdasarkan bukti di sekitar kita: <em>Look at the dark clouds! It is going to rain.</em> (Lihat awan gelap itu! Akan turun hujan.)</li>
</ul>
<p>Rumusnya: <strong>Subject + am/is/are going to + verb dasar</strong>. Perhatikan penggunaan <em>am</em> untuk <em>I</em>, <em>is</em> untuk subjek tunggal, dan <em>are</em> untuk subjek jamak.</p>',
            'examples' => [
                ['en' => 'We are going to have a test next week.', 'id' => 'Kami akan memiliki ujian minggu depan.'],
                ['en' => 'She is going to learn to cook this summer.', 'id' => 'Dia akan belajar memasak musim panas ini.'],
                ['en' => 'Look at that bird! It is going to fly away.', 'id' => 'Lihat burung itu! Burung itu akan terbang menjauh.'],
                ['en' => 'I am going to buy a new phone next month.', 'id' => 'Saya akan membeli ponsel baru bulan depan.'],
            ],
        ],
        [
            'heading' => 'Membandingkan Will dan Be Going To',
            'body' => '<p>Pilihan antara <em>will</em> dan <em>be going to</em> tergantung pada <strong>situasinya</strong>, bukan hanya pada waktu kejadian.</p>
<table>
<thead><tr><th>Situasi</th><th>Will</th><th>Be going to</th></tr></thead>
<tbody>
<tr><td>Keputusan mendadak</td><td>I will answer the phone.</td><td>&mdash;</td></tr>
<tr><td>Rencana yang sudah disiapkan</td><td>&mdash;</td><td>We are going to have a party next week.</td></tr>
<tr><td>Prediksi tanpa bukti</td><td>I think she will pass the test.</td><td>&mdash;</td></tr>
<tr><td>Prediksi dengan bukti sekarang</td><td>&mdash;</td><td>Look! The balloon is going to explode.</td></tr>
</tbody>
</table>
<p>Perhatikan bahwa keduanya sama-sama menyatakan masa depan; yang membedakan adalah alasan pemakaiannya.</p>',
            'examples' => [
                ['en' => 'Don&rsquo;t worry. I think the bus will come soon.', 'id' => 'Jangan khawatir. Saya pikir bus akan segera datang.'],
                ['en' => 'The tickets are ready. We are going to watch the concert tonight.', 'id' => 'Tiketnya sudah siap. Kami akan menonton konser malam ini.'],
            ],
        ],
        [
            'heading' => 'Kata Kunci Waktu Depan',
            'body' => '<p>Kata kunci berikut menunjukkan waktu di masa depan dan sering muncul bersama <em>will</em> maupun <em>be going to</em>:</p>
<ul>
<li><strong>tomorrow</strong> (besok), <strong>tonight</strong> (malam ini), <strong>later</strong> (nanti)</li>
<li><strong>next week / month / year</strong> (minggu / bulan / tahun depan)</li>
<li><strong>soon</strong> (segera), <strong>in two days</strong> (dalam dua hari)</li>
</ul>
<p>Jika kamu merencanakan sesuatu sekarang untuk waktu tersebut, gunakan <em>be going to</em>; jika memutuskannya saat itu juga, gunakan <em>will</em>.</p>',
            'examples' => [
                ['en' => 'I am going to visit Bali next year.', 'id' => 'Saya akan mengunjungi Bali tahun depan.'],
                ['en' => 'She will call you later.', 'id' => 'Dia akan meneleponmu nanti.'],
                ['en' => 'We are going to clean the house tomorrow morning.', 'id' => 'Kami akan membersihkan rumah besok pagi.'],
            ],
        ],
        [
            'heading' => 'Present Continuous untuk Jadwal Tetap',
            'body' => '<p>Selain <em>will</em> dan <em>be going to</em>, bahasa Inggris juga sering memakai <strong>present continuous</strong> untuk jadwal yang sudah pasti dan sudah disepakati, misalnya jadwal kereta, pesawat, atau pertemuan.</p>
<ul>
<li>I <strong>am meeting</strong> my teacher at 3 p.m. tomorrow. (Saya akan bertemu guruku pukul 3 sore besok.)</li>
<li>The train <strong>is leaving</strong> at 7 a.m. (Kereta berangkat pukul 7 pagi sesuai jadwal.)</li>
</ul>
<p>Untuk jadwal resmi seperti keberangkatan pesawat dan kereta, penutur asli lebih sering memakai present continuous atau simple present, bukan <em>will</em>.</p>',
            'examples' => [
                ['en' => 'I am playing badminton with Andi this afternoon.', 'id' => 'Saya akan bermain badminton dengan Andi sore ini.'],
                ['en' => 'Our class is starting at eight tomorrow.', 'id' => 'Kelas kami dimulai pukul delapan besok.'],
                ['en' => 'The plane is taking off at ten tonight.', 'id' => 'Pesawat lepas landas pukul sepuluh malam ini.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'tomorrow', 'phonetic' => '/təˈmɒrəʊ/', 'meaning' => 'besok', 'example' => 'I will visit my cousin tomorrow.'],
        ['word' => 'next week', 'phonetic' => '/nekst wiːk/', 'meaning' => 'minggu depan', 'example' => 'We are going to have a test next week.'],
        ['word' => 'soon', 'phonetic' => '/suːn/', 'meaning' => 'segera', 'example' => 'The bus will arrive soon.'],
        ['word' => 'later', 'phonetic' => '/ˈleɪtər/', 'meaning' => 'nanti', 'example' => 'I will call you later.'],
        ['word' => 'tonight', 'phonetic' => '/təˈnaɪt/', 'meaning' => 'malam ini', 'example' => 'We are going to watch a film tonight.'],
        ['word' => 'plan', 'phonetic' => '/plæn/', 'meaning' => 'rencana', 'example' => 'My plan is to learn English every day.'],
        ['word' => 'promise', 'phonetic' => '/ˈprɒmɪs/', 'meaning' => 'janji / berjanji', 'example' => 'I promise to help you tomorrow.'],
        ['word' => 'decide', 'phonetic' => '/dɪˈsaɪd/', 'meaning' => 'memutuskan', 'example' => 'She will decide after the meeting.'],
        ['word' => 'weather', 'phonetic' => '/ˈweðər/', 'meaning' => 'cuaca', 'example' => 'It is going to rain; look at the dark clouds.'],
        ['word' => 'probably', 'phonetic' => '/ˈprɒbəbli/', 'meaning' => 'mungkin / kemungkinan besar', 'example' => 'He will probably come late.'],
        ['word' => 'holiday', 'phonetic' => '/ˈhɒlədeɪ/', 'meaning' => 'hari libur / liburan', 'example' => 'They are going to Bali for the holiday.'],
        ['word' => 'invite', 'phonetic' => '/ɪnˈvaɪt/', 'meaning' => 'mengundang', 'example' => 'I will invite my friends to the party.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Look at the dark clouds! It ___ rain.',
            'options' => ['will', 'is going to', 'was', 'would'],
            'answer' => 1,
            'explanation' => 'Ada bukti di sekitar kita, yaitu awan gelap, sehingga prediksi menggunakan <em>be going to</em>: <em>It is going to rain</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'A: I don&rsquo;t have an umbrella. B: Don&rsquo;t worry. I ___ you with mine.',
            'options' => ['help', 'am helping', 'will help', 'helped'],
            'answer' => 2,
            'explanation' => 'Jawaban B adalah keputusan spontan pada saat itu juga, sehingga menggunakan <em>will</em>: <em>I will help you with mine</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'We ___ my grandparents next Sunday. We bought the tickets yesterday.',
            'options' => ['will visit', 'are going to visit', 'visit', 'visited'],
            'answer' => 1,
            'explanation' => 'Tiket sudah dibeli, artinya ini rencana yang sudah disiapkan, sehingga tepat menggunakan <em>be going to</em>: <em>are going to visit</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'We ___ have a big party next month. My mother has already ordered the food.',
            'options' => ['will have', 'am going to have', 'are going to have', 'was going to have'],
            'answer' => 2,
            'explanation' => 'Makanan sudah dipesan, artinya ini rencana yang sudah disiapkan. Subjek <em>we</em> menggunakan <em>are going to</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Besok saya akan pergi ke sekolah bersama saudaraku. Lengkapi dengan <em>will</em>: Tomorrow, I ___ go to school with my brother.',
            'answer' => 'will',
            'accepted' => ['will'],
            'explanation' => 'Rumus masa depan dengan <em>will</em>: <em>subject + will + verb dasar</em>, sehingga jawabannya adalah <em>will</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'The phone is ringing! OK, I ___ (answer) it now.',
            'answer' => 'will',
            'accepted' => ['will'],
            'explanation' => 'Telepon berbunyi saat itu juga, sehingga termasuk keputusan spontan yang menggunakan <em>will</em>: <em>I will answer it</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Tulis bentuk negatif dari &ldquo;It will rain tomorrow&rdquo;: It ___ rain tomorrow.',
            'answer' => "won't",
            'accepted' => ["won't", 'will not'],
            'explanation' => 'Bentuk negatif <em>will</em> adalah <em>will not</em> yang sering dipendekan menjadi <em>won&rsquo;t</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;I am going to buy a new phone&rdquo; menyatakan rencana yang sudah dipikirkan sebelumnya.',
            'answer' => true,
            'explanation' => '<em>Be going to</em> dipakai untuk rencana yang sudah dipikirkan sebelumnya, sehingga pernyataan ini benar.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kata &ldquo;will&rdquo; selalu tepat digunakan untuk semua situasi masa depan.',
            'answer' => false,
            'explanation' => '<em>Will</em> dipakai untuk keputusan spontan, janji, dan prediksi tanpa bukti. Untuk rencana yang sudah disiapkan, gunakan <em>be going to</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata kunci waktu depan berikut dengan artinya.',
            'pairs' => [
                ['left' => 'tomorrow', 'right' => 'besok'],
                ['left' => 'next week', 'right' => 'minggu depan'],
                ['left' => 'tonight', 'right' => 'malam ini'],
                ['left' => 'soon', 'right' => 'segera'],
                ['left' => 'in two days', 'right' => 'dalam dua hari'],
            ],
            'explanation' => 'Semua ungkapan ini merujuk pada waktu di masa depan dan sering dipakai bersama <em>will</em> maupun <em>be going to</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'We are going to visit Bali next month.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'We are going to visit Bali next month.',
                'We are going to visit Bali next year.',
                'We will visit Bali next month.',
                'We went to Bali last month.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat yang terdengar memakai <em>are going to visit</em> dan waktu <em>next month</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => "The plane will arrive at ten o'clock tonight.",
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;The plane ___ arrive at ten o&rsquo;clock tonight.&rdquo;',
            'answer' => 'will',
            'accepted' => ['will'],
            'explanation' => 'Kalimat yang terdengar: <em>The plane will arrive at ten o&rsquo;clock tonight</em> (Pesawat akan tiba pukul sepuluh malam ini).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Today is Friday. On Sunday, the students of Class 7A are going to have a farewell party for their teacher, Mr. Anton. They are going to meet at the school hall at nine in the morning. Dina will bring the cake because she likes baking. Rudi will bring drinks and some games. They are also going to take photos together. Everyone is excited about the party.</p></div><p>What is Dina going to bring to the party?</p>',
            'options' => [
                'Some drinks.',
                'Some games.',
                'A cake.',
                'A camera.',
            ],
            'answer' => 2,
            'explanation' => 'Kalimat <em>&ldquo;Dina will bring the cake because she likes baking&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Katakan rencanamu besok dengan kalimat berikut.',
            'target' => 'I am going to visit my friend tomorrow.',
            'hint' => 'Arti: Saya akan mengunjungi temanku besok.',
            'explanation' => 'Rencana yang sudah dipikirkan menggunakan <em>be going to</em>: <em>I am going to + verb dasar</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan prediksimu tentang cuaca besok dengan kalimat berikut.',
            'target' => 'I think it will be sunny tomorrow.',
            'hint' => 'Arti: Saya pikir besok cuacanya akan cerah.',
            'explanation' => 'Prediksi tanpa bukti menggunakan <em>will</em>; kata <em>I think</em> sering mendahului prediksi semacam ini.',
        ],
    ],
];
