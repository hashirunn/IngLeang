<?php

/**
 * Level 3 — Modul 10: Persuasive Speaking
 *
 * Presentasi, negosiasi, debat, dan tanya jawab (C1–C2).
 * Format konten dan tipe soal mengikuti file referensi level-1/module-01.
 */
return [
    'title' => 'Persuasive Speaking',
    'slug' => 'persuasive-speaking',
    'subtitle' => 'Presentasi, negosiasi, debat, tanya jawab',
    'summary' => 'Meyakinkan audiens secara lisan: menyusun presentasi yang menarik, bernegosiasi dengan konsesi yang cerdas, berdebat secara diplomatis, dan menangani sesi tanya jawab dengan percaya diri.',
    'icon' => '🎤',
    'objectives' => [
        'Membuka dan menutup presentasi dengan ajakan tindakan yang jelas',
        'Meyakinkan pendengar dengan alasan, bukti, dan nada yang sesuai',
        'Memberi konsesi dan mengajukan tawaran balik dalam negosiasi',
        'Menjawab pertanyaan sulit tanpa kehilangan kredibilitas',
    ],
    'sections' => [
        [
            'heading' => 'Struktur Presentasi Persuasif',
            'body' => '<p>Presentasi persuasif berjalan dalam tiga bagian: buka dengan <strong>hook</strong> yang relevan, sampaikan pesan utama dengan <em>signposting</em>, lalu tutup dengan <strong>call to action</strong>.</p>
<ul>
<li><em>Hook</em>: pertanyaan retoris, angka mengejutkan, atau masalah nyata yang dialami audiens.</li>
<li><em>Signposting</em>: penanda arah seperti <em>firstly, more importantly, finally</em> agar audiens tahu posisi pembicaraan.</li>
<li>Pesan utama: satu gagasan utama per bagian, bukan daftar panjang fakta.</li>
<li><em>Call to action</em>: tindakan spesifik yang diminta kepada audiens di kalimat terakhir.</li>
</ul>
<p>Audiens mengingat <strong>satu</strong> pesan, bukan dua puluh. Pilih pesan terkuat dan ulangi pada pembukaan, tubuh, serta penutup.</p>',
            'examples' => [
                ['en' => 'What if we could cut waste without cutting quality?', 'id' => 'Bagaimana jika kita bisa memangkas pemborosan tanpa memangkas kualitas?'],
                ['en' => 'I will cover three points: the problem, the evidence, and our proposal.', 'id' => 'Saya akan membahas tiga hal: masalah, bukti, dan proposal kami.'],
                ['en' => 'So I would recommend approving the pilot starting next month.', 'id' => 'Karena itu, saya menyarankan agar uji coba disetujui mulai bulan depan.'],
                ['en' => 'To sum up, small changes today prevent large costs tomorrow.', 'id' => 'Ringkasnya, perubahan kecil hari ini mencegah biaya besar esok hari.'],
            ],
        ],
        [
            'heading' => 'Teknik Persuasi: Ethos, Pathos, dan Logos',
            'body' => '<p>Aristoteles membagi daya meyakinkan menjadi tiga sumber; pembicara yang kuat menyeimbangkan ketiganya.</p>
<table>
<thead><tr><th>Teknik</th><th>Sumber daya meyakinkan</th><th>Contoh penanda bahasa</th></tr></thead>
<tbody>
<tr><td>Ethos</td><td>kedudukan, kejujuran, dan kompetensi pembicara</td><td>in my experience, as our team found</td></tr>
<tr><td>Pathos</td><td>nilai, kekhawatiran, dan harapan audiens</td><td>imagine a future where ...</td></tr>
<tr><td>Logos</td><td>data, logika, dan hubungan sebab-akibat</td><td>the figures show, as a result</td></tr>
</tbody>
</table>
<p>Pertanyaan retoris dan modal seperti <em>could</em> dan <em>should</em> membantu menyampaikan ajakan tanpa terdengar memerintah. Hindari kepastian berlebihan (<em>guaranteed, 100 per cent</em>) yang justru menurunkan kredibilitas.</p>',
            'examples' => [
                ['en' => 'In my experience, clients respond better to clear deadlines.', 'id' => 'Berdasarkan pengalaman saya, klien lebih responsif terhadap tenggat yang jelas.'],
                ['en' => 'The figures show a twenty per cent rise in complaints.', 'id' => 'Angka-angka menunjukkan kenaikan keluhan sebesar dua puluh persen.'],
                ['en' => 'Imagine a workplace where every meeting ends in ten minutes.', 'id' => 'Bayangkan tempat kerja di mana setiap rapat selesai dalam sepuluh menit.'],
            ],
        ],
        [
            'heading' => 'Negosiasi: Menawar dan Memberi Konsesi',
            'body' => '<p>Negosiasi yang efektif tidak menuntut kemenangan total, melainkan kesepakatan yang bisa dipertahankan kedua pihak. Gunakan pola berikut:</p>
<ol>
<li><strong>Buka dengan posisi yang jelas</strong>, tetapi tetap membuka ruang: <em>Our ideal timeline would be ...</em></li>
<li><strong>Memberi konsesi</strong>: akui poin lawan lebih dulu dengan <em>I take your point ...</em> atau <em>I accept your concern about ...</em></li>
<li><strong>Tawaran balik</strong> bersyarat: <em>If you can ..., we could ...</em> &mdash; setiap konsesi dikaitkan dengan imbalan.</li>
<li><strong>Tolak halus</strong>: <em>I am afraid that is not workable for us.</em> alih-alih jawaban <em>no</em> yang keras.</li>
</ol>
<p>Hindari <em>take it or leave it</em> kecuali posisimu memang sangat kuat; ultimatum biasanya menghentikan negosiasi.</p>',
            'examples' => [
                ['en' => 'I take your point about the cost, but the quality standard cannot change.', 'id' => 'Saya memahami soal biaya, tetapi standar kualitas tidak bisa diubah.'],
                ['en' => 'If you can deliver a month earlier, we could stretch the payment over six months.', 'id' => 'Jika Anda bisa mengirim sebulan lebih awal, kami bisa memperpanjang pembayaran selama enam bulan.'],
                ['en' => 'I am afraid that is not workable for us at this stage.', 'id' => 'Mohon maaf, hal itu tidak bisa kami lakukan pada tahap ini.'],
                ['en' => 'Could we meet halfway on the delivery date?', 'id' => 'Bisakah kita bertemu di tengah soal tanggal pengiriman?'],
            ],
        ],
        [
            'heading' => 'Debat: Menyampaikan dan Membantah',
            'body' => '<p>Debat yang meyakinkan menyerang <strong>argumen</strong>, bukan <strong>orang</strong>. Bantah dengan struktur yang rapi:</p>
<ul>
<li><em>Steel-manning</em>: ulangi argumen lawan secara paling kuat sebelum membantah &mdash; ini menunjukkan kejujuran intelektual.</li>
<li><em>Concession + rebuttal</em>: <em>I see your point about X; however, Y outweighs it.</em></li>
<li><em>Evidence framing</em>: perkuat dengan sumber (<em>three independent studies</em>), bukan klaim mutlak (<em>everyone knows</em>).</li>
<li><em>Reframing</em>: alihkan perdebatan ke nilai yang disepakati kedua pihak, misalnya keamanan atau biaya jangka panjang.</li>
</ul>
<p>Serangan pribadi (<em>ad hominem</em>) membuat pembicara kehilangan simpati audiens, meski argumennya benar.</p>',
            'examples' => [
                ['en' => 'I understand your concern about the budget; the long-term savings outweigh the initial cost.', 'id' => 'Saya memahami kekhawatiran Anda soal anggaran; penghematan jangka panjang lebih besar daripada biaya awal.'],
                ['en' => 'Your argument assumes that demand will stay constant.', 'id' => 'Argumen Anda berasumsi bahwa permintaan akan tetap konstan.'],
                ['en' => 'Three independent studies support this figure.', 'id' => 'Tiga studi independen mendukung angka ini.'],
                ['en' => 'Let us look at this from the customer\'s point of view.', 'id' => 'Mari kita lihat ini dari sudut pandang pelanggan.'],
            ],
        ],
        [
            'heading' => 'Sesi Tanya Jawab (Q&A)',
            'body' => '<p>Sesi tanya jawab menentukan kesan akhir. Siapkan tiga strategi:</p>
<ol>
<li><strong>Mengulang pertanyaan</strong> dengan parafrase singkat agar seluruh audiens mendengarnya dan pembicara memastikan maksudnya.</li>
<li><strong>Membeli waktu</strong> dengan kalimat penengah: <em>That is a good question &mdash; let me come back to that in a moment.</em></li>
<li><strong>Bridging</strong>: setelah menjawab, kembalikan ke pesan utama dengan <em>and that is exactly why we propose ...</em></li>
</ol>
<p>Bila jawabannya belum tersedia, akui dengan jujur dan tawarkan tindak lanjut; mengarang jawaban lebih berbahaya daripada mengaku belum tahu.</p>',
            'examples' => [
                ['en' => 'That is a fair question. I do not have the figures with me, but I will follow up by email tomorrow.', 'id' => 'Pertanyaan yang adil. Saya tidak membawa angkanya, tetapi akan saya kirimkan lewat email besok.'],
                ['en' => 'Let me address that with the figures from the last quarter.', 'id' => 'Izinkan saya menjawabnya dengan angka dari kuartal terakhir.'],
                ['en' => 'Could you clarify which project you mean?', 'id' => 'Bisa tolong diperjelas proyek mana yang Anda maksud?'],
                ['en' => 'And that is precisely why we recommend a phased rollout.', 'id' => 'Dan itulah alasan persisnya kami merekomendasikan penerapan bertahap.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'call to action', 'phonetic' => '/kɔːl tuː əkˈʃn/', 'meaning' => 'ajakan tindakan di penutup presentasi', 'example' => 'The presentation ended with a clear call to action.'],
        ['word' => 'concession', 'phonetic' => '/kənˈseʃn/', 'meaning' => 'pengakuan atas poin lawan', 'example' => 'Making a small concession can build trust.'],
        ['word' => 'counteroffer', 'phonetic' => '/ˌkaʊntərˈɒfə/', 'meaning' => 'tawaran balik', 'example' => 'They responded with a counteroffer of six months.'],
        ['word' => 'stakeholder', 'phonetic' => '/ˈsteɪkhəʊldə/', 'meaning' => 'pihak berkepentingan', 'example' => 'All key stakeholders were invited to the review.'],
        ['word' => 'meet halfway', 'phonetic' => '/miːt ˈhɑːfweɪ/', 'meaning' => 'bertemu di tengah; berkompromi', 'example' => 'Both parties finally met halfway on the price.'],
        ['word' => 'rhetorical question', 'phonetic' => '/rɪˈtɒrɪkl ˈkwestʃən/', 'meaning' => 'pertanyaan retoris yang tidak perlu dijawab', 'example' => 'She opened with a rhetorical question about waste.'],
        ['word' => 'value proposition', 'phonetic' => '/ˈvæljuː ˌprɒpəˈzɪʃn/', 'meaning' => 'janji manfaat utama sebuah produk atau usulan', 'example' => 'The value proposition must be clear in the first minute.'],
        ['word' => 'anticipate objections', 'phonetic' => '/ænˈtɪsɪpeɪt əbˈdʒekʃənz/', 'meaning' => 'mengantisipasi keberatan audiens', 'example' => 'Good speakers anticipate objections before the Q&A.'],
        ['word' => 'on balance', 'phonetic' => '/ɒn ˈbæləns/', 'meaning' => 'jika ditimbang secara keseluruhan', 'example' => 'On balance, the benefits outweigh the risks.'],
        ['word' => 'put forward a case', 'phonetic' => '/put ˈfɔːwəd ə keɪs/', 'meaning' => 'mengajukan argumen atau usulan', 'example' => 'She put forward a compelling case for change.'],
        ['word' => 'hold one\'s ground', 'phonetic' => '/həʊld wʌnz ɡraʊnd/', 'meaning' => 'bertahan pada posisi sendiri', 'example' => 'He held his ground despite repeated challenges.'],
        ['word' => 'compelling', 'phonetic' => '/kəmˈpelɪŋ/', 'meaning' => 'sangat meyakinkan dan menarik', 'example' => 'We need a more compelling reason to delay.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'speaking',
            'prompt' => 'Ungkapan mana yang paling tepat untuk <strong>membuka</strong> presentasi persuasif dengan pertanyaan retoris?',
            'options' => [
                'What if we could reduce waste without reducing quality?',
                'Let me start by introducing myself and my slides.',
                'Thank you all for being here today.',
                'Today I will present the quarterly figures.',
            ],
            'answer' => 0,
            'explanation' => 'Pertanyaan retoris tidak menuntut jawaban; ia menggugah audiens sekaligus memperkenalkan gagasan utama. Tiga opsi lain adalah sapaan dan penanda struktur biasa yang tidak memancing keterlibatan.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'speaking',
            'prompt' => 'Dalam negosiasi, ungkapan mana yang memberi konsesi tanpa menyerah pada posisi utama?',
            'options' => [
                'I accept your point about the deadline; however, the budget must remain unchanged.',
                'You are completely wrong about the deadline.',
                'Fine, we agree to everything you have asked for.',
                'Take it or leave it. We have no other option.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat pertama mengakui poin lawan dengan <em>I accept your point</em>, lalu mempertahankan posisi sendiri melalui <em>however</em>. Pilihan lain bersifat menyerang, menyerah total, atau ultimatum.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam negosiasi, ungkapan <strong>&ldquo;meet halfway&rdquo;</strong> berarti ...',
            'options' => [
                'kedua pihak berkompromi dan bertemu di titik tengah',
                'salah satu pihak menyerah sepenuhnya',
                'pertemuan dibatalkan',
                'keputusan ditunda ke pertemuan berikutnya',
            ],
            'answer' => 0,
            'explanation' => '<em>Meet halfway</em> adalah metafora: kedua pihak berjalan setengah jalan sehingga masing-masing mengalah sedikit. Menyerah total disebut <em>give in</em>, bukan <em>meet halfway</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'speaking',
            'prompt' => 'Pada sesi tanya jawab, respons mana yang paling profesional terhadap pertanyaan yang belum bisa dijawab saat itu juga?',
            'options' => [
                'That is a fair question. I do not have the figures with me, but I will follow up by email tomorrow.',
                'I do not know. Next question, please.',
                'You clearly did not listen to my presentation.',
                'That question is not relevant to today\'s topic.',
            ],
            'answer' => 0,
            'explanation' => 'Respons pertama mengakui pertanyaan, menjujur soal keterbatasan informasi, dan menawarkan tindak lanjut konkret. Opsi lain terdengar defensif, meremehkan, atau menghindar.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi ungkapan penutup presentasi:<br>&ldquo;The presentation should end with a clear call to ___.&rdquo;',
            'answer' => 'action',
            'accepted' => ['action'],
            'explanation' => '<em>Call to action</em> adalah ajakan tindakan yang spesifik, misalnya menyetujui anggaran atau mencoba produk; tanpa ajakan ini, presentasi berakhir tanpa arah.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'speaking',
            'prompt' => 'Lengkapi ungkapan memberi konsesi dalam negosiasi:<br>&ldquo;I ___ your point about the cost, but the quality standard cannot change.&rdquo;',
            'answer' => 'accept',
            'accepted' => ['accept', 'take'],
            'explanation' => 'Baku: <em>I accept your point</em> atau <em>I take your point</em>. Setelah konsesi, gunakan <em>but</em> atau <em>however</em> untuk menyampaikan posisi sendiri.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'speaking',
            'prompt' => 'Lengkapi ungkapan menunda jawaban pada sesi tanya jawab:<br>&ldquo;That is an interesting question &mdash; let me come ___ to that in a moment.&rdquo;',
            'answer' => 'back',
            'accepted' => ['back'],
            'explanation' => '<em>Let me come back to that</em> berarti &ldquo;izinkan saya kembali membahasnya nanti&rdquo;; frasa ini membeli waktu tanpa mengaku bingung dan menjaga alur presentasi.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'speaking',
            'prompt' => 'Dalam debat, menyerang pribadi lawan bicara (ad hominem) biasanya lebih meyakinkan daripada membantah argumennya.',
            'answer' => false,
            'explanation' => 'Serangan pribadi membuat pembicara kehilangan simpati dan kredibilitas audiens. Yang meyakinkan adalah membantah isi argumen dengan bukti, sekalipun penentangannya keras.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Pertanyaan retoris tidak dimaksudkan untuk dijawab, melainkan untuk menggugah pendengar.',
            'answer' => true,
            'explanation' => '<em>Rhetorical question</em> dipakai untuk memancing pemikiran audiens, bukan menuntut jawaban; contohnya pertanyaan pembuka tentang pemborosan biaya.',
        ],
        [
            'type' => 'matching',
            'skill' => 'speaking',
            'prompt' => 'Cocokkan situasi berbicara dengan ungkapan yang paling tepat.',
            'pairs' => [
                ['left' => 'Memberi konsesi', 'right' => 'I take your point, although the timeline is still tight.'],
                ['left' => 'Mengajukan tawaran balik', 'right' => 'Could we meet halfway on the delivery date?'],
                ['left' => 'Menolak halus', 'right' => 'I am afraid that is not workable for us.'],
                ['left' => 'Menunda jawaban', 'right' => 'Let me come back to that in a moment.'],
                ['left' => 'Menutup dengan ajakan', 'right' => 'So I would recommend approving the proposal today.'],
            ],
            'explanation' => 'Setiap situasi punya fungsi bahasa yang khas: konsesi membangun kepercayaan, tawaran balik menjaga kepentingan sendiri, dan penolakan halus menjaga hubungan baik.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'On balance, I would support the proposal, provided that the training budget is protected.',
            'prompt' => 'Dengarkan audio. Apa posisi penutur terhadap proposal?',
            'options' => [
                'Mendukung dengan syarat anggaran pelatihan tetap dilindungi',
                'Menolak proposal tersebut sepenuhnya',
                'Mendukung tanpa syarat apa pun',
                'Masih ragu dan tidak memberikan pendapat',
            ],
            'answer' => 0,
            'explanation' => '<em>On balance ... support</em> menunjukkan dukungan setelah menimbang, sedangkan <em>provided that</em> memperkenalkan syarat wajib: anggaran pelatihan harus tetap aman.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Colleagues often ask why we should rethink the review process. Admittedly, the current system is familiar, and familiarity is comfortable. But comfort is not the same as effectiveness. In the past year, 40 per cent of reviewers missed deadlines, and two projects were delayed as a result. We are not asking for a revolution &mdash; only for a lighter, clearer process that people will actually complete.</p></div><p>Strategi persuasi utama penulis dalam teks tersebut adalah ...</p>',
            'options' => [
                'mengakui keberatan lebih dulu, membantahnya dengan bukti, lalu menawarkan solusi yang tidak radikal',
                'menyerang kemampuan rekan kerja yang tidak menepati tenggat',
                'menjanjikan perubahan besar dalam waktu singkat',
                'menggunakan ancaman agar semua pihak patuh',
            ],
            'answer' => 0,
            'explanation' => 'Penulis membuka dengan konsesi (<em>Admittedly, the current system is familiar</em>), membalik dengan bukti angka, lalu meredam ketakutan akan perubahan besar (<em>not asking for a revolution</em>).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Buka presentasi persuasifmu dengan kalimat pembuka yang memuat masalah nyata dan pertanyaan retoris.',
            'target' => 'Our department spends millions of rupiah on printing every year, so what if we could cut that in half?',
            'hint' => 'Arti: Departemen kami menghabiskan jutaan rupiah untuk cetak setiap tahun, jadi bagaimana jika kita bisa memangkasnya setengah?',
            'explanation' => 'Hook yang efektif memuat angka konkret lalu ditutup pertanyaan retoris; keduanya membuat audiens langsung terlibat sebelum argumen disampaikan.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ajukan tawaran balik dalam negosiasi dengan struktur <em>If you can ..., we could ...</em>.',
            'target' => 'If you can deliver a month earlier, we could stretch the payment over six months.',
            'hint' => 'Arti: Jika Anda bisa mengirim sebulan lebih awal, kami bisa memperpanjang pembayaran selama enam bulan.',
            'explanation' => 'Tawaran balik yang baik selalu bersyarat dan timbal balik: konsesi pada satu pihak dikaitkan dengan imbalan bagi pihak lain, sehingga negosiasi tetap seimbang.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Bantah argumen lawan secara diplomatis dengan mengakui poinnya terlebih dahulu.',
            'target' => 'I see your point about the cost, but the long-term savings outweigh the initial investment.',
            'hint' => 'Arti: Saya memahami soal biaya, tetapi penghematan jangka panjang lebih besar daripada investasi awal.',
            'explanation' => 'Pola <em>I see your point ... but ...</em> menjaga hubungan baik: lawan bicara merasa didengar, sementara posisimu tetap disampaikan dengan tegas.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Tanggapi pertanyaan sulit pada sesi tanya jawab dengan membuka jawabanmu secara profesional.',
            'target' => 'That is a good question. Let me address it with the figures from the last quarter.',
            'hint' => 'Arti: Pertanyaan yang bagus. Izinkan saya menjawabnya dengan angka dari kuartal terakhir.',
            'explanation' => 'Membuka dengan apresiasi atas pertanyaan memberi waktu berpikir sekaligus menunjukkan kesiapan; disusul bukti spesifik agar jawaban terasa meyakinkan.',
        ],
    ],
];
