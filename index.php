<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Organisasi</title>
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
            >Home</a>

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
                >Indomie Bikin Sehat</a>
            </li>
            <li>
              <a class="dropdown-item" href="artikel3.php"
                >Indomie Enak Rasanya</a>
            </li>
          </ul>

          <br />
          <a href="event.php" class="btn btn-outline-success w-100 mb-2"
            >Event Gallery</a>
          <a href="klien.php" class="btn btn-outline-info w-100 mb-2"
            >Foto Klien</a>
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

          <div class="konten flex-grow-1 p-3">
            <h2 class="mb-3">Kata Pengantar</h2>
            <p>
              Puji dan syukur kami panjatkan ke hadirat Tuhan Yang Maha Esa
              karena atas rahmat dan karunia-Nya, website organisasi ini dapat
              disusun dengan baik. Website ini bertujuan untuk memberikan
              informasi seputar kegiatan, produk, dan profil organisasi kami
              secara lebih luas dan terbuka kepada masyarakat.
            </p>
            <p>
              Dengan adanya situs ini, diharapkan seluruh pengunjung dapat
              memperoleh gambaran yang lebih jelas mengenai visi, misi, serta
              berbagai aktivitas kami. Kami juga menyajikan artikel menarik dan
              dokumentasi kegiatan yang diharapkan dapat memberikan manfaat bagi
              para pembaca.
            </p>
            <p>
              Kritik dan saran yang membangun sangat kami harapkan demi
              pengembangan website ini ke depan agar menjadi lebih baik lagi.
              Akhir kata, semoga website ini dapat menjadi sarana komunikasi
              yang efektif dan informatif bagi seluruh pengunjung.
            </p>
            <p class="text-end">
              <i>Salam hangat, <br />Tim Website Organisasi</i>
            </p>

            <h3>Daftar File yang Diupload:</h3>
            <iframe
              src="login/list_file.php"
              width="100%"
              height="200"
              style="border: none"
            ></iframe>
          </div>

          <footer class="text-end px-3 pb-10">
            <i>Design by : Deni Adrian</i>
          </footer>
        </div>
      </div>
    </div>

    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
