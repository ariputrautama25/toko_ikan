<h2>Tambahkan ke Keranjang</h2>
<p><?= $ikan->nama ?> - Harga: <?= $ikan->harga ?></p>
<form action="<?= base_url('keranjang/tambah/'.$ikan->id) ?>" method="post">
  <!-- Tambahkan input form yang diperlukan -->
  <input type="submit" value="Tambahkan ke Keranjang">
</form>
