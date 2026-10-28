<?php

/**
 * Level 1 — Modul 02: Basic Sentence Structure
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
    'title' => 'Basic Sentence Structure',
    'slug' => 'basic-sentence-structure',
    'subtitle' => 'Subject, verb, object, pronouns, word order',
    'summary' => 'Pelajari struktur dasar kalimat bahasa Inggris: subjek, kata kerja, objek, kata ganti, dan urutan kata yang benar.',
    'icon' => '🧩',
    'objectives' => [
        'Mengenali bagian subjek, kata kerja, dan objek dalam kalimat',
        'Menggunakan subject pronoun dengan tepat',
        'Menggunakan object pronoun setelah kata kerja dan preposisi',
        'Menyusun kalimat dengan urutan kata yang benar',
    ],
    'sections' => [
        [
            'heading' => 'Struktur Kalimat Dasar (Subject + Verb + Object)',
            'body' => '<p>Kalimat bahasa Inggris yang lengkap minimal terdiri atas <strong>subjek</strong> (pelaku) dan <strong>kata kerja</strong> (<em>verb</em>). Banyak kata kerja juga membutuhkan <strong>objek</strong> (penerima aksi). Pola dasarnya adalah <strong>S + V + O</strong>.</p>
<table>
<thead><tr><th>Subjek (S)</th><th>Kata Kerja (V)</th><th>Objek (O)</th></tr></thead>
<tbody>
<tr><td>I</td><td>like</td><td>English.</td></tr>
<tr><td>She</td><td>reads</td><td>a book.</td></tr>
<tr><td>They</td><td>play</td><td>football.</td></tr>
<tr><td>My father</td><td>buys</td><td>vegetables.</td></tr>
</tbody>
</table>
<p>Sebagian kata kerja tidak membutuhkan objek, misalnya <em>sleep, go, work, arrive</em>: <strong>I sleep.</strong> atau <strong>They arrive at seven.</strong></p>',
            'examples' => [
                ['en' => 'I read a book every night.', 'id' => 'Saya membaca buku setiap malam.'],
                ['en' => 'My father buys vegetables at the market.', 'id' => 'Ayahku membeli sayur di pasar.'],
                ['en' => 'She plays the piano.', 'id' => 'Dia bermain piano.'],
                ['en' => 'We watch television in the evening.', 'id' => 'Kami menonton televisi pada malam hari.'],
            ],
        ],
        [
            'heading' => 'Subject Pronouns (Kata Ganti Subjek)',
            'body' => '<p>Kata ganti subjek dipakai <strong>sebelum kata kerja</strong> sebagai pengganti nama orang atau benda. Dengan begitu, kalimat tidak terasa berulang.</p>
<table>
<thead><tr><th>Subject Pronoun</th><th>Arti</th><th>Catatan</th></tr></thead>
<tbody>
<tr><td>I</td><td>saya</td><td>selalu huruf besar</td></tr>
<tr><td>you</td><td>kamu / anda</td><td>tunggal maupun jamak</td></tr>
<tr><td>he</td><td>dia (laki-laki)</td><td>orang ketiga tunggal</td></tr>
<tr><td>she</td><td>dia (perempuan)</td><td>orang ketiga tunggal</td></tr>
<tr><td>it</td><td>dia / itu (benda, hewan)</td><td>benda tunggal</td></tr>
<tr><td>we</td><td>kami / kita</td><td>orang pertama jamak</td></tr>
<tr><td>they</td><td>mereka</td><td>orang ketiga jamak</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'He is my brother. He works in Jakarta.', 'id' => 'Dia saudara laki-lakiku. Dia bekerja di Jakarta.'],
                ['en' => 'She is a teacher. She teaches mathematics.', 'id' => 'Dia seorang guru. Dia mengajar matematika.'],
                ['en' => 'It is a black cat. It is very cute.', 'id' => 'Itu kucing hitam. Kucing itu sangat lucu.'],
                ['en' => 'They are my friends. They live nearby.', 'id' => 'Mereka teman-temanku. Mereka tinggal di dekat sini.'],
            ],
        ],
        [
            'heading' => 'Object Pronouns (Kata Ganti Objek)',
            'body' => '<p>Jika kata ganti berada <strong>setelah kata kerja</strong> atau <strong>setelah preposisi</strong>, bentuknya berubah menjadi objek pronoun.</p>
<table>
<thead><tr><th>Subject</th><th>Object</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>I</td><td>me</td><td>The teacher likes <strong>me</strong>.</td></tr>
<tr><td>you</td><td>you</td><td>I help <strong>you</strong>.</td></tr>
<tr><td>he</td><td>him</td><td>I see <strong>him</strong> every day.</td></tr>
<tr><td>she</td><td>her</td><td>We visit <strong>her</strong> on Sunday.</td></tr>
<tr><td>it</td><td>it</td><td>I play with <strong>it</strong> often.</td></tr>
<tr><td>we</td><td>us</td><td>They invite <strong>us</strong> to dinner.</td></tr>
<tr><td>they</td><td>them</td><td>I know <strong>them</strong> very well.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'My teacher likes us because we always study hard.', 'id' => 'Guruku menyukai kami karena kami selalu belajar keras.'],
                ['en' => 'I see him every morning at the park.', 'id' => 'Saya melihat dia setiap pagi di taman.'],
                ['en' => 'We help her with her homework.', 'id' => 'Kami membantu dia mengerjakan PR-nya.'],
                ['en' => 'I love my dog. I play with it every day.', 'id' => 'Saya menyukai anjingku. Saya bermain dengannya setiap hari.'],
            ],
        ],
        [
            'heading' => 'Urutan Kata (Word Order)',
            'body' => '<p>Urutan kata bahasa Inggris relatif tetap. Pola yang paling umum adalah:</p>
<blockquote><p><strong>Subjek + Kata Kerja + Objek + Keterangan Tempat + Keterangan Waktu</strong></p></blockquote>
<p>Keterangan waktu seperti <em>every day, at seven o\'clock, after school</em> biasanya diletakkan di <strong>akhir kalimat</strong>. Lain kali kamu mengubahnya ke awal kalimat pun, bagian utama S + V + O tetap tidak berubah.</p>
<table>
<thead><tr><th>Subjek</th><th>Kata Kerja</th><th>Objek</th><th>Keterangan Tempat</th><th>Keterangan Waktu</th></tr></thead>
<tbody>
<tr><td>She</td><td>reads</td><td>a book</td><td>in the library</td><td>every day.</td></tr>
<tr><td>They</td><td>play</td><td>football</td><td>in the field</td><td>after school.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'I eat breakfast at seven o\'clock.', 'id' => 'Saya makan sarapan pada pukul tujuh.'],
                ['en' => 'They go home after school.', 'id' => 'Mereka pulang setelah sekolah.'],
                ['en' => 'My sister works in a hospital in Surabaya.', 'id' => 'Saudaraku bekerja di sebuah rumah sakit di Surabaya.'],
                ['en' => 'We watch a film together on Saturday.', 'id' => 'Kami menonton film bersama pada hari Sabtu.'],
            ],
        ],
        [
            'heading' => 'Kesalahan yang Sering Terjadi (Common Mistakes)',
            'body' => '<p>Pelajar pemula sering memakai bentuk kata ganti yang salah. Ingatlah dua aturan ini:</p>
<ul>
<li>Sebelum kata kerja (posisi subjek) memakai bentuk subjek: <em>I, he, she, we, they</em>.</li>
<li>Setelah kata kerja atau preposisi memakai bentuk objek: <em>me, him, her, us, them</em>.</li>
</ul>
<p>Perhatikan perbandingan berikut:</p>
<ul>
<li>Salah: <em>*Me is a student.</em> &rarr; Benar: <strong>I am a student.</strong></li>
<li>Salah: <em>*I like he.</em> &rarr; Benar: <strong>I like him.</strong></li>
<li>Salah: <em>*This book is for she.</em> &rarr; Benar: <strong>This book is for her.</strong></li>
<li>Salah: <em>*Her is my friend.</em> &rarr; Benar: <strong>She is my friend.</strong></li>
</ul>',
            'examples' => [
                ['en' => 'I am a student.', 'id' => 'Saya seorang pelajar. (bukan "Me is a student")'],
                ['en' => 'I like him.', 'id' => 'Saya menyukai dia. (bukan "I like he")'],
                ['en' => 'This book is for her.', 'id' => 'Buku ini untuk dia. (bukan "for she")'],
                ['en' => 'They help us.', 'id' => 'Mereka membantu kami. (bukan "They help we")'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'subject', 'phonetic' => '/ˈsʌbdʒɪkt/', 'meaning' => 'subjek (pelaku kalimat)', 'example' => 'The subject comes before the verb.'],
        ['word' => 'verb', 'phonetic' => '/vɜːb/', 'meaning' => 'kata kerja', 'example' => 'Every sentence needs a verb.'],
        ['word' => 'object', 'phonetic' => '/ˈɒbdʒɪkt/', 'meaning' => 'objek (penerima aksi)', 'example' => 'In "I read a book", "a book" is the object.'],
        ['word' => 'pronoun', 'phonetic' => '/ˈprəʊnaʊn/', 'meaning' => 'kata ganti', 'example' => 'Use a pronoun to avoid repetition.'],
        ['word' => 'sentence', 'phonetic' => '/ˈsentəns/', 'meaning' => 'kalimat', 'example' => 'A sentence begins with a capital letter.'],
        ['word' => 'he', 'phonetic' => '/hiː/', 'meaning' => 'dia (laki-laki)', 'example' => 'He is my best friend.'],
        ['word' => 'she', 'phonetic' => '/ʃiː/', 'meaning' => 'dia (perempuan)', 'example' => 'She works in a bank.'],
        ['word' => 'it', 'phonetic' => '/ɪt/', 'meaning' => 'dia / itu (benda atau hewan)', 'example' => 'It is a small dog.'],
        ['word' => 'we', 'phonetic' => '/wiː/', 'meaning' => 'kami / kita', 'example' => 'We live in Jakarta.'],
        ['word' => 'they', 'phonetic' => '/ðeɪ/', 'meaning' => 'mereka', 'example' => 'They are students.'],
        ['word' => 'him', 'phonetic' => '/hɪm/', 'meaning' => 'dia (objek, laki-laki)', 'example' => 'I know him very well.'],
        ['word' => 'her', 'phonetic' => '/hɜːr/', 'meaning' => 'dia (objek, perempuan) / miliknya', 'example' => 'We visit her every week.'],
        ['word' => 'them', 'phonetic' => '/ðem/', 'meaning' => 'mereka (objek)', 'example' => 'I see them at school.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih kalimat dengan urutan kata yang benar.',
            'options' => [
                'They play football after school.',
                'Play they football after school.',
                'They football play after school.',
                'After school they football play.',
            ],
            'answer' => 0,
            'explanation' => 'Urutan kata bahasa Inggris adalah subjek + kata kerja + objek + keterangan, sehingga kalimat yang benar adalah <em>They play football after school</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ is my sister. She works as a nurse.',
            'options' => ['He', 'She', 'Her', 'They'],
            'answer' => 1,
            'explanation' => 'Kalimat lanjutannya memakai <em>she works</em>, jadi subjeknya perempuan: <strong>She</strong>. <em>Her</em> adalah bentuk objek/possessive, bukan subjek.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'The teacher likes ___ because we always study hard.',
            'options' => ['we', 'us', 'our', 'ours'],
            'answer' => 1,
            'explanation' => 'Setelah kata kerja <em>likes</em> diperlukan bentuk objek, sehingga kata ganti subjek <em>we</em> berubah menjadi <strong>us</strong>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Kata ganti orang pertama jamak dalam bahasa Inggris adalah ___.',
            'options' => ['You', 'We', 'They', 'He'],
            'answer' => 1,
            'explanation' => '<strong>We</strong> berarti "kami/kita" (orang pertama jamak). <em>You</em> = kamu/anda, <em>They</em> = mereka, <em>He</em> = dia (laki-laki).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'This is my brother. I love ___ very much.',
            'answer' => 'him',
            'accepted' => ['him'],
            'explanation' => 'Setelah kata kerja <em>love</em> dipakai bentuk objek. Untuk laki-laki bentuk objeknya adalah <strong>him</strong>, bukan <em>he</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => '___ go to school by bus every day. (Kami pergi ke sekolah naik bus setiap hari.)',
            'answer' => 'We',
            'accepted' => ['we'],
            'explanation' => 'Kalimat membutuhkan subjek orang pertama jamak, yaitu <strong>We</strong>. Jawaban tidak membedakan huruf besar/kecil.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'I have a cat. ___ name is Mimi.',
            'answer' => 'Its',
            'accepted' => ['its'],
            'explanation' => '<strong>Its</strong> (tanpa apostrof) adalah kata ganti kepemilikan untuk benda/hewan. <em>It\'s</em> adalah singkatan dari <em>it is</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam kalimat bahasa Inggris yang biasa, subjek diletakkan sebelum kata kerja (Subjek + Kata Kerja).',
            'answer' => true,
            'explanation' => 'Urutan baku bahasa Inggris adalah Subjek &rarr; Kata Kerja &rarr; (Objek), misalnya <em>She reads a book</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kata "her" hanya bisa berarti "miliknya" (possessive).',
            'answer' => false,
            'explanation' => '<em>Her</em> juga bisa berfungsi sebagai kata ganti objek, misalnya <em>I like her</em> (saya menyukai dia). Artinya tergantung posisi dalam kalimat.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata ganti subjek dengan artinya.',
            'pairs' => [
                ['left' => 'I', 'right' => 'Saya'],
                ['left' => 'You', 'right' => 'Kamu / Anda'],
                ['left' => 'He', 'right' => 'Dia (laki-laki)'],
                ['left' => 'She', 'right' => 'Dia (perempuan)'],
                ['left' => 'They', 'right' => 'Mereka'],
            ],
            'explanation' => 'Kata ganti subjek selalu diletakkan sebelum kata kerja, contoh: <em>He works here.</em>',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'My brother works in a bank.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'My brother works in a bank.',
                'My sister works in a bank.',
                'My brother works in a school.',
                'My brothers work in a bank.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>My brother works in a bank</em> (Saudaraku bekerja di bank), dengan subjek <em>brother</em> tunggal sehingga kata kerjanya <em>works</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>My name is Andi. I am a student. I have one sister named Dita. Dita works at a hospital in the city. Every morning, I walk to school and Dita drives her car to work.</p></div><p>Siapa yang bekerja di rumah sakit?</p>',
            'options' => ['Andi', 'Dita', 'Ibu Andi', 'Teman Andi'],
            'answer' => 1,
            'explanation' => 'Kalimat <em>&ldquo;Dita works at a hospital&rdquo;</em> menunjukkan yang bekerja di rumah sakit adalah Dita, bukan Andi.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut dengan urutan kata yang benar.',
            'target' => 'My sister works in a bank.',
            'hint' => 'Arti: Saudaraku bekerja di bank.',
            'explanation' => 'Urutannya: subjek (<em>My sister</em>) + kata kerja (<em>works</em>) + keterangan tempat (<em>in a bank</em>).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat ini untuk menyatakan apa yang mereka lakukan setelah sekolah.',
            'target' => 'They play football after school.',
            'hint' => 'Arti: Mereka bermain sepak bola setelah sekolah.',
            'explanation' => 'Strukturnya: subjek (<em>They</em>) + kata kerja (<em>play</em>) + objek (<em>football</em>) + keterangan waktu (<em>after school</em>).',
        ],
    ],
];
