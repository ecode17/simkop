<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'SIMKOP - Sistem Informasi Manajemen Koperasi Simpan Pinjam' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/coba.css') ?>">
    <?= $this->renderSection('css') ?>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container col-md-10">
            <a class="navbar-brand" href="/">
                <img src="<?= base_url('assets/img/slip.png') ?>" alt="" width="70px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($activeMenu) && $activeMenu == 'home') ? 'active' : '' ?>"
                            aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (isset($activeMenu) && $activeMenu == 'paket') ? 'active' : '' ?>"
                            aria-current="page" href="/paket">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a href="/demo" class="btn btn-outline-success ms-2">Demo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main style="min-height:80vh;">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="container col-md-10 py-4">
        <div class="teks-footer mb-4">
            <p>
                Koperasi simpan pinjam, meskipun memberikan banyak manfaat bagi anggotanya, juga memiliki beberapa
                risiko yang perlu diperhatikan. Salah satu risiko utama adalah risiko kredit, yaitu potensi gagal bayar
                oleh anggota yang meminjam dana. Karena koperasi umumnya memiliki basis anggota yang lebih kecil
                dibandingkan lembaga keuangan besar, jika ada banyak anggota yang gagal membayar pinjaman, koperasi
                dapat mengalami kesulitan keuangan yang signifikan. Hal ini bisa berdampak pada kemampuan koperasi untuk
                memberikan pinjaman baru atau bahkan memenuhi kewajiban terhadap anggota yang menyimpan dana.
            </p>
            <p>
                Selain itu, koperasi juga menghadapi risiko likuiditas, di mana koperasi mungkin tidak memiliki cukup
                dana tunai untuk memenuhi permintaan penarikan simpanan dari anggotanya. Risiko ini dapat terjadi jika
                terlalu banyak anggota yang menarik simpanan mereka secara bersamaan, atau jika koperasi telah
                menyalurkan sebagian besar dananya dalam bentuk pinjaman jangka panjang. Ketidakmampuan untuk memenuhi
                kewajiban likuiditas dapat menyebabkan hilangnya kepercayaan anggota dan berpotensi memperburuk kondisi
                keuangan koperasi.
            </p>
            <p>
                Terakhir, risiko tata kelola juga menjadi ancaman bagi koperasi simpan pinjam. Koperasi sering kali
                dikelola oleh pengurus yang dipilih dari kalangan anggota, yang mungkin tidak selalu memiliki pengalaman
                atau pengetahuan yang memadai dalam manajemen keuangan atau operasional. Pengelolaan yang tidak efektif
                atau kurangnya transparansi dalam pengambilan keputusan dapat menyebabkan kesalahan dalam pengelolaan
                dana, yang pada akhirnya merugikan seluruh anggota. Oleh karena itu, tata kelola yang baik dan
                profesional sangat penting untuk meminimalkan risiko ini.
            </p>
        </div>
        <hr>
        <div class="icon-footer row">
            <div class="social-media-footer col-12 col-md-6">
                <a href="#" class="social-media bi bi-youtube" style="font-size: 20px; color: black;"></a>
                <a href="#" class="social-media bi bi-facebook" style="font-size: 20px; color: black;"></a>
                <a href="#" class="social-media bi bi-instagram" style="font-size: 20px; color: black;"></a>
                <a href="#" class="social-media bi bi-x" style="font-size: 20px; color: black;"></a>
                <a href="#" class="social-media bi bi-linkedin" style="font-size: 20px; color: black;"></a>
                <a href="#" class="social-media bi bi-youtube" style="font-size: 20px; color: black;"></a>
                <a href="#" class="social-media bi bi-facebook" style="font-size: 20px; color: black;"></a>
            </div>
            <div class="col-12 col-md-6">
                <div class="location-footer row">
                    <div class="col-12 col-md-6">
                        <p class="bi bi-geo-alt"> Find the Nearest Store</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="bi bi-envelope"> Subscribe to the Newsletter</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="tag">
            <div class="row">
                <div class="item-footer col-md-3 mb-3">
                    <h5 class="footer-title">Payment Solution</h5>
                    <ul id="payment-solution" class="list-unstyled collapse d-md-block">
                        <li>Payment Gateway</li>
                        <li>Payment API</li>
                        <li>Point of Sales</li>
                        <li>DANA Business</li>
                    </ul>
                </div>
                <div class="item-footer col-md-3 mb-3">
                    <h5 class="footer-title">Business Services</h5>
                    <ul id="business-services" class="list-unstyled collapse d-md-block">
                        <li>Business Loans</li>
                        <li>Investment Options</li>
                        <li>Member Services</li>
                        <li>Consulting</li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="footer-title">Resources</h5>
                    <ul id="resources" class="list-unstyled collapse d-md-block">
                        <li>Help Center</li>
                        <li>Community Forum</li>
                        <li>Blog</li>
                        <li>Case Studies</li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5 class="footer-title">Company</h5>
                    <ul id="company" class="list-unstyled collapse d-md-block">
                        <li>About Us</li>
                        <li>Our Team</li>
                        <li>Careers</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="link-footer">
            © 2014-2024 PT Metafora Indonesia Teknologi (IDMETAFORA © ).
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <?= $this->renderSection('js') ?>
</body>

</html>