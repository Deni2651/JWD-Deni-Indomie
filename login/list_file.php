<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 10px;
      color: #333;
    }

    h4 {
      margin-bottom: 10px;
    }

    ul {
      padding-left: 20px;
    }

    li {
      margin-bottom: 8px;
    }

    a {
      text-decoration: none;
      color: #0d6efd;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <h4>📁 Daftar File yang Telah Diupload:</h4>
  <ul>
    <?php
    $files = scandir("uploads");
    foreach ($files as $file) {
      if ($file != "." && $file != "..") {
        echo "<li><a href='uploads/$file' target='_blank'>$file</a></li>";
      }
    }
    ?>
  </ul>
</body>

</html>