<div class="container">
    <h1 class="display-2 fw-semibold">Dashboard</h1>
   <div class="list-group col-md-4 mt-4">
        <a href="<?= base_url('/perangkat'); ?>" class="list-group-item list-group-item-action">
        Total perangkat yang terdaftar : <span class="fw-semibold"> <?= $perangkat; ?> perangkat. </span>
        </a>
        <a href="<?= base_url('/pelanggan'); ?>" class="list-group-item list-group-item-action">
        Total pelanggan yang terdaftar :<span class="fw-semibold"> <?= $pelanggan; ?> Orang. </span>
        </a>
        <a href="<?= base_url('/user-list'); ?>" class="list-group-item list-group-item-action">
        Total user yang terdaftar : <span class="fw-semibold"> <?= $userList; ?> user. </span>
        </a>
        <a href="<?= base_url('/transaksi'); ?>" class="list-group-item list-group-item-action">
        Total transaksi yang terbuat :<span class="fw-semibold"> <?= $transaksi; ?> transaksi </span>
        </a>
    </div>


</div>