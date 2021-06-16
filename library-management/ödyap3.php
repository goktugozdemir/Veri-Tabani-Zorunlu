<style>

<?php include 'style.css'; ?>

</style>
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
 session_start(); 
 include "b.php";
 $ıd=$_SESSION['sec'] ;
 $ıd2=$_POST['sec2'];
 $ıd3=$_SESSION['ıd'] ;
 $tarih = date('Y-m-d h:i:s');
$query = "INSERT INTO odunc (OKutuphaneID, OUyelerID, OKitaplarID,AlmaTarihi)
VALUES ('$ıd', '$ıd3', '$ıd2', '$tarih')";
$result = mysqli_query($con,$query);
if ($result==1) {
  echo "Başarı ile Odunç Alminmiştir.";
} else {
  echo "Bir sorun çıktı: ";
}
?>
</select> 
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