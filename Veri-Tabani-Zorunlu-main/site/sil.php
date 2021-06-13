<?php
session_start();
include 'b.php';
$ıd=$_SESSION["ıd"];
$sql = "DELETE FROM uyeler WHERE UyelerID='$ıd'";

if ($con->query($sql) === TRUE) {
  echo "Hesabınız Silinmiştir.  <a href='new1.php'>Ana sayfaya dönmek için tıklayınız</a>";
} else {
  echo "Hesabınız Silinememiştir. ";
}

?>