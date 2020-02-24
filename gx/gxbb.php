<?php
header("Content-type:text/html;charset=utf-8");
$gxbb=$_POST["gxbb"];
   echo '更新成功';
  $gx="gxbb.txt";
  file_put_contents($gx,$gxbb);
?>