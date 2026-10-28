<?php

/**
 * Level 2 — Modul 02: Present Perfect
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
    'title' => 'Present Perfect',
    'slug' => 'present-perfect',
    'subtitle' => 'Pengalaman, hasil, dan perubahan (since/for, ever/never/already/yet)',
    'summary' => 'Belajar present perfect untuk berbicara tentang pengalaman, hasil yang masih berlaku, dan perubahan, termasuk perbedaan since dan for serta pemakaian ever, never, already, yet, dan just.',
    'icon' => '✨',
    'objectives' => [
        'Membentuk present perfect: have/has + past participle',
        'Menceritakan pengalaman tanpa menyebutkan waktu spesifik',
        'Membedakan sejak kapan (since) dan berapa lama (for)',
        'Membedakan present perfect dari simple past dalam konteks nyata',
    ],
    'sections' => [
        [
            'heading' => 'Bentuk dan Fungsi Present Perfect',
            'body' => '<p>Present perfect dibentuk dari <strong>have/has + V3 (past participle)</strong>. <em>Have</em> dipakai untuk I, you, we, they; <em>has</em> untuk he, she, it. Tense ini menghubungkan masa lalu dengan <strong>situasi sekarang</strong>.</p>
<table>
<thead><tr><th>Aspek</th><th>Rumus</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Pernyataan</td><td>S + have/has + V3</td><td>She has finished her work.</td></tr>
<tr><td>Negasi</td><td>S + have/has not + V3</td><td>I haven\'t seen the film yet.</td></tr>
<tr><td>Pertanyaan</td><td>Have/Has + S + V3?</td><td>Have you ever been to Japan?</td></tr>
</tbody>
</table>
<p>Tiga fungsi utamanya: <strong>pengalaman</strong> (pernah melakukan sesuatu dalam hidup), <strong>hasil</strong> (akibat yang masih terasa sekarang), dan <strong>perubahan</strong> yang terjadi sampai titik ini.</p>',
            'examples' => [
                ['en' => 'I have finished my homework, so I can go out now.', 'id' => 'Saya sudah menyelesaikan pekerjaan rumah, jadi saya bisa keluar sekarang.'],
                ['en' => 'She has never been to Japan.', 'id' => 'Dia belum pernah ke Jepang.'],
                ['en' => 'Have you ever tried Indonesian food?', 'id' => 'Pernahkah kamu mencoba makanan Indonesia?'],
                ['en' => 'He hasn\'t replied to my email yet.', 'id' => 'Dia belum membalas email saya.'],
            ],
        ],
        [
            'heading' => 'Since vs For',
            'body' => '<p>Keduanya menjawab pertanyaan <em>how long?</em> (sejak kapan / berapa lama), tetapi cara pemakaiannya berbeda.</p>
<table>
<thead><tr><th>Kata</th><th>Makna</th><th>Diikuti</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>since</td><td>sejak (titik awal)</td><td>waktu mulai</td><td>since 2020, since Monday, since I was ten</td></tr>
<tr><td>for</td><td>selama (durasi)</td><td>panjang waktu</td><td>for three years, for a long time, for ten minutes</td></tr>
</tbody>
</table>
<p>Untuk jangka waktu yang masih berlanjut sampai sekarang, gunakan present perfect: <em>I have worked here for five years</em> (dan masih bekerja di sana).</p>',
            'examples' => [
                ['en' => 'We have lived in Jakarta since 2019.', 'id' => 'Kami sudah tinggal di Jakarta sejak 2019.'],
                ['en' => 'I have been learning English for six years.', 'id' => 'Saya sudah belajar bahasa Inggris selama enam tahun.'],
                ['en' => 'She has worked here since she graduated.', 'id' => 'Dia sudah bekerja di sini sejak lulus kuliah.'],
                ['en' => 'They have been waiting for an hour.', 'id' => 'Mereka sudah menunggu selama satu jam.'],
            ],
        ],
        [
            'heading' => 'Ever, Never, Already, Yet, dan Just',
            'body' => '<p>Lima kata ini sangat khas dipakai bersama present perfect. Posisi dan maknanya berbeda-beda.</p>
<table>
<thead><tr><th>Kata</th><th>Makna</th><th>Posisi dan konteks</th></tr></thead>
<tbody>
<tr><td>ever</td><td>pernah</td><td>dalam pertanyaan pengalaman: <em>Have you ever ...?</em></td></tr>
<tr><td>never</td><td>tidak pernah</td><td>dalam pernyataan, menekaskan nol pengalaman</td></tr>
<tr><td>already</td><td>sudah</td><td>pernyataan, di antara have/has dan V3</td></tr>
<tr><td>yet</td><td>belum / sudah</td><td>negatif dan pertanyaan, diletakkan di akhir kalimat</td></tr>
<tr><td>just</td><td>baru saja</td><td>di antara have/has dan V3</td></tr>
</tbody>
</table>
<p><em>Never</em> bersifat sangat kuat, jadi kalimat <em>I have never eaten snake</em> sama artinya dengan <em>I haven\'t ever eaten snake</em>, tetapi terdengar lebih tegas.</p>',
            'examples' => [
                ['en' => 'Have you ever seen snow?', 'id' => 'Pernahkah kamu melihat salju?'],
                ['en' => 'I have never eaten snake.', 'id' => 'Saya belum pernah makan ular.'],
                ['en' => 'The bus has already left.', 'id' => 'Busnya sudah berangkat.'],
                ['en' => 'She hasn\'t arrived yet.', 'id' => 'Dia belum tiba.'],
                ['en' => 'We have just ordered our food.', 'id' => 'Kami baru saja memesan makanan.'],
            ],
        ],
        [
            'heading' => 'Present Perfect vs Simple Past',
            'body' => '<p>Perbedaan terpenting adalah <strong>penyebutan waktu</strong>. Simple past dipakai bila waktu lampaunya disebutkan dan sudah selesai, sedangkan present perfect dipakai bila waktunya tidak penting, tidak disebutkan, atau masih relevan dengan sekarang.</p>
<table>
<thead><tr><th>Situasi</th><th>Tense</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Waktu lampau spesifik (yesterday, in 2018, ago)</td><td>Simple past</td><td>I lost my key yesterday.</td></tr>
<tr><td>Pengalaman tanpa waktu / hasil masih berlaku</td><td>Present perfect</td><td>I have lost my key. (masih belum ketemu)</td></tr>
<tr><td>Jumlah pengalaman seumur hidup</td><td>Present perfect</td><td>I have seen that film twice.</td></tr>
</tbody>
</table>
<p>Ingat aturan praktisnya: keterangan waktu lampau seperti <em>yesterday</em>, <em>last week</em>, dan <em>three days ago</em> <strong>tidak boleh</strong> dipakai bersama present perfect.</p>',
            'examples' => [
                ['en' => 'I have seen that film twice, but I saw it first in 2018.', 'id' => 'Saya pernah menonton film itu dua kali, tetapi pertama kali pada 2018.'],
                ['en' => 'She has gone to the market.', 'id' => 'Dia sudah pergi ke pasar. (dan belum kembali)'],
                ['en' => 'She went to the market an hour ago.', 'id' => 'Dia pergi ke pasar satu jam yang lalu.'],
                ['en' => 'I met him at university in 2015.', 'id' => 'Saya bertemu dengannya di kampus pada 2015.'],
            ],
        ],
        [
            'heading' => 'Kata Kerja Tidak Beraturan: Bentuk V3',
            'body' => '<p>Present perfect selalu membutuhkan bentuk ketiga kata kerja (V3). Banyak kata kerja umum berubah bentuk secara penuh, sehingga perlu dihafal bersama bentuk lampau (V2)-nya.</p>
<table>
<thead><tr><th>V1</th><th>V2 (lampau)</th><th>V3 (participle)</th></tr></thead>
<tbody>
<tr><td>go</td><td>went</td><td>gone</td></tr>
<tr><td>see</td><td>saw</td><td>seen</td></tr>
<tr><td>write</td><td>wrote</td><td>written</td></tr>
<tr><td>eat</td><td>ate</td><td>eaten</td></tr>
<tr><td>break</td><td>broke</td><td>broken</td></tr>
<tr><td>lose</td><td>lost</td><td>lost</td></tr>
</tbody>
</table>
<p>Kata kerja beraturan menambahkan <em>-ed</em>, misalnya <em>finish &rarr; finished</em> dan <em>work &rarr; worked</em>.</p>',
            'examples' => [
                ['en' => 'I have written three emails this morning.', 'id' => 'Saya sudah menulis tiga email pagi ini.'],
                ['en' => 'She has broken her arm.', 'id' => 'Dia patah lengannya.'],
                ['en' => 'They have gone home.', 'id' => 'Mereka sudah pulang.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'experience', 'phonetic' => '/ɪkˈspɪəriəns/', 'meaning' => 'pengalaman', 'example' => 'I had an amazing experience in Bali.'],
        ['word' => 'abroad', 'phonetic' => '/əˈbrɔːd/', 'meaning' => 'di luar negeri', 'example' => 'She has worked abroad for two years.'],
        ['word' => 'so far', 'phonetic' => '/səʊ fɑːr/', 'meaning' => 'sejauh ini', 'example' => 'We have sold two hundred tickets so far.'],
        ['word' => 'already', 'phonetic' => '/ɔːlˈredi/', 'meaning' => 'sudah', 'example' => 'The train has already gone.'],
        ['word' => 'yet', 'phonetic' => '/jet/', 'meaning' => 'belum (dalam kalimat negatif/pertanyaan)', 'example' => 'I haven\'t finished yet.'],
        ['word' => 'just', 'phonetic' => '/dʒʌst/', 'meaning' => 'baru saja', 'example' => 'I have just arrived.'],
        ['word' => 'ever', 'phonetic' => '/ˈevər/', 'meaning' => 'pernah', 'example' => 'Have you ever been to London?'],
        ['word' => 'never', 'phonetic' => '/ˈnevər/', 'meaning' => 'tidak pernah', 'example' => 'I have never tried sushi.'],
        ['word' => 'since', 'phonetic' => '/sɪns/', 'meaning' => 'sejak (titik waktu mulai)', 'example' => 'I have known her since school.'],
        ['word' => 'for', 'phonetic' => '/fɔːr/', 'meaning' => 'selama (durasi waktu)', 'example' => 'We have been friends for ten years.'],
        ['word' => 'reply', 'phonetic' => '/rɪˈplaɪ/', 'meaning' => 'membalas (surat atau pesan)', 'example' => 'She hasn\'t replied to my message.'],
        ['word' => 'recently', 'phonetic' => '/ˈriːsntli/', 'meaning' => 'baru-baru ini', 'example' => 'Have you spoken to him recently?'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'I ___ in Surabaya since 2021.',
            'options' => ['live', 'lived', 'have lived', 'am living'],
            'answer' => 2,
            'explanation' => '<em>Since 2021</em> menunjukkan titik awal yang masih berlanjut sampai sekarang, sehingga wajib memakai present perfect: <em>have lived</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ you ever eaten durian?',
            'options' => ['Did', 'Do', 'Have', 'Are'],
            'answer' => 2,
            'explanation' => 'Pertanyaan tentang pengalaman seumur hidup dengan <em>ever</em> memakai present perfect: <em>Have you ever ...?</em>',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'She ___ her keys, so she cannot get into the house right now.',
            'options' => ['lost', 'has lost', 'loses', 'is losing'],
            'answer' => 1,
            'explanation' => 'Kejadiannya di masa lalu, tetapi akibatnya masih terasa sekarang (masih tidak bisa membuka pintu), sehingga tepat memakai present perfect <em>has lost</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'My brother joined the company in 2019, so he ___ at this company for more than five years.',
            'options' => ['worked', 'has worked', 'is working', 'works'],
            'answer' => 1,
            'explanation' => 'Pekerjaan dimulai di masa lalu dan masih berlanjut; dengan durasi <em>for more than five years</em> dipakai present perfect: <em>has worked</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>We have lived in this city ___ 2018.</strong>',
            'answer' => 'since',
            'accepted' => ['since'],
            'explanation' => '<em>2018</em> adalah titik awal, bukan durasi, sehingga jawabannya <em>since</em>. Kalau durasinya misalnya <em>seven years</em>, yang dipakai adalah <em>for</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>I have been learning English ___ five years.</strong>',
            'answer' => 'for',
            'accepted' => ['for'],
            'explanation' => '<em>Five years</em> adalah panjang durasi waktu, sehingga dipakai <em>for</em>. Titik waktu mulai (misalnya <em>since 2021</em>) memakai <em>since</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi pertanyaan berikut: <strong>___ you ever been to Paris?</strong>',
            'answer' => 'have',
            'accepted' => ['have'],
            'explanation' => 'Pertanyaan pengalaman dengan <em>ever</em> dibentuk dari <em>have/has + S + ever + V3</em>, sehingga jawabannya <em>Have you ever been to Paris?</em>',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi kalimat: <strong>She hasn\'t replied to my email ___. (belum)</strong>',
            'answer' => 'yet',
            'accepted' => ['yet'],
            'explanation' => '<em>Yet</em> berarti &ldquo;belum&rdquo; dalam kalimat negatif dan pertanyaan, dan selalu diletakkan di akhir kalimat.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi bagian pembuka email: <strong>&ldquo;Dear Mr. Brown, I ___ (receive) your application and would like to invite you for an interview.&rdquo;</strong>',
            'answer' => 'have received',
            'accepted' => ['have received', 'i have received'],
            'explanation' => 'Email ini mengabarkan hasil yang baru terjadi dan masih relevan, sehingga memakai present perfect: <em>I have received your application</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;I have seen him yesterday&rdquo; sudah benar karena pengalaman itu penting, bukan waktunya.',
            'answer' => false,
            'explanation' => 'Salah. <em>Yesterday</em> adalah waktu lampau spesifik, sehingga kalimatnya harus <em>I saw him yesterday</em>. Present perfect tidak dipakai bersama keterangan waktu lampau.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Present perfect dipakai untuk pengalaman hidup tanpa menyebutkan waktu spesifik, misalnya &ldquo;I have never been to Japan&rdquo;.',
            'answer' => true,
            'explanation' => 'Benar. Pengalaman seumur hidup tidak terikat waktu tertentu, jadi memakai present perfect; waktunya baru disebut bila memakai simple past (<em>I went to Japan in 2019</em>).',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan frasa khas present perfect dengan artinya.',
            'pairs' => [
                ['left' => 'so far', 'right' => 'sejauh ini'],
                ['left' => 'already', 'right' => 'sudah'],
                ['left' => 'yet', 'right' => 'belum'],
                ['left' => 'just', 'right' => 'baru saja'],
                ['left' => 'never', 'right' => 'tidak pernah'],
            ],
            'explanation' => 'Kelima frasa ini sering muncul bersama present perfect: <em>already</em> dan <em>just</em> untuk pernyataan, <em>yet</em> untuk negatif/pertanyaan, dan <em>never</em> untuk nol pengalaman.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'She has already sent the report to the manager.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'She has already sent the report to the manager.',
                'She will send the report to the manager tomorrow.',
                'She sent the report to the manager yesterday.',
                'She hasn\'t sent the report to the manager yet.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>has already sent</em> (sudah mengirim), bukan rencana <em>will send</em>, kejadian lampau <em>sent ... yesterday</em>, atau kalimat negatif <em>hasn\'t sent ... yet</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan pengalamanmu dengan kalimat berikut.',
            'target' => 'I have visited Bali twice, and I would love to go back one day.',
            'hint' => 'Arti: Saya pernah mengunjungi Bali dua kali, dan suatu saat saya ingin kembali ke sana.',
            'explanation' => 'Jumlah pengalaman seumur hidup (<em>twice</em>) dipakai bersama present perfect, bukan simple past, karena waktunya tidak disebutkan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Carlos left home five years ago. Since then, he has worked in three different countries and has learned two new languages. He has never regretted his decision, although he admits that he misses his family. So far, he has written more than fifty articles about his travels.</p></div><p>How long has Carlos been away from home?</p>',
            'options' => ['Two years', 'Three years', 'Five years', 'Fifty years'],
            'answer' => 2,
            'explanation' => 'Kalimat pertama menyebut <em>&ldquo;Carlos left home five years ago&rdquo;</em>, dan <em>&ldquo;Since then&rdquo;</em> menegaskan bahwa periode itu berlanjut sampai sekarang, yaitu lima tahun.',
        ],
    ],
];
