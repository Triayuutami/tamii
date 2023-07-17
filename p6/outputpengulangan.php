<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body text="black" bgcolor="#F8DCB9">
<center>
	<h1> PERPUSTAKAAN "PINTAR MEMBACA"</h1>
<h3> Pendaftaran Anggota Secara Online</h3>
<h5><i>Jl. Sejahtera no.11 Bekaasi Tenggara<br></i></h5>
<hr color="red">
</center>
<pre>
	<h2>*****BUKTI PENDAFTARAN*****</h2>
<?php
$varnama=$_POST['nama'];
$tempat=$_POST['tempatlahir'];
$tgl=$_POST['tanggallahir'];
$bln=$_POST['bulanlahir'];
$thn=$_POST['tahunlahir'];
$jenis=$_POST['jk'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
echo"Tanggal Cetak :";
echo date ("D - d/M/Y <p>");
echo"Nama Lengkap :$varnama<br>";
echo"TTL          :$tempat-$tgl/$bln/$thn<br>";
if ($jenis=='l')
$jk='Laki-Laki';
else
$jk='Perempuan';
echo"Jenis Kelamin :$jk<br>";
echo"Alamat        :$alamat<br>";
echo"No. Telp      :$telp<br>";
?>
</pre><p>
<a href="strukturpengulangan.php"><<< INPUT LAGI</a>
<hr color="red">
<marquee direction="right">
<i>- - Pendaftaran Anggota Perpustakaan Secara Online- -</i>
</marquee>
</p>
</body>
</html>