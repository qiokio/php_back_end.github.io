<?php
header("Content-type:text/html;charset=utf-8");
$gxlj=$_POST["gxlj"];
   echo '更新成功';
  $gx="gxlj.txt";
  file_put_contents($gx,$gxlj);
?>