<?php

/**
 * Level 2 — Modul 07: Reported Speech
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
    'title' => 'Reported Speech',
    'slug' => 'reported-speech',
    'subtitle' => 'Melaporkan perkataan orang lain: statement, question, imperative',
    'summary' => 'Belajar melaporkan ucapan orang lain tanpa tanda kutip: pernyataan, pertanyaan, dan perintah beserta perubahan tense dan rujukan waktu.',
    'icon' => '💬',
    'objectives' => [
        'Melaporkan pernyataan dengan backshift tense dan kata ganti yang tepat',
        'Melaporkan pertanyaan ya/tidak dengan if atau whether',
        'Melaporkan perintah dan permintaan dengan pola tell/ask + to + V',
        'Memilih kata kerja pelaporan yang sesuai dengan makna ucapan',
    ],
    'sections' => [
        [
            'heading' => 'Direct Speech vs Reported Speech',
            'body' => '<p><strong>Direct speech</strong> (ucapan langsung) menirukan perkataan apa adanya di dalam tanda kutip, sedangkan <strong>reported speech</strong> (ucapan tidak langsung) melaporkan perkataan itu dengan kata-kata kita sendiri.</p>
<table>
<thead><tr><th>Direct Speech</th><th>Reported Speech</th></tr></thead>
<tbody>
<tr><td>&ldquo;I am tired,&rdquo; she said.</td><td>She said (that) she was tired.</td></tr>
<tr><td>&ldquo;I have lost my key,&rdquo; he said.</td><td>He said (that) he had lost his key.</td></tr>
<tr><td>&ldquo;I will call you tomorrow,&rdquo; she said.</td><td>She said (that) she would call me the next day.</td></tr>
</tbody>
</table>
<p>Kata <em>said</em> tidak diikuti objek orang secara langsung: cukup <em>she said that&hellip;</em>. Jika pendengarnya perlu disebutkan, gunakan <em>told</em>: <em>she told <strong>me</strong> that&hellip;</em></p>',
            'examples' => [
                ['en' => 'She said that she was tired.', 'id' => 'Dia berkata bahwa dia lelah.'],
                ['en' => 'He told me that he had lost his key.', 'id' => 'Dia memberitahuku bahwa dia telah kehilangan kuncinya.'],
                ['en' => 'She said that she would call me the next day.', 'id' => 'Dia berkata bahwa dia akan meneleponku keesokan harinya.'],
            ],
        ],
        [
            'heading' => 'Perubahan Tense dan Rujukan (Backshift)',
            'body' => '<p>Saat melaporkan ucapan, tense biasanya <strong>mundur satu langkah (backshift)</strong>, dan rujukan waktu, tempat, serta kata ganti menyesuaikan sudut pandang pelapor.</p>
<table>
<thead><tr><th>Direct</th><th>Reported</th></tr></thead>
<tbody>
<tr><td>am / is / are</td><td>was / were</td></tr>
<tr><td>present simple</td><td>past simple</td></tr>
<tr><td>present continuous</td><td>past continuous</td></tr>
<tr><td>present perfect</td><td>past perfect</td></tr>
<tr><td>will</td><td>would</td></tr>
</tbody>
</table>
<ul>
<li><strong>now</strong> &rarr; <strong>then</strong>; <strong>today</strong> &rarr; <strong>that day</strong></li>
<li><strong>tomorrow</strong> &rarr; <strong>the next day / the following day</strong></li>
<li><strong>yesterday</strong> &rarr; <strong>the day before</strong></li>
<li><strong>this</strong> &rarr; <strong>that</strong>; <strong>here</strong> &rarr; <strong>there</strong></li>
</ul>
<p>Jika informasi masih benar saat dilaporkan, misalnya fakta umum, tense boleh tetap: <em>He said that water boils at 100 degrees Celsius.</em></p>',
            'examples' => [
                ['en' => 'He said that he was busy.', 'id' => 'Dia berkata bahwa dia sedang sibuk.'],
                ['en' => 'She said that she would wait for me.', 'id' => 'Dia berkata bahwa dia akan menungguku.'],
                ['en' => 'They said they had finished the work.', 'id' => 'Mereka berkata bahwa mereka telah menyelesaikan pekerjaan itu.'],
            ],
        ],
        [
            'heading' => 'Melaporkan Pertanyaan (Reported Questions)',
            'body' => '<p>Pertanyaan <strong>ya/tidak</strong> dilaporkan dengan <strong>if</strong> atau <strong>whether</strong>, sedangkan pertanyaan <strong>wh-</strong> tetap memakai kata <em>wh-</em>-nya. Urutan katanya berubah menjadi seperti kalimat pernyataan: <strong>tanpa do/does/did</strong> dan tanpa inversi subjek-kata kerja.</p>
<blockquote><p>&ldquo;Do you speak English?&rdquo; &rarr; He asked <strong>if</strong> I spoke English.<br>
&ldquo;Where do you live?&rdquo; &rarr; She asked <strong>where</strong> I lived.<br>
&ldquo;What are you doing?&rdquo; &rarr; He asked what I <strong>was doing</strong>.</p></blockquote>
<p>Kata kerja pelaporan untuk pertanyaan antara lain <em>ask, want to know,</em> dan <em>wonder</em>. Tanda tanya tidak digunakan setelah ucapan dilaporkan.</p>',
            'examples' => [
                ['en' => 'He asked if I spoke English.', 'id' => 'Dia bertanya apakah saya berbicara bahasa Inggris.'],
                ['en' => 'She wanted to know where I lived.', 'id' => 'Dia ingin tahu di mana saya tinggal.'],
                ['en' => 'The teacher asked us what we were doing.', 'id' => 'Guru bertanya kepada kami apa yang sedang kami lakukan.'],
                ['en' => 'I wondered whether she had received the letter.', 'id' => 'Saya bertanya-tanya apakah dia telah menerima surat itu.'],
            ],
        ],
        [
            'heading' => 'Melaporkan Perintah dan Permintaan (Imperatives)',
            'body' => '<p>Perintah, permintaan, dan saran dilaporkan dengan pola <strong>tell/ask + objek + to + infinitif</strong>. Untuk perintah negatif, gunakan <strong>not to + infinitif</strong>.</p>
<ul>
<li>Perintah: &ldquo;Close the door.&rdquo; &rarr; He told me <strong>to close</strong> the door.</li>
<li>Permintaan: &ldquo;Please help me.&rdquo; &rarr; She asked me <strong>to help</strong> her.</li>
<li>Larangan: &ldquo;Don&rsquo;t be late.&rdquo; &rarr; He told us <strong>not to be</strong> late.</li>
<li>Saran: &ldquo;You should rest.&rdquo; &rarr; He advised me <strong>to rest</strong>.</li>
</ul>
<p>Untuk saran bersifat umum, <em>suggest</em> bisa diikuti gerund atau klausa <em>that</em>: <em>She suggested having lunch</em> atau <em>She suggested that we have lunch</em>.</p>',
            'examples' => [
                ['en' => 'He told me to close the door.', 'id' => 'Dia menyuruhku menutup pintu.'],
                ['en' => 'She asked me to help her.', 'id' => 'Dia memintaku menolongnya.'],
                ['en' => 'He told us not to be late.', 'id' => 'Dia menyuruh kami jangan terlambat.'],
                ['en' => 'She suggested taking the early train.', 'id' => 'Dia menyarankan untuk naik kereta pagi.'],
            ],
        ],
        [
            'heading' => 'Kata Kerja Pelaporan (Reporting Verbs)',
            'body' => '<p>Pilih kata kerja pelaporan yang sesuai dengan makna ucapan; tiap kata kerja memiliki pola khasnya sendiri.</p>
<table>
<thead><tr><th>Verb</th><th>Pola</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>admit</td><td>admit + -ing / that</td><td>He admitted taking the file.</td></tr>
<tr><td>deny</td><td>deny + -ing</td><td>She denied breaking the window.</td></tr>
<tr><td>promise</td><td>promise + to + V</td><td>She promised to help us.</td></tr>
<tr><td>warn</td><td>warn sb + about / to + V</td><td>He warned us about the traffic.</td></tr>
<tr><td>remind</td><td>remind sb + to + V</td><td>She reminded me to lock the door.</td></tr>
</tbody>
</table>
<p><strong>Tanda kutip dan tanda tanya tidak digunakan</strong> dalam reported speech. Backshift juga bisa dilewati jika informasi masih berlaku pada saat pelaporan.</p>',
            'examples' => [
                ['en' => 'He admitted taking the file.', 'id' => 'Dia mengakui mengambil berkas itu.'],
                ['en' => 'She denied breaking the window.', 'id' => 'Dia menyangkal memecah jendela itu.'],
                ['en' => 'The police warned us about the crowded streets.', 'id' => 'Polisi memperingatkan kami tentang jalan-jalan yang padat.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'admit', 'phonetic' => '/ədˈmiːt/', 'meaning' => 'mengakui', 'example' => 'She admitted that she had made a mistake.'],
        ['word' => 'deny', 'phonetic' => '/dɪˈnaɪ/', 'meaning' => 'menyangkal', 'example' => 'He denied taking the money.'],
        ['word' => 'promise', 'phonetic' => '/ˈprɒmɪs/', 'meaning' => 'berjanji', 'example' => 'He promised to help me move house.'],
        ['word' => 'warn', 'phonetic' => '/wɔːrn/', 'meaning' => 'memperingatkan', 'example' => 'She warned us about the heavy traffic.'],
        ['word' => 'remind', 'phonetic' => '/rɪˈmaɪnd/', 'meaning' => 'mengingatkan kembali', 'example' => 'He reminded me to lock the door.'],
        ['word' => 'complain', 'phonetic' => '/kəmˈpleɪn/', 'meaning' => 'mengeluh', 'example' => 'They complained about the noise.'],
        ['word' => 'suggest', 'phonetic' => '/səˈdʒest/', 'meaning' => 'menyarankan', 'example' => 'She suggested having a meeting.'],
        ['word' => 'refuse', 'phonetic' => '/rɪˈfjuːz/', 'meaning' => 'menolak', 'example' => 'He refused to answer the question.'],
        ['word' => 'agree', 'phonetic' => '/əˈɡriː/', 'meaning' => 'setuju', 'example' => 'They agreed to leave early.'],
        ['word' => 'mention', 'phonetic' => '/ˈmenʃn/', 'meaning' => 'menyebutkan', 'example' => 'She mentioned that the office had moved.'],
        ['word' => 'advise', 'phonetic' => '/ədˈvaɪz/', 'meaning' => 'menasihati / menyarankan', 'example' => 'The doctor advised him to rest.'],
        ['word' => 'reply', 'phonetic' => '/rɪˈplaɪ/', 'meaning' => 'membalas', 'example' => 'He replied that he was busy.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Laporkan ucapan berikut:<br><strong>&ldquo;I am tired,&rdquo; she said.</strong><br>She said that she ___ tired.',
            'options' => ['is', 'was', 'has been', 'will be'],
            'answer' => 1,
            'explanation' => 'Kata kerja pelaporan <em>said</em> berada di masa lalu, sehingga <em>am/is/are</em> mundur menjadi <em>was/were</em>: <em>she was tired</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'He asked me, <strong>&ldquo;Where do you live?&rdquo;</strong><br>He asked me where ___.',
            'options' => ['do I live', 'I lived', 'did I live', 'I live'],
            'answer' => 1,
            'explanation' => 'Pertanyaan wh- yang dilaporkan memakai urutan kalimat pernyataan (subjek + kata kerja) tanpa <em>do/did</em>, dan tense mundur menjadi <em>where I lived</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'The teacher said, <strong>&ldquo;Submit your work by Friday.&rdquo;</strong><br>The teacher told us ___ our work by Friday.',
            'options' => ['submit', 'to submit', 'submitted', 'submitting'],
            'answer' => 1,
            'explanation' => 'Perintah dilaporkan dengan pola <em>tell/ask + objek + to + infinitif</em>, sehingga jawabannya <em>to submit</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam kalimat <strong>&ldquo;He warned us about the heavy traffic&rdquo;</strong>, arti kata <em>warned</em> adalah&hellip;',
            'options' => ['menyarankan', 'memperingatkan', 'mengingatkan kembali', 'mengundang'],
            'answer' => 1,
            'explanation' => '<em>Warn</em> berarti memperingatkan. Bedakan dengan <em>remind</em> (mengingatkan kembali) dan <em>invite</em> (mengundang).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Last night, Dad told us that he had found a new job in Singapore. He explained that we would move there in June. My sister asked whether she could keep her cat, and Dad promised that the cat could come with us. He also warned us that the journey would be long.</p></div><p>Berdasarkan teks, kapan keluarga itu pindah ke Singapura?</p>',
            'options' => ['Juni', 'Mei', 'Juli', 'Tahun lalu'],
            'answer' => 0,
            'explanation' => 'Kalimat <em>&ldquo;He explained that we would move there in June&rdquo;</em> menunjukkan rencana pindah pada bulan Juni.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Laporkan ucapan berikut:<br><strong>Anna said, &ldquo;I will call you tomorrow.&rdquo;</strong><br>Anna said that she ___ call me the following day.',
            'answer' => 'would',
            'accepted' => ['would'],
            'explanation' => 'Dalam reported speech, <em>will</em> berubah menjadi <em>would</em>, dan <em>tomorrow</em> menjadi <em>the next day / the following day</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'John asked, <strong>&ldquo;Have you finished?&rdquo;</strong><br>John asked whether I ___ finished.',
            'answer' => 'had',
            'accepted' => ['had'],
            'explanation' => 'Pertanyaan ya/tidak dilaporkan dengan <em>if/whether</em>, dan present perfect mundur menjadi past perfect: <em>had finished</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Ubah ucapan berikut menjadi reported speech:<br><strong>&ldquo;I don&rsquo;t like coffee,&rdquo; she said.</strong>',
            'answer' => 'She said that she did not like coffee',
            'accepted' => ['she said that she did not like coffee', 'she said that she didn\'t like coffee'],
            'explanation' => 'Pelaporan mundur: <em>don&rsquo;t like</em> (present simple) menjadi <em>didn&rsquo;t like</em> (past simple), dan kata ganti <em>I</em> berubah menjadi <em>she</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam reported speech, kata <strong>if</strong> atau <strong>whether</strong> digunakan untuk melaporkan pertanyaan ya/tidak.',
            'answer' => true,
            'explanation' => 'Pertanyaan <em>Do you speak English?</em> dilaporkan menjadi <em>He asked if I spoke English</em>, dengan urutan pernyataan dan tanpa tanda tanya.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => '<strong>&ldquo;Tom said me that he was busy&rdquo;</strong> adalah bentuk reported speech yang benar.',
            'answer' => false,
            'explanation' => '<em>Said</em> tidak diikuti objek orang. Bentuk yang benar adalah <em>Tom told me that he was busy</em> atau <em>Tom said that he was busy</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Dalam reported speech, kata <strong>now</strong> biasanya berubah menjadi <strong>then</strong>.',
            'answer' => true,
            'explanation' => 'Rujukan waktu dan tempat menyesuaikan sudut pandang pelapor: <em>now &rarr; then</em>, <em>here &rarr; there</em>, <em>tomorrow &rarr; the following day</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan ucapan langsung dengan laporan (reported speech) yang tepat.',
            'pairs' => [
                ['left' => '&ldquo;I am hungry.&rdquo;', 'right' => 'She said that she was hungry.'],
                ['left' => '&ldquo;Where is the station?&rdquo;', 'right' => 'He asked where the station was.'],
                ['left' => '&ldquo;Don&rsquo;t be late.&rdquo;', 'right' => 'She told them not to be late.'],
                ['left' => '&ldquo;I will help you.&rdquo;', 'right' => 'He promised he would help me.'],
                ['left' => '&ldquo;Did you call me?&rdquo;', 'right' => 'She asked if I had called her.'],
            ],
            'explanation' => 'Perhatikan perubahan tense, kata ganti, dan urutan kata: pertanyaan memakai <em>if/wh-</em>, perintah memakai <em>not to + V</em>, dan <em>will</em> menjadi <em>would</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Tom told me that he had missed the morning bus.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'Tom told me that he had missed the morning bus.',
                'Tom told me that he had caught the morning bus.',
                'Tom told me that he would miss the morning bus.',
                'Tom told me that I had missed the morning bus.',
            ],
            'answer' => 0,
            'explanation' => 'Kalimat yang terdengar adalah <em>Tom told me that he had missed the morning bus</em> (Tom memberitahuku bahwa dia telah ketinggalkan bus pagi). Kata kuncinya adalah <em>had missed</em>, bukan <em>had caught</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Laporkan ucapan berikut dengan kalimatmu sendiri.',
            'target' => 'Anna said that she would call me the following day.',
            'hint' => 'Arti: Anna berkata bahwa dia akan menelepon saya keesokan harinya.',
            'explanation' => 'Pelaporan yang benar: <em>will &rarr; would</em>, <em>tomorrow &rarr; the following day</em>, dan kata ganti menyesuaikan sudut pandang pembicara.',
        ],
    ],
];
