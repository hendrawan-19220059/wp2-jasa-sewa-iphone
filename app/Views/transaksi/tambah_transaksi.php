<div class="container container-perangkat">
        <h1 class="text-center fw-semibold pt-2">Tambah Transaksi</h1>


        <!-- <?php if (session('validation')) : ?>
                <?php foreach (session('validation')->getErrors() as $error) : ?>
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                    <?= esc($error) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php endforeach ?>
        </div>
        <?php endif ?>
        -->


        <form action="/perangkat/save" method="post" class="perangkat px-4">
            <div class="mb-3">
                <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control" name="tanggal_transaksi" value="<?= old('tanggal_transaksi'); ?>">
            </div>

            <div class="mb-3">
                <label for="id_pelanggan" class="form-label">Pelanggan</label>
                <select class="form-select" aria-label="Default select example" name="id_pelanggan">
                <?php foreach ($pelanggan as $c) : ?>
                    <option value="<?= $c['id_pelanggan']; ?>"><?= $c['nama_pelanggan']; ?></option>
                <?php endforeach; ?>
            </select>
            </div>
            
            <div class="mb-3">
            <label for="id" class="form-label">Petugas</label>
            <select class="form-select" aria-label="Default select example" name="id">
                <?php foreach ($user as $o) : ?>
                    <option value="<?= $o['id']; ?>"><?= $o['nama']; ?></option>
                <?php endforeach; ?>
            </select>
            </div>

            <div class="mb-3">
            <label for="perangkat" class="form-label">Perangkat</label>
            <select class="form-select" aria-label="Default select example" name="id_perangkat">
                <?php foreach ($perangkat as $p) : ?>
                    <option value="<?= $p['id_perangkat']; ?>"><?= $p['nama_perangkat']; ?></option>
                <?php endforeach; ?>
            </select>
            </div>


            <button type="submit" class="btn btn-primary me-2 my-2" name="submit">Submit</button>
            <a href="/transaksi" class="btn btn-danger">Cancel</a>


        </form>
