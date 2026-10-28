<?php

/**
 * Level 1 — Modul 13: Daily Conversation
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
    'title' => 'Daily Conversation',
    'slug' => 'daily-conversation',
    'subtitle' => 'Berkenalan, memesan makanan, bertanya arah',
    'summary' => 'Belajar percakapan sehari-hari: berkenalan dengan orang baru, memesan makanan dan minuman, serta bertanya dan memberi arah.',
    'icon' => '🗣️',
    'objectives' => [
        'Melakukan perkenalan sederhana dengan sopan',
        'Memesan makanan dan minuman di restoran atau warung',
        'Bertanya dan memberi arah dengan ungkapan yang tepat',
        'Menggunakan ungkapan sopan dalam percakapan sehari-hari',
    ],
    'sections' => [
        [
            'heading' => 'Berkenalan (Getting to Know Someone)',
            'body' => '<p>Saat bertemu orang baru, gunakan urutan: <strong>sapaan &rarr; nama &rarr; asal &rarr; ungkapan senang bertemu</strong>.</p>
<ul>
<li><strong>What\'s your name?</strong> — Siapa namamu?</li>
<li><strong>Where are you from?</strong> — Asalmu dari mana?</li>
<li><strong>How old are you?</strong> — Berapa umurmu?</li>
<li><strong>Nice to meet you.</strong> — Senang bertemu denganmu.</li>
</ul>
<p>Jawab dengan kalimat sederhana: <em>My name is ...</em>, <em>I\'m from ...</em>, <em>I\'m fifteen years old.</em> Setelah perkenalan, tutup percakapan dengan <em>Nice to meet you, too.</em></p>',
            'examples' => [
                ['en' => 'Hi, I\'m Andi. What\'s your name?', 'id' => 'Halo, saya Andi. Siapa namamu?'],
                ['en' => 'I\'m from Bandung. Where are you from?', 'id' => 'Saya dari Bandung. Asal kamu dari mana?'],
                ['en' => 'Nice to meet you, too.', 'id' => 'Senang bertemu denganmu juga.'],
            ],
        ],
        [
            'heading' => 'Memesan Makanan dan Minuman (Ordering Food and Drinks)',
            'body' => '<p>Di restoran atau warung, gunakan ungkapan berikut agar terdengar sopan:</p>
<blockquote><p><strong>Can I have ... , please?</strong> — Bolehkah saya minta ...?<br>
<strong>I\'d like ... , please.</strong> — Saya ingin ...<br>
<strong>What would you like?</strong> — Apa yang kamu inginkan?<br>
<strong>How much is it?</strong> — Harganya berapa?<br>
<strong>The bill, please.</strong> — Tagihannya, tolong.</p></blockquote>
<p><em>I\'d like</em> adalah bentuk singkat dari <em>I would like</em>, yang terdengar lebih sopan daripada <em>I want</em>. Setelah memesan, ucapkan <em>thank you</em> kepada pelayan.</p>',
            'examples' => [
                ['en' => 'I\'d like fried rice and a glass of tea, please.', 'id' => 'Saya ingin nasi goreng dan segelas teh, tolong.'],
                ['en' => 'Can I have the menu, please?', 'id' => 'Bolehkah saya melihat menunya, tolong?'],
                ['en' => 'How much is the chicken soup?', 'id' => 'Berapa harga sup ayamnya?'],
            ],
        ],
        [
            'heading' => 'Bertanya dan Memberi Arah (Asking for and Giving Directions)',
            'body' => '<p>Untuk bertanya arah, mulailah dengan <strong>Excuse me</strong> (permisi) agar sopan. Untuk memberi arah, gunakan kalimat perintah (imperative) tanpa subjek.</p>
<table>
<thead><tr><th>Ungkapan</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>Go straight.</td><td>Jalan lurus.</td></tr>
<tr><td>Turn left. / Turn right.</td><td>Belok kiri. / Belok kanan.</td></tr>
<tr><td>It\'s next to the bank.</td><td>Di samping bank.</td></tr>
<tr><td>It\'s opposite the school.</td><td>Di seberang sekolah.</td></tr>
<tr><td>It\'s on the corner.</td><td>Di sudut jalan.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'Excuse me, where is the nearest bank?', 'id' => 'Permisi, di mana bank terdekat?'],
                ['en' => 'Go straight, then turn left at the traffic light.', 'id' => 'Jalan lurus, lalu belok kiri di lampu lalu lintas.'],
                ['en' => 'The post office is next to the supermarket.', 'id' => 'Kantor pos berada di samping supermarket.'],
            ],
        ],
        [
            'heading' => 'Ungkapan Sopan (Polite Expressions)',
            'body' => '<p>Kata sopan membuat percakapan terasa nyaman. Gunakan <strong>please</strong> saat meminta sesuatu, dan jawab <strong>thank you</strong> dengan <strong>you\'re welcome</strong>.</p>
<ul>
<li><strong>Excuse me</strong> — permisi (sebelum bertanya atau menyapa orang yang belum dikenal)</li>
<li><strong>Sorry / I\'m sorry</strong> — maaf (saat melakukan kesalahan)</li>
<li><strong>Thank you very much</strong> — terima kasih banyak</li>
<li><strong>You\'re welcome</strong> — sama-sama</li>
<li><strong>Have a nice day!</strong> — semoga harimu menyenangkan!</li>
</ul>',
            'examples' => [
                ['en' => 'Excuse me, is this seat free?', 'id' => 'Permisi, kursi ini kosong?'],
                ['en' => 'I\'m sorry, I don\'t understand.', 'id' => 'Maaf, saya tidak mengerti.'],
                ['en' => 'Thank you for your help. You\'re welcome.', 'id' => 'Terima kasih atas bantuanmu. Sama-sama.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'excuse me', 'phonetic' => '/ɪkˈskjuːz miː/', 'meaning' => 'permisi', 'example' => 'Excuse me, where is the station?'],
        ['word' => 'I\'d like', 'phonetic' => '/ˌaɪd ˈlaɪk/', 'meaning' => 'saya ingin', 'example' => 'I\'d like a cup of tea, please.'],
        ['word' => 'menu', 'phonetic' => '/ˈmenjuː/', 'meaning' => 'menu (daftar makanan)', 'example' => 'Can I see the menu, please?'],
        ['word' => 'bill', 'phonetic' => '/bɪl/', 'meaning' => 'tagihan', 'example' => 'The bill, please.'],
        ['word' => 'order', 'phonetic' => '/ˈɔːdə/', 'meaning' => 'memesan; pesanan', 'example' => 'I want to order fried rice.'],
        ['word' => 'delicious', 'phonetic' => '/dɪˈlɪʃəs/', 'meaning' => 'lezat', 'example' => 'The fried chicken is delicious.'],
        ['word' => 'straight', 'phonetic' => '/streɪt/', 'meaning' => 'lurus', 'example' => 'Go straight ahead.'],
        ['word' => 'turn left', 'phonetic' => '/ˌtɜːn ˈleft/', 'meaning' => 'belok kiri', 'example' => 'Turn left at the corner.'],
        ['word' => 'turn right', 'phonetic' => '/ˌtɜːn ˈraɪt/', 'meaning' => 'belok kanan', 'example' => 'Turn right after the bridge.'],
        ['word' => 'opposite', 'phonetic' => '/ˈɒpəzɪt/', 'meaning' => 'berhadapan dengan', 'example' => 'The bank is opposite the school.'],
        ['word' => 'next to', 'phonetic' => '/ˈnekst tuː/', 'meaning' => 'di samping', 'example' => 'The cafe is next to the bank.'],
        ['word' => 'corner', 'phonetic' => '/ˈkɔːnə/', 'meaning' => 'sudut jalan', 'example' => 'The shop is on the corner.'],
        ['word' => 'you\'re welcome', 'phonetic' => '/ˌjɔː ˈwelkəm/', 'meaning' => 'sama-sama', 'example' => '"Thank you!" "You\'re welcome."'],
        ['word' => 'how much', 'phonetic' => '/ˌhaʊ ˈmʌtʃ/', 'meaning' => 'berapa (harga)', 'example' => 'How much is this shirt?'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Saat memesan makanan dengan sopan, kamu berkata: <strong>&ldquo;___ chicken and rice, please.&rdquo;</strong>',
            'options' => ['I\'d like', 'I like', 'I am want', 'I would liking'],
            'answer' => 0,
            'explanation' => 'Ungkapan baku untuk memesan dengan sopan adalah <strong>I\'d like</strong> (kependekan dari <em>I would like</em>), diikuti makanan yang dipesan.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Kamu tersesat dan ingin bertanya arah. Mulailah dengan ungkapan: <strong>&ldquo;___, where is the post office?&rdquo;</strong>',
            'options' => ['Excuse me', 'Good night', 'I\'m sorry', 'You\'re welcome'],
            'answer' => 0,
            'explanation' => '<em>Excuse me</em> (permisi) dipakai untuk menyapa orang asing sebelum bertanya, misalnya bertanya arah.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Ungkapan &ldquo;You\'re welcome&rdquo; diucapkan saat ...',
            'options' => [
                'seseorang mengucapkan terima kasih kepadamu',
                'kamu ingin memesan makanan',
                'kamu ingin bertanya arah',
                'kamu ingin berpamitan',
            ],
            'answer' => 0,
            'explanation' => '<em>You\'re welcome</em> (sama-sama) adalah jawaban yang tepat ketika seseorang mengucapkan <em>thank you</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'The bank is ___ to the cinema. (bersebelahan)',
            'answer' => 'next',
            'accepted' => ['next'],
            'explanation' => 'Ungkapan <strong>next to</strong> berarti <em>di samping</em> atau bersebelahan dengan bangunan lain.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => '&ldquo;What\'s your name?&rdquo; &mdash; &ldquo;My name ___ Sari.&rdquo;',
            'answer' => 'is',
            'accepted' => ['is'],
            'explanation' => 'Subjek <em>my name</em> berupa benda tunggal, sehingga menggunakan <strong>is</strong>: <em>My name is Sari.</em>',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;___ you like some tea?&rdquo; &mdash; &ldquo;Yes, please.&rdquo;',
            'answer' => 'Would',
            'accepted' => ['would'],
            'explanation' => 'Saat menawarkan minuman, gunakan <strong>Would you like ...?</strong> yang berarti &ldquo;Apakah kamu ingin ...?&rdquo;',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;Can I have the bill, please?&rdquo; digunakan untuk meminta tagihan di restoran.',
            'answer' => true,
            'explanation' => '<em>Bill</em> berarti tagihan; kalimat tersebut adalah cara sopan meminta tagihan setelah selesai makan.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;Go straight&rdquo; berarti &ldquo;belok ke kanan&rdquo;.',
            'answer' => false,
            'explanation' => '<em>Go straight</em> berarti <strong>jalan lurus</strong>. Untuk belok kanan, ungkapannya adalah <em>turn right</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan ungkapan dengan situasi penggunaannya.',
            'pairs' => [
                ['left' => 'Where are you from?', 'right' => 'menanyakan asal daerah'],
                ['left' => 'How much is it?', 'right' => 'menanyakan harga'],
                ['left' => 'Turn left.', 'right' => 'perintah belok kiri'],
                ['left' => 'You\'re welcome.', 'right' => 'jawaban atas terima kasih'],
                ['left' => 'Nice to meet you.', 'right' => 'diucapkan saat berkenalan'],
            ],
            'explanation' => 'Setiap situasi percakapan memiliki ungkapan khas: bertanya asal, harga, arah, membalas terima kasih, dan berkenalan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Man: Excuse me, where is the supermarket? Woman: Go straight, then turn left. It\'s next to the pharmacy.',
            'prompt' => 'Dengarkan dialog berikut, lalu pilih jawaban yang tepat: <strong>Where is the supermarket?</strong>',
            'options' => [
                'It is next to the pharmacy.',
                'It is opposite the pharmacy.',
                'It is behind the pharmacy.',
                'It is between the pharmacy and the bank.',
            ],
            'answer' => 0,
            'explanation' => 'Wanita menjawab: <em>Go straight, then turn left. It\'s <strong>next to</strong> the pharmacy</em>, artinya supermarket ada di samping apotek.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'Can I have a glass of orange juice, please?',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi bagian yang kosong:<br>&ldquo;Can I have a glass of ___, please?&rdquo;',
            'answer' => 'orange juice',
            'accepted' => ['orange juice'],
            'explanation' => 'Kalimat yang terdengar: <em>Can I have a glass of orange juice, please?</em> (Bolehkah saya minta segelas jus jeruk?).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Waiter: What would you like? Customer: I\'d like fried rice and tea, please. Waiter: Anything else? Customer: No, thank you.',
            'prompt' => 'Dengarkan dialog berikut. <strong>What does the customer order?</strong>',
            'options' => [
                'Fried rice and tea.',
                'Fried rice and coffee.',
                'Fried noodles and tea.',
                'Chicken and orange juice.',
            ],
            'answer' => 0,
            'explanation' => 'Pelanggan menjawab: <em>I\'d like <strong>fried rice and tea</strong>, please</em>, sehingga pesanannya nasi goreng dan teh.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Yesterday, Sinta was at a restaurant with her family. She said to the waiter, &ldquo;Excuse me, can I have the menu, please?&rdquo; The waiter gave her the menu. Sinta ordered fried chicken and a glass of orange juice. The food was delicious, and the bill was fifty thousand rupiah.</p></div><p>What did Sinta order?</p>',
            'options' => [
                'Fried chicken and orange juice.',
                'Fried rice and tea.',
                'Fried chicken and tea.',
                'Fried noodles and orange juice.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;Sinta ordered fried chicken and a glass of orange juice&rdquo;</em> menyebutkan pesanan Sinta.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Kamu ingin bertanya arah ke bank terdekat. Ucapkan kalimat berikut.',
            'target' => 'Excuse me, where is the nearest bank?',
            'hint' => 'Arti: Permisi, di mana bank terdekat?',
            'explanation' => 'Mulai dengan <em>Excuse me</em> untuk menarik perhatian secara sopan, lalu gunakan <em>where is ...?</em> untuk bertanya tempat.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Kamu sedang memesan di restoran. Ucapkan kalimat pemesanan berikut.',
            'target' => 'I\'d like a plate of fried rice and a glass of tea, please.',
            'hint' => 'Arti: Saya ingin sepiring nasi goreng dan segelas teh, tolong.',
            'explanation' => 'Pola memesan: <em>I\'d like + makanan/minuman + please</em>. Tambahkan ukuran seperti <em>a plate of</em> atau <em>a glass of</em> agar lebih jelas.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Perkenalkan dirimu kepada orang baru dengan urutan sapaan, nama, asal, lalu pertanyaan balik.',
            'target' => 'Hi, my name is Dito. I\'m from Jakarta. Where are you from?',
            'hint' => 'Arti: Halo, nama saya Dito. Saya dari Jakarta. Asal kamu dari mana?',
            'explanation' => 'Urutan perkenalan yang natural: sapaan &rarr; nama &rarr; asal &rarr; pertanyaan balik kepada lawan bicara.',
        ],
    ],
];
