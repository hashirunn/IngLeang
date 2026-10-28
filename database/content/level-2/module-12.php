<?php

/**
 * Level 2 — Modul 12: Vocabulary Expansion
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
    'title' => 'Vocabulary Expansion',
    'slug' => 'vocabulary-expansion',
    'subtitle' => 'Kosakata tema pendidikan, teknologi, pekerjaan, dan masyarakat',
    'summary' => 'Perluas kosakata penting tingkat menengah dalam empat tema besar: pendidikan, teknologi, pekerjaan, dan masyarakat, beserta kolokasi dan penggunaannya dalam konteks.',
    'icon' => '📚',
    'objectives' => [
        'Mengenal dan menggunakan kosakata tema pendidikan dan teknologi',
        'Memahami istilah pekerjaan dan dunia kerja',
        'Menggunakan kosakata untuk membahas isu masyarakat',
        'Mengenali kolokasi umum agar pemakaian bahasa lebih alami',
    ],
    'sections' => [
        [
            'heading' => 'Pendidikan (Education)',
            'body' => '<p>Kosakata pendidikan muncul dalam percakapan sehari-hari, surat resmi, maupun artikel. Perhatikan kata benda dan kata kerja yang sering berpasangan.</p>
<table>
<thead><tr><th>Kata</th><th>Arti</th><th>Kolokasi Umum</th></tr></thead>
<tbody>
<tr><td>scholarship</td><td>beasiswa</td><td>win / receive a scholarship</td></tr>
<tr><td>assignment</td><td>tugas</td><td>hand in an assignment</td></tr>
<tr><td>exam</td><td>ujian</td><td>pass / fail an exam</td></tr>
<tr><td>lecture</td><td>kuliah / ceramah</td><td>attend a lecture</td></tr>
<tr><td>degree</td><td>gelar (akademik)</td><td>graduate with a degree</td></tr>
<tr><td>tuition fee</td><td>biaya kuliah</td><td>pay tuition fees</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'She won a scholarship to study medicine abroad.', 'id' => 'Dia memenangkan beasiswa untuk belajar kedokteran di luar negeri.'],
                ['en' => 'Students must hand in their assignments before Friday.', 'id' => 'Para siswa harus menyerahkan tugas mereka sebelum hari Jumat.'],
                ['en' => 'He passed the exam and graduated with a degree in engineering.', 'id' => 'Dia lulus ujian dan meraih gelar di bidang teknik.'],
            ],
        ],
        [
            'heading' => 'Teknologi (Technology)',
            'body' => '<p>Perkembangan teknologi melahirkan banyak istilah baru. Berikut kosakata yang paling sering dipakai dalam percakapan dan bacaan bertema teknologi.</p>
<ul>
<li><strong>device</strong> (perangkat): <em>a mobile device</em></li>
<li><strong>download / upload</strong> (mengunduh / mengunggah)</li>
<li><strong>update</strong> (memperbarui): <em>update the app</em></li>
<li><strong>artificial intelligence (AI)</strong> (kecerdasan buatan)</li>
<li><strong>cybersecurity</strong> (keamanan siber): <em>improve cybersecurity</em></li>
<li><strong>digital literacy</strong> (literasi digital): kemampuan menggunakan perangkat dan internet secara bijak</li>
<li><strong>screen time</strong> (waktu layar): <em>limit screen time</em></li>
<li><strong>go viral</strong> (menyebar luas di internet)</li>
</ul>',
            'examples' => [
                ['en' => 'You need to update the app to use the new features.', 'id' => 'Kamu perlu memperbarui aplikasi untuk memakai fitur baru.'],
                ['en' => 'The video went viral and was watched by millions of people.', 'id' => 'Video itu menjadi viral dan ditonton jutaan orang.'],
                ['en' => 'Parents should limit their children&rsquo;s screen time.', 'id' => 'Orang tua sebaiknya membatasi waktu layar anak-anak mereka.'],
                ['en' => 'Strong cybersecurity protects our personal data.', 'id' => 'Keamanan siber yang kuat melindungi data pribadi kita.'],
            ],
        ],
        [
            'heading' => 'Pekerjaan (Work & Careers)',
            'body' => '<p>Kosakata dunia kerja berguna saat membaca iklan lowongan, wawancara, maupun membicarakan karier.</p>
<table>
<thead><tr><th>Kata</th><th>Arti</th><th>Penggunaan</th></tr></thead>
<tbody>
<tr><td>apply for</td><td>melamar</td><td>apply for a job</td></tr>
<tr><td>interview</td><td>wawancara (kerja)</td><td>have a job interview</td></tr>
<tr><td>colleague</td><td>rekan kerja</td><td>talk to a colleague</td></tr>
<tr><td>deadline</td><td>tenggat waktu</td><td>meet / miss a deadline</td></tr>
<tr><td>workload</td><td>beban kerja</td><td>a heavy workload</td></tr>
<tr><td>promotion</td><td>kenaikan jabatan</td><td>get a promotion</td></tr>
<tr><td>resign</td><td>melepaskan jabatan / mengundurkan diri</td><td>resign from a company</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'She applied for the job but did not get an interview.', 'id' => 'Dia melamar pekerjaan itu tetapi tidak dipanggil wawancara.'],
                ['en' => 'He has a heavy workload, so he often works late.', 'id' => 'Beban kerjanya berat, jadi dia sering lembur.'],
                ['en' => 'Our team managed to meet the deadline.', 'id' => 'Tim kami berhasil memenuhi tenggat waktu.'],
            ],
        ],
        [
            'heading' => 'Masyarakat (Society)',
            'body' => '<p>Kosakata masyarakat dipakai untuk membahas isu sosial dalam percakapan, esai, maupun berita.</p>
<ul>
<li><strong>community</strong> (komunitas/masyarakat setempat): <em>help the community</em></li>
<li><strong>income</strong> (penghasilan): <em>a steady income</em></li>
<li><strong>inequality</strong> (ketimpangan): <em>income inequality</em></li>
<li><strong>volunteer</strong> (relawan): <em>work as a volunteer</em></li>
<li><strong>public transport</strong> (transportasi umum): <em>improve public transport</em></li>
<li><strong>aging population</strong> (penduduk yang menua)</li>
<li><strong>rural / urban</strong> (pedesaan / perkotaan): <em>rural areas, urban areas</em></li>
</ul>',
            'examples' => [
                ['en' => 'Many young people leave rural areas to find work in cities.', 'id' => 'Banyak anak muda meninggalkan daerah pedesaan untuk mencari kerja di kota.'],
                ['en' => 'The government wants to improve public transport in big cities.', 'id' => 'Pemerintah ingin memperbaiki transportasi umum di kota-kota besar.'],
                ['en' => 'Volunteers cleaned the river near our neighbourhood.', 'id' => 'Para relawan membersihkan sungai dekat lingkungan kami.'],
            ],
        ],
        [
            'heading' => 'Tips Memperluas Kosakata',
            'body' => '<p>Jangan hanya menghafal arti kata. Perhatikan juga <strong>kolokasi</strong> (kata yang sering berpasangan) dan konteks pemakaiannya.</p>
<ul>
<li>Pelajari kata dalam <strong>satuan frasa</strong>: <em>heavy workload</em>, bukan hanya <em>workload</em>.</li>
<li>Catat <strong>lawan kata</strong> (antonim): <em>pass &ndash; fail</em>, <em>resign &ndash; be hired</em>, <em>rural &ndash; urban</em>.</li>
<li>Gunakan kosakata baru dalam kalimatmu sendiri agar cepat melekat.</li>
</ul>',
            'examples' => [
                ['en' => 'He resigned from his job and started a new business.', 'id' => 'Dia mengundurkan diri dari pekerjaannya dan memulai bisnis baru.'],
                ['en' => 'Rural areas often have fewer facilities than urban areas.', 'id' => 'Daerah pedesaan sering kali memiliki fasilitas yang lebih sedikit daripada perkotaan.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'scholarship', 'phonetic' => '/ˈskɒlərʃɪp/', 'meaning' => 'beasiswa', 'example' => 'She won a scholarship last year.'],
        ['word' => 'assignment', 'phonetic' => '/əˈsaɪnmənt/', 'meaning' => 'tugas', 'example' => 'This assignment is due on Monday.'],
        ['word' => 'lecture', 'phonetic' => '/ˈlektʃər/', 'meaning' => 'kuliah / ceramah', 'example' => 'The lecture starts at nine.'],
        ['word' => 'graduate', 'phonetic' => '/ˈɡrædʒueɪt/', 'meaning' => 'lulus (dari sekolah/perguruan tinggi)', 'example' => 'My sister graduated last year.'],
        ['word' => 'download', 'phonetic' => '/ˌdaʊnˈləʊd/', 'meaning' => 'mengunduh', 'example' => 'I downloaded the app yesterday.'],
        ['word' => 'update', 'phonetic' => '/ˈʌpdeɪt/', 'meaning' => 'pembaruan / memperbarui', 'example' => 'This update fixes several problems.'],
        ['word' => 'artificial intelligence', 'phonetic' => '/ˌɑːtɪfɪʃl ɪnˈtelɪdʒəns/', 'meaning' => 'kecerdasan buatan', 'example' => 'Artificial intelligence can translate languages.'],
        ['word' => 'digital literacy', 'phonetic' => '/ˌdɪdʒɪtl ˈlɪtərəsi/', 'meaning' => 'literasi digital', 'example' => 'Digital literacy is important for students.'],
        ['word' => 'apply for', 'phonetic' => '/əˈplaɪ fɔːr/', 'meaning' => 'melamar', 'example' => 'He applied for a job at the bank.'],
        ['word' => 'deadline', 'phonetic' => '/ˈdedlaɪn/', 'meaning' => 'tenggat waktu', 'example' => 'The deadline is next Wednesday.'],
        ['word' => 'colleague', 'phonetic' => '/ˈkɒliːɡ/', 'meaning' => 'rekan kerja', 'example' => 'My colleague helped me finish the report.'],
        ['word' => 'promotion', 'phonetic' => '/prəˈməʊʃn/', 'meaning' => 'kenaikan jabatan', 'example' => 'She got a promotion after two years.'],
        ['word' => 'community', 'phonetic' => '/kəˈmjuːnəti/', 'meaning' => 'komunitas / masyarakat setempat', 'example' => 'Our community holds a meeting every month.'],
        ['word' => 'inequality', 'phonetic' => '/ˌɪnɪˈkwɒləti/', 'meaning' => 'ketimpangan', 'example' => 'The report discusses income inequality.'],
        ['word' => 'volunteer', 'phonetic' => '/ˌvɒlənˈtɪər/', 'meaning' => 'relawan', 'example' => 'She works as a volunteer at the shelter.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Rina mendapat dana dari pemerintah untuk membayar biaya kuliahnya. Kata yang tepat adalah&hellip;',
            'options' => ['scholarship', 'deadline', 'interview', 'workload'],
            'answer' => 0,
            'explanation' => '<em>Scholarship</em> (beasiswa) adalah dana untuk membantu biaya pendidikan. <em>Deadline</em> berarti tenggat waktu, sedangkan <em>interview</em> berarti wawancara.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;I ___ for the position last week, and the company called me for an interview.&rdquo;',
            'options' => ['applied', 'volunteered', 'graduated', 'promoted'],
            'answer' => 0,
            'explanation' => 'Kolokasi yang tepat adalah <em>apply for a job/position</em> (melamar pekerjaan). Bentuk lampau dari <em>apply</em> adalah <em>applied</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '&ldquo;She ___ from university two years ago and now works as a nurse.&rdquo;',
            'options' => ['graduated', 'has graduated', 'graduates', 'is graduating'],
            'answer' => 0,
            'explanation' => 'Karena ada keterangan waktu lampau yang pasti (<em>two years ago</em>), gunakan simple past: <em>graduated</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Kata yang berarti &ldquo;kecerdasan buatan&rdquo; dalam bahasa Inggris adalah&hellip;',
            'options' => ['artificial intelligence', 'digital literacy', 'public transport', 'screen time'],
            'answer' => 0,
            'explanation' => '<em>Artificial intelligence</em> (AI) adalah kecerdasan buatan. <em>Digital literacy</em> berarti literasi digital, bukan kecerdasan buatan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;The government plans to ___ public transport so that fewer people use private cars.&rdquo;',
            'options' => ['improve', 'resign', 'graduate', 'download'],
            'answer' => 0,
            'explanation' => 'Kolokasi yang tepat adalah <em>improve public transport</em> (memperbaiki/meningkatkan transportasi umum).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'My brother has a heavy ___: he has to finish five reports this week.',
            'answer' => 'workload',
            'accepted' => ['workload'],
            'explanation' => '<em>Workload</em> berarti beban kerja. Kolokasinya: <em>a heavy workload</em> (beban kerja berat).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'You need a strong internet ___ to protect your personal data from hackers.',
            'answer' => 'security',
            'accepted' => ['security', 'cybersecurity'],
            'explanation' => 'Kata yang tepat adalah <em>security</em>; frasa lengkapnya <em>cybersecurity</em> (keamanan siber) yang melindungi data pribadi.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Many young people leave ___ areas to find better jobs in cities. (daerah pedesaan)',
            'answer' => 'rural',
            'accepted' => ['rural'],
            'explanation' => '<em>Rural areas</em> berarti daerah pedesaan, sedangkan lawannya <em>urban areas</em> (perkotaan).',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => '<em>Digital literacy</em> berarti kemampuan menggunakan perangkat digital dan internet secara bijak.',
            'answer' => true,
            'explanation' => '<em>Digital literacy</em> (literasi digital) adalah keterampilan menggunakan teknologi digital secara cerdas dan bertanggung jawab.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => '&ldquo;He <strong>resigned</strong> from his company&rdquo; berarti dia diberhentikan oleh perusahaan.',
            'answer' => false,
            'explanation' => '<em>Resign</em> berarti mengundurkan diri secara sukarela, bukan diberhentikan. Yang diberhentikan disebut <em>be fired / be dismissed</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kosakata dengan artinya.',
            'pairs' => [
                ['left' => 'deadline', 'right' => 'tenggat waktu'],
                ['left' => 'scholarship', 'right' => 'beasiswa'],
                ['left' => 'colleague', 'right' => 'rekan kerja'],
                ['left' => 'community', 'right' => 'komunitas / masyarakat'],
                ['left' => 'inequality', 'right' => 'ketimpangan'],
            ],
            'explanation' => 'Hafalkan kosakata bersama kolokasinya agar lebih mudah diingat dan dipakai dengan tepat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The scholarship covers the full tuition fee for four years.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih arti yang tepat.',
            'options' => [
                'Beasiswa itu menanggung seluruh biaya kuliah selama empat tahun.',
                'Beasiswa itu hanya menanggung biaya kuliah tahun pertama.',
                'Biaya kuliah itu naik selama empat tahun.',
                'Mahasiswa itu membayar biaya kuliahnya sendiri.',
            ],
            'answer' => 0,
            'explanation' => 'Frasa <em>covers the full tuition fee</em> berarti menanggung seluruh biaya kuliah.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'My colleague submitted the report before the deadline.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;My ___ submitted the report before the deadline.&rdquo;',
            'answer' => 'colleague',
            'accepted' => ['colleague'],
            'explanation' => 'Kata yang terdengar adalah <em>colleague</em> (rekan kerja).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ceritakan pengalaman belajarmu dengan kalimat berikut.',
            'target' => 'I won a scholarship to study English last year.',
            'hint' => 'Arti: Saya mendapatkan beasiswa untuk belajar bahasa Inggris tahun lalu.',
            'explanation' => 'Gunakan <em>win a scholarship</em> (memenangkan/mendapatkan beasiswa) dan waktu lampau <em>won</em> untuk pengalaman lampau.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Anna works as a volunteer in a small community outside the city. Every Saturday, she teaches children how to use computers safely. &ldquo;Many children own a smartphone, but they do not understand the risks,&rdquo; she says. Thanks to her programme, the children now limit their screen time and know how to protect their personal information.</p></div><p>Apa kegiatan utama Anna setiap hari Sabtu?</p>',
            'options' => ['Mengajar anak-anak cara menggunakan komputer dengan aman.', 'Menjual komputer kepada masyarakat.', 'Memprogram komputer untuk pemerintah. ', 'Mengajak anak-anak bermain game sepanjang hari.'],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;Every Saturday, she teaches children how to use computers safely&rdquo;</em> menjawab pertanyaan tersebut.',
        ],
    ],
];
