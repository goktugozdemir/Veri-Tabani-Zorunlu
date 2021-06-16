<style>

<?php include 'style.css'; ?>

</style>

<?php


session_start(); 

   if ( isset($_SESSION['ıd']) ) { 
   
     header("Location:kitaplar2.php"); 
   
     exit(); 
   
    } 
?>

<head>
	<title>
		Kitaplar
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
          <li style="background-color: 7C606B; padding: 6px;"><a href="Kitaplar.php">KİTAPLAR</a></li>
          <li><a href="ÜyeGirişi.php">ÜYE_GİRİŞİ</a></li>
          <li><a href="İletişim.php">İLETİŞİM</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <div class="arama" align="center">
        <?php
 
        echo"<form action='aramasonuc.php' method='post'>
          <label for='tür'>Nerede aranacağını seçiniz:</label>
            <select name='tür' id='tür'>
              <option value='Kütüphane'>Kütüphane</option>
              <option value='Yazar'>Yazar</option>
              <option value='Kitap'>Kitap</option>
            </select>
            <br><br>
            <form action='aramasonuc.php' method='post'>Aramak istediğiniz değeri giriniz. <br><br>   
              <input type ='Ara' name='Ara' size='45'/>
              <input type ='submit' values='Ara'>
            </form>";
        ?>
      </div>
    </section>
    <footer>
      <br>
      <h1 style="font-size: 15px; color: white; text-align: center;">
      <li style="display: inline-block;">Telefon Numarası: 555555555555</li>
      <br>
      <li style="display: inline-block;">E-posta adresi: 123@hotmail.com</li></h1>
    </footer>

</body>