<?php

/**
 * Level 1 — Modul 03: To Be
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
    'title' => 'To Be',
    'slug' => 'to-be',
    'subtitle' => 'Am, is, are, was, were (positif, negatif, tanya)',
    'summary' => 'Pelajari kata kerja to be (am, is, are) beserta bentuk lampau (was, were) dalam kalimat positif, negatif, dan tanya.',
    'icon' => '🪪',
    'objectives' => [
        'Memilih am, is, atau are sesuai subjek',
        'Membentuk kalimat negatif dengan to be',
        'Membentuk kalimat tanya dengan to be dan jawaban pendeknya',
        'Menggunakan was dan were untuk kejadian lampau',
    ],
    'sections' => [
        [
            'heading' => 'Bentuk To Be Sekarang (Present)',
            'body' => '<p>Kata kerja <strong>to be</strong> memiliki tiga bentuk untuk waktu sekarang: <em>am, is, are</em>. Bentuknya bergantung pada subjek.</p>
<table>
<thead><tr><th>Subjek</th><th>To Be</th><th>Kontraksi</th></tr></thead>
<tbody>
<tr><td>I</td><td>am</td><td>I\'m</td></tr>
<tr><td>you / we / they</td><td>are</td><td>you\'re / we\'re / they\'re</td></tr>
<tr><td>he / she / it</td><td>is</td><td>he\'s / she\'s / it\'s</td></tr>
</tbody>
</table>
<p>Ingat: <strong>am</strong> hanya dipakai bersama <em>I</em>. Tidak ada bentuk <em>am</em> untuk subjek lain.</p>',
            'examples' => [
                ['en' => 'I am a student.', 'id' => 'Saya seorang pelajar.'],
                ['en' => 'She is a teacher.', 'id' => 'Dia seorang guru.'],
                ['en' => 'They are my friends.', 'id' => 'Mereka teman-temanku.'],
                ['en' => 'We are ready for the class.', 'id' => 'Kami siap untuk kelas.'],
            ],
        ],
        [
            'heading' => 'Kalimat Positif dengan To Be',
            'body' => '<p>Pola kalimat positif: <strong>Subjek + to be + pelengkap (komplement)</strong>. Pelengkap bisa berupa kata sifat, kata benda, atau keterangan tempat/waktu.</p>
<table>
<thead><tr><th>Subjek</th><th>To Be</th><th>Pelengkap</th></tr></thead>
<tbody>
<tr><td>I</td><td>am</td><td>happy today.</td></tr>
<tr><td>He</td><td>is</td><td>a doctor.</td></tr>
<tr><td>You</td><td>are</td><td>at home.</td></tr>
<tr><td>They</td><td>are</td><td>tired.</td></tr>
</tbody>
</table>
<p>To be berfungsi sebagai penghubung antara subjek dan pelengkap, sehingga setelah to be <strong>tidak boleh diletakkan kata kerja lain</strong>: <em>She is work</em> &times; &rarr; yang benar <strong>She works</strong> (dia bekerja) atau <strong>She is a teacher</strong> (dia seorang guru).</p>',
            'examples' => [
                ['en' => 'My mother is from Solo.', 'id' => 'Ibuku berasal dari Solo.'],
                ['en' => 'I am very happy today.', 'id' => 'Saya sangat senang hari ini.'],
                ['en' => 'The children are in the garden.', 'id' => 'Anak-anak itu berada di taman.'],
                ['en' => 'He is at the office now.', 'id' => 'Dia berada di kantor sekarang.'],
            ],
        ],
        [
            'heading' => 'Kalimat Negatif dengan To Be',
            'body' => '<p>Untuk membuat negatif, tambahkan <strong>not</strong> setelah to be. Dalam percakapan biasa dipakai kontraksi.</p>
<table>
<thead><tr><th>Positif</th><th>Negatif</th><th>Kontraksi Negatif</th></tr></thead>
<tbody>
<tr><td>I am tired.</td><td>I am not tired.</td><td>I\'m not tired.</td></tr>
<tr><td>He is busy.</td><td>He is not busy.</td><td>He isn\'t busy.</td></tr>
<tr><td>They are here.</td><td>They are not here.</td><td>They aren\'t here.</td></tr>
</tbody>
</table>
<p>Catatan penting: untuk subjek <em>I</em> yang benar adalah <strong>I am not / I\'m not</strong>. Bentuk <em>I aren\'t</em> tidak ada dalam bahasa Inggris.</p>',
            'examples' => [
                ['en' => 'I am not tired.', 'id' => 'Saya tidak lelah.'],
                ['en' => 'She isn\'t at home right now.', 'id' => 'Dia tidak di rumah sekarang.'],
                ['en' => 'We are not angry with you.', 'id' => 'Kami tidak marah pada kamu.'],
                ['en' => 'It isn\'t difficult.', 'id' => 'Itu tidak sulit.'],
            ],
        ],
        [
            'heading' => 'Kalimat Tanya dengan To Be',
            'body' => '<p>Pola pertanyaan: <strong>To be + subjek + pelengkap + ?</strong>. Kata <em>am/is/are</em> dipindahkan ke <strong>sebelum subjek</strong>. Jawaban pendeknya memakai <em>do</em>? Tidak &mdash; jawaban pendek memakai to be itu sendiri.</p>
<table>
<thead><tr><th>Pertanyaan</th><th>Jawaban Pendek</th></tr></thead>
<tbody>
<tr><td>Am I wrong?</td><td>Yes, you are. / No, you aren\'t.</td></tr>
<tr><td>Is she your friend?</td><td>Yes, she is. / No, she isn\'t.</td></tr>
<tr><td>Are they ready?</td><td>Yes, they are. / No, they aren\'t.</td></tr>
</tbody>
</table>
<p>Perhatikan: pada jawaban pendek, kata <em>am/is/are</em> mengikuti <strong>subjek jawaban</strong> (pertanyaan <em>Are you...</em> dijawab dengan <em>Yes, I am</em>).</p>',
            'examples' => [
                ['en' => 'Is your father a doctor?', 'id' => 'Apakah ayahmu seorang dokter?'],
                ['en' => 'Yes, he is.', 'id' => 'Ya, benar.'],
                ['en' => 'Are you ready to go now?', 'id' => 'Apakah kamu siap untuk pergi sekarang?'],
                ['en' => 'No, I\'m not. Please wait a moment.', 'id' => 'Belum. Tolong tunggu sebentar.'],
            ],
        ],
        [
            'heading' => 'To Be Lampau: Was dan Were',
            'body' => '<p>Untuk kejadian <strong>masa lalu</strong>, to be berubah menjadi <strong>was</strong> dan <strong>were</strong>.</p>
<table>
<thead><tr><th>Subjek</th><th>Lampau</th><th>Negatif Lampau</th></tr></thead>
<tbody>
<tr><td>I / he / she / it</td><td>was</td><td>wasn\'t</td></tr>
<tr><td>you / we / they</td><td>were</td><td>weren\'t</td></tr>
</tbody>
</table>
<p>Kata penanda waktu lampau yang sering muncul: <em>yesterday, last week, last year, when I was a child, ago</em>.</p>',
            'examples' => [
                ['en' => 'Yesterday, she was at home.', 'id' => 'Kemarin, dia ada di rumah.'],
                ['en' => 'We were happy at the party.', 'id' => 'Kami senang di pesta itu.'],
                ['en' => 'I was ten years old five years ago.', 'id' => 'Lima tahun lalu saya berusia sepuluh tahun.'],
                ['en' => 'They weren\'t in class last Monday.', 'id' => 'Mereka tidak ada di kelas hari Senin lalu.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'am', 'phonetic' => '/æm/', 'meaning' => 'adalah (to be untuk I)', 'example' => 'I am from Indonesia.'],
        ['word' => 'is', 'phonetic' => '/ɪz/', 'meaning' => 'adalah (to be untuk he/she/it)', 'example' => 'She is a nurse.'],
        ['word' => 'are', 'phonetic' => '/ɑːr/', 'meaning' => 'adalah (to be untuk you/we/they)', 'example' => 'They are my classmates.'],
        ['word' => 'was', 'phonetic' => '/wɒz/', 'meaning' => 'adalah/di (to be lampau untuk I/he/she/it)', 'example' => 'He was at school yesterday.'],
        ['word' => 'were', 'phonetic' => '/wɜːr/', 'meaning' => 'adalah/di (to be lampau untuk you/we/they)', 'example' => 'We were very happy.'],
        ['word' => 'happy', 'phonetic' => '/ˈhæpi/', 'meaning' => 'senang, bahagia', 'example' => 'I am happy today.'],
        ['word' => 'tired', 'phonetic' => '/ˈtaɪərd/', 'meaning' => 'lelah', 'example' => 'She is tired after work.'],
        ['word' => 'hungry', 'phonetic' => '/ˈhʌŋɡri/', 'meaning' => 'lapar', 'example' => 'I am hungry. Let\'s eat.'],
        ['word' => 'ready', 'phonetic' => '/ˈredi/', 'meaning' => 'siap', 'example' => 'Are you ready to go?'],
        ['word' => 'from', 'phonetic' => '/frɒm/', 'meaning' => 'dari', 'example' => 'My friend is from Japan.'],
        ['word' => 'wrong', 'phonetic' => '/rɒŋ/', 'meaning' => 'salah', 'example' => 'Sorry, I was wrong.'],
        ['word' => 'busy', 'phonetic' => '/ˈbɪzi/', 'meaning' => 'sibuk', 'example' => 'My father is busy today.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'She ___ a student.',
            'options' => ['am', 'is', 'are', 'be'],
            'answer' => 1,
            'explanation' => 'Untuk subjek <em>she</em> (orang ketiga tunggal) to be-nya adalah <strong>is</strong>: <em>She is a student.</em>',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'They ___ from Indonesia.',
            'options' => ['am', 'is', 'are', 'be'],
            'answer' => 2,
            'explanation' => 'Subjek <em>they</em> (jamak) menggunakan <strong>are</strong>: <em>They are from Indonesia.</em>',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'I ___ tired today, so I want to rest.',
            'options' => ['am not', 'is not', 'are not', 'not'],
            'answer' => 0,
            'explanation' => 'Negatif untuk subjek <em>I</em> adalah <strong>am not</strong> (<em>I am not tired</em>). Bentuk <em>I\'m not</em> juga benar sebagai kontraksi.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ your father a teacher?',
            'options' => ['Am', 'Is', 'Are', 'Do'],
            'answer' => 1,
            'explanation' => 'Pertanyaan dengan to be diawali am/is/are. Subjek <em>your father</em> adalah orang ketiga tunggal, jadi memakai <strong>Is your father a teacher?</strong>',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My name ___ Andi.',
            'answer' => 'is',
            'accepted' => ['is'],
            'explanation' => '<em>My name</em> adalah benda tunggal (orang ketiga), sehingga to be-nya adalah <strong>is</strong>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Yesterday, she ___ at home, but now she is at school.',
            'answer' => 'was',
            'accepted' => ['was'],
            'explanation' => '<em>Yesterday</em> menunjukkan waktu lampau, dan untuk subjek <em>she</em> to be lampaunya adalah <strong>was</strong>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'We ___ good friends when we were children.',
            'answer' => 'were',
            'accepted' => ['were'],
            'explanation' => 'Untuk subjek <em>we</em> pada waktu lampau memakai <strong>were</strong>: <em>We were good friends</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => '___ you ready to go now?',
            'answer' => 'Are',
            'accepted' => ['are'],
            'explanation' => 'Pertanyaan memindahkan to be ke depan subjek. Untuk subjek <em>you</em> memakai <strong>Are</strong>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat "I am not happy" adalah bentuk negatif dari to be pada subjek I.',
            'answer' => true,
            'explanation' => 'Bentuk negatif dibuat dengan menambahkan <em>not</em> setelah to be. Untuk subjek I: <strong>I am not happy</strong> (kontraksi: <em>I\'m not happy</em>).',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Bentuk kontraksi negatif untuk subjek I adalah "I aren\'t".',
            'answer' => false,
            'explanation' => 'Bentuk <em>I aren\'t</em> tidak ada. Kontraksi negatif untuk subjek I adalah <strong>I\'m not</strong>, sedangkan <em>aren\'t</em> dipakai untuk you/we/they.',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan kalimat bahasa Inggris dengan artinya.',
            'pairs' => [
                ['left' => 'I am from Indonesia', 'right' => 'Saya berasal dari Indonesia'],
                ['left' => 'She is a nurse', 'right' => 'Dia seorang perawat'],
                ['left' => 'They are ready', 'right' => 'Mereka sudah siap'],
                ['left' => 'He was at home', 'right' => 'Dia (laki-laki) tadi di rumah'],
                ['left' => 'We were happy', 'right' => 'Kami waktu itu senang'],
            ],
            'explanation' => 'To be mengikuti subjek: <em>am</em> untuk I, <em>is</em> untuk he/she/it, <em>are</em> untuk you/we/they; untuk lampau memakai <em>was</em> (I/he/she/it) dan <em>were</em> (you/we/they).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'I am from Jakarta.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'I am from Jakarta.',
                'I am from Surabaya.',
                'He is from Jakarta.',
                'I am not from Jakarta.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>I am from Jakarta</em>: subjeknya <em>I</em>, tanpa <em>not</em>, dan kotanya Jakarta.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Hello, my name is Sari. I am a student in grade seven. My brother, Rudi, is a teacher. We are from Yogyakarta. Last year, we were in Bali for our holiday. We were very happy there.</p></div><p>Di mana Sari dan Rudi pergi liburan tahun lalu?</p>',
            'options' => ['Bali', 'Jakarta', 'Yogyakarta', 'Surabaya'],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;Last year, we were in Bali for our holiday&rdquo;</em> menunjukkan mereka berlibur ke Bali. Yogyakarta adalah kampung halaman mereka.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk memperkenalkan diri.',
            'target' => 'I am from Indonesia and I am a student.',
            'hint' => 'Arti: Saya berasal dari Indonesia dan saya seorang pelajar.',
            'explanation' => 'Subjek <em>I</em> selalu memakai <strong>am</strong> dalam waktu sekarang.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat ini untuk menjelaskan tentang sahabatmu.',
            'target' => 'She is my best friend and she is very kind.',
            'hint' => 'Arti: Dia sahabat baikku dan dia sangat baik.',
            'explanation' => 'Untuk subjek <em>she</em> gunakan <strong>is</strong>, baik untuk menyatakan identitas maupun sifat.',
        ],
    ],
];
