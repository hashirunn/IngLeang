<?php

/**
 * Level 2 — Modul 14: Reading & Writing
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
    'title' => 'Reading & Writing',
    'slug' => 'reading-and-writing',
    'subtitle' => 'Membaca artikel, cerita, dan email formal serta menulisnya kembali',
    'summary' => 'Melatih keterampilan memahami berbagai jenis teks (artikel, cerita, email formal) dan menulis paragraf serta email yang terstruktur dan benar.',
    'icon' => '✍️',
    'objectives' => [
        'Memahami ide utama dan detail dari artikel serta cerita pendek',
        'Menulis email formal dengan struktur dan ungkapan yang tepat',
        'Menulis paragraf opini yang runtut dengan kata penghubung',
        'Menggunakan kosakata dan tanda baca yang benar dalam tulisan',
    ],
    'sections' => [
        [
            'heading' => 'Membaca Artikel (Reading Articles)',
            'body' => '<p>Artikel biasanya menyampaikan gagasan utama di awal paragraf, lalu didukung dengan <strong>detail</strong> dan <strong>contoh</strong>. Saat membaca:</p>
<ul>
<li>Cari <strong>ide utama</strong> (main idea): apa yang ingin disampaikan penulis?</li>
<li>Perhatikan <strong>kata kunci</strong> yang berulang, misalnya <em>students, learning, education</em>.</li>
<li>Jangan terjebak pada satu kata yang tidak dikenal; coba tebak maknanya dari konteks.</li>
</ul>',
            'examples' => [
                ['en' => 'The article explains why teenagers need more sleep.', 'id' => 'Artikel itu menjelaskan mengapa remaja butuh lebih banyak tidur.'],
                ['en' => 'According to the text, exercise improves memory.', 'id' => 'Menurut teks itu, olahraga meningkatkan ingatan.'],
                ['en' => 'The main idea of the first paragraph is about healthy habits.', 'id' => 'Ide utama paragraf pertama adalah tentang kebiasaan sehat.'],
            ],
        ],
        [
            'heading' => 'Membaca Cerita (Reading Stories)',
            'body' => '<p>Cerita memiliki <strong>alur</strong> (plot) yang urut: awal, kejadian, dan penutup. Perhatikan penanda urutan waktu berikut untuk mengikuti jalannya cerita.</p>
<table>
<thead><tr><th>Penanda</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>one day / one afternoon</td><td>pada suatu hari / sore</td></tr>
<tr><td>suddenly</td><td>tiba-tiba</td></tr>
<tr><td>after that</td><td>setelah itu</td></tr>
<tr><td>in the end / finally</td><td>akhirnya</td></tr>
</tbody>
</table>
<p>Cerita umumnya menggunakan <strong>simple past</strong> (<em>walked, found, decided</em>) karena menceritakan kejadian lampau.</p>',
            'examples' => [
                ['en' => 'One day, a farmer found a golden egg in his garden.', 'id' => 'Pada suatu hari, seorang petani menemukan telur emas di kebunnya.'],
                ['en' => 'Suddenly, the sky became very dark.', 'id' => 'Tiba-tiba langit menjadi sangat gelap.'],
                ['en' => 'In the end, they solved the problem together.', 'id' => 'Akhirnya, mereka menyelesaikan masalah itu bersama.'],
            ],
        ],
        [
            'heading' => 'Menulis Email Formal',
            'body' => '<p>Email formal digunakan untuk guru, atasan, klien, atau lembaga. Strukturnya:</p>
<ol>
<li><strong>Salam pembuka</strong>: <em>Dear Mr./Ms. + nama belakang,</em></li>
<li><strong>Tujuan menulis</strong>: <em>I am writing to ask about&hellip;</em></li>
<li><strong>Isi / detail</strong>: sampaikan informasi secara jelas dan singkat.</li>
<li><strong>Penutup</strong>: <em>Thank you for your time.</em> lalu <em>Yours sincerely,</em> + nama.</li>
</ol>
<p>Hindari singkatan informal seperti <em>I&rsquo;m, can&rsquo;t, thanks</em> dalam email formal.</p>',
            'examples' => [
                ['en' => 'Dear Mr. Smith, I am writing to ask about the scholarship programme.', 'id' => 'Bapak Smith yang terhormat, saya menulis untuk menanyakan program beasiswa.'],
                ['en' => 'Could you please send me the required documents?', 'id' => 'Apakah Bapak berkenan mengirimkan dokumen yang diperlukan kepada saya?'],
                ['en' => 'I look forward to hearing from you. Yours sincerely, Andi.', 'id' => 'Saya menantikan balasan Bapak. Hormat saya, Andi.'],
            ],
        ],
        [
            'heading' => 'Menulis Paragraf Opini',
            'body' => '<p>Paragraf opini yang baik memiliki tiga bagian:</p>
<ol>
<li><strong>Kalimat topik</strong>: menyatakan opini utama.</li>
<li><strong>Alasan dan contoh</strong>: mendukung opini dengan <em>because</em>, <em>for example</em>, <em>moreover</em>.</li>
<li><strong>Kalimat penutup</strong>: menyimpulkan kembali opini.</li>
</ol>
<p>Gunakan kata penghubung agar tulisan mengalir: <em>first of all, moreover, however, in conclusion</em>.</p>',
            'examples' => [
                ['en' => 'In my opinion, learning English is very important. First of all, it opens up career opportunities.', 'id' => 'Menurut saya, belajar bahasa Inggris sangat penting. Pertama, hal itu membuka peluang karier.'],
                ['en' => 'Moreover, English allows us to communicate with people from other countries.', 'id' => 'Selain itu, bahasa Inggris memungkinkan kita berkomunikasi dengan orang dari negara lain.'],
                ['en' => 'In conclusion, every student should make an effort to learn English.', 'id' => 'Sebagai kesimpulan, setiap siswa sebaiknya berusaha belajar bahasa Inggris.'],
            ],
        ],
        [
            'heading' => 'Tips Memperbaiki Tulisan (Editing)',
            'body' => '<p>Setelah menulis, selalu periksa kembali hasil tulisanmu. Perhatikan hal berikut:</p>
<ul>
<li><strong>Huruf kapital</strong>: nama diri, hari, bulan, dan awal kalimat (<em>Rina, Monday, July</em>).</li>
<li><strong>Tanda baca</strong>: gunakan koma setelah salam pembuka dan sebelum <em>Yours sincerely</em>.</li>
<li><strong>Kesesuaian gaya</strong>: email formal memakai <em>Dear Mr. Hartono</em>, sedangkan pesan ke teman cukup <em>Hi, Rina</em>.</li>
<li><strong>Ejaan</strong>: periksa kata yang sering tertukar seperti <em>their&ndash;there</em> atau <em>receive&ndash;recieve</em>.</li>
</ul>',
            'examples' => [
                ['en' => 'Incorrect: im writing to ask about the course. Correct: I am writing to ask about the course.', 'id' => 'Salah: im writing to ask about the course. Benar: I am writing to ask about the course.'],
                ['en' => 'Dear Ms. Putri, thank you for your helpful information.', 'id' => 'Ibu Putri yang terhormat, terima kasih atas informasi yang membantu.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'main idea', 'phonetic' => '/meɪn aɪˈdɪə/', 'meaning' => 'gagasan utama', 'example' => 'What is the main idea of the text?'],
        ['word' => 'detail', 'phonetic' => '/ˈdiːteɪl/', 'meaning' => 'rincian / detail', 'example' => 'The article gives several details about the study.'],
        ['word' => 'according to', 'phonetic' => '/əˈkɔːrdɪŋ tuː/', 'meaning' => 'menurut', 'example' => 'According to the report, air pollution is rising.'],
        ['word' => 'paragraph', 'phonetic' => '/ˈpærəɡrɑːf/', 'meaning' => 'paragraf', 'example' => 'Write one paragraph about your family.'],
        ['word' => 'suddenly', 'phonetic' => '/ˈsʌdənli/', 'meaning' => 'tiba-tiba', 'example' => 'Suddenly, the lights went out.'],
        ['word' => 'finally', 'phonetic' => '/ˈfaɪnəli/', 'meaning' => 'akhirnya', 'example' => 'Finally, they reached the village.'],
        ['word' => 'in conclusion', 'phonetic' => '/ɪn kənˈkluːʒn/', 'meaning' => 'sebagai kesimpulan', 'example' => 'In conclusion, exercise is good for health.'],
        ['word' => 'I am writing to', 'phonetic' => '/aɪ əm ˈraɪtɪŋ tuː/', 'meaning' => 'saya menulis untuk', 'example' => 'I am writing to apply for the position.'],
        ['word' => 'Dear Sir or Madam', 'phonetic' => '/dɪə sɪr ər ˈmædəm/', 'meaning' => 'Tuan atau Ibu (sapaan resmi)', 'example' => 'Dear Sir or Madam, I am interested in the job.'],
        ['word' => 'Yours sincerely', 'phonetic' => '/jɔːrz sɪnˈsɪərli/', 'meaning' => 'hormat saya (penutup email formal)', 'example' => 'Yours sincerely, Budi Santoso.'],
        ['word' => 'I look forward to', 'phonetic' => '/aɪ lʊk ˈfɔːwəd tuː/', 'meaning' => 'saya menantikan', 'example' => 'I look forward to your reply.'],
        ['word' => 'require', 'phonetic' => '/rɪˈkwaɪər/', 'meaning' => 'memerlukan / mensyaratkan', 'example' => 'This job requires two years of experience.'],
        ['word' => 'opinion', 'phonetic' => '/əˈpɪnjən/', 'meaning' => 'pendapat / opini', 'example' => 'In my opinion, this plan is too expensive.'],
        ['word' => 'improve', 'phonetic' => '/ɪmˈpruːv/', 'meaning' => 'memperbaiki / meningkatkan', 'example' => 'Reading can improve your vocabulary.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Last Sunday, Maya planned to visit her grandmother. First, she bought some fruit at the market. Then, while she was walking to the bus stop, she noticed a wallet on the ground. She picked it up and found an ID card inside. Without hesitating, she went to the nearest police station. In the afternoon, a police officer called her to say that the owner had been found and wanted to thank her personally.</p></div><p>What did Maya do immediately after she found the wallet?</p>',
            'options' => [
                'She went to the nearest police station.',
                'She visited her grandmother.',
                'She bought some more fruit.',
                'She called the police officer in the afternoon.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;Without hesitating, she went to the nearest police station&rdquo;</em> menunjukkan bahwa tindakan pertamanya setelah menemukan dompet adalah pergi ke kantor polisi terdekat.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Many teenagers spend several hours a day on their phones. A recent study shows that students who read books for at least thirty minutes a day score better in exams than students who only use social media. However, the researchers also point out that technology is not the enemy: students can use apps to learn languages and to find information quickly.</p></div><p>What is the main idea of the passage?</p>',
            'options' => [
                'Reading books regularly helps students perform better, although technology also has benefits.',
                'Students should not use social media at all.',
                'Phones are the only reason students fail exams.',
                'Researchers do not understand teenagers.',
            ],
            'answer' => 0,
            'explanation' => 'Paragraf menekankan kebiasaan membaca yang meningkatkan hasil belajar, namun juga menyebut manfaat teknologi (<em>technology is not the enemy</em>).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Dear Mr. Hartono, I am writing to ask about the scholarship programme for undergraduate students. I am currently in my second year of study, and my grades are in the top ten per cent of my class. Could you please send me information about the application deadline and the required documents? I look forward to hearing from you. Yours sincerely, Putri Anggraini.</p></div><p>Why did Putri write this email?</p>',
            'options' => [
                'To ask for information about a scholarship programme.',
                'To complain about her grades.',
                'To apply for a job as a teacher.',
                'To invite Mr. Hartono to a seminar.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;I am writing to ask about the scholarship programme&rdquo;</em> menyatakan tujuan email: meminta informasi tentang beasiswa.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut dengan bentuk lampau: &ldquo;Last year, my brother ___ (graduate) from university and immediately found a job.&rdquo;',
            'answer' => 'graduated',
            'accepted' => ['graduated'],
            'explanation' => 'Karena ada keterangan waktu lampau <em>last year</em>, gunakan simple past: <em>graduated</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Pembukaan mana yang paling tepat untuk email formal kepada atasan?',
            'options' => [
                'Hey Mr. Smith, what is up?',
                'Dear Mr. Smith, I am writing to ask about the meeting schedule.',
                'Yo Sir, I need some information.',
                'Hi there, got a minute?',
            ],
            'answer' => 1,
            'explanation' => 'Email formal dibuka dengan sapaan resmi <em>Dear + gelar + nama</em>, lalu menyebut tujuan dengan <em>I am writing to&hellip;</em>',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi kalimat penutup email formal: &ldquo;I look forward to ___ (hear) from you.&rdquo;',
            'answer' => 'hearing',
            'accepted' => ['hearing'],
            'explanation' => 'Setelah <em>look forward to</em>, gunakan bentuk gerund: <em>hearing</em>, bukan <em>hear</em> atau <em>to hear</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi kalimat: &ldquo;Could you please send me ___ (you) contact number?&rdquo;',
            'answer' => 'your',
            'accepted' => ['your'],
            'explanation' => 'Yang diminta adalah nomor kontak milik lawan bicara, jadi gunakan kata ganti kepemilikan <em>your</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'writing',
            'prompt' => 'Dalam email formal, sebaiknya kita menulis <em>&ldquo;I&rsquo;m&rdquo;</em> dan <em>&ldquo;thanks&rdquo;</em> agar terdengar akrab.',
            'answer' => false,
            'explanation' => 'Email formal menghindari singkatan. Tulis <em>I am</em> dan <em>thank you</em> agar sopan dan resmi.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'reading',
            'prompt' => 'Dalam cerita, kata <em>suddenly</em> biasanya menandakan kejadian yang tidak terduga.',
            'answer' => true,
            'explanation' => '<em>Suddenly</em> (tiba-tiba) dipakai untuk memperkenalkan kejadian tak terduga dalam alur cerita.',
        ],
        [
            'type' => 'matching',
            'skill' => 'writing',
            'prompt' => 'Cocokkan ungkapan email dengan artinya.',
            'pairs' => [
                ['left' => 'Dear Mr. Hartono,', 'right' => 'Sapaan pembuka untuk pria (nama belakang)'],
                ['left' => 'I am writing to ask about...', 'right' => 'Saya menulis untuk menanyakan...'],
                ['left' => 'Could you please send me...', 'right' => 'Apakah Anda berkenan mengirimkan...'],
                ['left' => 'I look forward to hearing from you.', 'right' => 'Saya menantikan balasan Anda.'],
                ['left' => 'Yours sincerely,', 'right' => 'Hormat saya (penutup email formal)'],
            ],
            'explanation' => 'Ungkapan standar email formal membuat pesanmu sopan dan mudah dipahami penerima.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The meeting has been moved to Friday at ten o\'clock because the manager is travelling.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih jawaban yang benar. Kapan rapat dilaksanakan?',
            'options' => [
                'Pada hari Jumat pukul sepuluh.',
                'Pada hari Kamis pukul sepuluh.',
                'Pada hari Jumat pukul dua belas.',
                'Pada hari Senin pukul sepuluh.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimatnya menyebut <em>moved to Friday at ten o&rsquo;clock</em>, jadi rapat dijadwalkan ulang ke hari Jumat pukul sepuluh.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'Please write a short paragraph about your best friend.',
            'prompt' => 'Dengarkan instruksi berikut, lalu lengkapi kata yang hilang: &ldquo;Please write a short ___ about your best friend.&rdquo;',
            'answer' => 'paragraph',
            'accepted' => ['paragraph'],
            'explanation' => 'Yang diminta adalah menulis satu <em>short paragraph</em> (paragraf pendek) tentang sahabat terbaik.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan kegiatanmu kemarin dengan kalimat berikut.',
            'target' => 'Yesterday, I read an interesting article and finally wrote a short paragraph about it.',
            'hint' => 'Arti: Kemarin, saya membaca artikel yang menarik dan akhirnya menulis paragraf pendek tentangnya.',
            'explanation' => 'Gunakan simple past (<em>read, wrote</em>) untuk menceritakan kegiatan lampau dan penanda urutan <em>finally</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan pembuka email formal untuk menanyakan beasiswa.',
            'target' => 'Dear Ms. Putri, I am writing to ask about the scholarship programme.',
            'hint' => 'Arti: Ibu Putri yang terhormat, saya menulis untuk menanyakan program beasiswa.',
            'explanation' => 'Pembuka email formal yang baik: sapaan resmi, lalu tujuan menulis dengan <em>I am writing to&hellip;</em>',
        ],
    ],
];
