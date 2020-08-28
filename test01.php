<button type=button><a href="index.php">回首頁</a></button>
<button type=button><a href="test01.php?height=1.74&weight=80">小明的BMI</a></button>
<button type=button><a href="test01.php?height=1.80&weight=70">小華的BMI</a></button>
<button type=button><a href="test01.php?height=1.71&weight=60">小陳的BMI</a></button>
<hr>

<?php
	function computerBMI($height, $weight) {
		echo "身高：". $height. "公尺<br>";
		echo "體重：". $weight. "公斤<br>"; 
		$bmi = $weight / $height ** 2;
		echo "BMI：" . $bmi . "<br>";
		if ($bmi>24) {
		echo "體重有些太重囉！";
			} else if ($bmi>=18.5) {
		echo "體重很標準耶！";
		} 	  else {
		echo "體重有些太輕了！";
		}

	}
	$height= $_GET["height"];
	$weight= $_GET["weight"];
	if ($height!=NULL and $weight!=NULL) { //確定兩個值都不是空的
		//條件成立之後才會執行部分
		computerBMI($height, $weight);	
    }	else{//如果有任何一個值是空的
		 echo"你要在網址填寫正確的資料!<br>";
	  	 echo"你沒有在網址中指定height和weight";
	}
?>

