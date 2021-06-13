<?php

session_start();
include 'b.php';

echo"
<form action='kayıtol.php' method='post'>
  <div class='container'>
    <h1>Kayıt</h1>
    <p>Kayıt olmak için formu doldurunuz.</p>
    <hr>

    <b>E mail</b>
    <input type='text' placeholder='E mail giriniz.' name='email' id='email' >
	
	<b>Kullanıcı Adı</b>
    <input type='text' placeholder='Kullanıcı adınızı giriniz' name='kad' id='kad' >

	<b>Şifre</b>
    <input type='password' placeholder='Şifre Giriniz' name='sifre' id='sifre' >

   <b>Ad</b>
    <input type='text' placeholder='Ad giriniz' name='ad' id='ad' >
	
	 <b>Soyad</b>
    <input type='text' placeholder='Soyad giriniz' name='soyad' id='soyadad' >
	
	<b>Telefon</b>
    <input type='tel' placeholder='Telefon giriniz' name='telefon' id='telefon' >
    <hr>
<input type ='submit' values='Gönder'>
   
  </div>

</form>";
?>

