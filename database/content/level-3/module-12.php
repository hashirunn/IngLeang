<?php

/**
 * Level 3 — Modul 12: Pragmatics
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
    'title' => 'Pragmatics',
    'slug' => 'pragmatics',
    'subtitle' => 'Humor, ironi, kesantunan, dan makna berdasarkan konteks',
    'summary' => 'Memahami makna di balik kata-kata: bagaimana konteks, nada, dan norma kesantunan mengubah arti sebuah pernyataan, mulai dari ironi dan humor hingga penolakan sopan.',
    'icon' => '🎭',
    'objectives' => [
        'Membedakan makna harfiah dan makna yang disiratkan dalam konteks nyata',
        'Mengenali ironi, sarkasme, dan humor verbal dari pilihan kata serta nada',
        'Menggunakan strategi kesantunan seperti hedging, permintaan tidak langsung, dan penyelamatan muka',
        'Menafsirkan fungsi ujaran (speech acts) seperti meminta, menolak, dan menyindir secara tepat',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Pragmatik?',
            'body' => '<p><strong>Pragmatik</strong> adalah cabang linguistik yang mempelajari bagaimana konteks memengaruhi makna. Kata-kata yang sama bisa memiliki fungsi yang sangat berbeda tergantung pada siapa yang bicara, kepada siapa, dan dalam situasi apa.</p>
<p>Dalam teori ujaran (<em>speech acts</em>), satu kalimat memiliki tiga lapis:</p>
<ul>
<li><strong>Locution</strong> — arti harfiah kata yang diucapkan.</li>
<li><strong>Illocution</strong> — maksud pembicara: meminta, mengancam, menolak, mengejek.</li>
<li><strong>Perlocution</strong> — dampak pada pendengar: membuatnya setuju, tersinggung, atau tertawa.</li>
</ul>
<p>Contoh: <em>&ldquo;Can you pass the salt?&rdquo;</em> secara harfiah menanyakan kemampuan, tetapi secara pragmatis adalah <strong>permintaan</strong>. Perhatikan juga perbedaan <strong>konotasi</strong> (makna emosional) dan <strong>denotasi</strong> (makna kamus).</p>',
            'examples' => [
                ['en' => 'Can you reach the shelf from there?', 'id' => 'Bisakah kamu meraih rak dari sana? (Permintaan untuk mengambilkan, bukan sekadar menanyakan kemampuan)'],
                ['en' => 'It&#039;s cold in here.', 'id' => 'Ruang ini dingin. (Sering berarti: tolong tutup jendelanya)'],
                ['en' => 'Nice work on the presentation.', 'id' => 'Kerja bagus untuk presentasinya. (Pujian tulus pada konteks netral)'],
            ],
        ],
        [
            'heading' => 'Humor, Ironi, dan Sarkasme',
            'body' => '<p><strong>Ironi verbal</strong> terjadi ketika seseorang mengatakan kebalikan dari yang dia maksud, biasanya dengan penekanan atau nada yang jelas. <strong>Sarkasme</strong> adalah ironi yang tajam dan sering ditujukan untuk mengkritik.</p>
<ul>
<li><em>&ldquo;Oh, brilliant &mdash; we&#039;ve missed the last train.&rdquo;</em> &rarr; <em>brilliant</em> diucapkan untuk menyatakan kekecewaan.</li>
<li><em>&ldquo;Thanks for the help.&rdquo;</em> dengan nada datar setelah orang lain tidak membantu &rarr; sindiran.</li>
<li><em>Tongue-in-cheek</em> menunjukkan humor iseng yang tidak serius: <em>&ldquo;As an expert in procrastination, I recommend a five-hour lunch break.&rdquo;</em></li>
</ul>
<p><strong>Understatement</strong> (sengaja menyebut hal besar dengan ringan) juga sering dipakai untuk humor British: menyebut kemacetan tiga jam sebagai <em>&ldquo;a bit of a delay&rdquo;</em>. Perhatikan bahwa sarkasme sangat bergantung pada nada; dalam teks tertulis, sarkasme ditandai eksklamasi berlebihan atau konteks yang jelas.</p>',
            'examples' => [
                ['en' => 'Oh, fantastic &mdash; the printer has jammed again.', 'id' => 'Luar biasa — printer macet lagi. (Sindiran: penutur tidak senang)'],
                ['en' => 'Well, that escalated quickly.', 'id' => 'Yah, situasinya berkembang cepat sekali. (Understatement humoris)'],
                ['en' => 'I love waiting two hours for a bus. It&#039;s my favourite hobby.', 'id' => 'Saya suka menunggu bus dua jam. Itu hobi favorit saya. (Sarkasme jelas dari hiperbola)'],
            ],
        ],
        [
            'heading' => 'Kesantunan dan Penyelamatan Muka',
            'body' => '<p>Teori Brown dan Levinson menjelaskan bahwa penutur menjaga <strong>positive face</strong> (keinginan dihargai dan diterima) dan <strong>negative face</strong> (keinginan tidak diganggu kebebasannya). Permintaan, penolakan, dan kritik mengancam salah satu dari keduanya, sehingga dilunakkan dengan strategi berikut:</p>
<ul>
<li><strong>Hedging</strong> — kata peredam seperti <em>perhaps, somewhat, a bit, I&#039;m afraid</em>.</li>
<li><strong>Permintaan tidak langsung</strong> — <em>I was wondering if you could ...</em> daripada <em>Do this.</em></li>
<li><strong>Alasan</strong> — memberi sebab singkat membuat permintaan lebih mudah diterima.</li>
<li><strong>Pujian pendahuluan</strong> — <em>I really liked your draft; one small thought ...</em></li>
</ul>
<p>Contoh penolakan sopan: <em>&ldquo;I&#039;d love to come, but I&#039;m afraid I can&#039;t make it this week.&rdquo;</em> Ungkapan <em>I&#039;m afraid</em> di sini bukan berarti takut, melainkan penanda permintaan maaf sebelum kabar buruk.</p>',
            'examples' => [
                ['en' => 'I was wondering if you could send me the file by five.', 'id' => 'Saya ingin tahu apakah Anda bisa mengirimkan berkasnya sebelum pukul lima. (Permintaan tidak langsung yang sopan)'],
                ['en' => 'Would you mind if we pushed the meeting back half an hour?', 'id' => 'Apakah Anda keberatan jika kita menunda rapat setengah jam?'],
                ['en' => 'I&#039;m afraid I can&#039;t sign off on this version just yet.', 'id' => 'Maaf, saya belum bisa menyetujui versi ini. (Penolakan formal yang sopan)'],
            ],
        ],
        [
            'heading' => 'Implisitur dan Maksud Komunikasi',
            'body' => '<p>Menurut Paul Grice, percakapan yang kooperatif mengikuti empat <strong>maksim</strong>: <em>quantity</em> (cukup informasi), <em>quality</em> (jujur), <em>relation</em> (relevan), dan <em>manner</em> (jelas dan teratur). Ketika seseorang <strong>melanggar</strong> maksim secara sengaja, muncullah <strong>implisitur</strong> — makna tambahan yang harus disimpulkan pendengar.</p>
<ul>
<li>A: <em>&ldquo;Is the food any good there?&rdquo;</em> B: <em>&ldquo;Well, it&#039;s certainly cheap.&rdquo;</em> &rarr; B melanggar maksim <em>quality</em>; artinya: makanannya tidak enak.</li>
<li>Pernyataan berlebihan seperti <em>&ldquo;Everyone knows that.&rdquo;</em> sering menandakan penutur terlalu percaya diri, bukan fakta umum.</li>
<li><em>&ldquo;Let&#039;s agree to disagree.&rdquo;</em> berfungsi menutup perdebatan tanpa penyelesaian.</li>
</ul>
<p>Dalam budaya berkonteks tinggi (misalnya banyak budaya Asia), penolakan sering disampaikan sangat tidak langsung; mengetahui <em>read the room</em> (membaca suasana) sangat menentukan keberhasilan komunikasi.</p>',
            'examples' => [
                ['en' => 'A: Did you like the novel? B: Well, it was certainly long.', 'id' => 'A: Kamu suka novelnya? B: Yah, novelnya memang panjang. (Tidak menyukainya, tetapi tidak mengatakannya langsung)'],
                ['en' => 'It&#039;s not exactly what I had in mind.', 'id' => 'Ini bukan persis yang saya bayangkan. (Penolakan halus)'],
                ['en' => 'That&#039;s an interesting way to put it.', 'id' => 'Itu cara yang menarik untuk mengatakannya. (Sering berarti penutur tidak sependapat)'],
            ],
        ],
        [
            'heading' => 'Menyimpulkan Makna dari Konteks',
            'body' => '<p>Untuk menafsirkan makna dengan tepat, periksa empat lapis konteks secara berurutan:</p>
<ol>
<li><strong>Situasi</strong> — di mana percakapan terjadi (rapat formal vs obrolan kantor).</li>
<li><strong>Relasi</strong> — seberapa dekat hubungan dengan lawan bicara.</li>
<li><strong>Nada dan paralinguistik</strong> — jeda, tawa, penekanan, dan kecepatan bicara.</li>
<li><strong>Pengetahuan bersama</strong> — fakta yang sudah diketahui kedua pihak.</li>
</ol>
<p>Registri juga berperan: <em>&ldquo;We&#039;d better check the numbers again&rdquo;</em> (agak santai) dan <em>&ldquo;It would be prudent to verify the figures&rdquo;</em> (formal) menyampaikan hal yang sama dengan kesan yang berbeda.</p>',
            'examples' => [
                ['en' => 'Perhaps we should sleep on it.', 'id' => 'Mungkin kita perlu memikirkannya semalaman. (Menunda keputusan)'],
                ['en' => 'With the greatest respect, the data tells a different story.', 'id' => 'Dengan segala hormat, data menceritakan hal yang berbeda. (Kritik tegas tetapi terkendali)'],
                ['en' => 'That&#039;s one thing we can certainly rule out.', 'id' => 'Itu satu hal yang pasti bisa kita singkirkan. (Menutup kemungkinan secara halus)'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'read the room', 'phonetic' => '/riːd ðə ruːm/', 'meaning' => 'membaca suasana dan menyesuaikan cara bicara', 'example' => 'Read the room before you bring up the budget cuts.'],
        ['word' => 'save face', 'phonetic' => '/seɪv feɪs/', 'meaning' => 'menjaga kehormatan diri atau orang lain', 'example' => 'He apologised quickly so that nobody lost face.'],
        ['word' => 'beat around the bush', 'phonetic' => '/biːt əˈraʊnd ðə bʊʃ/', 'meaning' => 'tidak langsung ke inti pembicaraan', 'example' => 'Stop beating around the bush and tell me what happened.'],
        ['word' => 'a backhanded compliment', 'phonetic' => '/ə ˌbækˈhændɪd ˈkɒmplɪmənt/', 'meaning' => 'pujian yang terselip sindiran', 'example' => 'Saying I did well &#034;for a beginner&#034; is a backhanded compliment.'],
        ['word' => 'tongue-in-cheek', 'phonetic' => '/ˌtʌŋ ɪn ˈtʃiːk/', 'meaning' => 'bersifat humoris / tidak serius', 'example' => 'His advice to skip the exam was clearly tongue-in-cheek.'],
        ['word' => 'take it with a pinch of salt', 'phonetic' => '/teɪk ɪt wɪð ə pɪntʃ əv sɒlt/', 'meaning' => 'menanggapi dengan ragu, jangan terlalu percaya', 'example' => 'Take his gossip with a pinch of salt.'],
        ['word' => 'ironically', 'phonetic' => '/aɪˈrɒnɪkli/', 'meaning' => 'secara ironis (kebalikan dari yang diharapkan)', 'example' => 'Ironically, the fire station burned down.'],
        ['word' => 'understatement', 'phonetic' => '/ˌʌndəˈsteɪtmənt/', 'meaning' => 'penyebutan yang sengaja dibuat lebih ringan dari kenyataan', 'example' => 'Calling a three-hour traffic jam &#034;a slight delay&#034; is an understatement.'],
        ['word' => 'sarcasm', 'phonetic' => '/ˈsɑːkæzəm/', 'meaning' => 'sindiran tajam untuk mengkritik', 'example' => 'His sarcasm made the comment sound much harsher.'],
        ['word' => 'implicature', 'phonetic' => '/ˈɪmplɪkətʃər/', 'meaning' => 'makna tersirat yang disimpulkan dari konteks', 'example' => 'The implicature of her reply was that she disagreed.'],
        ['word' => 'soften the blow', 'phonetic' => '/ˈsɒfn ðə bləʊ/', 'meaning' => 'meringankan dampak berita buruk', 'example' => 'She softened the blow by offering an alternative date.'],
        ['word' => 'I&#039;m afraid', 'phonetic' => '/aɪm əˈfreɪd/', 'meaning' => 'maaf (penanda permintaan maaf sebelum kabar buruk)', 'example' => 'I&#039;m afraid we cannot extend the deadline.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Rekan kerjamu berkata, &ldquo;Well, that&#039;s certainly an interesting choice of colours,&rdquo; dengan nada datar setelah melihat desainmu. Apa yang paling mungkin dia maksud?',
            'options' => [
                'Dia sangat menyukai pilihan warnamu.',
                'Dia meragukan pilihan warnamu tetapi tidak ingin terdengar kasar.',
                'Dia ingin membeli cat yang sama.',
                'Dia bertanya di mana kamu membeli warnanya.',
            ],
            'answer' => 1,
            'explanation' => 'Kata <em>interesting</em> dengan nada datar adalah contoh klasik penilaian negatif yang dilunakkan; makna sebenarnya baru terlihat dari nada dan konteks, bukan dari kata <em>interesting</em> itu sendiri.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Pernyataan mana yang merupakan ironi verbal?',
            'options' => [
                'Congratulations on finishing the marathon!',
                'Oh, brilliant — we&#039;ve missed the last train by two minutes.',
                'Could you hand me the timetable, please?',
                'I&#039;ll let you know as soon as I hear back.',
            ],
            'answer' => 1,
            'explanation' => 'Makna kata <em>brilliant</em> (luar biasa) bertolak belakang dengan situasi kehilangan kereta — itulah tanda ironi verbal. Pilihan lain disampaikan secara lugas.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Kalimat mana yang merupakan bentuk permintaan paling sopan?',
            'options' => [
                'Send me the report by five.',
                'You have to send me the report by five.',
                'I was wondering if you could send me the report by five.',
                'Why haven&#039;t you sent me the report?',
            ],
            'answer' => 2,
            'explanation' => 'Pola <em>I was wondering if you could ...</em> adalah permintaan tidak langsung yang menjaga <em>negative face</em> lawan bicara; pilihan lain terdengar seperti perintah atau tuduhan.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi kalimat untuk menunjukkan ketidaksetujuan yang sopan: &ldquo;I see your point, ___ I&#039;m not entirely convinced.&rdquo;',
            'answer' => 'but',
            'accepted' => ['but', 'however', 'though', 'yet'],
            'explanation' => 'Strategi kesantunan: akui sudut pandang lawan bicara terlebih dahulu, lalu sampaikan perbedaan pendapat dengan konjungsi peredam seperti <em>but</em> atau <em>however</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'Lengkapi ungkapan: &ldquo;Please stop beating around the ___ and tell me what really happened.&rdquo;',
            'answer' => 'bush',
            'accepted' => ['bush'],
            'explanation' => '<em>Beat around the bush</em> berarti berputar-putar tidak langsung ke inti; lawan katanya adalah <em>get straight to the point</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam bahasa Inggris, <em>&ldquo;I&#039;m afraid I can&#039;t&rdquo;</em> adalah cara menolak permintaan secara sopan, bukan ungkapan rasa takut yang sesungguhnya.',
            'answer' => true,
            'explanation' => 'Frasa <em>I&#039;m afraid</em> berfungsi sebagai penanda permintaan maaf sebelum menyampaikan penolakan atau kabar buruk.',
            'is_placement' => true,
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Sarkasme selalu bisa dikenali dari pilihan kata saja, karena penutur sarkastik selalu memakai kata-kata yang jelas berbeda dari pujian tulus.',
            'answer' => false,
            'explanation' => 'Sarkasme sering memakai kata yang sama dengan pujian tulus (misalnya <em>great</em>, <em>brilliant</em>); yang membedakannya adalah nada, konteks, dan hiperbola — terutama dalam teks tertulis.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan ungkapan dengan fungsi komunikasinya.',
            'pairs' => [
                ['left' => 'Could you possibly turn the music down?', 'right' => 'permintaan yang dilunakkan'],
                ['left' => 'Break a leg!', 'right' => 'ucapan semangat sebelum tampil'],
                ['left' => 'Long time no see!', 'right' => 'sapaan setelah lama tidak bertemu'],
                ['left' => 'Let&#039;s agree to disagree.', 'right' => 'menutup perdebatan tanpa kesepakatan'],
                ['left' => 'What on earth were you thinking?', 'right' => 'teguran keras yang menyiratkan ketidakpercayaan'],
            ],
            'explanation' => 'Setiap ujaran memiliki fungsi (speech act) yang bergantung pada konteks; memahami fungsinya lebih penting daripada menerjemahkan kata per kata.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Oh, brilliant, absolutely brilliant. We&#039;ve missed the last train by two minutes. Still, look on the bright side — we&#039;ll get a lovely long walk back to the station.',
            'prompt' => 'Dengarkan komentar beraksen British ini. Bagaimana perasaan pembicara sebenarnya?',
            'options' => [
                'Ia benar-benar senang karena bisa berjalan kaki.',
                'Ia kecewa, tetapi menyembunyikannya di balik sarkasme dan hiperbola.',
                'Ia lega karena keretanya batal berangkat.',
                'Ia mengantuk dan ingin segera pulang.',
            ],
            'answer' => 1,
            'explanation' => 'Pengulangan <em>brilliant</em> secara berlebihan dan <em>&ldquo;a lovely long walk&rdquo;</em> setelah ketinggalan kereta adalah sarkasme; perasaan sebenarnya adalah kekecewaan.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'I&#039;d love to come to your workshop, but I&#039;m afraid I can&#039;t make it this week. We have a big deadline on Friday. Maybe next time?',
            'prompt' => 'Dengarkan penolakan berikut, lalu lengkapi: &ldquo;The speaker declines the invitation because of a ___.&rdquo;',
            'answer' => 'deadline',
            'accepted' => ['deadline', 'a deadline'],
            'explanation' => 'Penutur menolak dengan sopan: ungkapan positif (<em>I&#039;d love to come</em>) diikuti <em>but</em>, alasan (<em>a big deadline on Friday</em>), lalu alternatif untuk pertemuan berikutnya.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>In low-context cultures, such as the United States or Germany, a refusal is usually stated directly: &#034;Unfortunately, I cannot attend.&#034; In high-context cultures, common across East Asia and the Middle East, the same refusal may never be said outright. A speaker might answer &#034;I will try my best&#034; or remain silent, and the listener is expected to interpret the hesitation as a polite no. Misreading these signals is a frequent source of misunderstanding in international teams.</p></div><p>Apa kesimpulan utama dari kutipan tersebut?</p>',
            'options' => [
                'Penolakan langsung selalu dianggap tidak sopan di budaya mana pun.',
                'Dalam budaya berkonteks tinggi, penolakan sering disampaikan tidak langsung dan harus ditafsirkan dari konteks.',
                'Budaya berkonteks rendah menghindari kata &#034;no&#034; dalam situasi apa pun.',
                'Hesitasi dalam percakapan selalu menandakan ketidakjujuran.',
            ],
            'answer' => 1,
            'explanation' => 'Teks membandingkan dua tipe budaya dan menyimpulkan bahwa dalam budaya berkonteks tinggi penolakan tidak diucapkan langsung, sehingga pendengar harus menafsirkan konteks.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan ketidaksetujuanmu secara diplomatis dalam diskusi kelompok.',
            'target' => 'I see where you&#039;re coming from, but have we considered the cost implications?',
            'hint' => 'Arti: Saya mengerti sudut pandang Anda, tetapi apakah kita sudah mempertimbangkan dampak biayanya?',
            'explanation' => 'Urutan diplomatis: akui sudut pandang lawan bicara (<em>I see where you&#039;re coming from</em>), lalu alihkan ke kekhawatiran Anda dengan pertanyaan, bukan tuduhan.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Balas pujian dengan cara yang sopan dan alami.',
            'target' => 'Thank you — that&#039;s very kind of you to say.',
            'hint' => 'Arti: Terima kasih — baik sekali Anda mengatakannya.',
            'explanation' => 'Penutur native umumnya menerima pujian lalu menambahkan kalimat sopan seperti <em>that&#039;s very kind of you</em>, alih-alih menolaknya mentah-mentah seperti &#034;No, no, not at all&#034;.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'writing',
            'prompt' => 'Pilih kalimat yang paling tepat sebagai klaim akademis yang hati-hati (hedged claim).',
            'options' => [
                'This research proves that social media causes anxiety.',
                'Everyone knows that social media is harmful.',
                'The findings suggest that heavy social media use may be linked to anxiety.',
                'Social media obviously damages young people&#039;s mental health.',
            ],
            'answer' => 2,
            'explanation' => 'Kata kerja <em>suggest</em> dan modal <em>may</em> menunjukkan hati-hati akademis; pilihan lain menggunakan klaim mutlak atau generalisasi tanpa bukti.',
        ],
    ],
];
