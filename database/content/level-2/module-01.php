<?php

/**
 * Level 2 — Modul 01: Tense Review
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
    'title' => 'Tense Review',
    'slug' => 'tense-review',
    'subtitle' => 'Present, past, future dalam berbagai konteks',
    'summary' => 'Meninjau ulang pilihan tense untuk situasi sehari-hari: kebiasaan, kejadian yang sedang berlangsung, peristiwa lampau, dan berbagai bentuk masa depan, lengkap dengan kata kunci waktunya.',
    'icon' => '⏱️',
    'objectives' => [
        'Memilih simple present atau present continuous sesuai konteks',
        'Menggunakan simple past untuk peristiwa lampau yang sudah selesai',
        'Mengenali stative verb yang tidak lazim dipakai dalam bentuk continuous',
        'Membedakan will, be going to, dan present continuous untuk masa depan',
    ],
    'sections' => [
        [
            'heading' => 'Tense Waktu Kini: Simple Present vs Present Continuous',
            'body' => '<p>Tense dipilih berdasarkan <strong>kapan kejadian terjadi</strong> dan <strong>hubungannya dengan saat ini</strong>. Untuk waktu kini, bahasa Inggris memakai dua bentuk utama.</p>
<table>
<thead><tr><th>Bentuk</th><th>Rumus</th><th>Fungsi utama</th></tr></thead>
<tbody>
<tr><td>Simple present</td><td>S + V1 (+ s/es)</td><td>Kebiasaan, fakta, dan jadwal tetap</td></tr>
<tr><td>Present continuous</td><td>S + am/is/are + V-ing</td><td>Sedang terjadi sekarang atau situasi sementara</td></tr>
</tbody>
</table>
<p>Kalimat kebiasaan biasanya disertai kata kunci seperti <em>always</em>, <em>usually</em>, dan <em>every day</em>, sedangkan kalimat yang sedang berlangsung sering muncul bersama <em>now</em>, <em>at the moment</em>, dan <em>this week</em>.</p>',
            'examples' => [
                ['en' => 'I usually walk to the office, but today I am taking the bus.', 'id' => 'Biasanya saya berjalan kaki ke kantor, tetapi hari ini saya naik bus.'],
                ['en' => 'She is working from home this week.', 'id' => 'Dia sedang bekerja dari rumah minggu ini.'],
                ['en' => 'Look! The children are playing in the garden.', 'id' => 'Lihat! Anak-anak sedang bermain di taman.'],
                ['en' => 'My father checks his email every morning.', 'id' => 'Ayahku memeriksa emailnya setiap pagi.'],
            ],
        ],
        [
            'heading' => 'Kata Kerja Stative (Stative Verbs)',
            'body' => '<p>Sebagian kata kerja menggambarkan <strong>kondisi</strong>, bukan tindakan, sehingga biasanya tidak dipakai dalam bentuk continuous. Kelompok ini disebut <em>stative verbs</em>.</p>
<ul>
<li><strong>Kondisi mental:</strong> know, believe, understand, remember, forget, mean</li>
<li><strong>Perasaan:</strong> like, love, hate, want, need, prefer</li>
<li><strong>Kepemilikan:</strong> have, own, belong, contain</li>
<li><strong>Penginderaan:</strong> see, hear, smell, taste, seem</li>
</ul>
<p>Beberapa kata kerja bisa berubah makna. <em>I think you are right</em> (berpendapat) tidak boleh continuous, sedangkan <em>I am thinking about your suggestion</em> (sedang memikirkan) boleh dipakai continuous.</p>',
            'examples' => [
                ['en' => 'I understand the lesson now.', 'id' => 'Saya mengerti pelajaran itu sekarang.'],
                ['en' => 'Do you like this jacket?', 'id' => 'Apakah kamu menyukai jaket ini?'],
                ['en' => 'We own two cars.', 'id' => 'Kami memiliki dua mobil.'],
                ['en' => 'I am thinking about your offer.', 'id' => 'Saya sedang memikirkan tawaranmu.'],
            ],
        ],
        [
            'heading' => 'Tense Waktu Lampau: Simple Past',
            'body' => '<p>Simple past dipakai untuk kejadian yang <strong>selesai pada waktu tertentu di masa lalu</strong>. Kata kerja berubah menjadi bentuk lampau (V2), dan waktu kejadiannya disebutkan dengan keterangan seperti <em>yesterday</em>, <em>last week</em>, <em>two days ago</em>, atau <em>in 2019</em>.</p>
<table>
<thead><tr><th>Aspek</th><th>Rumus</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Pernyataan</td><td>S + V2</td><td>We visited Bogor last weekend.</td></tr>
<tr><td>Negasi</td><td>S + did not + V1</td><td>She did not come to the meeting.</td></tr>
<tr><td>Pertanyaan</td><td>Did + S + V1?</td><td>Did you finish your homework?</td></tr>
</tbody>
</table>
<p>Banyak kata kerja tidak beraturan yang bentuk lampaunya berubah total, misalnya <em>go &rarr; went</em>, <em>take &rarr; took</em>, <em>buy &rarr; bought</em>, <em>write &rarr; wrote</em>, dan <em>see &rarr; saw</em>. Setelah <em>did</em> atau <em>didn&rsquo;t</em>, kata kerja selalu kembali ke bentuk dasar.</p>',
            'examples' => [
                ['en' => 'We visited Yogyakarta last December.', 'id' => 'Kami mengunjungi Yogyakarta Desember lalu.'],
                ['en' => 'She didn\'t bring her laptop yesterday.', 'id' => 'Dia tidak membawa laptopnya kemarin.'],
                ['en' => 'Did you finish the report last night?', 'id' => 'Apakah kamu menyelesaikan laporan itu tadi malam?'],
                ['en' => 'When I was a child, I played tennis every summer.', 'id' => 'Waktu masih kecil, saya bermain tenis setiap musim panas.'],
            ],
        ],
        [
            'heading' => 'Tense Waktu Depan: Tiga Bentuk Utama',
            'body' => '<p>Bentuk masa depan bahasa Inggris tidak memakai satu bentuk saja. Pemilihannya tergantung pada <strong>niat, bukti yang terlihat, dan tingkat keteraturan</strong> kejadian.</p>
<table>
<thead><tr><th>Bentuk</th><th>Utamanya dipakai untuk</th></tr></thead>
<tbody>
<tr><td>will + V1</td><td>Keputusan saat berbicara, prediksi umum, janji, dan penawaran</td></tr>
<tr><td>be going to + V1</td><td>Rencana yang sudah dipikirkan dan prediksi berdasarkan bukti sekarang</td></tr>
<tr><td>present continuous</td><td>Jadwal atau perjanjian yang sudah diatur</td></tr>
</tbody>
</table>
<p>Penjelasan lengkap beserta <em>future continuous</em> dibahas pada modul <strong>Future Forms</strong>.</p>',
            'examples' => [
                ['en' => 'Don\'t worry — I will call you tonight.', 'id' => 'Jangan khawatir — saya akan meneleponmu malam ini.'],
                ['en' => 'We are going to paint the house next month.', 'id' => 'Kami berencana mengecat rumah bulan depan.'],
                ['en' => 'I\'m meeting the client at 3 p.m.', 'id' => 'Saya akan bertemu klien pukul 15.00.'],
                ['en' => 'Aren\'t you going to apply for the scholarship?', 'id' => 'Bukankah kamu berencana melamar beasiswa itu?'],
            ],
        ],
        [
            'heading' => 'Kata Kunci Waktu (Time Expressions)',
            'body' => '<p>Kata kunci waktu adalah petunjuk tercepat untuk menentukan tense yang tepat.</p>
<table>
<thead><tr><th>Konteks</th><th>Kata kunci yang lazim</th></tr></thead>
<tbody>
<tr><td>Kebiasaan</td><td>always, usually, every day, on Fridays, twice a week</td></tr>
<tr><td>Sedang berlangsung</td><td>now, right now, at the moment, this week, currently</td></tr>
<tr><td>Masa lampau</td><td>yesterday, last night, two days ago, in 2020</td></tr>
<tr><td>Masa depan</td><td>tomorrow, next month, in three days, tonight, soon</td></tr>
</tbody>
</table>
<p>Jadwal resmi seperti jadwal kereta atau kuliah tetap memakai <strong>simple present</strong> meskipun waktunya di masa depan: <em>The train leaves at 6.15 tomorrow morning</em>.</p>',
            'examples' => [
                ['en' => 'I usually wake up at six o\'clock.', 'id' => 'Biasanya saya bangun pukul enam.'],
                ['en' => 'She moved to Bandung two years ago.', 'id' => 'Dia pindah ke Bandung dua tahun yang lalu.'],
                ['en' => 'The train leaves at 6.15 tomorrow morning.', 'id' => 'Kereta berangkat pukul 06.15 besok pagi.'],
                ['en' => 'We are having dinner with the client tonight.', 'id' => 'Malam ini kami akan makan malam bersama klien.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'usually', 'phonetic' => '/ˈjuːʒuəli/', 'meaning' => 'biasanya', 'example' => 'I usually have breakfast at seven.'],
        ['word' => 'currently', 'phonetic' => '/ˈkʌrəntli/', 'meaning' => 'saat ini', 'example' => 'She is currently studying in Melbourne.'],
        ['word' => 'frequently', 'phonetic' => '/ˈfriːkwəntli/', 'meaning' => 'sering kali', 'example' => 'We frequently meet after work.'],
        ['word' => 'rarely', 'phonetic' => '/ˈreəli/', 'meaning' => 'jarang', 'example' => 'He rarely complains about anything.'],
        ['word' => 'ago', 'phonetic' => '/əˈɡəʊ/', 'meaning' => 'yang lalu', 'example' => 'I saw her two days ago.'],
        ['word' => 'recently', 'phonetic' => '/ˈriːsntli/', 'meaning' => 'baru-baru ini', 'example' => 'I haven\'t seen him recently.'],
        ['word' => 'notice', 'phonetic' => '/ˈnəʊtɪs/', 'meaning' => 'memperhatikan; menyadari', 'example' => 'Did you notice the change?'],
        ['word' => 'believe', 'phonetic' => '/bɪˈliːv/', 'meaning' => 'percaya', 'example' => 'I believe she is right.'],
        ['word' => 'improve', 'phonetic' => '/ɪmˈpruːv/', 'meaning' => 'memperbaiki; meningkat', 'example' => 'Reading improves your vocabulary.'],
        ['word' => 'schedule', 'phonetic' => '/ˈʃedjuːl/', 'meaning' => 'jadwal', 'example' => 'My schedule is full on Monday.'],
        ['word' => 'seem', 'phonetic' => '/siːm/', 'meaning' => 'tampaknya', 'example' => 'He seems tired today.'],
        ['word' => 'depend', 'phonetic' => '/dɪˈpend/', 'meaning' => 'bergantung', 'example' => 'It depends on the weather.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih tense yang tepat: <strong>&ldquo;Water ___ at 100 degrees Celsius.&rdquo;</strong>',
            'options' => ['boils', 'is boiling', 'boiled', 'was boiling'],
            'answer' => 0,
            'explanation' => 'Kalimat berisi fakta umum yang selalu benar, sehingga menggunakan simple present. Subjek tunggal <em>water</em> menambahkan <em>-s</em>, sehingga menjadi <em>boils</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Right now, I ___ an important email to our partner in Sydney.',
            'options' => ['write', 'wrote', 'am writing', 'have written'],
            'answer' => 2,
            'explanation' => '<em>Right now</em> menunjukkan kejadian yang sedang berlangsung, sehingga cocok dengan present continuous: <em>am writing</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Yesterday I ___ my keys at the office, so I could not open the door.',
            'options' => ['lose', 'lost', 'have lost', 'am losing'],
            'answer' => 1,
            'explanation' => '<em>Yesterday</em> adalah waktu lampau yang spesifik dan sudah selesai, sehingga wajib memakai simple past <em>lost</em>. Present perfect (<em>have lost</em>) tidak dipakai bersama keterangan waktu lampau.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Manakah kalimat yang menggunakan kata kerja dengan benar?',
            'options' => [
                'I am knowing the answer to that question.',
                'I know the answer to that question.',
                'I am knowing my classmates very well.',
                'I know this answer since Monday.',
            ],
            'answer' => 1,
            'explanation' => '<em>Know</em> adalah stative verb (kondisi, bukan tindakan), sehingga tidak dipakai dalam bentuk continuous. Pilihan D juga salah karena <em>since Monday</em> menuntut present perfect: <em>I have known this answer since Monday</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'A: The phone is ringing! B: Don&rsquo;t worry, I ___ it.',
            'options' => ['will answer', 'answered', 'have answered', 'was answering'],
            'answer' => 0,
            'explanation' => 'Jawaban B diambil saat itu juga ketika telepon berdering, sehingga memakai keputusan spontan: <em>will</em> + kata kerja dasar.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk yang tepat: <strong>My sister ___ (go) to work by train every day.</strong>',
            'answer' => 'goes',
            'accepted' => ['goes'],
            'explanation' => 'Kebiasaan rutin memakai simple present. Subjek tunggal <em>my sister</em> menambahkan <em>-s</em>, sehingga jawabannya <em>goes</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk lampau: <strong>Yesterday we ___ (meet) the new manager.</strong>',
            'answer' => 'met',
            'accepted' => ['met'],
            'explanation' => '<em>Meet</em> adalah kata kerja tidak beraturan dengan bentuk lampau <em>met</em>. Karena waktunya <em>yesterday</em>, jawabannya adalah <em>met</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat: <strong>Look! The baby ___ (sleep). Please keep your voice down.</strong>',
            'answer' => 'is sleeping',
            'accepted' => ['is sleeping'],
            'explanation' => '<em>Look!</em> menunjukkan kejadian yang sedang terjadi di depan mata, sehingga dipakai present continuous: <em>is sleeping</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi pembuka email formal berikut: <strong>&ldquo;Dear Ms. Alvarez, I ___ (write) to ask about the schedule for next week.&rdquo;</strong>',
            'answer' => 'am writing',
            'accepted' => ['am writing', 'i am writing'],
            'explanation' => 'Saat menulis email, kita menyebut kegiatan yang sedang berlangsung sekarang, sehingga present continuous <em>am writing</em> adalah bentuk pembuka yang lazim.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;I am meeting the director at 6 p.m. tonight&rdquo; benar karena present continuous bisa dipakai untuk perjanjian yang sudah diatur di masa depan.',
            'answer' => true,
            'explanation' => 'Benar. Present continuous sering dipakai untuk jadwal atau perjanjian yang sudah disepakati, terutama bila disertai waktu yang jelas seperti <em>at 6 p.m. tonight</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;I am believing that you are right&rdquo; sudah benar karena kejadiannya sedang berlangsung.',
            'answer' => false,
            'explanation' => 'Salah. <em>Believe</em> adalah stative verb sehingga tidak dipakai dalam bentuk continuous. Bentuk yang benar adalah <em>I believe that you are right</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata kunci waktu berikut dengan artinya.',
            'pairs' => [
                ['left' => 'usually', 'right' => 'biasanya'],
                ['left' => 'rarely', 'right' => 'jarang'],
                ['left' => 'ago', 'right' => 'yang lalu'],
                ['left' => 'currently', 'right' => 'saat ini'],
                ['left' => 'frequently', 'right' => 'sering kali'],
            ],
            'explanation' => 'Kata kunci waktu membantu memilih tense: keterangan lampau seperti <em>two days ago</em> menuntut simple past, sedangkan <em>currently</em> menunjukkan situasi sekarang.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'I am meeting my tutor at three this afternoon.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'I am meeting my tutor at three this afternoon.',
                'I met my tutor at three yesterday afternoon.',
                'I meet my tutor at three every afternoon.',
                'I will meet my tutor at three tomorrow afternoon.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat yang terdengar memakai present continuous <em>am meeting</em> untuk perjanjian hari ini, bukan <em>met</em> (lampau), <em>meet</em> (kebiasaan), atau <em>will meet</em> (besok).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk membandingkan kebiasaanmu dengan situasi hari ini.',
            'target' => 'I usually take the bus to work, but today I am driving.',
            'hint' => 'Arti: Biasanya saya naik bus ke kantor, tetapi hari ini saya menyetir.',
            'explanation' => 'Kalimat membandingkan kebiasaan (<em>usually take</em>, simple present) dengan situasi sementara hari ini (<em>am driving</em>, present continuous).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Anna usually cycles to work, but this week her bicycle is at the repair shop, so she is taking the bus every day. Yesterday she worked late because a big order had to be sent before six o&rsquo;clock. She finally got home at nine, tired but happy with her work.</p></div><p>Why is Anna taking the bus this week?</p>',
            'options' => [
                'Because her bicycle is being repaired.',
                'Because she wants to save money.',
                'Because she started a new job.',
                'Because her car is at the office.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;her bicycle is at the repair shop&rdquo;</em> berarti sepedanya sedang diperbaiki, sehingga minggu ini ia naik bus.',
        ],
    ],
];
