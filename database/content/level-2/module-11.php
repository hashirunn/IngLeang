<?php

/**
 * Level 2 — Modul 11: Phrasal Verbs
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
    'title' => 'Phrasal Verbs',
    'slug' => 'phrasal-verbs',
    'subtitle' => 'Give up, find out, look after, carry on, dan phrasal verb penting lainnya',
    'summary' => 'Phrasal verbs adalah kata kerja + partikel yang maknanya berubah total. Modul ini melatih makna, penggunaan, dan pemahamannya dalam percakapan sehari-hari.',
    'icon' => '🧩',
    'objectives' => [
        'Memahami konsep phrasal verb dan perubahan makna akibat partikel',
        'Menggunakan phrasal verb umum dalam percakapan sehari-hari',
        'Membedakan phrasal verb separable dan inseparable',
        'Menggunakan phrasal verb secara tepat dalam percakapan dan tulisan',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Phrasal Verbs?',
            'body' => '<p><strong>Phrasal verb</strong> terdiri dari satu <em>kata kerja</em> dan satu <em>partikel</em> (kata depan seperti <em>on, off, after, up</em> atau kata keterangan seperti <em>away, out, along</em>). Ketika digabungkan, keduanya membentuk <strong>makna baru</strong> yang sering berbeda dari arti kata kerja aslinya.</p>
<ul>
<li><strong>look</strong> (melihat) + <strong>after</strong> = merawat</li>
<li><strong>give</strong> (memberi) + <strong>up</strong> = menyerah / berhenti mencoba</li>
<li><strong>find</strong> (menemukan) + <strong>out</strong> = mengetahui / mencari tahu</li>
<li><strong>carry</strong> (membawa) + <strong>on</strong> = melanjutkan</li>
</ul>
<p>Sebagian phrasal verb bersifat <em>idiomatik</em>, artinya maknanya tidak bisa ditebak dari arti kata per kata. Karena itu, pelajari phrasal verb sebagai satu kesatuan, bukan kumpulan kata terpisah.</p>',
            'examples' => [
                ['en' => 'I look after my younger brother after school.', 'id' => 'Saya merawat adik laki-lakiku sepulang sekolah.'],
                ['en' => 'She found out that the class was cancelled.', 'id' => 'Dia mengetahui bahwa kelas dibatalkan.'],
                ['en' => 'We ran out of milk this morning.', 'id' => 'Kami kehabisan susu pagi ini.'],
                ['en' => 'Please turn off the lights before you leave.', 'id' => 'Tolong matikan lampu sebelum pergi.'],
            ],
        ],
        [
            'heading' => 'Phrasal Verbs dalam Percakapan Sehari-hari',
            'body' => '<p>Phrasal verb berikut muncul hampir setiap hari dalam percakapan informal maupun formal ringan. Perhatikan konteks pemakaiannya.</p>
<table>
<thead><tr><th>Phrasal Verb</th><th>Arti</th><th>Kalimat Contoh</th></tr></thead>
<tbody>
<tr><td>get up</td><td>bangun dari tempat tidur</td><td>I get up at six every morning.</td></tr>
<tr><td>look for</td><td>mencari</td><td>She is looking for her keys.</td></tr>
<tr><td>look after</td><td>merawat / menjaga</td><td>Who looks after the children?</td></tr>
<tr><td>turn on / turn off</td><td>menyalakan / mematikan</td><td>Please turn off the TV.</td></tr>
<tr><td>pick up</td><td>menjemput / mengangkat</td><td>I will pick you up at seven.</td></tr>
<tr><td>run out of</td><td>kehabisan</td><td>We have run out of sugar.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'I am looking for a new apartment near my office.', 'id' => 'Saya sedang mencari apartemen baru di dekat kantorku.'],
                ['en' => 'Could you pick up some bread on your way home?', 'id' => 'Bisakah kamu membeli sedikit roti di jalan pulang?'],
                ['en' => 'My phone ran out of battery before the call ended.', 'id' => 'Ponselku kehabisan daya sebelum panggilan selesai.'],
            ],
        ],
        [
            'heading' => 'Phrasal Verbs di Tempat Kerja dan Sekolah',
            'body' => '<p>Di lingkungan kerja dan sekolah, phrasal verb dipakai untuk membicarakan tugas, proyek, dan aktivitas tim.</p>
<ul>
<li><strong>give up</strong> = berhenti mencoba, menyerah: <em>Don&rsquo;t give up; try again.</em></li>
<li><strong>carry on</strong> = melanjutkan: <em>Carry on with your work, please.</em></li>
<li><strong>hand in</strong> = menyerahkan (tugas/laporan): <em>Hand in the report by Friday.</em></li>
<li><strong>go over</strong> = meninjau ulang, mengulang: <em>Let&rsquo;s go over the answers together.</em></li>
<li><strong>come up with</strong> = memikirkan (ide/solusi): <em>She came up with a clever plan.</em></li>
<li><strong>point out</strong> = menunjukkan / menyoroti: <em>He pointed out two mistakes in my essay.</em></li>
<li><strong>find out</strong> = mengetahui informasi: <em>I need to find out the exam schedule.</em></li>
<li><strong>call off</strong> = membatalkan: <em>They called off the meeting.</em></li>
</ul>',
            'examples' => [
                ['en' => 'The team came up with a great idea during the meeting.', 'id' => 'Tim itu memikirkan ide bagus saat rapat.'],
                ['en' => 'Please hand in your assignment before Thursday.', 'id' => 'Tolong serahkan tugasmu sebelum hari Kamis.'],
                ['en' => 'My laptop broke down in the middle of the presentation.', 'id' => 'Laptopku rusak di tengah presentasi.'],
            ],
        ],
        [
            'heading' => 'Phrasal Verb Separable dan Inseparable',
            'body' => '<p><strong>Separable</strong>: objek dapat diletakkan di <em>antara</em> kata kerja dan partikel, atau sesudahnya. Kata ganti (me/her/us/it) <strong>harus</strong> diletakkan di tengah.</p>
<table>
<thead><tr><th>Benar</th><th>Salah</th></tr></thead>
<tbody>
<tr><td>turn off the TV / turn the TV off / turn it off</td><td>turn off it</td></tr>
<tr><td>call off the meeting / call it off</td><td>call off it</td></tr>
<tr><td>hand in the report / hand it in</td><td>hand in it</td></tr>
</tbody>
</table>
<p><strong>Inseparable</strong>: objek harus diletakkan <em>sesudah</em> seluruh phrasal verb, tidak boleh di tengah.</p>
<table>
<thead><tr><th>Benar</th><th>Salah</th></tr></thead>
<tbody>
<tr><td>look after my sister / look after her</td><td>look her after</td></tr>
<tr><td>run out of milk</td><td>run milk out of</td></tr>
<tr><td>look forward to the trip / look forward to it</td><td>look it forward to</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'Please turn the computer off before you leave. / Please turn it off.', 'id' => 'Tolong matikan komputer sebelum pergi. / Tolong matikan itu.'],
                ['en' => 'My aunt looks after her two nephews every weekend.', 'id' => 'Budeku merawat dua keponakannya setiap akhir pekan.'],
            ],
        ],
        [
            'heading' => 'Tips Belajar Phrasal Verbs',
            'body' => '<p>Karena banyak phrasal verb memiliki <strong>lebih dari satu makna</strong>, selalu perhatikan konteks kalimatnya.</p>
<ul>
<li><strong>take off</strong>: pesawat lepas landas (<em>The plane took off late</em>) <em>atau</em> melepaskan pakaian (<em>She took off her coat</em>).</li>
<li><strong>get up</strong> = bangun tidur, sedangkan <strong>get over</strong> = pulih dari (penyakit/kesedihan).</li>
<li>Belajar dalam <strong>kelompok tema</strong> (kerja, sekolah, perjalanan) dan catat contoh kalimatnya.</li>
<li>Dengarkan penutur asli: phrasal verb paling sering muncul dalam percakapan informal.</li>
</ul>',
            'examples' => [
                ['en' => 'It took me two weeks to get over the flu.', 'id' => 'Butuh dua bagiku untuk pulih dari flu.'],
                ['en' => 'The flight to Tokyo takes off at nine in the evening.', 'id' => 'Penerbangan ke Tokyo lepas landas pukul sembilan malam.'],
                ['en' => 'After the storm, the power came back on at midnight.', 'id' => 'Setelah badai, listrik menyala kembali tengah malam.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'give up', 'phonetic' => '/ˌɡɪv ˈʌp/', 'meaning' => 'menyerah / berhenti mencoba', 'example' => 'Never give up on your dreams.'],
        ['word' => 'find out', 'phonetic' => '/ˌfaɪnd ˈaʊt/', 'meaning' => 'mengetahui / mencari tahu', 'example' => 'I need to find out the truth.'],
        ['word' => 'look after', 'phonetic' => '/ˌlʊk ˈɑːftər/', 'meaning' => 'merawat / menjaga', 'example' => 'She looks after her elderly parents.'],
        ['word' => 'carry on', 'phonetic' => '/ˌkæri ˈɒn/', 'meaning' => 'melanjutkan', 'example' => 'Please carry on with your story.'],
        ['word' => 'look forward to', 'phonetic' => '/ˌlʊk ˈfɔːwəd tuː/', 'meaning' => 'menantikan dengan senang hati', 'example' => 'I look forward to seeing you soon.'],
        ['word' => 'run out of', 'phonetic' => '/ˌrʌn ˈaʊt əv/', 'meaning' => 'kehabisan', 'example' => 'We have run out of paper.'],
        ['word' => 'put off', 'phonetic' => '/ˌpʊt ˈɒf/', 'meaning' => 'menunda', 'example' => 'Do not put off your homework.'],
        ['word' => 'call off', 'phonetic' => '/ˌkɔːl ˈɒf/', 'meaning' => 'membatalkan', 'example' => 'They called off the picnic.'],
        ['word' => 'come up with', 'phonetic' => '/ˌkʌm ˈʌp wɪð/', 'meaning' => 'memikirkan (ide/solusi)', 'example' => 'She came up with a smart answer.'],
        ['word' => 'get along with', 'phonetic' => '/ˌɡet əˈlɒŋ wɪð/', 'meaning' => 'berhubungan baik dengan', 'example' => 'I get along with my classmates.'],
        ['word' => 'break down', 'phonetic' => '/ˌbreɪk ˈdaʊn/', 'meaning' => 'mengalami kerusakan', 'example' => 'My car broke down on the highway.'],
        ['word' => 'hand in', 'phonetic' => '/ˌhænd ˈɪn/', 'meaning' => 'menyerahkan (tugas/laporan)', 'example' => 'Hand in your form at the office.'],
        ['word' => 'go over', 'phonetic' => '/ˌɡəʊ ˈəʊvər/', 'meaning' => 'meninjau ulang / mengulang', 'example' => 'Let us go over the lesson once more.'],
        ['word' => 'point out', 'phonetic' => '/ˌpɔɪnt ˈaʊt/', 'meaning' => 'menunjukkan / menyoroti', 'example' => 'He pointed out an error in the plan.'],
        ['word' => 'pick up', 'phonetic' => '/ˌpɪk ˈʌp/', 'meaning' => 'menjemput / mengambil', 'example' => 'I will pick you up at the station.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Andi tetap berusaha walaupun gagal berkali-kali. Dalam kalimat &ldquo;Andi never <strong>gives up</strong>&rdquo;, arti <em>gives up</em> adalah&hellip;',
            'options' => ['menyerah / berhenti mencoba', 'berlari cepat', 'mencari sesuatu', 'merawat seseorang'],
            'answer' => 0,
            'explanation' => '<em>Give up</em> berarti berhenti mencoba atau menyerah. Kalimatnya: Andi tidak pernah menyerah.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;I have agreed to ___ my neighbour&rsquo;s dog while she is on holiday, so I have to feed it and take it for walks.&rdquo;',
            'options' => ['look after', 'look for', 'look up', 'look into'],
            'answer' => 0,
            'explanation' => 'Konteks &ldquo;memberi makan dan membawa jalan-jalan&rdquo; menunjukkan aktivitas <strong>merawat</strong>, yaitu <em>look after</em>. <em>Look for</em> berarti mencari, bukan merawat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '&ldquo;My laptop stopped working last night. It has broken ___.&rdquo;',
            'options' => ['down', 'off', 'up', 'out'],
            'answer' => 0,
            'explanation' => 'Kolokasi yang tepat adalah <em>break down</em> untuk mesin/peralatan yang rusak atau berhenti bekerja.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;The manager is ill, so we have to ___ the meeting until Friday.&rdquo;',
            'options' => ['call off', 'call for', 'call in', 'call on'],
            'answer' => 0,
            'explanation' => '<em>Call off</em> berarti membatalkan sesuatu yang sudah dijadwalkan. <em>Call for</em> berarti menuntut, <em>call on</em> berarti meminta seseorang bicara.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '&ldquo;After hours of discussion, the team finally ___ a solution that everyone agreed on.&rdquo;',
            'options' => ['came up with', 'came across', 'came into', 'came along'],
            'answer' => 0,
            'explanation' => '<em>Come up with</em> berarti memikirkan atau menghasilkan (ide, solusi). <em>Come across</em> berarti menemukan secara kebetulan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;My new classmates are very friendly. I ___ with them very well.&rdquo;',
            'options' => ['get along', 'get up', 'get over', 'get off'],
            'answer' => 0,
            'explanation' => '<em>Get along with someone</em> berarti berhubungan baik dengan seseorang. <em>Get over</em> berarti pulih dari sesuatu.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'We have ___ all the milk, so I need to buy some more.',
            'answer' => 'run out of',
            'accepted' => ['run out of', 'ran out of'],
            'explanation' => '<em>Run out of something</em> berarti kehabisan sesuatu. Dengan <em>have</em>, gunakan bentuk past participle: <em>have run out of</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'She was very tired, so she decided to ___ the meeting until the next day.',
            'answer' => 'put',
            'accepted' => ['put'],
            'explanation' => 'Phrasal verb yang tepat adalah <em>put off</em> (menunda). Jadi kalimatnya: <em>she decided to put the meeting off / put off the meeting</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My grandfather usually ___ up at five o&rsquo;clock every morning.',
            'answer' => 'gets',
            'accepted' => ['gets', 'get'],
            'explanation' => 'Subjek <em>my grandfather</em> (orang ketiga tunggal) pada simple present memakai verb + <em>-s</em>: <em>gets up</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam kalimat &ldquo;You can <strong>look the word up</strong> in a dictionary&rdquo;, arti <em>look up</em> adalah mencari informasi di sebuah sumber.',
            'answer' => true,
            'explanation' => '<em>Look something up</em> berarti mencari informasi tentang sesuatu di kamus, ensiklopedia, atau internet.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Phrasal verb <em>look after</em> bersifat inseparable, sehingga kalimat &ldquo;I look her after&rdquo; adalah benar.',
            'answer' => false,
            'explanation' => '<em>Look after</em> adalah inseparable phrasal verb, jadi objek harus diletakkan sesudahnya: <em>I look after her</em>, bukan <em>I look her after</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan phrasal verb dengan artinya.',
            'pairs' => [
                ['left' => 'give up', 'right' => 'menyerah / berhenti mencoba'],
                ['left' => 'look after', 'right' => 'merawat / menjaga'],
                ['left' => 'find out', 'right' => 'mengetahui / mencari tahu'],
                ['left' => 'carry on', 'right' => 'melanjutkan'],
                ['left' => 'run out of', 'right' => 'kehabisan'],
            ],
            'explanation' => 'Phrasal verb dipahami sebagai satu kesatuan; artinya tidak selalu bisa ditebak dari kata per kata.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'I need to find out when the train leaves.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'I need to find out when the train leaves.',
                'I need to find out when the plane leaves.',
                'I need to give up when the train leaves.',
                'I need to find out when the train arrives.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat yang terdengar adalah <em>I need to find out when the train leaves</em> (Saya perlu mengetahui jam keberangkatan kereta).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'We have run out of milk.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;We have run ___ of milk.&rdquo;',
            'answer' => 'out',
            'accepted' => ['out'],
            'explanation' => 'Kalimat yang terdengar: <em>We have run out of milk</em> (Kami kehabisan susu).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Saat harus menutup telepon dengan sopan, ucapkan kalimat berikut.',
            'target' => 'Sorry, I have to run now. I will call you back later.',
            'hint' => 'Arti: Maaf, saya harus pergi sekarang. Saya akan meneleponmu kembali nanti.',
            'explanation' => '<em>I have to run</em> adalah ungkapan informal untuk &ldquo;saya harus pergi&rdquo;, dan <em>call you back</em> berarti menelepon kembali.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Every morning, Ben wakes up at six and gets up quickly because the bus leaves at seven. Before he leaves, he looks after his little sister for ten minutes. At school, he never gives up when a task is difficult; instead, he asks his teacher for help. Last week, his class found out that they had won the football tournament, and everyone celebrated together.</p></div><p>Apa yang dilakukan Ben sebelum berangkat ke sekolah?</p>',
            'options' => ['Dia menjaga adiknya selama sepuluh menit.', 'Dia bermain sepak bola bersama teman-temannya.', 'Dia menyerah saat tugas sulit.', 'Dia menunggu bus sampai pukul tujuh di rumah.'],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;Before he leaves, he looks after his little sister for ten minutes&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
    ],
];
