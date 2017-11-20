<html>
<head>
<title>Kayıtlar</title>
</head>
<body>
<table border="1" cellpadding="5">
<tr style="background-color: #ddd;">
<td>Öğrenci No</td>
<td>Ad Soyad</td>
<td>Bölüm</td>
</tr>
<?php
$baglan=@mysql_connect("localhost","root","") or die("Bağlantı Hatası");
$sec=mysql_select_db("okul",$baglan);
mysql_query("SET NAMES 'utf8'");
$bilgiler=mysql_query("SELECT * FROM ogrenci");
while($goster=mysql_fetch_array($bilgiler))
{
	$ogrencino=$goster['ogr_no'];
	$adsoyad=$goster['ad_soyad'];
	$bolum=$goster['bolum'];
	echo"<tr>";
	echo"<td>$ogrencino</td>";
	echo"<td>$adsoyad</td>";
	echo"<td>$bolum</td>";
	echo"</tr>";
}
?>
<a href="index.html">Geri</a>
</table>
</body>
</html>