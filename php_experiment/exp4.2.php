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
	<form method= "post" action= "<?php echo $_SERVER['PHP_SELF'];?>">
	Name: <input type="text" name="fname"><br>
	<input type="radio" name="male" value="Male" value="Male">Male<br>
	<input type="radio" name="Female" value="Female" >female<br>
	<input type="submit" value = "Submit"><br>
	</form>

	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = htmlspecialchars($_REQUEST['fname']);
			if (empty($name)){
				echo "Name is Empty";
			}
			else{
				echo $name;
			}
		}
	?>
</body>
</html>