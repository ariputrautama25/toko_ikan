<!DOCTYPE html>
<html>
<head>
    <title>Toko Ikan Hias</title>
</head>
<body>
    <h1>Selamat datang di Toko Ikan Hias</h1>
    <nav>
        <ul>
            <li><a href="<?= base_url('ikan/daftar') ?>">Daftar Ikan</a></li>
            <li><a href="<?= base_url('keranjang/tampil') ?>">Keranjang Belanja</a></li>
            <li><a href="<?= base_url('pemesanan/proses') ?>">Proses Pemesanan</a></li>
        </ul>
    </nav>

    <div>
        <!-- Isi konten dinamis di sini -->
        <?= $content ?>
    </div>
</body>
</html>
