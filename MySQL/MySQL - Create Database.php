<html>
<?php
$baglan=@mysql_connect("localhost","root","") or die ("baglanti hatasi");
$sql="create database bil default character set utf8";;
$sorgu=mysql_query($sql,$baglan);
if(isset($sorgu))
{
	echo "veritabanı oluşturuldu";
}
else
{
	echo "veritabanı oluşturulmadı";
}
mysql_close($baglan);
?>
</html>