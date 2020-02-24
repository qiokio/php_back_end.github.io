<?php
	header("Content-type: text/html;charset=UTF-8");
	if(empty($_POST["id"])){
		exit("缺少参数！");
	}
	if(empty($_POST["content"])){
		exit("缺少参数！");
	}
	$files = fopen("./lyb.txt", "r") or exit("Error！");
	$str = fread($files, filesize("./lyb.txt"));
	$file = fopen("./lyb.txt", "w") or exit("Error！");
	$txt = "<span id=\"id\">联系方式".$_POST["id"]."</span><br><span id=\"content\">留言内容：".$_POST["content"]."</span><br><span id=\"date\">".date("Y-m-d H:i:s")."</span><hr>".$str;
	fwrite($file, $txt);
	fclose($files);
	fclose($file);
        echo "反馈成功";
?>