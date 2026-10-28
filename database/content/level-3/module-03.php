<?php

/**
 * Level 3 — Modul 03: Modality & Hedging
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
    'title' => 'Modality & Hedging',
    'slug' => 'modality-and-hedging',
    'subtitle' => 'Might have, must have, arguably, presumably, it could be argued',
    'summary' => 'Belajar menyatakan tingkat keyakinan dengan modal verbs (must have, might have, can\'t have) dan melembutkan klaim secara akademik dengan hedging (arguably, presumably, it could be argued).',
    'icon' => '⚖️',
    'objectives' => [
        'Menyimpulkan peristiwa masa lalu dengan tingkat keyakinan yang tepat (must have, might have, can\'t have)',
        'Membedakan derajat keyakinan pada pernyataan sekarang (must be, might be, can\'t be)',
        'Menerapkan hedging akademik: modal, adverbia, kata kerja suggest/indicate, dan konstruksi impersonal',
        'Memilih kekuatan klaim yang sesuai: tegas vs berhati-hati dalam konteks akademik dan profesional',
    ],
    'sections' => [
        [
            'heading' => 'Spekulasi tentang Masa Lalu',
            'body' => '<p>Untuk menyimpulkan sesuatu tentang masa lalu berdasarkan bukti, gunakan <strong>modal + have + past participle</strong>. Pilihan modal menentukan <strong>tingkat keyakinan</strong>:</p>
<table>
<thead><tr><th>Ekspresi</th><th>Makna</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>must have + pp</td><td>Kesimpulan kuat (hampir pasti)</td><td>She must have missed the train; she is never this late.</td></tr>
<tr><td>might/may/could have + pp</td><td>Kemungkinan (tidak pasti)</td><td>He might have forgotten about the meeting.</td></tr>
<tr><td>can\'t/couldn\'t have + pp</td><td>Ketidakmungkinan</td><td>She can\'t have finished the report already.</td></tr>
<tr><td>should/ought to have + pp</td><td>Harapan yang tidak terpenuhi; kritik lembut</td><td>You should have submitted the form by now.</td></tr>
<tr><td>would have + pp</td><td>Hasil dari pengandaian</td><td>Without the data, we would have guessed.</td></tr>
</tbody>
</table>',
            'examples' => [
                ['en' => 'The lights are off; they must have gone home.', 'id' => 'Lampunya mati; mereka pasti sudah pulang.'],
                ['en' => 'He might have missed the earlier flight; I did not see him at the gate.', 'id' => 'Mungkin dia ketinggalan penerbangan sebelumnya; saya tidak melihatnya di gerbang.'],
                ['en' => 'She can\'t have known about the changes; nobody informed her.', 'id' => 'Dia tidak mungkin tahu tentang perubahan itu; tidak ada yang memberi tahunya.'],
            ],
        ],
        [
            'heading' => 'Derajat Keyakinan pada Pernyataan Sekarang',
            'body' => '<p>Tanpa <em>have</em>, modal menyatakan keyakinan tentang <strong>keadaan sekarang</strong>. Gunakan tabel berikut sebagai panduan:</p>
<ul>
<li><strong>must be</strong> — kesimpulan kuat: <em>She must be the new coordinator.</em></li>
<li><strong>can\'t be</strong> — ketidakmungkinan: <em>The results can\'t be correct.</em></li>
<li><strong>might/may/could be</strong> — kemungkinan: <em>The merger could be completed by June.</em></li>
<li><strong>be bound to / be certain to</strong> — kepastian hampir mutlak: <em>There are bound to be delays.</em></li>
<li><strong>be likely / unlikely to</strong> — probabilitas: <em>The motion is unlikely to pass.</em></li>
</ul>',
            'examples' => [
                ['en' => 'She must be the new coordinator; nobody else has that badge.', 'id' => 'Dia pasti koordinator baru; tidak ada orang lain yang punya tanda itu.'],
                ['en' => 'The results can\'t be correct; the figures contradict each other.', 'id' => 'Hasil itu tidak mungkin benar; angkanya saling bertentangan.'],
                ['en' => 'The merger is unlikely to be completed before June.', 'id' => 'Penggabungan itu tidak mungkin selesai sebelum Juni.'],
            ],
        ],
        [
            'heading' => 'Hedging dalam Bahasa Akademik',
            'body' => '<p><em>Hedging</em> adalah teknik melembutkan klaim agar tidak terlalu mutlak — keterampilan wajib dalam penulisan akademik. Empat alat utamanya:</p>
<table>
<thead><tr><th>Alat</th><th>Contoh</th></tr></thead>
<tbody>
<tr><td>Modal verbs</td><td>may, might, could, would</td></tr>
<tr><td>Adverbia</td><td>arguably, presumably, apparently, seemingly, potentially</td></tr>
<tr><td>Kata kerja</td><td>suggest, indicate, imply, tend to, appear to</td></tr>
<tr><td>Konstruksi impersonal</td><td>it could be argued that, it seems that, one might conclude</td></tr>
</tbody>
</table>
<p>Kata seperti <em>to some extent, somewhat, relatively</em> berfungsi sebagai <em>minimisers</em> yang memperhalus pernyataan lebih lanjut.</p>',
            'examples' => [
                ['en' => 'The findings may suggest a link between sleep and concentration.', 'id' => 'Temuan itu mungkin menunjukkan adanya kaitan antara tidur dan konsentrasi.'],
                ['en' => 'It could be argued that the policy has produced mixed results.', 'id' => 'Bisa dikatakan bahwa kebijakan itu menghasilkan hasil yang beragam.'],
                ['en' => 'The data appears to indicate a gradual decline.', 'id' => 'Data itu tampaknya menunjukkan penurunan secara bertahap.'],
                ['en' => 'Presumably, the delay was caused by logistical problems.', 'id' => 'Kemungkinan besar keterlambatan itu disebabkan oleh masalah logistik.'],
            ],
        ],
        [
            'heading' => 'Kekuatan Klaim: Tegas vs Berhati-hati',
            'body' => '<p>Pemilihan kekuatan klaim menentukan kredibilitas penulis. Klaim berlebihan tanpa bukti cukup justru melemahkan argumen:</p>
<table>
<thead><tr><th>Klaim terlalu kuat</th><th>Klaim berhati-hati</th></tr></thead>
<tbody>
<tr><td>The experiment proves the theory.</td><td>The experiment lends support to the theory.</td></tr>
<tr><td>Obviously, the results are wrong.</td><td>The results may warrant further scrutiny.</td></tr>
<tr><td>Everyone knows this is true.</td><td>It is widely accepted that this is true.</td></tr>
<tr><td>This is the only explanation.</td><td>This is one plausible explanation.</td></tr>
</tbody>
</table>
<p>Perhatikan juga register: <em>apparently</em> (menurut informasi yang beredar) berbeda dari <em>certainly/undoubtedly</em> (keyakinan penuh).</p>',
            'examples' => [
                ['en' => 'The experiment lends support to the theory.', 'id' => 'Eksperimen itu memberi dukungan pada teori tersebut.'],
                ['en' => 'The results may warrant further scrutiny.', 'id' => 'Hasil itu mungkin perlu ditelaah lebih lanjut.'],
                ['en' => 'It is widely accepted that early intervention improves outcomes.', 'id' => 'Umum diterima bahwa intervensi dini meningkatkan hasil.'],
            ],
        ],
    ],
    'vocabulary' => [
        ['word' => 'arguably', 'phonetic' => '/ˈɑːɡjuəbli/', 'meaning' => 'bisa dikatakan; dapat diperdebatkan', 'example' => 'This is arguably the best approach.'],
        ['word' => 'presumably', 'phonetic' => '/prɪˈzjuːməbli/', 'meaning' => 'kemungkinan besar; dapat disangka', 'example' => 'Presumably, the samples were stored incorrectly.'],
        ['word' => 'apparently', 'phonetic' => '/əˈpærəntli/', 'meaning' => 'tampaknya; menurut informasi yang beredar', 'example' => 'Apparently, the decision was made without consultation.'],
        ['word' => 'hedging', 'phonetic' => '/ˈhedʒɪŋ/', 'meaning' => 'bahasa hati-hati; melembutkan klaim', 'example' => 'Academic writing relies heavily on hedging.'],
        ['word' => 'tentative', 'phonetic' => '/ˈtentətɪv/', 'meaning' => 'sementara; ragu-ragu', 'example' => 'We have reached a tentative agreement.'],
        ['word' => 'imply', 'phonetic' => '/ɪmˈplaɪ/', 'meaning' => 'menyiratkan', 'example' => 'The wording implies doubt about the findings.'],
        ['word' => 'indicate', 'phonetic' => '/ˈɪndɪkeɪt/', 'meaning' => 'mengindikasikan; menunjukkan', 'example' => 'The figures indicate a slight improvement.'],
        ['word' => 'plausible', 'phonetic' => '/ˈplɔːzəbl/', 'meaning' => 'masuk akal; dapat dipercaya', 'example' => 'That is a plausible explanation.'],
        ['word' => 'conceivable', 'phonetic' => '/kənˈsiːvəbl/', 'meaning' => 'dapat dibayangkan; bisa jadi', 'example' => 'Every conceivable measure was taken.'],
        ['word' => 'allegedly', 'phonetic' => '/əˈledʒɪdli/', 'meaning' => 'konon; diduga (belum terbukti)', 'example' => 'The data was allegedly copied without permission.'],
        ['word' => 'to some extent', 'phonetic' => '/tə səm ɪˈstent/', 'meaning' => 'sampai tingkat tertentu', 'example' => 'To some extent, the criticism is justified.'],
        ['word' => 'it could be argued that', 'phonetic' => '/ɪt kʊd bi ˈɑːɡjuːd ðæt/', 'meaning' => 'bisa dikatakan bahwa (klaim hati-hati)', 'example' => 'It could be argued that the benefits outweigh the risks.'],
    ],
    'questions' => [
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'He ___ the email before the meeting; he quoted its contents in detail.',
            'options' => ['must have read', 'should read', 'can read', 'would read'],
            'answer' => 0,
            'explanation' => 'Bukti bahwa ia mengutip isi email dengan detail menunjukkan kesimpulan kuat tentang masa lalu → <em>must have read</em>.',
            'is_placement' => true,
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'She ___ have missed the flight; I saw her at the boarding gate.',
            'options' => ['must', 'might', 'can\'t', 'should'],
            'answer' => 2,
            'explanation' => 'Melihatnya di gerbang berarti ia <strong>tidak mungkin</strong> ketinggalan pesawat → <em>can\'t have missed</em>. <em>Must have missed</em> justru berarti sebaliknya.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Which phrase is the most cautious academic claim?',
            'options' => [
                'This research proves that social media causes anxiety.',
                'This research undoubtedly shows that social media causes anxiety.',
                'This research may indicate a link between social media and anxiety.',
                'Everyone knows that social media causes anxiety.',
            ],
            'answer' => 2,
            'explanation' => '<em>May indicate a link</em> menyajikan temuan sebagai kemungkinan interpretasi, bukan bukti mutlak — bentuk klaim akademik yang paling hati-hati.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'vocabulary',
            'prompt' => 'Frasa <em>&ldquo;It could be argued that ...&rdquo;</em> digunakan untuk:',
            'options' => [
                'memperkenalkan sebuah argumen dengan hati-hati dan tidak mutlak',
                'menolak pendapat lawan bicara secara langsung',
                'menyatakan fakta yang tidak dapat dibantah',
                'memerintahkan pembaca menerima kesimpulan',
            ],
            'answer' => 0,
            'explanation' => 'Konstruksi impersonal <em>it could be argued that</em> melembutkan klaim dan menyiratkan bahwa sudut pandang lain masih mungkin ada.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'The parcel is not in the lobby; it might ___ (be) sent to the wrong address.',
            'answer' => 'have been',
            'accepted' => ['have been'],
            'explanation' => 'Kemungkinan tentang masa lalu dengan pasif: <em>might + have + been + past participle</em> → <em>might have been sent</em>.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'grammar',
            'prompt' => 'It ___ (argue) that the reforms have done more harm than good.',
            'answer' => 'could be argued',
            'accepted' => ['could be argued'],
            'explanation' => 'Konstruksi impersonal hedging: <em>It could be argued that ...</em> = \'bisa dikatakan bahwa ...\'.',
        ],
        [
            'type' => 'fill_blank',
            'skill' => 'vocabulary',
            'prompt' => 'The new variant is ___ to spread more rapidly in enclosed spaces. (kemungkinan besar)',
            'answer' => 'likely',
            'accepted' => ['likely'],
            'explanation' => 'Kolokasi probabilitas: <em>be likely to + verb</em> berarti \'kemungkinan besar akan\'.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'grammar',
            'prompt' => '<em>&ldquo;Must have + past participle&rdquo;</em> untuk masa lalu menyatakan kesimpulan kuat berdasarkan bukti, bukan perintah.',
            'answer' => true,
            'explanation' => 'Untuk masa lalu, <em>must have + pp</em> adalah spekulasi kuat (\'pasti sudah ...\'), bukan kewajiban. Perintah hanya muncul pada <em>must + infinitive</em> tanpa <em>have</em>.',
        ],
        [
            'type' => 'true_false',
            'skill' => 'vocabulary',
            'prompt' => 'Dalam kalimat <em>&ldquo;Apparently, the meeting has been cancelled,&rdquo;</em> penulis menyatakan keyakinan penuh bahwa rapat itu dibatalkan.',
            'answer' => false,
            'explanation' => '<em>Apparently</em> berarti \'tampaknya / menurut informasi yang beredar\' — penulis tidak yakin penuh. Keyakinan penuh akan diungkapkan dengan <em>certainly</em> atau <em>The meeting has definitely been cancelled</em>.',
        ],
        [
            'type' => 'matching',
            'skill' => 'vocabulary',
            'prompt' => 'Cocokkan ungkapan hedging dengan kekuatan klaimnya.',
            'pairs' => [
                ['left' => 'There is no doubt that ...', 'right' => 'klaim kuat / keyakinan penuh'],
                ['left' => 'The evidence suggests that ...', 'right' => 'kesimpulan moderat berbasis bukti'],
                ['left' => 'It is possible that ...', 'right' => 'kemungkinan lemah'],
                ['left' => 'It could be argued that ...', 'right' => 'argumen hati-hati yang mengakui sudut pandang lain'],
                ['left' => 'Presumably, ...', 'right' => 'asumsi berdasarkan dugaan yang masuk akal'],
            ],
            'explanation' => 'Semakin lembut ungkapannya, semakin kecil klaim penulis: <em>it is possible</em> < <em>the evidence suggests</em> < <em>there is no doubt</em>. <em>Presumably</em> menandai asumsi, bukan fakta.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'listening',
            'audio_text' => 'She can\'t have forgotten about the interview; she reminded me about it this morning.',
            'prompt' => 'Dengarkan kalimat berikut, lalu pilih interpretasi yang paling tepat tentang keyakinan pembicara.',
            'options' => [
                'Pembicara yakin penuh bahwa dia lupa wawancara.',
                'Pembicara yakin bahwa dia tidak mungkin lupa wawancara.',
                'Pembicara berpikir bahwa dia mungkin lupa wawancara.',
                'Pembicara tidak tahu bahwa ada wawancara.',
            ],
            'answer' => 1,
            'explanation' => '<em>Can\'t have forgotten</em> menyatakan ketidakmungkinan; buktinya, dia sendiri yang mengingatkan pagi hari. Jadi pembicara yakin dia tidak mungkin lupa.',
        ],
        [
            'type' => 'mcq',
            'skill' => 'reading',
            'prompt' => '<div class="passage"><p>The study\'s findings may suggest a modest improvement in memory among older participants. However, the sample was relatively small, and the results were obtained over a comparatively short period. It could be argued that the observed effects are temporary. Presumably, a longer trial with a larger cohort would yield more reliable data.</p></div><p>Bagaimana penulis menyajikan temuannya?</p>',
            'options' => [
                'Sebagai fakta yang terbukti tanpa keraguan.',
                'Sebagai temuan sementara yang membutuhkan penelitian lanjutan.',
                'Sebagai kegagalan total metode penelitian.',
                'Sebagai alasan untuk menghentikan penelitian.',
            ],
            'answer' => 1,
            'explanation' => 'Penggunaan <em>may suggest</em>, <em>relatively small</em>, <em>it could be argued</em>, dan <em>presumably</em> menunjukkan penyajian yang hati-hati dan sementara, bukan klaim final.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Sampaikan pendapatmu tentang kerja dari rumah dengan bahasa akademik yang hati-hati.',
            'target' => 'It could be argued that remote work improves productivity, although the evidence is not yet conclusive.',
            'hint' => 'Arti: Bisa dikatakan bahwa kerja dari rumah meningkatkan produktivitas, meski buktinya belum meyakinkan.',
            'explanation' => 'Gabungan <em>it could be argued that</em> (klaim hati-hati) dengan <em>although</em> (pengakuan keterbatasan bukti) adalah pola khas tulisan akademik C1-C2.',
        ],
        [
            'type' => 'speaking',
            'skill' => 'speaking',
            'prompt' => 'Buat kesimpulan kuat tentang keterlambatan seseorang berdasarkan bukti.',
            'target' => 'He must have missed the bus; he is usually here by eight.',
            'hint' => 'Arti: Pasti dia ketinggalan bus; biasanya dia sudah di sini pukul delapan.',
            'explanation' => '<em>Must have + past participle</em> dipakai saat bukti mendukung kesimpulan yang kuat tentang masa lalu.',
        ],
    ],
];
