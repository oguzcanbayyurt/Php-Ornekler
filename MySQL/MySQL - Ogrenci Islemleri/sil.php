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
		echo "Kay�t Silindi";
		echo "<br><br><a href='index.html'>Anasayfa</a>";
	}
	else
	{
		echo "Kay�t Silinemedi";
		echo "<br><br><a href='index.html'>Anasayfa</a>";
	}		
}
?>