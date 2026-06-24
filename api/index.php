<?php
$page_title = "PSS Sleman - Super Elang Jawa";
$anthem_lyrics = [
    "Pernahkah kau merasa",
    "Melihat secercah cahaya",
    "Mimpi di depan mata",
    "Super Elja pasti kan juara",
    "",
    "Bertahun Menjalani",
    "Lelah ini tak terasa lagi",
    "Pagi berganti pagi",
    "Masih ada keinginan hati",
    "",
    "Sebuah kehormatan mengawalmu pahlawan",
    "Untuk slalu berjuang mewujudkan harapan",
    "Percaya kita kan rayakan kawan",
    "Demi satu nama kebanggaan di dada",
    "",
    "Kan ku beri segalanya",
    "Super elang jawa, jadilah juara",
    "Ku kobarkan segalanya",
    "Sampai kau bisa..aaa..",
    "Sampai kau bisa"
];

$social_media = [
    'website' => 'https://pssleman.id',
    'youtube' => 'https://www.youtube.com/@PSSSlemanOfficial',
    'instagram' => 'https://www.instagram.com/pssleman/',
    'facebook' => 'https://www.facebook.com/pssleman',
    'twitter' => 'https://twitter.com/pssleman'
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">⚡ PSS Sleman</div>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#anthem">Anthem</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#sosial">Sosial Media</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>PSS SLEMAN</h1>
            <p class="subtitle">Super Elang Jawa</p>
            <p class="motto">"Sampai Kau Bisa"</p>
            <!-- PERBAIKAN 1: Gambar Hero -->
            <img src="/images/hero-pss.jpg" alt="PSS Sleman" style="max-width: 80%; margin-top: 20px; border-radius: 12px; border: 2px solid var(--pss-yellow);">
        </div>
    </section>

    <section id="profil" class="profil">
        <h2>Profil PSS Sleman</h2>
        <div class="profil-content">
            <!-- PERBAIKAN 2: Gambar Tim -->
            <img src="/images/tim-pss.jpg" alt="Tim PSS Sleman" style="width: 100%; border-radius: 12px; border: 2px solid var(--pss-green);">
            <div class="profil-text">
                <p><strong>Perserikatan Sepakbola Sleman (PSS)</strong> didirikan pada <strong>20 Mei 1976</strong>.</p>
                <p>Tim ini dikenal dengan julukan <strong>Super Elang Jawa</strong> dan memiliki suporter <strong>Sleman Fans</strong>.</p>
                <p>Stadion kandang: <strong>Stadion Maguwoharjo</strong>, Sleman, Yogyakarta.</p>
            </div>
        </div>
    </section>

    <section id="anthem" class="anthem">
        <h2>🎵 Anthem PSS Sleman</h2>
        <h3>"Sampai Kau Bisa"</h3>
        <div class="audio-player">
            <p>▶️ Putar Lagu Anthem:</p>
            <audio controls>
                <source src="/assets/audio/sampai-kau-bisa.mp3" type="audio/mpeg">
                Browser Anda tidak mendukung pemutar audio.
            </audio>
        </div>
        <div class="lyrics">
            <?php foreach ($anthem_lyrics as $line): ?>
                <p><?php echo htmlspecialchars($line); ?></p>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="galeri" class="galeri">
        <h2>📸 Galeri PSS Sleman</h2>
        <div class="galeri-grid">
            <!-- PERBAIKAN 3: Galeri Gambar -->
            <div class="galeri-item">
                <img src="/images/logo-pss.jpg" alt="Logo PSS Sleman" style="width: 100%; height: 150px; object-fit: cover;">
                <p>Logo PSS Sleman</p>
            </div>
            <div class="galeri-item">
                <img src="/images/stadion.jpg" alt="Stadion Maguwoharjo" style="width: 100%; height: 150px; object-fit: cover;">
                <p>Stadion Maguwoharjo</p>
            </div>
            <div class="galeri-item">
                <img src="/images/suporter.jpg" alt="Sleman Fans" style="width: 100%; height: 150px; object-fit: cover;">
                <p>Sleman Fans</p>
            </div>
            <div class="galeri-item">
                <img src="/images/pemain.jpg" alt="Pemain PSS Sleman" style="width: 100%; height: 150px; object-fit: cover;">
                <p>Tim PSS Sleman</p>
            </div>
            <div class="galeri-item">
                <img src="/images/pertandingan.jpg" alt="Aksi di Lapangan" style="width: 100%; height: 150px; object-fit: cover;">
                <p>Aksi di Lapangan</p>
            </div>
            <div class="galeri-item">
                <img src="/images/perayaan.jpg" alt="Perayaan Kemenangan" style="width: 100%; height: 150px; object-fit: cover;">
                <p>Perayaan Kemenangan</p>
            </div>
        </div>
    </section>

    <section id="sosial" class="sosial">
        <h2>🌐 Ikuti PSS Sleman</h2>
        <div class="sosial-grid">
            <a href="<?php echo $social_media['website']; ?>" target="_blank" class="sosial-card">🌍 Website Resmi</a>
            <a href="<?php echo $social_media['youtube']; ?>" target="_blank" class="sosial-card youtube">▶️ YouTube</a>
            <a href="<?php echo $social_media['instagram']; ?>" target="_blank" class="sosial-card instagram">📸 Instagram</a>
            <a href="<?php echo $social_media['facebook']; ?>" target="_blank" class="sosial-card facebook">👍 Facebook</a>
            <a href="<?php echo $social_media['twitter']; ?>" target="_blank" class="sosial-card twitter">🐦 Twitter</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Web Tugas Interaktif - PSS Sleman</p>
        <p>#SuperElangJawa #PSSSleman #SampaiKauBisa</p>
    </footer>

    <script src="/assets/js/script.js"></script>
</body>
</html>