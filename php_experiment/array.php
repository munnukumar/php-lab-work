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
        <form method = "post">
            <input type = "textbox" name = "numbers" placeholder = "no by broken by space" req>
            <input type = "submit" name = "submit">
        </form>

        <?php
            if(isset($_POST['submit'])){
                $arr = explode(' ',$_POST['numbers']);
                $min = $arr[0];
                $max = $arr[0];
                foreach($arr as $x){
                    echo $x . " ";
                    if($x < $min)
                        $min = $x;
                    if($x > $max)
                        $max = $x;
                }
            }
            echo "<br>Mininum : " .$min. "<br>Maximum : " .$max;
        ?>
    </body>
</html>