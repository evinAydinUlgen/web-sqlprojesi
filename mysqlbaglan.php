<?php
$server = 'sql107.epizy.com';
$user = 'epiz_32010705';
$password = 'Ph8c2SCZW9Mz';
$database = 'epiz_32010705_yetkililer';
$baglanti = mysqli_connect($server,$user,$password,$database);

if (!$baglanti) {
echo "<h2><tt>MySQL sunucu ile baglanti kurulamadi! </tt></h2></br>";
echo "HATA: " . mysqli_connect_error();
exit;
}
?>