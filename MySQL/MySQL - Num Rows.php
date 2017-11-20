<html>
<?php
$baglan=@mysql_connect("localhost","root","") or die ("baglanti hatasi");
$sec=@mysql_select_db("cmyo",$baglan);
$sorgu=mysql_query("select * from tablo1",$baglan);
if(isset($sec))
{
	echo "veritabanına bağlandı ".mysql_num_rows($sorgu)." kayıt bulunmustur";
}
mysql_close($baglan);
?>
</html>