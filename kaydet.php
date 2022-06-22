<html>
<head>
<style>
body{
	background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi0ENuyyjCHV02GHAzgY-R_Ivsx5Iceb5jTA&usqp=CAU');
	background-repeat : no-repeat; 
    background-position:center;
}
h1{
	color: red;
	text-align: center;
}
h2{
	color: red;
	text-align: center;
}
h3{
	color:black;
	text-align: center;
}
#geri{
	 font-size:100%;
	 margin-left: 580px;
}
</style>
</head>

<body>
<h1>Veritabanına eklendi!</h1>
<?php

include("mysqlbaglan.php");
//degiskenleri formdan aliyoruz
extract($_POST);
echo "<html>";

echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";
echo "<h2>Girdiğiniz bilgiler:</h2>";
echo "<h3>Adı :$pass_FName </br>";
echo "<h3>Soyadı :$pass_LName</br>";
echo "<h3>Bilet No :$ticketId</br>";
echo "<h3>Cinsiyeti :$gender</br>";
echo "<h3>Telefon Numarası :$pass_Phone<br />";
echo "<h3>Adresi :$address</h3><br />";

//sorguyu hazirliyoruz
$sql = "INSERT INTO passenger ".
"(pass_FName,pass_LName,ticketId,gender,pass_Phone,address) ".
"VALUES ( '$pass_FName','$pass_LName', '$ticketId', '$gender', '$pass_Phone', '$address')";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query( $baglanti,$sql);
//eger cevap FALSE ise hata yazdiriyoruz.
if(!$cevap){
echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
echo "";
echo "<br/><br /><b><a href='anasayfa.php' id=geri> Geri Dönmek için tıklayınız</a></b>";
}
echo "</html>";
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
</body>
</html>