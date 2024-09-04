<?php
if($_POST){
    $Nama_jabatan=$_POST['Nama_jabatan'];
    if(empty($Nama_jabatan)){
        echo "<script>alert('nama jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into jabatan (Nama_jabatan) value ('".$Nama_jabatan."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        }
    }
}
?>