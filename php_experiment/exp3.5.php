<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                text-align : center;
                background-color : black;
                color:white;
            }
         </style>
     </head>       
    <body>
        <form method = "post">
            <input type = "number" name = "n" placeholder="*Enter your seat number:" required/><br>
            <input type = "submit" name = "submit" value ="search"/>
        </form>
        <?php
            function seat($n){
                switch($n){
                    case($n == 1):
                            echo $n . "     LOWER BERTH ";
                            return;
                    case($n == 2):
                            echo $n . "     MIDDLE BERTH ";
                            return;
                    case ($n % 8 == 0):
                            echo $n . "     SIDE UPPER BERTH ";
                            return;
                    
                    case ($n % 3 == 0):
                            echo $n . "     UPPER BERTH";
                            return;
                    
                    case (($n+1) % 8 == 0):
                        echo $n . "     SIDE LOWER BERTH" ;
                        return;
                    case (($n+1) % 3 == 0):
                        echo $n . "     MID BERTH ";
                        return;
                    
                    default:
                        echo $n . "     LOWER BERTH ";
                        return;
                    
                }
                
            }
            if(isset($_POST['submit'])){
                echo "Your allotted seat type is :      " ;
                seat($_POST['n']);      
            }
        ?>
    </body>
</head>