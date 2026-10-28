<?php

/**
 * Level 1 — Modul 06: Questions & Negatives
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
    'title' => 'Questions & Negatives',
    'slug' => 'questions-negatives',
    'subtitle' => 'Do/does, wh-questions, yes/no questions',
    'summary' => 'Pelajari cara membuat kalimat negatif dan pertanyaan dalam simple present menggunakan do/does, baik pertanyaan ya/tidak maupun pertanyaan kata tanya (wh).',
    'icon' => '❓',
    'objectives' => [
        'Membentuk kalimat negatif dengan do not dan does not',
        'Membuat pertanyaan ya/tidak dengan do/does',
        'Membuat pertanyaan kata tanya (what, where, when, who, why, how)',
        'Menjawab pertanyaan dengan jawaban pendek yang benar',
    ],
    'sections' => [
        [
            'heading' => 'Kalimat Negatif dengan Do / Does',
            'body' => '<p>Untuk membuat kalimat negatif pada simple present, gunakan <strong>do not (don\'t)</strong> atau <strong>does not (doesn\'t)</strong> lalu kata kerja <strong>bentuk dasar</strong>.</p>
<table>
<thead><tr><th>Subjek</th><th>Bentuk Negatif</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>I / you / we / they</td><td>don\'t</td><td>They don\'t play tennis on Monday.</td></tr>
<tr><td>he / she / it</td><td>doesn\'t</td><td>She doesn\'t like coffee.</td></tr>
</tbody>
</table>
<p>Setelah <em>doesn\'t</em>, kata kerja kembali ke bentuk dasar tanpa -s: <em>She doesn\'t likes coffee</em> &times; &rarr; <em>She doesn\'t like coffee</em> &check;. Akhiran -s sudah dibawa oleh <em>does</em>.</p>',
            'examples' => [
                ['en' => 'I don\'t watch television on weekdays.', 'id' => 'Saya tidak menonton televisi pada hari kerja.'],
                ['en' => 'He doesn\'t work on Sundays.', 'id' => 'Dia tidak bekerja pada hari Minggu.'],
                ['en' => 'We don\'t have a car.', 'id' => 'Kami tidak punya mobil.'],
                ['en' => 'They don\'t speak French.', 'id' => 'Mereka tidak berbicara bahasa Prancis.'],
            ],
        ],
        [
            'heading' => 'Pertanyaan Ya/Tidak (Yes/No Questions)',
            'body' => '<p>Pola pertanyaan: <strong>Do/Does + subjek + kata kerja dasar + ... + ?</strong> Kata <em>do/does</em> diletakkan <strong>sebelum subjek</strong>.</p>
<table>
<thead><tr><th>Pertanyaan</th><th>Jawaban Pendek</th></tr></thead>
<tbody>
<tr><td>Do you like music?</td><td>Yes, I do. / No, I don\'t.</td></tr>
<tr><td>Does she work here?</td><td>Yes, she does. / No, she doesn\'t.</td></tr>
<tr><td>Do they live in Jakarta?</td><td>Yes, they do. / No, they don\'t.</td></tr>
</tbody>
</table>
<p>Setelah <em>does</em>, kata kerja tetap dasar: <em>Does he goes...?</em> &times; &rarr; <strong>Does he go...?</strong> &check;. Jangan mencampur dengan to be: <em>Do you are a student?</em> &times; &rarr; <strong>Are you a student?</strong> &check;</p>',
            'examples' => [
                ['en' => 'Do you like English?', 'id' => 'Apakah kamu suka bahasa Inggris?'],
                ['en' => 'Does your father drive a car?', 'id' => 'Apakah ayahmu mengemudikan mobil?'],
                ['en' => 'Yes, he does. He drives to work every day.', 'id' => 'Ya. Dia mengemudi ke tempat kerja setiap hari.'],
                ['en' => 'No, I don\'t. I walk to school.', 'id' => 'Tidak. Saya berjalan kaki ke sekolah.'],
            ],
        ],
        [
            'heading' => 'Pertanyaan Kata Tanya (Wh-Questions)',
            'body' => '<p>Pola pertanyaan wh: <strong>Wh- + do/does + subjek + kata kerja dasar + ... + ?</strong></p>
<table>
<thead><tr><th>Wh</th><th>Fungsi</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>What</td><td>apa</td><td>What do you like to eat?</td></tr>
<tr><td>Where</td><td>di mana</td><td>Where does she work?</td></tr>
<tr><td>When</td><td>kapan</td><td>When do they arrive?</td></tr>
<tr><td>Who</td><td>siapa</td><td>Who is your teacher?</td></tr>
<tr><td>Why</td><td>mengapa</td><td>Why do you study English?</td></tr>
<tr><td>How</td><td>bagaimana</td><td>How do you spell your name?</td></tr>
</tbody>
</table>
<p>Yang ditanyakan biasanya dijawab dengan informasi sesuai fungsi wh-nya: <em>Where...?</em> dijawab tempat, <em>When...?</em> dijawab waktu.</p>',
            'examples' => [
                ['en' => 'Where do you live?', 'id' => 'Di mana kamu tinggal?'],
                ['en' => 'When does the class start?', 'id' => 'Kapan kelas dimulai?'],
                ['en' => 'Why do they study English?', 'id' => 'Mengapa mereka belajar bahasa Inggris?'],
                ['en' => 'What does your mother do?', 'id' => 'Apa pekerjaan ibumu?'],
            ],
        ],
        [
            'heading' => 'Do/Does atau To Be?',
            'body' => '<p>Gunakan <strong>do/does</strong> untuk menanyakan <strong>kegiatan, kebiasaan, dan preferensi</strong>. Gunakan <strong>to be</strong> untuk menanyakan <strong>keadaan, sifat, identitas, dan lokasi</strong>.</p>
<table>
<thead><tr><th>To Be (keadaan/identitas)</th><th>Do/Does (kegiatan/kebiasaan)</th></tr></thead>
<tbody>
<tr><td>Are you tired?</td><td>Do you play football?</td></tr>
<tr><td>Is she a teacher?</td><td>Does she work here?</td></tr>
<tr><td>Are they at home?</td><td>Do they live in Jakarta?</td></tr>
</tbody>
</table>
<p>Satu pertanyaan hanya boleh punya satu "penggerak". Perbandingan:</p>
<ul>
<li><em>Do you are happy?</em> &times; &rarr; <strong>Are you happy?</strong> &check;</li>
<li><em>Does she has a car?</em> &times; &rarr; <strong>Does she have a car?</strong> &check;</li>
<li><em>Do he like coffee?</em> &times; &rarr; <strong>Does he like coffee?</strong> &check;</li>
</ul>',
            'examples' => [
                ['en' => 'Are you ready?', 'id' => 'Apakah kamu siap?'],
                ['en' => 'Do you have a pen?', 'id' => 'Apakah kamu punya pulpen?'],
                ['en' => 'Does she study here?', 'id' => 'Apakah dia belajar di sini?'],
                ['en' => 'Is he at home now?', 'id' => 'Apakah dia di rumah sekarang?'],
            ],
        ],
        [
            'heading' => 'Kesalahan yang Sering Terjadi (Common Mistakes)',
            'body' => '<p>Empat kesalahan paling umum saat membentuk negatif dan tanya dalam simple present:</p>
<ul>
<li>Salah: <em>*She don\'t like math.</em> &rarr; Benar: <strong>She doesn\'t like math.</strong> (subjek she memakai <em>doesn\'t</em>)</li>
<li>Salah: <em>*Does he goes to school?</em> &rarr; Benar: <strong>Does he go to school?</strong> (setelah <em>does</em> memakai kata kerja dasar)</li>
<li>Salah: <em>*What she does?</em> &rarr; Benar: <strong>What does she do?</strong> (<em>does</em> harus ada di depan subjek)</li>
<li>Salah: <em>*I not have a bike.</em> &rarr; Benar: <strong>I don\'t have a bike.</strong> (negatif memakai <em>don\'t</em>)</li>
</ul>',
            'examples' => [
                ['en' => 'She doesn\'t like math.', 'id' => 'Dia tidak suka matematika.'],
                ['en' => 'Does he go to school by bus?', 'id' => 'Apakah dia pergi ke sekolah naik bus?'],
                ['en' => 'What does she do every weekend?', 'id' => 'Apa yang dia lakukan setiap akhir pekan?'],
                ['en' => 'I don\'t have a bike.', 'id' => 'Saya tidak punya sepeda.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'do', 'phonetic' => '/duː/', 'meaning' => 'kata bantu tanya/negasi (I, you, we, they)', 'example' => 'Do you like tea?'],
        ['word' => 'does', 'phonetic' => '/dʌz/', 'meaning' => 'kata bantu tanya/negasi (he, she, it)', 'example' => 'Does she work here?'],
        ['word' => "don't", 'phonetic' => '/doʊnt/', 'meaning' => 'do not; tidak', 'example' => "I don't know the answer."],
        ['word' => "doesn't", 'phonetic' => '/ˈdʌznt/', 'meaning' => 'does not; tidak', 'example' => "He doesn't play golf."],
        ['word' => 'what', 'phonetic' => '/wɒt/', 'meaning' => 'apa', 'example' => 'What is your name?'],
        ['word' => 'where', 'phonetic' => '/weər/', 'meaning' => 'di mana', 'example' => 'Where do you live?'],
        ['word' => 'when', 'phonetic' => '/wen/', 'meaning' => 'kapan', 'example' => 'When does the shop open?'],
        ['word' => 'who', 'phonetic' => '/huː/', 'meaning' => 'siapa', 'example' => 'Who is your best friend?'],
        ['word' => 'why', 'phonetic' => '/waɪ/', 'meaning' => 'mengapa', 'example' => 'Why do you study English?'],
        ['word' => 'how', 'phonetic' => '/haʊ/', 'meaning' => 'bagaimana', 'example' => 'How do you spell your name?'],
        ['word' => 'question', 'phonetic' => '/ˈkwestʃən/', 'meaning' => 'pertanyaan', 'example' => 'I have a question for you.'],
        ['word' => 'answer', 'phonetic' => '/ˈɑːnsər/', 'meaning' => 'jawaban', 'example' => 'The answer is correct.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ your brother like football?',
            'options' => ['Do', 'Does', 'Is', 'Are'],
            'answer' => 1,
            'explanation' => 'Subjek <em>your brother</em> setara <em>he</em>, sehingga pertanyaannya diawali <strong>Does</strong>: <em>Does your brother like football?</em>',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'They ___ play football on weekdays.',
            'options' => ["doesn't", "don't", 'not', "aren't"],
            'answer' => 1,
            'explanation' => 'Subjek <em>they</em> (jamak) memakai <strong>don\'t</strong>: <em>They don\'t play football on weekdays.</em> Bentuk <em>doesn\'t</em> hanya untuk he/she/it.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ does your father work?<br>&mdash; In a bank.',
            'options' => ['What', 'Where', 'Who', 'When'],
            'answer' => 1,
            'explanation' => 'Jawabannya berupa tempat (<em>In a bank</em>), jadi pertanyaannya memakai <strong>Where</strong> (di mana).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => "She doesn't ___ coffee in the evening.",
            'options' => ['likes', 'liked', 'like', 'liking'],
            'answer' => 2,
            'explanation' => "Setelah <em>doesn't</em> kata kerja tetap bentuk dasar, tanpa -s: <strong>She doesn't like coffee.</strong>",
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => '___ you like music?',
            'answer' => 'Do',
            'accepted' => ['do'],
            'explanation' => 'Subjek <em>you</em> memakai kata bantu <strong>Do</strong> di awal pertanyaan: <em>Do you like music?</em>',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My sister ___ (tidak) watch TV on school nights.',
            'answer' => "doesn't",
            'accepted' => ["doesn't", 'does not'],
            'explanation' => "Subjek <em>my sister</em> setara <em>she</em>, jadi negatifnya memakai <strong>doesn't</strong>: <em>My sister doesn't watch TV on school nights.</em>",
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => '___ is your favourite subject?<br>(Apa mata pelajaran favoritmu?)',
            'answer' => 'What',
            'accepted' => ['what'],
            'explanation' => 'Pertanyaan tentang "apa" memakai <strong>What</strong>: <em>What is your favourite subject?</em> Jawaban tidak membedakan huruf besar/kecil.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Setelah kata "does", kata kerja utama tetap diberi akhiran -s, misalnya "Does she goes to school?"',
            'answer' => false,
            'explanation' => 'Akhiran -s sudah dibawa oleh <em>does</em>, sehingga kata kerja sesudahnya tetap dasar. Yang benar: <strong>Does she go to school?</strong>',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Pertanyaan "Do you have a car?" dijawab dengan "Yes, I do." atau "No, I don\'t."',
            'answer' => true,
            'explanation' => 'Pertanyaan yang diawali <em>do</em> dijawab pendek dengan <em>do</em> juga, begitu pula <em>does</em> dijawab dengan <em>does</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan pertanyaan kata tanya (wh) dengan artinya.',
            'pairs' => [
                ['left' => 'What', 'right' => 'Apa'],
                ['left' => 'Where', 'right' => 'Di mana'],
                ['left' => 'When', 'right' => 'Kapan'],
                ['left' => 'Who', 'right' => 'Siapa'],
                ['left' => 'Why', 'right' => 'Mengapa'],
            ],
            'explanation' => 'Setiap wh- punya fungsi tetap: <em>What</em> untuk benda/kegiatan, <em>Where</em> untuk tempat, <em>When</em> untuk waktu, <em>Who</em> untuk orang, <em>Why</em> untuk alasan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Does your mother work on Saturday?',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'Does your mother work on Saturday?',
                'Do your mother work on Saturday?',
                'Does your mother works on Saturday?',
                'Did your mother work on Saturday?',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>Does your mother work on Saturday?</em>: subjek <em>your mother</em> (she) memakai <em>does</em>, dan kata kerja tetap dasar <em>work</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => "They don't play tennis on Mondays.",
            'prompt' => 'Dengarkan audio, lalu lengkapi kata yang hilang:<br>&ldquo;They ___ play tennis on Mondays.&rdquo;',
            'answer' => "don't",
            'accepted' => ["don't", 'do not'],
            'explanation' => "Kalimat yang terdengar: <em>They don't play tennis on Mondays</em> (Mereka tidak bermain tenis pada hari Senin).",
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Interviewer: Do you live with your family?<br>Andi: Yes, I do. I live with my parents and my younger sister.<br>Interviewer: Where do you study?<br>Andi: I study at a high school near my house. I usually walk to school.<br>Interviewer: Does your sister study there too?<br>Andi: No, she doesn\'t. She studies at a different school.</p></div><p>Bagaimana Andi pergi ke sekolah?</p>',
            'options' => ['Naik bus', 'Dengan berjalan kaki', 'Naik mobil', 'Naik sepeda'],
            'answer' => 1,
            'explanation' => 'Kalimat <em>&ldquo;I usually walk to school&rdquo;</em> menunjukkan Andi berjalan kaki ke sekolah.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan pertanyaan ya/tidak berikut kepada gurumu.',
            'target' => 'Do you like learning English?',
            'hint' => 'Arti: Apakah kamu suka belajar bahasa Inggris?',
            'explanation' => 'Pertanyaan diawali <strong>Do</strong> karena subjeknya <em>you</em>, lalu disusul subjek dan kata kerja dasar.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat negatif berikut tentang saudaramu.',
            'target' => "My brother doesn't work on Sundays.",
            'hint' => 'Arti: Saudaraku tidak bekerja pada hari Minggu.',
            'explanation' => "Subjek <em>my brother</em> (he) memakai <strong>doesn't</strong>, dan kata kerja sesudahnya tetap dasar <em>work</em>.",
        ],
    ],
];
