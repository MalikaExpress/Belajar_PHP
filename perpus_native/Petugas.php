<?php
if($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $id_petugas=$_POST['id_petugas'];
    $level=$_POST['level'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama_petugas)){
        echo "<script>alert('nama tidak boleh kosong');location.href='petugas.php';</script>";

    } elseif(empty($id_petugas)){
        echo "<script>alert('id petugas tidak boleh kosong');location.href='petugas.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='petugas.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='petugas.php';</script>";
    
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into petugas (nama_petugas, id_petugas, level, username, password) value ('".$nama_petugas."','".$id_petugas."','".$level."','".$username."','".md5($password)."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='petugas.php';</script>";
        }
    }
}
?>