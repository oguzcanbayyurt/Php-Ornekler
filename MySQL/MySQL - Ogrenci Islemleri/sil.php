<?php
if($_POST)
{
	$silinecekogrno=$_POST['silogrno'];
	$baglan=@mysql_connect("localhost","root","") or die ("baglanti hatasi");
	$sec=mysql_select_db("okul",$baglan);
	mysql_query("SET NAMES 'utf8'");
	$sorgu=mysql_query("delete from ogrenci where ogr_no='".$silinecekogrno."'",$baglan);
	if($sorgu)
	{
		echo "Kayýt Silindi";
		echo "<br><br><a href='index.html'>Anasayfa</a>";
	}
	else
	{
		echo "Kayýt Silinemedi";
		echo "<br><br><a href='index.html'>Anasayfa</a>";
	}		
}
?>