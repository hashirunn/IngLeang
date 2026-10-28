<?php

/**
 * Level 1 — Modul 05: Simple Present
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
    'title' => 'Simple Present',
    'slug' => 'simple-present',
    'subtitle' => 'Rutinitas, kebiasaan, dan fakta (termasuk aturan s/es)',
    'summary' => 'Pelajari simple present untuk menyatakan rutinitas, kebiasaan, dan fakta, termasuk aturan penambahan -s dan -es pada subjek he, she, dan it.',
    'icon' => '⏰',
    'objectives' => [
        'Menggunakan simple present untuk rutinitas dan kebiasaan',
        'Menggunakan simple present untuk fakta dan jadwal tetap',
        'Menambahkan -s atau -es pada kata kerja subjek he, she, it',
        'Memakai keterangan frekuensi seperti always, usually, never',
    ],
    'sections' => [
        [
            'heading' => 'Kapan Menggunakan Simple Present',
            'body' => '<p><strong>Simple present</strong> dipakai untuk tiga hal utama: rutinitas, fakta, dan jadwal tetap.</p>
<table>
<thead><tr><th>Kegunaan</th><th>Contoh</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>Rutinitas / kebiasaan</td><td>I get up at six every day.</td><td>Saya bangun pukul enam setiap hari.</td></tr>
<tr><td>Fakta / kebenaran umum</td><td>The sun rises in the east.</td><td>Matahari terbit di timur.</td></tr>
<tr><td>Jadwal tetap</td><td>The train leaves at eight.</td><td>Kereta berangkat pukul delapan.</td></tr>
<tr><td>Kebiasaan berulang</td><td>She often visits her grandmother.</td><td>Dia sering mengunjungi neneknya.</td></tr>
</tbody>
</table>
<p>Kata kunci yang sering menandai simple present: <em>every day, every morning, usually, always, often, sometimes, never, on Sundays</em>.</p>',
            'examples' => [
                ['en' => 'I drink tea every morning.', 'id' => 'Saya minum teh setiap pagi.'],
                ['en' => 'Fish live in water.', 'id' => 'Ikan hidup di air.'],
                ['en' => 'Our English class starts at nine.', 'id' => 'Pelajaran bahasa Inggris kami dimulai pukul sembilan.'],
            ],
        ],
        [
            'heading' => 'Bentuk Positif dan Aturan -s / -es',
            'body' => '<p>Struktur kalimat positif: <strong>Subjek + kata kerja (bentuk dasar)</strong>. Untuk subjek <em>I, you, we, they</em> kata kerja tetap dasar. Untuk subjek <em>he, she, it</em>, kata kerja diberi akhiran <strong>-s</strong> atau <strong>-es</strong>.</p>
<table>
<thead><tr><th>Aturan</th><th>Kata Kerja</th><th>Bentuk he/she/it</th></tr></thead>
<tbody>
<tr><td>Umum: tambah -s</td><td>work, play, read</td><td>works, plays, reads</td></tr>
<tr><td>Berakhir -s, -x, -ch, -sh, -o: tambah -es</td><td>go, watch, wash, do</td><td>goes, watches, washes, does</td></tr>
<tr><td>Konsonan + -y: -y menjadi -ies</td><td>study, fly</td><td>studies, flies</td></tr>
<tr><td>Tidak beraturan</td><td>have</td><td>has</td></tr>
</tbody>
</table>
<p>Perhatikan ejaannya: <em>goes</em> (bukan <em>gos</em>), <em>does</em> (bukan <em>dos</em>), <em>studies</em> (bukan <em>studys</em>).</p>',
            'examples' => [
                ['en' => 'She works at a bank.', 'id' => 'Dia bekerja di sebuah bank.'],
                ['en' => 'My brother watches TV after dinner.', 'id' => 'Saudaraku menonton TV setelah makan malam.'],
                ['en' => 'He studies mathematics at university.', 'id' => 'Dia belajar matematika di universitas.'],
                ['en' => 'Tom goes to the gym three times a week.', 'id' => 'Tom pergi ke tempat olahraga tiga kali seminggu.'],
            ],
        ],
        [
            'heading' => 'Keterangan Frekuensi (Adverb of Frequency)',
            'body' => '<p>Keterangan frekuensi menyatakan <strong>seberapa sering</strong> sesuatu terjadi. Posisinya: <strong>sebelum kata kerja utama</strong>, tetapi <strong>setelah to be</strong> (am/is/are).</p>
<table>
<thead><tr><th>Kata</th><th>Perkiraan frekuensi</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>always</td><td>100%</td><td>selalu</td></tr>
<tr><td>usually</td><td>&plusmn; 90%</td><td>biasanya</td></tr>
<tr><td>often</td><td>&plusmn; 70%</td><td>sering</td></tr>
<tr><td>sometimes</td><td>&plusmn; 50%</td><td>kadang-kadang</td></tr>
<tr><td>rarely / seldom</td><td>&plusmn; 10%</td><td>jarang</td></tr>
<tr><td>never</td><td>0%</td><td>tidak pernah</td></tr>
</tbody>
</table>
<p>Contoh posisi: <em>She <strong>usually</strong> walks to school.</em> (sebelum kata kerja) dan <em>She <strong>is</strong> always late.</em> (setelah to be).</p>',
            'examples' => [
                ['en' => 'I always lock the door before I leave.', 'id' => 'Saya selalu mengunci pintu sebelum pergi.'],
                ['en' => 'My father usually reads the newspaper in the evening.', 'id' => 'Ayahku biasanya membaca koran pada malam hari.'],
                ['en' => 'She sometimes helps her mother cook.', 'id' => 'Dia kadang-kadang membantu ibunya memasak.'],
                ['en' => 'We rarely eat at restaurants.', 'id' => 'Kami jarang makan di restoran.'],
            ],
        ],
        [
            'heading' => 'Keterangan Waktu Rutin (Time Expressions)',
            'body' => '<p>Keterangan waktu yang menunjukkan kebiasaan biasanya diletakkan di <strong>akhir kalimat</strong>.</p>
<ul>
<li><strong>every day / every morning / every night</strong> &mdash; setiap hari/pagi/malam</li>
<li><strong>every week / every Sunday</strong> &mdash; setiap minggu/minggu</li>
<li><strong>on Saturdays / on weekends</strong> &mdash; pada hari Sabtu/akhir pekan</li>
<li><strong>once a week / twice a month</strong> &mdash; sekali seminggu / dua kali sebulan</li>
</ul>
<p>Karena sudah ada keterangan waktu seperti <em>every day</em>, kata kerja tidak diulang dengan <em>be</em>: <em>I go to school every day</em> &check;, bukan <em>I am go to school</em> &times;.</p>',
            'examples' => [
                ['en' => 'I play badminton on Saturdays.', 'id' => 'Saya bermain bulu tangkis pada hari Sabtu.'],
                ['en' => 'We have a family dinner every Sunday.', 'id' => 'Kami makan malam bersama keluarga setiap hari Minggu.'],
                ['en' => 'The market opens early every morning.', 'id' => 'Pasar buka pagi-pagi setiap hari.'],
                ['en' => 'She goes to bed at ten every night.', 'id' => 'Dia tidur pada pukul sepuluh setiap malam.'],
            ],
        ],
        [
            'heading' => 'Kesalahan yang Sering Terjadi (Common Mistakes)',
            'body' => '<p>Perhatikan perbandingan kalimat salah dan benar berikut:</p>
<ul>
<li>Salah: <em>*She go to school every day.</em> &rarr; Benar: <strong>She goes to school every day.</strong> (subjek <em>she</em> → kata kerja +es)</li>
<li>Salah: <em>*He studys English.</em> &rarr; Benar: <strong>He studies English.</strong> (konsonan + y → -ies)</li>
<li>Salah: <em>*They goes home after school.</em> &rarr; Benar: <strong>They go home after school.</strong> (subjek jamak → kata kerja dasar)</li>
<li>Salah: <em>*I is a student.</em> &rarr; Benar: <strong>I am a student.</strong> (subjek I memakai <em>am</em>)</li>
</ul>
<p>Aturan cepat: periksa subjeknya dulu. <em>I / you / we / they</em> → kata kerja dasar; <em>he / she / it</em> → +s/-es.</p>',
            'examples' => [
                ['en' => 'She goes to school every day.', 'id' => 'Dia pergi ke sekolah setiap hari.'],
                ['en' => 'He studies English in the evening.', 'id' => 'Dia belajar bahasa Inggris pada malam hari.'],
                ['en' => 'They go home at three.', 'id' => 'Mereka pulang pada pukul tiga.'],
                ['en' => 'I have lunch at noon.', 'id' => 'Saya makan siang pada tengah hari.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'always', 'phonetic' => '/ˈɔːlweɪz/', 'meaning' => 'selalu', 'example' => 'I always drink water after waking up.'],
        ['word' => 'usually', 'phonetic' => '/ˈjuːʒuəli/', 'meaning' => 'biasanya', 'example' => 'She usually walks to school.'],
        ['word' => 'often', 'phonetic' => '/ˈɒfn/', 'meaning' => 'sering', 'example' => 'We often eat lunch together.'],
        ['word' => 'sometimes', 'phonetic' => '/ˈsʌmtaɪmz/', 'meaning' => 'kadang-kadang', 'example' => 'I sometimes watch films at night.'],
        ['word' => 'never', 'phonetic' => '/ˈnevər/', 'meaning' => 'tidak pernah', 'example' => 'He never drinks coffee.'],
        ['word' => 'every day', 'phonetic' => '/ˈevri deɪ/', 'meaning' => 'setiap hari', 'example' => 'I exercise every day.'],
        ['word' => 'wake up', 'phonetic' => '/weɪk ʌp/', 'meaning' => 'bangun tidur', 'example' => 'I wake up at five every morning.'],
        ['word' => 'have breakfast', 'phonetic' => '/hæv ˈbrekfəst/', 'meaning' => 'sarapan', 'example' => 'We have breakfast at seven.'],
        ['word' => 'study', 'phonetic' => '/ˈstʌdi/', 'meaning' => 'belajar', 'example' => 'My sister studies at the library.'],
        ['word' => 'exercise', 'phonetic' => '/ˈeksəsaɪz/', 'meaning' => 'berolahraga', 'example' => 'My father exercises in the morning.'],
        ['word' => 'routine', 'phonetic' => '/ruːˈtiːn/', 'meaning' => 'rutinitas', 'example' => 'A good routine makes the day easier.'],
        ['word' => 'fact', 'phonetic' => '/fækt/', 'meaning' => 'fakta', 'example' => 'It is a fact that the earth goes around the sun.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'They ___ to school every day.',
            'options' => ['go', 'goes', 'going', 'gone'],
            'answer' => 0,
            'explanation' => 'Subjek <em>they</em> (orang ketiga jamak) memakai kata kerja dasar: <strong>They go to school every day.</strong>',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'My brother ___ TV every evening.',
            'options' => ['watch', 'watchs', 'watches', 'watching'],
            'answer' => 2,
            'explanation' => 'Subjek <em>my brother</em> setara dengan <em>he</em>, jadi kata kerjanya diberi akhiran. <em>Watch</em> berakhir -ch, sehingga menjadi <strong>watches</strong>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'She ___ English at school every day.',
            'options' => ['study', 'studies', 'studys', 'studying'],
            'answer' => 1,
            'explanation' => '<em>Study</em> berupa konsonan + y, maka pada subjek <em>she</em> akhirannya menjadi -ies: <strong>studies</strong>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'The sun ___ in the east. (fakta umum)',
            'options' => ['rise', 'rises', 'rising', 'rose'],
            'answer' => 1,
            'explanation' => 'Kalimat fakta umum memakai simple present, dan subjek <em>the sun</em> adalah orang/ketiga tunggal, jadi kata kerjanya <strong>rises</strong>. <em>Rose</em> adalah bentuk lampau.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My sister ___ (pergi) to work by bus every day.',
            'answer' => 'goes',
            'accepted' => ['goes'],
            'explanation' => 'Subjek <em>my sister</em> setara <em>she</em>, dan <em>go</em> berakhir -o sehingga tambahannya -es: <strong>goes</strong>.',
            'is_placement' => true,
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'My father ___ (bangun) up at five o\'clock every day.',
            'answer' => 'wakes',
            'accepted' => ['wakes'],
            'explanation' => 'Untuk subjek <em>my father</em> (setara <em>he</em>), kata kerja <em>wake</em> diberi akhiran -s: <strong>wakes</strong>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'I ___ go to school on Sundays because it is my day off.',
            'answer' => 'never',
            'accepted' => ['never'],
            'explanation' => 'Karena Minggu adalah hari libur, saya <strong>never</strong> (tidak pernah) pergi ke sekolah. Keterangan frekuensi diletakkan sebelum kata kerja.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Pada subjek he, she, dan it, kata kerja pada simple present biasanya diberi akhiran -s atau -es.',
            'answer' => true,
            'explanation' => 'Inilah ciri utama simple present: <em>he/she/it + verb-s/es</em>, misalnya <em>She works</em>, <em>He watches</em>, <em>It costs</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => 'Bentuk yang benar untuk kalimat "He ___ (study) math" adalah "He studys math".',
            'answer' => false,
            'explanation' => 'Ejaan <em>studys</em> tidak ada. Untuk konsonan + y, y berubah menjadi -ies, sehingga yang benar adalah <strong>He studies math</strong>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'grammar',
            'prompt' => 'Cocokkan kata kerja dengan bentuk pada subjek he/she/it.',
            'pairs' => [
                ['left' => 'go', 'right' => 'goes'],
                ['left' => 'watch', 'right' => 'watches'],
                ['left' => 'study', 'right' => 'studies'],
                ['left' => 'have', 'right' => 'has'],
                ['left' => 'do', 'right' => 'does'],
            ],
            'explanation' => 'Semua bentuk ini untuk subjek <em>he/she/it</em>: berakhir -o/-ch menambah -es, konsonan+y menjadi -ies, dan <em>have</em> menjadi <strong>has</strong>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'My sister usually wakes up at six o\'clock.',
            'prompt' => 'Dengarkan audio, lalu pilih kalimat yang kamu dengar.',
            'options' => [
                'My sister usually wakes up at six o\'clock.',
                'My sister usually wakes up at five o\'clock.',
                'My brother usually wakes up at six o\'clock.',
                'My sister never wakes up early.',
            ],
            'answer' => 0,
            'explanation' => 'Yang terdengar adalah <em>My sister usually wakes up at six o\'clock</em>: subjeknya <em>sister</em>, kata keterangan <em>usually</em>, dan waktunya <em>six o\'clock</em>.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>Budi is a student. He wakes up at five o\'clock every day. First, he takes a shower. Then, he has breakfast with his family. He leaves home at six thirty and arrives at school at seven. After school, he plays football with his friends.</p></div><p>Kapan Budi berangkat ke sekolah?</p>',
            'options' => ['Pukul lima', 'Pukul enam tiga puluh', 'Pukul tujuh', 'Setelah sekolah'],
            'answer' => 1,
            'explanation' => 'Kalimat <em>&ldquo;He leaves home at six thirty&rdquo;</em> menunjukkan Budi berangkat (meninggalkan rumah) pada pukul enam tiga puluh. Pukul lima adalah waktu bangun, pukul tujuh waktu tiba di sekolah.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat berikut untuk menceritakan rutinitas pagimu.',
            'target' => 'I usually wake up at six o\'clock every morning.',
            'hint' => 'Arti: Saya biasanya bangun tidur pukul enam setiap pagi.',
            'explanation' => 'Keterangan frekuensi <em>usually</em> diletakkan sebelum kata kerja, dan keterangan waktu <em>every morning</em> di akhir kalimat.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Ucapkan kalimat ini untuk menceritakan kebiasaan keluargamu.',
            'target' => 'My family eats dinner together every evening.',
            'hint' => 'Arti: Keluargaku makan malam bersama setiap malam.',
            'explanation' => 'Subjek <em>my family</em> dianggap tunggal (satu keluarga), jadi kata kerjanya <strong>eats</strong> dengan akhiran -s.',
        ],
    ],
];
