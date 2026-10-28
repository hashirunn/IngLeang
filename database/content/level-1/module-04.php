<?php

/**
 * Level 1 — Modul 04: Nouns & Articles
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
    'title' => 'Nouns & Articles',
    'slug' => 'nouns-articles',
    'subtitle' => 'Singular/plural, a, an, the, countable/uncountable',
    'summary' => 'Pelajari kata benda tunggal dan jamak, perbedaan kata benda hitung dan tidak hitung, serta pemakaian artikel a, an, dan the.',
    'icon' => '📦',
    'objectives' => [
        'Membentuk jamak kata benda dengan benar, termasuk yang tidak beraturan',
        'Membedakan kata benda countable dan uncountable',
        'Memilih artikel a atau an sesuai bunyi awal kata',
        'Menggunakan artikel the dan kapan tidak memakai artikel',
    ],
    'sections' => [
        [
            'heading' => 'Singular dan Plural (Tunggal dan Jamak)',
            'body' => '<p>Kata benda <strong>singular</strong> menyebut satu benda, sedangkan <strong>plural</strong> menyebut lebih dari satu. Aturan umumnya adalah menambahkan <strong>-s</strong>.</p>
<ul>
<li>Umum: +<strong>s</strong> &mdash; <em>book &rarr; books</em>, <em>cat &rarr; cats</em>, <em>boy &rarr; boys</em></li>
<li>Berakhir <strong>-s, -x, -ch, -sh, -o</strong>: +<strong>es</strong> &mdash; <em>box &rarr; boxes</em>, <em>bus &rarr; buses</em>, <em>watch &rarr; watches</em>, <em>go &rarr; goes</em>, <em>potato &rarr; potatoes</em></li>
<li>Konsonan + <strong>-y</strong>: <strong>-y</strong> menjadi <strong>-ies</strong> &mdash; <em>study &rarr; studies</em>, <em>baby &rarr; babies</em></li>
<li>Tidak beraturan: <em>child &rarr; children</em>, <em>man &rarr; men</em>, <em>woman &rarr; women</em>, <em>foot &rarr; feet</em>, <em>tooth &rarr; teeth</em></li>
</ul>
<table>
<thead><tr><th>Singular</th><th>Plural</th><th>Singular</th><th>Plural</th></tr></thead>
<tbody>
<tr><td>an apple</td><td>apples</td><td>a child</td><td>children</td></tr>
<tr><td>a box</td><td>boxes</td><td>a man</td><td>men</td></tr>
<tr><td>a story</td><td>stories</td><td>a woman</td><td>women</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'There are three boxes on the shelf.', 'id' => 'Ada tiga kotak di rak itu.'],
                ['en' => 'The babies are sleeping.', 'id' => 'Para bayi itu sedang tidur.'],
                ['en' => 'My father bought two watches.', 'id' => 'Ayahku membeli dua jam tangan.'],
                ['en' => 'There are many children in the park.', 'id' => 'Banyak anak-anak di taman itu.'],
            ],
        ],
        [
            'heading' => 'Countable dan Uncountable (Dapat dan Tidak Dapat Dihitung)',
            'body' => '<p><strong>Countable</strong> adalah kata benda yang bisa dihitung, sehingga memiliki bentuk tunggal dan jamak serta bisa memakai <em>a/an</em>. <strong>Uncountable</strong> tidak bisa dihitung, selalu dianggap tunggal, dan tidak memakai <em>a/an</em>.</p>
<table>
<thead><tr><th>Countable (bisa dihitung)</th><th>Uncountable (tidak bisa dihitung)</th></tr></thead>
<tbody>
<tr><td>a book &rarr; two books</td><td>water, milk, tea</td></tr>
<tr><td>an egg &rarr; three eggs</td><td>rice, bread, meat</td></tr>
<tr><td>a chair &rarr; five chairs</td><td>money, sugar, salt</td></tr>
</tbody>
</table>
<p>Untuk menyebut jumlah benda tidak hitung, gunakan wadahnya:</p>
<ul>
<li><strong>a glass of</strong> water &mdash; segelas air</li>
<li><strong>a bottle of</strong> milk &mdash; sebotol susu</li>
<li><strong>a bowl of</strong> rice &mdash; semangkuk nasi</li>
<li><strong>a piece of</strong> bread &mdash; sepotong roti</li>
</ul>',
            'examples' => [
                ['en' => 'I drink two glasses of water every day.', 'id' => 'Saya minum dua gelas air setiap hari.'],
                ['en' => 'He eats a bowl of rice for lunch.', 'id' => 'Dia makan semangkuk nasi untuk makan siang.'],
                ['en' => 'We need some milk for the cake.', 'id' => 'Kami membutuhkan sedikit susu untuk kue itu.'],
                ['en' => 'There is some sugar in my tea.', 'id' => 'Ada sedikit gula di tehku.'],
            ],
        ],
        [
            'heading' => 'Artikel A dan An',
            'body' => '<p>Artikel <strong>a</strong> dan <strong>an</strong> dipakai untuk satu benda hitung tunggal yang belum disebutkan sebelumnya. Pilihnya berdasarkan <strong>bunyi awal</strong> kata, bukan hurufnya.</p>
<table>
<thead><tr><th>Artikel</th><th>Kondisi</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>a</td><td>bunyi awal konsonan</td><td>a book, a cat, a university (bunyinya /juː/)</td></tr>
<tr><td>an</td><td>bunyi awal vokal</td><td>an apple, an egg, an idea</td></tr>
<tr><td>an</td><td>huruf h tidak dibaca</td><td>an hour, an honest answer</td></tr>
</tbody>
</table>
<p>Setelah <em>a/an</em>, kata bendanya selalu berbentuk <strong>tunggal</strong>: <em>a books</em> &times; &rarr; <em>a book</em> &check;.</p>',
            'examples' => [
                ['en' => 'I see an owl in the tree.', 'id' => 'Saya melihat seekor burung hantu di pohon itu.'],
                ['en' => 'She has a beautiful bag.', 'id' => 'Dia punya tas yang cantik.'],
                ['en' => 'He eats an egg every morning.', 'id' => 'Dia makan sebutir telur setiap pagi.'],
                ['en' => 'Wait a moment, please.', 'id' => 'Tunggu sebentar, tolong.'],
            ],
        ],
        [
            'heading' => 'Artikel The',
            'body' => '<p>Gunakan <strong>the</strong> untuk benda yang sudah <strong>jelas</strong> bagi pembicara dan pendengar. Situasi yang memakai <em>the</em>:</p>
<ul>
<li>Sudah disebut sebelumnya: <em>I have a cat. <strong>The</strong> cat is black.</em></li>
<li>Benda yang satu-satunya: <em><strong>the</strong> sun, <strong>the</strong> moon, <strong>the</strong> earth</em></li>
<li>Sudah jelas dari situasi: <em>Close <strong>the</strong> door, please.</em> (pintu yang ada di ruangan itu)</li>
<li>Benda yang sudah diketahui bersama: <em>Where is <strong>the</strong> teacher?</em> (guru yang sama-sama kita tahu)</li>
</ul>
<p>Perbandingan singkat: <em>I bought <strong>a</strong> book.</em> (baru, belum jelas) &rarr; <em><strong>The</strong> book is on the table.</em> (buku yang sudah disebut tadi).</p>',
            'examples' => [
                ['en' => 'The sun rises in the east.', 'id' => 'Matahari terbit di timur.'],
                ['en' => 'Please open the window. It is hot in here.', 'id' => 'Tolong buka jendelanya. Di sini panas.'],
                ['en' => 'I have a cat. The cat is very cute.', 'id' => 'Saya punya seekor kucing. Kucing itu sangat lucu.'],
                ['en' => 'The bus is late again today.', 'id' => 'Bus itu terlambat lagi hari ini.'],
            ],
        ],
        [
            'heading' => 'Kapan Tidak Memakai Artikel (Zero Article)',
            'body' => '<p>Ada kalanya artikel sama sekali tidak dipakai:</p>
<ul>
<li>Benda jamak yang dipakai <strong>umum</strong>: <em>Cats are lovely animals.</em></li>
<li>Benda tidak hitung yang dipakai <strong>umum</strong>: <em>Water is important for health.</em></li>
<li>Nama negara dan kota: <em>I live in <strong>Bandung</strong>.</em>, <em><strong>Indonesia</strong> is a big country.</em></li>
<li>Nama makanan dan minuman tertentu saat dibicarakan umum: <em>Rice is the main food in Indonesia.</em></li>
</ul>
<p>Ingat: benda umum (jamak atau uncountable) tanpa artikel, benda tertentu memakai <em>the</em>, benda hitung tunggal yang baru disebut memakai <em>a/an</em>.</p>',
            'examples' => [
                ['en' => 'Rice is the main food in Indonesia.', 'id' => 'Nasi adalah makanan utama di Indonesia.'],
                ['en' => 'Books are my best friends.', 'id' => 'Buku-buku adalah sahabat terbaikku.'],
                ['en' => 'I want to visit Japan next year.', 'id' => 'Saya ingin mengunjungi Jepang tahun depan.'],
                ['en' => 'Children need love and care.', 'id' => 'Anak-anak membutuhkan kasih sayang dan perhatian.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'plural', 'phonetic' => '/ˈplʊrəl/', 'meaning' => 'bentuk jamak (lebih dari satu)', 'example' => 'The plural of "child" is "children".'],
        ['word' => 'singular', 'phonetic' => '/ˈsɪŋɡjələr/', 'meaning' => 'bentuk tunggal (satu)', 'example' => '"Book" is the singular form.'],
        ['word' => 'countable', 'phonetic' => '/ˈkaʊntəbl/', 'meaning' => 'dapat dihitung', 'example' => 'Eggs are countable nouns.'],
        ['word' => 'uncountable', 'phonetic' => '/ʌnˈkaʊntəbl/', 'meaning' => 'tidak dapat dihitung', 'example' => 'Water is an uncountable noun.'],
        ['word' => 'article', 'phonetic' => '/ˈɑːtɪkl/', 'meaning' => 'artikel (a, an, the)', 'example' => 'Use "an" before a vowel sound.'],
        ['word' => 'children', 'phonetic' => '/ˈtʃɪldrən/', 'meaning' => 'anak-anak (jamak dari child)', 'example' => 'The children are playing outside.'],
        ['word' => 'men', 'phonetic' => '/men/', 'meaning' => 'pria (jamak dari man)', 'example' => 'There are five men in the room.'],
        ['word' => 'water', 'phonetic' => '/ˈwɔːtər/', 'meaning' => 'air', 'example' => 'I drink a glass of water every day.'],
        ['word' => 'bread', 'phonetic' => '/bred/', 'meaning' => 'roti', 'example' => 'We buy bread every morning.'],
        ['word' => 'umbrella', 'phonetic' => '/ʌmˈbrelə/', 'meaning' => 'payung', 'example' => 'She takes an umbrella because it may rain.'],
        ['word' => 'idea', 'phonetic' => '/aɪˈdɪə/', 'meaning' => 'gagasan, ide', 'example' => 'I have an idea for our project.'],
        ['word' => 'hour', 'phonetic' => '/ˈaʊər/', 'meaning' => 'jam (waktu)', 'example' => 'It takes an hour to get there.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'He eats ___ egg every morning.',
            'options' => ['a', 'an', 'the', 'some'],
            'answer' => 1,
            'explanation' => '<em>Egg</em> dibaca dengan bunyi awal vokal (/e/), sehingga memakai artikel <strong>an</strong>: <em>an egg</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'The plural (bentuk jamak) of "child" is ___.',
            'options' => ['childs', 'childes', 'children', 'childrens'],
            'answer' => 2,
            'explanation' => '<em>Child</em> adalah kata tidak beraturan; bentuk jamaknya adalah <strong>children</strong>, bukan <em>childs</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Gunakan artikel yang tepat: ___ moon looks beautiful tonight.',
            'options' => ['a', 'an', 'the', 'some'],
            'answer' => 2,
            'explanation' => 'Bulan hanya ada satu (benda tunggal yang satu-satunya), jadi memakai artikel <strong>the</strong>: <em>The moon looks beautiful tonight.</em>',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Can I have some ___, please?',
            'options' => ['milks', 'milk', 'a milk', 'the milks'],
            'answer' => 1,
            'explanation' => '<em>Milk</em> adalah benda tidak hitung (<em>uncountable</em>), sehingga tidak memiliki bentuk jamak dan tidak memakai <em>a</em>. Yang benar: <strong>some milk</strong>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My sister has ___ umbrella in her bag.',
            'answer' => 'an',
            'accepted' => ['an'],
            'explanation' => '<em>Umbrella</em> diawali bunyi vokal (/ʌ/), jadi artikelnya <strong>an</strong>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'There are two ___ on the table. (buku)',
            'answer' => 'books',
            'accepted' => ['books'],
            'explanation' => 'Kata <em>two</em> menunjukkan lebih dari satu, sehingga <em>book</em> menjadi jamak: <strong>books</strong>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Many ___ are playing in the garden. (anak-anak)',
            'answer' => 'children',
            'accepted' => ['children'],
            'explanation' => 'Jamak dari <em>child</em> adalah <strong>children</strong> (bentuk tidak beraturan).',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => '"Water" adalah kata benda yang dapat dihitung (countable).',
            'answer' => false,
            'explanation' => '<em>Water</em> adalah benda tidak hitung (<em>uncountable</em>), jadi tidak dipakai <em>a/an</em> dan tidak berbentuk <em>waters</em> dalam konteks umum. Untuk menyebut jumlahnya: <em>a glass of water</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Artikel "an" digunakan sebelum kata yang diawali bunyi vokal.',
            'answer' => true,
            'explanation' => 'Yang dilihat adalah bunyi, bukan huruf: <em>an apple, an egg, an idea</em>, dan juga <em>an hour</em> karena huruf <em>h</em> tidak dibaca.',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan bentuk tunggal dengan bentuk jamaknya.',
            'pairs' => [
                ['left' => 'child', 'right' => 'children'],
                ['left' => 'man', 'right' => 'men'],
                ['left' => 'woman', 'right' => 'women'],
                ['left' => 'foot', 'right' => 'feet'],
                ['left' => 'box', 'right' => 'boxes'],
            ],
            'explanation' => 'Empat kata pertama adalah jamak tidak beraturan, sedangkan <em>box</em> berakhir -x sehingga jamaknya menambah <strong>-es</strong> menjadi <em>boxes</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'There are three books on the desk.',
            'prompt' => 'Dengarkan audio, lalu lengkapi kata yang hilang:<br>&ldquo;There are three ___ on the desk.&rdquo;',
            'answer' => 'books',
            'accepted' => ['books'],
            'explanation' => 'Kalimat yang terdengar: <em>There are three books on the desk</em> (Ada tiga buku di meja). Kata <em>three</em> menunjukkan jamak, jadi <strong>books</strong>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>This is my kitchen. There is a wooden table in the middle. On the table, there are some apples and a bottle of water. My mother is making bread, and the smell is wonderful. We buy bread every morning from the shop near our house.</p></div><p>Apa yang ada di atas meja?</p>',
            'options' => [
                'Beberapa apel dan sebotol air',
                'Semangkuk nasi',
                'Dua anak',
                'Sebotol susu',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;On the table, there are some apples and a bottle of water&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk menyebut kebiasaan minummu.',
            'target' => 'I drink a glass of water every morning.',
            'hint' => 'Arti: Saya minum segelas air setiap pagi.',
            'explanation' => 'Karena <em>water</em> tidak hitung, jumlahnya dinyatakan dengan wadahnya: <strong>a glass of water</strong>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat ini untuk menyebut jumlah saudaramu.',
            'target' => 'She has two brothers and one sister.',
            'hint' => 'Arti: Dia punya dua saudara laki-laki dan satu saudara perempuan.',
            'explanation' => 'Subjek <em>she</em> memakai <strong>has</strong>; setelah angka lebih dari satu, kata bendanya berbentuk jamak: <em>brothers, sister</em> (angka satu tetap tunggal).',
        ],
    ],
];
