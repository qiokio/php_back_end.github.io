<?php
header("Content-type:text/html;charset=utf-8");
$gxry=$_POST["gxry"];
   echo '更新成功';
  $gx="gxry.txt";
  file_put_contents($gx,$gxry);
?>