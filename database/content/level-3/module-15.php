<?php

/**
 * Level 3 — Modul 15: Integrated Projects
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
    'title' => 'Integrated Projects',
    'slug' => 'integrated-projects',
    'subtitle' => 'Presentasi dan tulisan berdasarkan sumber berbahasa Inggris',
    'summary' => 'Proyek akhir yang memadukan semua keterampilan: membaca sumber berbahasa Inggris, mensintesisnya menjadi laporan tertulis, lalu menyajikannya dalam presentasi profesional beserta sesi tanya jawab.',
    'icon' => '🚀',
    'objectives' => [
        'Merancang proyek dari tahap pemilihan sumber hingga presentasi akhir',
        'Mensintesis beberapa sumber menjadi satu gagasan yang konsisten tanpa plagiarisme',
        'Menyusun presentasi dengan struktur jelas, visual yang mendukung, dan sitasi lisan',
        'Memberi dan menerima umpan balik rekan sejawat secara konstruktif',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Proyek Terintegrasi?',
            'body' => '<p><strong>Proyek terintegrasi</strong> adalah tugas yang menggabungkan beberapa keterampilan bahasa dalam satu alur kerja nyata. Urutan kerjanya umumnya seperti ini:</p>
<ol>
<li><strong>Perencanaan</strong> — tentukan topik, pertanyaan penuntun, dan jenis hasil akhir (laporan, presentasi, atau keduanya).</li>
<li><strong>Pengumpulan sumber</strong> — kumpulkan artikel, laporan, atau wawancara berbahasa Inggris; catat detail penerbitan untuk sitasi.</li>
<li><strong>Sintesis</strong> — gabungkan temuan dari beberapa sumber menjadi satu argumen yang konsisten.</li>
<li><strong>Produksi</strong> — tulis laporan dan buat slide presentasi.</li>
<li><strong>Latihan dan presentasi</strong> — berlatih delivery, lalu sajikan beserta sesi tanya jawab.</li>
</ol>
<p>Kualitas proyek dinilai dari ketepatan memahami sumber, kejelasan struktur, serta kemampuan menjawab pertanyaan mendalam — bukan dari jumlah slide.</p>',
            'examples' => [
                ['en' => 'Our group combined a government report, two academic articles, and one interview.', 'id' => 'Kelompok kami menggabungkan laporan pemerintah, dua artikel akademik, dan satu wawancara.'],
                ['en' => 'We wrote the question that guided our whole project on the first day.', 'id' => 'Kami menulis pertanyaan penuntun proyek kami pada hari pertama.'],
                ['en' => 'The final product is a short report plus a ten-minute presentation.', 'id' => 'Hasil akhirnya adalah laporan singkat plus presentasi sepuluh menit.'],
            ],
        ],
        [
            'heading' => 'Membaca dan Mensintesis Sumber',
            'body' => '<p>Sintesis berarti <strong>menggabungkan ide dari beberapa sumber</strong> menjadi satu tulisan yang utuh, bukan meringkasnya satu per satu. Prinsip penting:</p>
<ul>
<li><strong>Evaluasi sumber</strong> — periksa kredibilitas penulis, tanggal terbit, dan kemungkinan bias.</li>
<li><strong>Paraphrase yang sah</strong> — tulis ulang dengan struktur dan kosakata sendiri, lalu tetap cantumkan sumber; hanya menganti beberapa kata masih tergolong plagiarisme.</li>
<li><strong>Sitasi</strong> — sebutkan sumber saat kamu memakai idenya: <em>According to Chen (2023) ...</em> atau <em>Chen (2023) argues that ...</em></li>
<li><strong>Kalimat penghubung</strong> — gabungkan temuan yang sejalan dengan <em>similarly, in line with this</em>, dan yang berbeda dengan <em>by contrast, however</em>.</li>
</ul>
<p>Hindari memuat tulisan orang lain apa adanya; gunakan tanda kutip hanya untuk frasa penting yang diucapkan persis, tidak lebih dari beberapa kata.</p>',
            'examples' => [
                ['en' => 'According to Chen (2023), remote work increased productivity by 11 per cent.', 'id' => 'Menurut Chen (2023), kerja jarak jauh meningkatkan produktivitas sebesar 11 persen.'],
                ['en' => 'Similarly, a 2022 report found that flexible schedules reduced staff turnover.', 'id' => 'Sama halnya, laporan 2022 menemukan bahwa jadwal fleksibel menurunkan putus pegawai.'],
                ['en' => 'By contrast, the survey in Chapter Two shows no significant effect.', 'id' => 'Sebaliknya, survei di Bab Dua tidak menunjukkan pengaruh yang signifikan.'],
            ],
        ],
        [
            'heading' => 'Menyusun Presentasi Berbasis Sumber',
            'body' => '<p>Presentasi akademis dan profesional memiliki kerangka yang dapat diandalkan:</p>
<ol>
<li><strong>Pembuka</strong> — sapaan, judul, dan satu kalimat mengapa topik ini penting.</li>
<li><strong>Signposting</strong> — <em>I&#039;ll cover three points: the context, the findings, and our recommendations.</em></li>
<li><strong>Isi dengan sitasi lisan</strong> — <em>A 2024 study by the World Health Organization found that ...</em></li>
<li><strong>Penutup</strong> — rangkum <em>key takeaway</em>, lalu buka tanya jawab: <em>I&#039;d be happy to take questions.</em></li>
</ol>
<p>Slide sebaiknya berisi <strong>satu ide per slide</strong>, kata kunci dan visual, bukan paragraf penuh. Angka disebut jelas: <em>up by twelve per cent</em>, <em>peaked at 1,200 units</em>, <em>remained steady at five per cent</em>.</p>',
            'examples' => [
                ['en' => 'This chart shows that recycling rates peaked in 2019 and then levelled off.', 'id' => 'Grafik ini menunjukkan tingkat daur ulang mencapai puncak pada 2019 lalu stabil.'],
                ['en' => 'Our findings build on earlier work by Patel and Osei.', 'id' => 'Temuan kami dibangun di atas penelitian sebelumnya oleh Patel dan Osei.'],
                ['en' => 'To sum up, the evidence points to three practical steps.', 'id' => 'Menyimpulkan, bukti menunjuk pada tiga langkah praktis.'],
            ],
        ],
        [
            'heading' => 'Menulis Laporan Terintegrasi',
            'body' => '<p>Laporan berbasis sumber umumnya memuat <em>abstract</em>, pendahuluan, tinjauan sumber, analisis, dan kesimpulan. Paragraf sintesis yang baik mengikuti pola empat langkah:</p>
<ol>
<li><strong>Sumber</strong> — <em>Smith (2023) maintains that ...</em></li>
<li><strong>Bukti</strong> — <em>Based on a sample of 800 employees, ...</em></li>
<li><strong>Analisismu</strong> — <em>This finding is significant because ...</em></li>
<li><strong>Hubungan</strong> — <em>A similar pattern is reported by Lee (2022).</em></li>
</ol>
<p>Jaga nada akademis: gunakan <em>hedging</em> (<em>may, might, appears to, suggests</em>) bila bukti belum mutlak, dan konsisten memakai istilah teknis yang sama sepanjang tulisan.</p>',
            'examples' => [
                ['en' => 'Smith (2023) argues that flexible work improves retention.', 'id' => 'Smith (2023) berargumen bahwa kerja fleksibel meningkatkan retensi pegawai.'],
                ['en' => 'This finding appears to conflict with the results in Section 2.', 'id' => 'Temuan ini tampaknya bertentangan dengan hasil di Bagian 2.'],
                ['en' => 'The abstract should be written last, after the report is complete.', 'id' => 'Abstrak sebaiknya ditulis terakhir, setelah laporan selesai.'],
            ],
        ],
        [
            'heading' => 'Kolaborasi, Umpan Balik, dan Revisi',
            'body' => '<p>Proyek kelompok membutuhkan koordinasi bahasa yang jelas. Saat memberi umpan balik, gunakan pola <strong>apresiasi &rarr; saran &rarr; alasan</strong>:</p>
<ul>
<li><em>Your introduction is strong. Have you considered moving the survey results earlier, so the audience sees the key figure sooner?</em></li>
<li><em>This paragraph repeats the point from Section 1 — you could merge them.</em></li>
<li><em>Great visuals. Adding one source on each slide would strengthen the argument.</em></li>
</ul>
<p>Terima umpan balik dengan kalimat terbuka, lalu <strong>revisi berdasarkan bukti</strong>, bukan perasaan. Latih presentasi minimal dua kali (<em>rehearsal</em>), termasuk handover antarpembicara dan kira-kira waktu per bagian.</p>',
            'examples' => [
                ['en' => 'One strength is your clear structure; one concern is the missing source on slide four.', 'id' => 'Satu kelebihan adalah strukturmu yang jelas; satu kekhawatiran adalah sumber yang hilang di slide empat.'],
                ['en' => 'Thanks for the feedback — I&#039;ll merge those two paragraphs tonight.', 'id' => 'Terima kasih atas masukannya — malam ini saya akan menggabungkan dua paragraf itu.'],
                ['en' => 'Let&#039;s do a full run-through before the presentation.', 'id' => 'Mari kita lakukan latihan penuh sebelum presentasi.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'synthesis', 'phonetic' => '/ˈsɪnθəsɪs/', 'meaning' => 'sintesis / penggabungan beberapa sumber menjadi satu gagasan', 'example' => 'The report offers a synthesis of three earlier studies.'],
        ['word' => 'paraphrase', 'phonetic' => '/ˈpærəfreɪz/', 'meaning' => 'menuliskan ulang gagasan orang lain dengan kata-kata sendiri', 'example' => 'Paraphrase the passage and cite the author.'],
        ['word' => 'cite sources', 'phonetic' => '/saɪt ˈsɔːsɪz/', 'meaning' => 'mencantumkan sumber', 'example' => 'Always cite your sources in academic writing.'],
        ['word' => 'plagiarism', 'phonetic' => '/ˈpleɪdʒərɪzəm/', 'meaning' => 'plagiarisme / mengambil karya orang lain tanpa pengakuan', 'example' => 'Changing a few words does not prevent plagiarism.'],
        ['word' => 'key findings', 'phonetic' => '/kiː ˈfaɪndɪŋz/', 'meaning' => 'temuan utama', 'example' => 'The key findings are summarised in Chapter One.'],
        ['word' => 'abstract', 'phonetic' => '/ˈæbstrækt/', 'meaning' => 'abstrak / ringkasan awal karya ilmiah', 'example' => 'Write the abstract after the report is finished.'],
        ['word' => 'handout', 'phonetic' => '/ˈhændaʊt/', 'meaning' => 'lembaran yang dibagikan kepada audiens', 'example' => 'Print the handout double-sided, please.'],
        ['word' => 'Q&amp;A session', 'phonetic' => '/ˌkjuː ˈeɪ ˈseʃn/', 'meaning' => 'sesi tanya jawab', 'example' => 'We will keep fifteen minutes for the Q&amp;A session.'],
        ['word' => 'data set', 'phonetic' => '/ˈdeɪtə set/', 'meaning' => 'kumpulan data terorganisir untuk dianalisis', 'example' => 'Our data set covers five years of sales.'],
        ['word' => 'rehearsal', 'phonetic' => '/rɪˈhɜːsl/', 'meaning' => 'latihan (sebelum pentas atau presentasi)', 'example' => 'The final rehearsal is on Thursday afternoon.'],
        ['word' => 'peer feedback', 'phonetic' => '/pɪə ˈfiːdbæk/', 'meaning' => 'umpan balik dari rekan sejawat', 'example' => 'Peer feedback helped me cut the introduction in half.'],
        ['word' => 'draft', 'phonetic' => '/drɑːft/', 'meaning' => 'draf / versi awal tulisan', 'example' => 'Send me your first draft by Friday.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Sumber asli: &ldquo;Remote work has been shown to increase productivity among experienced employees.&rdquo; Mana yang merupakan paraphrase yang sah?',
            'options' => [
                'Remote work has been shown to increase productivity among experienced employees.',
                'Experienced staff members have been found to be more productive when working from home.',
                'Working from home always makes every worker better at their job.',
                'Productivity is, without any doubt, the only thing that matters in remote work.',
            ],
            'answer' => 1,
            'explanation' => 'Paraphrase sah mengubah struktur dan kosakata namun mempertahankan makna (<em>experienced staff ... more productive when working from home</em>) dan tetap disertai sitasi. Opsi pertama adalah penyalinan langsung; opsi lain menyimpang dari makna asli.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Kalimat mana yang menyampaikan informasi dari sumber dengan sitasi yang tepat?',
            'options' => [
                'Everyone knows that sleep improves memory.',
                'According to a 2023 study by Chen, sleep significantly improves memory.',
                'Sleep improves memory, as I once read somewhere.',
                'It is obvious that sleep improves memory.',
            ],
            'answer' => 1,
            'explanation' => 'Situsasi yang benar menyebut sumber dan tahun (<em>Chen, 2023</em>) serta memakai laporan yang hati-hati; pilihan lain menggeneralisasi tanpa bukti yang bisa diverifikasi.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Kamu menyalin tiga kalimat berurutan dari sebuah situs web ke dalam laporan tanpa tanda kutip, walaupun situs tersebut sudah dicantumkan di daftar pustaka. Apa masalahnya?',
            'options' => [
                'Tidak ada masalah selama font tulisan sama.',
                'Kalimat-kalimat itu merupakan plagiarisme karena disajikan dengan bahasamu sendiri.',
                'Hanya entri daftar pustaka yang perlu diperbaiki.',
                'Kamu boleh memakai hingga sepuluh kata tanpa tanda kutip.',
            ],
            'answer' => 1,
            'explanation' => 'Menyalin kata penulis lain tanpa tanda kutip — meskipun sumbernya dicantumkan — tetap plagiarisme. Yang benar: parafrase dengan bahasa sendiri dan tetap menyitir, atau gunakan tanda kutip untuk kutipan langsung.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi prinsip menulis ringkasan: &ldquo;A good summary restates the author&#039;s main ideas in your own ___.&rdquo;',
            'answer' => 'words',
            'accepted' => ['words', 'own words'],
            'explanation' => 'Ringkasan yang sah selalu menggunakan <em>your own words</em> (kata-katamu sendiri) disertai sitasi, bukan menyalin kalimat sumber.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'speaking',
            'prompt' => 'Lengkapi saran persiapan presentasi: &ldquo;Before the big presentation, make sure to ___ your talk at least twice.&rdquo;',
            'answer' => 'rehearse',
            'accepted' => ['rehearse', 'practice'],
            'explanation' => '<em>Rehearse</em> berarti berlatih penuh (termasuk waktu dan peralatan), sedangkan <em>practice</em> lebih umum. Keduanya diterima di sini.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi bentuk sitasi: &ldquo;___ to Smith (2023), remote work increased productivity by 11 per cent.&rdquo;',
            'answer' => 'According',
            'accepted' => ['according'],
            'explanation' => 'Pola baku: <strong>According to + penulis (tahun)</strong>, ditulis dengan huruf besar bila memulai kalimat.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'writing',
            'prompt' => 'Menyalin satu paragraf dari situs web lalu mengganti beberapa kata tetap dianggap plagiarisme.',
            'answer' => true,
            'explanation' => 'Plagiarisme bukan hanya salinan persis; menyusun ulang sebagian kecil kata dari sumber tanpa sitasi tetap dianggap mengambil karya orang lain.',
            'is_placement' => true,
        ],
        [
            'type' => 'true_false',
            'skill' => 'speaking',
            'prompt' => 'Slide presentasi yang baik sebaiknya memuat teks lengkap dari semua yang akan diucapkan pembicara agar audiens dapat membaca mengikuti.',
            'answer' => false,
            'explanation' => 'Slide yang baik berisi satu ide per slide dalam bentuk kata kunci dan visual; teks penuh membuat audiens membaca alih-alih mendengarkan pembicara.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan istilah proyek akademis dengan pengertiannya.',
            'pairs' => [
                ['left' => 'abstract', 'right' => 'ringkasan singkat di awal karya ilmiah'],
                ['left' => 'handout', 'right' => 'lembaran yang dibagikan kepada audiens'],
                ['left' => 'data set', 'right' => 'kumpulan data terorganisir untuk dianalisis'],
                ['left' => 'peer feedback', 'right' => 'komentar perbaikan dari rekan sejawat'],
                ['left' => 'rehearsal', 'right' => 'latihan penuh sebelum presentasi sesungguhnya'],
            ],
            'explanation' => 'Istilah-istilah ini muncul di setiap tahap proyek, dari penulisan hingga presentasi, sehingga penting dikuasai sejak awal.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'For our project we started with twelve articles, but after screening them for quality and relevance we ended up using five. Then we pulled the key figures into one table so we could compare them side by side.',
            'prompt' => 'Dengarkan penjelasan proses proyek ini. Berapa banyak sumber yang akhirnya digunakan kelompok?',
            'options' => ['Dua belas', 'Lima', 'Enam', 'Tujuh'],
            'answer' => 1,
            'explanation' => 'Dua belas artikel adalah jumlah awal; setelah disaring untuk kualitas dan relevansi, tinggal <em>five</em> (lima) yang dipakai — angka awal menjadi distraktor.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'For the presentation, keep each slide to one main idea, and put your sources in the speaker notes rather than on the slide itself.',
            'prompt' => 'Dengarkan saran presentasi ini, lalu lengkapi: &ldquo;The speaker advises putting the sources in the ___.&rdquo;',
            'answer' => 'notes',
            'accepted' => ['notes', 'speaker notes', 'the notes'],
            'explanation' => 'Sumber disarankan diletakkan di <em>speaker notes</em> (catatan pembicara), bukan di slide yang dilihat audiens, agar slide tetap bersih.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>For our environmental studies project, my group combined a government report, two academic articles, and an interview with a local official. Each member wrote one section, but we spent a full meeting harmonising the terminology so that the report read as a single voice. For the presentation, we cut the text down to headlines and graphs and rehearsed the handover between speakers until it felt natural.</p></div><p>Apa yang dilakukan kelompok untuk memastikan laporan terdengar konsisten?</p>',
            'options' => [
                'Mereka memakai hanya satu sumber.',
                'Mereka menyamakan istilah yang dipakai di seluruh bagian.',
                'Mereka menulis bagian masing-masing tanpa diskusi sama sekali.',
                'Mereka membacakan laporan lengkap selama presentasi.',
            ],
            'answer' => 1,
            'explanation' => 'Kutipan menyebutkan <em>harmonising the terminology so that the report read as a single voice</em> — mereka menyelaraskan istilah agar laporan terdengar seperti satu suara.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Peer review sessions are most useful when reviewers comment on the argument rather than the grammar. A common rule is to give one strength, one concern, and one concrete suggestion for each draft.</p></div><p>Lengkapi sesuai kutipan: &ldquo;Reviewers should comment on the ___ rather than on grammar.&rdquo;</p>',
            'answer' => 'argument',
            'accepted' => ['argument'],
            'explanation' => 'Kutipan menegaskan bahwa yang dikomentari adalah <em>the argument</em> (alur argumen), bukan tata bahasa permukaan; umpan balik yang berguna berupa satu kekuatan, satu kekhawatiran, dan satu saran konkret.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Bukalah presentasimu dengan menyitir sebuah sumber secara lisan.',
            'target' => 'Good morning. According to a recent report from the World Bank, plastic waste in our oceans could triple by 2040.',
            'hint' => 'Arti: Selamat pagi. Menurut laporan terbaru dari Bank Dunia, sampah plastik di lautan kita bisa tiga kali lipat pada tahun 2040.',
            'explanation' => 'Situsasi lisan memakai pola yang sama dengan tulisan: <em>According to + sumber</em>, dilanjutkan data spesifik agar audiens tahu informasi itu bukan opini pribadi.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Saat sesi tanya jawab, buka jawabanmu dengan cara yang menunjukkan kamu menguasai materi.',
            'target' => 'That&#039;s a great question. Let me answer it using what our data set shows.',
            'hint' => 'Arti: Pertanyaan yang bagus. Izinkan saya menjawabnya berdasarkan data yang kami miliki.',
            'explanation' => 'Pembuka <em>That&#039;s a great question</em> memberi jeda untuk berpikir sekaligus membangun hubungan baik dengan penanya, lalu diarahkan ke bukti dari proyekmu.',
        ],
    ],
];
