<?php
session_start();
include 'b.php';
$ıd=$_SESSION["ıd"];
$ara = "SELECT * FROM odunc,kitaplar,kutuphane WHERE OUyelerID='$ıd' AND OKitaplarID=KitaplarID AND OKutuphaneID=KutuphaneID" ;
$result = mysqli_query($con, $ara);
while($row = $result->fetch_assoc()) {
	 echo "Baslık:  "   .$row["Baslık"];
	 echo "<br>";
    echo "Alma Tarihi:  "   .$row["AlmaTarihi"];
	echo "<br>";
	echo "Verme Tarihi:  " .$row["VermeTarihi"] ;
	echo "<br>";
	 echo "Kütüphane:  "   .$row["KutuphaneAd"];
  }
?>