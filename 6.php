<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>来事提醒时间数据修改</title>
</head>
<body>
	<?php
        $content=$_POST["content"];
		$file_path="1.txt";
		if($content!="")
		{
			$content=str_replace("\r\n"," ",$content);
			$time=explode(' ',$content);
			if(count($time)<2)
			{
				echo "时间数据格式有误!";
				exit -1;
			}
			$file=fopen($file_path,"w");
			for($index=0;$index<2;$index++)
			{
				fwrite($file,$time[$index]."\r\n");
			}
			fclose($file);
			echo "新的时间数据内容写入成功!</br>";
		}
		else
		{
			echo "新的时间数据内容为空，未覆盖原始时间数据内容!</br>";
			exit -1;
		}
    ?>
</body>
</html>