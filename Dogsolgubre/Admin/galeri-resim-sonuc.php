<?php
include("Ayarlar/baglan.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}


if(isset($_GET["fotosil"])){
    $GelenfotoSil = $_GET["fotosil"];
}else{
    $GelenfotoSil = "";
}


if($GelenfotoSil!=""){




$GelenDosya = $_FILES["Resim"];

$GelenResim = $GelenDosya["name"];
$GelenResimGeciciDizin = $GelenDosya["tmp_name"];

$Yol = "Resimler/Galeri/";

$BenzersizBir = rand(200, 300);
$BenzersizIki = rand(300, 400);

$DosyaYeri = $Yol . $BenzersizBir . $BenzersizIki . $GelenResim;

move_uploaded_file($GelenResimGeciciDizin, $DosyaYeri);

unlink($GelenfotoSil);

    $UrunResimGuncelle = $Baglan->prepare("UPDATE galeri SET resim = ? WHERE id = ? ");
    $UrunResimGuncelle->execute([$DosyaYeri, $GelenId]);

    
    header("Location:galeri?durum=resimok");

}else{
    header("Location:ana-sayfa");
}



?>