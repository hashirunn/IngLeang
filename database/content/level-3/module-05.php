<?php

/**
 * Level 3 — Modul 05: Advanced Vocabulary
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
    'title' => 'Advanced Vocabulary',
    'slug' => 'advanced-vocabulary',
    'subtitle' => 'Collocations, word formation (derivation), dan precise word choice',
    'summary' => 'Menguasai kolokasi penting bahasa Inggris, pembentukan kata (imbuhan depan dan belakang), serta pemilihan kata yang presisi untuk menulis dan berbicara secara akurat.',
    'icon' => '🧩',
    'objectives' => [
        'Menggunakan kolokasi verb + noun yang baku (conduct research, meet a deadline)',
        'Membentuk kata turunan dengan imbuhan depan dan belakang yang tepat',
        'Membedakan kata yang sering tertukar seperti affect/effect dan rise/raise',
        'Memilih adjektiva dan adverbia yang kolokasional (heavy rain, highly likely)',
    ],
    'sections' => [
        [
            'heading' => 'Kolokasi Penting: Kata Kerja dan Kata Benda',
            'body' => '<p><em>Collocation</em> adalah gabungan kata yang secara alami sering muncul bersama dalam bahasa Inggris. Kesalahan kolokasi (misalnya <em>*make research</em>) membuat penutur terdengar tidak alami meski gramatikanya benar. Berikut kolokasi yang wajib dikuasai level C1:</p>
<table>
<thead><tr><th>Kolokasi</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>achieve a goal</td><td>mencapai tujuan</td></tr>
<tr><td>conduct research</td><td>melakukan penelitian</td></tr>
<tr><td>meet a deadline</td><td>memenuhi tenggat waktu</td></tr>
<tr><td>pose a challenge</td><td>menghadirkan tantangan</td></tr>
<tr><td>draw a conclusion</td><td>menarik kesimpulan</td></tr>
<tr><td>take into account</td><td>mempertimbangkan</td></tr>
<tr><td>have an impact</td><td>berdampak</td></tr>
<tr><td>make an effort</td><td>berusaha</td></tr>
<tr><td>commit a crime</td><td>melakukan kejahatan</td></tr>
<tr><td>pay attention</td><td>memperhatikan</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'The team worked overtime to meet the deadline.', 'id' => 'Tim lembur untuk memenuhi tenggat waktu.'],
                ['en' => 'The findings draw attention to the need for further research.', 'id' => 'Temuan itu menarik perhatian pada perlunya penelitian lanjutan.'],
                ['en' => 'Regulation poses a serious challenge for small firms.', 'id' => 'Regulasi menghadirkan tantangan serius bagi perusahaan kecil.'],
            ],
        ],
        [
            'heading' => 'Kolokasi dengan Adjektiva dan Adverbia',
            'body' => '<p>Adjektiva juga memiliki pasangan kolokasional yang baku. Yang umum: <em>heavy rain</em> (bukan <em>strong rain</em>), <em>strong wind</em>, <em>deep concern</em>, <em>keen interest</em>, <em>broad consensus</em>. Untuk memperkuat adjektiva, bahasa akademik memakai <em>highly, utterly, bitterly, deeply</em>:</p>
<ul>
<li><strong>highly likely</strong> — sangat mungkin</li>
<li><strong>deeply concerned</strong> — sangat khawatir</li>
<li><strong>utterly ridiculous</strong> — benar-benar konyol</li>
<li><strong>bitterly cold</strong> — sangat dingin (menusuk)</li>
<li><strong>strongly recommend</strong> — sangat merekomendasikan</li>
</ul>',
            'examples' => [
                ['en' => 'Heavy rain caused flooding in the low-lying areas.', 'id' => 'Hujan lebat menyebabkan banjir di daerah dataran rendah.'],
                ['en' => 'The government expressed deep concern over the rising prices.', 'id' => 'Pemerintah menyampaikan kekhawatiran mendalam atas harga yang melonjak.'],
                ['en' => 'It is highly likely that the motion will be passed.', 'id' => 'Sangat mungkin mosi itu akan disahkan.'],
            ],
        ],
        [
            'heading' => 'Word Formation (Derivasi)',
            'body' => '<p><em>Derivation</em> adalah pembentukan kata baru dengan menambahkan imbuhan. Perhatikan bahwa sebagian derivasi menyebabkan <strong>perubahan ejaan</strong>, sehingga tidak cukup hanya menempelkan akhiran:</p>
<table>
<thead><tr><th>Kata dasar</th><th>Imbuhan</th><th>Kata turunan</th><th>Arti</th></tr></thead>
<tbody>
<tr><td>decide (memutuskan)</td><td>-sion</td><td>decision</td><td>keputusan</td></tr>
<tr><td>precise (presisi)</td><td>-ion</td><td>precision</td><td>ketepatan</td></tr>
<tr><td>care (peduli)</td><td>-less / -ful</td><td>careless / careful</td><td>ceroboh / teliti</td></tr>
<tr><td>danger (bahaya)</td><td>-ous</td><td>dangerous</td><td>berbahaya</td></tr>
<tr><td>effective (efektif)</td><td>-ness</td><td>effectiveness</td><td>keefektifan</td></tr>
<tr><td>reluctant (enggan)</td><td>-ance</td><td>reluctance</td><td>keraguan; keengganan</td></tr>
</tbody>
</table>
<p>Imbuhan depan juga mengubah makna: <em>un-</em>, <em>in-/im-</em>, <em>dis-</em>, <em>re-</em> (mengulang), <em>over-</em> (berlebihan), <em>under-</em> (kurang), <em>mis-</em> (keliru), <em>pre-</em> (sebelumnya).</p>',
            'examples' => [
                ['en' => 'The committee\'s implementation of the new rules took two years.', 'id' => 'Penerapan aturan baru oleh komite memakan waktu dua tahun.'],
                ['en' => 'She showed great diligence in completing the task.', 'id' => 'Dia menunjukkan ketekunan besar dalam menyelesaikan tugas itu.'],
                ['en' => 'Precise measurements are essential to the experiment.', 'id' => 'Pengukuran yang presisi sangat penting bagi eksperimen itu.'],
            ],
        ],
        [
            'heading' => 'Pilihan Kata yang Presisi',
            'body' => '<p>Ketepatan makna membedakan penulis C1 dari penulis level bawah. Beberapa pasangan yang sering tertukar:</p>
<table>
<thead><tr><th>Kata</th><th>Jenis &amp; Makna</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>affect</td><td>kata kerja: memengaruhi</td><td>The decision affects everyone.</td></tr>
<tr><td>effect</td><td>kata benda: dampak</td><td>The decision had a noticeable effect.</td></tr>
<tr><td>rise</td><td>intransitive: naik (tanpa objek)</td><td>Prices have risen sharply.</td></tr>
<tr><td>raise</td><td>transitive: menaikkan (dengan objek)</td><td>The company raised its prices.</td></tr>
<tr><td>lend</td><td>memberi pinjam</td><td>Could you lend me a hand?</td></tr>
<tr><td>borrow</td><td>meminjam (dari)</td><td>May I borrow your pen?</td></tr>
</tbody>
</table>
<p>Kata benda pengalaman juga bervariasi presisi: <em>glance</em> (sekilas), <em>stare</em> (menatap lama, sering tanpa sadar), <em>gaze</em> (menatap lama penuh perasaan atau kekaguman).</p>',
            'examples' => [
                ['en' => 'She glanced at her watch during the lecture.', 'id' => 'Dia melihat jamnya sebentar saat kuliah.'],
                ['en' => 'The audience gazed at the projection in silence.', 'id' => 'Penonton menatap proyeksi itu dalam diam.'],
                ['en' => 'The company raised its prices, which affected demand.', 'id' => 'Perusahaan menaikkan harga, yang memengaruhi permintaan.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'achieve a goal', 'phonetic' => '/əˈtʃiːv ə ɡəʊl/', 'meaning' => 'mencapai tujuan', 'example' => 'She achieved her goal of running a marathon.'],
        ['word' => 'conduct research', 'phonetic' => '/kənˈdʌkt rɪˈsɜːtʃ/', 'meaning' => 'melakukan penelitian', 'example' => 'The university conducts research on climate change.'],
        ['word' => 'meet a deadline', 'phonetic' => '/miːt ə ˈdedlaɪn/', 'meaning' => 'memenuhi tenggat waktu', 'example' => 'We worked all weekend to meet the deadline.'],
        ['word' => 'draw a conclusion', 'phonetic' => '/drɔː ə kənˈkluːʒn/', 'meaning' => 'menarik kesimpulan', 'example' => 'The researchers drew a cautious conclusion.'],
        ['word' => 'take into account', 'phonetic' => '/teɪk ɪntuː əˈkaʊnt/', 'meaning' => 'mempertimbangkan', 'example' => 'We must take the weather into account.'],
        ['word' => 'pose a challenge', 'phonetic' => '/pəʊz ə ˈtʃælɪndʒ/', 'meaning' => 'menghadirkan tantangan', 'example' => 'The new rules pose a challenge for small firms.'],
        ['word' => 'have a significant impact', 'phonetic' => '/hæv ə sɪɡˈnɪfɪkənt ˈɪmpækt/', 'meaning' => 'berdampak signifikan', 'example' => 'The law had a significant impact on wages.'],
        ['word' => 'make an effort', 'phonetic' => '/meɪk ən ˈefət/', 'meaning' => 'berusaha', 'example' => 'She made a genuine effort to improve.'],
        ['word' => 'derivation', 'phonetic' => '/ˌderɪˈveɪʃn/', 'meaning' => 'turunan kata (word formation)', 'example' => 'This word is a derivation from Latin.'],
        ['word' => 'prefix', 'phonetic' => '/ˈpriːfɪks/', 'meaning' => 'imbuhan depan', 'example' => 'The prefix "un-" changes the meaning to its opposite.'],
        ['word' => 'suffix', 'phonetic' => '/ˈsʌfɪks/', 'meaning' => 'imbuhan belakang', 'example' => 'The suffix "-tion" turns verbs into nouns.'],
        ['word' => 'affect', 'phonetic' => '/əˈfekt/', 'meaning' => 'memengaruhi (kata kerja)', 'example' => 'The weather affects my mood.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'The new policy is likely to ___ a significant impact on small businesses.',
            'options' => ['do', 'make', 'have', 'take'],
            'answer' => 2,
            'explanation' => 'Kolokasi baku: <em>have an impact</em>. <em>Do/make an impact</em> bukan kolokasi yang benar dalam bahasa Inggris.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'The committee&rsquo;s ___ of the new regulations surprised many observers.',
            'options' => ['implement', 'implementing', 'implementation', 'implemented'],
            'answer' => 2,
            'explanation' => 'Setelah kata benda kepemilikan (<em>the committee\'s</em>) diperlukan kata benda: <em>implementation</em> (imbuhan <em>-tion</em> dari <em>implement</em>).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'She showed great ___ in completing the task ahead of schedule.',
            'options' => ['diligent', 'diligently', 'diligence', 'diligences'],
            'answer' => 2,
            'explanation' => 'Struktur <em>showed great + kata benda</em> membutuhkan <em>diligence</em> (ketekunan); <em>diligent</em> adalah adjektiva dan <em>diligences</em> tidak lazim (kata ini umumnya tidak dapat dijumlah).',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Rising oil prices will inevitably ___ household spending.',
            'options' => ['effect', 'affect', 'defect', 'infect'],
            'answer' => 1,
            'explanation' => '<em>Affect</em> adalah kata kerja \'memengaruhi\'; <em>effect</em> adalah kata benda \'dampak\'; <em>defect</em> = cacat; <em>infect</em> = menginfeksi.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'The findings ___ attention to the need for further research. (menarik)',
            'answer' => 'draw',
            'accepted' => ['draw'],
            'explanation' => 'Kolokasi baku: <em>draw attention to ...</em> berarti \'menarik perhatian terhadap ...\'.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'We must take all relevant factors ___ account before making a decision.',
            'answer' => 'into',
            'accepted' => ['into'],
            'explanation' => 'Frasa tetap: <em>take something into account</em> = mempertimbangkan sesuatu.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'The bridge was completed on time and ___ budget. (dalam batas; kolokasi formal)',
            'answer' => 'within',
            'accepted' => ['within'],
            'explanation' => 'Kolokasi proyek: <em>within budget</em> (dalam batas anggaran) berpasangan dengan <em>on time</em> (tepat waktu).',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Frasa <em>&ldquo;make a research&rdquo;</em> tidak tepat; kolokasi yang benar dalam bahasa Inggris adalah <em>&ldquo;conduct research&rdquo;</em> atau <em>&ldquo;do research&rdquo;</em>.',
            'answer' => true,
            'explanation' => 'Kata benda <em>research</em> tidak dapat dijumlah di sini dan berpasangan dengan <em>conduct</em> (formal) atau <em>do</em> (umum), bukan <em>make</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => '<em>&ldquo;Heavy rain&rdquo;</em> dan <em>&ldquo;strong rain&rdquo;</em> sama-sama umum dan baku dalam bahasa Inggris.',
            'answer' => false,
            'explanation' => '<em>Heavy rain</em> adalah kolokasi baku; <em>strong rain</em> tidak lazim. Kata <em>strong</em> justru berpasangan dengan <em>wind, tea, coffee</em>, dan sejenisnya.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan kolokasi dengan artinya.',
            'pairs' => [
                ['left' => 'achieve a goal', 'right' => 'mencapai tujuan'],
                ['left' => 'pose a challenge', 'right' => 'menghadirkan tantangan'],
                ['left' => 'draw a conclusion', 'right' => 'menarik kesimpulan'],
                ['left' => 'take into account', 'right' => 'mempertimbangkan'],
                ['left' => 'meet a deadline', 'right' => 'memenuhi tenggat waktu'],
            ],
            'explanation' => 'Kolokasi harus dipelajari sebagai satu kesatuan; mengganti verba (misalnya <em>*make a conclusion</em>) akan terdengar tidak alami meski dimengerti.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'Despite their best efforts, the team could not meet the deadline.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih pernyataan yang paling tepat.',
            'options' => [
                'Tim berhasil memenuhi tenggat waktu.',
                'Tim berusaha sebaik mungkin tetapi tetap gagal memenuhi tenggat waktu.',
                'Tim tidak berusaha sama sekali.',
                'Tenggat waktu diperpanjang oleh klien.',
            ],
            'answer' => 1,
            'explanation' => '<em>Despite their best efforts</em> berarti \'meski telah berusaha sebaik mungkin\', dan <em>could not meet the deadline</em> berarti gagal memenuhi tenggat.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>The researchers conducted a series of experiments over three years and drew a cautious conclusion: the new material is likely to have a significant impact on battery life, although further testing is needed. The team took into account variables such as temperature and humidity, which had posed a serious challenge in earlier trials.</p></div><p>Kesimpulan apa yang ditarik para peneliti?</p>',
            'options' => [
                'Material baru pasti akan menggantikan baterai lama.',
                'Material baru kemungkinan berdampak besar pada daya tahan baterai, tetapi masih perlu pengujian lanjutan.',
                'Variabel suhu membuat seluruh penelitian gagal.',
                'Penelitian hanya berlangsung selama satu tahun.',
            ],
            'answer' => 1,
            'explanation' => 'Kalimat <em>is likely to have a significant impact ... although further testing is needed</em> menunjukkan kesimpulan yang optimistis namun berhati-hati.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan hasil penelaahanmu terhadap sebuah studi dengan kolokasi yang tepat.',
            'target' => 'The findings draw attention to the need for further research.',
            'hint' => 'Arti: Temuan itu menarik perhatian pada perlunya penelitian lebih lanjut.',
            'explanation' => 'Gunakan kolokasi <em>draw attention to</em>; alternatif formal lainnya adalah <em>highlight the need for</em>.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Nyatakan pertimbanganmu sebelum mengambil keputusan bisnis.',
            'target' => 'We must take the economic impact into account before making any decision.',
            'hint' => 'Arti: Kami harus mempertimbangkan dampak ekonomi sebelum mengambil keputusan apa pun.',
            'explanation' => 'Kolokasi <em>take ... into account</em> = mempertimbangkan; <em>economic impact</em> = dampak ekonomi.',
        ],
    ],
];
