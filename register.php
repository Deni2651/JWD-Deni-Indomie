<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $file = 'users.json';

    if (file_exists($file)) {
      $data = json_decode(file_get_contents($file), true);
    } else {
      $data = [];
    }

    foreach ($data as $user) {
      if ($user['email'] === $email) {
        echo "<div class='alert alert-danger text-center'>Email sudah terdaftar!</div>";
        $showForm = true;
        break;
      }
    }

    if (!isset($showForm)) {
      $data[] = [
        'nama' => $nama,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
      ];
      file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
      echo "<div class='alert alert-success text-center'>Berhasil daftar! <a href='login.html'>Login sekarang</a></div>";
      $showForm = false;
    }
  } else {
    $showForm = true;
  }
  ?>

  <?php if ($showForm): ?>
    <div class="border p-4 rounded" style="width: 300px;">
      <h4 class="text-center mb-3">Sign Up</h4>
      <form action="register.php" method="post">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-dark w-100">Daftar</button>
      </form>
      <p class="mt-3 text-center">Sudah punya akun? <a href="login.html">Sign In</a></p>
    </div>
  <?php endif; ?>

  <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>