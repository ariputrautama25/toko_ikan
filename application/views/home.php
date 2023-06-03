<!DOCTYPE html>
<html>
<head>
    <title>Toko Ikan Hias</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <header>
        <div class="container">
            <h1>Toko Ikan Hias</h1>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li><a href="<?php echo base_url('fish'); ?>">Daftar Ikan</a></li>
                    <li><a href="<?php echo base_url('cart'); ?>">Keranjang Belanja</a></li>
                    <li><a href="<?php echo base_url('order'); ?>">Proses Pemesanan</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Selamat datang di Toko Ikan Hias</h2>
            <p>Silakan jelajahi koleksi kami yang menarik dan pilih ikan hias favorit Anda.</p>
            <a href="<?php echo base_url('fish'); ?>" class="button">Mulai Belanja</a>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Toko Ikan Hias. All rights reserved.</p>
        </div>
    </footer>

    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>
</html>
