<style>

<?php include 'style.css'; ?>

</style>
<?php

session_start(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Ana Sayfa
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class = "wrapper">
      <header>
        <div class="logo">
          <h1 style="letter-spacing: 2px; color: white;">BURSA KÜTÜPHANELERİ</h1> 
        </div>
        <nav>
          <ul>
            <li style="background-color: 7C606B; padding: 6px;"><a href="AnaSayfa.php">ANA_SAYFA</a></li>
            <li><a href="Kitaplar.php">KİTAPLAR</a></li>
            <li><a href="İletişim.php">İLETİŞİM</a></li>
          </ul>
        </nav>
      </header>
      <section>
        <br><br>
        <div class="box">
<?php
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
	echo "Baslık= $Baslık - Yayın Evi= $Yayın  - ISBN= $ISBN <hr>";
	echo "<br>";
	}
}else{
echo "<b>$deger</b> ile ilgili veri bulunamadı.";
echo "<br>";
}
}
?>
        </div>
      </section>
      <footer>
        <br>
        <h1 style="font-size: 15px; color: white; text-align: center;">
        <li>Telefon Numarası: 555555555555</li>
        <li>E-posta adresi: 123@hotmail.com</li></h1>
     </footer>
  </body>
</html>