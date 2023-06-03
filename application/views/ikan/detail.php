<h2>Detail Ikan</h2>
<h3><?= $ikan->nama ?></h3>
<p>Harga: <?= $ikan->harga ?></p>
<a href="<?= base_url('keranjang/tambah/'.$ikan->id) ?>">Tambahkan ke Keranjang</a>
