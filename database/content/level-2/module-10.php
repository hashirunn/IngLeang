<?php

/**
 * Level 2 — Modul 10: Linking Words
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
    'title' => 'Linking Words',
    'slug' => 'linking-words',
    'subtitle' => 'Although, however, therefore, whereas, in addition, on the other hand',
    'summary' => 'Belajar kata penghubung untuk menyatakan pertentangan, kontras, hasil, sebab, dan penambahan, termasuk aturan tanda bacanya.',
    'icon' => '🧵',
    'objectives' => [
        'Memilih linking words sesuai hubungan makna antar kalimat',
        'Membedakan kata sambung dan kata keterangan hubungan',
        'Menggunakan tanda baca yang benar untuk however dan therefore',
        'Menyusun paragraf yang runtut dengan penambahan dan contoh',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Linking Words?',
            'body' => '<p><strong>Linking words</strong> (kata penghubung) menghubungkan gagasan dan menunjukkan hubungan antar kalimat: pertentangan, hasil, sebab, penambahan, dan contoh.</p>
<ul>
<li><strong>Kata sambung</strong> (<em>although, because, since, while, whereas</em>) menggabungkan dua klausa dalam satu kalimat: <em>Although it was cold, we went out.</em></li>
<li><strong>Kata keterangan hubungan</strong> (<em>however, therefore, moreover</em>) berdiri di awal kalimat dan memerlukan tanda baca yang tepat.</li>
</ul>
<table>
<thead><tr><th>Kata</th><th>Posisi dan Tanda Baca</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>although</td><td>awal klausa, diikuti subjek + kata kerja</td><td>Although he was tired, he finished the work.</td></tr>
<tr><td>however</td><td>awal kalimat baru + koma</td><td>He was tired. However, he finished the work.</td></tr>
<tr><td>in addition</td><td>awal kalimat + koma</td><td>The course is free. In addition, it is online.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'Although it was cold, we went out.', 'id' => 'Meskipun cuaca dingin, kami tetap keluar rumah.'],
                ['en' => 'The hotel was expensive. However, the service was excellent.', 'id' => 'Hotel itu mahal. Namun, pelayanannya luar biasa.'],
                ['en' => 'The course is free. In addition, it is available online.', 'id' => 'Kursus itu gratis. Selain itu, tersedia secara daring.'],
            ],
        ],
        [
            'heading' => 'Pertentangan: Although, Though, Despite',
            'body' => '<p><strong>Although, though,</strong> dan <strong>even though</strong> diikuti <strong>klausa penuh (subjek + kata kerja)</strong>, sedangkan <strong>despite</strong> dan <strong>in spite of</strong> diikuti <strong>kata benda atau gerund</strong>.</p>
<table>
<thead><tr><th>Although + klausa</th><th>Despite + noun/gerund</th></tr></thead>
<tbody>
<tr><td>Although he was tired, he kept working.</td><td>Despite being tired, he kept working.</td></tr>
<tr><td>Although it rained, we went hiking.</td><td>Despite the rain, we went hiking.</td></tr>
</tbody>
</table>
<ul>
<li><em>Though</em> lebih informal dan bisa berada di akhir kalimat: <em>It was expensive, though.</em></li>
<li><em>Even though</em> menekankan pertentangan yang kuat: <em>Even though she was nervous, she spoke clearly.</em></li>
<li><em>Nevertheless</em> berarti &ldquo;meski demikian&rdquo; dan diletakkan di awal kalimat: <em>The task was hard; nevertheless, she finished it.</em></li>
</ul>',
            'examples' => [
                ['en' => 'Although he was tired, he kept working.', 'id' => 'Meskipun dia lelah, dia terus bekerja.'],
                ['en' => 'Despite the rain, we went hiking.', 'id' => 'Meskipun hujan, kami tetap mendaki.'],
                ['en' => 'Even though she was nervous, she spoke clearly.', 'id' => 'Walaupun dia gugup, dia berbicara dengan jelas.'],
                ['en' => 'The task was hard; nevertheless, she finished it.', 'id' => 'Tugas itu sulit; namun demikian, dia menyelesaikannya.'],
            ],
        ],
        [
            'heading' => 'Kontras: Whereas, On the Other Hand, In Contrast',
            'body' => '<p><strong>Whereas</strong> membandingkan dua fakta dalam satu kalimat, sedangkan <strong>on the other hand</strong> dan <strong>in contrast</strong> memperkenalkan sudut pandang yang berbeda pada kalimat baru.</p>
<ul>
<li><em>He likes tea, whereas she prefers coffee.</em> (Dia suka teh, sedangkan dia lebih suka kopi.)</li>
<li><em>City life offers many opportunities. On the other hand, it can be stressful.</em></li>
<li><em>Prices in the city centre are high. In contrast, the suburbs are more affordable.</em></li>
</ul>
<p>Ungkapan <em>on the one hand &hellip; on the other hand &hellip;</em> dipasangkan untuk menampilkan dua sisi sebuah persoalan.</p>',
            'examples' => [
                ['en' => 'He likes tea, whereas she prefers coffee.', 'id' => 'Dia suka teh, sedangkan dia lebih suka kopi.'],
                ['en' => 'City life offers many opportunities. On the other hand, it can be stressful.', 'id' => 'Kehidupan kota menawarkan banyak peluang. Di sisi lain, kehidupan itu bisa menegangkan.'],
                ['en' => 'Prices in the city centre are high. In contrast, the suburbs are more affordable.', 'id' => 'Harga di pusat kota mahal. Sebaliknya, kawasan pinggiran lebih terjangkau.'],
            ],
        ],
        [
            'heading' => 'Hasil dan Sebab: Therefore, As a Result, Because',
            'body' => '<p><strong>Therefore, thus,</strong> dan <strong>consequently</strong> menunjukkan <strong>hasil</strong>; <strong>as a result</strong> dipakai di awal kalimat; sedangkan <strong>because, since,</strong> dan <strong>as</strong> menunjukkan <strong>sebab</strong>.</p>
<ul>
<li><em>The road was flooded; therefore, we arrived late.</em> (Jalan terendam; karenanya, kami tiba terlambat.)</li>
<li><em>He did not study. As a result, he failed the test.</em></li>
<li><em>Because the traffic was heavy, we missed the train.</em></li>
<li><em>So</em> lebih informal dan sangat umum dalam percakapan sehari-hari.</li>
</ul>
<p>Hindari menumpuk dua penghubung hasil dalam satu klausa, misalnya <em>so therefore</em>.</p>',
            'examples' => [
                ['en' => 'The road was flooded; therefore, we arrived late.', 'id' => 'Jalan itu terendam; karenanya, kami tiba terlambat.'],
                ['en' => 'He did not study. As a result, he failed the test.', 'id' => 'Dia tidak belajar. Akibatnya, dia gagal dalam tes itu.'],
                ['en' => 'Because the traffic was heavy, we missed the train.', 'id' => 'Karena lalu lintas padat, kami ketinggalan kereta.'],
                ['en' => 'The box was heavy, so we asked for help.', 'id' => 'Kotak itu berat, jadi kami meminta tolong.'],
            ],
        ],
        [
            'heading' => 'Penambahan dan Contoh: In Addition, Moreover, For Example',
            'body' => '<p><strong>In addition, moreover,</strong> dan <strong>besides</strong> menambahkan argumen yang sejalan, sedangkan <strong>for example</strong> dan <strong>for instance</strong> memberi contoh.</p>
<ul>
<li><em>English improves your career. In addition, it broadens your mind.</em></li>
<li><em>The plan is cheap. Moreover, it is easy to carry out.</em></li>
<li><em>Some fruits, for example apples and bananas, are rich in vitamin C.</em></li>
<li><em>Besides</em> sering berarti &ldquo;selain itu&rdquo; dan umum dipakai di awal kalimat informal.</li>
</ul>
<p>Urutkan gagasan dengan <em>first, second, finally</em> agar tulisan lebih runtut dan mudah diikuti pembaca.</p>',
            'examples' => [
                ['en' => 'English improves your career. In addition, it broadens your mind.', 'id' => 'Bahasa Inggris meningkatkan kariermu. Selain itu, memperluas wawasanmu.'],
                ['en' => 'The plan is cheap. Moreover, it is easy to carry out.', 'id' => 'Rencana itu murah. Lebih lagi, rencana itu mudah dilaksanakan.'],
                ['en' => 'Some fruits, for example apples and bananas, are rich in vitamin C.', 'id' => 'Beberapa buah, misalnya apel dan pisang, kaya akan vitamin C.'],
                ['en' => 'First, gather the data. Finally, write the summary.', 'id' => 'Pertama, kumpulkan datanya. Terakhir, tulis ringkasannya.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'although', 'phonetic' => '/ɔːlˈðoʊ/', 'meaning' => 'meskipun', 'example' => 'Although it was late, we continued.'],
        ['word' => 'however', 'phonetic' => '/haʊˈevər/', 'meaning' => 'namun', 'example' => 'It was expensive; however, we bought it.'],
        ['word' => 'therefore', 'phonetic' => '/ˈðerfɔːr/', 'meaning' => 'karenanya', 'example' => 'He was ill; therefore, he stayed home.'],
        ['word' => 'whereas', 'phonetic' => '/werˈæz/', 'meaning' => 'sedangkan', 'example' => 'He likes tea, whereas she prefers coffee.'],
        ['word' => 'in addition', 'phonetic' => '/ɪn əˈdɪʃn/', 'meaning' => 'selain itu', 'example' => 'In addition, the course is free.'],
        ['word' => 'on the other hand', 'phonetic' => '/ɒn ði ˈʌðər hænd/', 'meaning' => 'di sisi lain', 'example' => 'On the other hand, city life can be stressful.'],
        ['word' => 'nevertheless', 'phonetic' => '/ˌnevəðəˈles/', 'meaning' => 'namun demikian', 'example' => 'The task was hard; nevertheless, she finished it.'],
        ['word' => 'consequently', 'phonetic' => '/ˈkɒnsɪkwəntli/', 'meaning' => 'akibatnya', 'example' => 'He missed the bus; consequently, he was late.'],
        ['word' => 'meanwhile', 'phonetic' => '/ˈmiːnwaɪl/', 'meaning' => 'sementara itu', 'example' => 'Meanwhile, the team prepared the slides.'],
        ['word' => 'as a result', 'phonetic' => '/əz ə ˈrʌzʌlt/', 'meaning' => 'sebagai hasilnya', 'example' => 'It rained heavily; as a result, the road flooded.'],
        ['word' => 'for example', 'phonetic' => '/fɔːr ɪɡˈzɑːmpl/', 'meaning' => 'sebagai contoh', 'example' => 'Some students, for example Rina, study at night.'],
        ['word' => 'despite', 'phonetic' => '/dɪˈspaɪt/', 'meaning' => 'meskipun (diikuti kata benda)', 'example' => 'Despite the rain, we went out.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih kata penghubung yang tepat:<br><strong>&ldquo;___ he was tired, he finished the report on time.&rdquo;</strong>',
            'options' => ['However', 'Although', 'Therefore', 'In addition'],
            'answer' => 1,
            'explanation' => '<em>Although</em> adalah kata sambung yang diikuti klausa penuh (subjek + kata kerja) seperti <em>he was tired</em>. <em>However</em> tidak menggabungkan klausa secara langsung.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut:<br><strong>&ldquo;The hotel was expensive. ___, the service was excellent.&rdquo;</strong>',
            'options' => ['However', 'Because', 'Therefore', 'Unless'],
            'answer' => 0,
            'explanation' => 'Kalimat kedua berisi penyeimbang (mahal vs pelayanan bagus), sehingga dipakai <em>however</em> yang diawali titik dan diikuti koma.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut:<br><strong>&ldquo;___ being exhausted, she continued working.&rdquo;</strong>',
            'options' => ['Although', 'Despite', 'However', 'So'],
            'answer' => 1,
            'explanation' => '<em>Despite</em> diikuti kata benda atau gerund, sehingga tepat untuk <em>being exhausted</em>. <em>Although</em> memerlukan klausa penuh: <em>Although she was exhausted</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Frasa <strong>&ldquo;on the other hand&rdquo;</strong> biasanya digunakan untuk&hellip;',
            'options' => ['menambahkan argumen sejalan', 'menunjukkan perbandingan atau sudut yang berbeda', 'menyebabkan hasil', 'menutup percakapan'],
            'answer' => 1,
            'explanation' => '<em>On the other hand</em> berarti &ldquo;di sisi lain&rdquo; dan dipakai untuk menampilkan sudut pandang yang berbeda.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Living in a big city has both advantages and disadvantages. On the one hand, cities offer better jobs and entertainment. On the other hand, the cost of living is much higher. In addition, traffic can be stressful. Therefore, people should think carefully before moving.</p></div><p>Kata penghubung apa yang dipakai penulis untuk menunjukkan hasil atau simpulan?</p>',
            'options' => ['On the other hand', 'In addition', 'Therefore', 'On the one hand'],
            'answer' => 2,
            'explanation' => 'Kalimat terakhir berisi simpulan yang merupakan akibat dari poin-poin sebelumnya, diperkenalkan oleh <em>therefore</em> (karenanya).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan kata penghubung yang tepat:<br><strong>&ldquo;___ he was tired, he kept working.&rdquo;</strong>',
            'answer' => 'Although',
            'accepted' => ['although', 'even though', 'though'],
            'explanation' => '<em>Although/though/even though</em> diikuti klausa penuh (<em>he was tired</em>) untuk menyatakan pertentangan.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan kata penghubung yang tepat:<br><strong>&ldquo;Cities are usually crowded, ___ villages are quiet.&rdquo;</strong>',
            'answer' => 'whereas',
            'accepted' => ['whereas', 'while'],
            'explanation' => '<em>Whereas</em> (dan <em>while</em>) membandingkan dua fakta berlawanan dalam satu kalimat.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Gabungkan gagasan berikut dengan kata &ldquo;in addition&rdquo;: &ldquo;English improves my career opportunities. It broadens my mind.&rdquo;<br>___ , it broadens my mind.',
            'answer' => 'In addition',
            'accepted' => ['in addition', 'moreover', 'besides'],
            'explanation' => '<em>In addition</em> menambahkan gagasan yang sejalan; sebagai penghubung di awal kalimat, ia ditulis kapital dan diikuti koma.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => '<strong>Although</strong> adalah kata sambung yang selalu diikuti klausa penuh (subjek + kata kerja).',
            'answer' => true,
            'explanation' => '<em>Although</em> menggabungkan dua klausa, misalnya <em>Although it rained, we went out</em>. Jika hanya diikuti kata benda, gunakan <em>despite</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => '<strong>Therefore</strong> menunjukkan pertentangan, sedangkan <strong>however</strong> menunjukkan hasil.',
            'answer' => false,
            'explanation' => 'Kepalanya terbalik: <em>therefore</em> menunjukkan hasil (karenanya), sedangkan <em>however</em> menunjukkan pertentangan (namun).',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kata penghubung dengan fungsinya.',
            'pairs' => [
                ['left' => 'although', 'right' => 'menunjukkan pertentangan (meskipun)'],
                ['left' => 'therefore', 'right' => 'menunjukkan hasil (karenanya)'],
                ['left' => 'in addition', 'right' => 'menunjukkan penambahan (selain itu)'],
                ['left' => 'whereas', 'right' => 'menunjukkan perbandingan (sedangkan)'],
                ['left' => 'for example', 'right' => 'menunjukkan contoh (sebagai contoh)'],
            ],
            'explanation' => 'Setiap linking words punya fungsi tetap: pertentangan, hasil, penambahan, perbandingan, atau contoh. Pilih berdasarkan hubungan makna antar kalimat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Although the weather was bad, we enjoyed the trip.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'Although the weather was bad, we enjoyed the trip.',
                'Because the weather was bad, we enjoyed the trip.',
                'Although the weather was good, we enjoyed the trip.',
                'The weather was bad, so we cancelled the trip.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat yang terdengar: <em>Although the weather was bad, we enjoyed the trip</em> (Meskipun cuacanya buruk, kami menikmati perjalanan itu). Kata kuncinya adalah <em>although</em> dan <em>bad</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk menyampaikan pendapat dengan nuansa.',
            'target' => 'In my opinion, social media is useful; however, we should limit its use.',
            'hint' => 'Arti: Menurut saya, media sosial itu berguna; namun, kita sebaiknya membatasi penggunaannya.',
            'explanation' => 'Gunakan <em>however</em> dengan titik koma dan koma untuk menyeimbangkan dua gagasan yang berbeda.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih kata penghubung yang tepat:<br><strong>&ldquo;Some people prefer city life; ___, others enjoy the quiet of the countryside.&rdquo;</strong>',
            'options' => ['whereas', 'therefore', 'for example', 'in addition'],
            'answer' => 0,
            'explanation' => 'Kalimat membandingkan dua kelompok yang berbeda, sehingga kata yang tepat adalah <em>whereas</em> (sedangkan). <em>Therefore</em> untuk hasil dan <em>for example</em> untuk contoh tidak sesuai.',
        ],
    ],
];
