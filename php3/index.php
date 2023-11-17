<?php

include_once "init.php";

// lakukan query select untuk  mengambil data mahasiswa 
$query_select = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi_ke_db, $query_select);
//var_dump($mysql_fetch_array($result));
echo "<h1 style='color: #333;'> Data Mahasiswa </h1>";
echo "<a style='color: #333;' href= 'tamba.php'> Tambah Data</a> <br><br>"; 


while($mhs = mysqli_fetch_assoc($result)){
    echo "Nama : ".$mhs['nama']."<br>";
    echo "Nim : ".$mhs['nim']."<br>";
    echo "Alamat : ".$mhs['alamat']."<hr>";
    echo "<a style='color: #333;' href='ubah.php?id=".$mhs['id']."'>Edit</a> |
    ";
    echo "<a style='color: #333;' href='hapus.php?id=".$mhs['id']."'>Hapus</a> 
    <hr>";

    
}

?>
<style>
     
     *{
        font-family: 'Quicksand', sans-serif;
        


}
    body{
    color: #fff;
    background-color: #7788;
    background-image: radial-gradient(at 9% 89%, hsla(215, 90%, 73%, 1) 0px, transparent 50%);
    background-image: radial-gradient(at 72% 6%, hsla(331, 74%, 63%, 1) 0px, transparent 50%);
    background-image: radial-gradient(at 24% 19%,hsla(14, 90%, 74%, 1) 0px, transparent 50%);
    background-image: radial-gradient(at 65% 6%, hsla(6, 79%, 76%, 1) 0px, transparent 50%);
    background-image: radial-gradient(at 20% 98%, hsla(316, 72%, 64%, 1) 0px, transparent 50%);
    background-image: radial-gradient(at 44% 9%, hsla(40, 96%, 77%, 1) 0px, transparent 50%);
    background-image: radial-gradient(at 10% 9%, hsla(7, 65%, 63%, 1) 0px, transparent 50%);
min-height: 100vh;
    }
</style>

