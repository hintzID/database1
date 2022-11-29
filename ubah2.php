<?php

require 'functions.php';

$id = $_GET["id"];

$str = query("SELECT * FROM santri WHERE id = $id")[0];


if (isset($_POST["submit"])){

   if ( ubah($_POST) > 0){

    echo "

    <script>
      alert('data berhasil diubah!');
      document.location.href = 'index.php';
    </script>
    
    ";

   } else {

    echo "
    
    <script>
      alert('data gagal diubah!');
      document.location.href = 'index.php';
    </script>
  
  ";

   }

  
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ubah Data Santri</title>
    </head>
    <body>
        <h1>ubah Data Santri</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value ="<?= $str["id"];?>">
            <ul>
                <li>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?= $str["nama"];?>">
                </li>
                <br>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?= $str["alamat"];?>">
                </li>
                <br>
                <li>
                    <label for="nomer_handphone">Nomer Handphone</label>
                    <input type="text" name="nomer_handphone" id="nomer_handphone" value="<?= $str["nomer handphone"];?>">
                </li>
                <br>
                <li>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= $str["tanggal lahir"];?>">
                </li>
                <br>
                <li>
                    <label for="alasan_masuk_pondok">Alasan Masuk Pondok</label>
                    <input type="text" name="alasan_masuk_pondok" id="alasan_masuk_pondok" value="<?= $str["alasan masuk pondok"];?>">
                </li>
                <br>
                <li>
                    <button type="submit" name="submit">ubah Data</button>
                </li>
               
            </ul>

        </form>

    </body>
</html>