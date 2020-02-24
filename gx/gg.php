<?php
header("Content-type:text/html;charset=utf-8");
$gg=$_POST["gg"];
   echo '更新成功';
  $gxgg="gg.txt";
  file_put_contents($gxgg,$gg);
?>