<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>我的選台器</title>
</head>
<body>
<h2>蔡承翰的選台器</h2>
<hr>
<?php
	$tags="<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
	
	//以下是標準的二維陣列宣告方式
	$data = array(
	 array("TVBS新聞55頻道","TVBS", "A4FbB8UhNRs"),//不能用分號
	 array("三立新聞","三新聞", "4ZVUmEUFwaY"),
	 array("中視新聞台","中新聞", "wxQcIb8zcPA"),
	 array("台視新聞台","台新聞", "NbjI0cARzjQ"),
	 array("東森財經新聞","東財" ,"68lLQ7hkdzU"),
	 array("公共電視 ","公電", "ED4QXd5xAco")
	); //結束二維陣列的地方,這裡才要用分號結束
	
	//以下的迴圈負責產生按鈕列
	foreach($data as $tv){
		echo "<button>" .
			 "<a href='test03.php?v=" .
			$tv[2] . "&title=" . $tv[0] .
			"'>" .
			$tv[1] .
			"</a></button>";
	}
	echo"<hr>";
	//下面要用來處理影片的撥放器,用內淺的方式,但是要置換影片id
	$v =$_GET["v"]; //重網址取得v
	if ($v==NULL) {
		$v ="NbjI0cARzjQ";
		$title = "台視新聞台";
	}
	//以下進行字串的替換工作
	echo str_replace("^^^^",$v,$tags);
	echo "<h2>$title</h2>";

?>

<hr>
~~版權沒有,歡迎拷貝~~
<hr>
</body>
</html>