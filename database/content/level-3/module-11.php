<?php

/**
 * Level 3 — Modul 11: Advanced Listening
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
    'title' => 'Advanced Listening',
    'slug' => 'advanced-listening',
    'subtitle' => 'Aksen beragam, diskusi cepat, dan makna tersirat',
    'summary' => 'Melatih pemahaman lisan tingkat lanjut: mengikuti penutur berbagai aksen, menangkap diskusi cepat, dan menyimpulkan sikap serta makna tersirat dari nada dan konteks.',
    'icon' => '🎧',
    'objectives' => [
        'Mengenali ciri utama aksen British, American, Australian, Indian, dan Singapore',
        'Menangkap informasi penting dalam percakapan cepat dengan reduksi dan elisi',
        'Menyimpulkan sikap dan makna tersirat penutur dari pilihan kata dan nada',
        'Menerapkan strategi listening tingkat lanjut seperti prediksi, catatan singkat, dan deteksi distraktor',
    ],
    'sections' => [
        [
            'heading' => 'Mengenali Aksen Beragam',
            'body' => '<p>Di dunia nyata, kamu akan bertemu penutur bahasa Inggris dari banyak negara. Aksen tidak mengubah tata bahasa dasar, tetapi mengubah <strong>pelafalan, ritme, dan sebagian kosakata</strong>. Kunci kemampuan ini adalah kebiasaan mendengarkan, bukan penghafalan.</p>
<table>
<thead><tr><th>Aksen</th><th>Ciri yang perlu diperhatikan</th><th>Perbedaan kosakata</th></tr></thead>
<tbody>
<tr><td>British</td><td>Konsonan <em>r</em> di akhir suku kata tidak diucapkan (non-rhotic); ritme kata baku sangat jelas</td><td>lift (elevator), lorry (truck), timetable (schedule)</td></tr>
<tr><td>American</td><td>Konsonan <em>r</em> selalu terdengar (rhotic); <em>t</em> di antara vokal terdengar seperti <em>d</em>, misalnya <em>water</em> &rarr; &ldquo;wadder&rdquo;</td><td>apartment (flat), trash (rubbish), vacation (holiday)</td></tr>
<tr><td>Australian</td><td>Intonasi cenderung naik di akhir kalimat (uptalk); vokal agak diperpanjang</td><td>arvo (afternoon), brekkie (breakfast)</td></tr>
<tr><td>Indian</td><td>Ritme suku kata lebih rata (syllable-timed); <em>t</em> dan <em>d</em> cenderung retrofleks</td><td>Kosakata baku dan formal lebih sering dipakai</td></tr>
<tr><td>Singapore / Malaysia</td><td>Kalimat pendek dan efisien; pada situasi santai muncul partikel seperti <em>lah</em></td><td>queuing (lining up)</td></tr>
</tbody>
</table>
<p>Ingat juga variasi regional: <em>at the weekend</em> (BrE) vs <em>on the weekend</em> (AmE), serta penggunaan kata benda jamak collective noun yang berbeda antara Britania dan Amerika.</p>',
            'examples' => [
                ['en' => 'The lift is out of order, so we have to take the stairs.', 'id' => 'Lift sedang rusak, jadi kita harus menaiki tangga.'],
                ['en' => 'Could you send me the timetable before Friday? (BrE)', 'id' => 'Bisakah Anda mengirimkan jadwal kepada saya sebelum hari Jumat?'],
                ['en' => 'Their pronunciation was hard to follow at first, but I soon got used to it.', 'id' => 'Pelafalan mereka sulit diikuti pada awalnya, tetapi saya segera terbiasa.'],
            ],
        ],
        [
            'heading' => 'Menangkap Diskusi Cepat',
            'body' => '<p>Dalam diskusi cepat, penutur native <strong>menggabungkan kata</strong> dan mengucapkan bagian yang tidak penting sangat singkat. Contoh yang sering muncul:</p>
<ul>
<li><em>gonna</em> (going to), <em>wanna</em> (want to), dan <em>gotta</em> (got to / harus) sering terdengar dalam percakapan cepat</li>
<li><em>last night</em> terdengar seperti <em>las&#039; night</em>; <em>kind of</em> menjadi <em>kinda</em></li>
<li>Kata yang diucapkan <strong>lebih keras</strong> adalah kata yang menentukan makna: &ldquo;We need the report by <strong>Friday</strong>, not Monday.&rdquo;</li>
</ul>
<p>Gunakan <strong>kata penanda (signposts)</strong> sebagai peta percakapan: <em>firstly</em> (pertama), <em>having said that</em> (meski demikian), <em>in short</em> (singkatnya), <em>the point is</em> (intinya). Jika kamu kehilangan satu kalimat, tetap dengarkan kata penanda berikutnya agar tidak kehilangan arah.</p>',
            'examples' => [
                ['en' => 'I&#039;m gonna call you back — the connection here is terrible.', 'id' => 'Saya akan meneleponmu kembali — sinyal di sini buruk sekali.'],
                ['en' => 'We kinda need a decision before the weekend.', 'id' => 'Kami cukup membutuhkan keputusan sebelum akhir pekan.'],
                ['en' => 'Sorry, las&#039; night was a bit of a blur.', 'id' => 'Maaf, tadi malam agak buyar.'],
            ],
        ],
        [
            'heading' => 'Menangkap Makna Tersirat dan Sikap',
            'body' => '<p>Penutur tingkat lanjut jarang menyatakan pendapat secara langsung. Makna sebenarnya sering terletak pada <strong>pilihan kata yang terkesan netral</strong>, jeda, dan nada suara.</p>
<ul>
<li><em>&ldquo;That&#039;s certainly one way of looking at it.&rdquo;</em> &rarr; biasanya tanda <strong>tidak setuju yang sopan</strong>.</li>
<li><em>&ldquo;I&#039;ll bear that in mind.&rdquo;</em> &rarr; ide diterima untuk dipertimbangkan, belum tentu disetujui penuh.</li>
<li><em>&ldquo;With the greatest respect ...&rdquo;</em> &rarr; sering diikuti kritik yang tegas.</li>
<li><em>&ldquo;Interesting.&rdquo;</em> dengan nada datar &rarr; bisa berarti penutur tidak terkesan sama sekali.</li>
</ul>
<p>Pertanyaan sikap (<em>attitude</em>) menanyakan apakah penutur setuju, ragu, kecewa, atau antusias. Kuncinya: bandingkan <strong>makna harfiah</strong> dengan <strong>bukti nada dan konteks</strong> di audio. Informasi yang disebut lalu dibetulkan (&ldquo;Room 2A &mdash; sorry, 3B&rdquo;) adalah distraktor paling umum.</p>',
            'examples' => [
                ['en' => 'Well, that&#039;s certainly one way of looking at it.', 'id' => 'Yah, itu memang satu cara untuk melihatnya. (Tidak setuju secara sopan)'],
                ['en' => 'I&#039;ll put it to the team and get back to you.', 'id' => 'Saya akan sampaikan ke tim dan memberi kabar kepada Anda.'],
                ['en' => 'To be fair, the data doesn&#039;t quite support that.', 'id' => 'Secara adil, data itu tidak sepenuhnya mendukung pernyataan itu.'],
            ],
        ],
        [
            'heading' => 'Strategi Listening Tingkat Lanjut',
            'body' => '<p>Sebelum audio diputar, gunakan waktu untuk membaca opsi jawaban dan menebak topik. Saat audio berjalan, terapkan empat langkah berikut:</p>
<ol>
<li><strong>Skimming opsi</strong> — kenali kata kunci: waktu, tempat, angka, dan sikap.</li>
<li><strong>Listening for gist</strong> — tangkap inti pembicaraan, bukan setiap kata.</li>
<li><strong>Listening for detail</strong> — catat angka, jam, dan pengecualian seperti <em>but</em>, <em>except</em>, <em>actually</em>.</li>
<li><strong>Checking for distractors</strong> — pastikan jawabanmu memakai informasi <em>terakhir</em> yang disebutkan, bukan yang dibetulkan.</li>
</ol>
<p>Jeda dan intonasi juga membantu: nada naik menandakan daftar belum selesai, sedangkan nada turun tajam menandakan penutup atau kesimpulan.</p>',
            'examples' => [
                ['en' => 'Let me start with the big picture before I go into detail.', 'id' => 'Mari saya mulai dengan gambaran besar sebelum masuk ke rincian.'],
                ['en' => 'Bear in mind that these figures exclude the December data.', 'id' => 'Perlu diingat bahwa angka-angka ini tidak termasuk data bulan Desember.'],
                ['en' => 'The bottom line is that we saved time but lost some accuracy.', 'id' => 'Intinya, kami menghemat waktu tetapi kehilangan sedikit ketepatan.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'get the gist', 'phonetic' => '/ɡet ðə dʒɪst/', 'meaning' => 'memahami inti pembicaraan', 'example' => 'I didn&#039;t catch every word, but I got the gist.'],
        ['word' => 'read between the lines', 'phonetic' => '/riːd bɪˈtwiːn ðə laɪnz/', 'meaning' => 'memahami makna tersirat', 'example' => 'Reading between the lines, she was not happy with the decision.'],
        ['word' => 'bear in mind', 'phonetic' => '/beər ɪn maɪnd/', 'meaning' => 'mengingat / mempertimbangkan', 'example' => 'Bear in mind that the interview will be recorded.'],
        ['word' => 'on the whole', 'phonetic' => '/ɒn ðə həʊl/', 'meaning' => 'secara keseluruhan', 'example' => 'On the whole, the feedback was positive.'],
        ['word' => 'by and large', 'phonetic' => '/baɪ ən lɑːdʒ/', 'meaning' => 'pada umumnya', 'example' => 'By and large, participants found the talk useful.'],
        ['word' => 'to be fair', 'phonetic' => '/tə biː feər/', 'meaning' => 'secara adil (dipakai sebelum kritik ringan)', 'example' => 'To be fair, he did warn us about the delay.'],
        ['word' => 'touch base', 'phonetic' => '/tʌtʃ beɪs/', 'meaning' => 'berkomunikasi sebentar untuk menyamakan informasi', 'example' => 'Let&#039;s touch base on Monday about the schedule.'],
        ['word' => 'run over', 'phonetic' => '/rʌn ˈəʊvər/', 'meaning' => 'melebihi waktu yang direncanakan', 'example' => 'The keynote ran over by fifteen minutes.'],
        ['word' => 'the bottom line', 'phonetic' => '/ðə ˈbɒtəm laɪn/', 'meaning' => 'inti persoalan / angka terpenting', 'example' => 'The bottom line is that costs keep rising.'],
        ['word' => 'spell out', 'phonetic' => '/spel aʊt/', 'meaning' => 'menjelaskan secara rinci dan jelas', 'example' => 'Could you spell out what you mean by &#034;soon&#034;?'],
        ['word' => 'take on board', 'phonetic' => '/teɪk ɒn bɔːd/', 'meaning' => 'mempertimbangkan masukan (BrE)', 'example' => 'We will take your comments on board.'],
        ['word' => 'catch up on', 'phonetic' => '/kætʃ ʌp ɒn/', 'meaning' => 'mengejar / mendapatkan kabar terbaru', 'example' => 'Let me catch you up on what happened yesterday.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih bentuk yang benar: &ldquo;Rarely ___ an explanation as clear as hers.&rdquo;',
            'options' => ['I have heard', 'have I heard', 'did I heard', 'I heard'],
            'answer' => 1,
            'explanation' => 'Setelah adverbial negatif seperti <em>rarely</em> di awal kalimat, bahasa Inggris menggunakan <strong>inversion</strong>: <em>Rarely have I heard ...</em>',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Ketika rekan kerja mengatakan, &ldquo;Well, that&#039;s certainly a bold choice,&rdquo; dengan nada ragu, apa yang paling mungkin dia maksud?',
            'options' => [
                'Dia sangat setuju dengan pilihanmu.',
                'Dia meragukan pilihanmu tetapi ingin tetap terdengar sopan.',
                'Dia ingin membeli barang yang sama.',
                'Dia tidak mendengarkan pertanyaanmu.',
            ],
            'answer' => 1,
            'explanation' => 'Kata netral seperti <em>bold</em> (berani) yang diucapkan dengan nada ragu adalah cara sopan untuk menyampaikan keraguan, bukan pujian tulus.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Right, so we&#039;ve moved the study group to Thursday at half past two, because Priya&#039;s train doesn&#039;t get in until one fifteen. Oh, and we&#039;re in Room 3B this time, not the library. Could you tell Dan on your way out?',
            'prompt' => 'Dengarkan pengumuman beraksen British ini, lalu pilih: Kapan dan di mana kelompok belajar akan bertemu?',
            'options' => [
                'Kamis pukul 14.00 di perpustakaan',
                'Kamis pukul 14.30 di Ruang 3B',
                'Kamis pukul 15.00 di Ruang 3B',
                'Jumat pukul 14.30 di Ruang 3B',
            ],
            'answer' => 1,
            'explanation' => 'Waktu dipindah ke <em>half past two</em> (14.30) dan tempat ke <em>Room 3B</em>; perpustakaan disebut sebagai tempat lama sehingga menjadi distraktor.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'I mean, the report&#039;s fine, I suppose, if you ignore the fact that the sample size is, what, twelve people? Still, the charts do look nice.',
            'prompt' => 'Dengarkan komentar beraksen American ini. Apa sikap pembicara terhadap laporan tersebut?',
            'options' => [
                'Ia sangat antusias terhadap seluruh isi laporan.',
                'Ia terkesan dan merekomendasikan laporan itu untuk dipublikasikan.',
                'Ia ragu terhadap metodologi laporan meskipun memuji tampilannya.',
                'Ia bingung tentang tenggat waktu laporan.',
            ],
            'answer' => 2,
            'explanation' => 'Frasa <em>&ldquo;if you ignore the fact that the sample size is ... twelve people&rdquo;</em> menunjukkan keraguan pada kualitas data, sementara <em>&ldquo;the charts do look nice&rdquo;</em> hanya memuji tampilan.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'No worries, we&#039;ll catch up on Friday arvo at the caf&#233; near the station.',
            'prompt' => 'Dengarkan percakapan beraksen Australia ini, lalu lengkapi: &ldquo;The two friends will meet on Friday ___.&rdquo;',
            'answer' => 'afternoon',
            'accepted' => ['afternoon', 'arvo', 'friday afternoon', 'friday arvo'],
            'explanation' => '<em>Arvo</em> adalah istilah informal Australia untuk <em>afternoon</em> (sore), sehingga pertemuan dijadwalkan pada Jumat sore.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'If I may come in here. The rollout has been delayed, yes, but let us not lose sight of the fact that user complaints have fallen by nearly forty per cent. The extra training alone accounts for most of the overrun.',
            'prompt' => 'Dengarkan pernyataan peserta panel beraksen Indian ini. Poin apa yang ingin ia tekankan?',
            'options' => [
                'Keluhan pengguna justru menurun tajam meskipun peluncuran terlambat.',
                'Anggaran pelatihan harus segera dipotong.',
                'Peluncuran program tidak pernah benar-benar berjalan.',
                'Latihan tambahan menyebabkan banyak pengunduran diri.',
            ],
            'answer' => 0,
            'explanation' => 'Pembicara mengakui keterlambatan, lalu mengalihkan perhatian pada penurunan keluhan hampir empat puluh persen sebagai hasil positif yang tidak boleh diabaikan.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'A: Are you sure we should keep waiting? The queue hasn&#039;t moved for ten minutes. B: Well, it&#039;s up to you. I don&#039;t mind either way.',
            'prompt' => 'Dengarkan dialog ini. Apa yang sebenarnya disiratkan pembicara B?',
            'options' => [
                'B benar-benar tidak peduli dan siap pergi kapan saja.',
                'B cenderung ingin tetap menunggu, tetapi tidak ingin memutuskan sendiri.',
                'B merasa marah pada pembicara A.',
                'B ingin segera pulang dan beristirahat.',
            ],
            'answer' => 1,
            'explanation' => 'Ungkapan <em>&ldquo;it&#039;s up to you&rdquo;</em> dan <em>&ldquo;I don&#039;t mind either way&rdquo;</em> adalah cara sopan menghindari keputusan; secara implisit B menyerahkan pilihan kepada A, biasanya karena B sedikit condong tetapi tidak ingin terdengar memaksa.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'listening',
            'audio_text' => 'Just to flag: we haven&#039;t actually agreed on the budget yet, so please don&#039;t circulate the figures outside this room.',
            'prompt' => 'Berdasarkan audio, pembicara meminta agar angka-angka anggaran tidak dibagikan ke luar rapat karena kesepakatan belum tercapai.',
            'answer' => true,
            'explanation' => 'Frasa <em>&ldquo;we haven&#039;t actually agreed ... yet&rdquo;</em> menunjukkan kesepakatan belum final, sehingga permintaan <em>&ldquo;don&#039;t circulate the figures&rdquo;</em> beralasan.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'The keynote ran over by twenty minutes, so the Q and A had to be cut short.',
            'prompt' => 'Dengarkan pengumuman acara ini, lalu lengkapi: &ldquo;The keynote ran over by ___ minutes.&rdquo;',
            'answer' => 'twenty',
            'accepted' => ['twenty', '20'],
            'explanation' => 'Kalimat menyatakan <em>ran over by twenty minutes</em>, artinya acara melebihi jadwal selama dua puluh menit sehingga sesi tanya jawab dipangkas.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi ungkapan informal yang artinya &ldquo;harus segera pergi&rdquo;: &ldquo;Sorry, I have to run &mdash; I&#039;ve got to ___.&rdquo;',
            'answer' => 'dash',
            'accepted' => ['dash'],
            'explanation' => '<em>Got to dash</em> adalah ungkapan informal (terutama British) yang berarti harus pergi dengan cepat.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam bahasa Inggris Britania, jadwal kereta sering disebut <em>timetable</em>, sedangkan penutur Amerika lebih sering memakai kata <em>schedule</em>.',
            'answer' => true,
            'explanation' => '<em>Timetable</em> adalah padanan British, sedangkan <em>schedule</em> lebih lazim dipakai penutur Amerika untuk konteks yang sama.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan ungkapan yang sering muncul dalam diskusi cepat dengan artinya.',
            'pairs' => [
                ['left' => 'read between the lines', 'right' => 'memahami makna tersirat'],
                ['left' => 'touch base', 'right' => 'berkomunikasi sebentar untuk menyamakan informasi'],
                ['left' => 'the bottom line', 'right' => 'inti persoalan atau angka terpenting'],
                ['left' => 'run over', 'right' => 'melebihi waktu yang direncanakan'],
                ['left' => 'bear in mind', 'right' => 'mengingat dan mempertimbangkan'],
            ],
            'explanation' => 'Ungkapan-ungkapan ini sering menjadi penanda arah percakapan; memahaminya membantu kamu mengikuti inti pembicaraan tanpa kehilangan konteks.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Kata penanda mana yang biasanya digunakan untuk memperkenalkan ringkasan?',
            'options' => ['To sum up,', 'On the other hand,', 'By the way,', 'For instance,'],
            'answer' => 0,
            'explanation' => '<em>To sum up</em> (menyimpulkan) memperkenalkan ringkasan; <em>on the other hand</em> menunjukkan kontras, <em>by the way</em> menambah informasi sampingan, dan <em>for instance</em> memberi contoh.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>When listeners hear an unfamiliar accent, the brain initially works harder. Research by Dr. Katherine Cramer and her colleagues found that after just fifteen minutes of exposure, listeners&#039; comprehension of Indian and Singaporean English improved markedly, while their self-rated confidence lagged behind their actual performance. In other words, learners often understand more than they think they do. The practical implication is clear: regular exposure to varied accents matters more than hours spent imitating a single one.</p></div><p>Berdasarkan kutipan tersebut, apa yang sering terjadi setelah singkat terpapar aksen baru?</p>',
            'options' => [
                'Pemahaman meningkat, meskipun kepercayaan diri mungkin belum mengikutinya.',
                'Pendengar berhenti mengikuti percakapan sepenuhnya.',
                'Kepercayaan diri naik lebih cepat daripada pemahaman.',
                'Hanya penerjemah terlatih yang mendapat manfaat.',
            ],
            'answer' => 0,
            'explanation' => 'Teks menyebutkan bahwa pemahaman <em>improved markedly</em> setelah lima belas menit, sedangkan <em>self-rated confidence lagged behind</em> — kepercayaan diri tertinggal dari kemampuan sebenarnya.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Podcasts and radio dramas are excellent training material precisely because they force the listener to rely on sound alone. A useful routine is to listen once for the gist, then a second time with short notes, and finally to check your notes against the transcript.</p></div><p>Lengkapi kalimat sesuai kutipan: &ldquo;A useful routine is to listen once for the ___, then a second time with short notes.&rdquo;</p>',
            'answer' => 'gist',
            'accepted' => ['gist'],
            'explanation' => 'Kutipan menyarankan mendengarkan pertama kali untuk menangkap <em>gist</em> (inti), baru kemudian mencatat detail pada putaran kedua.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Mintalah penutur mengulang penjelasannya dengan lebih pelan secara sopan.',
            'target' => 'Sorry, could you go over that once more, a little more slowly this time?',
            'hint' => 'Arti: Maaf, bisakah Anda mengulanginya sekali lagi, kali ini sedikit lebih pelan?',
            'explanation' => 'Pada situasi listening nyata, kemampuan meminta pengulangan dengan sopan (<em>could you go over that once more</em>) sama pentingnya dengan kemampuan memahami langsung.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ringkas secara lisan topik yang baru saja kamu dengar (misalnya dari podcast atau video).',
            'target' => 'I recently listened to a short talk about urban farming. The main point was that cities can grow more of their own food.',
            'hint' => 'Arti: Saya baru saja mendengarkan ceramah singkat tentang pertanian perkotaan. Poin utamanya adalah kota-kota bisa memproduksi lebih banyak makanannya sendiri.',
            'explanation' => 'Ringkasan lisan yang baik menyebutkan judul/topik lalu satu kalimat inti (<em>the main point was ...</em>) tanpa detail berlebihan.',
        ],
    ],
];
