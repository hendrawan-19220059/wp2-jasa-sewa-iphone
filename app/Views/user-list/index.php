<div class="container">
    <h1 class="mt-3">User List</h1>

    <div class="row g-3">
        <div class="col">
            <!-- <a href="perangkat/create" type="button" class="btn btn-dark my-3">Tambah Perangkat</a> -->
        </div>
        <div class="col-md-4">
            <form action="" method="post" class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari User..." name="keyword" >
                <button class="btn btn-dark" type="submit" name="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search pb-1" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        <tbody class="table-group-divider">
            <?php foreach($userList as $user) :?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $user['nama']; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['email']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>