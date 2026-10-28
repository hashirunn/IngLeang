<?php

/**
 * Level 1 — Modul 15: Listening & Pronunciation
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
    'title' => 'Listening & Pronunciation',
    'slug' => 'listening-pronunciation',
    'subtitle' => 'Angka, kata umum, instruksi, dan dialog pendek',
    'summary' => 'Melatih keterampilan mendengar: angka, kata umum, instruksi kelas, dan dialog pendek, plus tips pengucapan yang jelas.',
    'icon' => '🎧',
    'objectives' => [
        'Membedakan angka yang bunyinya mirip seperti fifteen dan fifty',
        'Memahami instruksi sederhana dalam bahasa Inggris',
        'Menangkap informasi penting dalam dialog pendek (who, where, what/when)',
        'Mengucapkan kata dan kalimat dengan lebih jelas dan perlahan',
    ],
    'sections' => [
        [
            'heading' => 'Mendengarkan Angka (Listening to Numbers)',
            'body' => '<p>Angka sering menjadi bagian yang sulit didengar karena beberapa kata terdengar sangat mirip:</p>
<table>
<thead><tr><th>Kata</th><th>Arti</th><th>Kata mirip</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>thirteen</td><td>13</td><td>thirty</td><td>30</td></tr>
<tr><td>fifteen</td><td>15</td><td>fifty</td><td>50</td></tr>
<tr><td>fourteen</td><td>14</td><td>forty</td><td>40</td></tr>
</tbody>
</table>
<p>Yang membedakannya adalah <strong>tekanan</strong>: <em>thir<strong>teen</strong></em> (tekanan di akhir) berbeda dengan <em><strong>thir</strong>ty</em> (tekanan di depan). Untuk jam, dengarkan ungkapan <em>half past seven</em> (07.30), <em>quarter past seven</em> (07.15), dan <em>quarter to seven</em> (06.45).</p>',
            'examples' => [
                ['en' => 'The classroom has fifteen windows.', 'id' => 'Ruang kelas memiliki lima belas jendela.'],
                ['en' => 'The ticket costs fifty dollars.', 'id' => 'Tiket itu harganya lima puluh dolar.'],
                ['en' => 'The train leaves at quarter past seven.', 'id' => 'Kereta itu berangkat pukul tujuh lewat seperempat.'],
            ],
        ],
        [
            'heading' => 'Mendengarkan Kata Umum (Everyday Words)',
            'body' => '<p>Dalam percakapan sehari-hari, beberapa kata muncul sangat sering. Latih juga membedakan kata yang bunyinya mirip (<em>minimal pairs</em>):</p>
<ul>
<li><strong>ship</strong> (kapal) vs <strong>sheep</strong> (domba)</li>
<li><strong>three</strong> (/θriː/, lidah di antara gigi) vs <strong>tree</strong> (/triː/, bunyi /t/)</li>
<li><strong>think</strong> (/θɪŋk/) vs <strong>sink</strong> (/sɪŋk/)</li>
<li><strong>hear</strong> (mendengar tanpa sengaja) vs <strong>listen</strong> (mendengar dengan sengaja)</li>
</ul>
<p>Kata <strong>hear</strong> tidak diikuti <em>to</em>, sedangkan kata <strong>listen</strong> selalu diikuti <em>to</em>: <em>I listen to the radio every morning.</em></p>',
            'examples' => [
                ['en' => 'I hear a strange noise outside.', 'id' => 'Saya mendengar suara aneh di luar.'],
                ['en' => 'Please listen to the teacher carefully.', 'id' => 'Tolong dengarkan guru dengan saksama.'],
                ['en' => 'Can you say the word "three" slowly?', 'id' => 'Bisakah kamu mengucapkan kata "three" dengan perlahan?'],
            ],
        ],
        [
            'heading' => 'Mendengarkan Instruksi (Following Instructions)',
            'body' => '<p>Guru atau pengumuman sering menggunakan kalimat perintah (<em>imperative</em>). Subjek <em>you</em> tidak ditulis tetapi tetap dimengerti:</p>
<blockquote><p><strong>Open your books, please.</strong> — Buka bukumu, tolong.<br>
<strong>Turn to page ten.</strong> — Buka halaman sepuluh.<br>
<strong>Listen and repeat.</strong> — Dengarkan dan ulangi.<br>
<strong>Stand up, please.</strong> — Berdiri, tolong.<br>
<strong>Write your name on the paper.</strong> — Tulis namamu di kertas itu.</p></blockquote>
<p>Kata <strong>please</strong> membuat instruksi terdengar lebih sopan. Kata bantu <em>do</em> dan <em>don\'t</em> juga sering muncul: <em>Don\'t open your books yet.</em> (Jangan buka bukumu dulu.)</p>',
            'examples' => [
                ['en' => 'Please open your books and turn to page twenty.', 'id' => 'Tolong buka buku kalian dan buka halaman dua puluh.'],
                ['en' => 'Listen to the audio and repeat after me.', 'id' => 'Dengarkan audio dan ulangi setelahku.'],
                ['en' => 'Don\'t write on the wall.', 'id' => 'Jangan menulis di dinding.'],
            ],
        ],
        [
            'heading' => 'Mendengarkan Dialog Pendek (Short Dialogues)',
            'body' => '<p>Saat mendengarkan dialog, kamu tidak perlu memahami setiap kata. Fokus pada <strong>tiga pertanyaan pokok</strong> berikut:</p>
<ol>
<li><strong>Who</strong> — siapa yang berbicara?</li>
<li><strong>Where</strong> — di mana percakapan terjadi?</li>
<li><strong>What / When</strong> — apa yang dibicarakan dan kapan waktunya?</li>
</ol>
<p>Kata penghubung seperti <strong>but</strong>, <strong>because</strong>, dan <strong>so</strong> biasanya menandai informasi penting. Dalam dialog, jawaban sering terdengar tepat setelah kata tanya seperti <em>what time, where,</em> atau <em>how much</em>.</p>',
            'examples' => [
                ['en' => 'What time does the movie start? It starts at half past six.', 'id' => 'Pukul berapa filmnya dimulai? Filmnya dimulai pukul setengah tujuh.'],
                ['en' => 'After you listen, ask yourself: who, where, and what.', 'id' => 'Setelah mendengar, tanyakan pada dirimu: siapa, di mana, dan apa.'],
                ['en' => 'The word "but" often shows the most important information.', 'id' => 'Kata "but" sering menunjukkan informasi yang paling penting.'],
            ],
        ],
        [
            'heading' => 'Tips Pengucapan (Pronunciation Tips)',
            'body' => '<p>Pengucapan yang jelas membuatmu lebih mudah dipahami. Beberapa tips sederhana:</p>
<ul>
<li><strong>Tekanan (stress)</strong>: pada kata benda dua suku kata, tekanan umumnya di suku kata pertama, misalnya <strong>NUM</strong>ber dan <strong>STU</strong>dent.</li>
<li><strong>Bunyi /θ/</strong>: letakkan lidah di antara gigi untuk kata <em>three, think,</em> dan <em>thank</em>.</li>
<li><strong>Jangan menambahkan bunyi</strong>: ucapkan <em>English</em> dan <em>six</em>, bukan <em>Inggris-sh</em> atau <em>sixs</em>.</li>
<li><strong>Bicara perlahan</strong>: jika lawan bicara belum mengerti, gunakan <em>Could you speak more slowly, please?</em></li>
</ul>',
            'examples' => [
                ['en' => 'Could you speak more slowly, please?', 'id' => 'Bisakah kamu berbicara lebih perlahan, tolong?'],
                ['en' => 'How do you pronounce this word?', 'id' => 'Bagaimana kamu mengucapkan kata ini?'],
                ['en' => 'Sorry, could you repeat that, please?', 'id' => 'Maaf, bisakah kamu mengulangnya, tolong?'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'listen', 'phonetic' => '/ˈlɪsn/', 'meaning' => 'mendengarkan (dengan sengaja)', 'example' => 'Please listen to me.'],
        ['word' => 'hear', 'phonetic' => '/hɪə/', 'meaning' => 'mendengar (tanpa sengaja)', 'example' => 'I hear a strange noise.'],
        ['word' => 'repeat', 'phonetic' => '/rɪˈpiːt/', 'meaning' => 'mengulang', 'example' => 'Please repeat the sentence.'],
        ['word' => 'spell', 'phonetic' => '/spel/', 'meaning' => 'mengeja', 'example' => 'How do you spell your name?'],
        ['word' => 'pronounce', 'phonetic' => '/prəˈnaʊns/', 'meaning' => 'mengucapkan', 'example' => 'How do you pronounce this word?'],
        ['word' => 'sentence', 'phonetic' => '/ˈsentəns/', 'meaning' => 'kalimat', 'example' => 'Say the sentence aloud.'],
        ['word' => 'loud', 'phonetic' => '/laʊd/', 'meaning' => 'keras (suaranya)', 'example' => 'The music is too loud.'],
        ['word' => 'quiet', 'phonetic' => '/ˈkwaɪət/', 'meaning' => 'pelan; tenang', 'example' => 'Please be quiet in the library.'],
        ['word' => 'instruction', 'phonetic' => '/ɪnˈstrʌkʃn/', 'meaning' => 'instruksi', 'example' => 'Listen to the instructions carefully.'],
        ['word' => 'page', 'phonetic' => '/peɪdʒ/', 'meaning' => 'halaman', 'example' => 'Open your book on page ten.'],
        ['word' => 'number', 'phonetic' => '/ˈnʌmbə/', 'meaning' => 'angka', 'example' => 'Say the numbers from one to twenty.'],
        ['word' => 'accent', 'phonetic' => '/ˈæksənt/', 'meaning' => 'aksen', 'example' => 'She has a British accent.'],
        ['word' => 'slowly', 'phonetic' => '/ˈsləʊli/', 'meaning' => 'secara perlahan', 'example' => 'Speak slowly, please.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'I have fifteen books in my bag.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih jumlah buku yang benar.',
            'options' => ['Fifteen (15).', 'Fifty (50).', 'Five (5).', 'Thirteen (13).'],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>fifteen</em> (15). Angka 50 adalah <em>fifty</em>, yang tekanannya ada di depan.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Turn left, then go straight. The hospital is on your right.',
            'prompt' => 'Dengarkan instruksi berikut. <strong>Where is the hospital?</strong>',
            'options' => [
                'It is on your right.',
                'It is on your left.',
                'It is behind you.',
                'It is in front of you.',
            ],
            'answer' => 0,
            'explanation' => 'Instruksi terakhir berbunyi: <em>The hospital is <strong>on your right</strong></em> (rumah sakit ada di kananmu).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'Please open your books and turn to page twenty.',
            'prompt' => 'Dengarkan instruksi berikut, lalu lengkapi bagian yang kosong:<br>&ldquo;Please open your books and turn to page ___.&rdquo;',
            'answer' => 'twenty',
            'accepted' => ['twenty', '20'],
            'explanation' => 'Instruksi yang terdengar: <em>turn to page twenty</em> (buka halaman dua puluh). Menulis angka 20 juga diterima.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Anna: What time does the movie start? Ben: It starts at half past six. Anna: Great! Let\'s meet at the cinema at six fifteen.',
            'prompt' => 'Dengarkan dialog berikut. <strong>What time do Anna and Ben meet?</strong>',
            'options' => ['At six fifteen.', 'At half past six.', 'At six o\'clock.', 'At seven o\'clock.'],
            'answer' => 0,
            'explanation' => 'Film dimulai pukul <em>half past six</em> (06.30), tetapi mereka <strong>bertemu</strong> pukul <em>six fifteen</em> (06.15).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'Excuse me, is this seat free?',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi bagian yang kosong:<br>&ldquo;Excuse me, is this ___ free?&rdquo;',
            'answer' => 'seat',
            'accepted' => ['seat'],
            'explanation' => 'Kalimat yang terdengar: <em>Is this seat free?</em> (Apakah kursi ini kosong?), biasanya ditanya di bus atau kereta.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The shop is closed on Sunday, so we can go on Saturday.',
            'prompt' => 'Dengarkan kalimat berikut. <strong>When can they go to the shop?</strong>',
            'options' => ['On Saturday.', 'On Sunday.', 'On Friday.', 'Every day.'],
            'answer' => 0,
            'explanation' => 'Toko tutup pada hari Minggu, <em>so</em> (jadi) mereka bisa pergi pada hari <strong>Sabtu</strong>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Which number is &ldquo;thirty&rdquo;?',
            'options' => ['13', '30', '3', '23'],
            'answer' => 1,
            'explanation' => '<em>Thirty</em> berarti 30. Angka 13 adalah <em>thirteen</em>, yang tekanannya ada di suku kata kedua.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'speaking',
            'prompt' => 'Kata mana yang bunyi awalnya menggunakan lidah di antara gigi (bunyi /θ/)?',
            'options' => ['three', 'tree', 'free', 'dear'],
            'answer' => 0,
            'explanation' => '<em>Three</em> diucapkan dengan bunyi /θ/ (lidah di antara gigi), sedangkan <em>tree</em> diawali bunyi /t/ dan <em>free</em> dengan bunyi /f/.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'The opposite of &ldquo;loud&rdquo; (keras) is ___ .',
            'answer' => 'quiet',
            'accepted' => ['quiet'],
            'explanation' => 'Lawan kata <em>loud</em> (keras) adalah <strong>quiet</strong> (pelan/tenang).',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Kalimat perintah &ldquo;Open the door!&rdquo; tidak memakai subjek ___ .',
            'answer' => 'you',
            'accepted' => ['you'],
            'explanation' => 'Pada kalimat perintah (<em>imperative</em>), subjek <strong>you</strong> tidak ditulis tetapi tetap dimengerti.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'listening',
            'prompt' => 'Ungkapan &ldquo;Repeat after me&rdquo; berarti &ldquo;Ulangi setelahku&rdquo;.',
            'answer' => true,
            'explanation' => '<em>Repeat</em> berarti mengulang; instruksi ini lazim dipakai guru saat mengajari pengucapan.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'listening',
            'prompt' => '&ldquo;Quarter to seven&rdquo; berarti pukul 07.15.',
            'answer' => false,
            'explanation' => '<em>Quarter to seven</em> berarti <strong>06.45</strong> (tujuh kurang seperempat). Pukul 07.15 adalah <em>quarter past seven</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan istilah mendengarkan dengan artinya.',
            'pairs' => [
                ['left' => 'listen', 'right' => 'mendengarkan dengan sengaja'],
                ['left' => 'hear', 'right' => 'mendengar tanpa sengaja'],
                ['left' => 'repeat', 'right' => 'mengulang'],
                ['left' => 'spell', 'right' => 'mengeja'],
                ['left' => 'speak slowly', 'right' => 'berbicara perlahan'],
            ],
            'explanation' => '<em>Listen</em> dan <em>hear</em> berbeda: <em>listen</em> dilakukan dengan sengaja, sedangkan <em>hear</em> bisa terjadi tanpa disengaja.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Ben: Excuse me, what time does the concert start?<br>Sara: It starts at eight o\'clock.<br>Ben: And where is it?<br>Sara: It\'s at the city hall. See you there!</p></div><p>Where is the concert?</p>',
            'options' => ['At the city hall.', 'At the school.', 'At the cinema.', 'At the park.'],
            'answer' => 0,
            'explanation' => 'Sara menjawab: <em>It\'s at <strong>the city hall</strong></em>, artinya konser berlangsung di balai kota.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Lawan bicaramu berbicara terlalu cepat. Ucapkan kalimat berikut dengan sopan.',
            'target' => 'Could you speak more slowly, please?',
            'hint' => 'Arti: Bisakah kamu berbicara lebih perlahan, tolong?',
            'explanation' => 'Gunakan <em>Could you ...?</em> untuk permintaan sopan, dan <em>slowly</em> adalah kata keterangan dari <em>slow</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sebutkan jumlah siswa di kelasku dengan kalimat berikut.',
            'target' => 'There are twenty-five students in my class.',
            'hint' => 'Arti: Ada dua puluh lima siswa di kelasku.',
            'explanation' => 'Gunakan <em>There are + angka jamak</em> untuk menyebutkan jumlah benda jamak; angka jamak ditulis dengan hubungan: <em>twenty-five</em>.',
        ],
    ],
];
