<?php

function perkenalan($nama, $salam="assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
?>