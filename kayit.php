<?php

require 'baglan.php';

?>

<html>
<head>
<style>
body {
  background-image: url('https://jetsplore.com/wp-content/uploads/2020/08/istanbul-havalimanindan-bir-ilk.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.myPage-text{
   text-align: center;
   /*position: absolute;
   top: 50%;
   left: 30%;
   transform: translate(-50%,-50%);*/
   color:  #56667D;
   font-size:28px; 
   text-shadow: 8px 1px 6px #FFF;   
}
*{
	box-sizing:border-box;
}
*:focus{
	outline:none;
}
.giris{
	margin:35px 500px;
	width:365px;
	/*font-family: courier;*/
}
.giris-ekrani{
	/*background-color:#F7F7F7;*/
	padding:30px 0 60px;
	border-radius:10px;
}
.baslik{
	text-align:center;
	color:  #50678E;
	 text-decoration-line: underline;
	 text-shadow: 2px 0px 3px white;
}
.giris-formu{
	text-align:center;
}
.control-group{
	margin-bottom:10px;
}
input{
	text-align:center;
	background-color:#E6EAEB;
	border-radius:3px;
	font-size:17px;
	width:270px;
	padding:11px ;
	border:6px solid transparent;
	transition:border .5s;
}
input:focus{
	border:2px solid #84AAC1;
	box-shadow:none;
}
.btn{
	border:1px solid #fff;
	background:#50678E;
	color:#fff;
	font-size:18px;
	line-height:27px;
	padding:11px 0;
	text-decoration:none;
	text-shadow:0px 1px #fff;
	border-radius:8px;
	/*transition:0.25s;*/
	display:block;
	width:220px;
	margin: 0 auto;
	margin-top:5px;
	transition: all .5s ease-in-out;
    cursor: pointer;
}
.btn:hover {
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
    }
	
</style>
</head>

<body>
<div class="myPage-text">
    <h2>Istanbul Airport Yetkili WebSitesi</h2>
</div>	
<div class="giris">
   <div class="giris-ekrani">
     <div class="baslik">
	   <h1>KAYIT PANELİ</h1>
	 </div>
	 <form action="islem.php" method="POST">
	 <div class="giris-formu">
	   <div class="control-group">
	      <input type="text" name="kullanici_adi" class="giris-alani" placeholder="Kullanıcı Adı" id="giris-isim">
		  <label class="giris-icon" for="giris-isim"></label>
	   </div>
	   <div class="control-group">
	       <input type="password" name="sifre" class="giris-alani" placeholder="Şifre" id="giris-sifre">
		   <label class="giris-icon" for="giris-sifre"></label>
	   </div>
	   <div class="control-group">
	       <input type="password" name="sifre_tekrar" class="giris-alani" placeholder="Tekrar Şifre" id="giris-sifre">
		   <label class="giris-icon" for="giris-sifre"></label>
	   </div><br />
	   <button href="kayıt.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>
	   </div>
	  </form>
	</div>
</div>
<a href="https://github.com/evinAydinUlgen"  target="_blank">
<img border="0" title="github'a gider" width="70" height="60"
 src="https://1.bp.blogspot.com/-Ez_07BOEQdg/YUpIgc95XqI/AAAAAAABevQ/dHiUyADJBQ03yWF_mwW4ZkTXrSUWumozQCLcBGAsYHQ/s998/github.webp"></a>


</body>
</html>
