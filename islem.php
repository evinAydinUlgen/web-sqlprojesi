<?php
ob_start();
session_start();

require 'baglan.php';
if(isset($_POST['kayit'])){
	$kullanici_adi=$_POST['kullanici_adi'];
	$sifre=$_POST['sifre'];
	$sifre_tekrar=$_POST['sifre_tekrar'];
	
	if(!$kullanici_adi){
		echo "<h3><tt>LÜTFEN KULLANICI ADINIZI GİRİNİZ !</tt></h3>";
	}
	elseif($sifre != $sifre_tekrar){
		echo "<h3><tt>GİRDİĞİNİZ ŞİFRELER FARKLI .LÜTFEN TEKRAR KAYIT YAPINIZ !</tt></h3>";
	}
	elseif(!$sifre || !$sifre_tekrar){
		echo "<h3><tt>LÜTFEN ŞİFRENİZİ GİRİNİZ !</tt></h3>";
	}
	else{
		$sorgu=$database->prepare('INSERT INTO authorities SET userName= ?, userPassword= ?');
		$veri_ekle=$sorgu->execute([
		   $kullanici_adi,
		   $sifre
		]);
		if($veri_ekle){
			echo "<h2><tt>KAYDINIZ BAŞARIYLA TAMAMLANMIŞTIR !</tt></h2>";
			echo "<h2><tt>TEKRAR GİRİŞ YAPINIZ !</tt></h2>";
			echo "<h2><tt>LOGİN SAYFASINA YÖNLENDİRİLİYORSUNUZ ..!</tt></h2>";
			header('Refresh:2; index.php');
	     }
	    else{
			echo "<h2><tt>BEKLENMEYEN BİR HATA OLUŞTU. LÜTFEN BİLGİLERİNİZİ KONTROL EDİNİZ !</tt></h2>";
		}
}
}

if(isset($_POST['giris'])){
	$kullanici_adi=$_POST['kullanici_adi'];
	$sifre=$_POST['sifre'];
	
	if(!$kullanici_adi){
		echo "<h3><tt>LÜTFEN KULLANICI ADINIZI GİRİNİZ !</tt></h3>";
	}
	elseif(!$sifre){
		echo "<h3><tt>LÜTFEN ŞİFRENİZİ GİRİNİZ !</tt></h3>";
	}
	else{
		$sorgu_kullanici=$database->prepare('SELECT * FROM authorities WHERE userName= ? || userPassword= ? ');
		$sorgu_kullanici->execute([
		$kullanici_adi,
		$sifre
		]);
		$saydir=$sorgu_kullanici->rowCount();
		if($saydir==1){
			$_SESSION['kullanici_adi']=$kullanici_adi;
			echo "<h3><tt>GİRİŞ BAŞARILI !</tt></h3>";
			echo "<h3><tt>ANASAYFAYA YÖNLENDİRİLİYORSUNUZ ..!</tt></h3>";
			header('Refresh:2; anasayfa.php');
		}
		else{
			echo "<h2><tt>BEKLENMEYEN BİR HATA OLUŞTU. LÜTFEN BİLGİLERİNİZİ KONTROL EDİNİZ !</tt></h2>";
		}
	}
}
?>