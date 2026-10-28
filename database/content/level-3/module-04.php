<?php

/**
 * Level 3 — Modul 04: Nuance & Register
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
    'title' => 'Nuance & Register',
    'slug' => 'nuance-and-register',
    'subtitle' => 'Formal, informal, diplomatic, dan persuasive language',
    'summary' => 'Menyesuaikan gaya bahasa dengan situasi: membedakan register formal dan informal, menyampaikan ketidaksetujuan secara diplomatis, serta membangun argumen yang persuasif.',
    'icon' => '🎭',
    'objectives' => [
        'Memilih kata dan struktur yang sesuai dengan register formal maupun informal',
        'Menyampaikan penolakan dan ketidaksetujuan secara diplomatis tanpa melukai hubungan',
        'Menggunakan teknik persuasif: skenario imajinatif, bukti, tricolon, dan ajakan bertindak',
        'Mematuhi konvensi komunikasi tertulis formal seperti penutup surat dan lampiran',
    ],
    'sections' => [
        [
            'heading' => 'Register: Formal vs Informal',
            'body' => '<p><em>Register</em> adalah tingkat kesesuaian gaya bahasa dengan situasi. Bahasa formal dipakai dalam surat resmi, laporan, dan akademik; bahasa informal dipakai dengan teman dan dalam percakapan santai. Banyak kosakata memiliki padanan formal:</p>
<table>
<thead><tr><th>Informal</th><th>Formal</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>find out</td><td>ascertain / learn</td><td>mengetahui, memastikan</td></tr>
<tr><td>help out</td><td>assist</td><td>membantu</td></tr>
<tr><td>buy</td><td>purchase</td><td>membeli</td></tr>
<tr><td>need</td><td>require</td><td>membutuhkan</td></tr>
<tr><td>start / end</td><td>commence / terminate</td><td>memulai / mengakhiri</td></tr>
<tr><td>look into</td><td>investigate</td><td>menyelidiki</td></tr>
</tbody>
</table>
<p>Selain kosakata, register formal juga ditandai kalimat pasif, konstruksi impersonal, dan struktur lebih panjang.</p>',
            'examples' => [
                ['en' => 'Could you assist me with this application form?', 'id' => 'Bisakah Anda membantu saya mengisi formulir aplikasi ini?'],
                ['en' => 'We require funds to purchase new equipment.', 'id' => 'Kami membutuhkan dana untuk membeli peralatan baru.'],
                ['en' => 'The committee will investigate the complaint.', 'id' => 'Komite akan menyelidiki pengaduan tersebut.'],
            ],
        ],
        [
            'heading' => 'Bahasa Diplomatis',
            'body' => '<p>Bahasa diplomatis menjaga hubungan baik dengan menghindari kehati-hatian langsung dan menyalahkan. Beberapa prinsip utama:</p>
<ul>
<li><strong>Menyampaikan penolakan secara tidak langsung:</strong> <em>I\'m afraid I can\'t commit to that deadline.</em> (Mohon maaf, saya tidak bisa berkomitmen pada tenggat itu.)</li>
<li><strong>Melembutkan permintaan:</strong> <em>I was wondering if you could ...</em>, <em>Would you mind ...</em>, <em>Perhaps we could consider ...</em></li>
<li><strong>Mengakui sudut pandang lawan sebelum berbeda pendapat:</strong> <em>I understand your concern, though I see the situation differently.</em></li>
<li><strong>Menghindari menyalahkan dengan kalimat pasif:</strong> <em>The deadline was missed</em> (bukan <em>You missed the deadline</em>).</li>
</ul>',
            'examples' => [
                ['en' => 'I understand your concern, though I see the situation somewhat differently.', 'id' => 'Saya memahami kekhawatiran Anda, meskipun saya melihat situasi sedikit berbeda.'],
                ['en' => 'I\'m afraid I can\'t commit to that deadline at this stage.', 'id' => 'Mohon maaf, saya tidak bisa berkomitmen pada tenggat itu untuk saat ini.'],
                ['en' => 'Perhaps we could consider an alternative approach?', 'id' => 'Mungkinkah kita mempertimbangkan pendekatan alternatif?'],
                ['en' => 'The deadline was missed, which caused inconvenience for several clients.', 'id' => 'Tenggat terlewat, yang menyebabkan ketidaknyamanan bagi beberapa klien.'],
            ],
        ],
        [
            'heading' => 'Bahasa Persuasif',
            'body' => '<p>Bahasa persuasif memengaruhi pembaca atau pendengar melalui teknik rhetorika:</p>
<ul>
<li><strong>Skenario imajinatif:</strong> <em>Imagine a city where commuting takes minutes, not hours.</em></li>
<li><strong>Ajakan mempertimbangkan:</strong> <em>Consider the costs of doing nothing.</em></li>
<li><strong>Bukti berulang:</strong> <em>Studies consistently show that ...</em></li>
<li><strong>Tricolon (tiga elemen sejajar):</strong> <em>lost talent, lost trust, lost time</em>.</li>
<li><strong>Kalimat majemuk sejajar:</strong> <em>not only ... but also ...</em> yang sering disertai inversion.</li>
<li><strong>Ajakan bertindak (call to action):</strong> <em>Act now to secure your place.</em></li>
</ul>',
            'examples' => [
                ['en' => 'Imagine a city where commuting takes minutes, not hours.', 'id' => 'Bayangkan kota tempat perjalanan pulang-pergi memakan menit, bukan jam.'],
                ['en' => 'Studies consistently show that early intervention improves outcomes.', 'id' => 'Studi secara konsisten menunjukkan bahwa intervensi dini meningkatkan hasil.'],
                ['en' => 'Consider the costs of doing nothing: lost talent, lost trust, lost time.', 'id' => 'Pertimbangkan biaya tidak melakukan apa-apa: talenta yang hilang, kepercayaan yang hilang, waktu yang hilang.'],
                ['en' => 'This policy will not only reduce costs but also improve staff morale.', 'id' => 'Kebijakan ini tidak hanya menurunkan biaya tetapi juga meningkatkan semangat staf.'],
            ],
        ],
        [
            'heading' => 'Menyesuaikan Komunikasi dengan Audiens',
            'body' => '<p>Konvensi komunikasi tertulis formal mengikuti aturan baku yang perlu dikuasai:</p>
<table>
<thead><tr><th>Situasi</th><th>Salam pembuka</th><th>Penutup</th></tr></thead>
<tbody>
<tr><td>Nama penerima tidak diketahui</td><td>Dear Sir or Madam,</td><td>Yours faithfully</td></tr>
<tr><td>Nama penerima diketahui</td><td>Dear Mr Hale / Dear Ms Tan,</td><td>Yours sincerely</td></tr>
<tr><td>Rekan kerja yang akrab</td><td>Hi John,</td><td>Best regards</td></tr>
</tbody>
</table>
<p>Frasa baku lain: <em>Please find attached ...</em> (lampiran), <em>Should you require further information ...</em>, <em>I look forward to hearing from you.</em>, dan <em>Please note that ...</em> (menyoroti informasi penting).</p>',
            'examples' => [
                ['en' => 'Please find attached the revised proposal.', 'id' => 'Bersama ini terlampir proposal yang telah direvisi.'],
                ['en' => 'Should you require further information, please do not hesitate to contact me.', 'id' => 'Jika Anda memerlukan informasi lebih lanjut, jangan sungkan menghubungi saya.'],
                ['en' => 'I look forward to hearing from you.', 'id' => 'Saya menantikan balasan dari Anda.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'ascertain', 'phonetic' => '/ˌæsəˈteɪn/', 'meaning' => 'memastikan; mengetahui (formal)', 'example' => 'We are trying to ascertain the cause of the failure.'],
        ['word' => 'purchase', 'phonetic' => '/ˈpɜːtʃəs/', 'meaning' => 'membeli (formal)', 'example' => 'The department purchased new software last quarter.'],
        ['word' => 'commence', 'phonetic' => '/kəˈmens/', 'meaning' => 'memulai (formal)', 'example' => 'The ceremony will commence at nine.'],
        ['word' => 'investigate', 'phonetic' => '/ɪnˈvestɪɡeɪt/', 'meaning' => 'menyelidiki', 'example' => 'The committee will investigate the complaint.'],
        ['word' => 'I was wondering if ...', 'phonetic' => '/aɪ wəz ˈwɒndərɪŋ ɪf/', 'meaning' => 'permintaan tidak langsung (santun)', 'example' => 'I was wondering if you could spare a moment.'],
        ['word' => 'I\'m afraid ...', 'phonetic' => '/aɪm əˈfreɪd/', 'meaning' => 'cara lembut menyampaikan kabar buruk', 'example' => 'I\'m afraid the position has been filled.'],
        ['word' => 'Yours faithfully', 'phonetic' => '/jɔːz ˈfeɪθfli/', 'meaning' => 'penutup surat untuk penerima yang tidak diketahui namanya', 'example' => 'Dear Sir or Madam, ... Yours faithfully.'],
        ['word' => 'please find attached', 'phonetic' => '/pliːz faɪnd əˈtætʃt/', 'meaning' => 'bersama ini terlampir (ungkapan baku lampiran)', 'example' => 'Please find attached the invoice.'],
        ['word' => 'do not hesitate to contact me', 'phonetic' => '/duː nɒt ˈhezɪteɪt .../', 'meaning' => 'jangan sungkan menghubungi saya', 'example' => 'Do not hesitate to contact me if you have questions.'],
        ['word' => 'outweigh', 'phonetic' => '/aʊtˈweɪ/', 'meaning' => 'melebihi (dalam hal jumlah atau pentingnya)', 'example' => 'The benefits outweigh the risks.'],
        ['word' => 'compelling', 'phonetic' => '/kəmˈpelɪŋ/', 'meaning' => 'sangat meyakinkan', 'example' => 'She made a compelling case for reform.'],
        ['word' => 'take into account', 'phonetic' => '/teɪk ɪntuː əˈkaʊnt/', 'meaning' => 'mempertimbangkan', 'example' => 'We must take the budget into account.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Which response is the most diplomatic way to disagree in a meeting?',
            'options' => [
                'You are completely wrong.',
                'That makes no sense.',
                'I see your point, though I interpret the evidence differently.',
                'No, that will never work.',
            ],
            'answer' => 2,
            'explanation' => 'Bahasa diplomatis mengakui sudut pandang lawan bicara terlebih dahulu (<em>I see your point</em>) sebelum menyampaikan perbedaan pendapat dengan halus.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Kalimat manakah yang paling formal untuk menyampaikan permintaan "Kirim laporan sebelum Jumat"?',
            'options' => [
                'Send me the report by Friday, please.',
                'Could you send the report over by Friday?',
                'We would require the report to be submitted by Friday.',
                'Get the report to me by Friday.',
            ],
            'answer' => 2,
            'explanation' => '<em>Require</em> dan konstruksi pasif <em>to be submitted</em> adalah penanda register formal; tiga pilihan lain terlalu santai atau terlalu langsung.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Frasa <em>&ldquo;Imagine waking up every morning without back pain&rdquo;</em> dalam iklan menggunakan teknik persuasif berupa:',
            'options' => [
                'ajakan langsung membeli produk',
                'membangun skenario imajinatif untuk meyakinkan',
                'menyalahkan pembaca atas masalahnya',
                'menyampaikan statistik resmi',
            ],
            'answer' => 1,
            'explanation' => '<em>Imagine ...</em> mengajak pendengar membayangkan situasi yang diinginkan — teknik skenario imajinatif yang umum dalam bahasa persuasif.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Penutup surat <em>&ldquo;Yours faithfully&rdquo;</em> tepat digunakan ketika:',
            'options' => [
                'kamu sedang menulis kepada teman dekat',
                'nama penerima sudah diketahui sejak salam pembuka',
                'surat diakhiri dengan <em>Best regards</em>',
                'salam pembuka yang dipakai adalah <em>Dear Sir or Madam</em>',
            ],
            'answer' => 3,
            'explanation' => 'Konvensi baku: <em>Dear Sir or Madam</em> (penerima tidak diketahui) ditutup dengan <em>Yours faithfully</em>; <em>Dear + nama</em> ditutup dengan <em>Yours sincerely</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'I was ___ if you could send me the updated figures. (permintaan tidak langsung)',
            'answer' => 'wondering',
            'accepted' => ['wondering'],
            'explanation' => '<em>I was wondering if you could ...</em> adalah permintaan tidak langsung yang lebih santun daripada <em>Can you ...</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Please ___ attached the revised contract for your review.',
            'answer' => 'find',
            'accepted' => ['find'],
            'explanation' => 'Frasa baku lampiran email formal: <em>Please find attached ...</em> (bersama ini terlampir ...).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => '___ I won\'t be able to attend the workshop in person. (cara lembut menyampaikan kabar buruk)',
            'answer' => 'I\'m afraid',
            'accepted' => ['i\'m afraid', 'i am afraid', 'im afraid'],
            'explanation' => '<em>I\'m afraid ...</em> bukan berarti \'saya takut\', melainkan cara santun memperkenalkan kabar yang tidak menyenangkan.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Penutup <em>&ldquo;Yours sincerely&rdquo;</em> tepat digunakan ketika nama penerima diketahui, misalnya pada pembuka <em>&ldquo;Dear Ms Tan,&rdquo;</em>.',
            'answer' => true,
            'explanation' => 'Konvensi surat formal: jika penerima disapa dengan nama (<em>Dear Ms Tan</em>), penutupnya adalah <em>Yours sincerely</em>. Pernyataan benar.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => '<em>&ldquo;You failed to meet the deadline again&rdquo;</em> adalah contoh bahasa diplomatis untuk menyampaikan kritik.',
            'answer' => false,
            'explanation' => 'Kalimat itu langsung menyalahkan (<em>you failed</em>). Bentuk diplomatis memakai pasif: <em>The deadline was missed again, which affected the schedule.</em>',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan ekspresi informal dengan padanan formalnya.',
            'pairs' => [
                ['left' => 'find out', 'right' => 'ascertain'],
                ['left' => 'help out', 'right' => 'assist'],
                ['left' => 'buy', 'right' => 'purchase'],
                ['left' => 'set up', 'right' => 'establish'],
                ['left' => 'put off', 'right' => 'postpone'],
            ],
            'explanation' => 'Register formal memilih kata berbahasa Latin/asing (ascertain, assist, purchase, establish, postpone) alih-alih padanan informal atau phrasal verb sehari-hari.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'We would appreciate it if you could confirm your availability by Thursday.',
            'prompt' => 'Dengarkan kalimat berikut, lalu tentukan apa yang diminta pembicara.',
            'options' => [
                'Konfirmasi ketersediaan paling lambat hari Kamis.',
                'Pembatalan rapat pada hari Kamis.',
                'Pengiriman dokumen sebelum hari Kamis.',
                'Permintaan agar rapat dipindah ke hari Kamis.',
            ],
            'answer' => 0,
            'explanation' => '<em>We would appreciate it if you could ...</em> adalah permintaan formal, dan <em>confirm your availability by Thursday</em> berarti mengonfirmasi ketersediaan paling lambat Kamis.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Dear Mr Hale,<br><br>Thank you for your proposal regarding the supply contract. After careful consideration, we have decided not to proceed at this stage. This in no way reflects on the quality of your services; rather, the decision stems from a realignment of our internal priorities. Should circumstances change, we would welcome the opportunity to revisit the discussion.<br><br>Yours sincerely,<br>Elena Marsh, Procurement Director</p></div><p>Apa inti pesan email tersebut?</p>',
            'options' => [
                'Perusahaan menerima tawaran Mr Hale.',
                'Perusahaan menolak tawaran Mr Hale secara halus dengan menyisakan kemungkinan di masa depan.',
                'Perusahaan menuduh Mr Hale menyediakan layanan berkualitas buruk.',
                'Perusahaan meminta Mr Hale mengirim ulang proposal.',
            ],
            'answer' => 1,
            'explanation' => '<em>Decided not to proceed</em> = menolak; <em>this in no way reflects on the quality of your services</em> = melembutkan penolakan; <em>welcome the opportunity to revisit</em> = membuka kemungkinan masa depan.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan ketidaksetujuanmu terhadap sebuah rencana secara diplomatis.',
            'target' => 'I understand your concerns; however, I believe the benefits of the plan outweigh the risks.',
            'hint' => 'Arti: Saya memahami kekhawatiran Anda; namun, saya yakin manfaat rencana itu melebihi risikonya.',
            'explanation' => 'Pola diplomatis: mengakui pandangan lawan → transisi (<em>however</em>) → argumen sendiri dengan verba penyeimbang (<em>outweigh</em>).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Bujuk audiensmu dengan menyebut dua keuntungan sekaligus.',
            'target' => 'Not only does this approach save time, but it also reduces costs significantly.',
            'hint' => 'Arti: Pendekatan ini tidak hanya menghemat waktu, tetapi juga menurunkan biaya secara signifikan.',
            'explanation' => '<em>Not only ... but also</em> di awal kalimat memicu inversion pada klausa pertama (<em>does this approach save</em>) — struktur persuasif yang kuat dan formal.',
        ],
    ],
];
