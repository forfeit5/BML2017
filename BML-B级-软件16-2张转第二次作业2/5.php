<!--
制作简单的看书系统
-->
	<?php
		if(array_key_exists('chat',$_POST))
		{
			$bookName=$_POST['chat'];
			$bookName=iconv('UTF-8','GBK',$bookName);
			$myfile = fopen("bin/".$bookName.".txt", "r");
			if($myfile==null)
				echo '未找到相关新闻';
			else
			{
				$size=filesize("bin/".$bookName.".txt");
				$box=fread($myfile,$size);
				$box=iconv('GBK','UTF-8',$box);
				echo $box;
				fclose($myfile);
			}
		}
		else
		{
			echo '未找到相关新闻';
		}
	?>

