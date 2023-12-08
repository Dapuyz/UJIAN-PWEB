<h3> Data Dokter Klinik </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>ID Dokter</th>
        <th>Nama Dokter</th>
        <th>Spesialis</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from klinik");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_dokter]</td>
            <td>$tampil[nama_dokter]</td>
            <td>$tampil[spesialis]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[no_telp]</td>
            <td><a href='?kode=$tampil[id_dokter]'> Hapus </a></td>
            <td><a href='dokter_ubah.php?kode=$tampil[id_dokter]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from klinik where id_dokter='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='dokter.php'>";

    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter Klinik</title>
</head>
    <style>
        body{
            font-family: 'Courier', sans-serif;
            background-image: url(obat.jpg);
            background-size: cover;
        }
        h3 {
            color: #333;
            text-align: center;
            margin-top: 100px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            padding: 8px 16px;
            display: inline-block;
            margin: 4px;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</html>