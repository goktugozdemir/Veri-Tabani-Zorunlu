<?php

session_start();
include 'b.php';

?>

<!DOCTYPE html>
<html>
  <head>
  <title>
    Şifre Değiştir
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
          <li><a href="AnaSayfa.php">ANA_SAYFA</a></li>
          <li><a href="Kitaplar.php">KİTAPLAR</a></li>
          <li><a href="İletişim.php">İLETİŞİM</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <br><br>
      <div class="boxKayit">
        <h1 style="text-align: center; font-size: 35px;">Şifrenizi Değiştirin</h1>
        <h1 style="text-align: left; font-size: 20px; padding-left: 40px;">Şifre Formu</h1>
        <form name="giriş" action="sdeg.php" method="POST">
          <div class="giriş">
            <input type='password' placeholder='Şifre Giriniz' name='sifre' id='sifre' required=""> <br><br>
            <button>Gönder</button>
          </div>
        </form>
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