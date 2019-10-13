<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                text-align:center;
                color : white;
                background-color : black;
            }
        </style>   
        		
	</head>
    <body>
        <form method = "post">
            <input type = "number" name = "n1" placeholder="Enter Smaller no:" required/><br>
            <input type = "number" name = "n2" placeholder="Enter Larger no:" required/><br>
            <input type = "submit" name = "submit" value ="search"/>
        </form>
        <?php
            if(isset($_POST['submit'])){
                echo "Multiples of 5 between " . $_POST['n1'] ." & ". $_POST['n2']. " : ";
                for($i = $_POST['n1']; $i <= $_POST['n2']; $i++){
                    if($i%5 == 0)
                        echo $i." ";
                }       
            }
        ?>
    </body>
</head>