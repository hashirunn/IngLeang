<?php

/**
 * Level 1 — Modul 14: Reading & Writing
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
    'slug' => 'reading-writing',
    'subtitle' => 'Membaca teks pendek dan menulis paragraf sederhana',
    'summary' => 'Belajar memahami teks pendek seperti pemberitahuan, undangan, dan surat singkat, serta menulis paragraf sederhana yang terstruktur.',
    'icon' => '📖',
    'objectives' => [
        'Menerapkan strategi membaca teks pendek (skimming dan scanning)',
        'Mengenali jenis teks pendek: notice, invitation, schedule, dan short letter',
        'Menulis paragraf sederhana dengan kalimat topik, penjelas, dan penutup',
        'Menggunakan kata penghubung waktu dan sebab-akibat dalam tulisan',
    ],
    'sections' => [
        [
            'heading' => 'Strategi Membaca Teks Pendek (Reading Strategies)',
            'body' => '<p>Untuk memahami teks pendek dengan cepat, gunakan dua langkah berikut:</p>
<ol>
<li><strong>Skimming</strong> — membaca cepat untuk menangkap gambaran umum: siapa, di mana, dan kapan.</li>
<li><strong>Scanning</strong> — mencari kata kunci tertentu, seperti nama, jam, harga, atau hari.</li>
</ol>
<p>Kamu tidak perlu memahami setiap kata. Tebak arti kata baru dari konteks kalimat, lalu lanjutkan membaca. Biasanya kata benda baru muncul bersama kata yang sudah kamu ketahui.</p>',
            'examples' => [
                ['en' => 'When you read a schedule, look for days and times first.', 'id' => 'Saat membaca jadwal, cari hari dan jam terlebih dahulu.'],
                ['en' => 'If you see the word "closed", the place is not open.', 'id' => 'Jika kamu melihat kata "closed", tempat itu sedang tidak buka.'],
                ['en' => 'Read the title first to know what the text is about.', 'id' => 'Baca judul terlebih dahulu untuk mengetahui isi teks.'],
            ],
        ],
        [
            'heading' => 'Jenis Teks Pendek yang Sering Ditemui (Common Short Texts)',
            'body' => '<p>Berikut beberapa jenis teks pendek yang sering kamu temui beserta ciri-cirinya:</p>
<table>
<thead><tr><th>Jenis teks</th><th>Ciri-ciri</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Notice</td><td>Pesan singkat berisi informasi atau perintah</td><td>Library closed on Sunday.</td></tr>
<tr><td>Invitation</td><td>Undangan: acara, hari, jam, dan tempat</td><td>Come to my birthday party!</td></tr>
<tr><td>Schedule</td><td>Jadwal: daftar hari dan jam kegiatan</td><td>Math: 08.00&ndash;09.30</td></tr>
<tr><td>Short letter / email</td><td>Salam pembuka, isi pesan, salam penutup</td><td>Dear Anna, ... Best regards, Rina</td></tr>
</tbody>
</table>
<p>Perhatikan juga <strong>jam</strong> (<em>half past three</em> = 03.30) dan <strong>kata waktu</strong> seperti <em>tomorrow</em> atau <em>next week</em>, karena sering menjadi bahan pertanyaan pemahaman.</p>',
            'examples' => [
                ['en' => 'The library is closed on Sunday. Come back on Monday, please.', 'id' => 'Perpustakaan tutup pada hari Minggu. Kembali pada hari Senin, tolong.'],
                ['en' => 'Please come to my house at four o\'clock on Saturday.', 'id' => 'Silakan datang ke rumahku pukul empat sore pada hari Sabtu.'],
            ],
        ],
        [
            'heading' => 'Struktur Paragraf Sederhana (Paragraph Structure)',
            'body' => '<p>Paragraf yang baik memiliki tiga bagian:</p>
<ol>
<li><strong>Kalimat topik (topic sentence)</strong> — kalimat pertama yang menyatakan ide utama. <em>I have a busy daily routine.</em></li>
<li><strong>Kalimat penjelas</strong> — detail yang mendukung ide utama, diurutkan dengan penghubung waktu seperti <em>first, then, after that,</em> dan <em>finally</em>.</li>
<li><strong>Kalimat penutup</strong> — kesimpulan atau perasaan penulis. <em>I enjoy my busy days.</em></li>
</ol>
<p>Penghubung lain yang berguna: <strong>and</strong> (dan), <strong>but</strong> (tetapi), dan <strong>because</strong> (karena).</p>',
            'examples' => [
                ['en' => 'First, I brush my teeth. Then, I get dressed. Finally, I have breakfast.', 'id' => 'Pertama, saya menggosok gigi. Kemudian, saya berpakaian. Akhirnya, saya sarapan.'],
                ['en' => 'I like rainy days because I can stay at home.', 'id' => 'Saya suka hari-hari hujan karena saya bisa berada di rumah.'],
                ['en' => 'My brother is small, but he is very strong.', 'id' => 'Saudaraku kecil, tetapi dia sangat kuat.'],
            ],
        ],
        [
            'heading' => 'Menulis Paragraf Sederhana (Writing a Simple Paragraph)',
            'body' => '<p>Ikuti langkah berikut saat menulis paragraf sederhana:</p>
<ol>
<li>Pilih satu topik yang kamu ketahui, misalnya <em>my family</em>, <em>my daily routine</em>, atau <em>my best friend</em>.</li>
<li>Tulis satu kalimat topik, misalnya <em>My name is Sari, and I am a student.</em></li>
<li>Tambahkan 3&ndash;5 kalimat penjelas dengan kosakata yang sudah kamu pelajari.</li>
<li>Tutup dengan kalimat singkat, misalnya <em>I love my family very much.</em></li>
</ol>
<p>Perhatikan aturan penulisan: gunakan <strong>huruf besar</strong> di awal kalimat dan setelah titik, serta akhiri setiap kalimat dengan <strong>tanda titik</strong>.</p>',
            'examples' => [
                ['en' => 'My name is Rani. I am twelve years old. I study at SMP Harapan.', 'id' => 'Nama saya Rani. Saya berusia dua belas tahun. Saya belajar di SMP Harapan.'],
                ['en' => 'I have a cat. Its name is Milo. It likes to sleep on my lap.', 'id' => 'Saya punya seekor kucing. Namanya Milo. Dia suka tidur di pangkuanku.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'paragraph', 'phonetic' => '/ˈpærəɡrɑːf/', 'meaning' => 'paragraf', 'example' => 'Please write a short paragraph.'],
        ['word' => 'topic sentence', 'phonetic' => '/ˌtɒpɪk ˈsentəns/', 'meaning' => 'kalimat topik', 'example' => 'The topic sentence shows the main idea.'],
        ['word' => 'notice', 'phonetic' => '/ˈnəʊtɪs/', 'meaning' => 'pemberitahuan', 'example' => 'Read the notice on the door.'],
        ['word' => 'schedule', 'phonetic' => '/ˈʃedjuːl/', 'meaning' => 'jadwal', 'example' => 'My schedule is busy on Monday.'],
        ['word' => 'borrow', 'phonetic' => '/ˈbɒrəʊ/', 'meaning' => 'meminjam', 'example' => 'I want to borrow two books.'],
        ['word' => 'return', 'phonetic' => '/rɪˈtɜːn/', 'meaning' => 'mengembalikan', 'example' => 'Please return the book on Friday.'],
        ['word' => 'invitation', 'phonetic' => '/ˌɪnvɪˈteɪʃn/', 'meaning' => 'undangan', 'example' => 'I receive an invitation to a party.'],
        ['word' => 'address', 'phonetic' => '/əˈdres/', 'meaning' => 'alamat', 'example' => 'My address is Jalan Mangga No. 7.'],
        ['word' => 'first', 'phonetic' => '/fɜːst/', 'meaning' => 'pertama', 'example' => 'First, open the window.'],
        ['word' => 'then', 'phonetic' => '/ðen/', 'meaning' => 'kemudian', 'example' => 'Then, mix the ingredients.'],
        ['word' => 'finally', 'phonetic' => '/ˈfaɪnəli/', 'meaning' => 'akhirnya', 'example' => 'Finally, wash your hands.'],
        ['word' => 'because', 'phonetic' => '/bɪˈkɒz/', 'meaning' => 'karena', 'example' => 'I stay at home because I am sick.'],
        ['word' => 'hope', 'phonetic' => '/həʊp/', 'meaning' => 'berharap', 'example' => 'I hope you are well.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>My name is Budi. I am twelve years old. I live in Yogyakarta with my parents and my little sister. Every day, I wake up at five o\'clock. I pray, take a shower, and have breakfast. My school is not far from my house, so I walk to school.</p></div><p>How does Budi go to school?</p>',
            'options' => ['By bus.', 'By car.', 'On foot (walking).', 'By bicycle.'],
            'answer' => 2,
            'explanation' => 'Kalimat terakhir teks menyebutkan: <em>&ldquo;I <strong>walk</strong> to school&rdquo;</em>, artinya Budi berjalan kaki ke sekolah.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p><strong>School Library Notice</strong><br>The library is open from 8 a.m. to 2 p.m. on Monday to Friday. Students must return borrowed books within two weeks. Please keep silent inside the library.</p></div><p>When does the library close on Friday?</p>',
            'options' => ['At 8 a.m.', 'At 2 p.m.', 'At 4 p.m.', 'It is closed on Friday.'],
            'answer' => 1,
            'explanation' => 'Notice menyatakan perpustakaan buka pukul 08.00 sampai <strong>14.00 (2 p.m.)</strong> pada hari kerja, termasuk Jumat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Dear Maya,<br>How are you? I hope you are well. Next Saturday is my birthday. I will have a small party at my house at four o\'clock in the afternoon. Please come to my house on Jalan Melati No. 5. I hope you can come.<br>Best wishes,<br>Rina</p></div><p>What does Rina invite Maya to?</p>',
            'options' => ['Her birthday party.', 'A school event.', 'A picnic at the beach.', 'A football match.'],
            'answer' => 0,
            'explanation' => 'Surat itu berbunyi: <em>&ldquo;Next Saturday is my birthday. I will have a small party at my house&rdquo;</em>, yaitu undangan pesta ulang tahun.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Paragraf yang baik dimulai dengan ___ .',
            'options' => ['kalimat topik (topic sentence)', 'kalimat tanya', 'daftar harga', 'salam penutup'],
            'answer' => 0,
            'explanation' => 'Kalimat topik di awal paragraf menyatakan ide utama, sehingga pembaca langsung tahu topik yang dibahas.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Which sentence is written correctly?',
            'options' => ['my name is sari.', 'My name is Sari.', 'My Name Is Sari.', 'my name Is Sari.'],
            'answer' => 1,
            'explanation' => 'Kalimat yang benar diawali huruf besar (<em>My</em>) dan nama diri (<em>Sari</em>) juga diawali huruf besar, sedangkan kata lain huruf kecil.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'My favorite season is winter ___ I love the snow.',
            'answer' => 'because',
            'accepted' => ['because'],
            'explanation' => '<em>Because</em> (karena) menghubungkan ide utama dengan alasannya: suka musim dingin karena suka salju.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'First, I eat breakfast. ___, I go to school.',
            'answer' => 'Then',
            'accepted' => ['then'],
            'explanation' => '<em>Then</em> (kemudian) dipakai untuk mengurutkan kegiatan setelah kata <em>first</em> (pertama).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Terjemahkan kalimat berikut ke bahasa Inggris:<br>&ldquo;Saya pergi ke sekolah dengan berjalan kaki setiap hari.&rdquo;',
            'answer' => 'I walk to school every day.',
            'accepted' => ['i walk to school every day', 'i go to school on foot every day'],
            'explanation' => 'Cara alami menyatakannya: <em>I walk to school every day.</em> Alternatif lain yang benar: <em>I go to school on foot every day.</em>',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Setiap kalimat ditulis dengan huruf besar di awal dan diakhiri dengan tanda ___ .',
            'answer' => 'period',
            'accepted' => ['period', 'full stop'],
            'explanation' => 'Kalimat deklaratif diakhiri tanda <strong>period</strong> (tanda titik / full stop). Jawaban huruf besar dan kecil sama-sama diterima.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'reading',
            'prompt' => '&ldquo;Notice&rdquo; adalah teks singkat yang memberi informasi atau perintah kepada pembaca.',
            'answer' => true,
            'explanation' => 'Notice (pemberitahuan) berisi pesan singkat, misalnya perpustakaan tutup atau ruangan tertutup untuk umum.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'writing',
            'prompt' => 'Kalimat topik (topic sentence) sebaiknya ditulis di akhir paragraf.',
            'answer' => false,
            'explanation' => 'Pada paragraf sederhana, kalimat topik diletakkan di <strong>awal</strong> paragraf agar pembaca langsung mengetahui ide utamanya.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata dengan artinya.',
            'pairs' => [
                ['left' => 'notice', 'right' => 'pemberitahuan'],
                ['left' => 'schedule', 'right' => 'jadwal'],
                ['left' => 'borrow', 'right' => 'meminjam'],
                ['left' => 'invitation', 'right' => 'undangan'],
                ['left' => 'address', 'right' => 'alamat'],
            ],
            'explanation' => 'Kosakata ini sering muncul dalam teks pendek seperti notice, jadwal, dan surat undangan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The school library is open from eight o\'clock in the morning to two o\'clock in the afternoon on Monday.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih jawaban yang tepat: <strong>When does the library close on Monday?</strong>',
            'options' => ['At two o\'clock.', 'At eight o\'clock.', 'At four o\'clock.', 'It is closed on Monday.'],
            'answer' => 0,
            'explanation' => 'Perpustakaan buka dari pukul 08.00 sampai <em>two o\'clock in the afternoon</em> (14.00), sehingga tutup pukul dua.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan rutinitasmu di pagi hari dengan kalimat berikut.',
            'target' => 'Every morning, I wake up at six o\'clock, take a shower, and then have breakfast.',
            'hint' => 'Arti: Setiap pagi, saya bangun pukul enam, mandi, lalu sarapan.',
            'explanation' => 'Gunakan penghubung urutan <em>then</em> untuk menghubungkan kegiatan; urutan kegiatan sehari-hari ditulis dengan Simple Present.',
        ],
    ],
];
