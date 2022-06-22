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
#geri{
	 font-size:100%;
	 margin-left: 568px;
}
</style>
</head>

</body>
<br /><br /><br />
<h1>Kayıt Silindi!</h1>";
<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");
//sorguyu hazirliyoruz
$sql = "DELETE FROM passenger WHERE pass_id=".$_GET['id'];
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
echo "<html>";
//türkçe karakterleri düzgün görüntüleyebilmek için eklenmiştir.

echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
echo "<b><a href='anasayfa.php' id=geri> Geri Dönmek için tıklayınız</a></b>";;
}
echo "</html>";
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
</body>
</html>