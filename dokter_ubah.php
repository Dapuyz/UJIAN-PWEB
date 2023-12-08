<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from klinik where id_dokter='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Ubah Data Dokter </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> ID dokter </td>
        <td> <input type="text" name="id_dokter" value="<?php echo $data['id_dokter']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama dokter </td>
        <td> <input type="text" name="nama_dokter" value="<?php echo $data['nama_dokter']; ?>"> </td>
    </tr>
    <tr>
        <td> Spesialis </td>
        <td> <input type="text" name="spesialis" value="<?php echo $data['spesialis']; ?>"> </td>
    </tr>
    <tr>
        <td> Alamat </td>
        <td> <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"> </td>
    </tr>
    <tr>
        <td> Nomor Telepon </td>
        <td> <input type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "update klinik set  
nama_dokter = '$_POST[nama_dokter]',
spesialis = '$_POST[spesialis]',
alamat = '$_POST[alamat]',
no_telp = '$_POST[no_telp]'
where id_dokter = '$_GET[kode]'");

echo "Data Dokter telah diubah";
echo "<meta http-equiv=refresh content=1;URL='dokter.php'>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Dokter</title>

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

        input[type="text"] {
            width: calc(100% - 22px);
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #45a049;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #4CAF50;
        }
    </style>
</head>
</html>