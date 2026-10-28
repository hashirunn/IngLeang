<?php

/**
 * Level 2 — Modul 13: Speaking & Discussion
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
    'title' => 'Speaking & Discussion',
    'slug' => 'speaking-and-discussion',
    'subtitle' => 'Menyampaikan opini, persetujuan, ketidaksetujuan, dan debat ringan',
    'summary' => 'Belajar cara menyampaikan pendapat dengan percaya diri, setuju dan tidak setuju secara sopan, serta mengikuti diskusi ringan dengan alasan yang jelas.',
    'icon' => '🗣️',
    'objectives' => [
        'Menyampaikan opini beserta alasannya dengan kalimat yang runtut',
        'Menyatakan persetujuan dengan ungkapan yang tepat',
        'Menyatakan ketidaksetujuan secara sopan dan berbudi pekerti',
        'Mengikuti debat ringan dengan memakai kata penghubung yang sesuai',
    ],
    'sections' => [
        [
            'heading' => 'Menyampaikan Opini (Giving Opinions)',
            'body' => '<p>Opini adalah pendapat pribadi, bukan fakta. Gunakan ungkapan pembuka berikut, lalu berikan <strong>alasan</strong> agar pendapatmu meyakinkan.</p>
<ul>
<li><strong>In my opinion&hellip;</strong> &mdash; Menurut pendapat saya&hellip;</li>
<li><strong>I think / I believe that&hellip;</strong> &mdash; Saya pikir / saya yakin bahwa&hellip;</li>
<li><strong>From my point of view&hellip;</strong> &mdash; Dari sudut pandang saya&hellip;</li>
<li><strong>The way I see it&hellip;</strong> &mdash; Menurut cara saya melihatnya&hellip;</li>
</ul>
<p>Setelah opini, sertakan alasan dengan <em>because</em>, <em>since</em>, atau <em>the reason is that&hellip;</em></p>',
            'examples' => [
                ['en' => 'In my opinion, students should learn at least one foreign language.', 'id' => 'Menurut saya, para siswa seharusnya belajar setidaknya satu bahasa asing.'],
                ['en' => 'I think that reading every day improves your vocabulary quickly.', 'id' => 'Saya pikir membaca setiap hari memperkaya kosakatamu dengan cepat.'],
                ['en' => 'From my point of view, the project was a success because the team worked hard.', 'id' => 'Dari sudut pandang saya, proyek itu sukses karena tim bekerja keras.'],
            ],
        ],
        [
            'heading' => 'Menyatakan Persetujuan (Agreeing)',
            'body' => '<p>Saat kamu setuju dengan lawan bicara, ungkapkan secara jelas. Tingkat persetujuan bisa bervariasi dari ringan sampai kuat.</p>
<table>
<thead><tr><th>Ungkapan</th><th>Tingkat</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>I agree with you.</td><td>sedang</td><td>Saya setuju denganmu.</td></tr>
<tr><td>That&rsquo;s a good point.</td><td>sedang</td><td>Itu argumen yang bagus.</td></tr>
<tr><td>I think so too.</td><td>ringan</td><td>Saya juga berpikir begitu.</td></tr>
<tr><td>I couldn&rsquo;t agree more.</td><td>kuat</td><td>Saya sangat setuju.</td></tr>
<tr><td>Exactly!</td><td>kuat</td><td>Tepat sekali!</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'I agree with you because English is useful for our careers.', 'id' => 'Saya setuju denganmu karena bahasa Inggris berguna untuk karier kita.'],
                ['en' => 'I couldn&rsquo;t agree more. Practice is the key to success.', 'id' => 'Saya sangat setuju. Latihan adalah kunci keberhasilan.'],
                ['en' => 'That&rsquo;s a good point. I hadn&rsquo;t thought of that.', 'id' => 'Itu argumen yang bagus. Saya belum memikirkannya.'],
            ],
        ],
        [
            'heading' => 'Menyatakan Ketidaksetujuan Secara Sopan (Disagreeing Politely)',
            'body' => '<p>Dalam diskusi, <strong>jangan langsung berkata &ldquo;You are wrong!&rdquo;</strong>. Akui dulu sudut pandang lawan bicara, baru sampaikan perbedaan pendapat.</p>
<ul>
<li><strong>I see your point, but&hellip;</strong> &mdash; Saya mengerti maksudmu, tetapi&hellip;</li>
<li><strong>I&rsquo;m not sure I agree with that because&hellip;</strong> &mdash; Saya tidak yakin setuju dengan itu karena&hellip;</li>
<li><strong>That&rsquo;s true, however&hellip;</strong> &mdash; Itu benar, namun demikian&hellip;</li>
<li><strong>I&rsquo;m afraid I disagree. The way I see it&hellip;</strong> &mdash; Maaf, saya tidak setuju. Menurut saya&hellip;</li>
</ul>
<p>Ungkapan <em>I&rsquo;m afraid</em> di sini bukan berarti &ldquo;takut&rdquo;, melainkan penanda sopan sebelum berbeda pendapat.</p>',
            'examples' => [
                ['en' => 'I see your point, but I think homework is still necessary.', 'id' => 'Saya mengerti maksudmu, tetapi saya pikir PR masih perlu.'],
                ['en' => 'I&rsquo;m afraid I disagree because the cost is too high.', 'id' => 'Mohon maaf, saya tidak setuju karena biayanya terlalu tinggi.'],
                ['en' => 'That&rsquo;s true, however we should consider the students&rsquo; feelings.', 'id' => 'Itu benar, namun demikian kita sebaiknya mempertimbangkan perasaan para siswa.'],
            ],
        ],
        [
            'heading' => 'Debat Ringan dan Kata Penghubung (Linking Words)',
            'body' => '<p>Agar argumen terdengar runtut dan meyakinkan, gunakan kata penghubung berikut.</p>
<table>
<thead><tr><th>Fungsi</th><th>Kata Penghubung</th><th>Contoh Kalimat</th></tr></thead>
<tbody>
<tr><td>Alasan</td><td>because, since, as</td><td>I support this idea because it saves time.</td></tr>
<tr><td>Contoh</td><td>for example, for instance</td><td>For example, my cousin studies online.</td></tr>
<tr><td>Kontras</td><td>but, however, although</td><td>It is cheap, however the quality is poor.</td></tr>
<tr><td>Kesimpulan</td><td>so, therefore, in conclusion</td><td>Therefore, we should start today.</td></tr>
</tbody>
</table>
<p>Dengarkan lawan bicara dengan saksama, lalu hubungkan argumenmu dengan apa yang baru saja ia katakan.</p>',
            'examples' => [
                ['en' => 'Although it is difficult, learning English is very rewarding.', 'id' => 'Meskipun sulit, belajar bahasa Inggris sangat bermanfaat.'],
                ['en' => 'For instance, you can watch films without subtitles.', 'id' => 'Sebagai contoh, kamu bisa menonton film tanpa subtitle.'],
                ['en' => 'Therefore, I believe schools should start English early.', 'id' => 'Oleh karena itu, saya yakin sekolah sebaiknya memulai bahasa Inggris sejak dini.'],
            ],
        ],
        [
            'heading' => 'Minta Klarifikasi dan Mengakhiri Diskusi',
            'body' => '<p>Ketika kurang paham, minta penjelasan dengan sopan alih-alih diam atau memotong.</p>
<ul>
<li><strong>What do you mean by&hellip;?</strong> &mdash; Apa maksudmu dengan&hellip;?</li>
<li><strong>Could you explain that again, please?</strong> &mdash; Bisakah menjelaskan lagi?</li>
<li><strong>Sorry, could you speak a bit more slowly?</strong> &mdash; Apakah bisa bicara lebih pelan?</li>
</ul>
<p>Untuk mengakhiri diskusi dengan baik:</p>
<ul>
<li><strong>Let&rsquo;s agree to disagree.</strong> &mdash; Kita sepakat untuk berbeda pendapat.</li>
<li><strong>That&rsquo;s an interesting point. Let&rsquo;s talk about it later.</strong> &mdash; Menarik. Mari kita bahas nanti.</li>
</ul>',
            'examples' => [
                ['en' => 'Sorry, what do you mean by &ldquo;less effective&rdquo;?', 'id' => 'Maaf, apa maksudmu dengan &ldquo;kurang efektif&rdquo;?'],
                ['en' => 'Could you explain that again, please?', 'id' => 'Bisakah kamu menjelaskannya lagi?'],
                ['en' => 'We don&rsquo;t agree on this, but let&rsquo;s agree to disagree.', 'id' => 'Kita tidak sepakat soal ini, tapi mari kita hargai perbedaan pendapat.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'in my opinion', 'phonetic' => '/ɪn maɪ əˈpɪnjən/', 'meaning' => 'menurut pendapat saya', 'example' => 'In my opinion, this book is amazing.'],
        ['word' => 'I believe that', 'phonetic' => '/aɪ bɪˈliːv ðæt/', 'meaning' => 'saya yakin bahwa', 'example' => 'I believe that hard work pays off.'],
        ['word' => 'from my point of view', 'phonetic' => '/frɒm maɪ pɔɪnt əv vjuː/', 'meaning' => 'dari sudut pandang saya', 'example' => 'From my point of view, the plan is risky.'],
        ['word' => 'I agree with you', 'phonetic' => '/aɪ əˈɡriː wɪð juː/', 'meaning' => 'saya setuju denganmu', 'example' => 'I agree with you completely.'],
        ['word' => 'That is a good point', 'phonetic' => '/ðæt əz ə ɡʊd pɔɪnt/', 'meaning' => 'itu argumen yang bagus', 'example' => 'That is a good point. I never thought of it.'],
        ['word' => 'I could not agree more', 'phonetic' => '/aɪ kʊd nɒt əˈɡriː mɔːr/', 'meaning' => 'saya sangat setuju', 'example' => 'I could not agree more with your idea.'],
        ['word' => 'I see your point', 'phonetic' => '/aɪ siː jɔːr pɔɪnt/', 'meaning' => 'saya mengerti maksudmu', 'example' => 'I see your point, but I have a different view.'],
        ['word' => 'I am afraid I disagree', 'phonetic' => '/aɪ əm əˈfreɪd aɪ ˌdɪsəˈɡriː/', 'meaning' => 'mohon maaf, saya tidak setuju', 'example' => 'I am afraid I disagree with this decision.'],
        ['word' => 'however', 'phonetic' => '/haʊˈevər/', 'meaning' => 'namun demikian', 'example' => 'It is cheap; however, the quality is poor.'],
        ['word' => 'therefore', 'phonetic' => '/ˈðeərfɔːr/', 'meaning' => 'oleh karena itu', 'example' => 'Therefore, we need more practice.'],
        ['word' => 'for example', 'phonetic' => '/fɔːr ɪɡˈzɑːmpl/', 'meaning' => 'sebagai contoh', 'example' => 'For example, you can use apps to learn.'],
        ['word' => 'although', 'phonetic' => '/ɔːlˈðəʊ/', 'meaning' => 'meskipun', 'example' => 'Although it rained, we went hiking.'],
        ['word' => 'agree to disagree', 'phonetic' => '/əˈɡriː tuː ˌdɪsəˈɡriː/', 'meaning' => 'sepakat untuk berbeda pendapat', 'example' => 'Let us agree to disagree on this topic.'],
        ['word' => 'in conclusion', 'phonetic' => '/ɪn kənˈkluːʒn/', 'meaning' => 'sebagai kesimpulan', 'example' => 'In conclusion, both views have strengths.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'speaking',
            'prompt' => 'Sahabatmu berkata, &ldquo;I think online learning is a waste of time.&rdquo; Ungkapan mana yang paling sopan untuk menyatakan ketidaksetujuan?',
            'options' => [
                'You are completely wrong!',
                'That is nonsense. Stop talking.',
                'I see your point, but I think online learning can be very useful.',
                'No. I do not want to discuss it.',
            ],
            'answer' => 2,
            'explanation' => 'Cara sopan menyatakan ketidaksetujuan adalah dengan mengakui sudut pandang lawan bicara (<em>I see your point</em>) lebih dulu, lalu menyampaikan perbedaan pendapat dengan <em>but</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'speaking',
            'prompt' => 'Kamu sangat setuju dengan seseorang. Ungkapan yang tepat adalah&hellip;',
            'options' => ['I am afraid I disagree.', 'I could not agree more.', 'I see your point.', 'Let us agree to disagree.'],
            'answer' => 1,
            'explanation' => '<em>I could not agree more</em> adalah ungkapan yang menunjukkan persetujuan yang sangat kuat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih kalimat yang grammar-nya benar untuk menyatakan persetujuan.',
            'options' => [
                'I am agree with you.',
                'I am agreeing with you very much.',
                'I agree with you.',
                'I agree you with.',
            ],
            'answer' => 2,
            'explanation' => '<em>Agree</em> adalah kata kerja, bukan kata sifat, sehingga tidak bisa didahului <em>am/is/are</em>. Bentuk yang benar: <em>I agree with you</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'speaking',
            'prompt' => 'Lawan bicaramu berkata sesuatu yang tidak kamu pahami. Ungkapan mana yang paling tepat?',
            'options' => [
                'What do you mean by &ldquo;unfair policy&rdquo;?',
                'You are wrong about that.',
                'I do not care about your opinion.',
                'That is a stupid idea.',
            ],
            'answer' => 0,
            'explanation' => 'Saat tidak paham, minta klarifikasi dengan sopan: <em>What do you mean by&hellip;?</em> Artinya &ldquo;Apa maksudmu dengan&hellip;?&rdquo;',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'In ___ opinion, students should wear uniform to school.',
            'answer' => 'my',
            'accepted' => ['my'],
            'explanation' => 'Kata ganti kepemilikan yang tepat setelah <em>in</em> adalah <em>my</em>: <em>in my opinion</em> (menurut pendapat saya).',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'speaking',
            'prompt' => 'Lengkapi ungkapan ketidaksetujuan yang sopan: &ldquo;I see your ___, but I have a different opinion.&rdquo;',
            'answer' => 'point',
            'accepted' => ['point'],
            'explanation' => '<em>I see your point</em> berarti &ldquo;saya mengerti maksudmu&rdquo;, diikuti <em>but</em> untuk menyampaikan perbedaan pendapat.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'speaking',
            'prompt' => 'Lengkapi kalimat: &ldquo;___ the rain, the sports festival continued as scheduled.&rdquo; (meskipun)',
            'answer' => 'Although',
            'accepted' => ['although'],
            'explanation' => '<em>Although</em> berarti &ldquo;meskipun&rdquo; dan menunjukkan kontras: hujan turun, tetapi acara tetap berlangsung.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'speaking',
            'prompt' => 'Ungkapan &ldquo;I could not agree more&rdquo; menunjukkan ketidaksetujuan.',
            'answer' => false,
            'explanation' => '<em>I could not agree more</em> berarti &ldquo;saya tidak bisa lebih setuju lagi&rdquo;, yaitu persetujuan yang sangat kuat, bukan ketidaksetujuan.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'speaking',
            'prompt' => 'Dalam diskusi, sebaiknya kita mengakui sudut pandang lawan bicara sebelum menyampaikan perbedaan pendapat.',
            'answer' => true,
            'explanation' => 'Mengakui sudut pandang lawan bicara membuat diskusi tetap sopan dan konstruktif, misalnya dengan <em>I see your point, but&hellip;</em>',
        ],
        [
            'type' => 'matching',
            'skill' => 'speaking',
            'prompt' => 'Cocokkan ungkapan dengan fungsinya dalam diskusi.',
            'pairs' => [
                ['left' => 'In my opinion, English is important.', 'right' => 'Menyampaikan opini'],
                ['left' => 'I could not agree more.', 'right' => 'Menyatakan persetujuan kuat'],
                ['left' => 'I see your point, but I disagree.', 'right' => 'Menyatakan ketidaksetujuan sopan'],
                ['left' => 'Could you explain that again, please?', 'right' => 'Meminta klarifikasi'],
                ['left' => 'Let us agree to disagree.', 'right' => 'Mengakhiri perbedaan pendapat'],
            ],
            'explanation' => 'Setiap situasi diskusi memiliki ungkapan khas; pilih ungkapan sesuai fungsi komunikasinya.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Woman: Do you think we should ban smartphones in class? Man: I see your point, but I think students can learn to use them responsibly.',
            'prompt' => 'Dengarkan percakapan berikut. Apa pendapat pria itu?',
            'options' => [
                'Siswa harus diberi kepercayaan untuk menggunakan ponsel secara bertanggung jawab.',
                'Ponsel harus dilarang total di dalam kelas.',
                'Siswa tidak boleh belajar dengan ponsel sama sekali.',
                'Guru harus menggunakan ponsel, bukan siswa.',
            ],
            'answer' => 0,
            'explanation' => 'Pria itu berkata <em>I think students can learn to use them responsibly</em>, artinya siswa bisa belajar menggunakannya secara bertanggung jawab.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'I am afraid I disagree, because the cost is too high.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang: &ldquo;I am afraid I ___, because the cost is too high.&rdquo;',
            'answer' => 'disagree',
            'accepted' => ['disagree'],
            'explanation' => 'Kata yang terdengar adalah <em>disagree</em>; kalimat lengkapnya menyatakan ketidaksetujuan dengan sopan.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan opini tentang kegiatan belajar menggunakan kalimat berikut.',
            'target' => 'In my opinion, practising speaking English every day is the best way to improve.',
            'hint' => 'Arti: Menurut pendapat saya, melatih berbicara bahasa Inggris setiap hari adalah cara terbaik untuk berkembang.',
            'explanation' => 'Awali opini dengan <em>In my opinion</em>, lalu sertakan kalimat utama dan alasannya agar lebih meyakinkan.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan ketidaksetujuan yang sopan dengan kalimat berikut.',
            'target' => 'I see your point, but I think homework should be limited.',
            'hint' => 'Arti: Saya mengerti maksudmu, tetapi saya pikir PR sebaiknya dibatasi.',
            'explanation' => 'Ungkapan <em>I see your point, but&hellip;</em> adalah cara sopan menyatakan perbedaan pendapat.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Tunjukkan persetujuanmu dengan kalimat berikut.',
            'target' => 'I could not agree more. Practice is the key to success.',
            'hint' => 'Arti: Saya sangat setuju. Latihan adalah kunci keberhasilan.',
            'explanation' => 'Setelah menyatakan persetujuan kuat, dukung dengan alasan singkat agar jawabanmu lebih meyakinkan.',
        ],
    ],
];
