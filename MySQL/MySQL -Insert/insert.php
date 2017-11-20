<html>
<?php
if($_POST)
{
	$ad=$_POST['ad'];
	$soyad=$_POST['soyad'];
	$cinsiyet=$_POST['cinsiyet'];
	$baglan=@mysql_connect("localhost","root","") or die("bağlantı hatası");
	$sec=@mysql_select_db("cmyo",$baglan) or die("veritabanı secilemedi");
	mysql_query("set names'UTF8'");
	$ekle=mysql_query("insert into tablo1(adi,soyadi,cinsiyet) values('.$ad.','.$soyad.','.$cinsiyet.')");
	if($ekle)
	{
		echo "kayıt eklendi";
	}
	else
	{
		echo "kayıt eklenmedi";
	}
	echo "<br><br><br><u>eklenen bilgiler</u><br><br><br>";
	echo "ad :".$ad."<br>";
	echo "soyad :".$soyad."<br>";
	echo "cinsiyet :".$cinsiyet."<br>";
	echo "<br><a href='insert.html'>Geri Dön</a>";
	
}


?>
</html>