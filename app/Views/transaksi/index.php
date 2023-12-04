<div class="container">
    <h1 class="mt-3">Transaksi</h1>

    <div class="row g-3">
        <div class="col">
            <a href="transaksi/create" type="button" class="btn btn-dark my-3">Tambah Transaksi</a>
        </div>
        <div class="col-md-4">
            <form action="" method="post" class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Transaksi..." name="keyword" >
                <button class="btn btn-dark" type="submit" name="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search pb-1" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    
    <?php if(session()->getFlashdata("pesan")) :  ?>
        <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
            <div>
                <?= session()->getFlashdata("pesan"); ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
   
    <?php if(session()->getFlashdata("pesan-hapus")) :  ?>
        <div class="alert alert-danger alert-dismissible fade show col-4" role="alert">
            <div>
                <?= session()->getFlashdata("pesan-hapus"); ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Perangkat</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telp</th> 
                <th scope="col">Dibuat</th>
                <th scope="col">Diubah</th> 
                <th scope="col"></th>

            </tr>
        </thead>
        <?php $i = 1; ?>
        <tbody class="table-group-divider">
            <?php foreach($pelanggan as $p) :?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                
                <td><?= $p['nama_pelanggan']; ?></td>
                <td><?= $p['no_id']; ?></td>
                <td><?= $p['alamat']; ?></td>
                <td><?= $p['no_telp']; ?></td>
                <td><?= $p['created_at']; ?></td>
                <td><?= $p['updated_at']; ?></td>
                <td>
                    <div class="btn-group tombol mx-auto" role="group" aria-label="Basic mixed styles example">
                        <a href="<?= base_url(); ?>pelanggan/update/<?= $p['no_id']; ?>" class="btn btn-success">Update</a>
                        <a href="<?= base_url(); ?>pelanggan/delete/<?= $p['id']; ?>" class="btn btn-danger " onclick="return confirm('Yakin ingin dihapus?'); ">Delete</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $pager->links('perangkat', 'perangkat_pagination'); ?>
</div>