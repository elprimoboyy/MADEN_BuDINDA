<html>
<head>
    <title>tabel pegawai</title>
    <link rel="stylesheet" href="tabel.css">
</head>
<body>
    <div class="menu">
        <a href="barang.php">Barang</a>
        <a href="pegawai.php">Pegawai</a>
    </div>

    <h2>TABEL PEGAWAI</h2>
    <table>
        <tr>
            <td>Id Pegawai</td>
            <td>Nama Pegawai</td>
            <td>Jabatan</td>
            <td>No HP</td>
        </tr>
        <?php
        include "koneksi.php";
        $data = mysqli_query($koneksi, "SELECT * FROM pegawai");
        while ($tampil = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $tampil['id_pegawai']; ?></td>
            <td><?php echo $tampil['nama_pegawai']; ?></td>
            <td><?php echo $tampil['jabatan']; ?></td>
            <td><?php echo $tampil['no_hp']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>