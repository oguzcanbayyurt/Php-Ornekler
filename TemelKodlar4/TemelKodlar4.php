<html>
<?php
// action= php adı ve adresi
// method = get veya post
// input type
// text ad: <input type="text" name="ili"/>
// password: <input type="password" name="sifre"/>
// submit: <input type="submit" name="gonder"/>
// radio : cinsiyet
// <input type="radio" name="cinsiyet" value="bay"/>Bay
// <input type="radio" name="cinsiyet" value="bayan"/>Bayan
// checkbox iller:
// <input type="checkbox" name="iller" value="samsun"/> Samsun
// <input type="checkbox" name="iller" value="ordu"/> Ordu
// <input type="checkbox" name="iller" value="amasya"/> Amasya
// <input type="checkbox" name="iller" value="trabzon"/> Trabzon
// <input type="checkbox" name="iller" value="giresun"/> Giresun
// image <input type="image" src="resmin adresi ve adı"/> Giresun
// reset <input type="reset"/> Giresun
// button <input type="button" value="buton yaz"/>
// hidden <input type="hidden" name="id" value="*"/>
// email <input type="email" name="emailadresi"/>
// range <input type="range" name="puan" min="0" max="10"/>
// time saat giriniz: <input type="time" name="zaman"/>
// date tarihi giriniz: <input type="date" name="tarih"/>
// textarea mesaj: <br> <textarea rows="4" cols="20" name="mesaj"></textarea>
if($_POST)
{
if(@isset($_POST))
{
	foreach($_POST['hobiler'] as $anahtar=>$deger)
	{
		echo $deger."<br>";
	}
}
}
?>
</html>