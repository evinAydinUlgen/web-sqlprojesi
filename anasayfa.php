<html>
<head>
<style>
body{
  background-image: url('https://cdn.okuldunyasi.com/wp-content/uploads/mavi-gokyuzu.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  }
h1{
	text-align: center;
	padding: 25px 0;
	letter-spacing: 2px;
	font-family: courier; 
	color: white;
    text-shadow: 2px 2px 4px #000000;
}
.btn {
  background-color: #CDDFEF;
  color: black;
  line-height:27px;
  margin: 0 auto;
  margin-top:10px;
  font-size: 15px;
  border: 2px solid #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: block;
  width: 25%;
  	transition: all .5s ease-in-out;
    cursor: pointer;
}
.btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn:hover span {
  padding-right: 35px;
}

.btn:hover span:after {
  opacity: 1;
  right: 0;
}
.btn:hover {
	color: #CDDFEF;
background-color: #61A9DC;	
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    } 

</style>
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" />
</head>

<body>
<h1> Türk Havayolları Seyahat Firması Veri Tabanı </h1>
<a href="kayitformu.php" ><button class="btn btn-primary btn-large btn-block"><span>Kayıt girme işlemi için tıklayınız</span></button></a><br />
<a href="listele.php" ><button class="btn btn-primary btn-large btn-block"><span>Kayıtları listelemek için tıklayınız</span></button></a><br />
<a href="silmelistesi.php" ><button class="btn btn-primary btn-large btn-block"><span>Kayıt silme işlemi için tıklayınız</span></button></a><br />
<a href="guncellelistesi.php" ><button class="btn btn-primary btn-large btn-block"><span>Kayıt güncelleme işlemi için tıklayınız </span></button></a><br />
<!--<a href="kayitformu.php"> Kayıt Gir </a><br />
<a href="listele.php"> Kayıtları Listele </a><br />
<a href="silmelistesi.php"> Kayıt Sil </a><br />
<a href="guncellelistesi.php"> Kayıt Güncelle </a><br />-->

</body>
</html>
