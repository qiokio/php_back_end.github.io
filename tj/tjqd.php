<?php 
$filee = ''; //下载的文件

$file='tjqd.txt';
if(file_exists($file))
{
	$oldtime=file_get_contents($file);
	$newtime=$oldtime+1;
	file_put_contents($file,$newtime);
	echo '<b>'.$newtime.'</b>';
}
else
{
	file_put_contents($file,'1');
	echo '统计写入成功';
}

if (filee_exists($filee)) { 
header('Content-Description: File Transfer'); 
header('Content-Type: application/octet-stream'); 
header('Content-Disposition: attachment; filename='.basename($file)); 
header('Content-Transfer-Encoding: binary'); 
header('Expires: 0'); 
header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
header('Pragma: public'); 
header('Content-Length: ' . filesize($filee)); 
ob_clean(); 
flush(); 
readfile($filee); 
exit; 
} 
?> 