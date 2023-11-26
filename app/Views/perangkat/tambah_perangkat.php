<div class="container container-perangkat">
        <h1 class="text-center fw-semibold pt-2">Tambah Perangkat</h1>



        <?php if (session('validation')) : ?>
                <?php foreach (session('validation')->getErrors() as $error) : ?>
                    <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                    <?= esc($error) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php endforeach ?>
        </div>
        <?php endif ?>

        <?php if (session('validation')) : ?>

            <?php if (session('validation')->hasError('gambar')) : ?>
                <div class="alert alert-danger alert-dismissible fade show my-2" role="alert">
                    <?= session('validation')->getError('gambar'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>

        <?php endif ?>



       


        <!-- enctype="multipart/form-data" wajib ditambahkan jika ingin mengurus file -->
        <form action="/perangkat/save" method="post" class="perangkat px-4" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="kode_perangkat" class="form-label">Kode Perangkat</label>
                <input type="text" class="form-control" name="kode_perangkat" value="<?= old('kode_perangkat'); ?>">
                <div class="form-text">Kode perangkat harus unik dan tidak boleh sama</div>
            </div>

            <div class="mb-3">
                <label for="nama_perangkat" class="form-label">Nama Perangkat</label>
                <input type="text" class="form-control" name="nama_perangkat" value="<?= old('nama_perangkat'); ?>">
            </div>
            
            <div class="mb-3">
            <label for="memory" class="form-label">Jumlah Memory</label>
            <select class="form-select" aria-label="Default select example" name="memory" value="<?= old('memory');?>">
                <option value="2">2 GB</option>
                <option value="4">4 GB</option>
                <option value="6">6 GB</option>
                <option value="8">8 GB</option>
                <option value="12">12 GB</option>
            </select>
            </div>

            <div class="mb-3">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" class="form-control" name="warna" value="<?= old('warna');?>">
            </div>
            
            <!-- <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" name="gambar" required value="<?= old('gambar');?>">
            </div> -->
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar (.jpg/.jpeg/.png)</label>
                <input class="form-control" type="file" id="formFile" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary me-2 my-2" name="submit">Submit</button>
            <a href="/perangkat" class="btn btn-danger">Cancel</a>


        </form>
