<?php

/**
 * Level 3 — Modul 13: Editing & Error Analysis
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
    'title' => 'Editing & Error Analysis',
    'slug' => 'editing-error-analysis',
    'subtitle' => 'Memperbaiki kalimat kompleks dan kesalahan halus',
    'summary' => 'Melatih keterampilan menyunting teks tingkat lanjut: mengenali kesalahan tata bahasa yang sering lolos, kolokasi yang tidak tepat, struktur kalimat yang rancu, serta gaya bahasa yang bertele-tele.',
    'icon' => '📝',
    'objectives' => [
        'Mengidentifikasi kesalahan tata bahasa halus pada kalimat kompleks',
        'Mengoreksi pilihan kata dan kolokasi yang tidak baku atau tidak tepat',
        'Mendeteksi dangling modifier, faulty parallelism, dan comma splice',
        'Menyunting teks agar ringkas, konsisten, dan sesuai registri formal',
    ],
    'sections' => [
        [
            'heading' => 'Kesalahan Tata Bahasa yang Sering Lolos',
            'body' => '<p>Pada teks panjang, kesalahan yang paling sering muncul adalah yang <strong>tersembunyi di dalam klausa</strong>, bukan pada struktur dasar. Perhatikan empat jebakan berikut:</p>
<ul>
<li><strong>Subjek jamak palsu</strong> — <em>The number of reports <del>are</del> increasing</em> harus <strong>is</strong>, sedangkan <em>A number of reports <del>is</del></em> harus <strong>are</strong>.</li>
<li><strong>Kata ganti penunjuk</strong> — <em>Each of the students has submitted <del>their</del> work</em>; secara baku: <strong>his or her work</strong>, atau tulis ulang menjadi <em>All the students have submitted their work</em>.</li>
<li><strong>Konsistensi tense</strong> — jangan campur waktu tanpa alasan: <em>She <del>reviews</del> the data and <del>wrote</del> a summary</em> seharusnya <strong>reviewed ... and wrote</strong>.</li>
<li><strong>Subjunctive</strong> — setelah <em>it is essential that</em>, gunakan bentuk dasar: <em>It is essential that he <strong>be</strong> informed.</em></li>
</ul>
<p>Kolektif noun seperti <em>committee</em> dan <em>team</em> boleh dianggap tunggal (gaya British) atau jamak (gaya Amerika), tetapi <strong>pilih satu gaya dan konsisten</strong> dalam satu teks.</p>',
            'examples' => [
                ['en' => 'The number of applicants has increased sharply this year.', 'id' => 'Jumlah pelamar meningkat tajam tahun ini. (subjek tunggal: the number)'],
                ['en' => 'A number of applicants have withdrawn their names.', 'id' => 'Beberapa pelamar telah menarik namanya. (a number of + kata benda jamak = jamak)'],
                ['en' => 'It is essential that every candidate be briefed before the test.', 'id' => 'Penting bahwa setiap kandidat diberi pengarahan sebelum tes. (subjunctive)'],
            ],
        ],
        [
            'heading' => 'Kesalahan Pilihan Kata dan Kolokasi',
            'body' => '<p>Kesalahan halus sering terjadi bukan pada tata bahasa, tetapi pada <strong>kata yang tidak biasa berpasangan</strong>. Kolokasi yang salah terdengar janggal bagi penutur native meskipun setiap kata secara individual benar.</p>
<table>
<thead><tr><th>Salah</th><th>Tepat</th><th>Catatan</th></tr></thead>
<tbody>
<tr><td>do a research</td><td>do / conduct research</td><td><em>research</em> tidak terhitung</td></tr>
<tr><td>less people</td><td>fewer people</td><td><em>fewer</em> untuk yang terhitung</td></tr>
<tr><td>very essential</td><td>absolutely essential</td><td><em>essential</em> adalah adjective absolut</td></tr>
<tr><td>make a decision to ...</td><td>decide to ...</td><td>Bentuk kata kerja lebih ringkas</td></tr>
<tr><td>comprised of five members</td><td>composed of five members / comprising five members</td><td>Gaya formal yang lebih aman</td></tr>
</tbody>
</table>
<p>Perhatikan juga pasangan yang sering tertukar: <em>affect</em> (kata kerja) vs <em>effect</em> (kata benda), <em>raise</em> (transitif) vs <em>rise</em> (intransitif), serta <em>then</em> (waktu) vs <em>than</em> (perbandingan).</p>',
            'examples' => [
                ['en' => 'The team conducted extensive research on migration patterns.', 'id' => 'Tim melakukan penelitian ekstensif tentang pola migrasi.'],
                ['en' => 'Fewer errors were reported after the update.', 'id' => 'Lebih sedikit kesalahan dilaporkan setelah pembaruan.'],
                ['en' => 'The changes will significantly affect our budget.', 'id' => 'Perubahan itu akan berpengaruh signifikan pada anggaran kami.'],
            ],
        ],
        [
            'heading' => 'Kesalahan Struktur Kalimat Kompleks',
            'body' => '<p>Kalimat panjang meningkatkan risiko kesalahan struktur. Empat kesalahan berikut paling sering muncul:</p>
<ol>
<li><strong>Dangling modifier</strong> — frasa pembuka tidak memiliki subjek yang benar: <em><del>Walking to the station, the rain started.</del></em> &rarr; <em>Walking to the station, <strong>I</strong> was caught in the rain.</em></li>
<li><strong>Misplaced modifier</strong> — kata keterangan salah tempat: <em>He <del>nearly</del> drove for six hours</em> bisa berarti &#034;hampir menyetir&#034;; maksudnya: <em>He drove for nearly six hours.</em></li>
<li><strong>Faulty parallelism</strong> — elemen setara harus berbentuk sama: <em>She likes hiking, swimming, and <del>to ride a bike</del></em> &rarr; <strong>riding a bike</strong>.</li>
<li><strong>Comma splice</strong> — dua klausa bebas hanya dipisah koma: <em><del>The deadline was tight, the team worked late.</del></em> &rarr; gunakan titik koma (;), konjungsi (<em>so</em>), atau gabungkan.</li>
</ol>
<p>Kalimat <em>run-on</em> terjadi ketika dua klausa bebas disambung tanpa tanda baca maupun konjungsi sama sekali.</p>',
            'examples' => [
                ['en' => 'After reviewing the report, the committee called for more data.', 'id' => 'Setelah meninjau laporan, komite meminta data tambahan. (subjek klausa utama = the committee)'],
                ['en' => 'She likes hiking, swimming, and riding a bike.', 'id' => 'Dia suka mendaki, berenang, dan bersepeda. (bentuk sejajar)'],
                ['en' => 'The deadline was tight; the team worked late anyway.', 'id' => 'Tenggat ketat; tim tetap bekerja larut malam. (titik koma, bukan comma splice)'],
            ],
        ],
        [
            'heading' => 'Redundansi dan Wordiness',
            'body' => '<p>Penyuntingan gaya bertujuan menghapus isi yang tidak menambah makna. Beberapa pola yang selalu dapat diringkas:</p>
<ul>
<li><em>in order to</em> &rarr; <strong>to</strong>; <em>due to the fact that</em> &rarr; <strong>because</strong></li>
<li><em>the final outcome</em> &rarr; <strong>the outcome</strong>; <em>each and every</em> &rarr; <strong>every</strong></li>
<li><em>make a decision to proceed</em> &rarr; <strong>decide to proceed</strong></li>
<li><em>at this point in time</em> &rarr; <strong>now</strong></li>
</ul>
<p>Pilih juga antara <strong>aktif</strong> dan <strong>pasif</strong> secara sadar. Kalimat aktif lebih ringkas dan jelas; kalimat pasif tepat ketika pelaku tidak diketahui atau menjadi tidak penting: <em>The road was closed after the storm.</em></p>',
            'examples' => [
                ['en' => 'We delayed the launch because the servers failed.', 'id' => 'Kami menunda peluncuran karena server gagal. (aktif, ringkas)'],
                ['en' => 'The launch was delayed because the servers failed.', 'id' => 'Peluncuran ditunda karena server gagal. (pasif, fokus pada kejadian)'],
                ['en' => 'Due to the fact that costs rose, we revised the plan.', 'id' => 'Because costs rose, we revised the plan. (versi ringkas)'],
            ],
        ],
        [
            'heading' => 'Strategi Editing Sistematis',
            'body' => '<p>Menyunting efektif memakai beberapa putaran, bukan satu kali baca:</p>
<ol>
<li><strong>Putaran makna</strong> — pastikan setiap paragraf punya satu gagasan utama dan alurnya logis.</li>
<li><strong>Putaran kalimat</strong> — periksa subjek-verb agreement, klausa yang menggantung, dan paralelisme.</li>
<li><strong>Putaran kata</strong> — cek kolokasi, kata berlebih, dan konsistensi istilah.</li>
<li><strong>Putaran tanda baca</strong> — periksa koma, titik koma, dan apostrof.</li>
</ol>
<p>Bacalah teks <strong>terbalik</strong> (perlahan, kata per kata dari akhir) untuk menemukan typo yang lolos karena otak terlalu terbiasa. Simpan <em>error log</em> pribadi agar kesalahan yang sama tidak terulang.</p>',
            'examples' => [
                ['en' => 'Read the text aloud to catch awkward phrasing.', 'id' => 'Bacalah teks dengan suara keras untuk menangkap frasa yang janggal.'],
                ['en' => 'I keep an error log so the same mistakes do not recur.', 'id' => 'Saya menyimpan catatan kesalahan agar kesalahan yang sama tidak berulang.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'proofread', 'phonetic' => '/ˈpruːfriːd/', 'meaning' => 'memeriksa kembali teks untuk koreksi akhir', 'example' => 'Always proofread your email before sending it.'],
        ['word' => 'redundancy', 'phonetic' => '/rɪˈdʌndənsi/', 'meaning' => 'pengulangan yang tidak perlu', 'example' => 'Replace &#034;each and every&#034; to avoid redundancy.'],
        ['word' => 'misplaced modifier', 'phonetic' => '/ˌmɪsˈpleɪst məˈdaɪfər/', 'meaning' => 'kata keterangan yang salah tempat', 'example' => '&#034;He nearly drove six hours&#034; contains a misplaced modifier.'],
        ['word' => 'dangling modifier', 'phonetic' => '/ˈdæŋɡlɪŋ məˈdaɪfər/', 'meaning' => 'frasa pembuka tanpa subjek yang tepat', 'example' => 'Walking home, the rain caught me — a classic dangling modifier.'],
        ['word' => 'parallel structure', 'phonetic' => '/ˈpærəlel ˈstrʌktʃər/', 'meaning' => 'keselarasan bentuk elemen setara', 'example' => 'Use a parallel structure: planning, writing, and editing.'],
        ['word' => 'comma splice', 'phonetic' => '/ˈkɒmə splaɪs/', 'meaning' => 'dua klausa bebas yang hanya dihubungkan koma', 'example' => 'The plan failed, the team gave up — a comma splice.'],
        ['word' => 'concise', 'phonetic' => '/kənˈsaɪs/', 'meaning' => 'ringkas tanpa kehilangan makna', 'example' => 'Keep the executive summary concise.'],
        ['word' => 'awkward phrasing', 'phonetic' => '/ˈɔːkwəd ˈfreɪzɪŋ/', 'meaning' => 'susunan kata yang janggal', 'example' => 'The awkward phrasing confused the readers.'],
        ['word' => 'collocation', 'phonetic' => '/ˌkɒləˈkeɪʃn/', 'meaning' => 'kata-kata yang lazim berpasangan', 'example' => '&#034;Conduct research&#034; is the standard collocation.'],
        ['word' => 'consistency', 'phonetic' => '/kənˈsɪstənsi/', 'meaning' => 'konsistensi / keselarasan gaya', 'example' => 'Check the consistency of tenses and spelling.'],
        ['word' => 'wordiness', 'phonetic' => '/ˈwɜːdinəs/', 'meaning' => 'kecenderungan bertele-tele', 'example' => 'Reduce wordiness by cutting empty phrases.'],
        ['word' => 'style guide', 'phonetic' => '/staɪl ɡaɪd/', 'meaning' => 'panduan gaya penulisan', 'example' => 'Follow the company style guide for citations.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih bentuk yang benar: &ldquo;Each of the applicants ___ submitted the required documents.&rdquo;',
            'options' => ['have', 'has', 'are', 'were'],
            'answer' => 1,
            'explanation' => '<em>Each</em> bersifat tunggal, dan <em>of the applicants</em> hanyalah pelengkap; subjek sebenarnya <em>each</em> sehingga kata kerjanya <strong>has</strong>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;Walking to the station, the rain started to fall&rdquo; tidak tepat karena ...',
            'options' => [
                'kata kerja utama harus selalu berbentuk pasif.',
                'frasa participial <em>walking</em> merujuk pada <em>the rain</em>, bukan pada orang yang berjalan.',
                'kata <em>walking</em> harus diganti dengan <em>walk</em>.',
                '<em>rain</em> tidak boleh menjadi subjek kalimat.',
            ],
            'answer' => 1,
            'explanation' => 'Ini contoh <strong>dangling modifier</strong>: frasa <em>Walking to the station</em> harus merujuk pada pelaku yang berjalan, misalnya <em>Walking to the station, I was caught in the rain</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi agar bentuknya sejajar (parallel): &ldquo;The manager praised the team for its punctuality, its creativity, and ___.&rdquo;',
            'options' => ['working hard', 'that it worked hard', 'its dedication', 'because it worked hard'],
            'answer' => 2,
            'explanation' => 'Ketiga elemen harus berbentuk sama: <em>its punctuality, its creativity, and <strong>its dedication</strong></em> — semuanya frasa benda berawalan <em>its</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Pilih bentuk yang paling tepat secara kolokasi: &ldquo;This information is ___ essential for the board&#039;s decision.&rdquo;',
            'options' => ['very', 'highly', 'absolutely', 'extremely'],
            'answer' => 2,
            'explanation' => '<em>Essential</em> adalah adjective absolut yang tidak bertingkat; kolokasi baku adalah <strong>absolutely essential</strong>. <em>Very essential</em> dan <em>highly essential</em> tidak baku.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Kata kerja yang tepat (gaya British untuk collective noun): &ldquo;The committee ___ divided on the issue.&rdquo;',
            'answer' => 'was',
            'accepted' => ['was', 'is'],
            'explanation' => 'Dalam gaya British, <em>committee</em> dianggap tunggal sehingga memakai <em>was</em>; gaya Amerika kadang memakai <em>were</em> karena menekankan anggota. Yang penting adalah konsistensi.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Pilih kata kerja formal yang tepat untuk kolokasi: &ldquo;The research team decided to ___ an extensive survey.&rdquo;',
            'answer' => 'conduct',
            'accepted' => ['conduct', 'carry out', 'run', 'do', 'undertake', 'perform'],
            'explanation' => 'Kolokasi baku untuk penelitian adalah <strong>conduct / carry out / run a survey</strong>; <em>do a survey</em> lebih santai dan kurang formal.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk subjunktif: &ldquo;It is essential that every employee ___ (complete) the form before Friday.&rdquo;',
            'answer' => 'complete',
            'accepted' => ['complete'],
            'explanation' => 'Setelah <em>it is essential that</em>, bahasa Inggris formal memakai <strong>subjunctive</strong>: bentuk dasar kata kerja tanpa <em>-s</em> dan tanpa <em>to</em> (<em>that he be</em>, <em>that she complete</em>).',
        ],
        [
            'type' => 'true_false',
            'skill' => 'writing',
            'prompt' => 'Dalam penulisan formal, kalimat &ldquo;Less people attended the seminar than last year&rdquo; dianggap tepat.',
            'answer' => false,
            'explanation' => '<em>People</em> terhitung, sehingga harus memakai <strong>fewer</strong>: <em>Fewer people attended ...</em> <em>Less</em> dipakai untuk benda tidak terhitung (<em>less water, less time</em>).',
            'is_placement' => true,
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Comma splice terjadi ketika dua klausa bebas (independent clauses) dihubungkan hanya dengan sebuah koma tanpa konjungsi.',
            'answer' => true,
            'explanation' => 'Contoh: <em><del>The deadline was tight, the team worked late.</del></em> Perbaikannya: gunakan titik koma (;), titik (.), atau konjungsi seperti <em>so</em> / <em>because</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan jenis kesalahan dengan contohnya.',
            'pairs' => [
                ['left' => 'Dangling modifier', 'right' => 'After reading the report, the conclusion seemed unclear.'],
                ['left' => 'Faulty parallelism', 'right' => 'She likes hiking, swimming, and to ride a bike.'],
                ['left' => 'Comma splice', 'right' => 'The deadline was tight, the team worked late anyway.'],
                ['left' => 'Misplaced modifier', 'right' => 'He nearly drove the car for six hours.'],
                ['left' => 'Redundancy', 'right' => 'the final outcome of the results'],
            ],
            'explanation' => 'Mengenali nama kesalahan membantu kamu menemukan pola yang sama di teks lain dan memperbaikinya secara sistematis.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The list of items for the workshop are on the desk in the main hall.',
            'prompt' => 'Dengarkan kalimat berikut. Ada satu kesalahan tata bahasa. Pilih kalimat yang benar.',
            'options' => [
                'The list of items for the workshop are on the desk in the main hall.',
                'The list of items for the workshop is on the desk in the main hall.',
                'The lists of items for the workshop is on the desk in the main hall.',
                'The list of item for the workshop are on the desk in the main hall.',
            ],
            'answer' => 1,
            'explanation' => 'Subjeknya adalah <em>the list</em> (tunggal), bukan <em>items</em>; karena itu kata kerjanya harus <strong>is</strong>. Frasa <em>of items</em> adalah pelengkap yang tidak memengaruhi subjek.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>The marketing team has finished their report. Walking through the slides, the charts were surprisingly clear. Each of the participants have submitted their comments, although the feedback was less constructive then expected. The team, as well as the interns, was asked to revise the executive summary.</p></div><p>Kalimat mana yang mengandung <em>dangling modifier</em>? Tuliskan kalimat tersebut secara lengkap.</p>',
            'answer' => 'Walking through the slides, the charts were surprisingly clear.',
            'accepted' => [
                'walking through the slides, the charts were surprisingly clear.',
                'the charts were surprisingly clear.',
            ],
            'explanation' => 'Frasa <em>Walking through the slides</em> seharusnya merujuk pada orang yang meninjau, bukan pada <em>the charts</em>. Perbaikannya: <em>Walking through the slides, the team found the charts surprisingly clear.</em> (Teks juga mengandung kesalahan lain: <em>their</em> untuk tim tunggal, <em>have</em> untuk <em>each</em>, dan <em>then</em> yang seharusnya <em>than</em>.)',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Kalimat mana yang paling ringkas tanpa mengubah makna?',
            'options' => [
                'Due to the fact that the deadline was tight, the team worked late.',
                'Because the deadline was tight, the team worked late.',
                'In view of the fact that the deadline was tight, the team worked late.',
                'Owing to the fact that the deadline was tight, the team worked late.',
            ],
            'answer' => 1,
            'explanation' => 'Frasa seperti <em>due to the fact that</em> tidak menambah makna; <strong>because</strong> sudah cukup dan membuat kalimat jauh lebih ringkas.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Kalimat mana yang menggunakan tanda baca dengan benar?',
            'options' => [
                'The data were inconclusive, however, the team continued.',
                'The data were inconclusive; however, the team continued.',
                'The data were inconclusive: however the team continued.',
                'The data were inconclusive however, the team continued.',
            ],
            'answer' => 1,
            'explanation' => '<em>However</em> di awal klausa kedua membutuhkan <strong>titik koma</strong> sebelumnya dan koma sesudahnya: <em>... inconclusive; however, the team continued.</em>',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Bacalah kalimat hasil penyuntingan berikut dengan jelas dan natural.',
            'target' => 'The data, which were collected over three years, suggest a clear upward trend.',
            'hint' => 'Arti: Data yang dikumpulkan selama tiga tahun menunjukkan tren naik yang jelas.',
            'explanation' => 'Perhatikan dua hal saat membacakan hasil edit: jeda pada tanda koma (relative clause) dan bentuk jamak <em>the data ... suggest</em> yang lazim dalam bahasa Inggris ilmiah.',
        ],
    ],
];
