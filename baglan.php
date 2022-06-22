<?php

try{
	$database=new PDO("mysql:host=sql107.epizy.com; dbname=epiz_32010705_yetkililer; charset=utf8", 'epiz_32010705', 'Ph8c2SCZW9Mz');
	
}
catch(Exception $e){
	echo $e->getMessage();
}
?>