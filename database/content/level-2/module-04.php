<?php

/**
 * Level 2 — Modul 04: Future Forms
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
    'title' => 'Future Forms',
    'slug' => 'future-forms',
    'subtitle' => 'Prediksi, rencana, jadwal, dan kemungkinan (will, be going to, present continuous, future continuous)',
    'summary' => 'Menguasai empat bentuk masa depan beserta perbedaan nuansanya: will untuk prediksi dan keputusan, be going to untuk rencana dan bukti, present continuous untuk jadwal, serta future continuous untuk kejadian yang sedang berlangsung.',
    'icon' => '🔮',
    'objectives' => [
        'Menggunakan will untuk prediksi, janji, dan keputusan spontan',
        'Menggunakan be going to untuk rencana dan bukti yang terlihat sekarang',
        'Memakai present continuous untuk jadwal yang sudah diatur',
        'Membentuk future continuous untuk kejadian yang berlangsung di waktu tertentu',
    ],
    'sections' => [
        [
            'heading' => 'Will: Prediksi, Keputusan Spontan, dan Janji',
            'body' => '<p><strong>Will + V1</strong> dipakai untuk empat situasi utama:</p>
<ul>
<li><strong>Prediksi atau opini:</strong> <em>I think it will rain later.</em></li>
<li><strong>Keputusan saat berbicara:</strong> <em>A: The bag is heavy. B: I\'ll help you.</em></li>
<li><strong>Janji dan penawaran:</strong> <em>Don\'t worry — I will be there on time.</em></li>
<li><strong>Permintaan:</strong> <em>Will you pass me the salt?</em></li>
</ul>
<p>Bentuk negatifnya <em>will not</em> yang disingkat <em>won\'t</em>, dan pertanyaannya dibentuk dengan memindahkan <em>will</em> ke depan subjek: <em>Will she come?</em></p>',
            'examples' => [
                ['en' => 'I think it will rain later this afternoon.', 'id' => 'Saya pikir nanti sore akan hujan.'],
                ['en' => 'A: The bag is heavy. B: I\'ll help you with that.', 'id' => 'A: Tas ini berat. B: Saya akan membantumu.'],
                ['en' => 'Don\'t worry — I will be there on time.', 'id' => 'Jangan khawatir — saya akan tiba tepat waktu.'],
                ['en' => 'Will you pass me the salt, please?', 'id' => 'Tolong ambilkan saya garam, ya?'],
            ],
        ],
        [
            'heading' => 'Be Going To: Rencana dan Bukti Sekarang',
            'body' => '<p><strong>am/is/are + going to + V1</strong> dipakai bila keputusan sudah diambil <strong>sebelumnya</strong> atau ada <strong>bukti yang terlihat sekarang</strong>.</p>
<table>
<thead><tr><th>Situasi</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Rencana atau niat yang sudah dipikirkan</td><td>We are going to paint the house next month.</td></tr>
<tr><td>Prediksi berdasarkan bukti sekarang</td><td>Look at those clouds! It is going to rain.</td></tr>
</tbody>
</table>
<p>Rencana yang sifatnya sudah pasti dan terjadwal sering lebih tepat memakai present continuous, misalnya <em>I\'m meeting the doctor at 9.30</em>. Perhatikan juga bentuk negatifnya: <em>isn\'t / aren\'t going to</em>.</p>',
            'examples' => [
                ['en' => 'We are going to paint the house next month.', 'id' => 'Kami berencana mengecat rumah bulan depan.'],
                ['en' => 'Look at those dark clouds! It\'s going to rain.', 'id' => 'Lihat awan gelap itu! Akan segera hujan.'],
                ['en' => 'She is going to apply for a scholarship next year.', 'id' => 'Dia berencana melamar beasiswa tahun depan.'],
                ['en' => 'Are you going to attend the workshop tomorrow?', 'id' => 'Apakah kamu akan mengikuti lokakarya besok?'],
            ],
        ],
        [
            'heading' => 'Present Continuous untuk Jadwal dan Future Continuous',
            'body' => '<p><strong>Present continuous</strong> dipakai untuk perjanjian yang sudah diatur, biasanya disertai waktu yang jelas seperti jam, tanggal, atau hari.</p>
<p><strong>Future continuous (will be + V-ing)</strong> menggambarkan kejadian yang <strong>sedang berlangsung pada waktu tertentu di masa depan</strong>, misalnya saat seseorang menelepon atau pada &ldquo;waktu ini minggu depan&rdquo;.</p>
<table>
<thead><tr><th>Bentuk</th><th>Fungsi</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>present continuous</td><td>perjanjian yang sudah diatur</td><td>I\'m meeting the doctor at 9.30 tomorrow.</td></tr>
<tr><td>future continuous</td><td>sedang berlangsung pada waktu tertentu</td><td>This time next week, we will be on a plane.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'I\'m meeting the doctor at 9.30 tomorrow morning.', 'id' => 'Saya akan bertemu dokter pukul 09.30 besok pagi.'],
                ['en' => 'This time next week, we will be sitting on a plane to London.', 'id' => 'Waktu ini minggu depan, kami akan sedang duduk di pesawat menuju London.'],
                ['en' => 'Don\'t call at eight — I\'ll be having dinner with my parents.', 'id' => 'Jangan menelepon pukul delapan — saya akan sedang makan malam bersama orang tua.'],
                ['en' => 'The train is leaving at 6.15 p.m.', 'id' => 'Kereta berangkat pukul 18.15.'],
            ],
        ],
        [
            'heading' => 'Memilih Bentuk: Panduan Singkat',
            'body' => '<p>Kuncinya bukan kata kunci waktunya saja, melainkan <strong>maksud pembicara</strong>. Gunakan panduan berikut.</p>
<table>
<thead><tr><th>Konteks</th><th>Bentuk yang tepat</th></tr></thead>
<tbody>
<tr><td>Keputusan ketika berbicara</td><td>will + V1</td></tr>
<tr><td>Rencana/niat yang sudah dipikirkan</td><td>be going to + V1</td></tr>
<tr><td>Bukti fisik yang terlihat sekarang</td><td>be going to + V1</td></tr>
<tr><td>Jadwal atau perjanjian yang sudah diatur</td><td>present continuous</td></tr>
<tr><td>Sedang berlangsung pada waktu depan tertentu</td><td>future continuous</td></tr>
<tr><td>Jadwal resmi (kereta, kuliah, acara)</td><td>simple present</td></tr>
</tbody>
</table>
<p>Pada klausa waktu seperti <em>when</em>, <em>after</em>, dan <em>before</em> yang merujuk masa depan, gunakan <strong>present simple</strong>, bukan <em>will</em>.</p>',
            'examples' => [
                ['en' => 'The course starts on Monday.', 'id' => 'Kursus dimulai pada hari Senin. (jadwal tetap)'],
                ['en' => 'When I finish this report, I will call you.', 'id' => 'Setelah saya menyelesaikan laporan ini, saya akan meneleponmu.'],
                ['en' => 'A: I\'m tired. B: I\'ll make some tea.', 'id' => 'A: Saya lelah. Saya akan membuat teh. (keputusan spontan)'],
                ['en' => 'She has booked the tickets — they are flying to Osaka next month.', 'id' => 'Dia sudah memesan tiket — mereka akan terbang ke Osaka bulan depan.'],
            ],
        ],
        [
            'heading' => 'Kesalahan Umum (Common Mistakes)',
            'body' => '<p>Empat kesalahan berikut paling sering dilakukan pelajar. Bandingkan bentuk yang salah dengan bentuk yang benar.</p>
<table>
<thead><tr><th>Salah</th><th>Benar</th><th>Keterangan</th></tr></thead>
<tbody>
<tr><td>When I will finish, I will call you.</td><td>When I finish, I will call you.</td><td>Klausa waktu memakai present simple</td></tr>
<tr><td>Look! It will rain.</td><td>Look! It is going to rain.</td><td>Bukti terlihat sekarang memakai be going to</td></tr>
<tr><td>I am go to travel next year.</td><td>I am going to travel next year.</td><td>Setelah <em>going to</em> memakai kata kerja dasar</td></tr>
<tr><td>She will playing football at seven.</td><td>She will be playing football at seven.</td><td>Future continuous: will be + V-ing</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'When I finish this report, I will call you.', 'id' => 'Begitu saya selesai laporan ini, saya akan meneleponmu.'],
                ['en' => 'Look at the sky! It is going to snow.', 'id' => 'Lihat langit! Akan segera bersalju.'],
                ['en' => 'She will be playing football at seven tonight.', 'id' => 'Dia akan sedang bermain sepak bola pukul tujuh malam ini.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'predict', 'phonetic' => '/prɪˈdɪkt/', 'meaning' => 'memprediksi', 'example' => 'Scientists predict hotter summers.'],
        ['word' => 'intend', 'phonetic' => '/ɪnˈtend/', 'meaning' => 'berniat', 'example' => 'I intend to finish this task today.'],
        ['word' => 'schedule', 'phonetic' => '/ˈʃedjuːl/', 'meaning' => 'jadwal; menjadwalkan', 'example' => 'The meeting is scheduled for 7 a.m.'],
        ['word' => 'arrangement', 'phonetic' => '/əˈreɪndʒmənt/', 'meaning' => 'pengaturan, kesepakatan', 'example' => 'We have made an arrangement with the client.'],
        ['word' => 'forecast', 'phonetic' => '/ˈfɔːkɑːst/', 'meaning' => 'ramalan cuaca', 'example' => 'The forecast says it will rain tonight.'],
        ['word' => 'evidence', 'phonetic' => '/ˈevɪdəns/', 'meaning' => 'bukti', 'example' => 'The dark clouds are evidence of a storm.'],
        ['word' => 'expect', 'phonetic' => '/ɪkˈspekt/', 'meaning' => 'mengharapkan, menantikan', 'example' => 'We expect the results next week.'],
        ['word' => 'probably', 'phonetic' => '/ˈprɒbəbli/', 'meaning' => 'kemungkinan besar', 'example' => 'It will probably snow tonight.'],
        ['word' => 'certainly', 'phonetic' => '/ˈsɜːtənli/', 'meaning' => 'pasti, tentu', 'example' => 'I will certainly help you tomorrow.'],
        ['word' => 'postpone', 'phonetic' => '/pəʊsˈtpəʊn/', 'meaning' => 'menunda', 'example' => 'They may postpone the meeting.'],
        ['word' => 'confirm', 'phonetic' => '/kənˈfɜːm/', 'meaning' => 'mengonfirmasi', 'example' => 'Please confirm the booking by email.'],
        ['word' => 'look forward to', 'phonetic' => '/lʊk ˈfɔːwəd tuː/', 'meaning' => 'menantikan dengan senang', 'example' => 'I look forward to hearing from you.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'A: These boxes are very heavy! B: Don&rsquo;t worry, I ___ you carry them.',
            'options' => ['will help', 'helped', 'have helped', 'was helping'],
            'answer' => 0,
            'explanation' => 'B mengambil keputusan pada saat itu juga ketika melihat kotak-kotak itu berat, sehingga memakai <em>will</em> + kata kerja dasar.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Sara has been saving money for months because she ___ a new laptop.',
            'options' => ['is going to buy', 'buys', 'has bought', 'was buying'],
            'answer' => 0,
            'explanation' => 'Menabung selama berbulan-bulan menunjukkan niat yang sudah dipikirkan sebelumnya, sehingga tepat memakai <em>is going to buy</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'I ___ Dr. Smith at 10 o\'clock tomorrow morning, so please do not schedule anything else for me.',
            'options' => ['am meeting', 'met', 'have met', 'was meeting'],
            'answer' => 0,
            'explanation' => 'Ini perjanjian yang sudah diatur pada waktu tertentu di masa depan, sehingga memakai present continuous: <em>am meeting</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'This time next week, we ___ on a beach in Bali.',
            'options' => ['will be lying', 'lie', 'have lain', 'was lying'],
            'answer' => 0,
            'explanation' => '<em>This time next week</em> menunjukkan kejadian yang akan sedang berlangsung pada waktu tertentu di masa depan, sehingga memakai future continuous: <em>will be lying</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>This time tomorrow, we ___ (fly) to London.</strong>',
            'answer' => 'will be flying',
            'accepted' => ['will be flying'],
            'explanation' => 'Pada waktu tertentu di masa depan, kejadian sedang berlangsung sehingga dipakai future continuous: <em>will be flying</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>When I ___ (finish) this report, I will send it to you.</strong>',
            'answer' => 'finish',
            'accepted' => ['finish'],
            'explanation' => 'Setelah <em>when</em> yang merujuk masa depan dipakai present simple, bukan <em>will</em>: <em>When I finish ... I will send it</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>I think she ___ (call) you tonight to explain the plan.</strong>',
            'answer' => 'will call',
            'accepted' => ['will call'],
            'explanation' => '<em>I think</em> menandai prediksi atau opini, sehingga paling tepat memakai <em>will + V1</em>: <em>she will call you tonight</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>Don\'t worry — I ___ (be) there before the meeting starts.</strong>',
            'answer' => 'will be',
            'accepted' => ['will be'],
            'explanation' => 'Kalimat ini adalah janji untuk menenangkan lawan bicara, sehingga memakai <em>will be</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi kalimat hipotesis dalam esai: <strong>&ldquo;This time next year, I ___ (live) abroad for my studies.&rdquo;</strong>',
            'answer' => 'will be living',
            'accepted' => ['will be living', 'i will be living'],
            'explanation' => 'Kalimat menggambarkan keadaan yang akan sedang berlangsung pada waktu depan tertentu, sehingga memakai future continuous: <em>I will be living abroad</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam kalimat masa depan, klausa setelah <em>when</em> juga memakai will: &ldquo;When I will arrive, I will call you.&rdquo;',
            'answer' => false,
            'explanation' => 'Salah. Klausa waktu seperti <em>when</em>, <em>after</em>, dan <em>before</em> memakai present simple untuk masa depan. Bentuk yang benar: <em>When I arrive, I will call you</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Be going to dipakai bila ada bukti yang terlihat sekarang, misalnya &ldquo;Look at those clouds! It is going to rain.&rdquo;',
            'answer' => true,
            'explanation' => 'Benar. Awan gelap adalah bukti fisik di depan mata, sehingga prediksi memakai <em>be going to</em>. <em>Will</em> lebih tepat untuk opini tanpa bukti langsung.',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan situasi dengan bentuk future yang paling tepat.',
            'pairs' => [
                ['left' => 'keputusan spontan saat berbicara', 'right' => 'will + verb'],
                ['left' => 'rencana yang sudah dibuat sebelumnya', 'right' => 'be going to + verb'],
                ['left' => 'perjanjian yang sudah diatur', 'right' => 'present continuous'],
                ['left' => 'sedang berlangsung pada waktu depan tertentu', 'right' => 'future continuous'],
                ['left' => 'jadwal resmi seperti kereta atau kuliah', 'right' => 'simple present'],
            ],
            'explanation' => 'Pemilihan bentuk bergantung pada maksud: keputusan mendadak memakai <em>will</em>, rencana dan bukti memakai <em>be going to</em>, perjanjian memakai present continuous, dan jadwal resmi memakai simple present.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'We are meeting the new manager at half past nine tomorrow morning.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'We are meeting the new manager at half past nine tomorrow morning.',
                'We met the new manager at half past nine yesterday morning.',
                'We will meet the new manager at half past nine tomorrow evening.',
                'We usually meet the new manager at half past nine.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>are meeting</em> (perjanjian yang sudah diatur) untuk <em>tomorrow morning</em>, bukan bentuk lampau, <em>evening</em>, atau kebiasaan <em>usually</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk menyampaikan rencana akhir pekanmu.',
            'target' => 'We are going to visit our grandparents this weekend.',
            'hint' => 'Arti: Kami akan mengunjungi kakek-nenek kami akhir pekan ini.',
            'explanation' => 'Rencana yang sudah dipikirkan sebelumnya memakai <em>be going to</em>; untuk jadwal yang sudah dipesan, present continuous juga lazim: <em>We are visiting our grandparents this weekend</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Next month, the city library is going to stay open until 10 p.m. because the exam season is approaching. During the exams, students will be using the reading rooms until late. This time next month, thousands of young people will be studying there every evening. The library says it will review the plan at the end of the year.</p></div><p>Why will the library stay open later next month?</p>',
            'options' => [
                'Because the exam season is approaching.',
                'Because it is rebuilding its reading rooms.',
                'Because the city asked it to close earlier.',
                'Because many tourists are visiting the city.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;the city library is going to stay open until 10 p.m. because the exam season is approaching&rdquo;</em> menyebut musim ujian sebagai alasannya.',
        ],
    ],
];
