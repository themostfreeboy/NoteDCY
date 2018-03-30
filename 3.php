<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>瑜提醒</title>
</head>
<body>
	<?php
		$file_path="3.txt";
		if(file_exists($file_path))
		{
			$file=fopen($file_path,"r");
			$str="";
			$buffer=1024;//每次读取1024字节
			while(!feof($file))
			{
				$str=fread($file,$buffer);
				$str=str_replace("\r\n","</br>",$str);
				echo $str;
			}
			fclose($file);
		}
		else
		{
			echo "无提醒！</br>";
			exit -1;
		}
	?>
</body>
</html>