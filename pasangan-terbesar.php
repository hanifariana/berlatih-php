<?php
function pasangan_terbesar($angka){
// kode di sini
$str=(string)$angka;
$max = (int)($str[0].$str[1]);
for($i=1;$i<strlen($str)-1;$i++){
   if($max<(int)($str[$i].$str[$i+1])){
       $max = (int)($str[$i].$str[$i+1]);
   } 
}
echo $max."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>