<html>
<head>
<style>
body{
  background-image: url('https://www.kisiselbilgi.com/wp-content/uploads/2020/11/Gokyuzu1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  }
 table{
	 font-size: large;
	 border: 3px solid #000;
	 margin-left:100px; 
 }
 th,td{
	border: 2px solid #000;
    /*width: 150px;*/
    height: 65px;
    text-align: center;	
 }
 h2{
	 text-align: center;
 }
 a{
	 margin-left: 545px;
	 font-size: 150%;
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
  </style>
</head>
<body>
<h2>YOLCULAR LİSTESİ</h2>
<?php
//mysql baglanti kodunu ekliyoruz
include("mysqlbaglan.php");
//sorguyu hazirliyoruz
$sql = "SELECT * FROM passenger";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
//eger cevap FALSE ise hata yazdiriyoruz.

if(!$cevap ){
echo '<br>Hata:' .
mysqli_error($baglanti);
}
//sorgudan gelen tüm kayitlari tablo içinde yazdiriyoruz.

//önce tablo başlıkları oluşturalım
echo "<html>";
//türkçe karakterleri düzgün görüntüleyebilmek için eklenmiştir.
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8'
/>";
echo "<table>";
echo "<tr>";
echo "<th colspan=7>Yolcu Tablosu</th>";
echo "</tr>";
echo "<tr>";
echo "<th>Yolcu ID</th>";
echo "<th>Yolcu Adı</th>";
echo "<th>Yolcu Soyadı</th>";
echo "<th>Yolcu Bilet No</th>";
echo "<th>Cinsiyeti</th>";
echo "<th>Yolcu Telefon No</th>";
echo "<th>Adresi</th>";
echo "</tr>";
/*veritabanından gelen cevabı satır
satır alıyoruz.*/
while($gelen=mysqli_fetch_array($cevap))
{

// veritabanından gelen değerlerle tablo satırları oluşturalım
echo "<tr><td>".$gelen['pass_id']."</td>";
echo "<td>".$gelen['pass_FName']."</td>";
echo "<td>".$gelen['pass_LName']."</td>";
echo "<td>".$gelen['ticketId']."</td>";
echo "<td>".$gelen['gender']."</td>";
echo "<td>".$gelen['pass_Phone']."</td>";
echo "<td>".$gelen['address']."</td></tr>";
}
// tablo kodunu bitirelim.
echo "</table>";
echo "<br/><b><a href='anasayfa.php'> Geri Dönmek için tıklayınız</a></b>";
echo "</html>";
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
</body>
</html>
