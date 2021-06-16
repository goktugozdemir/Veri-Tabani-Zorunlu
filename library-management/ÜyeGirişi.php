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
    Üye Girişi
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
          <li style="background-color: 7C606B; padding: 6px;"><a href="ÜyeGirişi.php">ÜYE_GİRİŞİ</a></li>
          <li><a href="İletişim.php">İLETİŞİM</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <br><br>
      <div class="box">
        <h1 style="text-align: center; font-size: 35px;">Kütüphanemize Giriş Yapın</h1>
        <h1 style="text-align: left; font-size: 20px; padding-left: 40px;">Giriş Formu</h1>
        <form name="giriş" action="asd.php" method="POST">
          <div class="giriş">
            <input type="ad" name="ad" id="ad" placeholder="Kullanıcı Adı" required=""> <br><br>
            <input type="password" name="sifre" id="sifre" placeholder="Şifre" required=""> <br><br>
            <button>Giriş Yap</button>
          </div>
        </form>
        <p style="text-align: left; padding-left: 40px;">
          Hesabın yok mu? <a style="color: blue;" href="kayıt.php">Kayıt ol</a>
        </p>
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