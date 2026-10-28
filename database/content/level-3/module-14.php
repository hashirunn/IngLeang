<?php

/**
 * Level 3 — Modul 14: Professional English
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
    'title' => 'Professional English',
    'slug' => 'professional-english',
    'subtitle' => 'Rapat, laporan, presentasi, dan komunikasi lintas budaya',
    'summary' => 'Menguasai bahasa Inggris untuk situasi kerja: memimpin dan mengikuti rapat, menulis laporan formal, mempresentasikan data, serta berkomunikasi secara efektif dengan rekan lintas budaya.',
    'icon' => '💼',
    'objectives' => [
        'Menyampaikan persetujuan dan ketidaksetujuan secara diplomatis dalam rapat',
        'Menulis laporan profesional dengan gaya formal dan klaim yang hati-hati',
        'Memimpin presentasi dengan signposting dan bahasa data yang tepat',
        'Menyesuaikan komunikasi dengan rekan kerja dari latar budaya yang berbeda',
    ],
    'sections' => [
        [
            'heading' => 'Rapat: Memimpin dan Mengikuti Diskusi',
            'body' => '<p>Rapat profesional mengikuti struktur yang jelas. Sebagai peserta, kamu perlu fasih dalam empat fungsi berikut:</p>
<ul>
<li><strong>Membuka</strong> — <em>Thank you all for joining. Let&#039;s get straight to the agenda.</em></li>
<li><strong>Menyampaikan pandangan</strong> — <em>From my perspective ...</em> / <em>I&#039;d like to add one point.</em></li>
<li><strong>Menyepakati dan menolak dengan sopan</strong> — <em>I&#039;m on board with that</em> vs <em>I see your point, though I&#039;m not convinced yet.</em></li>
<li><strong>Menindaklanjuti</strong> — <em>So, to recap: Priya will circulate the figures by Wednesday.</em></li>
</ul>
<p>Perhatikan istilah rapat yang sering muncul: <em>agenda</em> (daftar acara), <em>action item</em> (tugas tindak lanjut), <em>minutes</em> (risalah rapat), dan <em>follow-up</em> (tindak lanjut). Ungkapan <em>&ldquo;Let&#039;s shelve this for now&rdquo;</em> berarti menunda topik, bukan membuangnya.</p>',
            'examples' => [
                ['en' => 'I&#039;m broadly in favour, but I&#039;d like to see the costings first.', 'id' => 'Secara umum saya setuju, tetapi saya ingin melihat perhitungan biayanya dulu.'],
                ['en' => 'Could I jump in here for a second?', 'id' => 'Bolehkah saya menyela sebentar?'],
                ['en' => 'Let&#039;s take that offline and come back to it after the meeting.', 'id' => 'Mari kita bahas itu secara terpisah dan kembali setelah rapat.'],
            ],
        ],
        [
            'heading' => 'Laporan Profesional',
            'body' => '<p>Laporan formal biasanya tersusun atas <strong>executive summary</strong>, <strong>findings</strong>, <strong>discussion</strong>, dan <strong>recommendations</strong>. Gaya bahasanya objektif, menggunakan kata benda abstrak dan klaim yang dijaga hati-hati.</p>
<table>
<thead><tr><th>Fungsi</th><th>Ekspresi yang lazim</th></tr></thead>
<tbody>
<tr><td>Menyatakan temuan</td><td>The data indicate that ... / The survey reveals a clear trend in ...</td></tr>
<tr><td>Menunjukkan hubungan sebab-akibat</td><td>This appears to stem from ... / can be attributed to ...</td></tr>
<tr><td>Memberi rekomendasi</td><td>It is recommended that ... / We would suggest restructuring ...</td></tr>
<tr><td>Menyatakan keterbatasan</td><td>These findings should be interpreted with caution owing to ...</td></tr>
</tbody>
</table>
<p>Perhatikan kolokasi baku: <em>submit a report</em>, <em>present the figures</em>, <em>reach a decision</em>, <em>have an impact</em>, dan <em>meet a deadline</em>. Angka naik ditulis <em>rise <strong>by</strong> 12 per cent</em>, sedangkan angka akhir ditulis <em>rise <strong>to</strong> 250 units</em>.</p>',
            'examples' => [
                ['en' => 'Revenue rose by eight per cent year on year.', 'id' => 'Pendapatan naik delapan persen dibanding tahun sebelumnya.'],
                ['en' => 'The delay can largely be attributed to supply chain disruptions.', 'id' => 'Keterlambatan sebagian besar bisa dikaitkan dengan gangguan rantai pasok.'],
                ['en' => 'We recommend that the pilot scheme be extended by six months.', 'id' => 'Kami merekomendasikan agar skema uji coba diperpanjang enam bulan.'],
            ],
        ],
        [
            'heading' => 'Presentasi dan Bahasa Data',
            'body' => '<p>Pembicaraan yang baik menuntun pendengar dengan <strong>signposting</strong> yang eksplisit:</p>
<ol>
<li><strong>Pembuka</strong> — <em>Today I&#039;d like to walk you through three key findings.</em></li>
<li><strong>Transisi</strong> — <em>Having covered the sales figures, let me turn to customer satisfaction.</em></li>
<li><strong>Penjelasan data</strong> — <em>As you can see from the chart, output peaked in June and then levelled off.</em></li>
<li><strong>Penutup</strong> — <em>To sum up, ...</em> lalu undang tanya jawab: <em>I&#039;d be happy to take any questions.</em></li>
</ol>
<p>Gunakan kata kerja tren yang tepat: <em>rise, fall, peak at, level off, fluctuate, recover</em>, dan <em>remain steady</em>. Saat bertanya, mulai dengan apresiasi: <em>That&#039;s a great question —</em></p>',
            'examples' => [
                ['en' => 'Output peaked at 1,200 units in June before levelling off.', 'id' => 'Produksi mencapai puncak 1.200 unit pada Juni sebelum stabil.'],
                ['en' => 'Sales fluctuated throughout the quarter but recovered in December.', 'id' => 'Penjualan berfluktuasi sepanjang kuartal tetapi pulih pada Desember.'],
                ['en' => 'Let me turn now to the second part of my talk.', 'id' => 'Sekarang izinkan saya beralih ke bagian kedua presentasi saya.'],
            ],
        ],
        [
            'heading' => 'Komunikasi Lintas Budaya',
            'body' => '<p>Ketika bekerja dengan rekan dari latar budaya yang berbeda, prinsip utamanya adalah <strong>jelas, sopan, dan mudah diikuti</strong>:</p>
<ul>
<li><strong>Hindari idiom lokal</strong> pada audiens internasional. <em>Move the goalposts</em> bisa membingungkan; katakan <em>change the requirements</em>.</li>
<li><strong>Jelaskan singkatan</strong> saat pertama kali dipakai: <em>KPI (key performance indicator)</em>.</li>
<li><strong>Sadari perbedaan kelangsungan</strong> — budaya berkonteks tinggi sering menyampaikan penolakan secara tidak langsung (&ldquo;I will try&rdquo; bisa berarti tidak).</li>
<li><strong>Topik yang aman</strong> — pekerjaan, proyek, acara netral; hindari politik, agama, dan gaji pada obrolan pembuka.</li>
</ul>
<p>Perhatikan juga perbedaan sebutan: <em>Mr/Ms + nama belakang</em> (formal) vs <em>panggilan nama depan</em> (santai). Amati dulu bagaimana rekanmu menyapa, lalu ikuti.</p>',
            'examples' => [
                ['en' => 'For those joining us for the first time, let me explain how our KPI system works.', 'id' => 'Untuk yang baru bergabung, izinkan saya menjelaskan cara kerja sistem KPI kami.'],
                ['en' => 'Could you clarify what you mean by &#034;as soon as possible&#034;?', 'id' => 'Bisakan Anda memperjelas maksud Anda dengan &#034;secepat mungkin&#034;?'],
                ['en' => 'We have several stakeholders to consider across three time zones.', 'id' => 'Ada beberapa pemangku kepentingan yang perlu kami pertimbangkan di tiga zona waktu.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'stakeholder', 'phonetic' => '/ˈsteɪkhəʊldər/', 'meaning' => 'pemangku kepentingan', 'example' => 'We consulted every stakeholder before the launch.'],
        ['word' => 'action item', 'phonetic' => '/ˈækʃn ˈaɪtəm/', 'meaning' => 'tugas tindak lanjut hasil rapat', 'example' => 'Let me write that down as an action item.'],
        ['word' => 'deliverable', 'phonetic' => '/dɪˈlɪvərəbl/', 'meaning' => 'hasil kerja yang harus diserahkan', 'example' => 'The main deliverable is a written report.'],
        ['word' => 'follow up', 'phonetic' => '/ˈfɒləʊ ʌp/', 'meaning' => 'menindaklanjuti', 'example' => 'I will follow up with the supplier tomorrow.'],
        ['word' => 'sign off on', 'phonetic' => '/saɪn ɒf ɒn/', 'meaning' => 'memberi persetujuan resmi', 'example' => 'The director has signed off on the budget.'],
        ['word' => 'circle back', 'phonetic' => '/ˈsɜːkl bæk/', 'meaning' => 'kembali membahas topik nanti', 'example' => 'Let&#039;s circle back to this after the demo.'],
        ['word' => 'quarterly report', 'phonetic' => '/ˈkwɔːtəli rɪˈpɔːt/', 'meaning' => 'laporan triwulanan', 'example' => 'The quarterly report is due on Monday.'],
        ['word' => 'key takeaway', 'phonetic' => '/kiː ˈteɪkəweɪ/', 'meaning' => 'poin utama yang harus diingat', 'example' => 'The key takeaway is that costs keep rising.'],
        ['word' => 'on the same page', 'phonetic' => '/ɒn ðə seɪm peɪdʒ/', 'meaning' => 'sepemahaman / satu persepsi', 'example' => 'Let&#039;s make sure we are all on the same page.'],
        ['word' => 'scope creep', 'phonetic' => '/skəʊp kriːp/', 'meaning' => 'perluasan lingkup proyek yang tak terkendali', 'example' => 'Scope creep is why the project went over budget.'],
        ['word' => 'net profit', 'phonetic' => '/net ˈprɒfɪt/', 'meaning' => 'laba bersih', 'example' => 'Net profit fell by two per cent this quarter.'],
        ['word' => 'headquarters', 'phonetic' => '/ˌhedˈkwɔːtərz/', 'meaning' => 'kantor pusat', 'example' => 'The headquarters moved to Rotterdam last year.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam rapat, kamu tidak setuju dengan usul rekan. Pernyataan mana yang paling diplomatis?',
            'options' => [
                'That won&#039;t work at all.',
                'You clearly haven&#039;t thought this through.',
                'I see your point, though I interpret the evidence differently.',
                'That idea is completely unrealistic.',
            ],
            'answer' => 2,
            'explanation' => 'Bahasa diplomatik mengakui sudut pandang lawan bicara terlebih dahulu (<em>I see your point</em>) lalu menyampaikan perbedaan dengan kata peredam <em>though</em>, tanpa menyerang pribadi.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam konteks bisnis, apa arti kalimat &ldquo;The board gave the proposal the green light&rdquo;?',
            'options' => [
                'Dewan menolak proposal tersebut.',
                'Dewan menyetujui proposal tersebut.',
                'Dewan menunda proposal sampai kuartal berikutnya.',
                'Dewan meminta lampu hijau untuk rapat berikutnya.',
            ],
            'answer' => 1,
            'explanation' => '<em>Give something the green light</em> adalah idiom bisnis yang berarti <strong>memberi persetujuan</strong> untuk melanjutkan suatu rencana.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Frasa mana yang secara tepat memperkenalkan ringkasan dalam presentasi?',
            'options' => ['To sum up,', 'On the other hand,', 'For the time being,', 'In the light of this,'],
            'answer' => 0,
            'explanation' => '<em>To sum up</em> menandai ringkasan; <em>on the other hand</em> menandai kontras, <em>for the time being</em> menandai sementara, dan <em>in the light of this</em> memperkenalkan kesimpulan atau tindakan lanjutan.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi kalimat email profesional: &ldquo;Could you ___ back to me with an update by Friday?&rdquo;',
            'answer' => 'get',
            'accepted' => ['get'],
            'explanation' => 'Ungkapan baku: <strong>get back to me</strong> (memberi kabar kepada saya kembali). Bentuk lain yang formal: <em>Could you revert with an update ...</em> (lazim dalam bisnis Asia).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi penutup email formal: &ldquo;We look forward to ___ from you.&rdquo;',
            'answer' => 'hearing',
            'accepted' => ['hearing'],
            'explanation' => '<em>Look forward to</em> diikuti gerund (<em>to hearing</em>), karena <em>to</em> di sini adalah bagian dari frasa kata kerja, bukan infinitive marker.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi bahasa laporan yang benar: &ldquo;Sales rose ___ 12 per cent in the third quarter.&rdquo;',
            'answer' => 'by',
            'accepted' => ['by'],
            'explanation' => 'Gunakan <strong>by</strong> untuk menyatakan besarnya perubahan (<em>rose by 12 per cent</em>) dan <strong>to</strong> untuk menyatakan nilai akhir (<em>rose to 12,000 units</em>).',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam rapat bisnis, ungkapan &ldquo;Let&#039;s shelve this for now&rdquo; berarti topik tersebut akan ditunda dan dibahas lagi nanti.',
            'answer' => true,
            'explanation' => '<em>To shelve a topic</em> berarti menaruhnya &#034;di rak&#034; — menunda pembahasan, bukan membuang atau menolaknya.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Saat mempresentasikan di depan audiens internasional, sebaiknya memakai idiom budaya sendiri sebanyak mungkin agar terdengar alami.',
            'answer' => false,
            'explanation' => 'Idiom lokal seperti <em>move the goalposts</em> sering tidak dipahami penutur non-native; ganti dengan ungkapan literal yang jelas dan jelaskan singkatan saat pertama dipakai.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan ungkapan dunia kerja dengan artinya.',
            'pairs' => [
                ['left' => 'circle back', 'right' => 'kembali membahas topik pada waktu yang lebih tepat'],
                ['left' => 'touch base', 'right' => 'berkomunikasi sebentar untuk menyamakan kabar'],
                ['left' => 'the bottom line', 'right' => 'angka terpenting atau inti persoalan'],
                ['left' => 'scope creep', 'right' => 'perluasan lingkup proyek yang tak terkendali'],
                ['left' => 'sign off on', 'right' => 'memberikan persetujuan resmi'],
            ],
            'explanation' => 'Istilah-istilah ini muncul hampir di setiap rapat proyek; memahaminya membantumu mengikuti keputusan dan tenggat yang disepakati.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Right, that is the budget agreed. Priya, you will circulate the revised figures by Wednesday. I will take the proposal to the board on Friday. Dan, could you book a room for the follow-up meeting next week?',
            'prompt' => 'Dengarkan ringkasan tindak lanjut rapat ini. Apa yang akan dilakukan pembicara pada hari Jumat?',
            'options' => [
                'Mengirimkan angka yang direvisi.',
                'Membawa proposal ke dewan direksi.',
                'Memesan ruang rapat.',
                'Mengubah anggaran bersama Priya.',
            ],
            'answer' => 1,
            'explanation' => 'Pembicara berkata <em>&ldquo;I will take the proposal to the board on Friday&rdquo;</em>; tugas lain (mengirim angka, memesan ruangan) diberikan kepada Priya dan Dan sehingga menjadi distraktor.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'Revenue was up eight per cent year on year, though profits slipped slightly because of higher shipping costs.',
            'prompt' => 'Dengarkan ringkasan kinerja ini, lalu lengkapi: &ldquo;Profits slipped slightly because of higher ___ costs.&rdquo;',
            'answer' => 'shipping',
            'accepted' => ['shipping'],
            'explanation' => 'Penurunan laba disebabkan oleh kenaikan biaya <em>shipping</em> (pengiriman); <em>year on year</em> berarti dibandingkan dengan periode yang sama tahun sebelumnya.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Dear Ms Tan, Thank you for your presentation yesterday. The board has reviewed your proposal and is broadly supportive. However, two points require clarification before we can proceed: first, the assumptions behind the three-year forecast; second, the staffing costs for Phase Two. Could you address both points in a short addendum by 15 October? Once we receive it, we can move to sign-off. Kind regards, H. Visser, Chief Operating Officer</p></div><p>Apa tujuan utama email ini?</p>',
            'options' => [
                'Menolak proposal secara permanen.',
                'Meminta klarifikasi tambahan sebelum proposal disetujui.',
                'Menjadwalkan presentasi ulang.',
                'Memberi selamat atas kenaikan jabatan.',
            ],
            'answer' => 1,
            'explanation' => 'Email menyatakan dukungan umum (<em>broadly supportive</em>) namun meminta dua klarifikasi dalam lampiran sebelum <em>sign-off</em> — persetujuan diberikan bersyarat.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Bukalah presentasi profesional dengan kalimat pembuka berikut.',
            'target' => 'Thank you all for coming. Today I&#039;d like to walk you through the main findings of our customer survey.',
            'hint' => 'Arti: Terima kasih atas kehadiran semua orang. Hari ini saya ingin membahas temuan utama survei pelanggan kami.',
            'explanation' => 'Pembuka presentasi yang baik berisi ucapan terima kasih, lalu signposting isi presentasi dengan kata kerja <em>walk you through</em> (membimbing melalui).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Mintalah klarifikasi diplomatis saat rapat.',
            'target' => 'Sorry, just to make sure I&#039;ve got this right — are you suggesting we delay the launch?',
            'hint' => 'Arti: Maaf, hanya untuk memastikan saya paham — apakah Anda menyarankan kita menunda peluncuran?',
            'explanation' => 'Pola <em>just to make sure I&#039;ve got this right</em> memungkinkan kamu memverifikasi pemahaman tanpa terdengar meragukan lawan bicara.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Kalimat mana yang paling tepat untuk laporan formal?',
            'options' => [
                'A lot of people think the prices are way too high.',
                'Everybody knows our competitors are cheaper.',
                'The data indicate that our prices remain competitive in the region.',
                'Kindly do the needful regarding the pricing issue.',
            ],
            'answer' => 2,
            'explanation' => 'Laporan formal memakai bahasa objektif dan klaim berbasis bukti (<em>the data indicate ...</em>); pilihan lain terlalu informal, menggeneralisasi tanpa bukti, atau tidak lazim dalam bahasa Inggris internasional.',
        ],
    ],
];
