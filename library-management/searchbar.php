<?php
session_start();

echo"<form action='aramasonuc.php' method='post'>
  <label for='tür'>Nerede aranacğını seçiniz:</label>
  <select name='tür' id='tür'>
    <option value='Kütüphane'>Kütüphane</option>
    <option value='Yazar'>Yazar</option>
    <option value='Kitap'>Kitap</option>
  </select>
  <br><br>
  <form action='aramasonuc.php' method='post'>
Armak istediğiniz değeri giriniz.   
<input type ='Ara' name='Ara' size='45'/>
<input type ='submit' values='Ara'>
</form>";

?>