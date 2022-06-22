<html>
<head>
<style>
body{
  background-image: url('https://www.kisiselbilgi.com/wp-content/uploads/2020/11/Gokyuzu1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  }
h2{
	text-align: center;
}
input[type=text], select{
	margin: 2px;
	width: 50%;
	padding: 10px 15px;
	display: block;
	border: 1px solid black;
	border-radius: 6px;
}
input[type=submit]{
	width: 50%;
	margin-left:2px;
	margin-top: 10px;
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
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />
</head>
<body>
<div>
<h2>YOLCU KAYIT SAYFASI</h2>
<form action="kaydet.php" method="POST">
<label for="isim"><h4>Adı :</h4></label>
<input type="text" id="isim" name="pass_FName" placeholder="Yolcu adını giriniz...">

<label for="soyisim"><h4>Soyadı :</h4></label>
<input type="text" id="soyisim" name="pass_LName" placeholder="Yolcu soyadını giriniz...">

<label for="biletNo"><h4>Bilet Numarası :</h4></label>
<input type="text" id="biletNo" name="ticketId" placeholder="Yolcu bilet numarasını giriniz...">

<label for="cins"><h4>Cinsiyet :</h4></label>
<select id="cins" name="gender">
    <option value="Kadın">Kadın</option>
	<option value="Erkek">Erkek</option>
</select>

<label for="telNo"><h4>Telefon Numarası :</h4></label>
<input type="text" id="telNo" name="pass_Phone" placeholder="Yolcu telefon numarasını giriniz...">

<label for="adres"><h4>Adresi :</h4></label>
<input type="text" id="adres" name="address" placeholder="Yolcu adresini giriniz...">

<input type="submit" value="KAYDET">
</form>
</div>
</body>
</html>
