<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" require><br>

        <label>NIM:</label>
        <input type="text" name="nim" require><br>

        <label>Email:</label>
        <input type="email" name="email" require><br>

        <label>Nomor:</label>
        <input type="text" name="nomor" require><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" require><br>

        <input type="submit" value="Tambah">
    </form>
</body>

</html>