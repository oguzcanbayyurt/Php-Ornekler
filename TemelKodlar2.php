<html>
<head>
<meta http-equiv="refresh" content="1";URL=deneme.php">
</head>
<?php
// Ekrana Yazdırma 'echo' yada 'print' 
// if else gibi
$a=55;
$b=20;
if($a==$b || $a>$b)
{
	echo "A Değişkeni B'ye Eşit Veya Büyük";
}
else
{
	print "A Değişkeni B'den Küçük";
}
echo "<br>";
echo "<br>";
// if pozitif negatif 
$c=-55;
if($c>0)
{
	echo $c." Sayısı Pozitif";
}
else
{
	echo $c." Sayısı Negatif";
}
echo "<br>";
echo "<br>";
// ? kullanımı if e benzer
$t=20;
$w=15;
$r=($t<$w)?"Doğru":"Yanlış";
echo $r;
echo "<br>";echo "<br>";
$v=10;
$n=2;
$sonuc=$v/$n;
echo $sonuc;
echo "<br>";echo "<br>";
// switch-case kullanımı
$ay="şubat";
switch($ay)
{
	case "ocak":
	echo "1.Ay";
	break;
	
	case "şubat":
	echo "2.Ay";
	break;
}
echo "<br>";echo "<br>";
// for kullanımı
for($j=0;$j<=200;$j++)
{
	if($j%3==0)echo $j." ";
}
echo "<br>";echo "<br>";
// while kullanımı
$z=20;
while($z>=9)
{
	echo $z." ";
	$z-=2;
}
echo "<br>";echo "<br>";
// do while kullanımı
$m=0;
do{
	echo $m;
}while($m>0);
// benim kod
for($a=1;$a<=5;$a++)
{
	$rastgele=rand(11111, 999999);
	$rastgele2=rand(20,50)."px";
	$rastgele3=rand(1,6);
	$char="ABCDEFGHIJKLMNOPRSTUVWYZQX";
	$rastgele4=rand(1,10);
	$yazi=" ";
	for($o=1;$o<=$rastgele4;$o++)
	{
		$yazi=$yazi.$char[rand(0,25)];
	}
	if($rastgele3==1)$stil="overline";
	else if($rastgele3==2)$stil="underline";
	else if($rastgele3==3)$stil="line-through";
	else if($rastgele3==4)$stil="initial";
	else if($rastgele3==5)$stil="inherit";
	else if($rastgele3==6)$stil="none";
	echo "<p style=color:#$rastgele;font-size:$rastgele2;text-decoration:$stil;>$yazi</p>";
}
?>

</html>