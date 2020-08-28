<h2>匯率轉換大師</h2>
<hr>
<?php
//以下建立一個關聯式陣列的一般陣列
$rate_list= array(
		array("name"=>"美金","id"=>"USD","rate"=>28.95),
		array("name"=>"港幣","id"=>"HKD","rate"=>3.631),	
		array("name"=>"英鎊","id"=>"GBP","rate"=>37.76),
		array("name"=>"澳幣","id"=>"AUD","rate"=>21.07),
		array("name"=>"加拿大幣","id"=>"CAD","rate"=>21.94),
		array("name"=>"新加坡幣","id"=>"SGD","rate"=>20.97)
		);
?>
<form method='POST' action="test04.php">
	新台幣:<input type="text" size=7 value="500" neme="money">元<br>
	<select name="dollar">
<?php
 	//使用foreach迴圈取出陣列中所有的內容
 	for ($i=0;$i<count($rate_list); $i++) { 
 		echo "<option value=" .$i .
 			 ">" . $rate_list[$i]["name"] .
 			 "</option>";

 	}
?>
	</select>
	<input type="submit" value="開始轉換">
</form>

<?php
// 取得來自於表單的資料(金額和幣別id)
	$money =$_POST["money"];
	$dollar= $_POST["dollar"];
	//顯示出要轉換的金額(台幣)
	echo $money ."<br>";
	//v顯示出該幣別對應的匯率(重陣列取出)
	echo $rate_list[$dollar]["rate"] ."<br>";
	//計算轉換後的該幣別之金額
	// $result = $money / $rate_list[$dollar]["rate"];
	// echo"台幣" . $money . "元轉換成" .
	// 	$rate_list[$dollar]['name'] . "是" .
	// 	round($result,2) . "元" ;

?>