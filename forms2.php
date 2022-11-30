<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Formlar </title>
    </head>
    <?php
        if(empty($_POST['temaRengi'])==false)
        {
            $arkaPlanRengi=$_POST['temaRengi'];
        }
    ?>
    <body style="background-color:<?php echo $arkaPlanRengi; ?>;">
        <p style="color:red";>
            <?php
                if(empty($_POST['kullaniciAdi'])==false)
                {
                    echo $_POST['kullaniciAdi']. "  Hosgeldiniz!";
                }
                else
                {
                    echo "Kullanici adi bos olamaz!";
                }
            ?>
        </p>
        <p style="color:blue";>
            <?php
                if(empty($_POST['telNo'])==false)
                {
                    if($_POST['telNo'][0]!="5")
                    {
                        echo "Telefon numaraniz 5 ile baslamalidir.";
                    }
                    else if(strlen($_POST['telNo'])!=10)
                    {
                        echo "Telefon numaraniz 10 hane olmalidir.";
                    }
                    else
                    {
                        $tumKarakterlerSayiMi = true;
                        for($i=0; $i<strlen($_POST['telNo']);$i++)
                        {
                            if(!(is_numeric($_POST['telNo'][$i]))){
                                $tumKarakterlerSayiMi =false;
                                break;
                            }
                        }
                        if($tumKarakterlerSayiMi)
                        {
                            echo "Telefon numaraniz kaydedilmistir.";
                        }
                        else
                        {
                            echo "Telefon numaraniz sadece sayilardan olusmalidir.";
                        }
                    }
                }
                else
                {
                    echo "Telefon numarasi bos olamaz!";
                }
            ?>
       </p>

       <p style="color:green";>
            <?php
            if(empty($_POST['Sifre'])==false)
            {
                if(strlen($_POST['Sifre'])>=4)
                    echo "sifrenis kaydedilmistir.";
                else 
                    echo "sifrenis en as 4 karakter olamlidir.";
            }
            else
            {
                echo "sifrenis bos olamas";
            }
            ?>
        </p>

        <p style="color:brown";>
            <?php
            if(empty($_POST['E-posta'])==false)
            {
                if(is_bool($atKonumu=strpos($_POST['E-posta'],"@")))
                {
                    echo "e-mail @ karakteri icermelidir.";
                } 
                else 
                {
                    $attenSonrasi= substr($_POST['E-posta'],$atKonumu);
                    $noktaVarMi= str_contains($attenSonrasi,".");
                    if($noktaVarMi)
                    {
                        echo "e-mail adresinis kaydedildi."; 
                    }
                    else
                    {
                        echo "e-mail . nokta karakteri icermelidir"; 
                    }
                }     
            }
            else
            {
                echo "e-mail bos olamas";
            }
            ?>
        </p>

        <p style="color:purple";>
            <?php
            if(empty($_POST['dogunTarihi'])==false)
            {
                 echo " Dogum tarihinis kaydedilmistir.";
            }
            else
            {
                echo "Dogum tarihinis bos olamas.";
            }
            ?>
        </p>

        <p style="color:yellow";>
            <?php
            if(empty($_POST['sehir'])==false)
            {
                $cisgiKonumu=strpos($_POST['sehir'],"-");
                $cisgidenSonrasi= substr($_POST['sehir'],$cisgiKonumu+1);
                 echo " $cisgidenSonrasi 'li hemsehrim hosgeldin.";

            }
            else
            {
                echo "memleket bos olamas.";
            }
            ?>
        </p>


        <p style="color:rgb(72, 115, 121);";>
            <?php
            echo "Hobilerinis: ";
            if(empty($_POST['hobiler'])==false)
            {
                for($i=0;$i<sizeof($_POST['hobiler']);$i++)
                {
                    echo $_POST['hobiler'][$i].",";
                }
                echo "<br>";
            }
            else
            {
                echo "Hobiler bos olamas.";
            }
            ?>
        </p>
        
        <p style="color:rgb(72, 15, 25);";>
            <?php
            echo "Spor salonumusu saat: ";
            if(empty($_POST['saatler'])==false)
            {
                switch($_POST['saatler'])
                {
                    case "11-15";
                    echo "11-15";
                    break;
                
                    case "15-19";
                    echo "15-19";
                    break;
                
                    case "19-23";
                    echo "19-23";
                    break;

                    default:
                    echo "Bir hata olustu";
                }
                echo " arasi kullanabilirsinis.";
            }
            else
            {
                echo "Hobiler bos olamas.";
            }
            ?>
        </p>

        <p style="color:pink; font-style:italic;"; >
            <?php
            if(empty($_POST['Yorumlar'])==false)
            {
                 echo "Yorumlarinis: '".$_POST['Yorumlar']. "' olarak kaydedilmistir.";
            }
            else
            {
                echo "Youmlarınıs bölümü bos olamas.";
            }
            ?>
        </p>



    </body>
</html>