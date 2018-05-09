<?php
session_start();
include "koneksi.php";
$nik=$_POST['nik'];
$nama_lengkap=$_POST['nama_lengkap'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$golongan_darah=$_POST['golongan_darah'];
$nomor_hp=$_POST['nomor_hp'];
$email=$_POST['email'];
$status=$_POST['status'];
$agama=$_POST['agama'];
$divisi=$_POST['divisi'];

$simpan=mysqli_query($koneksi, "insert into karyawan(nik,nama_lengkap,jenis_kelamin,alamat,golongan_darah,nomor_hp,email,status,agama,divisi) values('$nik','$nama_lengkap','$jenis_kelamin','$alamat','$golongan_darah','$nomor_hp','$email','$status','$agama','$divisi')");

?>