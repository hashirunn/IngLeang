<?php

/**
 * Level 1 — Modul 11: Prepositions
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
    'title' => 'Prepositions',
    'slug' => 'prepositions',
    'subtitle' => 'In, on, at, under, next to, between untuk tempat dan waktu',
    'summary' => 'Belajar menunjukkan letak benda dengan preposisi tempat seperti in, on, under, next to, dan between, serta memakai in, on, dan at untuk waktu.',
    'icon' => '📍',
    'objectives' => [
        'Menggunakan preposisi tempat seperti in, on, under, next to, dan between',
        'Membedakan penggunaan in, on, dan at untuk waktu',
        'Mendeskripsikan posisi benda dengan there is dan there are',
        'Menghindari kesalahan umum dalam memilih preposisi',
    ],
    'sections' => [
        [
            'heading' => 'Preposisi Tempat',
            'body' => '<p><strong>Preposisi tempat</strong> menjelaskan di mana sesuatu berada.</p>
<table>
<thead><tr><th>Preposisi</th><th>Makna</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>in</td><td>di dalam (terkurung)</td><td>The pen is in the bag.</td></tr>
<tr><td>on</td><td>di atas (bersentuhan)</td><td>The book is on the table.</td></tr>
<tr><td>under</td><td>di bawah</td><td>The cat is under the chair.</td></tr>
<tr><td>next to</td><td>di sebelah</td><td>My house is next to the bank.</td></tr>
<tr><td>between</td><td>di antara (dua benda)</td><td>The ball is between the two boxes.</td></tr>
<tr><td>in front of / behind</td><td>di depan / di belakang</td><td>The car is in front of the house.</td></tr>
</tbody>
</table>
<p>Gunakan <em>between</em> untuk <strong>dua</strong> benda atau orang: <em>The bank is between the school and the store</em> (bank berada di antara sekolah dan toko).</p>',
            'examples' => [
                ['en' => 'The keys are on the table, next to the phone.', 'id' => 'Kunci-kunci itu ada di atas meja, di sebelah ponsel.'],
                ['en' => 'My bag is under my desk.', 'id' => 'Tas saya ada di bawah meja saya.'],
                ['en' => 'There is a beautiful garden in front of our house.', 'id' => 'Ada taman yang indah di depan rumah kami.'],
            ],
        ],
        [
            'heading' => 'Preposisi Waktu: In, On, dan At',
            'body' => '<p><strong>In, on,</strong> dan <strong>at</strong> juga dipakai untuk waktu, dengan aturan yang tetap.</p>
<table>
<thead><tr><th>Preposisi</th><th>Dipakai untuk</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>in</td><td>tahun, bulan, waktu bagian hari</td><td>in 2020, in July, in the morning</td></tr>
<tr><td>on</td><td>hari dan tanggal</td><td>on Monday, on my birthday, on 17 August</td></tr>
<tr><td>at</td><td>jam dan waktu yang tepat</td><td>at 7 o&rsquo;clock, at noon, at night</td></tr>
</tbody>
</table>
<p><em>At night</em> (malam hari) adalah pengecualian yang harus dihafal, bukan <em>in night</em>. Namun, untuk tanggal merah yang mencantumkan hari, gunakan <em>on</em>: <em>on Monday morning</em>.</p>',
            'examples' => [
                ['en' => 'My birthday is on March 15th.', 'id' => 'Ulang tahunku pada tanggal 15 Maret.'],
                ['en' => 'We usually have breakfast at 7 o&rsquo;clock.', 'id' => 'Biasanya kami sarapan pada pukul tujuh.'],
                ['en' => 'The shop opens in the morning and closes at night.', 'id' => 'Toko buka pada pagi hari dan tutup pada malam hari.'],
            ],
        ],
        [
            'heading' => 'In, On, dan At untuk Tempat',
            'body' => '<p>Ketiga preposisi yang sama juga dipakai untuk tempat, tetapi maknanya berbeda:</p>
<ul>
<li><strong>in</strong> = di dalam ruangan atau tempat tertutup: <em>in the kitchen, in the classroom, in the box</em></li>
<li><strong>on</strong> = di atas permukaan, juga untuk kendaraan umum: <em>on the table, on the wall, on the bus</em></li>
<li><strong>at</strong> = di titik lokasi tertentu: <em>at the bus stop, at the airport, at school, at home</em></li>
</ul>
<p>Perhatikan perbedaan <em>in the bus</em> (di di dalam bus, misalnya barang) dengan <em>on the bus</em> (menaiki bus).</p>',
            'examples' => [
                ['en' => 'My mother is in the kitchen now.', 'id' => 'Ibuku ada di dapur sekarang.'],
                ['en' => 'We are waiting at the bus stop.', 'id' => 'Kami sedang menunggu di halte bus.'],
                ['en' => 'He is on the bus to school right now.', 'id' => 'Dia sedang berada di dalam bus menuju sekolah sekarang.'],
            ],
        ],
        [
            'heading' => 'Mendeskripsikan Posisi dengan There Is dan There Are',
            'body' => '<p>Gunakan <strong>there is</strong> untuk satu benda dan <strong>there are</strong> untuk banyak benda, lalu tambahkan preposisi tempat untuk menjelaskan letaknya.</p>
<ul>
<li>There <strong>is</strong> a clock above the door. (Ada jam di atas pintu.)</li>
<li>There <strong>are</strong> two pictures on the wall. (Ada dua gambar di dinding.)</li>
</ul>
<p>Pola ini sangat berguna saat kamu menceritakan ruangan atau tempat kepada orang lain.</p>',
            'examples' => [
                ['en' => 'There is a lamp next to my bed.', 'id' => 'Ada lampu di sebelah tempat tidurku.'],
                ['en' => 'There are some books in my bag.', 'id' => 'Ada beberapa buku di dalam tasku.'],
                ['en' => 'There is a beautiful park behind my house.', 'id' => 'Ada taman yang indah di belakang rumahku.'],
            ],
        ],
        [
            'heading' => 'Kesalahan yang Sering Terjadi',
            'body' => '<p>Beberapa kesalahan umum pemula dalam memakai preposisi, beserta bentuk yang benar:</p>
<ul>
<li><em>&ldquo;My birthday is in March 5th&rdquo;</em> &rarr; benar: <em>on March 5th</em> (tanggal memakai <em>on</em>).</li>
<li><em>&ldquo;The cat is between of the chairs&rdquo;</em> &rarr; benar: <em>between the two chairs</em> (tanpa <em>of</em>).</li>
<li><em>&ldquo;She was born in Monday&rdquo;</em> &rarr; benar: <em>on Monday</em> (hari memakai <em>on</em>).</li>
<li><em>&ldquo;He is in the school now&rdquo;</em> &rarr; umumnya: <em>at school</em> (sedang berada di sekolah).</li>
</ul>
<p>Untuk menguasainya, latihlah membaca deskripsi tempat dan perhatikan preposisi yang dipakai penulisnya.</p>',
            'examples' => [
                ['en' => 'The ball is under the bed, between the two boxes.', 'id' => 'Bola itu ada di bawah tempat tidur, di antara dua kotak.'],
                ['en' => 'We meet at school on Monday morning.', 'id' => 'Kami bertemu di sekolah pada Senin pagi.'],
                ['en' => 'My school is near my house, so I walk to school every day.', 'id' => 'Sekolahku dekat rumahku, jadi saya berjalan kaki ke sekolah setiap hari.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'in', 'phonetic' => '/ɪn/', 'meaning' => 'di dalam', 'example' => 'The pen is in my bag.'],
        ['word' => 'on', 'phonetic' => '/ɒn/', 'meaning' => 'di atas (bersentuhan)', 'example' => 'The book is on the table.'],
        ['word' => 'at', 'phonetic' => '/æt/', 'meaning' => 'di (titik lokasi/waktu)', 'example' => 'We are waiting at the bus stop.'],
        ['word' => 'under', 'phonetic' => '/ˈʌndər/', 'meaning' => 'di bawah', 'example' => 'The cat is under the chair.'],
        ['word' => 'next to', 'phonetic' => '/nekst tuː/', 'meaning' => 'di sebelah', 'example' => 'My house is next to the bank.'],
        ['word' => 'between', 'phonetic' => '/bɪˈtwiːn/', 'meaning' => 'di antara', 'example' => 'The bank is between the school and the store.'],
        ['word' => 'in front of', 'phonetic' => '/ɪn frʌnt ɒv/', 'meaning' => 'di depan', 'example' => 'There is a garden in front of our house.'],
        ['word' => 'behind', 'phonetic' => '/bɪˈhaɪnd/', 'meaning' => 'di belakang', 'example' => 'The parking lot is behind the mall.'],
        ['word' => 'near', 'phonetic' => '/nɪər/', 'meaning' => 'dekat dengan', 'example' => 'My school is near my house.'],
        ['word' => 'above', 'phonetic' => '/əˈbʌv/', 'meaning' => 'di atas (tidak menyentuh)', 'example' => 'The clock is above the door.'],
        ['word' => 'inside', 'phonetic' => '/ˌɪnˈsaɪd/', 'meaning' => 'di dalam', 'example' => 'Please wait inside the room.'],
        ['word' => 'outside', 'phonetic' => '/ˌaʊtˈsaɪd/', 'meaning' => 'di luar', 'example' => 'The children are playing outside.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'The picture is ___ the wall.',
            'options' => ['in', 'on', 'at', 'under'],
            'answer' => 1,
            'explanation' => 'Gambar menempel atau bersentuhan dengan dinding, sehingga menggunakan <em>on</em>: <em>on the wall</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'My birthday is ___ March 15th.',
            'options' => ['in', 'at', 'on', 'of'],
            'answer' => 2,
            'explanation' => 'Preposisi <em>on</em> dipakai untuk hari dan tanggal. Untuk bulan saja kita menggunakan <em>in</em>, yaitu <em>in March</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'The bank is ___ the school and the store.',
            'options' => ['among', 'between', 'next', 'under'],
            'answer' => 1,
            'explanation' => 'Bank berada di antara dua tempat, yaitu sekolah dan toko, sehingga menggunakan <em>between</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'The ball rolled ___ the bed. Now I cannot see it.',
            'options' => ['on', 'at', 'under', 'between'],
            'answer' => 2,
            'explanation' => 'Bola tergulir dan bersembunyi sehingga tidak terlihat; kata kunci <em>cannot see it</em> menunjukkan bola berada di bawah tempat tidur, yaitu <em>under the bed</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My parents and I usually watch TV ___ the evening.',
            'answer' => 'in',
            'accepted' => ['in'],
            'explanation' => 'Waktu bagian hari memakai <em>in</em>: <em>in the morning, in the afternoon, in the evening</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'The train leaves ___ 7 o&rsquo;clock in the morning.',
            'answer' => 'at',
            'accepted' => ['at'],
            'explanation' => 'Preposisi <em>at</em> dipakai untuk jam yang tepat: <em>at 7 o&rsquo;clock</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'There is a beautiful garden ___ front of our house.',
            'answer' => 'in',
            'accepted' => ['in'],
            'explanation' => 'Frasa baku untuk menyatakan di depan sesuatu adalah <em>in front of</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'My house is next ___ the bakery, so I often buy fresh bread there.',
            'answer' => 'to',
            'accepted' => ['to'],
            'explanation' => 'Frasa <em>next to</em> berarti di sebelah; <em>next</em> selalu diikuti <em>to</em> saat dipakai menyatakan letak.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam bahasa Inggris, &ldquo;in Monday&rdquo; dan &ldquo;on Monday&rdquo; sama-sama benar.',
            'answer' => false,
            'explanation' => 'Nama hari selalu menggunakan <em>on</em>: <em>on Monday</em>. Bentuk <em>in Monday</em> salah.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kata &ldquo;between&rdquo; digunakan untuk menyatakan posisi di antara dua benda atau orang.',
            'answer' => true,
            'explanation' => '<em>Between</em> dipakai untuk dua benda: <em>The bank is between the school and the store</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan preposisi tempat berikut dengan artinya.',
            'pairs' => [
                ['left' => 'in', 'right' => 'di dalam'],
                ['left' => 'under', 'right' => 'di bawah'],
                ['left' => 'next to', 'right' => 'di sebelah'],
                ['left' => 'between', 'right' => 'di antara'],
                ['left' => 'behind', 'right' => 'di belakang'],
            ],
            'explanation' => 'Preposisi tempat menjelaskan letak benda; hafalkan maknanya agar mudah mendeskripsikan ruangan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The keys are on the table, next to the phone.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'The keys are on the table, next to the phone.',
                'The keys are in the table, next to the phone.',
                'The keys are under the table, next to the phone.',
                'The keys are on the table, far from the phone.',
            ],
            'answer' => 0,
            'explanation' => 'Kunci berada <em>on the table</em> (di atas meja) dan <em>next to the phone</em> (di sebelah ponsel).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'There is a cat under the chair.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;There is a cat ___ the chair.&rdquo;',
            'answer' => 'under',
            'accepted' => ['under'],
            'explanation' => 'Kalimat yang terdengar: <em>There is a cat under the chair</em> (Ada kucing di bawah kursi).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>My classroom is on the second floor. There is a big whiteboard in front of the class. The teacher&rsquo;s desk is next to the whiteboard. My desk is between Rani&rsquo;s desk and Budi&rsquo;s desk. My bag is under my desk, and my water bottle is on my desk. There is a clock above the door. After class, we usually play outside.</p></div><p>Where is the writer&rsquo;s bag?</p>',
            'options' => [
                'On the desk.',
                'Under the desk.',
                'Next to the door.',
                'In front of the class.',
            ],
            'answer' => 1,
            'explanation' => 'Kalimat <em>&ldquo;My bag is under my desk&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan letak benda di kamarmu dengan kalimat berikut.',
            'target' => 'There is a lamp next to my bed.',
            'hint' => 'Arti: Ada lampu di sebelah tempat tidurku.',
            'explanation' => 'Gunakan pola <em>There is + benda + preposisi tempat</em> untuk menceritakan letak satu benda.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan jarak rumahmu ke sekolah dengan kalimat berikut.',
            'target' => 'My school is near my house, so I walk to school every day.',
            'hint' => 'Arti: Sekolahku dekat rumahku, jadi saya berjalan kaki ke sekolah setiap hari.',
            'explanation' => 'Gunakan <em>near</em> untuk menyatakan kedekatan tempat, lalu sambungkan alasannya dengan <em>so</em>.',
        ],
    ],
];
