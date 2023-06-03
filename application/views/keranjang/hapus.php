<h2>Hapus dari Keranjang</h2>
<p><?= $item->nama ?> - Harga: <?= $item->harga ?></p>
<form action="<?= base_url('keranjang/hapus/'.$item->id) ?>" method="post">
  <input type="submit" value="Hapus dari Keranjang">
</form>
