<?php

/**
 * Level 1 — Modul 07: Present Continuous
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
    'title' => 'Present Continuous',
    'slug' => 'present-continuous',
    'subtitle' => 'Kegiatan yang sedang berlangsung (am/is/are + verb-ing)',
    'summary' => 'Belajar membentuk dan menggunakan present continuous untuk menceritakan kegiatan yang sedang berlangsung sekarang, termasuk bentuk negatif, tanya, dan kata kuncinya.',
    'icon' => '⏳',
    'objectives' => [
        'Membentuk kalimat present continuous yang benar (am/is/are + verb-ing)',
        'Menggunakan kata kunci seperti now, right now, dan at the moment',
        'Membuat bentuk negatif dan tanya dalam present continuous',
        'Membedakan present continuous dengan simple present',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Present Continuous?',
            'body' => '<p><strong>Present continuous</strong> digunakan untuk menceritakan kegiatan yang <strong>sedang berlangsung</strong> pada saat kita bicara, atau kegiatan yang sifatnya sementara di sekitar waktu sekarang.</p>
<p>Rumusnya: <strong>Subject + am / is / are + verb-ing</strong></p>
<ul>
<li><strong>I am</strong> reading a book now. (Saya sedang membaca buku sekarang.)</li>
<li><strong>She is</strong> cooking in the kitchen. (Dia sedang memasak di dapur.)</li>
<li><strong>They are</strong> playing football in the park. (Mereka sedang bermain sepak bola di taman.)</li>
</ul>
<p>Perhatikan penggunaan <em>am</em> untuk <em>I</em>, <em>is</em> untuk subjek tunggal (<em>he, she, it</em>), dan <em>are</em> untuk subjek jamak (<em>we, you, they</em>).</p>',
            'examples' => [
                ['en' => 'I am studying English right now.', 'id' => 'Saya sedang belajar bahasa Inggris sekarang.'],
                ['en' => 'My mother is making a cake in the kitchen.', 'id' => 'Ibuku sedang membuat kue di dapur.'],
                ['en' => 'The students are listening to the teacher.', 'id' => 'Para siswa sedang mendengarkan guru.'],
                ['en' => 'We are having lunch at the moment.', 'id' => 'Kami sedang makan siang saat ini.'],
            ],
        ],
        [
            'heading' => 'Bentuk Negatif dan Tanya',
            'body' => '<p>Bentuk negatif dibuat dengan menambahkan <strong>not</strong> setelah <em>am/is/are</em>. Bentuk tanya dimulai dengan <em>am/is/are</em> sebelum subjek.</p>
<table>
<thead><tr><th>Rumus</th><th>Contoh</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>Subject + am/is/are + <strong>not</strong> + verb-ing</td><td>I am not sleeping now.</td><td>Saya tidak sedang tidur sekarang.</td></tr>
<tr><td><strong>Am/Is/Are</strong> + subject + verb-ing ...?</td><td>Is she studying?</td><td>Apakah dia sedang belajar?</td></tr>
<tr><td>Wh-word + am/is/are + subject + verb-ing ...?</td><td>What are you doing?</td><td>Apa yang sedang kamu lakukan?</td></tr>
</tbody>
</table>
<p>Jawaban singkatnya: <em>Yes, she is.</em> atau <em>No, she isn&rsquo;t.</em></p>',
            'examples' => [
                ['en' => 'He is not watching television now.', 'id' => 'Dia tidak sedang menonton televisi sekarang.'],
                ['en' => 'Are they playing in the garden?', 'id' => 'Apakah mereka sedang bermain di taman?'],
                ['en' => 'Where is your father working right now?', 'id' => 'Di mana ayahmu sedang bekerja sekarang?'],
            ],
        ],
        [
            'heading' => 'Kata Kunci (Signal Words)',
            'body' => '<p>Beberapa kata sering muncul bersama present continuous:</p>
<ul>
<li><strong>now</strong> (sekarang), <strong>right now</strong> (tepat sekarang), <strong>at the moment</strong> (saat ini)</li>
<li><strong>currently</strong> (saat ini), <strong>today</strong> (hari ini), <strong>this week</strong> (minggu ini)</li>
<li>Kata perintah seperti <strong>Look!</strong> (Lihat!) dan <strong>Listen!</strong> (Dengarkan!) juga menandakan kegiatan yang sedang terjadi di depan mata.</li>
</ul>
<p>Kata kunci ini membantu kita memilih antara present continuous dan simple present.</p>',
            'examples' => [
                ['en' => 'Look! It is raining outside.', 'id' => 'Lihat! Sedang hujan di luar.'],
                ['en' => 'Listen! Someone is playing the guitar upstairs.', 'id' => 'Dengarkan! Seseorang sedang bermain gitar di lantai atas.'],
                ['en' => 'I am busy today. I am cleaning the whole house.', 'id' => 'Saya sibuk hari ini. Saya sedang membersihkan seluruh rumah.'],
            ],
        ],
        [
            'heading' => 'Cara Membentuk Kata Kerja + -ing',
            'body' => '<p>Sebagian besar kata kerja cukup ditambah <strong>-ing</strong>, tetapi ada beberapa aturan ejaan yang perlu diperhatikan.</p>
<table>
<thead><tr><th>Aturan</th><th>Kata Kerja</th><th>Bentuk -ing</th></tr></thead>
<tbody>
<tr><td>Tambah -ing</td><td>play, wait, listen</td><td>playing, waiting, listening</td></tr>
<tr><td>Hapus huruf -e, lalu tambah -ing</td><td>write, make, take</td><td>writing, making, taking</td></tr>
<tr><td>Gandakan huruf konsonan terakhir</td><td>run, swim, sit</td><td>running, swimming, sitting</td></tr>
<tr><td>-ie berubah menjadi -y, lalu tambah -ing</td><td>lie, die</td><td>lying, dying</td></tr>
</tbody>
</table>
<p>Aturan penggandaan huruf konsonan berlaku untuk kata kerja satu suku kata yang berakhiran konsonan + vokal + konsonan, seperti <em>run, swim, sit,</em> dan <em>get</em>.</p>',
            'examples' => [
                ['en' => 'I am writing a letter to my pen pal.', 'id' => 'Saya sedang menulis surat untuk teman korespondensiku.'],
                ['en' => 'The baby is crying. She is not sleeping.', 'id' => 'Bayi itu sedang menangis. Dia tidak sedang tidur.'],
                ['en' => 'We are running to catch the bus.', 'id' => 'Kami sedang berlari untuk mengejar bus.'],
            ],
        ],
        [
            'heading' => 'Present Continuous vs Simple Present',
            'body' => '<p><strong>Simple present</strong> dipakai untuk kebiasaan dan rutinitas, sedangkan <strong>present continuous</strong> dipakai untuk kegiatan yang sedang berlangsung.</p>
<table>
<thead><tr><th>Simple Present (kebiasaan)</th><th>Present Continuous (sedang berlangsung)</th></tr></thead>
<tbody>
<tr><td>I go to school every day.<br>(Saya pergi ke sekolah setiap hari.)</td><td>I am going to school now.<br>(Saya sedang pergi ke sekolah sekarang.)</td></tr>
<tr><td>She usually watches TV at night.<br>(Biasanya dia menonton TV pada malam hari.)</td><td>She is watching TV at the moment.<br>(Dia sedang menonton TV saat ini.)</td></tr>
</tbody>
</table>
<p>Catatan penting: kata kerja perasaan dan pikiran seperti <em>like, love, want, know, understand,</em> dan <em>believe</em> biasanya tidak dipakai dalam bentuk continuous. Kita mengatakan <em>&ldquo;I like this song&rdquo;</em>, bukan <em>&ldquo;I am liking this song&rdquo;</em>.</p>',
            'examples' => [
                ['en' => 'Every morning, my father drinks coffee. This morning, he is drinking tea.', 'id' => 'Setiap pagi ayahku minum kopi. Pagi ini, dia sedang minum teh.'],
                ['en' => 'They usually walk to school, but today they are taking the bus.', 'id' => 'Biasanya mereka berjalan kaki ke sekolah, tetapi hari ini mereka sedang naik bus.'],
                ['en' => 'I understand the lesson now.', 'id' => 'Saya memahami pelajaran sekarang.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'now', 'phonetic' => '/naʊ/', 'meaning' => 'sekarang', 'example' => 'I am busy now.'],
        ['word' => 'right now', 'phonetic' => '/raɪt naʊ/', 'meaning' => 'tepat sekarang', 'example' => 'He is in class right now.'],
        ['word' => 'at the moment', 'phonetic' => '/ət ðə ˈməʊmənt/', 'meaning' => 'saat ini', 'example' => 'She is studying English at the moment.'],
        ['word' => 'currently', 'phonetic' => '/ˈkʌrəntli/', 'meaning' => 'saat ini / untuk sementara', 'example' => 'My father is currently working in Jakarta.'],
        ['word' => 'busy', 'phonetic' => '/ˈbɪzi/', 'meaning' => 'sibuk', 'example' => 'Mom is busy cooking dinner.'],
        ['word' => 'listen', 'phonetic' => '/ˈlɪsn/', 'meaning' => 'mendengarkan', 'example' => 'I am listening to my favorite song.'],
        ['word' => 'look', 'phonetic' => '/lʊk/', 'meaning' => 'lihat', 'example' => 'Look! The children are playing outside.'],
        ['word' => 'rain', 'phonetic' => '/reɪn/', 'meaning' => 'hujan / turun hujan', 'example' => 'It is raining outside now.'],
        ['word' => 'cook', 'phonetic' => '/kʊk/', 'meaning' => 'memasak', 'example' => 'My sister is cooking fried rice.'],
        ['word' => 'study', 'phonetic' => '/ˈstʌdi/', 'meaning' => 'belajar', 'example' => 'We are studying English now.'],
        ['word' => 'run', 'phonetic' => '/rʌn/', 'meaning' => 'berlari', 'example' => 'The dog is running in the garden.'],
        ['word' => 'sleep', 'phonetic' => '/sliːp/', 'meaning' => 'tidur', 'example' => 'The baby is sleeping in her room.'],
        ['word' => 'wait', 'phonetic' => '/weɪt/', 'meaning' => 'menunggu', 'example' => 'I am waiting for the bus at the bus stop.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Look! The baby ___.',
            'options' => ['sleep', 'sleeps', 'is sleeping', 'slept'],
            'answer' => 2,
            'explanation' => 'Kata <em>Look!</em> menunjukkan kegiatan yang sedang terjadi sekarang, sehingga dipakai present continuous: <em>is sleeping</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'They ___ TV at the moment.',
            'options' => ['watch', 'watches', 'are watching', 'watched'],
            'answer' => 2,
            'explanation' => 'Subjek jamak <em>they</em> menggunakan <em>are</em> + kata kerja -ing. Ungkapan <em>at the moment</em> menunjukkan kegiatan yang sedang berlangsung.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'My friends and I ___ in the park right now.',
            'options' => ['am walking', 'is walking', 'are walking', 'walking'],
            'answer' => 2,
            'explanation' => '<em>My friends and I</em> berarti <em>we</em> (subjek jamak), sehingga menggunakan <em>are walking</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Which one is the correct question form?',
            'options' => ['Are you listening to me?', 'You are listening to me?', 'Do you listening to me?', 'Is you listening to me?'],
            'answer' => 0,
            'explanation' => 'Pertanyaan present continuous dimulai dengan <em>am/is/are</em>, lalu subjek, lalu kata kerja -ing: <em>Are you listening to me?</em>',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'She ___ (be) busy at the moment.',
            'answer' => 'is',
            'accepted' => ['is'],
            'explanation' => 'Subjek <em>she</em> selalu menggunakan <em>is</em> sebelum kata kerja -ing: <em>She is busy at the moment</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'The students are ___ (study) English now.',
            'answer' => 'studying',
            'accepted' => ['studying'],
            'explanation' => 'Kata kerja <em>study</em> berakhiran huruf y, sehingga menjadi <em>studying</em> saat ditambah -ing.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'It is ___ (rain) outside. Take your umbrella.',
            'answer' => 'raining',
            'accepted' => ['raining'],
            'explanation' => 'Bentuk present continuous dari <em>rain</em> adalah <em>raining</em>: <em>It is raining outside</em> (sedang hujan di luar).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Tulis bentuk present continuous dari kata kerja &ldquo;write&rdquo; untuk subjek <em>I</em>: I am ___ (write) an email now.',
            'answer' => 'writing',
            'accepted' => ['writing'],
            'explanation' => 'Kata kerja berakhiran -e diam-diam menghapus huruf -e sebelum ditambah -ing: <em>write &rarr; writing</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;He playing football now&rdquo; sudah benar.',
            'answer' => false,
            'explanation' => 'Present continuous membutuhkan kata kerja <em>to be</em>. Kalimat yang benar: <em>He is playing football now</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;I am knowing the answer&rdquo; sudah benar.',
            'answer' => false,
            'explanation' => 'Kata kerja pikiran seperti <em>know, like, want,</em> dan <em>understand</em> tidak dipakai dalam bentuk continuous. Yang benar: <em>I know the answer</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata kunci berikut dengan artinya.',
            'pairs' => [
                ['left' => 'now', 'right' => 'sekarang'],
                ['left' => 'right now', 'right' => 'tepat sekarang'],
                ['left' => 'at the moment', 'right' => 'saat ini'],
                ['left' => 'every day', 'right' => 'setiap hari'],
                ['left' => 'this week', 'right' => 'minggu ini'],
            ],
            'explanation' => 'Kata <em>now, right now, at the moment,</em> dan <em>this week</em> sering dipakai bersama present continuous, sedangkan <em>every day</em> adalah penanda kebiasaan (simple present).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Listen! The girls are singing in the classroom.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'The girls are singing in the classroom.',
                'The girls are studying in the classroom.',
                'The girls sing in the classroom every day.',
                'The girls sang in the classroom yesterday.',
            ],
            'answer' => 0,
            'explanation' => 'Kata <em>Listen!</em> dan bentuk <em>are singing</em> menunjukkan kalimat yang benar adalah &ldquo;The girls are singing in the classroom.&rdquo;',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'My father is driving to work right now.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;My father is ___ to work right now.&rdquo;',
            'answer' => 'driving',
            'accepted' => ['driving'],
            'explanation' => 'Kalimat yang terdengar: <em>My father is driving to work right now</em> (Ayahku sedang menyetir mobil ke tempat kerja sekarang).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>It is Saturday afternoon. The family is at home. Mom is cooking fried rice in the kitchen. Dad is reading a newspaper in the living room. Andi and his sister, Lala, are playing a game in their room. Everyone is busy, but they are happy.</p></div><p>Apa yang sedang dilakukan Andi dan Lala?</p>',
            'options' => [
                'Mereka sedang memasak nasi goreng.',
                'Mereka sedang membaca koran.',
                'Mereka sedang bermain game.',
                'Mereka sedang menonton televisi.',
            ],
            'answer' => 2,
            'explanation' => 'Kalimat <em>&ldquo;Andi and his sister, Lala, are playing a game in their room&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan kegiatanmu saat ini dengan kalimat berikut.',
            'target' => 'I am studying English right now.',
            'hint' => 'Arti: Saya sedang belajar bahasa Inggris tepat sekarang.',
            'explanation' => 'Gunakan pola <em>I am + verb-ing</em> untuk menceritakan kegiatan yang sedang kamu lakukan.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Katakan bahwa keluargamu sedang makan siang saat ini dengan kalimat berikut.',
            'target' => 'We are having lunch at the moment.',
            'hint' => 'Arti: Kami sedang makan siang saat ini.',
            'explanation' => 'Subjek <em>we</em> menggunakan <em>are</em> + kata kerja -ing; ungkapan <em>have lunch</em> berarti makan siang.',
        ],
    ],
];
