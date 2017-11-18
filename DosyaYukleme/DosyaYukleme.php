<html>
<?php
if(isset($_FILES['dosya']))
{
	$hata=$_FILES['dosya']['error'];
	if($hata!=0)
	{
		echo "yükleme hatası oluştu";
	}
	else
	{
		$boyut=$_FILES['dosya']['size'];
		if($boyut>(1024*1024*5))
		{
			echo "dosya boyutu 5mb büyük oldu";
		}
		else
		{
			$tip=$_FILES['dosya']['type'];
			$isim=$_FILES['dosya']['name'];
			$uzanti=explode('*',$isim);
			$uzanti=$uzanti[count($uzanti)-1];
		if($tip!='image/jpeg' || $uzanti!='jpg')
		}
		
	}
}
?>
</html>