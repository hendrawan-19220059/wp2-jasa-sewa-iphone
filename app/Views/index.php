<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font -->
    <!-- Oswald -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&display=swap" rel="stylesheet">

    <!-- Josefin Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&display=swap" rel="stylesheet"> 


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/style.css" />


    <title>Jasa Sewa Iphone</title>
  </head>


  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">Jasa Sewa Iphone</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#learn" class="nav-link">Why?</a>
            </li>
            <li class="nav-item">
              <a href="#catalogue" class="nav-link">Catalogue</a>
            </li>
            <li class="nav-item">
              <a href="#questions" class="nav-link">FAQ</a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('/login'); ?>" class="nav-link">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Showcase -->
    <section class="text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start background-black" >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Ingin pamer<span class="text-success fw-bold"> Iphone </span> tapi tidak punya</h1>
            <p class="lead my-4">
              Bisa kami sewakan dengan harga yang terjangkau.
            </p>
            <button class="btn btn-primary btn-lg fw-semibold" data-bs-toggle="modal" data-bs-target="#enroll">
              Sewa Sekarang!
            </button>
          </div>
          <img class="img-fluid w-50 d-none d-sm-block" src="img/Iphone12.1.jpg" alt=""/>
        </div>
      </div>
    </section>

    
    <!-- Learn Sections -->
    <section id="learn" class="pt-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md pt-5">
            <img src="img/Iphone-2.png" class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h2 class="fw-semibold">Mengapa Sewa iPhone?</h2>
            <p class="lead">
            Hampir semua tipe iPhone bisa menjadi pilihan untuk bermain game, dan iPhone 12 Pro Max merupakan iPhone terkencang dan terbaik yang pernah dimiliki oleh Apple saat ini.
            </p>
            <p>
            Dilengkapi dengan chipset terkencang Apple A14, performa dari jajaran iPhone sudah tidak diragukan lagi, semua game dapat dilibas rata kanan tanpa masalah.
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="learn" class="pt-5 text-light background-black">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md pt-5">
            <h2>Mengapa Sewa Iphone?</h2>
            <p class="lead">
            Sewa iPhone menawarkan fleksibilitas tanpa biaya awal besar dan memungkinkan pengguna untuk mencoba model terbaru. Dengan berbagai pilihan model dan spesifikasi, sewa iPhone menjadi alternatif cerdas yang mengurangi keterikatan jangka panjang dan memberikan pengalaman pengguna yang efisien dan terkini.
            </p>

            <a href="#" class="btn btn-light mt-3 d-none">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
          <div class="col-md">
            <img src="img/Iphone-3.png" class="img-fluid img-iphone" alt="" />
          </div>
        </div>
      </div>
    </section>


    <!-- Boxes -->
    <!-- <section id="catalogue" class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3">Virtual</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <a href="#" class="btn btn-primary">Sewa</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-secondary text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-person-square"></i>
                </div>
                <h3 class="card-title mb-3">Hybrid</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <a href="#" class="btn btn-dark">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-dark text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-people"></i>
                </div>
                <h3 class="card-title mb-3">In Person</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <!-- </section> -->
  <section id="catalogue" class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3 fw-semibold">Catalogue</h2>
            </div>
            <?php foreach($perangkat as $p) :?>
            <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="card my-3">

                    <img src="/img/perangkat/<?= $p['gambar']; ?>" alt="<?= $p['nama_perangkat']; ?>" class="card-image-top" alt="thumbnail">

                    <div class="card-body">
                        <h3 class="card-title"><?= $p['nama_perangkat']; ?></h3>
                        <p class="card-text"><?= $p['memory']; ?> GB, <?= $p['warna']; ?></p>
                        <a href="#" class="btn btn-dark">Sewa</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
  </section>

    <!-- Question Accordion -->
    <section id="questions" class="p-5">
      <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
              Apa saja perangkat iPhone yang dapat disewa?
              </button>
            </h2>
            <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions" >
              <div class="accordion-body">
              Kami menyediakan berbagai model iPhone terbaru, mulai dari iPhone terkini hingga versi yang lebih lama, sesuai dengan kebutuhan Anda.
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
              Berapa lama waktu sewa yang dapat dipilih?
              </button>
            </h2>
            <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
              <div class="accordion-body">
              Anda dapat memilih waktu sewa mulai dari satu hari hingga beberapa bulan. Kami menyediakan fleksibilitas waktu sewa sesuai kebutuhan Anda.
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#question-three" >
                Apa saja yang termasuk dalam biaya sewa?
              </button>
            </h2>
            <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
              <div class="accordion-body">
              Biaya sewa mencakup perangkat iPhone, charger, dan asuransi standar. Biaya pengiriman dan pengembalian juga dapat dimasukkan dalam paket, tergantung pada lokasi dan ketentuan pengiriman.
              </div>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">
              Bagaimana proses pemesanan dan pembayaran?
              </button>
            </h2>
            <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions" >
              <div class="accordion-body">
              Anda dapat memesan perangkat iPhone melalui situs web kami atau menghubungi layanan pelanggan kami. Pembayaran dapat dilakukan secara online melalui berbagai metode pembayaran yang tersedia.
              </div>
            </div>
          </div>
          <!-- Item 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-five">
              Bagaimana proses pengiriman dan pengembalian perangkat?
              </button>
            </h2>
            <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
              <div class="accordion-body">
              Proses pengiriman dan pengembalian akan diatur oleh tim logistik kami. Anda akan menerima petunjuk pengiriman bersamaan dengan konfirmasi pemesanan Anda. Pastikan untuk mengikuti petunjuk ini agar proses berjalan lancar.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact & Map -->
    <section class="p-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Lokasi :</span> Jl. Kemanggisan Utama Raya, RT.3/RW.2,
                Slipi, Kec. Palmerah,Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480
              </li>
              <li class="list-group-item">
                <span class="fw-bold">No. Telp :</span> (555) 555-5555
              </li>
              <li class="list-group-item mb-5">
                <span class="fw-bold">Email :</span> 
                19220059@bsi.ac.id
              </li>
              <li class="list-group-item mb-5"> 
              </li>
            </ul>
          </div>
          <div class="col-md">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="p-3 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; 2023 Tugas</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-3 me-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="enrollLabel">Daftar sekarang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="lead">Isi Form untuk pendaftaran</p>
            <form>
              <div class="mb-3">
                <label for="first-name" class="col-form-label"> Nama: </label>
                <input type="text" class="form-control" id="first-name" />
              </div>
              <div class="mb-3">
                <label for="last-name" class="col-form-label">No. Identitas:</label>
                <input type="text" class="form-control" id="last-name" />
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="mb-3">
                <label for="phone" class="col-form-label">No. Telp:</label>
                <input type="tel" class="form-control" id="phone" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Kirim</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <script>
      mapboxgl.accessToken =
        'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [106.79546433406193,-6.189838010050607],
        zoom: 18,
      })


    </script>
  </body>
</html>
