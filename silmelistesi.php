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
  table{
	 font-size: large;
	 border: 3px solid #000;
	 margin-left:30px; 
 }
 th,td{
	border: 2px solid #000;
   /* width: 150px;*/
    height: 58px;
    text-align: center;	
 }
 #geri{
	 font-size:150%;
	 margin-left: 545px;
 }
/* ziyaret edilmemiş */
    a:link {
        color: #551A8B;
		text-decoration: none;
    }
    /* ziyaret edilmiş */
    a:visited {
        color: #551A8B;
		text-decoration: none;
    }
    /* mouse üzerinde */
    a:hover {
        color: #38495D;
		text-decoration: underline;
    }
    /* seçilmiş link */
    a:active {
        color: #38495D;
		text-decoration: underline;
    }
	.buton{
    background-color: #e67e22;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: underline;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	}
  </style>
</head>
<body>
<br />
<h2>YOLCU SİLME SAYFASI</h2>
<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");
//sorguyu hazirliyoruz
$sql = "SELECT * FROM passenger";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
//eger cevap FALSE ise hata yazdiriyoruz.
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($baglanti);
}
//sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.
//önce tablo başlıkları oluşturalım
echo "<html>";
//türkçe karakterleri düzgün görüntüleyebilmek için eklenmiştir.
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";

echo "<table border=1>";
echo "<tr>";
echo "<th>Yolcu ID</th>";
echo "<th>Yolcu Adı</th>";
echo "<th>Yolcu Soyadı</th>";
echo "<th>Yolcu Bilet No</th>";
echo "<th>Cinsiyeti</th>";
echo "<th>Yolcu Telefon No</th>";
echo "<th>Adresi</th>";
echo "</tr>";
//veritabanından gelen cevabı satır satır alıyoruz.
while($gelen=mysqli_fetch_array($cevap))
{
// veritabanından gelen değerlerle tablo satırları
//oluşturalım
echo "<tr><td>".$gelen['pass_id']."</td>";
echo "<td>".$gelen['pass_FName']."</td>";
echo "<td>".$gelen['pass_LName']."</td>";
echo "<td>".$gelen['ticketId']."</td>";
echo "<td>".$gelen['gender']."</td>";
echo "<td>".$gelen['pass_Phone']."</td>";
echo "<td>".$gelen['address']."</td>";
//sil linki oluşturalım.
echo "<th><a href=kayitsil.php?id=";
echo $gelen['pass_id'];
echo "><button class=buton>Sil</button></a></th></tr>";
}
// tablo kodunu bitirelim.
echo "</table>";
echo "<br/><b><a href='anasayfa.php' id=geri> Geri Dönmek için tıklayınız</a></b>";
echo "</html>";
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
</body>
</html>
