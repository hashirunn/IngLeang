<?php

/**
 * Level 2 — Modul 05: Conditionals
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
    'title' => 'Conditionals',
    'slug' => 'conditionals',
    'subtitle' => 'Zero, first, second, dan third conditionals',
    'summary' => 'Belajar empat tipe kalimat bersyarat: zero conditional untuk fakta, first untuk kemungkinan nyata, second untuk hipotesis, dan third untuk penyesalan masa lalu, plus kesalahan umum yang harus dihindari.',
    'icon' => '🪄',
    'objectives' => [
        'Membentuk zero conditional untuk fakta dan kebiasaan',
        'Membentuk first conditional untuk kemungkinan nyata di masa depan',
        'Membentuk second conditional untuk hipotesis yang tidak nyata',
        'Membentuk third conditional untuk penyesalan tentang masa lalu',
    ],
    'sections' => [
        [
            'heading' => 'Zero Conditional: Fakta dan Kebiasaan',
            'body' => '<p>Zero conditional memakai <strong>present simple di kedua klausa</strong>: <strong>If/When + present simple, present simple</strong>. Isinya kebenaran umum, kebiasaan, atau hubungan sebab-akibat yang selalu berlaku, sehingga kata <em>when</em> bisa menggantikan <em>if</em>.</p>
<table>
<thead><tr><th>Klausa</th><th>Rumus</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Syarat</td><td>If + present simple</td><td>If you heat water to 100&deg;C,</td></tr>
<tr><td>Hasil</td><td>present simple</td><td>it boils.</td></tr>
</tbody>
</table>
<p>Jangan memakai <em>will</em> di sini: <em>*If you heat it, it will boil to 100&deg;C</em> mengubah makna menjadi kejadian biasa, bukan hukum alam.</p>',
            'examples' => [
                ['en' => 'If you heat water to 100 degrees Celsius, it boils.', 'id' => 'Jika kamu memanaskan air sampai 100 derajat Celsius, air itu mendidih.'],
                ['en' => 'If I am late, my boss gets angry.', 'id' => 'Kalau saya terlambat, atasan saya menjadi marah.'],
                ['en' => 'When the sun sets, it gets dark.', 'id' => 'Ketika matahari terbenam, menjadi gelap.'],
                ['en' => 'If you mix blue and yellow, you get green.', 'id' => 'Kalau kamu mencampur biru dan kuning, warnanya menjadi hijau.'],
            ],
        ],
        [
            'heading' => 'First Conditional: Kemungkinan Nyata di Masa Depan',
            'body' => '<p><strong>If + present simple, will + V1</strong>. Dipakai untuk situasi masa depan yang <strong>mungkin terjadi</strong> dan hasil yang mengikutinya. Klausa <em>if</em> selalu memakai present simple, tidak pernah <em>will</em>.</p>
<table>
<thead><tr><th>Klausa</th><th>Rumus</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Syarat</td><td>If + present simple</td><td>If it rains tomorrow,</td></tr>
<tr><td>Hasil</td><td>will + V1</td><td>we will cancel the picnic.</td></tr>
</tbody>
</table>
<p>Di bagian hasilnya, <em>will</em> bisa diganti modal lain seperti <em>can</em>, <em>may</em>, <em>might</em>, atau berupa imperatif: <em>If she calls, tell her to wait</em>.</p>',
            'examples' => [
                ['en' => 'If it rains tomorrow, we will cancel the picnic.', 'id' => 'Kalau besok hujan, kami akan membatalkan piknik.'],
                ['en' => 'If you study hard, you will pass the exam.', 'id' => 'Kalau kamu belajar sungguh-sungguh, kamu akan lulus ujian.'],
                ['en' => 'If she calls, tell her to wait.', 'id' => 'Kalau dia menelepon, suruh dia menunggu.'],
                ['en' => 'We might go to the beach if the weather improves.', 'id' => 'Kami mungkin pergi ke pantai kalau cuaca membaik.'],
            ],
        ],
        [
            'heading' => 'Second Conditional: Hipotesis yang Tidak Nyata',
            'body' => '<p><strong>If + past simple, would + V1</strong>. Dipakai untuk situasi <strong>sekarang atau masa depan yang tidak nyata, mustahil, atau sangat kecil kemungkinannya</strong>.</p>
<table>
<thead><tr><th>Klausa</th><th>Rumus</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Syarat</td><td>If + past simple</td><td>If I had more free time,</td></tr>
<tr><td>Hasil</td><td>would + V1</td><td>I would learn another language.</td></tr>
</tbody>
</table>
<p>Dalam gaya baku, <em>were</em> dipakai untuk semua subjek, terutama dalam ungkapan saran: <em>If I were you, I would accept the offer</em>. Ingat pula bahwa <em>if + would</em> tidak benar untuk menyatakan syarat.</p>',
            'examples' => [
                ['en' => 'If I had more free time, I would learn another language.', 'id' => 'Kalau saya punya lebih banyak waktu luang, saya akan belajar bahasa lain.'],
                ['en' => 'If I were you, I would accept the offer.', 'id' => 'Kalau saya jadi kamu, saya akan menerima tawaran itu.'],
                ['en' => 'She would travel the world if she won the lottery.', 'id' => 'Dia akan mengelilingi dunia kalau dia memenangkan lotre.'],
                ['en' => 'What would you do if you found a wallet on the street?', 'id' => 'Apa yang akan kamu lakukan kalau menemukan dompet di jalan?'],
            ],
        ],
        [
            'heading' => 'Third Conditional: Penyesalan Masa Lalu',
            'body' => '<p><strong>If + past perfect, would have + V3</strong>. Dipakai untuk situasi masa lalu yang <strong>tidak benar-benar terjadi</strong>, beserta akibat yang juga tidak terjadi. Inilah bentuk yang dipakai untuk menyesali keputusan lalu.</p>
<table>
<thead><tr><th>Klausa</th><th>Rumus</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Syarat</td><td>If + past perfect</td><td>If I had left earlier,</td></tr>
<tr><td>Hasil</td><td>would have + V3</td><td>I would not have missed the train.</td></tr>
</tbody>
</table>
<p>Karena kejadiannya sudah lewat dan tidak bisa diubah, kalimat ini bersifat kontrateriual: keduanya tidak pernah terjadi. Jangan tertukar dengan second conditional yang membahas situasi sekarang.</p>',
            'examples' => [
                ['en' => 'If I had left earlier, I would not have missed the train.', 'id' => 'Kalau saya berangkat lebih awal, saya tidak akan ketinggalan kereta.'],
                ['en' => 'If she had studied medicine, she would have become a doctor.', 'id' => 'Kalau dia kuliah kedokteran, dia pasti sudah menjadi dokter.'],
                ['en' => 'We would have come to the party if we had known about it.', 'id' => 'Kami akan datang ke pesta kalau kami tahu acaranya.'],
                ['en' => 'He wouldn\'t have failed the test if he had prepared better.', 'id' => 'Dia tidak akan gagal ujian kalau dia mempersiapkan diri lebih baik.'],
            ],
        ],
        [
            'heading' => 'Kesalahan Umum dan Variasi yang Sering Dipakai',
            'body' => '<p>Bandingkan bentuk yang salah dengan bentuk yang benar berikut ini.</p>
<table>
<thead><tr><th>Salah</th><th>Benar</th><th>Keterangan</th></tr></thead>
<tbody>
<tr><td>If I would have time, I would help.</td><td>If I had time, I would help.</td><td>Second conditional: past simple di klausa if</td></tr>
<tr><td>If it will rain, we will stay home.</td><td>If it rains, we will stay home.</td><td>First conditional: present simple di klausa if</td></tr>
<tr><td>If I had known, I would tell you.</td><td>If I had known, I would have told you.</td><td>Third conditional: would have + V3 di hasil</td></tr>
<tr><td>Unless you will hurry, you will be late.</td><td>Unless you hurry, you will be late.</td><td><em>Unless</em> = <em>if not</em>, diikuti present simple</td></tr>
</tbody>
</table>
<p><em>Unless</em> menggantikan pola negatif: <em>If you do not hurry</em> = <em>Unless you hurry</em>. Modal lain seperti <em>could</em> dan <em>might</em> juga bisa dipakai: <em>If I had a car, I could drive to work</em>.</p>',
            'examples' => [
                ['en' => 'Unless you hurry, we will miss the bus.', 'id' => 'Kecuali kamu bergegas, kita akan ketinggalan bus.'],
                ['en' => 'If I had a car, I could drive to work every day.', 'id' => 'Kalau saya punya mobil, saya bisa pergi kerja setiap hari dengan mobil.'],
                ['en' => 'She might accept the offer if we explained the terms clearly.', 'id' => 'Dia mungkin menerima tawaran itu kalau kami menjelaskan ketentuannya dengan jelas.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'imagine', 'phonetic' => '/ɪˈmædʒɪn/', 'meaning' => 'membayangkan', 'example' => 'Imagine you could speak five languages.'],
        ['word' => 'chance', 'phonetic' => '/tʃɑːns/', 'meaning' => 'kesempatan, kemungkinan', 'example' => 'If you have a chance, try the local food.'],
        ['word' => 'unless', 'phonetic' => '/ənˈles/', 'meaning' => 'kecuali', 'example' => 'Unless it rains, we will play outside.'],
        ['word' => 'afford', 'phonetic' => '/əˈfɔːd/', 'meaning' => 'mampu membayar', 'example' => 'I could not afford a new phone.'],
        ['word' => 'hurry', 'phonetic' => '/ˈhʌri/', 'meaning' => 'bergegas', 'example' => 'If you hurry, we will catch the train.'],
        ['word' => 'prepare', 'phonetic' => '/prɪˈpeər/', 'meaning' => 'mempersiapkan', 'example' => 'She prepared well for the interview.'],
        ['word' => 'avoid', 'phonetic' => '/əˈvɔɪd/', 'meaning' => 'menghindari', 'example' => 'Leave early to avoid the traffic.'],
        ['word' => 'regret', 'phonetic' => '/rɪˈɡret/', 'meaning' => 'menyesali', 'example' => 'He regrets quitting his job.'],
        ['word' => 'succeed', 'phonetic' => '/səkˈsiːd/', 'meaning' => 'berhasil', 'example' => 'You will succeed if you practise every day.'],
        ['word' => 'suppose', 'phonetic' => '/səˈspəʊz/', 'meaning' => 'mengandaikan', 'example' => 'Suppose you won the lottery; what would you do?'],
        ['word' => 'refuse', 'phonetic' => '/rɪˈfjuːz/', 'meaning' => 'menolak', 'example' => 'If you refuse their offer, they may withdraw it.'],
        ['word' => 'miss', 'phonetic' => '/mɪs/', 'meaning' => 'ketinggalan; melewatkan', 'example' => 'If we leave late, we will miss the flight.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'If it ___ tomorrow, we will cancel the picnic.',
            'options' => ['rains', 'will rain', 'rained', 'is raining'],
            'answer' => 0,
            'explanation' => 'Ini first conditional: klausa <em>if</em> selalu memakai present simple, sedangkan hasilnya memakai <em>will</em>. Karena subjek <em>it</em> tunggal, jawabannya <em>rains</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'If I ___ more free time, I would take up photography.',
            'options' => ['have', 'had', 'will have', 'would have'],
            'answer' => 1,
            'explanation' => '<em>Would take up</em> pada klausa hasil menunjukkan second conditional, sehingga klausa <em>if</em> memakai past simple: <em>If I had more free time</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'If we had left on time, we ___ the flight.',
            'options' => ['catch', 'would catch', 'would have caught', 'had caught'],
            'answer' => 2,
            'explanation' => 'Klausa <em>if</em> memakai past perfect (<em>had left</em>), sehingga hasilnya memakai third conditional: <em>would have + V3</em>, yaitu <em>would have caught</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'If you mix red and white paint, you ___ pink.',
            'options' => ['get', 'will get', 'got', 'would get'],
            'answer' => 0,
            'explanation' => 'Kalimat ini menyatakan hukum warna yang selalu berlaku, sehingga memakai zero conditional: present simple di kedua klausa, yaitu <em>you get pink</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Pilih kata yang berarti &ldquo;menolak&rdquo;.',
            'options' => ['refuse', 'prepare', 'succeed', 'imagine'],
            'answer' => 0,
            'explanation' => '<em>Refuse</em> berarti menolak; <em>prepare</em> berarti mempersiapkan, <em>succeed</em> berarti berhasil, dan <em>imagine</em> berarti membayangkan.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>If I ___ (be) you, I would talk to the manager first.</strong>',
            'answer' => 'were',
            'accepted' => ['were'],
            'explanation' => 'Second conditional memakai bentuk lampau di klausa <em>if</em>; dalam gaya baku, semua subjek memakai <em>were</em>: <em>If I were you</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>If it ___ (rain) tomorrow, we will stay at home.</strong>',
            'answer' => 'rains',
            'accepted' => ['rains'],
            'explanation' => 'First conditional memakai present simple dalam klausa <em>if</em>; subjek <em>it</em> tunggal menambah <em>-s</em> sehingga menjadi <em>rains</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi: <strong>If I had known about the meeting, I ___ (come) earlier.</strong>',
            'answer' => 'would have come',
            'accepted' => ['would have come'],
            'explanation' => 'Third conditional: syarat di masa lalu yang tidak terjadi (<em>had known</em>) diikuti hasil yang juga tidak terjadi, yaitu <em>would have come</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi hipotesis dalam esai: <strong>&ldquo;If more people ___ (cycle) to work, the city would be less polluted.&rdquo;</strong>',
            'answer' => 'cycled',
            'accepted' => ['cycled'],
            'explanation' => 'Hasil dengan <em>would be</em> menunjukkan second conditional, sehingga klausa <em>if</em> memakai past simple: <em>If more people cycled to work</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam first conditional, <em>will</em> boleh dipakai di dalam klausa if: &ldquo;If you will study harder, you will pass.&rdquo;',
            'answer' => false,
            'explanation' => 'Salah. Klausa <em>if</em> tidak pernah memakai <em>will</em>. Bentuk yang benar: <em>If you study harder, you will pass</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Third conditional membicarakan situasi masa lalu yang tidak benar-benar terjadi beserta akibatnya.',
            'answer' => true,
            'explanation' => 'Benar. Third conditional bersifat kontrateriual: peristiwa di masa lalu tidak terjadi (<em>If I had left earlier</em>) dan akibatnya pun tidak terjadi (<em>I would not have missed the train</em>).',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan tipe conditional dengan rumus yang benar.',
            'pairs' => [
                ['left' => 'zero conditional', 'right' => 'if + present, present'],
                ['left' => 'first conditional', 'right' => 'if + present, will + V'],
                ['left' => 'second conditional', 'right' => 'if + past, would + V'],
                ['left' => 'third conditional', 'right' => 'if + past perfect, would have + V3'],
            ],
            'explanation' => 'Urutannya berdasarkan tingkat kenyataan: zero untuk fakta, first untuk kemungkinan nyata, second untuk hipotesis sekarang, dan third untuk penyesalan masa lalu.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'If you finish your homework, you can watch a film.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'If you finish your homework, you can watch a film.',
                'If you finished your homework, you could watch a film.',
                'If you will finish your homework, you can watch a film.',
                'If you finish your homework, you cannot watch a film.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah first conditional dengan modal hasil <em>can</em>: <em>If you finish ... you can watch</em>, bukan bentuk hipotesis <em>could</em>, <em>will</em> di klausa if, atau <em>cannot</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk menyampaikan harapanmu.',
            'target' => 'If I had more free time, I would learn how to play the guitar.',
            'hint' => 'Arti: Kalau saya punya lebih banyak waktu luang, saya akan belajar bermain gitar.',
            'explanation' => 'Ini second conditional: situasi sekarang yang tidak nyata (<em>had more free time</em>) dan hasil hipotesis (<em>would learn</em>).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>If Marina had taken the earlier flight, she would have arrived before the shops closed. Because she missed it, she had to book a hotel near the airport and continue her journey the next morning. She says that if the airline had warned her about the delay, she would have taken the train instead.</p></div><p>Why did Marina have to stay at a hotel?</p>',
            'options' => [
                'Because she missed the earlier flight.',
                'Because the shops near the airport were closed.',
                'Because the airline gave her a free room.',
                'Because her train was cancelled.',
            ],
            'answer' => 0,
            'explanation' => 'Paragrafnya menyatakan <em>&ldquo;Because she missed it (the earlier flight), she had to book a hotel&rdquo;</em>. Kalimat third conditional di awal juga menegaskan bahwa ia tidak mengambil penerbangan itu.',
        ],
    ],
];
