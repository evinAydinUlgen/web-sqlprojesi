
<html>
<head>
<style>
body{
  background-image: url('https://www.kisiselbilgi.com/wp-content/uploads/2020/11/Gokyuzu1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  }
h3{
	text-align: center;
}
input[type=text], select{
	margin: 5px;
	width: 50%;
	padding: 10px 15px;
	display: block;
	border: 1px solid black;
	border-radius: 6px;
}
input[type=submit]{
	width: 50%;
	margin-left:2px;
	margin-top:-6px;
	padding: 10px;
	background-color: #FFA838;
	color: #000;
	border: 1px solid black;
	border-radius: 7px;
	cursor pointer;	
}
input[type=submit]:hover{
	background-color: #B4876E;
}
</style>
</head>
<!-- türkçe karakter desteği ayarı -->
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />
<body>
<h3>LÜTFEN GÜNCEL BİLGİLERİ GİRİNİZ!</h3>
<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");
//sorguyu hazirliyoruz
$sql = "SELECT * FROM passenger WHERE
pass_id=".$_GET['id'];
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
//eger cevap FALSE ise hata yazdiriyoruz.
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($baglanti);
}
//veritabanından gelen cevabı alıyoruz.
$gelen=mysqli_fetch_array($cevap);
?>
<form action="guncelkaydet.php?id=<?php echo
$_GET['id'] ?>"
method="POST">
<b>Adı:</b>
<input type="text" name="pass_FName" value="<?php echo $gelen['pass_FName'] ?>" /> <br />
<b>Soyadı:</b>
<input type="text" name="pass_LName" value="<?php echo $gelen['pass_LName'] ?>" /> <br />
<b>Bilet No :</b>
<input type="text" name="ticketId" value="<?php echo $gelen['ticketId'] ?>" /> <br />
<b>Cinsiyet :</b>
<select name="gender" value="<?php echo $gelen['gender'] ?>" >
    <option value="Kadın">Kadın</option>
	<option value="Erkek">Erkek</option>
</select><br />
<!--<input type="text" name="gender" value="<?php echo $gelen['gender'] ?>" /> <br />-->
<b>Telefon No :</b>
<input type="text" name="pass_Phone" value="<?php echo $gelen['pass_Phone'] ?>" /> <br />
<b>Adresi :</b>
<input type="text" name="address" value="<?php echo $gelen['address'] ?>" /> <br />

<input type="submit" value="GÜNCELLE"/>
</form>
</body>
</html>
