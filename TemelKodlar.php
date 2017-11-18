<html>
<?php
echo "Merhaba Dünya";
echo "<br>";
echo "İnternet Programcılığı";
//Buraya Açıklama Yazılır.
/* Burayada Çok Satılır Açıklama */
echo "<br>";
$degisken=55;
$Degisken="Samsun";
$_degisken="'tir.";
echo $Degisken."'un Plakası : " .$degisken.$_degisken;  //Değişken ve Yazıları Yazdırma.
define("sabitdegisken",15);  //Sabit Değişken Tanımlama
echo "<br>"; 
echo sabitdegisken;
echo "<br>";
echo "3 Katı = ".sabitdegisken*3;
echo "<br>";
$a=50;
$b=8;
$carp=$a*$b;
echo $carp;
echo "<br>";
$mod=$a%$b; //Mod Alma 50'nin 8 e bölümünden Kalan.
echo $mod;
echo "<br>";
$c=185;
echo $c;
unset($c); //Değişkenin Değerini Sıfırlar.
$d1="555.455 berat";
$sayi1=(int)$d1;
var_dump($sayi1); //Değişkenin Türünü ve Değerini Yazdırır. 
$alfabe=(string)$d1;
var_dump($alfabe);
$ondalik=(float)$d1;
var_dump($ondalik);
$ders=250.43;
echo gettype($ders); //Değişkenin Türünü Yazdırır.
$ornek=5.14;
//settype($ornek,integer); //Değişkenin Türünü Değiştirir.
echo gettype($ornek);
//Çarpım Tablosu Yapımı
echo "<table cellpadding='5' cellspacing='5' border='0' style=color:white;background-color:maroon;border-collapse:collapse;>";
echo "<tr bgcolor=black><th colspan=20><center>Çarpım Tablosu</th></tr>";
for($i=1;$i<=9;$i++)
{
	echo "<tr>";
	for($o=1;$o<=9;$o++)
	{
		echo "<td>".$i*$o."<td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
</html>