<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>龙提醒修改</title>
</head>
<body>
	<?php
        $content=$_POST["content"];
		$file_path="2.txt";
		if($content!="")
		{
			$file=fopen($file_path,"w");
			fwrite($file,$content);
			fclose($file);
			echo "新的提醒内容写入成功!</br>";
		}
		else
		{
			echo "新的提醒内容为空，未覆盖原始内容!</br>";
			exit -1;
		}
    ?>
</body>
</html>