<?php
session_start();
include "b.php";

$deger = $_POST['Ara'];
$tür=$_POST['tür'];

$yazarlar = mysqli_query($con,"select * from yazarlar where YazarAd OR YazarSoyad like '$deger'");

	
	if($tür=="Yazar"){
if(mysqli_num_rows($yazarlar)!==0){
	while($row = $yazarlar->fetch_assoc()) {
	$YazarAd = $row['YazarAd'];
	$YazarSoyad = $row['YazarSoyad'];
	echo "Yazar Ad = $YazarAd - Yazar Soyad= $YazarSoyad  <hr>";
	echo "<br>";
	}
}else{
echo "<b>$deger</b> ile ilgili veri bulunamadı.";
echo "<br>";
}
	}

if($tür=="Kütüphane"){
$kutuphane = mysqli_query($con,"select * from kutuphane where KutuphaneAd like '$deger'");
if(mysqli_num_rows($kutuphane)!==0){
while($row = $kutuphane->fetch_assoc()) {
	$KutuphaneAd = $row['KutuphaneAd'];
	
	echo "<b>Kutuphane adı=  $KutuphaneAd</b><hr>";
	echo "<br>";
	}
}else{
echo "<b>$deger</b> ile ilgili veri bulunamadı.";
echo "<br>";
}
}

if($tür=="Kitap"){
$kitaplar = mysqli_query($con,"SELECT * FROM kitaplar WHERE Baslık LIKE '%$deger'");
if(mysqli_num_rows($kitaplar)!==0){
while($row = $kitaplar->fetch_assoc()) {
	$Baslık = $row['Baslık'];
	$Yayın = $row['Yayın'];
	$ISBN = $row['ISBN'];
	echo "Baslık= $Baslık - Yayın= $Yayın  - ISBN= $ISBN <hr>";
	echo "<br>";
	}
}else{
echo "<b>$deger</b> ile ilgili veri bulunamadı.";
echo "<br>";
}
}
?>