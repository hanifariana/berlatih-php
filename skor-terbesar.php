<?php
function skor_terbesar($arr){
//kode di sini
    $namaL = "";
    $kelasL = "";
    $maxL = 0;

    $namaN = "";
    $kelasN = "";
    $maxN = 0;

    $namaJ = "";
    $kelasJ = "";
    $maxJ = 0;

    for($i=0;$i<count($arr);$i++){
        if($arr[$i]["kelas"]=="Laravel" && $arr[$i]["nilai"]>$maxL){
            $namaL = $arr[$i]["nama"];
            $kelasL = $arr[$i]["kelas"];
            $maxL = $arr[$i]["nilai"];
        }
        else if($arr[$i]["kelas"]=="React Native" && $arr[$i]["nilai"]>$maxN){
            $namaN = $arr[$i]["nama"];
            $kelasN = $arr[$i]["kelas"];
            $maxN = $arr[$i]["nilai"];
        }
        else if($arr[$i]["kelas"]=="React JS" && $arr[$i]["nilai"]>$maxJ){
            $namaJ = $arr[$i]["nama"];
            $kelasJ = $arr[$i]["kelas"];
            $maxJ = $arr[$i]["nilai"];
        }
    }
    $arrFinal["Laravel"] = array(
        "nama" => $namaL,
        "kelas" => $kelasL,
        "nilai" => $maxL,
    );
    $arrFinal["React Native"] = array(
        "nama" => $namaN,
        "kelas" => $kelasN,
        "nilai" => $maxN,
    );
    $arrFinal["React JS"] = array(
        "nama" => $namaJ,
        "kelas" => $kelasJ,
        "nilai" => $maxJ,
    );
    echo "<pre>"; 
    print_r($arrFinal);
    echo "</pre>";
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>