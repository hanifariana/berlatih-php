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
