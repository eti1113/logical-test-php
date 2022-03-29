<?php
for($i=1;$i<=5;$i++){
  $rand = rand(1, 100);

  if($rand <= 60){
    echo $rand."&nbsp"."Kurang"."<br>";
  }else if($rand > 60 && $rand <= 70){
    echo $rand."&nbsp"."Cukup"."<br>";
  }else if($rand > 70 && $rand <= 80){
    echo $rand."&nbsp"."Baik"."<br>";
  }else if($rand > 80){
    echo $rand."&nbsp"."Luar Biasa"."<br>";
  }
}
?>
