<?php
function palindrome($angka){
    $temp = $angka;
    $asal = 0;
    while(floor($temp)){
        $mod = $temp%10;
        $asal = $asal*10+$mod;
        $temp/=10;
    }
    if($asal==$angka){
        return true;
    }
    else{
        return false;
    }
}
function palindrome_angka($angka) {
  // tulis kode di sini
  $angka++;
  if(palindrome($angka)){
      return $angka;
  }
  else{
      return palindrome_angka($angka);
  }
}

// TEST CASES
echo palindrome_angka(8)."<br>"; // 9
echo palindrome_angka(10)."<br>"; // 11
echo palindrome_angka(117)."<br>"; // 121
echo palindrome_angka(175)."<br>"; // 181
echo palindrome_angka(1000)."<br>"; // 1001

?>