<div class="container justify-content-center">
        <h1 class="text-center fw-semibold">Detail Perangkat <?= $perangkat['nama_perangkat']?></h1>
        <div class="clearfix mt-5 ">
            
            <img src="<?= base_url();?>/img/perangkat/<?= $perangkat['gambar']; ?>" 
            class="col-md-6 float-md-start mb-3 ms-md-3 img-thumbnail gambar-detail"
            alt="<?= $perangkat['kode_perangkat']?>">

            <dl class="row">
                <dt class="col-sm-5">Kode Perangkat</dt>
                <dd class="col-sm-6"><?= $perangkat['kode_perangkat']?></dd>
                
                
                <dt class="col-sm-5">Nama Perangkat</dt>
                <dd class="col-sm-6"><?= $perangkat['nama_perangkat']?></dd>

                <dt class="col-sm-5">Memory</dt>
                <dd class="col-sm-6"><?= $perangkat['memory']?> GB</dd>
                
                <dt class="col-sm-5">Warna</dt>
                <dd class="col-sm-6"><?= $perangkat['warna']?></dd>

            </dl>
            
            <a href="<?= base_url('/perangkat'); ?>" class="btn btn-success ms-3">Back</a>
        </div>

