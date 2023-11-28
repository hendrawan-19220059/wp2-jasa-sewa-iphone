<div class="container">
    <h1 class="display-2 fw-semibold">Dashboard</h1>
   <div class="list-group col-md-4 mt-4">
        <a href="<?= base_url('/perangkat'); ?>" class="list-group-item list-group-item-action">
        Perangkat :<?= $perangkat; ?> perangkat.
        </a>
        <a href="<?= base_url('/pelanggan'); ?>" class="list-group-item list-group-item-action">
        Pelanggan : <?= $pelanggan; ?> Orang.
        </a>
        <a href="<?= base_url('/user-list'); ?>" class="list-group-item list-group-item-action">
        User : <?= $userList; ?> user.
        </a>
        <a href="#" class="list-group-item list-group-item-action">Transaksi: </a>
    </div>


</div>