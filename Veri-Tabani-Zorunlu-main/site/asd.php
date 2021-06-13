<?php
session_start();
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
            	header("Location:new 2.php");
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
	echo("2");
	exit();
}


?>