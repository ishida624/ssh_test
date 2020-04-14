<html>
<head>
	<title>BMI</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="text" name="W" placeholder="輸入體重">
  <br>
  <input type="text" name="H" placeholder="輸入身高">
  <br>
  <input type="submit">
  <input type="reset" ></form>

<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$weight = $_POST['W'];
	$height = $_POST['H']/100;
	$BMI = $weight/($height*$height);
	echo "BMI= ".$BMI."<br>";
	if ($BMI<18.5)
	{
		echo "過輕";
	}
	elseif ($BMI>=24)
	{
		echo "過重";
	}
	else
	{
		echo "正常";
	}
//}
 	var_dump($_SERVER["REQUEST_METHOD"]);

	//var_dump($weight);
	//var_dump($height);
	//var_dump($BMI);
	?>
</body>
</html>
