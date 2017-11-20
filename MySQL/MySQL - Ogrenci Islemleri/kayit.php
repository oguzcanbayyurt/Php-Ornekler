<?php
if($_POST)
{
	$ogrencino=$_POST['ogr_no'];
	$adsoyad=$_POST['ad_soyad'];
	$bolum=$_POST['bolum'];
	$baglan=@mysql_connect("localhost","root","") or die ("baglanti hatasi");
	$sec=mysql_select_db("okul",$baglan);
	mysql_query("SET NAMES 'utf8'");
	$sorgu=mysql_query("insert into ogrenci(ogr_no,ad_soyad,bolum) values('".$ogrencino."','".$adsoyad."','".$bolum."')",$baglan);
	if($sorgu)
	{
		echo "Kayıt Eklendi";
	}	
	else
	{
		echo "Kayıt Sırasında Hata Oluştu";
	}
	echo "<br><br>";
	echo "Öğrenci No:".$ogrencino;
	echo "<br>";
	echo "Ad Soyad:".$adsoyad;
	echo "<br>";
	echo "Bölüm:".$bolum;
	echo "<br><br><a href='index.html'>Anasayfa</a>";
	
	
}
?>