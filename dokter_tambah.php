<?php

include("koneksi.php");
if(isset($_POST['proses'])){
    $id_dokter = $_POST['id_dokter'];
    $nama_dokter = $_POST['nama_dokter'];
    $spesialis = $_POST['spesialis'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $query = mysqli_query($koneksi, "INSERT INTO klinik (id_dokter, spesialis, nama_dokter, alamat, no_telp) Values ('$id_dokter', '$spesialis', '$nama_dokter', '$alamat', '$no_telp')");

echo "<script>alert('Data Dokter telah tersimpan')</script>";

}

?>

<h3> Tambah dokter </h3>

<form action="" method="POST">
<table>
    <tr>
        <td width="120"> ID dokter </td>
        <td> <input type="number" name="id_dokter"> </td>
    </tr>
    <tr>
        <td> Nama dokter </td>
        <td> <input type="text" name="nama_dokter"> </td>
    </tr>
    <tr>
        <td> Spesialis </td>
        <td> <input type="text" name="spesialis"> </td>
    </tr>
    <tr>
        <td> Alamat </td>
        <td> <input type="text" name="alamat"> </td>
    </tr>
    <tr>
        <td> Nomor Telepon </td>
        <td> <input type="number" name="no_telp"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokter</title>

    <style>
        body {
            font-family: 'Courier', sans-serif;
            background-image: url(obat.jpg);
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        h3 {
            color: #333;
            text-align: center;
            margin-top: 100px;
        }

        form {
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 10px;
        }

        table tr, table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        table tr:last-child, form input[type="submit"] {
            border-bottom: none;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #45a049;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #4CAF50;
        }
    </style>
</head>