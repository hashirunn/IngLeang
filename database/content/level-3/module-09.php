<?php

/**
 * Level 3 — Modul 09: Academic & Professional Writing
 *
 * Esai argumentatif, laporan, proposal, dan ringkasan (C1–C2).
 * Format konten dan tipe soal mengikuti file referensi level-1/module-01.
 */
return [
    'title' => 'Academic & Professional Writing',
    'slug' => 'academic-professional-writing',
    'subtitle' => 'Esai argumentatif, laporan, proposal, ringkasan',
    'summary' => 'Menulis teks akademik dan profesional: menyusun tesis dan argumen, melaporkan temuan secara objektif, mengajukan proposal yang meyakinkan, serta meringkas sumber dengan tepat.',
    'icon' => '📝',
    'objectives' => [
        'Menyusun thesis statement dan struktur esai argumentatif',
        'Menulis bagian laporan dengan bahasa objektif dan hati-hati',
        'Menyusun proposal yang memuat alasan, sasaran, dan rencana',
        'Membedakan ringkasan, parafrase, dan opini pribadi',
    ],
    'sections' => [
        [
            'heading' => 'Esai Argumentatif: Kerangka dan Tesis',
            'body' => '<p>Esai argumentatif dimulai dengan <strong>thesis statement</strong> yang spesifik, dapat diperdebatkan, dan memuat arah seluruh tulisan. Paragraf tubuh mengembangkan satu gagasan per paragraf dengan pola <em>claim &ndash; evidence &ndash; explanation</em>.</p>
<ul>
<li>Pendahuluan: konteks singkat &rarr; thesis &rarr; gambaran struktur.</li>
<li>Paragraf argumen: klaim, bukti, lalu penjelasan mengapa bukti relevan.</li>
<li>Kontraargumen: akui poin lawan dengan konsesi, lalu bantah secara halus.</li>
<li>Penutup: sintesis seluruh argumen, bukan pengulangan pendahuluan.</li>
</ul>
<p>Thesis yang lemah bersifat terlalu umum atau hanya menyebut topik; thesis yang kuat menyatakan <strong>posisi</strong> yang bisa dibantah orang lain.</p>',
            'examples' => [
                ['en' => 'This essay argues that remote assessment should complement, not replace, classroom testing.', 'id' => 'Esai ini berargumen bahwa penilaian jarak jauh sebaiknya melengkapi, bukan menggantikan, penilaian di kelas.'],
                ['en' => 'Admittedly, the sample was small; nevertheless, the pattern is consistent across three studies.', 'id' => 'Memang sampelnya kecil; namun demikian, polanya konsisten pada tiga penelitian.'],
                ['en' => 'To sum up, the policy has narrowed the gap, but only partly.', 'id' => 'Ringkasnya, kebijakan itu mempersempit kesenjangan, tetapi hanya sebagian.'],
            ],
        ],
        [
            'heading' => 'Laporan Profesional (Reports)',
            'body' => '<p>Laporan profesional disusun agar pembaca sibuk bisa menemukan jawaban dengan cepat. Setiap bagian memiliki fungsi dan penanda bahasa yang khas.</p>
<table>
<thead><tr><th>Bagian</th><th>Fungsi</th><th>Penanda bahasa</th></tr></thead>
<tbody>
<tr><td>Executive summary</td><td>ringkasan satu halaman</td><td>This report outlines ...</td></tr>
<tr><td>Findings</td><td>menyajikan data dan hasil</td><td>The data indicate that ...</td></tr>
<tr><td>Discussion</td><td>menginterpretasi temuan</td><td>This suggests that ...</td></tr>
<tr><td>Recommendations</td><td>menyaranakan tindakan</td><td>It is recommended that ...</td></tr>
</tbody>
</table>
<p>Gunakan kalimat pasif dan sudut pandang pihak ketiga agar laporan terdengar objektif, misalnya <em>the process was reviewed</em> alih-alih <em>we reviewed the process</em>.</p>',
            'examples' => [
                ['en' => 'The data indicate that response times have fallen since the update.', 'id' => 'Data menunjukkan bahwa waktu tanggap berkurang sejak pembaruan itu.'],
                ['en' => 'It is recommended that the screening process be reviewed annually.', 'id' => 'Disarankan agar proses penyaringan ditinjau setiap tahun.'],
                ['en' => 'Two hundred interviews were conducted between March and June.', 'id' => 'Dua ratus wawancara dilakukan antara Maret dan Juni.'],
            ],
        ],
        [
            'heading' => 'Proposal',
            'body' => '<p>Proposal meyakinkan pembaca bahwa masalah layak diselesaikan dan bahwa rencana yang ditawarkan realistis. Bagian wajibnya adalah <em>rationale</em> (alasan), <em>objectives</em> (sasaran), <em>scope</em> (ruang lingkup), <em>deliverables</em> (keluaran kerja), dan <em>timeline</em> (jadwal).</p>
<ul>
<li>Sampaikan masalah dengan angka, bukan dengan emosi.</li>
<li>Gunakan modal ramah-tamah seperti <em>is expected to</em> dan <em>could</em> untuk proyeksi, bukan <em>will certainly</em>.</li>
<li>Sebutkan risiko singkat dan cara memitigasinya; ini menandakan perencanaan yang matang.</li>
</ul>',
            'examples' => [
                ['en' => 'The rationale for this project is the steady rise in customer complaints since 2022.', 'id' => 'Alasan proyek ini adalah meningkatnya keluhan pelanggan sejak tahun 2022.'],
                ['en' => 'The initiative is expected to reduce response times by thirty per cent.', 'id' => 'Inisiatif ini diperkirakan mempercepat waktu tanggap sebesar tiga puluh persen.'],
                ['en' => 'Deliverables will be submitted at the end of each quarter.', 'id' => 'Keluaran kerja akan diserahkan pada akhir setiap kuartal.'],
            ],
        ],
        [
            'heading' => 'Ringkasan, Parafrase, dan Sintesis',
            'body' => '<p>Ketiga keterampilan ini sering tertukar padahal fungsinya berbeda:</p>
<ol>
<li><strong>Ringkasan</strong>: menyajikan ide utama sumber dengan bahasa sendiri, <strong>tanpa</strong> menambahkan pendapat penulis ringkasan.</li>
<li><strong>Parafrase</strong>: mengulang satu gagasan sumber secara lengkap dengan struktur dan kata yang berbeda, tetapi makna yang sama.</li>
<li><strong>Sintesis</strong>: menggabungkan beberapa sumber untuk membangun satu argumen baru.</li>
</ol>
<p>Selalu sebutkan sumber dengan atribusi seperti <em>according to the study</em>. Menyalin kalimat sumber tanpa tanda kutip adalah plagiarisme, meski maknanya diubah sedikit.</p>',
            'examples' => [
                ['en' => 'According to the authors, the effect fades after six months.', 'id' => 'Menurut para penulis, efek itu memudar setelah enam bulan.'],
                ['en' => 'The study concludes that flexible deadlines improve completion rates.', 'id' => 'Studi itu menyimpulkan bahwa tenggat yang fleksibel meningkatkan tingkat penyelesaian.'],
                ['en' => 'While the first report blames staffing, the second stresses training gaps.', 'id' => 'Laporan pertama menyalahkan kekurangan staf, sedangkan laporan kedua menekankan kesenjangan pelatihan.'],
            ],
        ],
        [
            'heading' => 'Gaya Akademik: Hedging dan Nominalisasi',
            'body' => '<p> Tulisan akademik yang baik menyeimbangkan keyakinan dengan kejujuran tentang keterbatasan bukti.</p>
<ul>
<li><strong>Hedging</strong>: <em>may, tends to, it is likely that</em> untuk klaim yang belum terbukti penuh; bandingkan <em>contribute to</em> (berkontribusi terhadap) dengan <em>cause</em> (menyebabkan).</li>
<li><strong>Nominalisasi</strong>: mengubah kata kerja menjadi kata benda agar kalimat lebih padat, misalnya <em>the government decided</em> menjadi <em>the decision of the government</em>.</li>
<li><strong>Penggunaan kata ganti</strong>: <em>I</em> hanya dipakai bila memang diperlukan; banyak jurnal memakai <em>we</em> atau kalimat pasif.</li>
<li><strong>Pemilihan tense</strong>: gunakan <em>present simple</em> untuk membahas isi teks (<em>the author argues</em>) dan <em>past simple</em> untuk metode yang sudah dilakukan (<em>the team collected</em>).</li>
</ul>',
            'examples' => [
                ['en' => 'These factors may contribute to higher dropout rates.', 'id' => 'Faktor-faktor ini mungkin berkontribusi terhadap tingkat putus sekolah yang lebih tinggi.'],
                ['en' => 'The authors argue that the measure is cost-effective.', 'id' => 'Para penulis berargumen bahwa langkah itu efisien dari segi biaya.'],
                ['en' => 'The team collected data from four districts last year.', 'id' => 'Tim mengumpulkan data dari empat distrik tahun lalu.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'thesis statement', 'phonetic' => '/ˈsiːsɪs ˈsteɪtmənt/', 'meaning' => 'kalimat tesis; posisi utama esai', 'example' => 'A clear thesis statement guides the whole essay.'],
        ['word' => 'rationale', 'phonetic' => '/ˌræʃəˈnɑːl/', 'meaning' => 'alasan logis di balik sebuah keputusan', 'example' => 'The rationale for the merger is still unclear.'],
        ['word' => 'executive summary', 'phonetic' => '/ɪɡˈzekjətɪv ˈsʌməri/', 'meaning' => 'ringkasan eksekutif satu halaman', 'example' => 'Executives read the executive summary first.'],
        ['word' => 'deliverable', 'phonetic' => '/dɪˈlɪvərəbl/', 'meaning' => 'keluaran kerja yang harus diserahkan', 'example' => 'Each deliverable has a clear deadline.'],
        ['word' => 'scope', 'phonetic' => '/skəʊp/', 'meaning' => 'ruang lingkup kajian atau pekerjaan', 'example' => 'The scope of the study is limited to urban schools.'],
        ['word' => 'counterargument', 'phonetic' => '/ˌkaʊntərˈɑːɡjumənt/', 'meaning' => 'kontraargumen yang diakui lalu dibantah', 'example' => 'Addressing the counterargument strengthens your essay.'],
        ['word' => 'It is recommended that', 'phonetic' => '/ɪt ɪz rɪˈkəməndɪd ðæt/', 'meaning' => 'disarankan bahwa (ungkapan laporan)', 'example' => 'It is recommended that the process be automated.'],
        ['word' => 'paraphrase', 'phonetic' => '/ˈpærəfreɪz/', 'meaning' => 'parafrase; mengungkapkan ulang dengan kata sendiri', 'example' => 'A good paraphrase changes both structure and wording.'],
        ['word' => 'corroborate', 'phonetic' => '/kəˈrɒrəreɪt/', 'meaning' => 'memperkuat dengan bukti tambahan', 'example' => 'Two independent witnesses corroborated the account.'],
        ['word' => 'outline', 'phonetic' => '/ˈaʊtlaɪn/', 'meaning' => 'menguraikan secara ringkas; kerangka', 'example' => 'The report outlines three possible solutions.'],
        ['word' => 'overarching', 'phonetic' => '/ˌəʊvərˈɑːtʃɪŋ/', 'meaning' => 'menyeluruh; menjadi penuntun', 'example' => 'The overarching goal is to reduce inequality.'],
        ['word' => 'concede', 'phonetic' => '/kənˈsiːd/', 'meaning' => 'mengakui poin lawan', 'example' => 'The author concedes that costs may rise initially.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Pilih <em>thesis statement</em> yang paling tepat untuk esai argumentatif.',
            'options' => [
                'While online learning expands access, it should complement rather than replace face-to-face teaching.',
                'This essay is about online learning.',
                'Online learning has become very popular all over the world.',
                'There are many advantages and disadvantages of online learning.',
            ],
            'answer' => 0,
            'explanation' => 'Thesis yang baik menyatakan posisi yang spesifik dan bisa diperdebatkan. Opsi lain hanya menyebut topik, menyatakan fakta umum, atau mendaftar dua sisi tanpa menentukan sikap.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Bagian laporan profesional yang berisi saran tindakan adalah ...',
            'options' => ['Executive summary', 'Findings', 'Recommendations', 'Appendix'],
            'answer' => 2,
            'explanation' => '<em>Recommendations</em> memuat saran tindakan. <em>Executive summary</em> merangkum keseluruhan laporan, <em>findings</em> menyajikan data, dan <em>appendix</em> berisi lampiran pendukung.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Kalimat mana yang paling sesuai dengan gaya objektif laporan profesional?',
            'options' => [
                'The data indicate that response times have fallen since the update.',
                'We think the update made everything much better.',
                'Obviously, the team did a fantastic job.',
                'The update is surely the best solution ever.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat pertama berfokus pada data dengan sudut pandang pihak ketiga. Opsi lain memakai penilaian pribadi (<em>we think</em>) dan kata berlebihan (<em>obviously</em>, <em>surely</em>, <em>best ever</em>) yang tidak objektif.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Frasa mana yang paling tepat untuk menyatakan hubungan sebab-akibat secara hati-hati dalam esai akademik?',
            'options' => [
                'may contribute to',
                'definitely causes',
                'always results in',
                'proves beyond doubt that',
            ],
            'answer' => 0,
            'explanation' => '<em>May contribute to</em> menyatakan kemungkinan tanpa klaim kausalitas mutlak, sehingga sesuai dengan bukti empiris yang biasanya belum tuntas. Opsi lain menyatakan kepastian penuh.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi kalimat berikut:<br>&ldquo;The ___ for the project is the rising number of customer complaints.&rdquo;',
            'answer' => 'rationale',
            'accepted' => ['rationale'],
            'explanation' => '<em>Rationale</em> berarti alasan logis yang mendasari sebuah keputusan atau proyek; frasa baku adalah <em>the rationale for something</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi ungkapan rekomendasi dalam laporan:<br>&ldquo;It is ___ that the screening process be reviewed annually.&rdquo;',
            'answer' => 'recommended',
            'accepted' => ['recommended'],
            'explanation' => 'Pola baku laporan: <em>It is recommended that + subjek + kata kerja dasar</em> (<em>be reviewed</em>). Pola ini menyampaikan saran secara formal tanpa menyebut penulis laporan.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi aturan parafrase berikut:<br>&ldquo;A paraphrase must keep the original meaning while changing both the structure and the ___.&rdquo;',
            'answer' => 'wording',
            'accepted' => ['wording', 'words'],
            'explanation' => 'Parafrase mengubah susunan kalimat <strong>dan</strong> pilihan kata (<em>wording</em>) sambil mempertahankan makna; jika hanya kata yang berganti, itu belum cukup disebut parafrase yang baik.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'writing',
            'prompt' => 'Dalam ringkasan akademik, penulis boleh menambahkan pendapat pribadi selama sumbernya tetap disebutkan.',
            'answer' => false,
            'explanation' => 'Ringkasan menyajikan isi sumber apa adanya tanpa menambahkan penilaian pribadi. Pendapat penulis muncul sebagai argumen tersendiri, bukan bagian dari ringkasan sumber.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'writing',
            'prompt' => '<em>Executive summary</em> ditulis setelah bagian utama laporan selesai dan memuat temuan serta rekomendasi penting.',
            'answer' => true,
            'explanation' => 'Karena isinya merangkum keseluruhan laporan, <em>executive summary</em> baru bisa ditulis setelah semua bagian lengkap, lalu diletakkan di halaman pertama.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan istilah penulisan profesional dengan artinya.',
            'pairs' => [
                ['left' => 'scope', 'right' => 'ruang lingkup kajian atau pekerjaan'],
                ['left' => 'deliverable', 'right' => 'hasil kerja yang harus diserahkan'],
                ['left' => 'rationale', 'right' => 'alasan logis di balik keputusan'],
                ['left' => 'counterargument', 'right' => 'argumen lawan yang diakui lalu dibantah'],
                ['left' => 'timeline', 'right' => 'jadwal waktu pelaksanaan'],
            ],
            'explanation' => 'Istilah ini muncul di hampir semua dokumen profesional; memahaminya membantu menyusun bagian proposal dan laporan dengan istilah yang tepat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'This report outlines three options. On balance, the second option offers the best value for money.',
            'prompt' => 'Dengarkan audio. Apa rekomendasi penutur?',
            'options' => [
                'Opsi kedua dianggap paling seimbang antara manfaat dan biaya',
                'Ketiga opsi sama baiknya sehingga tidak ada pilihan terbaik',
                'Laporan ini hanya menjelaskan tanpa memberikan rekomendasi',
                'Opsi pertama dipilih karena harganya paling murah',
            ],
            'answer' => 0,
            'explanation' => '<em>On balance</em> menandai penilaian akhir setelah menimbang berbagai sisi, dan <em>the second option offers the best value for money</em> menunjukkan pilihan jatuh pada opsi kedua.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>This study examines the effect of four-day work weeks on productivity in small firms. Drawing on survey data from 120 companies, we find that output per employee remained stable in most sectors but fell in customer-facing roles. The findings suggest that blanket adoption may be unwise; instead, firms should assess readiness before rollout.</p></div><p>Manakah ringkasan yang paling akurat dan netral terhadap temuan studi?</p>',
            'options' => [
                'Studi menemukan output per karyawan umumnya stabil, tetapi menurun pada peran yang berhadapan langsung dengan pelanggan, sehingga penerapan seragam perlu ditinjau.',
                'Studi membuktikan bahwa empat hari kerja selalu meningkatkan produktivitas.',
                'Studi menunjukkan bahwa semua sektor mengalami penurunan produktivitas.',
                'Studi menyarankan setiap perusahaan segera beralih ke empat hari kerja.',
            ],
            'answer' => 0,
            'explanation' => 'Ringkasan yang baik mempertahankan nuansa asli: stabil di sebagian besar sektor, turun pada peran yang berhadapan dengan pelanggan, dan penilaian hati-hati terhadap penerapan seragam. Tiga opsi lain menambahkan klaim yang tidak ada dalam sumber.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan tesis esaimu dengan kalimat berikut.',
            'target' => 'This essay argues that technology should support teachers, not replace them.',
            'hint' => 'Arti: Esai ini berargumen bahwa teknologi seharusnya mendukung guru, bukan menggantikan mereka.',
            'explanation' => 'Pola <em>This essay argues that ...</em> adalah cara baku memperkenalkan tesis: posisi jelas, nada akademis, dan langsung menandai arah tulisan.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan rekomendasi formal dalam sebuah rapat dengan kalimat berikut.',
            'target' => 'It is recommended that the company review its hiring process before the next quarter.',
            'hint' => 'Arti: Disarankan agar perusahaan meninjau ulang proses perekrutannya sebelum kuartal berikutnya.',
            'explanation' => 'Gunakan <em>It is recommended that ...</em> untuk menyampaikan saran secara formal tanpa terdengar memerintah, lalu ikuti dengan kata kerja dasar (<em>review</em>).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'The executive summary must be written after the rest of the report is complete.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;The ___ summary must be written after the rest of the report is complete.&rdquo;',
            'answer' => 'executive',
            'accepted' => ['executive'],
            'explanation' => 'Kalimat yang terdengar adalah <em>The executive summary must be written after the rest of the report is complete</em>, artinya ringkasan eksekutif ditulis setelah bagian lain laporan selesai.',
        ],
    ],
];
