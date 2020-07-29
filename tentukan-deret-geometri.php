<?php
function tentukan_deret_geometri($arr) {
// kode di sini
$beda = $arr[1]/$arr[0];
for($i=0;$i<count($arr)-1;$i++){
    $bd = $arr[$i+1]/$arr[$i];
    if($bd!=$beda){
        return "false<br>";
    }
}
return "true"."<br>";
}

//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>