<?php

/**
 * Level 1 — Modul 12: Modal Basics
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
    'title' => 'Modal Basics',
    'slug' => 'modal-basics',
    'subtitle' => 'Can, should, must, have to',
    'summary' => 'Belajar kata kerja modal dasar: can untuk kemampuan dan izin, should untuk saran, serta must dan have to untuk kewajiban.',
    'icon' => '💡',
    'objectives' => [
        'Menggunakan can untuk menyatakan kemampuan dan meminta izin',
        'Menggunakan should untuk memberi dan meminta saran',
        'Menggunakan must dan have to untuk menyatakan kewajiban',
        'Membedakan mustn\'t (dilarang) dengan don\'t have to (tidak perlu)',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Modal Verbs?',
            'body' => '<p><strong>Modal verbs</strong> (kata kerja modal) adalah kata kecil yang dipakai bersama kata kerja utama untuk menyatakan <em>kemampuan</em>, <em>saran</em>, <em>kewajiban</em>, dan <em>izin</em>. Modal yang akan dipelajari di sini adalah <strong>can</strong>, <strong>should</strong>, <strong>must</strong>, dan <strong>have to</strong>.</p>
<ul>
<li>Modal selalu diikuti kata kerja dasar tanpa <em>to</em>: <strong>can swim</strong>, bukan <em>can swims</em> atau <em>can to swim</em>.</li>
<li>Modal tidak berubah bentuk untuk semua subjek: <em>I can, she can, they can</em>.</li>
<li>Membentuk pertanyaan cukup dengan memindahkan modal ke depan: <strong>Can you swim?</strong>, <strong>Should I wait?</strong></li>
<li>Membentuk negatif dengan menambah <em>not</em>: <strong>can not (can\'t)</strong>, <strong>should not (shouldn\'t)</strong>, <strong>must not (mustn\'t)</strong>, <strong>do not have to (don\'t have to)</strong>.</li>
</ul>',
            'examples' => [
                ['en' => 'I can swim.', 'id' => 'Saya bisa berenang.'],
                ['en' => 'She should rest now.', 'id' => 'Sebaiknya dia beristirahat sekarang.'],
                ['en' => 'Can you help me, please?', 'id' => 'Bisakah kamu membantuku, tolong?'],
            ],
        ],
        [
            'heading' => 'Can — Kemampuan dan Izin',
            'body' => '<p><strong>Can</strong> memiliki dua fungsi utama pada level pemula:</p>
<ol>
<li><strong>Kemampuan</strong> (ability): melakukan sesuatu karena mampu. <em>I can play the guitar.</em></li>
<li><strong>Izin</strong> (permission): meminta atau memberi izin dengan cara tidak formal. <em>Can I use your pen?</em></li>
</ol>
<p>Untuk meminta izin secara lebih sopan, gunakan <strong>Could I ...?</strong> Bentuk negatif <strong>can\'t</strong> berarti <em>tidak bisa</em> atau <em>tidak boleh</em>, tergantung konteks kalimat.</p>',
            'examples' => [
                ['en' => 'I can speak English, but I can\'t speak French.', 'id' => 'Saya bisa berbicara bahasa Inggris, tetapi saya tidak bisa berbicara bahasa Prancis.'],
                ['en' => 'Can I sit here, please?', 'id' => 'Bolehkah saya duduk di sini, tolong?'],
                ['en' => 'My grandmother can\'t use a smartphone.', 'id' => 'Nenekku tidak bisa menggunakan ponsel pintar.'],
            ],
        ],
        [
            'heading' => 'Should — Saran',
            'body' => '<p><strong>Should</strong> dipakai untuk memberi <strong>saran</strong> (advice) atau menyatakan apa yang <strong>sebaiknya</strong> dilakukan. Sifatnya lebih lembut daripada <em>must</em> atau <em>have to</em>.</p>
<p>Pola kalimatnya: <strong>subject + should + verb dasar</strong>. Bentuk negatif <strong>shouldn\'t</strong> berarti <em>sebaiknya jangan</em>: <em>You shouldn\'t eat too much candy.</em></p>
<p><em>Should</em> bisa juga menyatakan dugaan yang masuk akal: <em>She should be at home now</em> (Dia seharusnya sudah di rumah sekarang).</p>',
            'examples' => [
                ['en' => 'You look tired. You should get some rest.', 'id' => 'Kamu terlihat lelah. Sebaiknya kamu beristirahat.'],
                ['en' => 'We should study for the exam tomorrow.', 'id' => 'Kita sebaiknya belajar untuk ujian besok.'],
                ['en' => 'You shouldn\'t play with your phone in class.', 'id' => 'Sebaiknya jangan bermain ponsel di kelas.'],
            ],
        ],
        [
            'heading' => 'Must dan Have To — Kewajiban',
            'body' => '<p><strong>Must</strong> dan <strong>have to</strong> sama-sama berarti <em>harus</em>, tetapi ada perbedaan kecil pada sumber kewajibannya:</p>
<table>
<thead><tr><th>Kata</th><th>Sumber kewajiban</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>must</td><td>Perasaan pembicara sendiri atau aturan yang sangat penting</td><td>I must stop smoking.</td></tr>
<tr><td>have to</td><td>Aturan, situasi, atau orang lain</td><td>I have to wear a uniform at work.</td></tr>
<tr><td>has to</td><td>have to untuk subjek he / she / it</td><td>She has to take the bus.</td></tr>
</tbody>
</table>
<p><strong>Perhatikan:</strong> <em>have to</em> adalah kata kerja biasa, sehingga untuk negatif dan pertanyaan dibantu kata <strong>do/does</strong>: <em>I don\'t have to work on Sunday.</em> dan <em>Does he have to pay?</em> Bentuk lampau dari <em>have to</em> adalah <strong>had to</strong>.</p>',
            'examples' => [
                ['en' => 'Drivers must stop at a red light.', 'id' => 'Para sopir harus berhenti di lampu merah.'],
                ['en' => 'I have to wake up at five o\'clock tomorrow.', 'id' => 'Saya harus bangun pukul lima pagi besok.'],
                ['en' => 'She has to study English for her job.', 'id' => 'Dia harus belajar bahasa Inggris untuk pekerjaannya.'],
            ],
        ],
        [
            'heading' => 'Mustn\'t vs Don\'t Have To — Perbedaan Penting',
            'body' => '<p>Dua bentuk negatif ini sering tertukar, padahal maknanya sangat berbeda:</p>
<ul>
<li><strong>mustn\'t</strong> = dilarang, tidak boleh. <em>You mustn\'t park here.</em> (Dilarang memarkir di sini.)</li>
<li><strong>don\'t / doesn\'t have to</strong> = tidak perlu, tidak diwajibkan. <em>I don\'t have to work today.</em> (Saya tidak perlu bekerja hari ini — bukan dilarang.)</li>
</ul>
<blockquote><p>Ingat baik-baik: <strong>mustn\'t</strong> = <em>dilarang</em>; <strong>don\'t have to</strong> = <em>tidak perlu</em>.</p></blockquote>',
            'examples' => [
                ['en' => 'You mustn\'t use your phone during the exam.', 'id' => 'Kamu tidak boleh menggunakan ponsel saat ujian.'],
                ['en' => 'It\'s Sunday, so I don\'t have to go to school.', 'id' => 'Hari ini Minggu, jadi saya tidak perlu pergi ke sekolah.'],
                ['en' => 'You mustn\'t tell anyone about this secret.', 'id' => 'Kamu tidak boleh memberi tahu siapa pun tentang rahasia ini.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'can', 'phonetic' => '/kæn/', 'meaning' => 'bisa; mampu; boleh', 'example' => 'I can swim very well.'],
        ['word' => 'should', 'phonetic' => '/ʃʊd/', 'meaning' => 'sebaiknya; harusnya', 'example' => 'You should see a doctor.'],
        ['word' => 'must', 'phonetic' => '/mʌst/', 'meaning' => 'harus (kewajiban kuat)', 'example' => 'You must follow the rules.'],
        ['word' => 'have to', 'phonetic' => '/ˌhæv ˈtuː/', 'meaning' => 'harus (kewajiban)', 'example' => 'I have to study tonight.'],
        ['word' => 'can\'t', 'phonetic' => '/kɑːnt/', 'meaning' => 'tidak bisa; tidak boleh', 'example' => 'I can\'t come to the party.'],
        ['word' => 'mustn\'t', 'phonetic' => '/ˈmʌstnt/', 'meaning' => 'dilarang; tidak boleh', 'example' => 'You mustn\'t touch the fire.'],
        ['word' => 'don\'t have to', 'phonetic' => '/ˌdəʊnt ˈhæv tuː/', 'meaning' => 'tidak perlu', 'example' => 'We don\'t have to wear uniforms today.'],
        ['word' => 'permission', 'phonetic' => '/pəˈmɪʃn/', 'meaning' => 'izin', 'example' => 'Can I have permission to go home?'],
        ['word' => 'advice', 'phonetic' => '/ədˈvaɪs/', 'meaning' => 'saran', 'example' => 'She gives me good advice.'],
        ['word' => 'rule', 'phonetic' => '/ruːl/', 'meaning' => 'aturan', 'example' => 'Every school has its own rules.'],
        ['word' => 'allowed', 'phonetic' => '/əˈlaʊd/', 'meaning' => 'diizinkan', 'example' => 'Cameras are not allowed here.'],
        ['word' => 'able to', 'phonetic' => '/ˌeɪbl ˈtuː/', 'meaning' => 'dapat; mampu', 'example' => 'He is able to read Chinese.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat: <strong>&ldquo;Rina ___ speak three languages. She is a translator.&rdquo;</strong>',
            'options' => ['can', 'cans', 'can to', 'is can'],
            'answer' => 0,
            'explanation' => '<em>Can</em> menyatakan kemampuan dan tidak pernah ditambah <em>-s</em> maupun <em>to</em>: <em>She can speak ...</em>',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'You look very sick. You ___ see a doctor today.',
            'options' => ['should', 'can', 'mustn\'t', 'don\'t have to'],
            'answer' => 0,
            'explanation' => '<em>Should</em> dipakai untuk memberi saran: menyarankan pergi ke dokter karena terlihat sakit.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'In this hospital, visitors ___ touch the machines. It is dangerous.',
            'options' => ['mustn\'t', 'don\'t have to', 'can', 'must'],
            'answer' => 0,
            'explanation' => 'Kata <em>dangerous</em> menunjukkan adanya <strong>larangan</strong>, sehingga jawabannya <em>mustn\'t</em> (tidak boleh).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih bentuk yang benar: &ldquo;My father works on Saturday, but he ___ work on Sunday.&rdquo;',
            'options' => ['doesn\'t have to', 'haven\'t to', 'doesn\'t having to', 'not have to'],
            'answer' => 0,
            'explanation' => '<em>Have to</em> adalah kata kerja biasa, jadi negatifnya dibantu <em>does</em>: <strong>doesn\'t have to</strong> (tidak perlu).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'She ___ drive a car. She has a driving license.',
            'answer' => 'can',
            'accepted' => ['can'],
            'explanation' => '<em>Can</em> menyatakan kemampuan: dia mampu mengemudikan mobil karena punya surat izin mengemudi.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'You have a fever. You ___ stay in bed and drink a lot of water.',
            'answer' => 'should',
            'accepted' => ['should'],
            'explanation' => 'Kalimat memberi <strong>saran</strong> kepada orang yang sakit, sehingga tepat memakai <em>should</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'At our school, we ___ wear a uniform every day. It is the school rule.',
            'answer' => 'have to',
            'accepted' => ['have to', 'must'],
            'explanation' => 'Kewajiban yang berasal dari <strong>aturan sekolah</strong> paling tepat memakai <em>have to</em>; <em>must</em> masih bisa diterima karena maknanya sama-sama <em>harus</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Today is a holiday, so I ___ go to the office. (tidak perlu, bukan dilarang)',
            'answer' => 'don\'t have to',
            'accepted' => ['don\'t have to'],
            'explanation' => 'Karena hari libur, pergi ke kantor <strong>tidak diwajibkan</strong>. Bentuk yang benar adalah <em>don\'t have to</em>, bukan <em>mustn\'t</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kata &ldquo;mustn\'t&rdquo; berarti kita dilarang melakukan sesuatu.',
            'answer' => true,
            'explanation' => '<em>Mustn\'t</em> = must not, yaitu <strong>dilarang</strong> atau tidak boleh melakukan sesuatu.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;I don\'t have to wake up early today&rdquo; berarti &ldquo;Saya dilarang bangun pagi hari ini&rdquo;.',
            'answer' => false,
            'explanation' => '<em>Don\'t have to</em> berarti <strong>tidak perlu</strong>, bukan dilarang. Arti &ldquo;dilarang&rdquo; adalah <em>I mustn\'t wake up early today</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan modal dengan fungsi utamanya.',
            'pairs' => [
                ['left' => 'can', 'right' => 'kemampuan atau izin'],
                ['left' => 'should', 'right' => 'saran'],
                ['left' => 'must', 'right' => 'kewajiban kuat'],
                ['left' => 'have to', 'right' => 'kewajiban dari aturan atau situasi'],
                ['left' => 'mustn\'t', 'right' => 'larangan'],
            ],
            'explanation' => 'Setiap modal memiliki fungsi utama: <em>can</em> kemampuan/izin, <em>should</em> saran, <em>must/have to</em> kewajiban, dan <em>mustn\'t</em> larangan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'You must finish your homework before you play video games.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih perintah yang benar.',
            'options' => [
                'Finish the homework before playing video games.',
                'Play video games before finishing the homework.',
                'Finish the homework after playing video games.',
                'Do not do any homework at all.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimatnya: <em>finish your homework <strong>before</strong> you play video games</em>, artinya kerjakan PR <strong>sebelum</strong> bermain video game.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'You should drink water every day.',
            'prompt' => 'Dengarkan kalimat, lalu lengkapi bagian yang kosong:<br>&ldquo;You ___ drink water every day.&rdquo;',
            'answer' => 'should',
            'accepted' => ['should'],
            'explanation' => 'Kalimat yang terdengar: <em>You should drink water every day</em> (Sebaiknya kamu minum air setiap hari).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Every morning, Dika has to leave home at six o\'clock. His school starts at seven o\'clock, and it is far from his house. Today, his father drives him to school. Dika must not be late because his teacher does not like late students.</p></div><p>Why does Dika leave home at six o\'clock?</p>',
            'options' => [
                'Because his school starts at seven o\'clock and it is far away.',
                'Because he wants to play with his friends.',
                'Because his father leaves early for work.',
                'Because there is no school bus in his city.',
            ],
            'answer' => 0,
            'explanation' => 'Teks menyebutkan: sekolah mulai pukul tujuh dan jauh dari rumahnya, sehingga dia harus berangkat pukul enam.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Terjemahkan kalimat berikut ke bahasa Inggris dengan benar:<br>&ldquo;Saya harus belajar untuk ujian besok.&rdquo;',
            'answer' => 'I have to study for the exam tomorrow.',
            'accepted' => ['i have to study for the exam tomorrow', 'i must study for the exam tomorrow'],
            'explanation' => 'Kata <em>harus</em> di sini adalah kewajiban: <em>I have to study for the exam tomorrow.</em> (<em>must study</em> juga benar).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk menyatakan kemampuanmu dan kebiasaanmu.',
            'target' => 'I can swim, and I go to the pool every Saturday.',
            'hint' => 'Arti: Saya bisa berenang, dan saya pergi ke kolam renang setiap Sabtu.',
            'explanation' => 'Gunakan <em>can + kata kerja dasar</em> untuk kemampuan, lalu Simple Present untuk kebiasaan rutin.',
        ],
    ],
];
