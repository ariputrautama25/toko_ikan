<h2>Keranjang Belanja</h2>
<ul>
  <?php foreach ($keranjang as $item) : ?>
    <li><?= $item->nama ?> - Harga: <?= $item->harga ?></li>
  <?php endforeach; ?>
</ul>
<a href="<?= base_url('pemesanan/proses') ?>">Proses Pemesanan</a>
