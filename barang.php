<html>
<head>
    <title>tabel barang</title>
    <link rel="stylesheet" href="tabel.css">
</head>
<body>
    <div class="menu">
        <a href="barang.php">Barang</a>
        <a href="pegawai.php">Pegawai</a>
    </div>

    <h2>TABEL BARANG</h2>
    <table>
        <tr>
            <td>Id Barang</td>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>Stok</td>
        </tr>
        <?php
        include "koneksi.php";
        $data = mysqli_query($koneksi, "SELECT * FROM barang");
        while ($tampil = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $tampil['id_barang']; ?></td>
            <td><?php echo $tampil['nama_barang']; ?></td>
            <td><?php echo $tampil['harga']; ?></td>
            <td><?php echo $tampil['stok']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>