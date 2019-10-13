<!DOCTYPE html>
<html>

    <head>
        <style>
            *, *::before, *::after{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            html, body{
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                height: 100vh;
                font: 400 15px/1.9 "Lato", sans-serif;
                background-color: black;
            }
            form{
                display: inline-block;
                padding: 2vmin;
                background: skyblue;
                border-radius: 10px;
            }
            input, select{
                text-align: center;
                display: block;
                margin: 1.5vmin 0;
                width: 100%;
                font-weight: 600;
            }
            input[type = submit]{
                border: none;
                outline: none;
                margin-top: 2.5vmin;
                border-radius: 10px;
                background: #ddd;
                padding: 1vmin;
            }
        </style>
    </head>
    <body>
        <form method = "post">
            <input type = "text" name = "fullname" placeholder = "Enter full name" required/>
            <select name = "gender">
                <option value = "">Gender...</option>
                <option value = "Mr.">Male</option>
                <option value = "Mrs.">Female</option>
                <option value = "Mr." >Don't want to share</option>
            </select>
            <input type = "submit" name = "submit"/>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $arr = explode(' ',$_POST['fullname']);
                echo "First Name : " . $arr[0];
                echo "<br>Middle Name : " . $arr[1];
                echo "<br>Last Name : " . $arr[2];
                if($_POST['gender'] == "")
                    echo "<br><b>NO gender input!!!</b>";
                else
                    echo "<br>Concatenated Data : " . $_POST['gender'] . " " . $arr[0] . " ". $arr[2];
            }
        ?>
    </body>

<html>