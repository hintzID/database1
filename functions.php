<?php

$conn = mysqli_connect("localhost","root","","database1");

function query($query){
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row =mysqli_fetch_assoc($result)){

    $rows [] = $row;
   }

return $rows;

}

function tambah($data){
   global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $nomer_handphone = htmlspecialchars($data["nomer_handphone"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $alasan_masuk_pondok = htmlspecialchars($data["alasan_masuk_pondok"]);

    $query = "INSERT INTO santri
    VALUES('', '$nama', '$alamat','$nomer_handphone', '$tanggal_lahir', '$alasan_masuk_pondok')
    ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function hapus($id) {
   global $conn;
   mysqli_query($conn, "DELETE FROM santri WHERE id = $id");

   return mysqli_affected_rows($conn);
}


function ubah($data) {
   global $conn;

   $id = $data["id"];
   $nama = htmlspecialchars($data["nama"]);
   $alamat = htmlspecialchars($data["alamat"]);
   $nomer_handphone = htmlspecialchars($data["nomer_handphone"]);
   $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
   $alasan_masuk_pondok = htmlspecialchars($data["alasan_masuk_pondok"]);

   $query = "UPDATE santri SET
              `nama` = '$nama',
              `alamat` = '$alamat',
              `nomer handphone` = '$nomer_handphone',
              `tanggal lahir` = '$tanggal_lahir',
              `alasan masuk pondok` = '$alasan_masuk_pondok'
              WHERE id = $id
              ";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);


}

function cari($keyword) {
   $query ="SELECT * FROM santri
            WHERE
            `nama` LIKE '%$keyword%' OR
            `alamat` LIKE '%$keyword%' OR
            `nomer handphone` LIKE '%$keyword%' OR
            `tanggal lahir` LIKE '%$keyword%'
            
            ";
   return query($query);         
}

?>