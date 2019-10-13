<!DOCTYPE html>
<html>
    <head>
		<style>
            body{
                text-align : center;
                color : white;
                background-color : black;
            }
        </style>			
	</head>
    <body>
        <form method="post">
            <input type = "textbox" name = "n1" placeholder="Enter First string:" required/><br>
            <input type = "textbox" name = "n2" placeholder="Enter Second string:" required/><br>
            <input type = "submit" name = "submit" value ="SWAP"/><BR>
        </form>
        <?php
            function swap_val($a, $b){
                $temp = $a;
                $a = $b;
                $b = $temp;
                echo "Swap call by value:       ".$a . " " . $b . "<br><br>";
            }
            function swap_ref(&$a, &$b){
                $temp = $a;
                $a = $b;
                $b = $temp;
                echo "Swap call by reference:       ".$a . " " . $b . "<br><br>";
            }
            if(isset($_POST['submit'])){
                $a = $_POST['n1'];
                $b = $_POST['n2'];
                echo "String entered by you:        ".$a . " " . $b . "<br><br>";
                swap_val($a, $b);
                echo"original value after swapping done by  call by value:      ". $a . " " . $b . "<br><br>";
                swap_ref($a, $b);
                echo"original value after swapping done by  call by reference:      ". $a . " " . $b . "<br><br>";
            }
        ?>
    </body>
</html>