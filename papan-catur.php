<?php

function papan_catur($angka) {
// tulis kode di sini
$hasil= "";
for($i=1;$i<=$angka;$i++){
    if($i%2!=0){
        for($j=1;$j<=$angka;$j++){
            $hasil.="# ";
        }
    }
    else{
        for($j=1;$j<$angka;$j++){
            $hasil.=" #";
        }
    }
    echo $hasil."<br>";
}

}

$text = '';
 // Jumlah Kotak
 // Perulangan pembuatan kotak catur
 for($n = 0; $n < 8; $n++) {
  $text .= '<tr>';
  for($m = 0; $m < 8; $m++) {
   // Pemberian Warna
   $warna = '';
      if(($n % 2 == 0 && $m % 2 == 0) || ($n % 2 == 1 && $m % 2 == 1)) {
          $warna = '#000';
      }
   else $warna = '#fff';
      $text .= '<td width=30 height=30 bgcolor='.$warna.'></td>';
  }
  $text .= '</tr>';
 }
 // Tag Penutup Table
 $text .= '</table>';
 echo $text;

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # # 
# # # #
 # # #
 */

// echo papan_catur(8)
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
 */

// papan_catur(5) 

// # # # # #
//  # # # #
// # # # # #
//  # # # # 
// # # # # #
