<?php
// continue kullanımı döngüde atlama
$x=1;
do
{
	if($x==5)
	{
		$x++;
		continue;
	}
	echo $x." ";
	$x++;
}while($x<=10);
echo "<br>";echo "<br>";
$y=1;
do
{
	if($y % 2 ==0)
	{
		$y++;
		continue;
	}
	echo $y." ";
	$y++;
}while($y<=40);
echo "<br>";echo "<br>";
//foreach kullanımı dizi değişkenlerini saydırma
$a=0;
$gunler=array("pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar");
foreach($gunler as $b)
{
	echo $a++." index değeri ".$b."<br>";
}
echo "<br>";echo "<br>";
// dizideki sayıları toplama
$sayilar=array(5,6,3,4,1);
$topla=0;
foreach($sayilar as $sayi)
{
	$topla=$sayi+$topla;
}
echo "Sayıların Toplamı: ".$topla;
echo "<br>";echo "<br>";
//kullanıcı tanımlı işlemler
//function ve return kullanımı
function dene()
{
	echo "Merhaba Dünya!";
}
dene();
echo "<br>";echo "<br>";
function kare($s)
{
	$s*=$s;
	return $s;
}
echo kare(2);
echo "<br>";echo "<br>";
function st()
{
	for($s=1;$s<10;$s++)
		echo $s." ";
}
st();
echo "<br>";echo "<br>";
// fonksiyonla istenilen aralıktaki çift sayıları toplama
function cst($sg)
{
	$s2=0;
	for($s1=0;$s1<=$sg;$s1+=2)
		$s2+=$s1;
	return $s2;
}
echo cst(30);
echo "<br>";echo "<br>";
// function ile hesap makinesi
function hesapla($islem,$d1,$d2)
{
	switch($islem)
	{
		case "+":$sonuc=$d1+$d2;break;
		case "-":$sonuc=$d1-$d2;break;
		case "*":$sonuc=$d1*$d2;break;
		case "/":$sonuc=$d1/$d2;break;
		case "%":$sonuc=$d1%$d2;break;
	}
	return $sonuc;
}
$d1=4;
$d2=6;
$yazdir=hesapla("*",$d1,$d2);
echo $yazdir;

?>