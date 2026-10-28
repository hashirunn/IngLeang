<?php

/**
 * Level 1 — Modul 10: Adjectives & Adverbs
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
    'title' => 'Adjectives & Adverbs',
    'slug' => 'adjectives-and-adverbs',
    'subtitle' => 'Deskripsi orang, benda, dan aktivitas (urutan adjektiva, akhiran -ly)',
    'summary' => 'Belajar mendeskripsikan orang dan benda dengan adjektiva, menempatkannya dengan urutan yang benar, serta menjelaskan cara melakukan aktivitas dengan adverbia -ly.',
    'icon' => '🎨',
    'objectives' => [
        'Menggunakan adjektiva untuk mendeskribusi orang dan benda',
        'Menempatkan adjektiva sebelum kata benda atau sesudah kata kerja to be',
        'Mengurutkan beberapa adjektiva dengan benar dalam satu frasa',
        'Membentuk dan memakai adverbia -ly untuk menjelaskan cara melakukan kegiatan',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Adjektiva?',
            'body' => '<p><strong>Adjektiva</strong> (kata sifat) menjelaskan atau mendeskripsikan orang, benda, dan situasi, misalnya <em>tall</em> (tinggi), <em>kind</em> (baik hati), dan <em>expensive</em> (mahal).</p>
<p>Ada dua posisi utama adjektiva dalam kalimat:</p>
<ul>
<li><strong>Sebelum kata benda</strong>: a <em>tall</em> building (gedung yang tinggi)</li>
<li><strong>Sesudah kata kerja to be</strong> (am/is/are/was/were): The building is <em>tall</em>.</li>
</ul>
<p>Adjektiva tidak berubah bentuk untuk subjek tunggal maupun jamak: <em>The flower is beautiful. The flowers are beautiful.</em></p>',
            'examples' => [
                ['en' => 'My brother is a tall boy.', 'id' => 'Saudaraku adalah anak laki-laki yang tinggi.'],
                ['en' => 'This book is very interesting.', 'id' => 'Buku ini sangat menarik.'],
                ['en' => 'They live in a big green house.', 'id' => 'Mereka tinggal di rumah besar berwarna hijau.'],
                ['en' => 'Our English teacher is kind and patient.', 'id' => 'Guru bahasa Inggris kami baik dan sabar.'],
            ],
        ],
        [
            'heading' => 'Adjektiva untuk Mendeskribusi Orang dan Benda',
            'body' => '<p>Berikut adjektiva yang paling sering dipakai sehari-hari. Hafalkan beberapa yang paling berguna terlebih dahulu.</p>
<table>
<thead><tr><th>Adjektiva</th><th>Arti</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>tall</td><td>tinggi (badan)</td><td>My father is tall.</td></tr>
<tr><td>short</td><td>pendek</td><td>She is short but strong.</td></tr>
<tr><td>kind</td><td>baik hati</td><td>Our teacher is very kind.</td></tr>
<tr><td>friendly</td><td>ramah</td><td>The staff at this hotel are friendly.</td></tr>
<tr><td>smart</td><td>pintar</td><td>He is a smart student.</td></tr>
<tr><td>beautiful</td><td>indah</td><td>Bali is a beautiful island.</td></tr>
<tr><td>expensive</td><td>mahal</td><td>This bag is too expensive.</td></tr>
<tr><td>delicious</td><td>lezat</td><td>The chicken soup is delicious.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'My grandfather is an old, kind man.', 'id' => 'Kakekku adalah pria tua yang baik hati.'],
                ['en' => 'This hotel room is cheap and comfortable.', 'id' => 'Kamar hotel ini murah dan nyaman.'],
            ],
        ],
        [
            'heading' => 'Urutan Adjektiva',
            'body' => '<p>Ketika ada lebih dari satu adjektiva sebelum sebuah kata benda, bahasa Inggris memiliki urutan yang baku. Urutan yang paling umum untuk pemula adalah:</p>
<ol>
<li><strong>Pendapat/opini</strong> (beautiful, nice, funny)</li>
<li><strong>Ukuran</strong> (big, small, tall)</li>
<li><strong>Umur</strong> (old, young, new)</li>
<li><strong>Warna</strong> (red, blue, black)</li>
<li><strong>Asal</strong> (Indonesian, Japanese)</li>
<li><strong>Bahan</strong> (wooden, plastic)</li>
</ol>
<p>Contoh lengkapnya: <em>a beautiful small old red Indonesian wooden table</em>. Untuk memudahkan, cukup gunakan 2&ndash;3 adjektiva, misalnya <em>a beautiful small red bag</em> (tas merah kecil yang indah).</p>',
            'examples' => [
                ['en' => 'She bought a beautiful small red bag.', 'id' => 'Dia membeli tas merah kecil yang indah.'],
                ['en' => 'We saw a big old brown dog in the street.', 'id' => 'Kami melihat anjing besar cokelat tua di jalan.'],
                ['en' => 'He lives in a nice new Japanese car.', 'id' => 'Dia memiliki mobil Jepang baru yang bagus.'],
            ],
        ],
        [
            'heading' => 'Adverbia dan Akhiran -ly',
            'body' => '<p><strong>Adverbia</strong> menjelaskan <em>cara</em> sebuah kegiatan dilakukan. Bentuknya yang paling umum adalah adjektiva + <strong>-ly</strong>.</p>
<table>
<thead><tr><th>Adjektiva</th><th>Adverbia</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>quick</td><td>quickly</td><td>dengan cepat</td></tr>
<tr><td>slow</td><td>slowly</td><td>dengan perlahan</td></tr>
<tr><td>careful</td><td>carefully</td><td>dengan hati-hati</td></tr>
<tr><td>quiet</td><td>quietly</td><td>dengan tenang</td></tr>
<tr><td>bad</td><td>badly</td><td>dengan buruk</td></tr>
</tbody>
</table>
<p>Posisi adverbia: biasanya <strong>sesudah kata kerja</strong> atau <strong>sesudah objek</strong>, misalnya <em>She sings beautifully</em> dan <em>He closed the door quietly</em>.</p>
<p>Perhatikan perbedaannya: <em>She is a careful driver</em> (adjektiva, menjelaskan kata benda <em>driver</em>) vs <em>She drives carefully</em> (adverbia, menjelaskan cara mengemudi).</p>',
            'examples' => [
                ['en' => 'The old man walked slowly into the room.', 'id' => 'Pria tua itu berjalan perlahan ke dalam ruangan.'],
                ['en' => 'Please listen to the teacher carefully.', 'id' => 'Tolong dengarkan gurumu dengan hati-hati.'],
                ['en' => 'The baby is sleeping quietly in her room.', 'id' => 'Bayi itu sedang tidur dengan tenang di kamarnya.'],
            ],
        ],
        [
            'heading' => 'Adjektiva yang Juga Dipakai sebagai Adverbia',
            'body' => '<p>Sebagian kata <strong>tidak ditambah <em>-ly</em></strong> saat dipakai sebagai adverbia, yaitu <strong>fast, hard, early, late, long,</strong> dan <strong>straight</strong>.</p>
<ul>
<li>He is a <em>fast</em> runner. (adjektiva) &rarr; He runs <em>fast</em>. (adverbia)</li>
<li>My sister works <em>hard</em> every day.</li>
<li>They arrived <em>early</em> this morning.</li>
</ul>
<p>Selain itu, kata <em>good</em> (baik) berubah menjadi <strong>well</strong> saat dipakai sebagai adverbia. Kita mengatakan <em>&ldquo;She sings well.&rdquo;</em>, bukan <em>&ldquo;She sings good.&rdquo;</em></p>',
            'examples' => [
                ['en' => 'My brother drives fast on the highway.', 'id' => 'Saudaraku menyetir dengan cepat di jalan tol.'],
                ['en' => 'She always wakes up early in the morning.', 'id' => 'Dia selalu bangun pagi pada waktu pagi.'],
                ['en' => 'He plays the piano very well.', 'id' => 'Dia bermain piano dengan sangat baik.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'tall', 'phonetic' => '/tɔːl/', 'meaning' => 'tinggi (badan)', 'example' => 'My brother is tall.'],
        ['word' => 'short', 'phonetic' => '/ʃɔːt/', 'meaning' => 'pendek', 'example' => 'She is short but strong.'],
        ['word' => 'kind', 'phonetic' => '/kaɪnd/', 'meaning' => 'baik hati', 'example' => 'Our teacher is very kind.'],
        ['word' => 'friendly', 'phonetic' => '/ˈfrendli/', 'meaning' => 'ramah', 'example' => 'The staff at this hotel are friendly.'],
        ['word' => 'beautiful', 'phonetic' => '/ˈbjuːtɪfl/', 'meaning' => 'indah', 'example' => 'Bali is a beautiful island.'],
        ['word' => 'expensive', 'phonetic' => '/ɪkˈspensɪv/', 'meaning' => 'mahal', 'example' => 'This phone is too expensive.'],
        ['word' => 'delicious', 'phonetic' => '/dɪˈlɪʃəs/', 'meaning' => 'lezat', 'example' => 'The chicken soup is delicious.'],
        ['word' => 'quickly', 'phonetic' => '/ˈkwɪkli/', 'meaning' => 'dengan cepat', 'example' => 'He quickly finished his homework.'],
        ['word' => 'slowly', 'phonetic' => '/ˈsləʊli/', 'meaning' => 'dengan perlahan', 'example' => 'She slowly opened the door.'],
        ['word' => 'carefully', 'phonetic' => '/ˈkeəfəli/', 'meaning' => 'dengan hati-hati', 'example' => 'Please drive carefully on this road.'],
        ['word' => 'quietly', 'phonetic' => '/ˈkwaɪətli/', 'meaning' => 'dengan tenang', 'example' => 'The baby is sleeping quietly.'],
        ['word' => 'hard', 'phonetic' => '/hɑːd/', 'meaning' => 'keras / giat', 'example' => 'He works hard every day.'],
        ['word' => 'early', 'phonetic' => '/ˈɜːli/', 'meaning' => 'pagi / lebih awal', 'example' => 'She always wakes up early.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Mr. Anwar is a ___ teacher. He always helps his students.',
            'options' => ['kindly', 'kind', 'kindness', 'kinding'],
            'answer' => 1,
            'explanation' => 'Yang dibutuhkan adalah adjektiva <em>kind</em> (baik hati) yang diletakkan sebelum kata benda <em>teacher</em>. <em>Kindly</em> adalah adverbia dan <em>kindness</em> adalah kata benda.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Which one uses the correct adjective order?',
            'options' => [
                'a red beautiful Indonesian car',
                'a beautiful red Indonesian car',
                'an Indonesian beautiful red car',
                'a red Indonesian beautiful car',
            ],
            'answer' => 1,
            'explanation' => 'Urutan adjektiva: pendapat (<em>beautiful</em>) &rarr; warna (<em>red</em>) &rarr; asal (<em>Indonesian</em>) &rarr; kata benda (<em>car</em>).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Be quiet! The baby is sleeping ___.',
            'options' => ['quiet', 'quieter', 'quietly', 'more quiet'],
            'answer' => 2,
            'explanation' => 'Untuk menjelaskan cara melakukan kegiatan dipakai adverbia, yaitu adjektiva + -ly: <em>quietly</em> (dengan tenang).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'My father is a very ___ driver. He never makes mistakes on the road.',
            'options' => ['care', 'careful', 'carefully', 'carefulness'],
            'answer' => 1,
            'explanation' => 'Setelah <em>a very</em> dan sebelum kata benda <em>driver</em> diperlukan adjektiva, yaitu <em>careful</em> (hati-hati).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My best friend is very ___. She always says hello to everyone.',
            'answer' => 'friendly',
            'accepted' => ['friendly'],
            'explanation' => 'Adjektiva <em>friendly</em> (ramah) berada sesudah kata kerja to be <em>is</em> untuk mendeskribikan temanmu.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Please listen to the teacher ___. (careful)',
            'answer' => 'carefully',
            'accepted' => ['carefully'],
            'explanation' => 'Kata <em>careful</em> adalah adjektiva; untuk menjelaskan cara mendengarkan gunakan adverbia <em>carefully</em> (dengan hati-hati).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Bali is famous because it is a ___ (beauty) island.',
            'answer' => 'beautiful',
            'accepted' => ['beautiful'],
            'explanation' => 'Kata benda <em>beauty</em> (keindahan) berubah menjadi adjektiva <em>beautiful</em> (indah) untuk mendeskripsikan kata benda <em>island</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'The bag is too ___. I do not have enough money to buy it.',
            'answer' => 'expensive',
            'accepted' => ['expensive'],
            'explanation' => '<em>Expensive</em> berarti mahal; kalimat kedua menjelaskan bahwa uangnya tidak cukup, sehingga barang itu mahal.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;She sings good&rdquo; sudah benar.',
            'answer' => false,
            'explanation' => 'Untuk menjelaskan cara menyanyi diperlukan adverbia. Bentuk yang benar: <em>She sings well</em>. Kata <em>good</em> adalah adjektiva.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kata &ldquo;fast&rdquo; tidak berubah menjadi &ldquo;fastly&rdquo; saat dipakai sebagai adverbia.',
            'answer' => true,
            'explanation' => '<em>Fast</em> adalah adjektiva sekaligus adverbia: <em>a fast car</em> (adjektiva) dan <em>He runs fast</em> (adverbia). Bentuk <em>fastly</em> tidak ada dalam bahasa Inggris.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan adjektiva berikut dengan artinya.',
            'pairs' => [
                ['left' => 'tall', 'right' => 'tinggi (badan)'],
                ['left' => 'kind', 'right' => 'baik hati'],
                ['left' => 'expensive', 'right' => 'mahal'],
                ['left' => 'delicious', 'right' => 'lezat'],
                ['left' => 'quiet', 'right' => 'tenang'],
            ],
            'explanation' => 'Adjektiva dipakai untuk mendeskribusi orang dan benda, misalnya <em>a kind teacher</em> atau <em>an expensive bag</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The old man walked slowly into the room.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'The old man walked slowly into the room.',
                'The old man walked quickly into the room.',
                'The young man walked slowly into the room.',
                'The old man runs slowly into the room.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>old man</em> dan cara berjalannya <em>slowly</em> (perlahan), bukan <em>quickly</em> atau <em>young man</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'My mother cooked a delicious meal for us.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;My mother cooked a ___ meal for us.&rdquo;',
            'answer' => 'delicious',
            'accepted' => ['delicious'],
            'explanation' => 'Kalimat yang terdengar: <em>My mother cooked a delicious meal for us</em> (Ibuku memasak makanan lezat untuk kami).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>This is my best friend, Sinta. She is a tall girl with long black hair. She is very friendly and kind, so she has many friends. Sinta studies hard at school, and she always finishes her homework carefully. Her English sounds beautiful because she speaks slowly and clearly. Everyone likes her.</p></div><p>How does Sinta speak English?</p>',
            'options' => [
                'Quickly and loudly.',
                'Slowly and clearly.',
                'Quietly and badly.',
                'Loudly and carefully.',
            ],
            'answer' => 1,
            'explanation' => 'Kalimat <em>&ldquo;she speaks slowly and clearly&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Deskripsikan temanmu dengan kalimat berikut.',
            'target' => 'My best friend is tall, kind, and very friendly.',
            'hint' => 'Arti: Teman terbaikku tinggi, baik hati, dan sangat ramah.',
            'explanation' => 'Beberapa adjektiva dipisahkan dengan koma dan disambung <em>and</em> setelah adjektiva terakhir.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Katakan bagaimana cara saudaramu berbicara bahasa Inggris dengan kalimat berikut.',
            'target' => 'My sister speaks English slowly and clearly.',
            'hint' => 'Arti: Saudaraku berbicara bahasa Inggris dengan perlahan dan jelas.',
            'explanation' => 'Gunakan adverbia <em>slowly</em> dan <em>clearly</em> setelah kata kerja <em>speaks</em> untuk menjelaskan cara berbicara.',
        ],
    ],
];
