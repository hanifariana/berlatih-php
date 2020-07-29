<?php

function papan_catur($angka) {
// tulis kode di sini
for($i=1;$i<=$angka;$i++){
    if($i%2!=0){
        for($j=1;$j<=$i;$j++){
            echo str_repeat("#",$angka);
        }
        for($k=1;$k<$i;$k++){
            echo str_repeat(" ",$angka-1);
        }
        echo "<br>";
    }
    else{
        for($k=1;$k<=$i;$k++){
            echo str_repeat("",$angka);
        }
        for($j=1;$j<=$i;$j++){
            echo str_repeat("#",$angka-1);
        }
        echo "<br>";

    }
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
