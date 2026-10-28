<?php

/**
 * Level 3 — Modul 02: Advanced Conditionals
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
    'title' => 'Advanced Conditionals',
    'slug' => 'advanced-conditionals',
    'subtitle' => 'Mixed conditionals dan variasi pengandaian lainnya',
    'summary' => 'Menguasai conditional campuran (mixed conditionals) yang menggabungkan dua titik waktu berbeda, inverted conditionals, serta variasi pengandaian formal seperti provided that, but for, dan supposing.',
    'icon' => '🔀',
    'objectives' => [
        'Membedakan dua tipe mixed conditional dan memilih bentuk verb yang tepat',
        'Menggunakan inverted conditional (had I, were she, should you) dalam konteks formal',
        'Menerapkan variasi pengandaian seperti but for, provided that, dan supposing',
        'Menggunakan wish, if only, it\'s time, dan would rather untuk menyatakan penyesalan dan kritik lembut',
    ],
    'sections' => [
        [
            'heading' => 'Mixed Conditional 1: Kondisi Masa Lalu, Hasil Sekarang',
            'body' => '<p><em>Mixed conditional</em> menggabungkan dua titik waktu berbeda dalam satu kalimat pengandaian. Tipe pertama menghubungkan <strong>kondisi masa lalu</strong> (yang tidak terjadi) dengan <strong>hasil yang masih berlaku sekarang</strong>. Polanya:</p>
<blockquote><p><strong>If + past perfect, would/could/might + infinitive (tanpa "have")</strong></p></blockquote>
<p>Bentuk ini sering dipakai untuk menyatakan <em>penyesalan</em> (regret) atau <em>fakta alternatif</em> (counterfactual). Kata kunci yang menandainya adalah keterangan waktu sekarang seperti <em>now, today, by now</em>.</p>',
            'examples' => [
                ['en' => 'If I had studied medicine, I would be a doctor now.', 'id' => 'Seandainya saya belajar kedokteran, saya akan menjadi dokter sekarang.'],
                ['en' => 'If she had accepted the transfer, she would be working in Singapore by now.', 'id' => 'Seandainya dia menerima mutasi itu, dia akan bekerja di Singapura sekarang.'],
                ['en' => 'If we had invested earlier, we might have a much larger portfolio today.', 'id' => 'Seandainya kami berinvestasi lebih awal, mungkin kami memiliki portofolio yang jauh lebih besar hari ini.'],
            ],
        ],
        [
            'heading' => 'Mixed Conditional 2: Kondisi Masa Kini, Hasil Masa Lalu',
            'body' => '<p>Tipe kedua menghubungkan <strong>kondisi yang berlaku sekarang</strong> (sifat, keadaan, kebiasaan) dengan <strong>hasil di masa lalu</strong>. Polanya:</p>
<blockquote><p><strong>If + past simple, would/could/might + have + past participle</strong></p></blockquote>
<p>Secara bentuk mirip second conditional, tetapi hasilnya adalah kejadian lampau. Gunakan <em>were</em> (bukan <em>was</em>) untuk semua subjek jika ingin gaya baku formal, terutama untuk <em>I, he, she, it</em>.</p>',
            'examples' => [
                ['en' => 'If he were more careful, he would not have made such an obvious mistake.', 'id' => 'Kalau dia lebih teliti, dia tidak akan membuat kesalahan yang begitu jelas.'],
                ['en' => 'If the roads were not so congested, we would have arrived on time.', 'id' => 'Kalau jalanan tidak begitu macet, kami akan tiba tepat waktu.'],
                ['en' => 'If she genuinely wanted the job, she would have applied months ago.', 'id' => 'Kalau dia sungguh menginginkan pekerjaan itu, dia akan melamar berbulan-bulan yang lalu.'],
            ],
        ],
        [
            'heading' => 'Variasi Pengandaian Formal',
            'body' => '<p>Untuk register formal dan akademik, <em>if</em> dapat diganti atau diperkuat dengan beberapa bentuk:</p>
<ul>
<li><strong>Inverted conditional:</strong> <em>Had we known...</em>, <em>Were the results reliable...</em>, <em>Should you need...</em> (if dihapus, auxiliary didepankan).</li>
<li><strong>But for / If it hadn\'t been for + noun:</strong> menyatakan "sekiranya bukan karena...".</li>
<li><strong>Provided that / As long as:</strong> menyaratkan syarat tertentu.</li>
<li><strong>Supposing / Imagine + present:</strong> menyajikan skenario hipotetis untuk didiskusikan.</li>
<li><strong>In the event that:</strong> kemungkinan resmi (sering dipakai dokumen kontrak).</li>
</ul>',
            'examples' => [
                ['en' => 'Had we known about the strike, we would have booked a later flight.', 'id' => 'Seandainya kami tahu soal mogok itu, kami akan memesan penerbangan yang lebih sore.'],
                ['en' => 'But for your support, the campaign would have failed.', 'id' => 'Tanpa dukunganmu, kampanye itu akan gagal.'],
                ['en' => 'Supposing the weather holds, the match will go ahead as planned.', 'id' => 'Misalkan cuaca tetap cerah, pertandingan akan berlangsung sesuai rencana.'],
                ['en' => 'Provided that all parties agree, the contract will be signed next week.', 'id' => 'Dengan syarat semua pihak setuju, kontrak akan ditandatangani minggu depan.'],
                ['en' => 'In the event of a power failure, please use the emergency exit.', 'id' => 'Dalam keadaan listrik padam, silakan gunakan pintu darurat.'],
            ],
        ],
        [
            'heading' => 'Wish, If Only, It\'s Time, dan Would Rather',
            'body' => '<p>Beberapa struktur pengandaian tidak memakai <em>if</em> sama sekali tetapi tetap membutuhkan bentuk lampau secara konsisten:</p>
<table>
<thead><tr><th>Struktur</th><th>Pola</th><th>Makna</th></tr></thead>
<tbody>
<tr><td>wish + past simple</td><td>I wish I had more time</td><td>Keinginan tentang keadaan sekarang</td></tr>
<tr><td>wish + past perfect</td><td>I wish I had applied earlier</td><td>Penyesalan tentang masa lalu</td></tr>
<tr><td>wish + would</td><td>I wish he would stop interrupting</td><td>Kekecewaan atas kebiasaan orang lain</td></tr>
<tr><td>it\'s time + past simple</td><td>It\'s time we started the meeting</td><td>Sudah waktunya (sesuatu yang belum dilakukan)</td></tr>
<tr><td>would rather + past</td><td>I\'d rather you had told me the truth</td><td>Preferensi tentang masa lalu (tidak terjadi)</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'I wish I had taken that opportunity when it arose.', 'id' => 'Saya berharap saya mengambil peluang itu ketika muncul.'],
                ['en' => 'If only we had listened to your advice.', 'id' => 'Sekiranya kami mendengarkan nasihatmu.'],
                ['en' => 'It is time we addressed this issue seriously.', 'id' => 'Sudah waktunya kami menangani masalah ini dengan serius.'],
                ['en' => 'I would rather you did not smoke in here.', 'id' => 'Saya lebih suka kamu tidak merokok di sini.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'mixed conditional', 'phonetic' => '/ˌmɪkst kənˈdɪʃənl/', 'meaning' => 'kondisional campuran dua titik waktu', 'example' => 'If I had gone to law school, I would be practising now.'],
        ['word' => 'hypothetical', 'phonetic' => '/ˌhaɪpəˈθetɪkl/', 'meaning' => 'hipotetis; berdasarkan pengandaian', 'example' => 'This is a hypothetical scenario, not a prediction.'],
        ['word' => 'counterfactual', 'phonetic' => '/ˌkaʊntəˈfæktʃuəl/', 'meaning' => 'berlawanan dengan fakta yang sebenarnya', 'example' => 'If she had taken the job, her life would be different.'],
        ['word' => 'supposition', 'phonetic' => '/ˌsʌpəˈzɪʃn/', 'meaning' => 'dugaan; pengandaian', 'example' => 'Let us proceed on the supposition that the figures are correct.'],
        ['word' => 'provided that', 'phonetic' => '/prəˈvaɪdɪðət/', 'meaning' => 'dengan syarat bahwa', 'example' => 'You may leave provided that you finish the report.'],
        ['word' => 'unless', 'phonetic' => '/ənˈles/', 'meaning' => 'kecuali jika', 'example' => 'Unless the weather improves, the event will be cancelled.'],
        ['word' => 'but for', 'phonetic' => '/bʌt fɔːr/', 'meaning' => 'tanpa; sekiranya bukan karena', 'example' => 'But for your help, we could not have finished.'],
        ['word' => 'in the event that', 'phonetic' => '/ɪn ði ɪˈvent ðæt/', 'meaning' => 'apabila terjadi (gaya formal)', 'example' => 'In the event that the server fails, contact support.'],
        ['word' => 'were to', 'phonetic' => '/wɜːr tuː/', 'meaning' => 'bentuk pengandaian formal untuk "were"', 'example' => 'If the chairman were to resign, the board would reconvene.'],
        ['word' => 'it is (high) time', 'phonetic' => '/ɪt ɪz (haɪ) taɪm/', 'meaning' => 'sudah waktunya untuk (sesuatu yang belum dilakukan)', 'example' => 'It is high time we addressed this issue.'],
        ['word' => 'would rather', 'phonetic' => '/wʊd ˈrɑːðər/', 'meaning' => 'lebih suka', 'example' => 'I would rather you did not smoke in here.'],
        ['word' => 'otherwise', 'phonetic' => '/ˈʌðəwaɪz/', 'meaning' => 'kalau tidak demikian', 'example' => 'We must act now; otherwise, it will be too late.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'If she had accepted the offer, she ___ in London now.',
            'options' => ['will live', 'would live', 'would be living', 'would have lived'],
            'answer' => 2,
            'explanation' => 'Ini mixed conditional tipe 1: kondisi di masa lalu (tidak menerima tawaran) dengan hasil yang masih berlaku sekarang (berada di London) → <em>would be living</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'If he ___ more careful with the documents, he would not have caused such a serious breach.',
            'options' => ['is', 'were', 'has been', 'had been'],
            'answer' => 1,
            'explanation' => 'Kondisi merujuk pada keadaan sekarang (sifat ketelitiannya) dengan hasil di masa lalu → bentuk lampau: <em>If he were more careful ... he would not have caused</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ for your timely warning, we would not have evacuated the building in time.',
            'options' => ['If it had not been', 'But', 'Were it', 'Had'],
            'answer' => 1,
            'explanation' => '<em>But for + kata benda</em> adalah alternatif formal untuk <em>If it had not been for + kata benda</em>: <em>But for your timely warning, we would not have ...</em>',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => '___ the traffic been heavier, we would have missed the flight.',
            'options' => ['Had', 'Were', 'Should', 'If'],
            'answer' => 0,
            'explanation' => 'Inverted conditional: <em>Had + subjek + past participle</em> menggantikan <em>If the traffic had been heavier</em>. Auxiliary <em>had</em> diletakkan sebelum subjek.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'If I had taken your advice, I ___ (be) much better off now.',
            'answer' => 'would be',
            'accepted' => ['would be'],
            'explanation' => 'Mixed conditional tipe 1: keputusan masa lalu (tidak mengambil nasihat) berdampak pada keadaan sekarang → <em>would be much better off</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'If it hadn\'t been for the sudden rain, the festival ___ (continue) as planned.',
            'answer' => 'would have continued',
            'accepted' => ['would have continued'],
            'explanation' => 'Kondisi masa lalu (hujan tiba-tiba) menyebabkan hasil masa lalu yang berlawanan dengan fakta (festival seharusnya berlanjut) → <em>would have continued</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'I wish I ___ (know) about the change of schedule yesterday.',
            'answer' => 'had known',
            'accepted' => ['had known'],
            'explanation' => '<em>Wish + past perfect</em> menyatakan penyesalan tentang masa lalu: <em>I wish I had known ...</em> (saya berharap saya tahu).',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam kalimat <em>&ldquo;If he weren\'t so stubborn, he would have apologised by now,&rdquo;</em> kondisi (<em>if he weren\'t so stubborn</em>) merujuk pada keadaan sekarang, sedangkan hasilnya (<em>would have apologised</em>) merujuk pada masa lalu.',
            'answer' => true,
            'explanation' => 'Ini mixed conditional tipe 2: sifat sekarang (pemarah/keras kepala) menyebabkan hasil lampau (belum minta maaf sampai sekarang). Pernyataan benar.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat <em>&ldquo;It\'s time we reviewed the budget&rdquo;</em> menggunakan bentuk lampau (<em>reviewed</em>) untuk menekankan bahwa tindakan itu seharusnya sudah dilakukan sekarang.',
            'answer' => true,
            'explanation' => '<em>It\'s time + past simple</em> menyatakan bahwa sudah waktunya melakukan sesuatu yang belum dilakukan. Bentuk lampau di sini menyiratkan keterlambatan, jadi pernyataan benar.',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan bentuk pengandaian dengan contohnya.',
            'pairs' => [
                ['left' => 'Mixed (lampau ke sekarang)', 'right' => 'If I had learned the piano, I would play in the band now.'],
                ['left' => 'Mixed (sekarang ke lampau)', 'right' => 'If she weren\'t so disorganised, she would have submitted the form on time.'],
                ['left' => 'Third conditional', 'right' => 'If the manager had approved the plan, we would have started in May.'],
                ['left' => 'Inverted conditional', 'right' => 'Had we anticipated the demand, we would have hired more staff.'],
                ['left' => 'Wish + past perfect', 'right' => 'I wish I had accepted that offer.'],
            ],
            'explanation' => 'Mixed tipe 1 memakai hasil tanpa <em>have</em> (klausa hasil sekarang); mixed tipe 2 memakai <em>were</em> + hasil lampau; third conditional memakai <em>had + past participle</em> di kedua klausa; inverted conditional menghapus <em>if</em>; wish + past perfect menyatakan penyesalan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Supposing we postponed the launch, would that solve the supply problem?',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'Supposing we postponed the launch, would that solve the supply problem?',
                'Supposing we postpone the launch, will that solve the supply problem?',
                'Supposing we cancelled the launch, would that solve the staffing problem?',
                'Supposing we postponed the meeting, would that solve the supply problem?',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>Supposing we postponed the launch, would that solve the supply problem?</em> — perhatikan kata <em>launch</em>, <em>would</em>, dan <em>supply problem</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>If the company had invested in training five years ago, it would be far more competitive today. As things stand, its staff lack the skills the market demands. If the new director were more patient, she would not have dismissed the proposal so quickly. But for the intervention of the board, the restructuring plan would have been abandoned altogether.</p></div><p>Bagaimana sikap penulis terhadap keputusan direktur baru?</p>',
            'options' => [
                'Penulis mendukung penuh keputusan direktur.',
                'Penulis mengkritik direktur karena terlalu tergesa-gesa menolak proposal.',
                'Penulis bersikap netral dan tidak menilai direktur.',
                'Penulis menyalahkan staf yang kurang terampil atas keputusan tersebut.',
            ],
            'answer' => 1,
            'explanation' => 'Kalimat <em>&ldquo;If the new director were more patient, she would not have dismissed the proposal so quickly&rdquo;</em> menunjukkan kritik: direktur dianggap terlalu cepat menolak proposal.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan penyesalanmu kepada tamu yang tiba tanpa pemberitahuan dengan kalimat ini.',
            'target' => 'If I had known you were coming, I would have prepared something special.',
            'hint' => 'Arti: Seandainya saya tahu kamu akan datang, saya akan menyiapkan sesuatu yang istimewa.',
            'explanation' => 'Mixed conditional: pengetahuan di masa lalu (tidak tahu) → hasil di masa lampau yang berlawanan dengan fakta (tidak menyiapkan apa pun).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ekspreskan penyesalanmu tentang masa lalu dengan menggunakan wish.',
            'target' => 'I wish I had spent more time learning English at school.',
            'hint' => 'Arti: Saya berharap saya menghabiskan lebih banyak waktu belajar bahasa Inggris di sekolah.',
            'explanation' => '<em>Wish + past perfect</em> adalah cara menyatakan penyesalan tentang masa lalu yang tidak bisa diubah.',
        ],
    ],
];
