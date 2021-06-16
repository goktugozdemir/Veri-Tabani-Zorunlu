
<style>

<?php include 'style.css'; ?>

</style>
<?php

session_start(); 
   if ( isset($_SESSION['ıd']) ) { 
   
     header("Location:anasayfa2.php"); 
   
     exit(); 
   
    } 
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
            <li><a href="ÜyeGirişi.php">ÜYE_GİRİŞİ</a></li>
            <li><a href="İletişim.php">İLETİŞİM</a></li>
          </ul>
        </nav>
      </header>
      <section>
        <br><br>
        <div class="box">
          <?php

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
  echo "Kaydınız başarı ile yapılmıştır.";
} else {
  echo "Bir sorun çıktı: ";
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