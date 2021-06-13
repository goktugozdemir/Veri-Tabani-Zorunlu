<?php
session_start();
include 'b.php';


$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$Email = $_POST['email'];
$Telefon = $_POST['telefon'];
$sifre = $_POST['sifre'];
$kad = $_POST['kad'];

$required = array('ad', 'soyad', 'email', 'telefon', 'sifre', 'kad');
$hata = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $hata = true;
  }
}

if ($hata) {
  echo "Tüm alanlar dolu olmalıdır. <a href='kayıt.php'>Kayıt sayfasına dönmek için tıklayınız</a>";
} 

else{

$kayıt="INSERT INTO uyeler (UyelerAd, UyelerSoyad, UyelerEposta, UyelerTelefon, sıfre, ad)
VALUES ('$ad','$soyad','$Email','$Telefon','$sifre','$kad')";

if ($con->query($kayıt) === TRUE) {
  echo "Kaydınız başarı ile yapılmıştır. <a href=new1.php>Ana sayfaya dönmek için basınız</a>";
} else {
  echo "Bir sorun çıktı: ";
}
}
?>