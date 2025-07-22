<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}

$upload_dir = 'uploads/';

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="text-center p-4 border bg-white rounded shadow" style="width: 400px;">
        <?php
        if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $filename = basename($_FILES['file']['name']);
            $destination = $upload_dir . $filename;

            if (move_uploaded_file($_FILES['file']['tmp_name'], $destination)) {
                echo "<h5 class='text-success'>File berhasil di-upload!</h5>";
                echo "<p><a href='$destination' target='_blank'>Klik di sini untuk melihat file</a></p>";
            } else {
                echo "<h5 class='text-danger'>Gagal memindahkan file.</h5>";
            }
        } else {
            echo "<h5 class='text-danger'>Gagal upload file.</h5>";
        }
        ?>
        <a href="../index.html" class="btn btn-primary mt-3">Kembali ke Beranda</a>
    </div>
</body>
</html>