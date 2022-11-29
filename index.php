<?php

require 'functions.php';

$santri = query("SELECT * FROM santri");

if (isset($_POST["cari"])) {

    $santri = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>
    <body>
     
    <h1>Daftar Santri</h1>

    <a href="tambah.php">tambah data santri</a>
    <br><br>

    <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
    <button type="submit" name="cari">cari!</button>
    <br><br>

    </form>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th colspan="2">Aksi</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomer Handphone</th>
            <th>Tanggal Lahir</th>
            <th>Alasan Masuk Pondok</th>
        </tr>
        
         <?php $i=1;?>
         <?php foreach($santri as $row) : ?>  
        <tr>
            <td><?= $i;?></td>
            
            <td><a href="ubah2.php?id=<?= $row["id"];?>">ubah</a></td>  
            <td> <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin?');">hapus</a></td>
            

            <td><?= $row["nama"];?></td>
            <td><?= $row["alamat"];?></td>
            <td><?= $row["nomer handphone"];?></td>
            <td><?= $row["tanggal lahir"];?></td>
            <td><?= $row["alasan masuk pondok"];?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>

    </table>

    </body>
</html>