<?php

/**
 * Level 2 — Modul 08: Relative Clauses
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
    'title' => 'Relative Clauses',
    'slug' => 'relative-clauses',
    'subtitle' => 'Who, which, that, whose, where (defining & non-defining)',
    'summary' => 'Belajar klausa relatif untuk menjelaskan kata benda: pilihan kata ganti yang tepat serta perbedaan defining dan non-defining clauses.',
    'icon' => '🔗',
    'objectives' => [
        'Memilih relative pronoun yang tepat: who, which, that, whose, where',
        'Membedakan defining dan non-defining relative clause',
        'Menggunakan koma dengan benar pada klausa non-defining',
        'Menggabungkan dua kalimat menjadi satu dengan klausa relatif',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Relative Clause?',
            'body' => '<p><strong>Relative clause</strong> (klausa relatif) adalah klausa yang menjelaskan kata benda di depannya dan diawali kata ganti relatif: <em>who, whom, which, whose, that, where,</em> dan <em>when</em>.</p>
<table>
<thead><tr><th>Kata Ganti</th><th>Digunakan untuk</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>who</td><td>orang (subjek)</td><td>The woman who lives next door is a doctor.</td></tr>
<tr><td>which</td><td>benda atau hal</td><td>The book which I borrowed is interesting.</td></tr>
<tr><td>that</td><td>orang atau benda</td><td>This is the film that we watched.</td></tr>
<tr><td>whose</td><td>kepemilikan</td><td>I know a girl whose brother is a pilot.</td></tr>
<tr><td>where</td><td>tempat</td><td>This is the city where I was born.</td></tr>
<tr><td>when</td><td>waktu</td><td>I remember the day when we first met.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'The woman who lives next door is a doctor.', 'id' => 'Wanita yang tinggal di sebelah adalah seorang dokter.'],
                ['en' => 'This is the city where I was born.', 'id' => 'Inilah kota tempat saya dilahirkan.'],
                ['en' => 'I know a girl whose brother is a pilot.', 'id' => 'Saya kenal seorang gadis yang saudara laki-lakinya seorang pilot.'],
            ],
        ],
        [
            'heading' => 'Defining Relative Clause',
            'body' => '<p><strong>Defining relative clause</strong> menjelaskan <strong>mana</strong> yang dimaksud dan bersifat penting untuk mengenali kata bendanya. Klausa ini <strong>tidak dipisahkan dengan koma</strong>.</p>
<ul>
<li>Untuk benda, <em>that</em> lebih sering dipakai dalam percakapan; <em>which</em> juga benar: <em>The car that/which we bought is red.</em></li>
<li>Kata ganti relatif boleh <strong>dihilangkan</strong> jika berfungsi sebagai objek: <em>The man (whom) I met yesterday is my teacher.</em></li>
<li>Kata ganti relatif sebagai <strong>subjek tidak boleh dihilangkan</strong>: <em>The woman who called you is here.</em></li>
<li>Setelah superlatif, angka, atau <em>the only/the first</em>, <em>that</em> lebih disukai: <em>This is the best film that I have ever seen.</em></li>
</ul>',
            'examples' => [
                ['en' => 'The car that we bought is red.', 'id' => 'Mobil yang kami beli berwarna merah.'],
                ['en' => 'The man I met yesterday is my new teacher.', 'id' => 'Pria yang saya temui kemarin adalah guru baru saya.'],
                ['en' => 'This is the best film that I have ever seen.', 'id' => 'Inilah film terbaik yang pernah saya tonton.'],
                ['en' => 'The woman who called you is still waiting.', 'id' => 'Wanita yang meneleponmu masih menunggu.'],
            ],
        ],
        [
            'heading' => 'Non-defining Relative Clause',
            'body' => '<p><strong>Non-defining relative clause</strong> hanya <strong>menambah informasi</strong> dan bukan bagian penting untuk mengenali kata bendanya. Klausa ini <strong>dipisahkan dengan koma</strong>, tidak boleh memakai <em>that</em>, dan kata ganti relatifnya tidak boleh dihilangkan.</p>
<blockquote><p>My brother, who works in London, is visiting us.<br>
The new restaurant, which opened last month, is excellent.</p></blockquote>
<p>Kata <em>which</em> juga bisa merujuk pada <strong>seluruh kalimat sebelumnya</strong>: <em>The proposal was rejected, which surprised the entire team.</em> (Proposal itu ditolak, yang mengejutkan seluruh tim.)</p>',
            'examples' => [
                ['en' => 'My brother, who works in London, is visiting us.', 'id' => 'Saudara laki-lakiku, yang bekerja di London, sedang berkunjung ke rumah kita.'],
                ['en' => 'The new restaurant, which opened last month, is excellent.', 'id' => 'Restoran baru, yang dibuka bulan lalu, luar biasa.'],
                ['en' => 'The proposal was rejected, which surprised everyone.', 'id' => 'Proposal itu ditolak, yang mengejutkan semua orang.'],
                ['en' => 'Her mother, whose name is Helen, is a nurse.', 'id' => 'Ibunya, yang namanya Helen, adalah seorang perawat.'],
            ],
        ],
        [
            'heading' => 'Whose, Where, When, dan Whom',
            'body' => '<p><strong>Whose</strong> menunjukkan kepemilikan dan bisa dipakai untuk orang maupun benda: <em>The company whose products are famous&hellip;</em></p>
<p><strong>Where</strong> bisa digantikan <strong>in/at/on which</strong>, dan <strong>when</strong> bisa digantikan <strong>in/on which</strong>:</p>
<ul>
<li>This is the house <strong>where</strong> I was born. = This is the house <strong>in which</strong> I was born.</li>
<li>I remember the day <strong>when</strong> we first met. = I remember the day <strong>on which</strong> we first met.</li>
</ul>
<p><strong>Whom</strong> (lebih formal) dipakai sebagai objek: <em>The colleague whom I spoke to was helpful.</em> Preposisi bisa berada di awal (<em>in which</em>) atau di akhir (<em>which he lives in</em>), tetapi <em>which</em> tidak boleh digantikan <em>that</em> jika diawali preposisi.</p>',
            'examples' => [
                ['en' => 'This is the house in which I was born.', 'id' => 'Inilah rumah tempat saya dilahirkan.'],
                ['en' => 'She works for a company whose products are sold worldwide.', 'id' => 'Dia bekerja untuk perusahaan yang produknya dijual di seluruh dunia.'],
                ['en' => 'I will never forget the day on which we first met.', 'id' => 'Saya tidak akan pernah melupakan hari pertama kita bertemu.'],
            ],
        ],
        [
            'heading' => 'Kesalahan Umum',
            'body' => '<p>Hindari kesalahan berikut saat memakai klausa relatif:</p>
<ul>
<li>Salah: <em>the book what I read</em> &rarr; Benar: <strong>the book that/which I read</strong>. Kata <em>what</em> tidak pernah dipakai setelah kata benda.</li>
<li>Klausa ber-koma tidak boleh memakai <em>that</em>: <em>My brother, that works in London&hellip;</em> &rarr; <strong>My brother, who works in London&hellip;</strong></li>
<li>Salah: <em>the man which helped me</em> &rarr; Benar: <strong>the man who/that helped me</strong> (<em>which</em> hanya untuk benda).</li>
<li>Jangan membiarkan dua kalimat terpisah tanpa penghubung: <em>The woman is a doctor. She lives next door.</em> &rarr; <strong>The woman who lives next door is a doctor.</strong></li>
</ul>',
            'examples' => [
                ['en' => 'The book that I read was fascinating.', 'id' => 'Buku yang saya baca itu sangat menarik.'],
                ['en' => 'The man who helped me is a volunteer.', 'id' => 'Pria yang menolong saya adalah seorang relawan.'],
                ['en' => 'The woman who lives next door is a doctor.', 'id' => 'Wanita yang tinggal di sebelah adalah seorang dokter.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'whose', 'phonetic' => '/huːz/', 'meaning' => 'milik siapa / yang &hellip;-nya', 'example' => 'I met a man whose son is a pilot.'],
        ['word' => 'whom', 'phonetic' => '/huːm/', 'meaning' => 'siapa (objek, formal)', 'example' => 'The colleague whom I spoke to was helpful.'],
        ['word' => 'resident', 'phonetic' => '/ˈrezɪdənt/', 'meaning' => 'penduduk', 'example' => 'The residents who live here are very friendly.'],
        ['word' => 'architect', 'phonetic' => '/ˈɑːrkɪtekt/', 'meaning' => 'arsitek', 'example' => 'She is the architect who designed the bridge.'],
        ['word' => 'historic', 'phonetic' => '/hɪˈstɒrɪk/', 'meaning' => 'bersejarah', 'example' => 'We visited the historic building which stands on the hill.'],
        ['word' => 'neighbourhood', 'phonetic' => '/ˈneɪbərhʊd/', 'meaning' => 'lingkungan tempat tinggal', 'example' => 'This is the neighbourhood where I grew up.'],
        ['word' => 'former', 'phonetic' => '/ˈfɔːrmər/', 'meaning' => 'mantan', 'example' => 'My former colleague, who now works in Jakarta, is a designer.'],
        ['word' => 'outstanding', 'phonetic' => '/aʊtˈstændɪŋ/', 'meaning' => 'luar biasa', 'example' => 'She is a student whose work is outstanding.'],
        ['word' => 'nearby', 'phonetic' => '/ˌnɪrˈbaɪ/', 'meaning' => 'di dekat sini', 'example' => 'We ate at the café which is nearby.'],
        ['word' => 'the one who', 'phonetic' => '/ðə ˈwʌn huː/', 'meaning' => 'orang yang', 'example' => 'She is the one who helped me move.'],
        ['word' => 'in which', 'phonetic' => '/ɪn wɪtʃ/', 'meaning' => 'di mana (gaya formal)', 'example' => 'This is the house in which he was born.'],
        ['word' => 'award-winning', 'phonetic' => '/ˌɔːrdˈwɪnɪŋ/', 'meaning' => 'pemenang penghargaan', 'example' => 'He is a writer whose novels have won prizes.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan kata ganti relatif yang tepat:<br><strong>&ldquo;The woman ___ lives next door is a doctor.&rdquo;</strong>',
            'options' => ['which', 'whose', 'who', 'where'],
            'answer' => 2,
            'explanation' => '<em>Who</em> dipakai untuk orang yang berfungsi sebagai subjek klausa relatif. <em>Which</em> untuk benda, <em>whose</em> untuk kepemilikan, dan <em>where</em> untuk tempat.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut:<br><strong>&ldquo;This is the best film ___ I have ever seen.&rdquo;</strong>',
            'options' => ['who', 'what', 'that', 'whose'],
            'answer' => 2,
            'explanation' => 'Setelah superlatif (<em>the best</em>), <em>that</em> lebih disukai. <em>What</em> tidak dipakai setelah kata benda, sedangkan <em>who</em> hanya untuk orang.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi klausa non-defining (dipisahkan koma):<br><strong>&ldquo;My brother, ___ works in London, is visiting us next week.&rdquo;</strong>',
            'options' => ['who', 'that', 'which', 'whose'],
            'answer' => 0,
            'explanation' => 'Klausa non-defining hanya boleh memakai <em>who</em> untuk orang atau <em>which</em> untuk benda; penggunaan <em>that</em> tidak diizinkan pada klausa ber-koma.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam frasa <strong>&ldquo;the company whose products are famous&rdquo;</strong>, kata <em>whose</em> menunjukkan&hellip;',
            'options' => ['waktu', 'tempat', 'kepemilikan', 'jumlah'],
            'answer' => 2,
            'explanation' => '<em>Whose</em> menunjukkan kepemilikan: produk itu milik perusahaan tersebut.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>My cousin Rani, who is studying medicine in Bandung, wants to work in a rural area after she graduates. She believes that a doctor whose patients live far away is especially important. The village where she hopes to work has only one small clinic, which was built ten years ago.</p></div><p>Berdasarkan teks, kapan klinik kecil itu dibangun?</p>',
            'options' => ['Sepuluh tahun yang lalu', 'Di Bandung', 'Setelah Rani lulus', 'Oleh seorang dokter desa'],
            'answer' => 0,
            'explanation' => 'Kalimat terakhir menyatakan <em>&ldquo;which was built ten years ago&rdquo;</em>, artinya klinik itu dibangun sepuluh tahun yang lalu.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan kata ganti relatif untuk kepemilikan:<br><strong>&ldquo;I know a girl ___ brother is a famous singer.&rdquo;</strong>',
            'answer' => 'whose',
            'accepted' => ['whose'],
            'explanation' => '<em>Whose</em> menyatakan kepemilikan: saudara laki-laki gadis itu.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut:<br><strong>&ldquo;This is the city ___ I was born.&rdquo;</strong>',
            'answer' => 'where',
            'accepted' => ['where', 'in which'],
            'explanation' => 'Untuk tempat, klausa relatif bisa memakai <em>where</em> atau bentuk formalnya <em>in which</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Gabungkan kedua kalimat menjadi satu dengan klausa relatif:<br>&ldquo;She lives in a house. The house is very old.&rdquo;<br>She lives in a house ___ .',
            'answer' => 'that is very old',
            'accepted' => ['that is very old', 'which is very old'],
            'explanation' => 'Kalimat kedua menjadi klausa relatif setelah <em>house</em>: <em>that/which is very old</em>, sehingga hasilnya <em>She lives in a house that is very old</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Klausa non-defining dipisahkan dengan koma dan tidak boleh memakai <strong>that</strong>.',
            'answer' => true,
            'explanation' => '<em>My brother, who works in London, ...</em> benar, sedangkan <em>My brother, that works in London, ...</em> salah karena klausa ber-koma tidak boleh memakai <em>that</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Setelah kata benda, relative pronoun <strong>what</strong> bisa digunakan, misalnya &ldquo;the book what I read&rdquo;.',
            'answer' => false,
            'explanation' => '<em>What</em> berarti &ldquo;hal yang&rdquo; dan tidak pernah dipakai setelah kata benda. Bentuk yang benar adalah <em>the book that/which I read</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata ganti relatif dengan penggunaannya.',
            'pairs' => [
                ['left' => 'who', 'right' => 'merujuk pada orang'],
                ['left' => 'which', 'right' => 'merujuk pada benda atau hal'],
                ['left' => 'whose', 'right' => 'menunjukkan kepemilikan'],
                ['left' => 'where', 'right' => 'merujuk pada tempat'],
                ['left' => 'that', 'right' => 'orang atau benda dalam defining clause'],
            ],
            'explanation' => 'Pilih kata ganti berdasarkan jenis antekodanya: orang (who/that), benda (which/that), kepemilikan (whose), dan tempat (where).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The man who is standing by the door is my uncle.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'The man who is standing by the door is my uncle.',
                'The man which is standing by the door is my uncle.',
                'The man whose standing by the door is my uncle.',
                'The woman who is standing by the door is my uncle.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>The man who is standing by the door is my uncle</em>. Kata ganti untuk orang adalah <em>who</em>, dan yang di samping pintu adalah paman (<em>uncle</em>), bukan perempuan.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut dengan klausa relatif untuk kepemilikan.',
            'target' => 'The student whose project won the competition is my classmate.',
            'hint' => 'Arti: Siswa yang proyeknya memenangkan lomba itu adalah teman sekelasku.',
            'explanation' => 'Gunakan <em>whose</em> untuk menyatakan bahwa proyek itu milik siswa tersebut, lalu letakkan klausa relatif tepat setelah noun yang dijelaskan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi klausa non-defining yang merujuk pada seluruh kalimat:<br><strong>&ldquo;The proposal, ___ surprised everyone, was rejected by the board.&rdquo;</strong>',
            'options' => ['that', 'what', 'which', 'who'],
            'answer' => 2,
            'explanation' => 'Pada klausa ber-koma yang merujuk pada situasi sebelumnya, gunakan <em>which</em>; <em>that</em> tidak boleh dipakai dalam klausa non-defining.',
        ],
    ],
];
