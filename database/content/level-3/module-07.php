<?php

/**
 * Level 3 — Modul 07: Discourse & Cohesion
 *
 * Koherensi, penekanan, dan transisi argumen (C1–C2).
 * Format konten dan tipe soal mengikuti file referensi level-1/module-01.
 */
return [
    'title' => 'Discourse & Cohesion',
    'slug' => 'discourse-cohesion',
    'subtitle' => 'Koherensi, penekanan, dan transisi argumen',
    'summary' => 'Menghubungkan kalimat dan paragraf dengan transisi yang tepat, menekankan poin penting, serta menjaga alur argumen tetap logis dan mudah diikuti.',
    'icon' => '🔗',
    'objectives' => [
        'Membedakan kohesi gramatikal dari koherensi makna',
        'Memilih discourse marker sesuai fungsi kalimat',
        'Menekankan informasi penting dengan struktur penekanan',
        'Menyusun paragraf yang runtut dan bebas dari referensi kabur',
    ],
    'sections' => [
        [
            'heading' => 'Koherensi vs Kohesi',
            'body' => '<p><strong>Kohesi</strong> adalah perekat bahasa yang menghubungkan kalimat: kata ganti, konjungsi, dan pengulangan kata kunci. <strong>Koherensi</strong> adalah keterbacaan makna: apakah gagasan mengalir logis dan mudah diikuti pembaca.</p>
<p>Sebuah teks bisa sangat kohesif tetapi tetap sulit dipahami jika urutan idenya tidak logis. Sebaliknya, teks tetap koheren meski kalimatnya panjang, asalkan gagasannya tersusun runtut.</p>
<ul>
<li>Kohesi gramatikal: <em>this, such, which, nevertheless, therefore</em>.</li>
<li>Kohesi leksikal: pengulangan sinonim, kolokasi, dan kata kerja penghubung.</li>
<li>Koherensi: urutan ide, kesesuaian bukti, dan konsistensi sudut pandang.</li>
</ul>',
            'examples' => [
                ['en' => 'The budget was cut. Nevertheless, the team delivered the project on time.', 'id' => 'Anggaran dipangkas. Meski demikian, tim tetap menyelesaikan proyek tepat waktu.'],
                ['en' => 'This approach has one drawback: it requires extensive data.', 'id' => 'Pendekatan ini memiliki satu kelemahan: ia membutuhkan data yang luas.'],
                ['en' => 'Such delays undermine client confidence.', 'id' => 'Keterlambatan seperti itu mengikis kepercayaan klien.'],
            ],
        ],
        [
            'heading' => 'Transisi dan Discourse Markers',
            'body' => '<p><em>Discourse marker</em> adalah penanda arah yang memberi tahu pembaca hubungan antar kalimat. Pemilihan marker yang salah membuat argumen terdengar melompat-lompat.</p>
<table>
<thead><tr><th>Fungsi</th><th>Pilihan ungkapan</th></tr></thead>
<tbody>
<tr><td>Menambah argumen</td><td>moreover, in addition, what is more</td></tr>
<tr><td>Kontras / pengecualian</td><td>nevertheless, however, by contrast, that said</td></tr>
<tr><td>Sebab dan akibat</td><td>consequently, as a result, thus</td></tr>
<tr><td>Contoh</td><td>for instance, to illustrate</td></tr>
<tr><td>Konsesi</td><td>admittedly, granted</td></tr>
<tr><td>Penutup</td><td>ultimately, in conclusion, to sum up</td></tr>
</tbody>
</table>
<p>Perhatikan tanda baca: <em>however</em>, <em>nevertheless</em>, dan <em>consequently</em> yang memulai kalimat baru biasanya diikuti <strong>koma</strong>.</p>',
            'examples' => [
                ['en' => 'The plan is inexpensive; moreover, it is easy to implement.', 'id' => 'Rencana itu murah; selain itu, mudah diterapkan.'],
                ['en' => 'The server crashed; consequently, half an hour of work was lost.', 'id' => 'Server mati; akibatnya, setengah jam pekerjaan hilang.'],
                ['en' => 'Admittedly, the sample was small, but the pattern is consistent.', 'id' => 'Memang sampelnya kecil, tetapi polanya konsisten.'],
            ],
        ],
        [
            'heading' => 'Penekanan dalam Wacana (Emphasis)',
            'body' => '<p>Penekanan menempatkan informasi paling penting di posisi terkuat kalimat, yaitu <strong>awal</strong> kalimat. Tiga struktur yang paling sering dipakai pada level C1:</p>
<ol>
<li><strong>Cleft sentence</strong>: <em>It is/was ... that/who ...</em> &mdash; menyoroti satu unsur kalimat.</li>
<li><strong>Wh-cleft</strong>: <em>What ... is/was ...</em> &mdash; memperjelas topik yang dibahas.</li>
<li><strong>Fronting + inversion</strong>: penanda negatif atau keterbatasan di awal, misalnya <em>Not only ... but also ...</em> dan <em>Only + keterangan waktu</em>, yang diikuti inversi bantu kata kerja.</li>
</ol>
<p>Gunakan struktur ini hanya pada poin yang memang ingin ditekankan; penekanan berlebihan membuat tulisan terasa dramatis dan kehilangan bobot.</p>',
            'examples' => [
                ['en' => 'It was the manager who approved the revised timeline.', 'id' => 'Yang menyetujui jadwal revisi itu adalah manajer.'],
                ['en' => 'What matters most is the accuracy of the data.', 'id' => 'Yang paling penting adalah keakuratan data itu.'],
                ['en' => 'Not only did the costs rise, but the timeline also slipped.', 'id' => 'Biaya tidak hanya naik, tetapi jadwal pun meleset.'],
                ['en' => 'Only after the audit did we discover the error.', 'id' => 'Baru setelah audit kami menemukan kesalahan itu.'],
            ],
        ],
        [
            'heading' => 'Struktur Paragraf dan Alur Argumen',
            'body' => '<p>Paragraf yang koheren dimulai dengan <strong>topic sentence</strong> yang memuat ide utama, dilanjutkan kalimat pengembang (bukti, contoh, penjelasan), lalu ditutup kalimat yang mengaitkan paragraf berikutnya.</p>
<ul>
<li>Prinsip <em>given&ndash;new</em>: informasi lama (given) mendahului informasi baru (new) agar pembaca tidak kehilangan jejak.</li>
<li><em>Signposting</em>: penanda arah seperti <em>firstly, more importantly, to conclude</em> yang memetakan struktur tulisan.</li>
<li>Hindari <em>topic drift</em>: satu paragraf hanya membahas satu gagasan utama.</li>
</ul>',
            'examples' => [
                ['en' => 'Firstly, the survey was too short to capture seasonal effects.', 'id' => 'Pertama, survei terlalu pendek untuk menangkap efek musiman.'],
                ['en' => 'More importantly, the results apply only to urban schools.', 'id' => 'Lebih penting lagi, hasilnya hanya berlaku untuk sekolah perkotaan.'],
                ['en' => 'To conclude, the evidence supports a cautious expansion.', 'id' => 'Sebagai penutup, bukti-bukti mendukung perluasan yang hati-hati.'],
            ],
        ],
        [
            'heading' => 'Kesalahan Kohesi yang Sering Terjadi',
            'body' => '<p>Empat kesalahan berikut membuat tulisan terasa tidak nyambung meski grammar setiap kalimat benar:</p>
<ol>
<li><strong>Referensi kabur</strong>: kata ganti <em>this</em> atau <em>that</em> yang tidak jelas merujuk pada apa &mdash; perjelas dengan <em>this delay</em> atau <em>that proposal</em>.</li>
<li><strong>Transisi keliru</strong>: memakai <em>however</em> untuk menyebabkan, atau <em>therefore</em> untuk kontras.</li>
<li><strong>Pengulangan kosong</strong>: mengulang kalimat sebelumnya tanpa menambahkan informasi baru.</li>
<li><strong>Urutan ide terbalik</strong>: menyimpulkan sebelum argumen dan bukti disampaikan.</li>
</ol>',
            'examples' => [
                ['en' => 'Instead of &ldquo;This caused delays,&rdquo; write &ldquo;This shortage caused delays.&rdquo;', 'id' => 'Alih-alih &ldquo;Hal ini menyebabkan keterlambatan&rdquo;, tulis &ldquo;Kelangkaan ini menyebabkan keterlambatan.&rdquo;'],
                ['en' => 'Sales fell sharply; as a result, the company froze hiring.', 'id' => 'Penjualan turun tajam; akibatnya, perusahaan membekukan perekrutan.'],
                ['en' => 'The proposal has merit; nevertheless, the cost remains a concern.', 'id' => 'Proposal itu layak; namun demikian, biayanya tetap menjadi masalah.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'nevertheless', 'phonetic' => '/ˌnevəðəˈles/', 'meaning' => 'meski demikian', 'example' => 'The task was difficult; nevertheless, we finished it early.'],
        ['word' => 'moreover', 'phonetic' => '/mɔːrˈəʊvə/', 'meaning' => 'selain itu / lebih lanjut', 'example' => 'The plan is cheap; moreover, it is easy to implement.'],
        ['word' => 'that said', 'phonetic' => '/ðæt sed/', 'meaning' => 'dengan demikian / meski demikian', 'example' => 'The results are promising. That said, more research is needed.'],
        ['word' => 'consequently', 'phonetic' => '/ˈkɒnsɪkwəntli/', 'meaning' => 'akibatnya', 'example' => 'The server crashed; consequently, all pending orders were lost.'],
        ['word' => 'to illustrate', 'phonetic' => '/tuː ˈɪstrəsteɪt/', 'meaning' => 'untuk mengilustrasikan', 'example' => 'Several cases illustrate this trend.'],
        ['word' => 'admittedly', 'phonetic' => '/ədˈmɪtɪdli/', 'meaning' => 'memang (mengakui keterbatasan)', 'example' => 'Admittedly, the sample size was small.'],
        ['word' => 'topic sentence', 'phonetic' => '/ˈtɒpɪk ˈsentəns/', 'meaning' => 'kalimat utama pembuka paragraf', 'example' => 'Every paragraph should open with a clear topic sentence.'],
        ['word' => 'cohesion', 'phonetic' => '/kəʊˈhiːʒn/', 'meaning' => 'kohesi; kaitan antarbagian teks', 'example' => 'Pronouns and linking words create cohesion.'],
        ['word' => 'cleft sentence', 'phonetic' => '/kleft ˈsentəns/', 'meaning' => 'kalimat belah untuk penekanan', 'example' => 'A cleft sentence highlights one element of the clause.'],
        ['word' => 'by contrast', 'phonetic' => '/baɪ ˈkɒntrɑːst/', 'meaning' => 'sebaliknya / sebagai perbandingan', 'example' => 'Sales rose in the north; by contrast, they fell in the south.'],
        ['word' => 'thus', 'phonetic' => '/ðʌs/', 'meaning' => 'dengan demikian', 'example' => 'The evidence was weak; thus, the claim was rejected.'],
        ['word' => 'signpost', 'phonetic' => '/ˈsaɪnpəʊst/', 'meaning' => 'penanda arah wacana', 'example' => 'Writers signpost their argument with linking phrases.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Pilih ungkapan yang paling tepat untuk menghubungkan dua kalimat berikut:<br>&ldquo;The first method is faster. ___, it is less accurate.&rdquo;',
            'options' => ['Nevertheless', 'For instance', 'As a result', 'To illustrate'],
            'answer' => 0,
            'explanation' => 'Kalimat kedua memuat penilaian yang berlawanan dengan kalimat pertama, sehingga diperlukan penanda kontras seperti <em>nevertheless</em>. <em>For instance</em> dan <em>to illustrate</em> untuk contoh, <em>as a result</em> untuk akibat.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih kalimat yang benar secara grammar.',
            'options' => [
                'Only after the results were verified the team published the paper.',
                'Only after the results were verified did the team publish the paper.',
                'Only after the results were verified the team did publish the paper.',
                'Only after the results were verified did publish the team the paper.',
            ],
            'answer' => 1,
            'explanation' => 'Apabila klausa <em>only + keterangan waktu</em> diletakkan di awal kalimat, klausa utama harus memakai <strong>inversion</strong>: bantu kata kerja (<em>did</em>) mendahului subjek (<em>the team</em>).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi ungkapan yang berarti &ldquo;meski demikian&rdquo;:<br>&ldquo;The data are limited; ___, the trend is clear.&rdquo;',
            'answer' => 'Nevertheless',
            'accepted' => ['nevertheless', 'however', 'nonetheless'],
            'explanation' => 'Kalimat kedua bertentangan dengan keterbatasan pada kalimat pertama, sehingga diperlukan penanda kontras. <em>Nevertheless</em>, <em>however</em>, dan <em>nonetheless</em> sama-sama tepat; <em>consequently</em> tidak karena menandakan akibat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Kalimat mana yang paling efektif sebagai <em>topic sentence</em> paragraf tentang dampak kerja jarak jauh?',
            'options' => [
                'Remote work improves productivity, but it can weaken team cohesion.',
                'Remote work has existed for many years and is used by many companies.',
                'In this paragraph, I will discuss remote work.',
                'There are many opinions about remote work, and everyone has their own experience.',
            ],
            'answer' => 0,
            'explanation' => '<em>Topic sentence</em> yang efektif memuat gagasan utama yang bisa didukung dan dibantah. Opsi lain hanya berisi fakta umum, penanda struktur, atau pernyataan terlalu kabur untuk dijadikan dasar paragraf.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi penanda contoh berikut:<br>&ldquo;Several cases illustrate this trend; ___, the 2021 drought destroyed half the harvest.&rdquo;',
            'answer' => 'for instance',
            'accepted' => ['for instance', 'for example'],
            'explanation' => 'Kalimat kedua adalah contoh konkret dari tren yang disebutkan kalimat pertama, sehingga dibuka dengan <em>for instance</em> atau <em>for example</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi struktur penekanan berikut:<br>&ldquo;Only when the data had been double-checked ___ the team publish the results.&rdquo;',
            'answer' => 'did',
            'accepted' => ['did'],
            'explanation' => '<em>Only + keterangan waktu</em> di awal kalimat memerlukan inversion, sehingga bantu kata kerja <em>did</em> mendahului subjek <em>the team</em>, dan kata kerja utama kembali ke bentuk dasar <em>publish</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi penanda sebab-akibat berikut:<br>&ldquo;The data are inconclusive; ___, further research is needed.&rdquo;',
            'answer' => 'therefore',
            'accepted' => ['therefore', 'thus', 'consequently', 'hence'],
            'explanation' => 'Kalimat kedua merupakan kesimpulan logis dari kalimat pertama, sehingga diperlukan penanda akibat seperti <em>therefore</em>, <em>thus</em>, <em>consequently</em>, atau <em>hence</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam tulisan akademik, kata <em>&ldquo;however&rdquo;</em> dipakai untuk menunjukkan kontras, sedangkan <em>&ldquo;therefore&rdquo;</em> dipakai untuk menunjukkan akibat.',
            'answer' => true,
            'explanation' => '<em>However</em> menandai kontras atau pengecualian, sedangkan <em>therefore</em> menandai hasil logis. Menukar keduanya membuat alasan-akibat dalam argumen jadi terbalik.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat &ldquo;What the committee overlooked was the impact on junior staff&rdquo; merupakan contoh <em>wh-cleft</em> yang menekankan dampak terhadap staf junior.',
            'answer' => true,
            'explanation' => 'Struktur <em>What ... was ...</em> adalah wh-cleft: bagian setelah <em>was</em> menjadi informasi yang ditekankan, yaitu dampak terhadap staf junior.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan penanda wacana di sebelah kiri dengan fungsinya.',
            'pairs' => [
                ['left' => 'moreover', 'right' => 'menambahkan argumen sejajar'],
                ['left' => 'nevertheless', 'right' => 'memperkenalkan kontras atau pengecualian'],
                ['left' => 'for instance', 'right' => 'memberikan contoh'],
                ['left' => 'consequently', 'right' => 'menunjukkan akibat'],
                ['left' => 'in conclusion', 'right' => 'menandakan penutup tulisan'],
            ],
            'explanation' => 'Fungsi menentukan pilihan penanda. Menggunakan penanda yang salah membuat hubungan antar kalimat terbaca keliru meski isi kalimatnya benar.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The results were promising; that said, the sample size was too small to be conclusive.',
            'prompt' => 'Dengarkan audio. Apa fungsi ungkapan <em>&ldquo;that said&rdquo;</em> dalam kalimat tersebut?',
            'options' => [
                'Mengakui batasan lalu menimbang hasil secara seimbang',
                'Menambahkan bukti baru yang menguatkan hasil',
                'Menutup presentasi dengan kesimpulan',
                'Memberikan satu contoh kasus',
            ],
            'answer' => 0,
            'explanation' => '<em>That said</em> membalik arah pembicaraan setelah pujian: hasil memang menjanjikan, tetapi sampelnya terlalu kecil. Fungsinya mengakui poin berlawanan sebelum memberi penilaian akhir.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>In 2019, the city introduced a congestion charge. Traffic in the centre fell by twelve per cent within a year. The policy was not without its critics: shopkeepers argued that footfall had declined. What the debate often overlooked, however, was that bus ridership rose over the same period. Only after a second survey did officials concede that some of the lost shoppers had simply shifted their trips to other districts.</p></div><p>Berdasarkan teks, pernyataan yang paling tepat tentang kebijakan tarif kemacetan adalah ...</p>',
            'options' => [
                'Kenaikan penumpang bus menunjukkan perpindahan moda transportasi, sementara sebagian pengunjung berpindah ke distrik lain.',
                'Kebijakan tersebut sepenuhnya menghilangkan kemacetan di pusat kota.',
                'Toko-toko di pusat kota mengalami kenaikan penjualan sebesar dua belas persen.',
                'Survei kedua membuktikan bahwa kritik para pedagang sama sekali tidak beralasan.',
            ],
            'answer' => 0,
            'explanation' => 'Teks menyebutkan dua hal sekaligus: <em>bus ridership rose</em> (perpindahan moda) dan sebagian pembeli <em>shifted their trips to other districts</em> (perpindahan lokasi). Karena itu kesimpulan pertama adalah satu-satunya yang seluruhnya didukung teks.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Tekankan bahwa kesalahan kecil berdampak besar dengan menggunakan cleft sentence.',
            'target' => 'It was a minor error in the data that undermined the whole report.',
            'hint' => 'Arti: Justru kesalahan kecil pada data itulah yang merusak keseluruhan laporan.',
            'explanation' => 'Struktur <em>It was ... that ...</em> menempatkan penyebab utama di posisi paling menonjol sehingga pendengar langsung menangkap poinmu.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Kalimat mana yang hubungan sebab-akibatnya paling koheren?',
            'options' => [
                'The system crashed repeatedly; as a result, we lost half an hour of work.',
                'The system crashed repeatedly; for instance, we lost half an hour of work.',
                'The system crashed repeatedly; by contrast, we lost half an hour of work.',
                'The system crashed repeatedly; to illustrate, we lost half an hour of work.',
            ],
            'answer' => 0,
            'explanation' => 'Kehilangan pekerjaan adalah akibat langsung dari sistem yang sering mati, sehingga penanda yang tepat adalah <em>as a result</em>. <em>For instance</em> dan <em>to illustrate</em> menandai contoh, sedangkan <em>by contrast</em> menandai perbandingan.',
        ],
    ],
];
