

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


if (isset($_POST['ad']) && isset($_POST['sifre'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$ad = validate($_POST['ad']);
	$sifre = validate($_POST['sifre']);

	if (empty($ad)) {
		echo("Lutfen Ad gırınız");
	    exit();
	}else if(empty($sifre)){
       echo("Lutfen Sıfre gırınız");
	    exit();
	}else{
		$sql = "SELECT * FROM uyeler WHERE ad='$ad' AND sıfre='$sifre'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['ad'] === $ad && $row['sıfre'] === $sifre) {
				$_SESSION["ıd"]=$row['UyelerID'];
            	header("Location:AnaSayfa.php");
		        exit();
            }else{
				echo("3");
		        exit();
			}
		}else{
			echo("Girdiginiz Sifre veya Ad Yanlistir.");
	        exit();
		}
	}
	
}else{
	echo($ad);
	echo($sifre);
	echo("2");
	exit();
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