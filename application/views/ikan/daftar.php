<h2>Daftar Ikan</h2>
<ul>
  <?php foreach ($ikan as $ikan) : ?>
    <li>
      <a href="<?= base_url('ikan/detail/'.$ikan->id) ?>">
        <?= $ikan->nama ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>


<?php
    $this->load->view('template');
?>

<h2>Daftar Ikan</h2>
<ul>
    <?php foreach ($ikan as $item) : ?>
        <li><?= $item->nama ?> - Harga: <?= $item->harga ?></li>
    <?php endforeach; ?>
</ul>
