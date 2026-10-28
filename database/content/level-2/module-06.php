<?php

/**
 * Level 2 — Modul 06: Passive Voice
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
    'title' => 'Passive Voice',
    'slug' => 'passive-voice',
    'subtitle' => 'Fokus pada tindakan dan objek (berbagai tense)',
    'summary' => 'Belajar kalimat pasif: struktur be + V3 untuk berbagai tense dan modal, serta kapan pelaku tidak perlu disebutkan.',
    'icon' => '🔄',
    'objectives' => [
        'Membentuk kalimat pasif pada present, past, future, dan continuous',
        'Menggunakan bentuk pasif setelah modal dan infinitif',
        'Memilih kapan pelaku perlu disebutkan dengan frasa by',
        'Menghindari kesalahan umum seperti was send dan was wrote',
    ],
    'sections' => [
        [
            'heading' => 'Apa Itu Passive Voice?',
            'body' => '<p><strong>Passive voice</strong> (kalimat pasif) digunakan ketika kita ingin menonjolkan <strong>tindakan atau objek</strong>, bukan pelakunya. Struktur dasarnya adalah <strong>be (sesuai tense) + past participle (V3)</strong>.</p>
<p>Perhatikan perbedaan antara kalimat aktif dan pasif:</p>
<table>
<thead><tr><th>Kalimat Aktif</th><th>Kalimat Pasif</th></tr></thead>
<tbody>
<tr><td>The team completed the project.</td><td>The project was completed by the team.</td></tr>
<tr><td>Someone cleans the office every day.</td><td>The office is cleaned every day.</td></tr>
<tr><td>Millions of people speak English.</td><td>English is spoken by millions of people.</td></tr>
</tbody>
</table>
<p>Frasa <em>by + pelaku</em> hanya ditambahkan jika pelaku penting atau diketahui. Jika pelaku tidak diketahui atau tidak relevan, frasa itu dihilangkan.</p>',
            'examples' => [
                ['en' => 'The project was completed by the team.', 'id' => 'Proyek itu diselesaikan oleh tim.'],
                ['en' => 'The office is cleaned every day.', 'id' => 'Kantor dibersihkan setiap hari.'],
                ['en' => 'English is spoken all over the world.', 'id' => 'Bahasa Inggris digunakan di seluruh dunia.'],
            ],
        ],
        [
            'heading' => 'Passive Voice dalam Berbagai Tense',
            'body' => '<p>Untuk membuat kalimat pasif, ubah bentuk <em>be</em> sesuai tense, lalu gunakan kata kerja bentuk ketiga (V3).</p>
<table>
<thead><tr><th>Tense</th><th>Rumus Pasif</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Simple present</td><td>am/is/are + V3</td><td>The room is cleaned every day.</td></tr>
<tr><td>Simple past</td><td>was/were + V3</td><td>The letter was sent yesterday.</td></tr>
<tr><td>Present perfect</td><td>have/has been + V3</td><td>The results have been announced.</td></tr>
<tr><td>Past perfect</td><td>had been + V3</td><td>The road had been repaired before the festival.</td></tr>
<tr><td>Future (will)</td><td>will be + V3</td><td>The bridge will be opened next year.</td></tr>
<tr><td>Present continuous</td><td>am/is/are being + V3</td><td>The wall is being painted now.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'The results have been announced.', 'id' => 'Hasil-hasil telah diumumkan.'],
                ['en' => 'The bridge will be opened next year.', 'id' => 'Jembatan itu akan dibuka tahun depan.'],
                ['en' => 'The room is being painted at the moment.', 'id' => 'Ruangan itu sedang dicat saat ini.'],
            ],
        ],
        [
            'heading' => 'Passive dengan Modal dan Infinitif',
            'body' => '<p>Modal verbs seperti <em>can, must, should,</em> dan <em>may</em> diikuti <strong>be + V3</strong>.</p>
<ul>
<li><strong>can be + V3</strong> &mdash; The data can be checked online. (Data dapat diperiksa secara daring.)</li>
<li><strong>must be + V3</strong> &mdash; This form must be signed. (Formulir ini harus ditandatangani.)</li>
<li><strong>should be + V3</strong> &mdash; The problem should be reported immediately. (Masalah ini sebaiknya segera dilaporkan.)</li>
</ul>
<p>Bentuk infinitif pasif adalah <strong>to be + V3</strong>, misalnya pada kalimat <em>She expects to be promoted next year</em> (Dia mengharapkan dipromosikan tahun depan).</p>',
            'examples' => [
                ['en' => 'The data can be checked online.', 'id' => 'Data dapat diperiksa secara daring.'],
                ['en' => 'This form must be signed by Friday.', 'id' => 'Formulir ini harus ditandatangani paling lambat hari Jumat.'],
                ['en' => 'She hopes to be invited to the meeting.', 'id' => 'Dia berharap diundang ke rapat itu.'],
            ],
        ],
        [
            'heading' => 'Kapan Menggunakan Passive Voice?',
            'body' => '<p>Passive voice tepat digunakan dalam situasi berikut:</p>
<ol>
<li><strong>Pelaku tidak diketahui</strong> &mdash; My bike was stolen last night. (Sepeda saya dicuri malam tadi.)</li>
<li><strong>Pelaku tidak penting</strong> &mdash; yang dibahas adalah hasil tindakan, bukan orang yang melakukannya.</li>
<li><strong>Gaya bahasa formal, ilmiah, atau berita</strong> &mdash; The vaccine was developed in record time.</li>
<li><strong>Menekankan objek atau penerima tindakan</strong> &mdash; The new policy was announced by the president.</li>
</ol>',
            'examples' => [
                ['en' => 'My bike was stolen last night.', 'id' => 'Sepeda saya dicuri malam tadi.'],
                ['en' => 'The vaccine was developed in record time.', 'id' => 'Vaksin itu dikembangkan dalam waktu yang sangat singkat.'],
                ['en' => 'The new rules were announced this morning.', 'id' => 'Aturan baru diumumkan pagi ini.'],
                ['en' => 'The bridge has been closed for repairs.', 'id' => 'Jembatan itu ditutup untuk perbaikan.'],
            ],
        ],
        [
            'heading' => 'Kesalahan Umum dalam Passive Voice',
            'body' => '<p>Berikut kesalahan yang sering terjadi dan cara memperbaikinya:</p>
<ul>
<li>Salah: <em>The letter was send yesterday.</em> &rarr; Benar: <strong>The letter was sent yesterday</strong> (gunakan V3, bukan kata kerja dasar).</li>
<li>Salah: <em>The book was wrote by her.</em> &rarr; Benar: <strong>The book was written by her</strong>.</li>
<li>Kata kerja dengan dua objek (<em>give, send, tell, offer</em>) lebih alami jika objek orang menjadi subjeknya: <em>She was given a reward</em> lebih umum daripada <em>A reward was given to her</em>.</li>
<li>Dalam bahasa informal, <em>get</em> bisa menggantikan <em>be</em>: <em>He got injured during the match.</em></li>
</ul>',
            'examples' => [
                ['en' => 'The letter was sent yesterday.', 'id' => 'Surat itu dikirim kemarin.'],
                ['en' => 'She was given a reward by the committee.', 'id' => 'Dia diberi hadiah oleh panitia.'],
                ['en' => 'He got injured during the match.', 'id' => 'Dia cedera saat pertandingan berlangsung.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'built', 'phonetic' => '/bɪlt/', 'meaning' => 'dibangun (bentuk lampau/V3 dari build)', 'example' => 'The bridge was built in 1901.'],
        ['word' => 'designed', 'phonetic' => '/dɪˈzaɪnd/', 'meaning' => 'dirancang', 'example' => 'The uniform was designed by a local artist.'],
        ['word' => 'delivered', 'phonetic' => '/dɪˈlɪvərd/', 'meaning' => 'dikirim / diantar', 'example' => 'The parcels were delivered this morning.'],
        ['word' => 'published', 'phonetic' => '/ˈpʌblɪʃt/', 'meaning' => 'diterbitkan', 'example' => 'The novel was published in 1998.'],
        ['word' => 'repaired', 'phonetic' => '/rɪˈpeərd/', 'meaning' => 'diperbaiki', 'example' => 'The road has been repaired.'],
        ['word' => 'announced', 'phonetic' => '/əˈnaʊnst/', 'meaning' => 'diumumkan', 'example' => 'The winners will be announced tomorrow.'],
        ['word' => 'manufactured', 'phonetic' => '/ˌmænjuˈfæktʃərd/', 'meaning' => 'diproduksi', 'example' => 'These phones are manufactured in Vietnam.'],
        ['word' => 'damaged', 'phonetic' => '/ˈdæmɪdʒd/', 'meaning' => 'rusak / dirusak', 'example' => 'The roof was damaged by the storm.'],
        ['word' => 'be supposed to', 'phonetic' => '/biː səˈpoʊzd tə/', 'meaning' => 'seharusnya (diharapkan)', 'example' => 'You are supposed to wear a helmet.'],
        ['word' => 'be taken care of', 'phonetic' => '/biː ˌteɪkən ˈkeər əv/', 'meaning' => 'dirawat / diperhatikan', 'example' => 'The children are well taken care of.'],
        ['word' => 'be responsible for', 'phonetic' => '/biː rɪˈspɒnsəbl fɔːr/', 'meaning' => 'bertanggung jawab atas', 'example' => 'He is responsible for the budget.'],
        ['word' => 'unknown', 'phonetic' => '/ʌnˈnoʊn/', 'meaning' => 'tidak diketahui', 'example' => 'The owner of the bag is unknown.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Pilih bentuk passive voice yang tepat:<br><strong>&ldquo;The project ___ by the team last year.&rdquo;</strong>',
            'options' => ['completed', 'was completed', 'was completing', 'has completed'],
            'answer' => 1,
            'explanation' => 'Passive voice lampau memakai <em>was/were + V3</em>. Subjek <em>the project</em> tunggal, sehingga jawabannya <em>was completed</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut (perhatikan keterangan <em>right now</em>):<br><strong>&ldquo;The wall ___ by the workers right now.&rdquo;</strong>',
            'options' => ['paints', 'is being painted', 'is painted', 'painted'],
            'answer' => 1,
            'explanation' => 'Pasif untuk kejadian yang sedang berlangsung memakai <em>am/is/are + being + V3</em>, yaitu <em>is being painted</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk pasif setelah modal:<br><strong>&ldquo;This form ___ in black ink.&rdquo;</strong>',
            'options' => ['must fill', 'must be filled', 'must been filled', 'must filling'],
            'answer' => 1,
            'explanation' => 'Setelah modal, rumus pasifnya adalah <em>modal + be + V3</em>, sehingga jawabannya <em>must be filled</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam kalimat <strong>&ldquo;The decision was announced yesterday&rdquo;</strong>, arti kata <em>announced</em> adalah&hellip;',
            'options' => ['dibatalkan', 'diumumkan', 'diputuskan', 'didiskusikan'],
            'answer' => 1,
            'explanation' => '<em>Announce</em> berarti mengumumkan; bentuk lampau dan past participlenya sama-sama <em>announced</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>The Borobudur Temple was built in the ninth century by an ancient dynasty. Every year, millions of visitors come to Central Java to see it. In 1991, UNESCO declared the temple a World Heritage Site. Since then, restoration work has been carried out regularly to protect the stones from damage.</p></div><p>Berdasarkan teks, kapan Candi Borobudur dibangun?</p>',
            'options' => ['Pada abad kesembilan', 'Pada tahun 1991', 'Setiap tahun', 'Baru-baru ini'],
            'answer' => 0,
            'explanation' => 'Kalimat pertama menyatakan <em>&ldquo;The Borobudur Temple was built in the ninth century&rdquo;</em>; tahun 1991 adalah saat UNESCO menetapkannya sebagai Warisan Dunia.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk pasif: <strong>&ldquo;The letters ___ (deliver) every morning.&rdquo;</strong>',
            'answer' => 'are delivered',
            'accepted' => ['are delivered'],
            'explanation' => 'Keterangan <em>every morning</em> menunjukkan kebiasaan, jadi gunakan present simple passive: subjek jamak <em>the letters</em> → <em>are delivered</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi kalimat berikut: <strong>&ldquo;The invitation ___ (send) yesterday, but nobody replied.&rdquo;</strong>',
            'answer' => 'was sent',
            'accepted' => ['was sent'],
            'explanation' => 'Kata <em>yesterday</em> menunjukkan masa lalu, sehingga memakai pasif lampau <em>was/were + V3</em>; <em>the invitation</em> tunggal sehingga <em>was sent</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'writing',
            'prompt' => 'Ubah kalimat aktif berikut menjadi passive voice:<br>&ldquo;Someone stole my bike last night.&rdquo;',
            'answer' => 'My bike was stolen last night',
            'accepted' => ['my bike was stolen last night', 'my bike was stolen'],
            'explanation' => 'Objek aktif <em>my bike</em> menjadi subjek pasif dengan <em>was stolen</em>. Frasa <em>by someone</em> dihilangkan karena pelakunya tidak diketahui.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Kalimat pasif boleh tidak menyebutkan pelaku jika pelaku tidak diketahui atau tidak penting.',
            'answer' => true,
            'explanation' => 'Frasa <em>by + pelaku</em> bersifat opsional dalam passive voice. Yang utama adalah tindakan dan objek yang menerimanya.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => '<strong>&ldquo;The book was reading by her&rdquo;</strong> adalah bentuk passive voice yang benar.',
            'answer' => false,
            'explanation' => 'Bentuk yang benar adalah <em>The book was read by her</em>. Passive voice membutuhkan <em>was/were + V3 (read)</em>, bukan kata kerja berakhiran <em>-ing</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kalimat pasif dengan artinya.',
            'pairs' => [
                ['left' => 'The road was repaired.', 'right' => 'Jalan itu diperbaiki.'],
                ['left' => 'The results will be announced.', 'right' => 'Hasil akan diumumkan.'],
                ['left' => 'The cake is being baked.', 'right' => 'Kue itu sedang dipanggang.'],
                ['left' => 'The house has been sold.', 'right' => 'Rumah itu sudah terjual.'],
                ['left' => 'The documents must be signed.', 'right' => 'Dokumen harus ditandatangani.'],
            ],
            'explanation' => 'Perhatikan bentuk <em>be</em> pada tiap kalimat: <em>was</em> (lampau), <em>will be</em> (masa depan), <em>is being</em> (sedang berlangsung), <em>has been</em> (sempurna), dan <em>must be</em> (modal).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'The meeting has been postponed until Friday.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'The meeting has been postponed until Friday.',
                'The meeting has been planned for Friday.',
                'The meeting was cancelled on Friday.',
                'The meeting has been postponed until Sunday.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>The meeting has been postponed until Friday</em> (rapat ditunda sampai hari Jumat). Kata kuncinya adalah <em>postponed</em> (ditunda), bukan <em>cancelled</em> (dibatalkan).',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut dengan struktur passive voice lampau.',
            'target' => 'The project was completed by our team last month.',
            'hint' => 'Arti: Proyek itu diselesaikan oleh tim kami bulan lalu.',
            'explanation' => 'Urutan kalimat pasif lampau: objek menjadi subjek + <em>was/were + V3</em> + <em>by + pelaku</em> + keterangan waktu.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'Lengkapi dengan bentuk pasif informal (get + V3):<br><strong>&ldquo;My phone ___ (steal) yesterday.&rdquo;</strong>',
            'answer' => 'got stolen',
            'accepted' => ['got stolen'],
            'explanation' => 'Dalam bahasa informal, <em>get</em> bisa menggantikan <em>be</em>: <em>got stolen</em> berarti dicuri. Bentuk formalnya adalah <em>was stolen</em>.',
        ],
    ],
];
