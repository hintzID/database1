<?php

require 'functions.php';

if (isset($_POST["submit"])){

   if (tambah($_POST) > 0){

    echo "

    <script>
      alert('data berhasil ditambahkan!');
      document.location.href = 'index.php';
    </script>
    
    ";

   } else {

    echo "
    
    <script>
      alert('data gagal ditambahkan!');
      document.location.href = 'index.php';
    </script>
  
  ";

   }

  
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Santri</title>
    </head>
    <body>
        <h1>Tambah Data Santri</h1>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama">
                </li>
                <br>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat">
                </li>
                <br>
                <li>
                    <label for="nomer_handphone">Nomer Handphone</label>
                    <input type="text" name="nomer_handphone" id="nomer_handphone">
                </li>
                <br>
                <li>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="text" name="tanggal_lahir" id="tanggal_lahir">
                </li>
                <br>
                <li>
                    <label for="alasan_masuk_pondok">Alasan Masuk Pondok</label>
                    <input type="text" name="alasan_masuk_pondok" id="alasan_masuk_pondok">
                </li>
                <br>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
               
            </ul>

        </form>

    </body>
</html>