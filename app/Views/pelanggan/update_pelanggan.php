<div class="container justify-content-center">

        <?php if (session('validation')) : ?>
          <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
             <ul>
                <?php foreach (session('validation')->getErrors() as $error) : ?>
                  <li><?= esc($error) ?></li>
                <?php endforeach ?>
              </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif ?>


        <h1 class="text-center fw-semibold">Update Pelanggan</h1>
        <div class="clearfix mt-5 ">
            

            <form action="/pelanggan/change/<?= $pelanggan['id_pelanggan']?>" method="post" class="perangkat px-4">
            <div class="mb-2 mx-5 col-md-5">
                <label for="nama_pelanggan" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan']?>">
                <div class="form-text">Kode perangkat harus unik dan tidak boleh sama</div>
            </div>

            <div class="mb-2 mx-5 col-md-5">
                <label for="no_id" class="form-label">No. Identitas</label>
                <input type="text" class="form-control" name="no_id" value="<?= $pelanggan['no_id']?>">
            </div>
            
            <div class="mb-2 mx-5 col-md-5">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $pelanggan['alamat']?>">
            </div>
            
            <div class="mb-2 mx-5 col-md-5">
                <label for="no_telp" class="form-label">No. Telp</label>
                <input type="text" class="form-control" name="no_telp" value="<?= $pelanggan['no_telp']?>">
            </div>

            <div class="mb-2 mx-5 col-md-5">
                <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
                <a href="<?= base_url('/pelanggan'); ?>" class="btn btn-success ms-2">Back</a>
            </div>
        </div>

