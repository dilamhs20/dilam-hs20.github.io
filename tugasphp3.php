<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form name="forminput" method="POST" action="">
MASUKKAN KODE : <input type="text" name="kode" value="">
JUMLAH BELI : <input type="text" name="jml_beli" value="">
<input type="submit" value="submit" name="submit" >
</form>
</body>
</html>
<?php
//Kode
$kode = $_POST['kode'];
if ($kode == 'BRG001')
{
$nm_brg = "TOPI";
$hrg = "Rp 15.000";
$jml_beli = $_POST ['jml_beli'];
$ttlbrg = $jml_beli*15000;
if ($ttlbrg >= 500000)
{
$diskon = $ttlbrg * 5/100;
$ttlbyr = $ttlbrg-$diskon;
$ket = "Selamat Anda Mendapatkan Diskon 5%";
}
elseif ($ttlbrg <= 500000)
{
$ttlbrg = $jml_beli*15000;
$ttlbyr = $ttlbrg;
$ket = "Maaf Anda Tidak Mendapatkan Diskon";
}
else
{
$ttlbrg = "-";
$diskon = "-";
$ttlbyr = "-";
$ket = "Kode Yang Anda Masukkan Salah";
}
}
elseif ($kode == 'BRG002')
{
$nm_brg = "TSHIRT";
$hrg = "Rp 96.000";
$jml_beli = $_POST ['jml_beli'];
$ttlbrg = $jml_beli*96000;
if ($ttlbrg >= 500000)
{ $diskon = $ttlbrg * 5/100;
$ttlbyr = $ttlbrg-$diskon;
$ket = "Selamat Anda Mendapatkan Diskon 5%";
} 