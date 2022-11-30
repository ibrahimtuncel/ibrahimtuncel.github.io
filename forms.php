<?php
$isim ="Rasim";
$yas=35;
//hello world
#hello world
echo "hosgeldinis ".$isim." nasılsınıs"."<br/>";

echo "benim adım $isim, $yas yasindayim"."<br/>";

echo "$isim bey dedi ki \"Herkes saat 8 de gelsin\""."<br/>";


$isimler=array("Ahmet","Emin","Veysel","Rasim");
$notlar=array(100,90,100,85,60);

array_push($isimler,"Hakim");

echo "sınıfta ".sizeof($notlar). " ogrenci var"."<br/>";

echo "1. ". $isimler[0]."<br/>";
echo  "2. ".$isimler[1]."<br/>";
echo  "3. ".$isimler[2]."<br/>";
unset($isimler[2]);
echo  "3. ".$isimler[2]."<br/>";
echo  "4. ".$isimler[3]."<br/>";
echo  "5. ".$isimler[4]."<br/>"."<br/>";

$urunler=array("peynir"=>150,"ekmek"=>4,"deterjan"=>60);
echo "peynirin fiyati:".$urunler["peynir"]."<br/>";
echo "ekmek fiyati:".$urunler["ekmek"]."<br/>";
echo "deterjan fiyati:".$urunler["deterjan"]."<br/>";

array_push($urunler, array("yumurta"=>2));
echo "yumurta fiyati:".$urunler["yumurta"]."<br/>";

$urunler += array("sucuk"=>50);
echo "sucuk fiyati:".$urunler["sucuk"]."<br/>";

$urunler += ["elma"=>10];
echo "elma fiyati:".$urunler["elma"]."<br/>"."<br/>";



$ilkSayi=10;
$ikinciSayi=10;

if($ilkSayi>$ikinciSayi)
{
    echo "ilk sayi buyuktur"."<br/>";

}else if($ilkSayi<$ikinciSayi)
{
    echo "ikinci sayi buyuktur"."<br/>";

}else  if($ilkSayi==$ikinciSayi)
echo "$ilkSayi $ikinciSayi ile esittir"."<br/>";


for($i=0;$i<sizeof($isimler);$i++)
{
    echo $isimler[$i]."<br/>";
}

foreach($isimler as $isim)
{
    echo $isim."<br/>";
}


foreach($urunler as $urun=>$fiyat)
{
    echo "$urun urununun fiyati: $fiyat<br/>";
}


$asalMi=12540500994785211;
$asalDegil= false;

for($i=2;$i<sqrt($asalMi);$i++)
{
    if($asalMi%$i==0)
   { echo "sayi asal değil. $i ile bolunebilir";
    $asalDegil=true;
    break;
   }
}
if(!$asalDegil)
{
    echo "sayi asal";
}

?>

