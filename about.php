<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <div class="container-fluid border">
      <div class="row">
        <div class="col-3 border-end p-2 sidebar-kiri">
          <div class="text-center mb-2">
            <img
              src="/images/Indomie_Logo.png"
              alt="Logo"
              class="img-fluid"
              style="width: 100px"
            />
          </div>
          <a href="index.php" class="btn btn-outline-primary w-100 mb-2"
            >Home</a
          >

          <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            Artikel
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="artikel1.php">Indomie Seleraku</a>
            </li>
            <li>
              <a class="dropdown-item" href="artikel2.php"
                >Indomie Bikin Sehat</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="artikel3.php"
                >Indomie Enak Rasanya</a
              >
            </li>
          </ul>

          <br />
          <a href="event.php" class="btn btn-outline-success w-100 mb-2"
            >Event Gallery</a
          >
          <a href="klien.php" class="btn btn-outline-info w-100 mb-2"
            >Foto Klien</a
          >
          <br />
          <p>Akun</p>
          <ul class="ps-4">
            <?php if (isset($_SESSION['user'])): ?>
              <li>Halo, <?= htmlspecialchars($_SESSION['nama']) ?></li>
              <li><a href="/login/logout.php">Logout</a></li>
            <?php else: ?>
              <li><a href="/login/login.html">Sign in</a></li>
              <li><a href="/login/register.php">Sign up</a></li>
            <?php endif; ?>
          </ul>
        </div>

        <div class="col-9 p-0 d-flex flex-column">
          <div class="text-center pt-3 pb-2 border-bottom">
            <h1 class="text-shadow">INDOMIE</h1>
          </div>

          <div class="border-bottom">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="visi.php">Visi dan Misi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produk.php">Produk kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontak.php">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.php"><u>About us</u></a>
              </li>
            </ul>
          </div>

          <div class="konten flex-grow-1 p-4">
            <h2>Tentang Kami</h2>
            <p>
              Indomie adalah merek mie instan kebanggaan Indonesia yang telah
              hadir di tengah masyarakat sejak tahun 1972. Kami berkomitmen
              untuk menyajikan cita rasa autentik Nusantara dalam setiap kemasan
              mie instan yang kami produksi.
            </p>
            <p>
              Produk-produk Indomie dibuat dari bahan-bahan berkualitas tinggi
              dan telah melewati proses standar yang ketat demi menjaga keamanan
              dan kepuasan konsumen.
            </p>
            <p>
              Kami percaya bahwa makanan bukan sekadar kebutuhan, melainkan juga
              pengalaman. Karena itu, Indomie terus menghadirkan inovasi rasa
              dan kualitas dalam setiap produk.
            </p>
            <p>
              Terima kasih telah menjadikan Indomie sebagai bagian dari
              keseharian Anda.
            </p>
          </div>

          <footer class="text-end px-3 pb-3"><i>Design by : Deni Adrian</i></footer>
        </div>
      </div>
    </div>

    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
