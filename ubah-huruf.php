<?php
function ubah_huruf($string){
//kode di sini
$ascii= 0;
$baru="";
for($i=0;$i<strlen($string);$i++){
    $ascii=ord($string[$i])+1;
    $baru.=chr($ascii);
}
echo $baru."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>