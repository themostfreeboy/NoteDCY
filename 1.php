<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>来事提醒</title>
</head>
<body>
	<?php
		$file_path="1.txt";
		if(file_exists($file_path))
		{
			if(count(file($file_path))<2)
			{
				echo "数据日期格式有误</br>";
				exit -1;
			}
			$file=fopen($file_path, "r");
			$str=fgets($file);//fgets()函数从文件指针中读取一行
			$year=((int)substr($str,0,4));//取得年
			$month=((int)substr($str,4,2));//取得月
			$day=((int)substr($str,6,2));//取得日
			echo "上次来事日期：".$year."年".$month."月".$day."日</br>";
			$str=fgets($file);//fgets()函数从文件指针中读取一行
			$year=((int)substr($str,0,4));//取得年
			$month=((int)substr($str,4,2));//取得月
			$day=((int)substr($str,6,2));//取得日
			echo "预计下次来事日期：".$year."年".$month."月".$day."日</br>";
			fclose($file);
		}
		else
		{
			echo "数据文件不存在</br>";
			exit -1;
		}
	?>
</body>
</html>