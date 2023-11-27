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


        <h1 class="text-center fw-semibold">Update Perangkat <?= $perangkat['nama_perangkat']?></h1>
        <div class="clearfix mt-5 ">
            
            <img src="/img/perangkat/<?= $perangkat['gambar']; ?>" 
            class="col-md-6 float-md-start mb-3 ms-md-3 img-thumbnail gambar-detail"
            alt="<?= $perangkat['kode_perangkat']?>">

            <form action="/data/perangkat/change/<?= $perangkat['id']?>" method="post" enctype="multipart/form-data" class="perangkat px-4">
            <div class="mb-2 mx-5 float-md-start col-md-5">
                <label for="kode_perangkat" class="form-label">Kode Perangkat</label>
                <input type="text" class="form-control" name="kode_perangkat" value="<?= $perangkat['kode_perangkat']?>">
                <div class="form-text">Kode perangkat harus unik dan tidak boleh sama</div>
            </div>

            <div class="mb-2 mx-5 float-md-start col-md-5">
                <label for="nama_perangkat" class="form-label">Nama Perangkat</label>
                <input type="text" class="form-control" name="nama_perangkat" value="<?= $perangkat['nama_perangkat']?>">
            </div>
            
            <div class="mb-2 mx-5 float-md-start col-md-5">
            <label for="memory" class="form-label">Jumlah Memory</label>
            <select class="form-select" aria-label="Default select example" name="memory" value="<?= $perangkat['memory']?>">
                <option value="2">2 GB</option>
                <option value="4">4 GB</option>
                <option value="6">6 GB</option>
                <option value="8">8 GB</option>
                <option value="12">12 GB</option>
            </select>
            </div>

            <div class="mb-2 mx-5 float-md-start col-md-5">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" class="form-control" name="warna" value="<?= $perangkat['warna']?>">
            </div>
            
            <!-- <div class="mb-3 mx-5 float-md-start col-md-5">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" name="gambar" required value="<?= old('gambar');?>">
            </div> -->
            <div class="mb-2 mx-5 float-md-start col-md-5">
                <label for="formFile" class="form-label">Gambar (.jpg/.jpeg/.png)</label>
                <input class="form-control" type="file" id="formFile" name="gambar">
            </div>

            <div class="mb-3 mx-5 float-md-start col-md-5">
                <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
                <a href="<?= base_url('/perangkat'); ?>" class="btn btn-success ms-2">Back</a>
            </div>
            <!-- <dl class="row">
                <dt class="col-sm-5">Kode Perangkat</dt>
                <dd class="col-sm-6"><?= $perangkat['kode_perangkat']?></dd>
                
                
                <dt class="col-sm-5">Nama Perangkat</dt>
                <dd class="col-sm-6"><?= $perangkat['nama_perangkat']?></dd>

                <dt class="col-sm-5">Memory</dt>
                <dd class="col-sm-6"><?= $perangkat['memory']?> GB</dd>
                
                <dt class="col-sm-5">Warna</dt>
                <dd class="col-sm-6"><?= $perangkat['warna']?></dd>
                
            </dl>
        -->
        </div>

