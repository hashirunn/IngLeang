<?php

/**
 * Level 3 — Modul 01: Advanced Grammar
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
    'title' => 'Advanced Grammar',
    'slug' => 'advanced-grammar',
    'subtitle' => 'Inversion, cleft sentences, dan struktur klausa lanjutan',
    'summary' => 'Menguasai kalimat inversion, cleft sentences (kalimat belah), dan struktur klausa lanjutan seperti inverted conditionals dan klausa konsesif untuk menulis serta berbicara secara lebih rhetorically kuat.',
    'icon' => '🏗️',
    'objectives' => [
        'Menggunakan inversion setelah adverbial negatif dan restriktif di awal kalimat',
        'Membentuk cleft sentences (it-cleft, what-cleft, reason cleft) untuk menonjolkan informasi',
        'Menerapkan inverted conditionals (had I, were she, should you) dalam konteks formal',
        'Menggunakan klausa konsesif dan klausa relatif yang merujuk pada keseluruhan klausa',
    ],
    'sections' => [
        [
            'heading' => 'Inversion Setelah Adverbial Negatif',
            'body' => '<p> Ketika sebuah kalimat diawali adverbial negatif atau restriktif, bahasa Inggris menerapkan <strong>inversion</strong>, yaitu subjek dan auxiliary (kata kerja bantu) bertukar posisi seperti pada kalimat tanya. Pola umumnya:</p>
<blockquote><p><strong>Adverbial negatif + auxiliary + subjek + kata kerja utama</strong></p></blockquote>
<p>Adverbial pemicunya antara lain <em>never, rarely, seldom, hardly, little, no sooner, not until, not only, at no time, under no circumstances</em>, dan <em>by no means</em>. Auxiliary yang dipakai disesuaikan dengan tense: <em>do/does/did</em> untuk kata kerja biasa, dan <em>have/be/modal</em> untuk tense lain.</p>',
            'examples' => [
                ['en' => 'Rarely have I seen such a dedicated teacher.', 'id' => 'Saya jarang sekali melihat guru yang begitu berdedikasi.'],
                ['en' => 'Not until midnight did we finish the report.', 'id' => 'Baru tengah malam kami menyelesaikan laporan itu.'],
                ['en' => 'No sooner had the meeting begun than the fire alarm went off.', 'id' => 'Baru saja rapat dimulai, alarm kebakaran berbunyi.'],
                ['en' => 'Under no circumstances should you share this password.', 'id' => 'Dalam keadaan apapun kamu tidak boleh membagikan kata sandi ini.'],
                ['en' => 'Little did she know that the decision would change her career.', 'id' => 'Sedikitpun dia tidak tahu bahwa keputusan itu akan mengubah kariernya.'],
            ],
        ],
        [
            'heading' => 'Inversion untuk Penguatan (Only dan So/Such...That)',
            'body' => '<p><strong>Only</strong> yang diikuti keterangan waktu atau cara di awal kalimat juga memicu inversion pada klausa utama: <em>Only then did I understand...</em>, <em>Only after the results were published did we draw a conclusion...</em>. Perhatikan bahwa inversion hanya terjadi pada klausa utama, bukan pada klausa setelah <em>only</em>.</p>
<p>Bentuk penguatan lain adalah <em>so + adjektiva + be + subjek + that</em> dan <em>such + kata benda + be + subjek + that</em>, yang menekankan tingkat intensitas sebuah kondisi.</p>',
            'examples' => [
                ['en' => 'Only then did I realise how much work remained.', 'id' => 'Baru saat itu saya menyadari betapa banyak pekerjaan yang tersisa.'],
                ['en' => 'Only after the data had been checked did the team publish its findings.', 'id' => 'Baru setelah data diperiksa, tim menerbitkan temuannya.'],
                ['en' => 'So compelling was her argument that the committee reversed its decision.', 'id' => 'Argumennya begitu meyakinkan sehingga komite membalik keputusannya.'],
                ['en' => 'Such was the intensity of the storm that the power went out.', 'id' => 'Begitu dahsyatnya badai itu sehingga listrik padam.'],
            ],
        ],
        [
            'heading' => 'Cleft Sentences (Kalimat Belah)',
            'body' => '<p><em>Cleft sentence</em> atau kalimat belah membelah satu kalimat menjadi dua bagian untuk <strong>menonjolkan</strong> informasi tertentu. Ada tiga bentuk utama:</p>
<table>
<thead><tr><th>Bentuk</th><th>Pola</th><th>Fungsi</th></tr></thead>
<tbody>
<tr><td>It-cleft</td><td>It + be + fokus + who/that + klausa</td><td>Menonjolkan subjek, objek, atau keterangan</td></tr>
<tr><td>What-cleft</td><td>What + klausa + be + penekanan</td><td>Menonjolkan "hal yang..."</td></tr>
<tr><td>Reason cleft</td><td>The reason (why) ... + is that ...</td><td>Menonjolkan alasan</td></tr>
</tbody>
</table>
<p>Bentuk lain yang sering muncul adalah <em>All I want/need is ...</em> yang berfungsi seperti what-cleft. Pada penulisan formal, gunakan <em>is that</em> (bukan <em>is because</em>) setelah <em>the reason</em>.</p>',
            'examples' => [
                ['en' => 'It was the manager who approved the budget.', 'id' => 'Yang menyetujui anggaran itu adalah manajer.'],
                ['en' => 'It was because of the delay that the flight was cancelled.', 'id' => 'Penerbangan itu dibatalkan karena keterlambatan.'],
                ['en' => 'What we need is a clearer set of criteria.', 'id' => 'Yang kami butuhkan adalah seperangkat kriteria yang lebih jelas.'],
                ['en' => 'The reason the project stalled is that the funding ran out.', 'id' => 'Alasan proyek itu mandek adalah dananya habis.'],
                ['en' => 'All I asked for was a straightforward explanation.', 'id' => 'Yang saya minta hanyalah penjelasan yang lugas.'],
            ],
        ],
        [
            'heading' => 'Struktur Klausula Lanjutan',
            'body' => '<p>Level C1-C2 menuntut kemampuan menggabungkan klausa kompleks dengan tepat:</p>
<ul>
<li><strong>Klausa konsesif:</strong> <em>However + adjektiva/adverbia</em>, <em>Whatever/Whoever + klausa</em>, atau <em>No matter + wh-</em> diikuti inversion atau klausa biasa.</li>
<li><strong>Inverted conditional:</strong> penghapusan <em>if</em> dengan membalik auxiliary: <em>Had I known...</em>, <em>Were she to agree...</em>, <em>Should you need...</em>.</li>
<li><strong>Klausa relatif non-defining:</strong> <em>which</em> dapat merujuk pada keseluruhan klausa sebelumnya (bukan satu kata).</li>
<li><strong>Nominal relative:</strong> <em>what, whoever, whatever</em> yang berfungsi sebagai subjek/objek sekaligus penghubung.</li>
</ul>',
            'examples' => [
                ['en' => 'However hard he tried, he could not persuade the board.', 'id' => 'Sekeras apapun dia berusaha, dia tidak dapat membujuk dewan.'],
                ['en' => 'Whatever the outcome, we must be prepared to adapt.', 'id' => 'Apapun hasilnya, kami harus siap beradaptasi.'],
                ['en' => 'Had we anticipated the demand, we would have increased production.', 'id' => 'Seandainya kami mengantisipasi permintaan, kami akan menambah produksi.'],
                ['en' => 'The proposal was rejected, which surprised the entire team.', 'id' => 'Proposal itu ditolak, yang mengejutkan seluruh tim.'],
                ['en' => 'Whoever finds the missing file should notify the office immediately.', 'id' => 'Siapapun yang menemukan berkas yang hilang harus segera memberi tahu kantor.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'inversion', 'phonetic' => '/ɪnˈvɜːʒn/', 'meaning' => 'pembalikan urutan subjek dan auxiliary', 'example' => 'The sentence uses negative inversion.'],
        ['word' => 'auxiliary verb', 'phonetic' => '/ɔːɡˈzɪliəri vɜːb/', 'meaning' => 'kata kerja bantu (do, be, have)', 'example' => 'The auxiliary "have" comes before the subject.'],
        ['word' => 'cleft sentence', 'phonetic' => '/kleft ˈsentəns/', 'meaning' => 'kalimat belah untuk menonjolkan informasi', 'example' => 'It was Anna who fixed the server.'],
        ['word' => 'emphatic', 'phonetic' => '/emˈfætɪk/', 'meaning' => 'tegas; bersifat menekankan', 'example' => 'She was emphatic about the deadline.'],
        ['word' => 'fronting', 'phonetic' => '/ˈfrʌntɪŋ/', 'meaning' => 'memindahkan unsur bahasa ke awal kalimat', 'example' => 'Fronting is common in formal writing.'],
        ['word' => 'concessive clause', 'phonetic' => '/kənˈsesɪv klɔːz/', 'meaning' => 'klausa konsesif (however, whatever, although)', 'example' => 'Whatever the outcome, stay calm.'],
        ['word' => 'antecedent', 'phonetic' => '/ˌæntiˈsiːdnt/', 'meaning' => 'kata atau klausa yang dirujuk relative clause', 'example' => 'The delay, which nobody expected, was costly.'],
        ['word' => 'nominal relative clause', 'phonetic' => '/ˌnɒmɪnl rɪˈleɪtɪv klɔːz/', 'meaning' => 'klausa relatif nominal (what, whoever, whatever)', 'example' => 'What she said shocked everyone.'],
        ['word' => 'no sooner ... than', 'phonetic' => '/nəʊ ˈsuːnər ... ðæn/', 'meaning' => 'baru saja ... (pola inversion)', 'example' => 'No sooner had I arrived than the phone rang.'],
        ['word' => 'not until', 'phonetic' => '/nɒt ənˈtɪl/', 'meaning' => 'baru sampai; tidak sebelum', 'example' => 'Not until Friday did the parcel arrive.'],
        ['word' => 'under no circumstances', 'phonetic' => '/ˌʌndər nəʊ ˈsɜːkəmstənsɪz/', 'meaning' => 'dalam keadaan apapun tidak', 'example' => 'Under no circumstances should you enter.'],
        ['word' => 'the reason ... is that', 'phonetic' => '/ðə ˈriːzn ... ɪz ðæt/', 'meaning' => 'alasan ... adalah bahwa', 'example' => 'The reason is that the data was incomplete.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih bentuk yang tepat:<br><strong>Rarely ___ such a convincing argument.</strong>',
            'options' => ['I have heard', 'have I heard', 'I heard', 'did I have heard'],
            'answer' => 1,
            'explanation' => 'Adverbial negatif <em>rarely</em> di awal kalimat memicu inversion, sehingga auxiliary <em>have</em> berada sebelum subjek <em>I</em>: <em>Rarely have I heard...</em>',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Kalimat asli: <em>The team discovered the error only after the results had been published.</em><br>Manakah bentuk yang benar bila <em>only after</em> diletakkan di awal kalimat?',
            'options' => [
                'Only after the results had been published the team discovered the error.',
                'Only after the results had been published did the team discover the error.',
                'Only after the results had been published the team had discovered the error.',
                'Only after the results were published did the team discovering the error.',
            ],
            'answer' => 1,
            'explanation' => 'Setelah <em>only after + klausa lampau</em> di awal, klausa utama wajib memakai inversion dengan bantu <em>do</em>: <em>did + subjek + kata kerja dasar</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ you need any further documentation, please contact our office.',
            'options' => ['Had', 'Should', 'Were', 'Would'],
            'answer' => 1,
            'explanation' => '<em>Should you need ...</em> adalah bentuk inversion formal dari <em>If you should need ...</em>, yang menyatakan kemungkinan yang bersifat formal.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ the board failed to consider was the long-term cost of the delay.',
            'options' => ['That', 'Which', 'What', 'It'],
            'answer' => 2,
            'explanation' => '<em>What</em> berfungsi ganda sebagai penghubung dan subjek klausa (= <em>the thing that</em>), sehingga kalimat yang benar adalah <em>What the board failed to consider was ...</em>',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Not until the results were rechecked ___ the team admit the mistake. (isi dengan kata kerja bantu)',
            'answer' => 'did',
            'accepted' => ['did'],
            'explanation' => '<em>Not until ...</em> di awal kalimat memicu inversion pada klausa utama: <em>did + subjek + kata kerja dasar</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'It was my supervisor ___ corrected the error in the report. (isi kata ganti relatif)',
            'answer' => 'who',
            'accepted' => ['who', 'that'],
            'explanation' => 'Pada it-cleft yang menonjolkan <strong>orang</strong>, pilihan tepat adalah <em>who</em> (atau <em>that</em>): <em>It was my supervisor who corrected the error.</em>',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk inversion:<br><em>Little ___ that the decision would change everything.</em> (he / know)',
            'answer' => 'did he know',
            'accepted' => ['did he know'],
            'explanation' => '<em>Little</em> di awal kalimat bermakna negatif dan memicu inversion: <em>did + he + know</em>, bukan <em>he knew</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam kalimat <em>&ldquo;No sooner had she sat down than the phone rang.&rdquo;</em>, auxiliary <em>had</em> diletakkan sebelum subjek <em>she</em> karena kalimat tersebut menggunakan inversion.',
            'answer' => true,
            'explanation' => '<em>No sooner ... than</em> di awal kalimat memerlukan inversion: <em>No sooner + had + subjek + past participle</em>. Pernyataan ini benar.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam penulisan akademik formal yang baku, kalimat <em>&ldquo;The reason the project failed is because the budget was cut.&rdquo;</em> sebaiknya ditulis <em>&ldquo;The reason ... is that ...&rdquo;</em>.',
            'answer' => true,
            'explanation' => 'Kata <em>reason</em> sudah bermakna \'sebab\', sehingga klausa pelengkap yang tepat memakai <em>that</em>, bukan <em>because</em> (kalimat karena itu menjadi bertumpang tindih).',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan nama struktur dengan contoh kalimatnya.',
            'pairs' => [
                ['left' => 'It-cleft', 'right' => 'It was the audit that exposed the fraud.'],
                ['left' => 'What-cleft', 'right' => 'What surprised us was the speed of the response.'],
                ['left' => 'Negative inversion', 'right' => 'Seldom do we receive such detailed feedback.'],
                ['left' => 'Inverted conditional', 'right' => 'Were the results reliable, we would publish them.'],
                ['left' => 'Reason cleft', 'right' => 'The reason we hesitated is that the data was scarce.'],
            ],
            'explanation' => 'Setiap struktur memiliki pola khas: it-cleft memakai <em>It + be + fokus + that/who</em>; what-cleft memakai <em>what</em> sebagai subjek; inversion negatif membalik subjek dan auxiliary; inverted conditional menghapus <em>if</em>; reason cleft memakai <em>is that</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Not only did the report overlook the key data, but it also misquoted several findings.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'Not only did the report overlook the key data, but it also misquoted several findings.',
                'Not only did the report overlook the key data, but it also confirmed several findings.',
                'Not only the report did overlook the key data, and it also misquoted several findings.',
                'Not only did the report overlook minor details, but it also misquoted several findings.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat yang terdengar adalah <em>Not only did the report overlook the key data, but it also misquoted several findings</em> — perhatikan struktur inversion <em>not only ... but also</em> serta kata <em>key data</em> dan <em>misquoted</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>It was the marketing team that first raised concerns about the launch date. Not until the beta version had been tested did the company realise how serious the problems were. Only after three months of redesign did the product finally meet the required standards. What the board failed to consider, however, was the cost of the delay.</p></div><p>Manakah ringkasan yang paling tepat isi teks tersebut?</p>',
            'options' => [
                'Tim pemasaran menolak peluncuran produk tersebut.',
                'Perusahaan baru menyadari masalah setelah pengujian, dan biaya keterlambatan luput dari perhatian dewan.',
                'Dewan langsung menyetujui biaya desain ulang sejak awal.',
                'Produk sudah memenuhi standar sejak versi pertama.',
            ],
            'answer' => 1,
            'explanation' => 'Teks menyatakan masalah baru disadari <em>not until the beta version had been tested</em>, dan <em>the cost of the delay</em> tidak dipertimbangkan dewan — sesuai pilihan kedua.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut dengan penekanan pada bagian yang ditonjolkan.',
            'target' => 'Only when I started working abroad did I realise how much I had taken my family for granted.',
            'hint' => 'Arti: Baru ketika saya bekerja di luar negeri, saya menyadari betapa saya menganggap remeh keluarga saya.',
            'explanation' => 'Pola <em>Only + keterangan waktu</em> di awal diikuti inversion <em>did + subjek + kata kerja dasar</em>. Ekspresi <em>take something for granted</em> berarti menganggap remeh.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Buat kalimat penekanan (cleft) tentang hal yang paling kamu butuhkan saat ini.',
            'target' => 'What I need right now is a clear plan for the next few weeks.',
            'hint' => 'Arti: Yang saya butuhkan saat ini adalah rencana yang jelas untuk beberapa minggu ke depan.',
            'explanation' => 'What-cleft: <em>What + klausa</em> menjadi subjek kalimat, diikuti <em>is</em> dan informasi yang ditonjolkan.',
        ],
    ],
];
