<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Statis Lamaran Pekerjaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>WEBSITE STATIS LAMARAN PEKERJAAN</h1>
    </header>

    <div class="container">
        <nav class="sidebar">
            <ul>
                <li onclick="showSection('beranda')">🏠Beranda</li>
                <li onclick="showSection('portofolio')">💼Portofolio</li>
                <li onclick="showSection('prestasi')">🏆Prestasi</li>
                <li onclick="showSection('sosmed')">📱Sosial Media</li>
            </ul>
        </nav>

        <main>
            <section id="beranda" class="content active">
                <div class="surat">
                    <img src="assets/img/Gambar1.png" alt="Surat Lamaran">
                </div>
                <div class="biodata">
                    <h3>Biodata Pribadi</h3>
                    <img src="assets/img/foto.jpg" alt="Foto" class="foto">
                    <p><b>Nama:</b> Muhammad Bayu Pratama</p>
                    <p><b>Umur:</b> 18 Tahun</p>
                    <p><b>Alamat:</b> Mahkota Regency</p>
                    <p><b>No Telpon:</b> +62 896-2289-4396</p>
                    <p><b>Email:</b> bayupratama@gmail.com</p>
                    <p><b>Skill:</b> Data Science</p>
                </div>
            </section>

            <section id="portofolio" class="content">
                <h2>Portofolio</h2>
                <div class="portfolio-container">
                    <div class="portfolio-item">
                        <p class="portfolio-caption">Desain UI Mobile</p>
                        <img src="assets/img/portofolio1.webp" alt="Portofolio 1">
                    </div>
                    <div class="portfolio-item">
                        <p class="portfolio-caption">Landing Page Website</p>
                        <img src="assets/img/portofolio2.jpg" alt="Portofolio 2">
                    </div>
                    <div class="portfolio-item">
                        <p class="portfolio-caption">Mockup Aplikasi</p>
                        <img src="assets/img/portofolio3.jpg" alt="Portofolio 3">
                    </div>
                    <div class="portfolio-item">
                        <p class="portfolio-caption">Desain Logo</p>
                        <img src="assets/img/portofolio4.jpg" alt="Portofolio 4">
                    </div>
                </div>
            </section>

            <section id="prestasi" class="content">
                <h2>Prestasi</h2>
                <div class="prestasi-container">
                    <div class="prestasi-item">
                        <p class="prestasi-caption">Teknisi Utama Jaringan Komputer</p>
                        <img src="assets/img/prestasi1.jpg" alt="Teknisi Jaringan Komputer">
                    </div>
                    <div class="prestasi-item">
                        <p class="prestasi-caption">Junior Network Administrator</p>
                        <img src="assets/img/prestasi2.jpg" alt="Junior Network Administrator">
                    </div>
                    <div class="prestasi-item">
                        <p class="prestasi-caption">Alibaba Cloud Certified Developer</p>
                        <img src="assets/img/prestasi3.jpg" alt="Alibaba Certified Developer">
                    </div>
                    <div class="prestasi-item">
                        <p class="prestasi-caption">Dicoding Jaringan Komputer Dasar</p>
                        <img src="assets/img/prestasi4.png" alt="Dicoding Jaringan Dasar">
                    </div>
                </div>
            </section>

            <section id="sosmed" class="content">
    <h2>Sosial Media</h2>
    <div class="sosmed-container">
        <p class="sosmed-caption">Akun Instagram Saya</p>
               <a href="https://www.instagram.com/bayupratamagh/" target="_blank">
  <img src="assets/img/ig_akun.png" alt="Instagram Akun" class="sosmed-img">
</a>

    </div>
</section>
        </main>
    </div>

    <footer>
        <p>Copyright © 2310631170032 Muhammad Bayu Pratama</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
