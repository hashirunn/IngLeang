<?php

/**
 * Level 2 — Modul 03: Past Continuous & Past Perfect
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
    'title' => 'Past Continuous & Past Perfect',
    'slug' => 'past-continuous-past-perfect',
    'subtitle' => 'Urutan kejadian masa lalu: latar belakang, gangguan, dan peristiwa yang lebih dahulu',
    'summary' => 'Belajar menyusun urutan peristiwa masa lalu: past continuous untuk kejadian yang sedang berlangsung, dan past perfect untuk peristiwa yang selesai sebelum peristiwa lain terjadi.',
    'icon' => '📚',
    'objectives' => [
        'Membentuk past continuous: was/were + V-ing',
        'Menggunakan when dan while dengan tense yang tepat',
        'Membentuk past perfect: had + V3 untuk peristiwa yang lebih dahulu',
        'Menyusun cerita masa lalu dengan urutan kejadian yang jelas',
    ],
    'sections' => [
        [
            'heading' => 'Bentuk Past Continuous',
            'body' => '<p>Past continuous dibentuk dari <strong>was/were + V-ing</strong>. Tense ini menggambarkan kejadian yang <strong>sedang berlangsung pada titik waktu tertentu di masa lalu</strong>, sering sebagai latar belakang kejadian lain.</p>
<table>
<thead><tr><th>Aspek</th><th>Rumus</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Pernyataan</td><td>S + was/were + V-ing</td><td>They were waiting outside.</td></tr>
<tr><td>Negasi</td><td>S + was/were not + V-ing</td><td>She wasn\'t sleeping at nine.</td></tr>
<tr><td>Pertanyaan</td><td>Was/Were + S + V-ing?</td><td>What were you doing?</td></tr>
</tbody>
</table>
<p><em>Was</em> dipakai untuk I, he, she, it, sedangkan <em>were</em> untuk you, we, they. Gunakan past continuous bila ada petunjuk waktu lampau yang spesifik, misalnya <em>at 8 p.m. last night</em> atau <em>while</em>.</p>',
            'examples' => [
                ['en' => 'At 8 p.m. last night, I was studying for my exam.', 'id' => 'Tadi malam pukul 20.00, saya sedang belajar untuk ujian.'],
                ['en' => 'While we were having dinner, the lights went out.', 'id' => 'Sementara kami sedang makan malam, lampu padam.'],
                ['en' => 'They were building the bridge from 2019 to 2021.', 'id' => 'Mereka sedang membangun jembatan dari 2019 sampai 2021.'],
                ['en' => 'What were you doing when I called you?', 'id' => 'Apa yang sedang kamu lakukan ketika saya meneleponmu?'],
            ],
        ],
        [
            'heading' => 'When vs While',
            'body' => '<p>Keduanya berarti &ldquo;ketika&rdquo;, tetapi pola tense-nya berbeda. Kunci utamanya adalah <strong>sesaat</strong> versus <strong>durasi</strong>.</p>
<table>
<thead><tr><th>Kata penghubung</th><th>Kejadian yang dihubungkan</th><th>Pola yang lazim</th></tr></thead>
<tbody>
<tr><td>when</td><td>kejadian sesaat yang memutus</td><td>when + simple past, past continuous</td></tr>
<tr><td>while</td><td>kejadian berdurasi yang berjalan</td><td>while + past continuous, simple past</td></tr>
</tbody>
</table>
<p><em>When</em> juga bisa memakai past continuous di belakangnya, misalnya <em>When I was young, I lived in Solo</em>. Yang tidak boleh adalah menggabungkan <em>while</em> dengan simple past untuk kejadian berdurasi: <em>*While I cooked, the phone rang</em> sebaiknya menjadi <em>While I was cooking, the phone rang</em>.</p>',
            'examples' => [
                ['en' => 'She was reading when the doorbell rang.', 'id' => 'Dia sedang membaca ketika bel pintu berbunyi.'],
                ['en' => 'While the kids were sleeping, I finished the report.', 'id' => 'Selagi anak-anak sedang tidur, saya menyelesaikan laporan.'],
                ['en' => 'What was he doing when you saw him?', 'id' => 'Apa yang sedang dia lakukan ketika kamu melihatnya?'],
                ['en' => 'When I lived in Surabaya, I rode my bike everywhere.', 'id' => 'Ketika tinggal di Surabaya, saya naik sepeda ke mana-mana.'],
            ],
        ],
        [
            'heading' => 'Bentuk Past Perfect',
            'body' => '<p>Past perfect dibentuk dari <strong>had + V3</strong> untuk semua subjek. Tense ini menandai peristiwa yang <strong>selesai sebelum peristiwa lain di masa lalu</strong>, sehingga urutan cerita menjadi jelas.</p>
<table>
<thead><tr><th>Peristiwa</th><th>Tense</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Lebih dahulu</td><td>Past perfect (had + V3)</td><td>The film had started.</td></tr>
<tr><td>Terjadi kemudian</td><td>Simple past</td><td>We arrived.</td></tr>
</tbody>
</table>
<p>Pola yang sangat umum: <strong>By the time + simple past, had + V3</strong>. Jika urutan kejadian sudah jelas dari kata penghubungnya, simple past saja kadang cukup: <em>After she finished the report, she went home</em>.</p>',
            'examples' => [
                ['en' => 'By the time we arrived, the film had already started.', 'id' => 'Sampai kami tiba, filmnya sudah mulai.'],
                ['en' => 'She had finished her work before her boss called her.', 'id' => 'Dia sudah menyelesaikan pekerjaannya sebelum atasan memanggilnya.'],
                ['en' => 'When I got to the station, the train had left.', 'id' => 'Ketika saya tiba di stasiun, keretanya sudah berangkat.'],
                ['en' => 'He had never seen snow before he moved to Canada.', 'id' => 'Dia belum pernah melihat salju sebelum pindah ke Kanada.'],
            ],
        ],
        [
            'heading' => 'Menyusun Urutan Kejadian dalam Cerita',
            'body' => '<p>Dalam satu paragraf naratif, ketiga tense saling melengkapi. Urutan logisnya:</p>
<ol>
<li><strong>Past continuous</strong> &mdash; latar belakang atau kejadian yang sedang berlangsung.</li>
<li><strong>Simple past</strong> &mdash; kejadian sesaat yang memutus atau tindakan utama.</li>
<li><strong>Past perfect</strong> &mdash; peristiwa yang terjadi sebelum kejadian utama.</li>
</ol>
<blockquote><p><em>I was walking home when it started to rain. I realized I had left my umbrella at the office, so I ran to the bus stop.</em><br>Saya sedang berjalan pulang ketika hujan mulai turun. Saya menyadari saya telah meninggalkan payung di kantor, jadi saya berlari ke halte bus.</p></blockquote>',
            'examples' => [
                ['en' => 'I was walking home when it started to rain.', 'id' => 'Saya sedang berjalan pulang ketika hujan mulai turun.'],
                ['en' => 'I realized I had left my umbrella at the office.', 'id' => 'Saya menyadari saya telah meninggalkan payung di kantor.'],
                ['en' => 'By the time the bus came, I was completely wet.', 'id' => 'Sampai bus datang, saya sudah basah kuyup.'],
                ['en' => 'Luckily, the shop was still open, so I bought a new umbrella.', 'id' => 'Untungnya toko masih buka, jadi saya membeli payung baru.'],
            ],
        ],
        [
            'heading' => 'Kata Penghubung Waktu (Time Connectors)',
            'body' => '<p>Kata penghubung menentukan tense yang dipakai di sekitarnya. Gunakan tabel berikut sebagai panduan cepat.</p>
<table>
<thead><tr><th>Kata penghubung</th><th>Fungsi</th><th>Pola</th></tr></thead>
<tbody>
<tr><td>while</td><td>menandai durasi</td><td>while + past continuous</td></tr>
<tr><td>when</td><td>menandai kejadian sesaat</td><td>when + simple past</td></tr>
<tr><td>before</td><td>sebelumnya</td><td>had + V3 before + simple past</td></tr>
<tr><td>after</td><td>sesudahnya</td><td>after + had + V3 (atau simple past)</td></tr>
<tr><td>by the time</td><td>pada saat (dengan hasil tertentu)</td><td>by the time + simple past, had + V3</td></tr>
<tr><td>suddenly</td><td>tiba-tiba</td><td>menandai perubahan kejadian</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'Suddenly, the lights went out.', 'id' => 'Tiba-tiba, lampu padam.'],
                ['en' => 'After he had eaten, he went to bed.', 'id' => 'Setelah dia makan, dia pergi tidur.'],
                ['en' => 'Eventually, the police found the stolen car.', 'id' => 'Akhirnya, polisi menemukan mobil yang dicuri itu.'],
                ['en' => 'Please wait a moment; the manager will be here soon.', 'id' => 'Tolong tunggu sebentar; manajer akan segera tiba.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'while', 'phonetic' => '/waɪl/', 'meaning' => 'selagi, sementara', 'example' => 'While I was waiting, I read a magazine.'],
        ['word' => 'suddenly', 'phonetic' => '/ˈsʌdənli/', 'meaning' => 'tiba-tiba', 'example' => 'Suddenly, the lights went out.'],
        ['word' => 'realize', 'phonetic' => '/ˈrɪəlaɪz/', 'meaning' => 'menyadari', 'example' => 'I realized I had forgotten my keys.'],
        ['word' => 'moment', 'phonetic' => '/ˈməʊmənt/', 'meaning' => 'saat, momen', 'example' => 'Wait a moment, please.'],
        ['word' => 'eventually', 'phonetic' => '/ɪˈventʃuəli/', 'meaning' => 'akhirnya', 'example' => 'Eventually, the police found the car.'],
        ['word' => 'interrupt', 'phonetic' => '/ˌɪntəˈrʌpt/', 'meaning' => 'memotong; mengganggu', 'example' => 'Sorry to interrupt, but the meeting has started.'],
        ['word' => 'before', 'phonetic' => '/bɪˈfɔːr/', 'meaning' => 'sebelum', 'example' => 'She had left before I arrived.'],
        ['word' => 'after', 'phonetic' => '/ˈɑːftər/', 'meaning' => 'sesudah', 'example' => 'After he had finished, he went home.'],
        ['word' => 'already', 'phonetic' => '/ɔːlˈredi/', 'meaning' => 'sudah (lebih awal dari yang diperkirakan)', 'example' => 'The train had already left.'],
        ['word' => 'arrive', 'phonetic' => '/əˈraɪv/', 'meaning' => 'tiba, sampai', 'example' => 'We arrived just as the film started.'],
        ['word' => 'wake up', 'phonetic' => '/weɪk ʌp/', 'meaning' => 'bangun tidur', 'example' => 'I woke up at six because of the noise.'],
        ['word' => 'catch', 'phonetic' => '/kætʃ/', 'meaning' => 'mengejar; menangkap', 'example' => 'The bus left before she could catch it.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'While I ___ dinner last night, the phone rang.',
            'options' => ['cook', 'was cooking', 'had cooked', 'have cooked'],
            'answer' => 1,
            'explanation' => '<em>While</em> menandai kejadian berdurasi yang sedang berlangsung, sehingga memakai past continuous: <em>was cooking</em>. Kejadian sesaatnya (<em>the phone rang</em>) memakai simple past.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'By the time we reached the airport, the plane ___.',
            'options' => ['takes off', 'has taken off', 'had taken off', 'was taking off'],
            'answer' => 2,
            'explanation' => 'Pesawat berangkat <strong>sebelum</strong> kami tiba, yaitu peristiwa yang lebih dahulu di masa lalu, sehingga dipakai past perfect: <em>had taken off</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'At this time yesterday, the students ___ their final exams.',
            'options' => ['take', 'took', 'were taking', 'had taken'],
            'answer' => 2,
            'explanation' => '<em>At this time yesterday</em> menunjukkan kejadian yang sedang berlangsung pada jam tertentu di masa lalu, sehingga jawabannya <em>were taking</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'She ___ the kitchen window when a bird flew into the room.',
            'options' => ['cleaned', 'was cleaning', 'had cleaned', 'has cleaned'],
            'answer' => 1,
            'explanation' => 'Tindakan membersihkan berjalan sebagai latar belakang ketika burung masuk, sehingga dipakai past continuous: <em>was cleaning</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>By the time I got home, my parents had already ___ (eat) dinner.</strong>',
            'answer' => 'eaten',
            'accepted' => ['eaten'],
            'explanation' => 'Setelah <em>had</em> dipakai bentuk V3. Kata kerja tidak beraturan <em>eat &rarr; ate &rarr; eaten</em>, sehingga jawabannya <em>eaten</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>While the baby ___, I finished the report. (sleep)</strong>',
            'answer' => 'was sleeping',
            'accepted' => ['was sleeping'],
            'explanation' => '<em>While</em> diikuti past continuous untuk kejadian berdurasi: <em>While the baby was sleeping, I finished the report</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>Yesterday at 8 p.m., I ___ (study) for my English test.</strong>',
            'answer' => 'was studying',
            'accepted' => ['was studying'],
            'explanation' => 'Waktu lampau yang spesifik (<em>yesterday at 8 p.m.</em>) menunjukkan kejadian yang sedang berlangsung, sehingga memakai past continuous: <em>was studying</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi dengan kata yang tepat: <strong>Halfway home, I ___ (realize) that I had left my keys at the office.</strong>',
            'answer' => 'realized',
            'accepted' => ['realized'],
            'explanation' => 'Tindakan menyadari terjadi sebagai peristiwa lampau biasa, sehingga memakai simple past: <em>realized</em>. Peristiwa yang mendahuluinya memakai past perfect (<em>had left</em>).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi cuplikan cerita: <strong>&ldquo;When I arrived home, I saw that someone ___ (break) the kitchen window.&rdquo;</strong>',
            'answer' => 'had broken',
            'accepted' => ['had broken'],
            'explanation' => 'Jendela pecah <strong>sebelum</strong> saya tiba dan menemukannya, sehingga memakai past perfect: <em>someone had broken the kitchen window</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Pada kalimat &ldquo;When I arrived, they were waiting for me&rdquo;, kejadian waiting sudah dimulai sebelum arrived dan masih berlangsung saat itu terjadi.',
            'answer' => true,
            'explanation' => 'Benar. <em>Were waiting</em> adalah latar belakang yang sudah berjalan, lalu <em>arrived</em> sebagai kejadian sesaat memutusnya.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;The train had left when I reached the station&rdquo; berarti kereta berangkat setelah saya tiba di stasiun.',
            'answer' => false,
            'explanation' => 'Salah. <em>Had left</em> menandai peristiwa yang lebih dahulu: kereta sudah berangkat <strong>sebelum</strong> saya tiba, makanya saya tertinggal.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata penghubung waktu berikut dengan artinya.',
            'pairs' => [
                ['left' => 'by the time', 'right' => 'pada saat (sesuatu sudah lebih dulu terjadi)'],
                ['left' => 'before', 'right' => 'sebelum'],
                ['left' => 'after', 'right' => 'sesudah'],
                ['left' => 'suddenly', 'right' => 'tiba-tiba'],
                ['left' => 'eventually', 'right' => 'akhirnya'],
            ],
            'explanation' => 'Kata penghubung mengatur urutan cerita: <em>before</em> mendahului, <em>after</em> mengikuti, <em>suddenly</em> menandai perubahan mendadak, dan <em>eventually</em> menandai hasil akhir.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'When I arrived, they were already waiting outside the library.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'When I arrived, they were already waiting outside the library.',
                'When I arrived, they had already left the library.',
                'After I arrived, they waited outside the library for an hour.',
                'They were waiting outside the station when I arrived.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>they were already waiting outside the library</em>, bukan <em>had already left</em> (sudah pergi), <em>waited ... for an hour</em>, atau tempat <em>station</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk menceritakan kejadian tadi malam.',
            'target' => 'I was watching TV when my friend called me last night.',
            'hint' => 'Arti: Saya sedang menonton TV ketika teman saya menelepon saya tadi malam.',
            'explanation' => 'Pola klasik narasi: past continuous (<em>was watching</em>) sebagai latar belakang dan simple past (<em>called</em>) sebagai kejadian sesaat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Marco was driving home from work when he noticed a bag on the back seat. He picked it up and realized that he had left his laptop at the office. He turned the car around immediately. By the time the office closed, he had arrived back and collected it.</p></div><p>What had Marco done before he returned to the office?</p>',
            'options' => [
                'He had left his laptop at the office.',
                'He had closed the office himself.',
                'He had called the police.',
                'He had finished his work at home.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;he had left his laptop at the office&rdquo;</em> memakai past perfect, artinya kesalahan itu terjadi <strong>sebelum</strong> ia kembali ke kantor.',
        ],
    ],
];
