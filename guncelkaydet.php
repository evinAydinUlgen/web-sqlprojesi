<html>
<head>
<style>
body{
	background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi0ENuyyjCHV02GHAzgY-R_Ivsx5Iceb5jTA&usqp=CAU');
	background-repeat : no-repeat; 
    background-position:center;

  /*background-attachment: fixed;  
  background-size: cover;*/ 
}
h1{
	text-align: center;
	color: red;
}
#geri{
	 font-size:100%;
	 margin-left: 580px;
}
</style>
</head>

<body>
<br /><br />
<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");
//degiskenleri formdan aliyoruz
extract($_POST);
//sorguyu hazirliyoruz
$sql ="UPDATE passenger ".
"SET
pass_FName='$pass_FName',pass_LName='$pass_LName',ticketId='$ticketId',gender='$gender',pass_Phone='$pass_Phone',address='$address' ".
"WHERE pass_id=".$_GET['id'];
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query(
$baglanti,$sql);
echo "<html>";
//türkçe karakterleri düzgün görüntüleyebilmek için eklenmiştir.
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";
//eger cevap FALSE ise hata yazdiriyoruz.
if(!$cevap){
echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
echo "<h1>Kayıt Güncellendi!</h1>";
echo "<b><a href='anasayfa.php' id=geri> Geri Dönmek için tıklayınız</a></b>";
}
echo "</html>";
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
</body>
</html>
