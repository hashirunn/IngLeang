<?php

/**
 * Level 2 — Modul 15: Listening
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
    'title' => 'Listening',
    'slug' => 'listening',
    'subtitle' => 'Memahami percakapan alami, wawancara, dan video bertema umum',
    'summary' => 'Melatih keterampilan mendengarkan melalui percakapan sehari-hari, wawancara, pengumuman, dan presentasi, serta strategi menangkap kata kunci dan ide utama.',
    'icon' => '🎧',
    'objectives' => [
        'Menangkap ide utama dari percakapan dan pengumuman sederhana',
        'Mengidentifikasi detail penting seperti waktu, tempat, dan tujuan',
        'Mengikuti alur wawancara dan presentasi dengan kata penghubung',
        'Menggunakan strategi listening seperti menebak makna dari konteks',
    ],
    'sections' => [
        [
            'heading' => 'Strategi Dasar Mendengarkan',
            'body' => '<p>Mendengarkan aktif berbeda dari sekadar &ldquo;mendengar&rdquo;. Terapkan strategi berikut:</p>
<ol>
<li><strong>Perhatikan konteks</strong>: dari situ kamu bisa menebak topik pembicaraan.</li>
<li><strong>Tangkap kata kunci</strong>: nama, angka, waktu, dan tempat.</li>
<li><strong>Jangan berhenti di satu kata</strong>: coba tebak maknanya dari kalimat sekitar.</li>
<li><strong>Dengarkan dua kali</strong>: pertama untuk ide utama, kedua untuk detail.</li>
</ol>',
            'examples' => [
                ['en' => 'When you hear &ldquo;platform four&rdquo;, you are probably at a train station.', 'id' => 'Saat kamu mendengar &ldquo;platform four&rdquo;, kemungkinan kamu berada di stasiun kereta.'],
                ['en' => 'Numbers and times are often the key details in an announcement.', 'id' => 'Angka dan waktu sering kali menjadi detail penting dalam pengumuman.'],
                ['en' => 'Do not panic if you miss one word; keep listening.', 'id' => 'Jangan panik jika kamu melewatkan satu kata; terus mendengarkan.'],
            ],
        ],
        [
            'heading' => 'Percakapan Alami Sehari-hari',
            'body' => '<p>Dalam percakapan informal, penutur asli sering menyederhanakan kata, misalnya <em>going to &rarr; gonna</em> atau <em>want to &rarr; wanna</em>. Kamu tidak perlu memakainya, tetapi sebaiknya mengenalinya.</p>
<ul>
<li><strong>Hi, how&rsquo;s it going?</strong> &mdash; Halo, apa kabar?</li>
<li><strong>Catch you later!</strong> &mdash; Sampai nanti!</li>
<li><strong>Let me grab a seat.</strong> &mdash; Biarkan aku mengambil kursi.</li>
<li><strong>It is on me.</strong> &mdash; Ini (traktiranku)/Aku yang bayar.</li>
</ul>',
            'examples' => [
                ['en' => 'A: Hey, how is it going? B: Pretty good, thanks!', 'id' => 'A: Hei, apa kabar? B: Cukup baik, terima kasih!'],
                ['en' => 'Do you want to grab a coffee later?', 'id' => 'Mau ngopi nanti?'],
                ['en' => 'Sorry, I did not catch that. Could you say it again?', 'id' => 'Maaf, saya tidak tangkap. Bisa diulangi?'],
            ],
        ],
        [
            'heading' => 'Memahami Wawancara (Interviews)',
            'body' => '<p>Dalam wawancara, pembicara kedua biasanya bertanya tentang <strong>pengalaman, alasan, dan pendapat</strong>. Perhatikan ungkapan khas pewawancara:</p>
<table>
<thead><tr><th>Ungkapan Pewawancara</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>Tell me about yourself.</td><td>Ceritakan tentang dirimu.</td></tr>
<tr><td>What do you enjoy most about your job?</td><td>Apa yang paling kamu sukai dari pekerjaanmu?</td></tr>
<tr><td>Why did you decide to join us?</td><td>Mengapa kamu memutuskan bergabung dengan kami?</td></tr>
<tr><td>Could you give me an example?</td><td>Bisakah memberi contoh?</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'I enjoy helping people, so I work as a nurse.', 'id' => 'Saya senang membantu orang, jadi saya bekerja sebagai perawat.'],
                ['en' => 'The most rewarding part is seeing patients recover.', 'id' => 'Bagian paling memuaskan adalah melihat pasien sembuh.'],
            ],
        ],
        [
            'heading' => 'Memahami Video dan Presentasi',
            'body' => '<p>Pembicara dalam video atau presentasi biasanya menandai struktur ucapan mereka. Kata penghubung ini menjadi petunjuk (signposting) yang membantumu mengikuti alur.</p>
<ul>
<li><strong>First of all&hellip;</strong> &mdash; Pertama-tama&hellip; (memulai topik)</li>
<li><strong>Moving on to the next point&hellip;</strong> &mdash; Menuju poin berikutnya&hellip;</li>
<li><strong>Another thing to consider is&hellip;</strong> &mdash; Hal lain yang perlu dipertimbangkan&hellip;</li>
<li><strong>To sum up / In conclusion&hellip;</strong> &mdash; Sebagai kesimpulan&hellip;</li>
</ul>
<p>Dalam video pendidikan, penutur juga sering mengulang ide utama dengan kata-kata yang sedikit berbeda (rephrasing).</p>',
            'examples' => [
                ['en' => 'First of all, I would like to talk about screen time.', 'id' => 'Pertama-tama, saya ingin membicarakan waktu layar.'],
                ['en' => 'To sum up, both parents and schools have a role to play.', 'id' => 'Sebagai kesimpulan, orang tua dan sekolah sama-sama berperan.'],
            ],
        ],
        [
            'heading' => 'Latihan dan Kebiasaan Baik',
            'body' => '<p>Kemampuan mendengarkan meningkat dengan latihan yang rutin dan terarah.</p>
<ul>
<li><strong>Shadowing</strong>: ucapkan ulang kalimat tepat setelah penutur, menirukan intonasi.</li>
<li>Dengarkan konten pendek (berita singkat, trailer film, podcast pemula) setiap hari.</li>
<li>Catat kata baru yang kamu dengar, lalu praktikkan dalam kalimat.</li>
<li>Jangan langsung menyalakan subtitle bahasa Indonesia; coba subtitle bahasa Inggris lebih dulu.</li>
</ul>',
            'examples' => [
                ['en' => 'I listen to a short podcast on my way to school every day.', 'id' => 'Saya mendengarkan podcast pendek setiap perjalanan ke sekolah.'],
                ['en' => 'Shadowing helps me pronounce words more naturally.', 'id' => 'Latihan shadowing membantuku mengucapkan kata secara lebih alami.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'announcement', 'phonetic' => '/əˈnaʊnsmənt/', 'meaning' => 'pengumuman', 'example' => 'Listen to the announcement at the station.'],
        ['word' => 'platform', 'phonetic' => '/ˈplætfɔːrm/', 'meaning' => 'peron (stasiun)', 'example' => 'The train leaves from platform four.'],
        ['word' => 'delay', 'phonetic' => '/dɪˈleɪ/', 'meaning' => 'penundaan / keterlambatan', 'example' => 'We apologise for the delay.'],
        ['word' => 'interview', 'phonetic' => '/ˈɪntərvjuː/', 'meaning' => 'wawancara', 'example' => 'She had a job interview yesterday.'],
        ['word' => 'catch (up)', 'phonetic' => '/kætʃ/', 'meaning' => 'menangkap / memahami (kata yang terdengar)', 'example' => 'Sorry, I did not catch that.'],
        ['word' => 'main idea', 'phonetic' => '/meɪn aɪˈdɪə/', 'meaning' => 'ide utama', 'example' => 'Listen first for the main idea.'],
        ['word' => 'subtitle', 'phonetic' => '/ˈsʌbtaɪtl/', 'meaning' => 'tulisan layar / terjemahan teks', 'example' => 'I watched the film with English subtitles.'],
        ['word' => 'accent', 'phonetic' => '/ˈæksent/', 'meaning' => 'aksen', 'example' => 'He speaks with a British accent.'],
        ['word' => 'sum up', 'phonetic' => '/ˌsʌm ˈʌp/', 'meaning' => 'merangkum / menyimpulkan', 'example' => 'To sum up, the plan needs more time.'],
        ['word' => 'take notes', 'phonetic' => '/teɪk nəʊts/', 'meaning' => 'mencatat', 'example' => 'I took notes while listening.'],
        ['word' => 'rehearse', 'phonetic' => '/rɪˈhɜːrs/', 'meaning' => 'berlatih / gladi resik', 'example' => 'She rehearsed the speech twice.'],
        ['word' => 'key detail', 'phonetic' => '/kiː ˈdiːteɪl/', 'meaning' => 'detail penting', 'example' => 'Write down the key details.'],
        ['word' => 'natural speed', 'phonetic' => '/ˈnætʃrəl spiːd/', 'meaning' => 'kecepatan bicara normal', 'example' => 'The speaker talks at a natural speed.'],
        ['word' => 'figure out', 'phonetic' => '/ˈfɪɡər aʊt/', 'meaning' => 'menemukan jawaban / memahami', 'example' => 'I finally figured out what he meant.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Good morning, passengers. The train to Manchester will leave from platform four at three fifteen. We apologise for the short delay.',
            'prompt' => 'Dengarkan pengumuman berikut. Kapan dan dari mana kereta ke Manchester berangkat?',
            'options' => [
                'Pukul 3.15 dari peron empat.',
                'Pukul 3.50 dari peron empat.',
                'Pukul 3.15 dari peron tiga.',
                'Pukul 5.30 dari peron empat.',
            ],
            'answer' => 0,
            'explanation' => 'Pengumuman menyebut <em>platform four at three fifteen</em>, artinya berangkat pukul 3.15 dari peron empat.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'The library closes at half past six on weekdays.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi waktu penutupan: &ldquo;The library closes at half past ___ on weekdays.&rdquo;',
            'answer' => 'six',
            'accepted' => ['six', '6'],
            'explanation' => 'Yang terdengar adalah <em>half past six</em>, artinya pukul setengah tujuh atau 6.30.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Waiter: Good afternoon. What would you like? Customer: Could I have a cup of tea with milk and a cheese sandwich, please? Waiter: Anything else? Customer: No, thank you. That is all.',
            'prompt' => 'Dengarkan percakapan di kafe. Apa yang dipesan pelanggan?',
            'options' => [
                'Secangkir teh dengan susu dan sandwich keju.',
                'Secangkir kopi dengan susu dan sandwich daging.',
                'Segelas air dan salad.',
                'Teh tanpa susu dan sandwich keju.',
            ],
            'answer' => 0,
            'explanation' => 'Pelanggan memesan <em>a cup of tea with milk and a cheese sandwich</em>, yaitu teh dengan susu dan sandwich keju.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Interviewer: What do you enjoy most about your job? Interviewee: I think it is helping people. I work in a small clinic, and every day I meet different patients. The salary is not very high, but the work is meaningful.',
            'prompt' => 'Dengarkan wawancara berikut. Apa yang paling disukai pewawancara dari pekerjaannya?',
            'options' => [
                'Membantu orang lain.',
                'Gajinya yang tinggi.',
                'Jam kerjanya yang singkat.',
                'Lokasi kliniknya yang besar.',
            ],
            'answer' => 0,
            'explanation' => 'Jawabannya: <em>I think it is helping people</em>, artinya membantu orang lain. Gaji justru disebut tidak tinggi.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'First of all, I would like to talk about screen time. Moving on to the second point, parents should set a good example.',
            'prompt' => 'Dengarkan presentasi berikut, lalu lengkapi kata yang hilang: &ldquo;Moving on to the second ___.&rdquo;',
            'answer' => 'point',
            'accepted' => ['point'],
            'explanation' => 'Kalimat yang terdengar adalah <em>Moving on to the second point</em>, penanda perpindahan ke poin kedua.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'In this video, we look at how public transport in small towns has changed. Ten years ago, most people drove to work, but now many of them take the bus because fuel prices have gone up. Some towns have also added new cycle paths.',
            'prompt' => 'Dengarkan video berikut. Mengapa banyak orang sekarang naik bus?',
            'options' => [
                'Karena harga bahan bakar naik.',
                'Karena bus selalu lebih cepat daripada mobil.',
                'Karena semua mobil mereka rusak.',
                'Karena kota menjadi lebih kecil.',
            ],
            'answer' => 0,
            'explanation' => 'Penyebab yang disebutkan adalah <em>because fuel prices have gone up</em>, artinya harga bahan bakar meningkat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Attention, please. Flight GA two one four to Sydney is now boarding at gate seven. Passengers are kindly asked to show their boarding passes at the gate.',
            'prompt' => 'Dengarkan pengumuman bandara berikut. Pintu mana yang digunakan penerbangan ke Sydney?',
            'options' => ['Gerbang tujuh.', 'Gerbang dua.', 'Gerbang empat belas.', 'Gerbang sembilan.'],
            'answer' => 0,
            'explanation' => 'Pengumuman menyebut <em>now boarding at gate seven</em>, jadi penerbangan menggunakan gerbang tujuh.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam konteks pengumuman, kata <em>&ldquo;delay&rdquo;</em> berarti&hellip;',
            'options' => ['keterlambatan', 'keberangkatan', 'pembatalan', 'pengumuman'],
            'answer' => 0,
            'explanation' => '<em>Delay</em> berarti keterlambatan. Ungkapan umum: <em>We apologise for the delay</em> (Kami memohon maaf atas keterlambatan).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'The museum is closed on Mondays, but it opens at nine in the morning on other days.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi hari libur museum: &ldquo;The museum is closed on ___.&rdquo;',
            'answer' => 'Mondays',
            'accepted' => ['mondays', 'monday', 'mondays.', 'monday.'],
            'explanation' => 'Yang terdengar adalah <em>closed on Mondays</em> (ditutup pada hari Senin). Jawaban tidak membedakan huruf besar/kecil.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'listening',
            'prompt' => 'Kata penghubung <em>&ldquo;to sum up&rdquo;</em> biasanya dipakai di akhir presentasi untuk menyimpulkan.',
            'answer' => true,
            'explanation' => '<em>To sum up</em> / <em>In conclusion</em> adalah penanda (signposting) yang dipakai saat penutup menyimpulkan isi presentasi.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'listening',
            'prompt' => 'Saat pertama kali mendengarkan, sebaiknya kamu langsung mencari setiap kata yang tidak dikenal satu per satu.',
            'answer' => false,
            'explanation' => 'Strategi yang tepat adalah mendengarkan untuk ide utama terlebih dulu, lalu detail. Jangan berhenti di satu kata yang tidak dikenal.',
        ],
        [
            'type' => 'matching',
            'skill' => 'listening',
            'prompt' => 'Cocokkan konteks dengan kata yang paling mungkin terdengar di dalamnya.',
            'pairs' => [
                ['left' => 'Stasiun kereta', 'right' => 'platform'],
                ['left' => 'Bandara', 'right' => 'boarding at gate'],
                ['left' => 'Wawancara kerja', 'right' => 'What do you enjoy most about your job?'],
                ['left' => 'Presentasi', 'right' => 'To sum up'],
                ['left' => 'Kafe', 'right' => 'What would you like?'],
            ],
            'explanation' => 'Mengenali konteks membantumu memprediksi kosakata yang akan muncul sebelum mendengarnya.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Kamu tidak mendengar dengan jelas. Ucapkan kalimat sopan berikut.',
            'target' => 'Sorry, could you speak a little more slowly, please?',
            'hint' => 'Arti: Maaf, bisakah berbicara sedikit lebih pelan?',
            'explanation' => 'Saat konteks listening terasa cepat, minta penutur memperlambat dengan sopan menggunakan <em>Could you speak more slowly?</em>',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Minta lawan bicara mengulangi ucapannya dengan kalimat berikut.',
            'target' => 'Could you repeat that, please? I did not quite catch it.',
            'hint' => 'Arti: Bisakah diulangi? Saya tidak begitu menangkapnya.',
            'explanation' => '<em>I did not catch it</em> adalah ungkapan alami untuk menyatakan tidak mendengar atau tidak memahami sesuatu.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Many students find listening the most difficult skill. Experts suggest practising a little every day: listen to short podcasts, watch videos with English subtitles, and repeat useful phrases aloud. It is also helpful to listen twice &mdash; first for the main idea, and then for details. Do not stop at every unknown word; try to guess its meaning from the context.</p></div><p>What do experts suggest doing when you meet an unknown word?</p>',
            'options' => [
                'Try to guess its meaning from the context.',
                'Stop the recording immediately.',
                'Translate every word into your language.',
                'Avoid listening to difficult materials.',
            ],
            'answer' => 0,
            'explanation' => 'Teks menyarankan: <em>Do not stop at every unknown word; try to guess its meaning from the context</em>.',
        ],
    ],
];
