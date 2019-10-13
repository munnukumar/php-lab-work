<!DOCTYPE html>
<html>
<head>
        <style>
            body{
                background-color : black;
                color : white;
                text-align : center;
                padding : 300px; 
            }
        </style>
    </head>
	<body>
		<form method="post">
		Enter a number:
		<input type="number" name="number" placeholder="Enter no. here">
		<input type="submit" value="submit">
		</form>
	</body>
</html>
<?php
	if($_POST){
		$number = $_POST['number'];
		if(($number%2)==0){
			echo "$number is an Even number";
		}
		else{
			echo "$number is an odd number";
		}
		echo "<br>";
		for($i = 1 ; $i<=10 ; $i++){
			echo "$number*$i = ",  $number*$i;
			echo "<br>";
		}
		echo "sum of square of given no. is :  ", ($number*$number) + ($number*$number);
	}
?>

