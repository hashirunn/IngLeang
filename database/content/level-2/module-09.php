<?php

/**
 * Level 2 — Modul 09: Gerunds & Infinitives
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
    'title' => 'Gerunds & Infinitives',
    'slug' => 'gerunds-and-infinitives',
    'subtitle' => 'Enjoy doing, want to do, dan pola kata kerja',
    'summary' => 'Belajar kapan memakai gerund (-ing) atau infinitif (to + V) setelah kata kerja, preposisi, dan ungkapan tertentu.',
    'icon' => '🎯',
    'objectives' => [
        'Membedakan fungsi gerund dan infinitif dalam kalimat',
        'Menggunakan pola kata kerja + gerund seperti enjoy doing',
        'Menggunakan pola kata kerja + infinitif seperti want to do',
        'Membedakan makna kata kerja yang berubah antara -ing dan to + V',
    ],
    'sections' => [
        [
            'heading' => 'Gerund dan Infinitif: Pengantar',
            'body' => '<p><strong>Gerund</strong> adalah kata kerja berakhiran <em>-ing</em> yang berfungsi seperti kata benda, sedangkan <strong>infinitive</strong> adalah bentuk <em>to + kata kerja</em>. Banyak kata kerja menentukan apakah diikuti gerund atau infinitif.</p>
<table>
<thead><tr><th>Bentuk</th><th>Rumus</th><th>Contoh</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>Gerund</td><td>V-ing</td><td>I enjoy reading.</td><td>Saya suka membaca.</td></tr>
<tr><td>Infinitive</td><td>to + V</td><td>I want to read.</td><td>Saya ingin membaca.</td></tr>
<tr><td>Gerund sebagai subjek</td><td>V-ing + verb</td><td>Reading helps you relax.</td><td>Membaca membantu kamu rileks.</td></tr>
</tbody>
</table>
<p>Sebagai subjek kalimat, gerund lebih umum digunakan: <em>Swimming is good for health</em>, bukan <em>To swim is good for health</em>.</p>',
            'examples' => [
                ['en' => 'I enjoy reading before bed.', 'id' => 'Saya suka membaca sebelum tidur.'],
                ['en' => 'He wants to learn Japanese.', 'id' => 'Dia ingin belajar bahasa Jepang.'],
                ['en' => 'Travelling broadens your mind.', 'id' => 'Bepergian memperluas wawasanmu.'],
            ],
        ],
        [
            'heading' => 'Kata Kerja + Gerund',
            'body' => '<p>Kata kerja berikut <strong>selalu diikuti gerund (V-ing)</strong>:</p>
<ul>
<li><strong>enjoy, avoid, finish, mind, suggest, keep, consider, deny, imagine, practise</strong></li>
<li><em>She enjoys listening to music.</em> (Dia suka mendengarkan musik.)</li>
<li><em>I avoid eating junk food.</em> (Saya menghindari makanan cepat saji.)</li>
<li><em>Have you finished writing the report?</em> (Apakah kamu sudah selesai menulis laporan itu?)</li>
</ul>
<p><strong>Mind</strong> sering muncul dalam bentuk tanya: <em>Would you mind opening the window?</em> (Apakah keberatan membuka jendela?) Kata <em>suggest</em> juga bisa diikuti klausa <em>that</em>: <em>He suggested that we leave early.</em></p>',
            'examples' => [
                ['en' => 'She enjoys listening to music.', 'id' => 'Dia suka mendengarkan musik.'],
                ['en' => 'I avoid eating junk food.', 'id' => 'Saya menghindari makanan cepat saji.'],
                ['en' => 'Have you finished writing the report?', 'id' => 'Apakah kamu sudah selesai menulis laporan itu?'],
                ['en' => 'Would you mind opening the window?', 'id' => 'Apakah keberatan membuka jendela?'],
            ],
        ],
        [
            'heading' => 'Kata Kerja + Infinitif',
            'body' => '<p>Kata kerja berikut <strong>diikuti infinitif (to + V)</strong>:</p>
<ul>
<li><strong>want, hope, decide, plan, promise, agree, refuse, expect, afford, learn, seem, would like</strong></li>
<li><em>He wants to buy a car.</em> (Dia ingin membeli mobil.)</li>
<li><em>They decided to leave early.</em> (Mereka memutuskan untuk pergi lebih awal.)</li>
<li><em>I cannot afford to travel abroad.</em> (Saya tidak mampu bepergian ke luar negeri.)</li>
</ul>
<p>Polanya bisa ditambah objek: <strong>kata kerja + objek + to + V</strong>, misalnya <em>My parents want me to become a doctor.</em> (Orang tuaku ingin saya menjadi dokter.)</p>',
            'examples' => [
                ['en' => 'He wants to buy a car.', 'id' => 'Dia ingin membeli mobil.'],
                ['en' => 'They decided to leave early.', 'id' => 'Mereka memutuskan untuk pergi lebih awal.'],
                ['en' => 'I cannot afford to travel abroad.', 'id' => 'Saya tidak mampu bepergian ke luar negeri.'],
                ['en' => 'My parents want me to become a doctor.', 'id' => 'Orang tuaku ingin saya menjadi dokter.'],
            ],
        ],
        [
            'heading' => 'Kata Kerja dengan Makna Berbeda',
            'body' => '<p>Beberapa kata kerja memiliki <strong>makna berbeda</strong> tergantung diikuti gerund atau infinitif:</p>
<table>
<thead><tr><th>Verb</th><th>+ gerund (-ing)</th><th>+ infinitif (to + V)</th></tr></thead>
<tbody>
<tr><td>remember</td><td>mengingat pernah melakukan</td><td>jangan lupa melakukan</td></tr>
<tr><td>stop</td><td>berhenti melakukan</td><td>berhenti (sejenak) untuk melakukan</td></tr>
<tr><td>try</td><td>mencoba sebuah cara</td><td>berusaha melakukan</td></tr>
<tr><td>regret</td><td>menyesali peristiwa lampau</td><td>menyesal harus mengatakan sesuatu</td></tr>
</tbody>
</table>
<ul>
<li><em>She stopped smoking</em> (dia berhenti merokok) vs <em>She stopped to smoke</em> (dia berhenti untuk merokok).</li>
<li>Ungkapan lain: <em>go shopping/swimming</em> (berbelanja/berenang), <em>It is worth doing</em> (layak dilakukan), <em>It is no use complaining</em> (tidak ada gunanya mengeluh).</li>
</ul>',
            'examples' => [
                ['en' => 'I remember meeting her at a conference.', 'id' => 'Saya ingat pernah bertemu dengannya di sebuah konferensi.'],
                ['en' => 'Remember to lock the door.', 'id' => 'Jangan lupa mengunci pintu.'],
                ['en' => 'She stopped to tie her shoelace.', 'id' => 'Dia berhenti (sejenak) untuk mengikat tali sepatunya.'],
                ['en' => 'The museum is worth visiting.', 'id' => 'Museum itu layak dikunjungi.'],
            ],
        ],
        [
            'heading' => 'Setelah Preposisi dan Ungkapan Tetap',
            'body' => '<p>Setelah <strong>preposisi</strong>, kata kerja selalu berbentuk gerund:</p>
<ul>
<li><em>interested in learning, afraid of flying, without saying goodbye, instead of waiting, despite being tired</em></li>
<li><strong>Look forward to + -ing</strong> (menantikan) &mdash; <em>I look forward to hearing from you.</em> Kata <em>to</em> di sini adalah preposisi, bukan tanda infinitif.</li>
<li><strong>Be used to + -ing</strong> (terbiasa) berbeda dari <strong>used to</strong> (dulu biasa): <em>She is used to waking up early.</em> vs <em>She used to wake up early.</em></li>
<li><strong>Be busy with, be interested in,</strong> dan <strong>be capable of</strong> juga diikuti gerund setelah preposisinya.</li>
</ul>',
            'examples' => [
                ['en' => 'I look forward to hearing from you.', 'id' => 'Saya menantikan kabar darimu.'],
                ['en' => 'She is used to waking up early.', 'id' => 'Dia terbiasa bangun pagi.'],
                ['en' => 'He left without saying goodbye.', 'id' => 'Dia pergi tanpa berpamitan.'],
                ['en' => 'They are interested in learning English.', 'id' => 'Mereka tertarik belajar bahasa Inggris.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'enjoy', 'phonetic' => '/ɪnˈdʒɔɪ/', 'meaning' => 'menikmati / menyukai', 'example' => 'I enjoy reading before bed.'],
        ['word' => 'avoid', 'phonetic' => '/əˈvɔɪd/', 'meaning' => 'menghindari', 'example' => 'Avoid using your phone in class.'],
        ['word' => 'consider', 'phonetic' => '/kənˈsɪdər/', 'meaning' => 'mempertimbangkan', 'example' => 'She is considering changing her job.'],
        ['word' => 'suggest', 'phonetic' => '/səˈdʒest/', 'meaning' => 'menyarankan', 'example' => 'He suggested going by train.'],
        ['word' => 'afford', 'phonetic' => '/əˈfɔːrd/', 'meaning' => 'mampu membiayai / membeli', 'example' => 'I cannot afford a new laptop.'],
        ['word' => 'mind', 'phonetic' => '/maɪnd/', 'meaning' => 'keberatan (would you mind&hellip;)', 'example' => 'Would you mind waiting here?'],
        ['word' => 'decide', 'phonetic' => '/dɪˈsaɪd/', 'meaning' => 'memutuskan', 'example' => 'They decided to leave early.'],
        ['word' => 'look forward to', 'phonetic' => '/ˌlʊk ˈfɔːrwəd tuː/', 'meaning' => 'menantikan', 'example' => 'I look forward to meeting you.'],
        ['word' => 'be used to', 'phonetic' => '/biː ˈjuːzd tə/', 'meaning' => 'terbiasa dengan', 'example' => 'She is used to working at night.'],
        ['word' => 'practise', 'phonetic' => '/ˈpræktɪs/', 'meaning' => 'berlatih', 'example' => 'He practises speaking every day.'],
        ['word' => 'keep', 'phonetic' => '/kiːp/', 'meaning' => 'terus (melakukan)', 'example' => 'She kept asking the same question.'],
        ['word' => 'be worth', 'phonetic' => '/biː wɜːrθ/', 'meaning' => 'layak / sepadan', 'example' => 'The book is worth reading.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk yang tepat:<br><strong>&ldquo;I enjoy ___ novels before going to sleep.&rdquo;</strong>',
            'options' => ['read', 'to read', 'reading', 'reads'],
            'answer' => 2,
            'explanation' => 'Kata kerja <em>enjoy</em> selalu diikuti gerund (V-ing), sehingga jawabannya <em>reading</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut:<br><strong>&ldquo;He has decided ___ abroad next year.&rdquo;</strong>',
            'options' => ['go', 'going', 'to go', 'gone'],
            'answer' => 2,
            'explanation' => 'Kata kerja <em>decide</em> diikuti infinitif: <em>decide to + V</em>, sehingga jawabannya <em>to go</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut:<br><strong>&ldquo;Please stop ___ me while I am working.&rdquo;</strong>',
            'options' => ['to disturb', 'disturbing', 'disturb', 'disturbed'],
            'answer' => 1,
            'explanation' => '<em>Stop + -ing</em> berarti &ldquo;berhenti melakukan&rdquo;; di sini maksudnya &ldquo;berhenti mengganggu saya&rdquo;, sehingga jawabannya <em>disturbing</em>. Bentuk <em>to disturb</em> akan mengubah makna menjadi &ldquo;berhenti (dari pekerjaannya) untuk mengganggu&rdquo; yang tidak logis.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam kalimat <strong>&ldquo;I cannot afford to buy a new car&rdquo;</strong>, arti kata <em>afford</em> adalah&hellip;',
            'options' => ['menghindari', 'mampu membiayai / membeli', 'menolak', 'menunda'],
            'answer' => 1,
            'explanation' => '<em>Afford</em> berarti mempunyai cukup uang atau waktu untuk melakukan sesuatu, yaitu &ldquo;mampu membiayai&rdquo;.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Every morning, I spend an hour practising English. I usually start by reading the news, and then I try writing a short paragraph. My teacher says that it is worth remembering new words in context instead of memorising long lists. Last month, I decided to join a conversation club, and I have enjoyed talking with new friends ever since.</p></div><p>Apa yang biasa dilakukan penulis selama satu jam setiap pagi?</p>',
            'options' => ['Belajar bahasa Inggris', 'Berolahraga', 'Menonton berita di televisi', 'Menulis surat kepada gurunya'],
            'answer' => 0,
            'explanation' => 'Kalimat pertama menyatakan <em>&ldquo;Every morning, I spend an hour practising English&rdquo;</em>, yaitu belajar bahasa Inggris.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk yang tepat:<br><strong>&ldquo;My parents want me ___ (become) a doctor.&rdquo;</strong>',
            'answer' => 'to become',
            'accepted' => ['to become'],
            'explanation' => 'Pola <em>want + objek + to + V</em>: orang tuaku <em>ingin</em> saya menjadi dokter, sehingga jawabannya <em>to become</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut:<br><strong>&ldquo;Would you mind ___ (open) the window? It is hot in here.&rdquo;</strong>',
            'answer' => 'opening',
            'accepted' => ['opening'],
            'explanation' => '<em>Mind</em> diikuti gerund: <em>would you mind + V-ing</em> adalah cara sopan meminta sesuatu.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Terjemahkan ke bahasa Inggris: &ldquo;Saya suka membaca buku.&rdquo;<br>I enjoy ___ .',
            'answer' => 'reading books',
            'accepted' => ['reading books', 'reading a book', 'reading'],
            'explanation' => 'Pola <em>enjoy + V-ing</em> membuat terjemahan yang tepat adalah <em>I enjoy reading books</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Setelah preposisi seperti <strong>in</strong>, <strong>about</strong>, atau <strong>without</strong>, kata kerja selalu berbentuk gerund (-ing).',
            'answer' => true,
            'explanation' => 'Preposisi selalu diikuti kata benda atau gerund, misalnya <em>interested in learning</em> dan <em>without saying goodbye</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => '<strong>&ldquo;Remember to lock the door&rdquo;</strong> dan <strong>&ldquo;Remember locking the door&rdquo;</strong> memiliki makna yang sama.',
            'answer' => false,
            'explanation' => '<em>Remember to do</em> berarti &ldquo;jangan lupa melakukan&rdquo; (tugas untuk masa depan), sedangkan <em>remember doing</em> berarti &ldquo;mengingat pernah melakukan&rdquo; (kenangan masa lalu).',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan kata kerja dengan pola setelahnya.',
            'pairs' => [
                ['left' => 'enjoy', 'right' => '+ gerund (-ing), arti: menyukai'],
                ['left' => 'want', 'right' => '+ infinitif (to + V), arti: menginginkan'],
                ['left' => 'mind', 'right' => '+ gerund (-ing), sering dalam pertanyaan sopan'],
                ['left' => 'decide', 'right' => '+ infinitif (to + V), arti: memutuskan'],
                ['left' => 'keep', 'right' => '+ gerund (-ing), arti: terus melakukan'],
            ],
            'explanation' => 'Hafalkan polanya: <em>enjoy, mind, keep</em> diikuti gerund, sedangkan <em>want, decide</em> diikuti infinitif (to + V).',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'listening',
            'audio_text' => 'We decided to take the early train.',
            'prompt' => 'Dengarkan kalimat berikut, lalu lengkapi kata yang hilang:<br>&ldquo;We decided ___ take the early train.&rdquo;',
            'answer' => 'to',
            'accepted' => ['to'],
            'explanation' => 'Kalimat yang terdengar adalah <em>We decided to take the early train</em> (Kami memutuskan naik kereta pagi). Polanya: <em>decide + to + V</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut dengan pola enjoy + V-ing.',
            'target' => 'I enjoy learning English because it helps me communicate with people from other countries.',
            'hint' => 'Arti: Saya suka belajar bahasa Inggris karena membantu saya berkomunikasi dengan orang dari negara lain.',
            'explanation' => 'Gunakan <em>enjoy + V-ing</em>, lalu sambungkan alasan dengan <em>because</em> agar kalimat lebih lengkap.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih kalimat yang benar.',
            'options' => [
                'I look forward to hear from you.',
                'I look forward to hearing from you.',
                'I look forward hear from you.',
                'I look forward at hearing from you.',
            ],
            'answer' => 1,
            'explanation' => 'Pada <em>look forward to</em>, kata <em>to</em> adalah preposisi sehingga diikuti gerund: <em>look forward to hearing from you</em>.',
        ],
    ],
];
