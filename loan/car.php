<!DOCTYPE html>
<html>
    <head>
        <style>
            :root{
                --bg-color: url("loan3.jpg");
                --form-bg-color: rgba(0,0,0,0,0.7);
                --border-bg-color: skyblue;
            }
            *, *::before, *::after{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            html, body{
                font: 400 15px/1.9 "Lato", sans-serif;
                background: var(--bg-color);
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                flex-direction: column;
                text-align: center;
            }
            form, .wrapper{
                border-radius: 10px;
                background: var(--form-bg-color);
                box-shadow: 0 0 40px  var(--border-bg-color);
                min-width: 50vw;
                padding: 5vmin;
                color: black;
                font-size: 20px;
            }
            a, input[type=submit]{
                display: block;
                border: 1px solid var(--border-bg-color);
                margin: 1vmin 0;
                text-decoration: none;
                border-radius: 10px;
                background: var(--border-bg-color);
                color: black;
                padding: 1vmin;
            }
            a:hover, input[type=submit]:hover{
                color: var(--border-bg-color);
                background: white;
                box-shadow: 0 0 10px 1px var(--border-bg-color);
                
            }
            h1, h2{
                font: 250 15px/1 "Lato", sans-serif;
                font-size: 40px;
            }
            h2{
                font-size: 25px;
            }
            input, select{
                min-width: 100%;
                border: 1px solid var(--border-bg-color);
            }
           
        </style>
    </head>
    <body>
        <form method = "post">
            <p>Loan Amount</p>
            <input type = "range" min = "100000" max = "5000000" value = "2550000" name = "principle"/>
            <p>Interest Rate(%)</p>
            <input type = "range" min = "9" max = "19" value = "14.5" step = "0.1" name = "rate"/>
            <p>Loan Term(Years)</p>
            <input type = "range" min = "12" max = "84" value = "48" name = "time"/>
            <input type = "submit" name = "submit"/>
            <a href = "index.html">Main Menu</a>
        </form>
        <?php
            if(isset($_POST["principle"])){
                    echo "<br>Loan Amount : ".$_POST["principle"];
                    echo "<br>Interest Rate : ".$_POST['rate'];
                    echo "<br>Loan Months : ".$_POST['time'];
                    echo "<br>Loan Amount : " . ($_POST["principle"]*$_POST["rate"]*$_POST["time"])/($_POST['time']*12*100*12);
            } 
            else{
                echo "Please slide the Slider Bar and Press Submit.";
            }
        ?>
    </body>
</html>
