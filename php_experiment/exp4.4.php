<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                text-align:center;
                color : white;
                background-color:black;
                margin : 4px;
                padding : 300px;
            }
            select{
                margin : 4px;
                padding : 10px;
            }
        </style>
    </head>
    <body>
        <form method = "post">
            <select name = "course" required>
                <option value = "">choose course</option>
                <option value = "1500000">OSS</option>
                <option value = "1600000">CCVT</option>
                <option value = "1700000">CSF</option>
            </select><br>

            <select name = "travel" required>
                <option value = "">choose Travel Method</option>
                <option value = "0">None</option>
                <option value = "15000">College Bus</option>
                <option value = "9000">Private Van</option>
            </select><br>

            <select name = "hostel" required>
                <option value = "">choose Hostel Room Type</option>
                <option value = "0">None</option>
                <option value = "250000">Single Share Bed Room</option>
                <option value = "150000">Double Share Bed Room</option>
                <option value = "100000">Triple Share Bed Room</option>
            </select><br>
            
            <input type = "checkbox" id = "mess" name = "mess"/>
            <label for = "mess">Opt for College Mess?</label><br>

            </select>

            <input type = "submit" name = "submit"/><br>
        </form>
        <?php
            error_reporting(E_ERROR | E_PARSE);
            $lib = 5000;
            $id = 500;
            $exam = 3000;
            $mess = 0;
            if(isset($_POST['submit'])){
                if(isset($_POST['mess'])){
                    $mess = 5500;
                }
                $course = (int)$_POST['course'];
                echo "Total Fee : " . ($course + $lib + $id + $exam + (int)$_POST['hostel'] + $mess + (int)$_POST['travel']);
            }
        ?>
    </body>
</html>