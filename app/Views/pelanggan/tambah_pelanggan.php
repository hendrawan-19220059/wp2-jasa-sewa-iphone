<div class="container container-perangkat">
        <h1 class="text-center fw-semibold pt-2">Tambah Pelanggan</h1>


        <?php if (session('validation')) : ?>
                <?php foreach (session('validation')->getErrors() as $error) : ?>
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                    <?= esc($error) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php endforeach ?>
        </div>
        <?php endif ?>

        <!-- enctype="multipart/form-data" wajib ditambahkan jika ingin mengurus file -->
        <form action="/pelanggan/save" method="post" class="perangkat px-4">
            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_pelanggan" value="<?= old('nama_pelanggan'); ?>">
            </div>

            <div class="mb-3">
                <label for="no_id" class="form-label">No. Identitas</label>
                <input type="text" class="form-control" name="no_id" value="<?= old('no_id'); ?>">
                <div class="form-text">No. Identitas harus unik dan tidak boleh sama</div>
            </div>
            
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= old('alamat'); ?>">
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">No. Telp</label>
                <input type="text" class="form-control" name="no_telp" value="<?= old('no_telp'); ?>">
            </div>


            <button type="submit" class="btn btn-primary me-2 my-2" name="submit">Submit</button>
            <a href="<?= base_url('/pelanggan'); ?>" class="btn btn-danger">Cancel</a>


        </form>
