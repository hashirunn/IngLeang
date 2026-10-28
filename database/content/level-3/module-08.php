<?php

/**
 * Level 3 — Modul 08: Critical Reading
 *
 * Analisis asumsi, bias, implikasi, dan sudut pandang (C1–C2).
 * Format konten dan tipe soal mengikuti file referensi level-1/module-01.
 */
return [
    'title' => 'Critical Reading',
    'slug' => 'critical-reading',
    'subtitle' => 'Analisis asumsi, bias, implikasi, dan sudut pandang',
    'summary' => 'Membaca artikel dan opini secara kritis: membedakan fakta dari opini, mengenali bahasa berkonotasi, menemukan asumsi tersirat, dan menilai kekuatan bukti.',
    'icon' => '🔍',
    'objectives' => [
        'Membedakan fakta, opini, dan klaim yang butuh bukti',
        'Mengenali bias penulis melalui pilihan kata dan generalisasi',
        'Menemukan asumsi tersirat dan implikasi sebuah argumen',
        'Menilai apakah bukti benar-benar mendukung kesimpulan',
    ],
    'sections' => [
        [
            'heading' => 'Fakta, Opini, dan Klaim',
            'body' => '<p><strong>Membaca kritis</strong> berarti tidak hanya memahami apa yang tertulis, tetapi juga menilai <em>mengapa</em> dan <em>bagaimana</em> penulis menyampaikannya.</p>
<ul>
<li><strong>Fakta</strong>: pernyataan yang bisa diperiksa kebenarannya melalui data atau sumber.</li>
<li><strong>Opini</strong>: penilaian pribadi yang tidak bisa dibuktikan benar atau salah secara mutlak.</li>
<li><strong>Klaim</strong>: pernyataan yang dijadikan dasar argumen dan membutuhkan bukti pendukung.</li>
</ul>
<p>Kata penunjuk sikap seperti <em>clearly, obviously, undoubtedly</em> sering dipakai untuk menyamarkan opini menjadi seolah-olah fakta. Tanyakan selalu: <strong>bukti apa yang mendukung kalimat ini?</strong></p>',
            'examples' => [
                ['en' => 'Clearly, this is the best policy we could have adopted.', 'id' => 'Jelas sekali, inilah kebijakan terbaik yang bisa kita ambil.'],
                ['en' => 'The survey reported that 62 per cent of respondents agreed.', 'id' => 'Survei melaporkan bahwa 62 persen responden setuju.'],
                ['en' => 'In my view, the report understates the true cost.', 'id' => 'Menurut saya, laporan itu meremehkan biaya yang sebenarnya.'],
            ],
        ],
        [
            'heading' => 'Mengenali Bias dan Bahasa Berkonotasi',
            'body' => '<p><strong>Bias</strong> adalah keberpihakan yang membuat penilaian tampak netral padahal tidak. Penulis yang bias memilih kata bermuatan emosi dan generalisasi berlebihan.</p>
<table>
<thead><tr><th>Teknik bias</th><th>Penanda yang dicari</th><th>Efek pada pembaca</th></tr></thead>
<tbody>
<tr><td>Bahasa berkonotasi</td><td>reckless, heroic, so-called</td><td>mengarahkan perasaan</td></tr>
<tr><td>Generalisasi</td><td>everyone, always, never</td><td>menyederhanakan realita</td></tr>
<tr><td>Straw man</td><td>versi argumen lawan yang dilemahkan</td><td>membuat bantahan terasa mudah</td></tr>
<tr><td>Appeal to emotion</td><td>anekdot dramatis tanpa data</td><td>menggantikan bukti dengan emosi</td></tr>
</tbody>
</table>
<p>Bias tidak selalu berarti penulis berbohong; sering kali ia hanya memilih sudut pandang tertentu dan tidak menyadarinya sendiri.</p>',
            'examples' => [
                ['en' => 'The so-called savings have in fact increased operating costs.', 'id' => '&ldquo;Penghematan&rdquo; yang katanya itu justru menaikkan biaya operasional.'],
                ['en' => 'Supporters always ignore the evidence from rural areas.', 'id' => 'Para pendukung selalu mengabaikan bukti dari daerah pedesaan.'],
                ['en' => 'One dramatic anecdote cannot represent two million users.', 'id' => 'Satu anekdot dramatis tidak bisa mewakili dua juta pengguna.'],
            ],
        ],
        [
            'heading' => 'Asumsi dan Implikasi',
            'body' => '<p><strong>Asumsi</strong> adalah hal yang dianggap benar tanpa dibuktikan; <strong>implikasi</strong> adalah konsekuensi yang tersirat dari sebuah pernyataan. Keduanya tidak pernah ditulis eksplisit, sehingga harus ditelusuri.</p>
<ol>
<li>Identifikasi klaim utama penulis.</li>
<li>Tanyakan: apa yang harus saya percaya agar klaim ini masuk akal?</li>
<li>Periksa apakah bukti yang diberikan benar-benar mendukung klaim, termasuk ada tidaknya penjelasan alternatif.</li>
</ol>
<p>Contoh sederhana: bila sebuah tulisan menyimpulkan bahwa <em>late nights cause poor grades</em> hanya karena keduanya sering muncul bersamaan, ia berasumsi bahwa korelasi berarti sebab-akibat.</p>',
            'examples' => [
                ['en' => 'The argument assumes that all customers behave in the same way.', 'id' => 'Argumen itu berasumsi bahwa semua pelanggan berperilaku dengan cara yang sama.'],
                ['en' => 'If the figures are correct, the implication is that funding will be cut.', 'id' => 'Jika angkanya benar, implikasinya adalah pendanaan akan dipangkas.'],
                ['en' => 'The report takes public support for granted.', 'id' => 'Laporan itu menganggap begitu saja adanya dukungan dari publik.'],
            ],
        ],
        [
            'heading' => 'Sudut Pandang dan Sikap Penulis',
            'body' => '<p>Sudut pandang penulis terlihat dari pilihan <strong>modalitas</strong> dan <strong>hedge</strong> (peredam klaim) yang dipakainya:</p>
<ul>
<li>Klaim mutlak: <em>proves, clearly, always</em> &mdash; menunjukkan keyakinan penuh, sering tanpa bukti memadai.</li>
<li>Klaim berhati-hati: <em>may suggest, arguably, it is likely that</em> &mdash; menunjukkan penilaian yang diakui keterbatasannya.</li>
<li>Konkesi: <em>admittedly, granted</em> &mdash; penulis mengakui poin lawan sebelum menyangkalnya.</li>
<li>Atribusi: <em>according to the authors</em> &mdash; penulis memisahkan temuan sumber dari penilaian pribadinya.</li>
</ul>
<p>Tulisan yang sehat menampilkan kedua sisi; tulisan yang hanya memuat satu sisi biasanya bersifat persuasif, bukan informatif.</p>',
            'examples' => [
                ['en' => 'The findings may suggest a link between sleep quality and grades.', 'id' => 'Temuan itu mungkin menunjukkan adanya kaitan antara kualitas tidur dan nilai akademik.'],
                ['en' => 'Admittedly, the trial covered only a small workforce.', 'id' => 'Memang, uji coba itu hanya mencakup tenaga kerja dalam jumlah kecil.'],
                ['en' => 'According to the authors, the effect fades after six months.', 'id' => 'Menurut para penulis, efek itu memudar setelah enam bulan.'],
            ],
        ],
        [
            'heading' => 'Menguji Argumen: Korelasi vs Sebab-Akibat',
            'body' => '<p>Kesalahan penalaran yang paling umum dalam artikel opini adalah menyamakan <strong>korelasi</strong> dengan <strong>sebab-akibat</strong>. Dua hal dapat bergerak bersamaan tanpa yang satu menyebabkan yang lain.</p>
<ul>
<li><em>Cherry-picking</em>: memilih hanya data yang mendukung kesimpulan dan mengabaikan sisanya.</li>
<li><em>Ukuran sampel kecil</em>: kesimpulan ditarik dari terlalu sedikit kasus.</li>
<li><em>Konfounder</em>: faktor ketiga yang belum diperiksa dapat menjelaskan hubungan tersebut.</li>
</ul>
<p>Pertanyaan penguji: apakah penulis membandingkan kelompok yang sebanding, dan apakah ada penjelasan lain yang sama masuk akal?</p>',
            'examples' => [
                ['en' => 'A correlation between two variables does not prove causation.', 'id' => 'Hubungan statistik antara dua variabel tidak membuktikan sebab-akibat.'],
                ['en' => 'The authors cherry-pick the two years that fit their story.', 'id' => 'Para penulis memilih-pilih hanya dua tahun yang mendukung narasi mereka.'],
                ['en' => 'Without a control group, the conclusion remains speculative.', 'id' => 'Tanpa kelompok pembanding, kesimpulan itu tetap bersifat spekulatif.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'assumption', 'phonetic' => '/əˈsʌmpʃn/', 'meaning' => 'asumsi; hal yang dianggap benar tanpa bukti', 'example' => 'The argument rests on a shaky assumption.'],
        ['word' => 'implication', 'phonetic' => '/ˌɪmplɪˈkeɪʃn/', 'meaning' => 'implikasi; akibat tersirat', 'example' => 'The implication is that funding will be cut.'],
        ['word' => 'bias', 'phonetic' => '/ˈbaɪəs/', 'meaning' => 'keberpihakan; prasangka yang mengaburkan penilaian', 'example' => 'The article shows a clear bias towards large companies.'],
        ['word' => 'loaded language', 'phonetic' => '/ˌləʊdɪd ˈlæŋɡwɪdʒ/', 'meaning' => 'bahasa berkonotasi kuat yang mengarahkan perasaan', 'example' => 'Loaded language can distort an otherwise neutral report.'],
        ['word' => 'straw man', 'phonetic' => '/strɔː ˈmæn/', 'meaning' => 'karangan atas argumen lawan agar mudah dibantah', 'example' => 'Attacking a position nobody actually holds is a straw man.'],
        ['word' => 'hedge', 'phonetic' => '/hedʒ/', 'meaning' => 'peredam klaim agar tidak terlalu mutlak', 'example' => 'Writers hedge with words like arguably and may.'],
        ['word' => 'correlation', 'phonetic' => '/ˌkɒrəˈleɪʃn/', 'meaning' => 'hubungan statistik antara dua hal', 'example' => 'A correlation does not prove causation.'],
        ['word' => 'objective', 'phonetic' => '/əbˈdʒektɪv/', 'meaning' => 'objektif; tidak memihak', 'example' => 'A good summary should remain objective.'],
        ['word' => 'exaggeration', 'phonetic' => '/ɪɡˌzædʒəˈreɪʃn/', 'meaning' => 'berlebihan; membesar-besarkan', 'example' => 'The claim is an exaggeration of the original finding.'],
        ['word' => 'take for granted', 'phonetic' => '/teɪk fə ˈɡrɑːnt/', 'meaning' => 'menganggap wajar tanpa dipertanyakan', 'example' => 'The proposal takes reliable internet access for granted.'],
        ['word' => 'refute', 'phonetic' => '/rɪˈfjuːt/', 'meaning' => 'membantah; menyangkal dengan bukti', 'example' => 'The author refutes the earlier criticism with new data.'],
        ['word' => 'point of view', 'phonetic' => '/pɔɪnt ɒv ˈvjuː/', 'meaning' => 'sudut pandang', 'example' => 'The essay presents the issue from the tenant\'s point of view.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>The council argues that extending library hours will attract more visitors. Yet this assumes that cost, not opening times, is the real barrier. In a recent survey, only 8 per cent of non-users named hours as their main obstacle; most cited the lack of relevant material.</p></div><p>Argumen sanggahan penulis bertumpu pada temuan bahwa ...</p>',
            'options' => [
                'hanya 8 persen non-pengunjung yang menyebut jam buka sebagai kendala utama',
                'perpustakaan buka terlalu pendek setiap hari',
                'pengunjung perpustakaan menuntut buku yang lebih mahal',
                'perpanjangan jam buka akan menambah biaya operasional',
            ],
            'answer' => 0,
            'explanation' => 'Sanggahan penulis berdiri atas data survei: hanya 8 persen non-pengunjung yang menyebut jam buka sebagai kendala, sehingga perluasan jam buka tidak menargetkan hambatan yang sebenarnya.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>The council argues that extending library hours will attract more visitors. Yet this assumes that cost, not opening times, is the real barrier. In a recent survey, only 8 per cent of non-users named hours as their main obstacle; most cited the lack of relevant material.</p></div><p>Sanggahan penulis mengandaikan (mengasumsikan) bahwa ...</p>',
            'options' => [
                'jawaban para responden survei benar-benar mencerminkan hambatan nyata mereka',
                'dewan kota tidak pernah membaca hasil survei tersebut',
                'jam buka tidak berpengaruh apa pun terhadap jumlah pengunjung',
                'koleksi buku perpustakaan saat ini sudah sangat lengkap',
            ],
            'answer' => 0,
            'explanation' => 'Seluruh sanggahan bergantung pada survei: bila jawaban responden tidak mencerminkan hambatan sebenarnya, temuan 8 persen itu kehilangan daya dukungnya. Inilah asumsi tersirat yang tidak dibuktikan penulis.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam kalimat &ldquo;The <em>reckless</em> proposal will <em>destroy</em> thousands of jobs&rdquo;, kata <strong>reckless</strong> dan <strong>destroy</strong> merupakan contoh ...',
            'options' => [
                'bahasa berkonotasi (loaded language)',
                'bahasa yang sepenuhnya netral',
                'istilah teknis bidang ekonomi',
                'hedging untuk meredam klaim',
            ],
            'answer' => 0,
            'explanation' => '<em>Reckless</em> (ceroboh) dan <em>destroy</em> (menghancurkan) memilih muatan emosi negatif. Bahasa netral akan memakai kata seperti <em>the proposed changes may affect jobs</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Pernyataan mana yang merupakan klaim berhati-hati (hedged claim) dan paling tepat untuk kesimpulan esai akademik?',
            'options' => [
                'The findings may suggest a link between sleep quality and academic performance.',
                'The findings prove that poor sleep causes academic failure.',
                'Everyone knows that sleep does not matter for students.',
                'The findings are one hundred per cent conclusive.',
            ],
            'answer' => 0,
            'explanation' => '<em>May suggest</em> menyatakan kemungkinan tanpa klaim kausalitas mutlak, sehingga paling sesuai dengan bukti yang terbatas. Opsi lain menggunakan kata <em>prove</em>, <em>everyone knows</em>, dan <em>one hundred per cent</em> yang menutup kemungkinan salah.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi istilah berikut:<br>&ldquo;A correlation between two variables does not prove ___.&rdquo;',
            'answer' => 'causation',
            'accepted' => ['causation', 'cause'],
            'explanation' => 'Dua hal bisa bergerak bersamaan tanpa satu sama lain menyebabkan. Hubungan sebab-akibat disebut <em>causation</em>, dan korelasi tidak membuktikannya.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi istilah berikut:<br>&ldquo;Attacking a weakened version of your opponent&rsquo;s argument is known as a ___ man.&rdquo;',
            'answer' => 'straw',
            'accepted' => ['straw'],
            'explanation' => '<em>Straw man</em> adalah teknik membantah versi argumen lawan yang sudah dilemahkan, bukan argumen aslinya sehingga terlihat mudah dipatahkan.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi istilah berikut:<br>&ldquo;Words like <em>reckless</em> and <em>disastrous</em> are examples of ___ language.&rdquo;',
            'answer' => 'loaded',
            'accepted' => ['loaded'],
            'explanation' => '<em>Loaded language</em> adalah kata bermuatan emosi yang mengarahkan sikap pembaca, berbeda dari kata netral seperti <em>problematic</em> atau <em>ineffective</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Jika dua hal bergerak bersamaan (korelasi), hal itu selalu berarti bahwa yang satu menyebabkan yang lain.',
            'answer' => false,
            'explanation' => 'Korelasi hanya menunjukkan kebersamaan pergerakan. Penyebabnya bisa faktor ketiga yang belum diperiksa, sehingga sebab-akibat harus dibuktikan terpisah.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Frasa <em>&ldquo;admittedly, the sample was small&rdquo;</em> menunjukkan bahwa penulis mengakui keterbatasan argumennya sendiri.',
            'answer' => true,
            'explanation' => '<em>Admittedly</em> adalah penanda konsesi: penulis mengakui kelemahan (sampel kecil) sebelum menimbang ulang kesimpulannya, yang justru menandakan penilaian yang seimbang.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan istilah analisis kritis dengan definisinya.',
            'pairs' => [
                ['left' => 'assumption', 'right' => 'hal yang dianggap benar tanpa dibuktikan'],
                ['left' => 'implication', 'right' => 'akibat yang tersirat dari suatu pernyataan'],
                ['left' => 'bias', 'right' => 'keberpihakan yang membuat penilaian tidak netral'],
                ['left' => 'hedge', 'right' => 'peredam klaim agar tidak terlalu mutlak'],
                ['left' => 'refutation', 'right' => 'bantahan terhadap sebuah argumen'],
            ],
            'explanation' => 'Istilah ini adalah alat analisis utama: asumsi diuji, implikasi ditelusuri, bias dikenali, hedging dibaca sebagai indikator keyakinan, dan refutation menguji argumen lawan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The report is hardly conclusive: the sample was tiny and, frankly, the wording of the questionnaire was leading.',
            'prompt' => 'Dengarkan audio. Apa sikap penutur terhadap laporan tersebut?',
            'options' => [
                'Meragukan laporan karena metodenya bermasalah',
                'Mendukung laporan karena datanya kuat',
                'Netral dan tidak menilai apa pun',
                'Menganggap laporan tersebut terlalu panjang',
            ],
            'answer' => 0,
            'explanation' => '<em>Hardly conclusive</em> (hampir tidak dapat disimpulkan), <em>tiny</em> (sangat kecil), dan <em>leading</em> (menggiring jawaban) adalah kritik metodologis, sehingga sikap penutur adalah meragukan laporan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Proponents of the four-day week often point to an Icelandic trial in which productivity held steady. What they conveniently omit is that the trial covered a small, highly skilled workforce. Extend the model to low-margin industries with shift work, and the picture looks far less rosy.</p></div><p>Frasa <strong>&ldquo;what they conveniently omit&rdquo;</strong> menunjukkan bahwa penulis ...</p>',
            'options' => [
                'menuduh pihak lawan sengaja menyembunyikan informasi yang tidak menguntungkan mereka',
                'mendukung penuh percobaan yang dilakukan di Islandia',
                'tidak yakin dengan data produktivitas yang dilaporkan',
                'menganggap industri dengan margin rendah lebih produktif',
            ],
            'answer' => 0,
            'explanation' => 'Kata <em>conveniently</em> memberi nuansa tuduhan bahwa pihak lawan memilih data yang menguntungkan mereka dan sengaja meninggalkan bagian yang lemah &mdash; sebuah penilaian negatif, bukan sekadar pernyataan fakta.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Lengkapi klaim berhati-hati berikut:<br>&ldquo;These results ___ indicate a need for further investigation.&rdquo;',
            'answer' => 'may',
            'accepted' => ['might', 'could'],
            'explanation' => 'Kata modal <em>may</em>, <em>might</em>, atau <em>could</em> meredam klaim sehingga penulis tidak mengklaim kepastian yang belum didukung bukti. Bentuk pasti seperti <em>will</em> atau <em>prove</em> akan terlalu kuat.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan sanggahan kritis terhadap sebuah argumen dengan kalimat berikut.',
            'target' => 'The argument takes for granted that all customers behave in the same way.',
            'hint' => 'Arti: Argumen itu menganggap begitu saja bahwa semua pelanggan berperilaku dengan cara yang sama.',
            'explanation' => 'Frasa <em>take for granted</em> tepat untuk menunjukkan asumsi yang tidak pernah dibuktikan, dan <em>all customers</em> menyoroti generalisasi yang berlebihan.',
        ],
    ],
];
