<?php

$arr= ['Jakarta', 'Yogyakarta', 'Bandung', 'Bogor', 'Semarang'];

function namaKota ($name,$arr) {
  if (in_array($name, $arr, TRUE)){
    echo TRUE."\n";
  } else {
    echo $name."\n";
  }
}

namaKota('Jakarta', $arr);
namaKota('Majalengka', $arr);
namaKota('Bogor',$arr);

?>
