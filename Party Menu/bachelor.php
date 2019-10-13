<!DOCTYPE html>
<html>
    <head>
    <title>Party menu</title>
    </head>
        <style>
            *, *::before, *::after{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body, html{
                font: 400 15px/2 "Lato", sans-serif;
            }
            header{
                background: #054377;
                text-align: center;
                padding: 4vmin 0;
            }
            header h1{
                font: 850 50px/1 "Lato", sans-serif;
            }
            header h1 .white{
                color: #fff;
                text-shadow: -2px 0 1px #000;
            }
            header h1 .black{
                color: #000;
                text-shadow: 2px 0 1px #fff;
            }
            .img1{
                background: url("bday.jpg");
                width: 50vmin;
                height: 50vmin;
                background-size: 50vmin;
                background-repeat: no-repeat;
                background-position: center;
                background-origin: center;
            }
            header div{
                text-transform: uppercase;
                color: #000;
                font-weight: 800;
            }
            section{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-around;
                margin: 1vmin;
                padding: 1vmin;
                border: 4px solid #054377;
            }
            a.img{
                width: 30%;
                display: block;
                background: #fff;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.18);
                margin-bottom: 25px;
            }
            a, input[type=submit]{
                text-decoration: none;
                color: #000;
                text-transform: uppercase;
            }
            a:hover, input[type = submit]:hover{
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.48);
            }
            div.container{
                text-align: center;
                padding: 10px 20px;
            }
            table{
                text-align: center;
                width: 70vmin;
            }
            tr{
                margin: 1vmin;
            }
            th{
                border: 1px solid #054377;
            }
            td{
                border-left: 1px solid #054377;
                border-right: 1px solid #054377;
            }
            input[type = submit]{
                margin: 1vmin;
                background: #054377;
                color: #000;
                border: 1px solid #054377;
                padding: 1vmin;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.18);
            }
        </style>
    <body>
        <header>
            <a href = "index.html"><h1><span class ="white">party</span><span class = "black">maker</span></h1></a>
            <div class = "about">we organise parties that you will remember!!!</div>
        </header>
        <h1 class = "sub-heading">Bachelor's Party</h1>
        <form method = "post">
            <table>
                <tr>
                    <th>S.NO.</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <th>1.</th>
                    <td>Party head</td>
                    <td>90Rs</td>
                    <td><input type = "number" name = "P1"/></td>
                </tr>
                <tr>
                    <th>2.</th>
                    <td>Funny Ballons</td>
                    <td>50Rs</td>
                    <td><input type = "number" name = "P2"/></td>
                </tr>
                <tr>
                    <th>3.</th>
                    <td>Bachelor Cap</td>
                    <td>570Rs</td>
                    <td><input type = "number" name = "P3"/></td>
                </tr>
                <tr>
                    <th>4.</th>
                    <td>Party T-shirt</td>
                    <td>490Rs</td>
                    <td><input type = "number" name = "P4"/></td>
                </tr>
                <tr>
                    <th>5.</th>
                    <td>Bachelor Glasses</td>
                    <td>90Rs</td>
                    <td><input type = "number" name = "P5"/></td>
                </tr>
                <tr>
                    <th>6.</th>
                    <td>Bachelor band</td>
                    <td>70Rs</td>
                    <td><input type = "number" name = "P6"/></td>
                </tr>
                <tr>
                    <th>7.</th>
                    <td>Balloons</td>
                    <td>40Rs-20pcs</td>
                    <td><input type = "number" name = "P7"/></td>
                </tr>
                <tr>
                    <th>8.</th>
                    <td>Balloons</td>
                    <td>80Rs-70pcs</td>
                    <td><input type = "number" name = "P8"/></td>
                </tr>
                <tr>
                    <th>9.</th>
                    <td>Ballons</td>
                    <td>180-200pcs</td>
                    <td><input type = "number" name = "P9"/></td>
                </tr>
                <tr>
                    <th>10.</th>
                    <td>Balloons</td>
                    <td>500Rs-590pcs</td>
                    <td><input type = "number" name = "P10"/></td>
                </tr>
                <tr>
                    <th></th>
                    <th>
                        <?php
                            if(isset($_POST['submit'])){
                                $rate = array(90, 50, 570, 490, 90, 70, 40, 80, 180, 500);
                                $sum = 0;
                                $i = 1;
                                foreach($rate as $x){
                                    $str = "P" . $i;
                                    $sum += $x * $_POST[$str];
                                    $i++;
                                }
                                echo "Total : ";
                            echo"
                    </th>
                    <th></th>
                    <th>".$sum."<th>";
                            }
                    ?>
                </tr>
            </table>
            <input type = "submit" name = "submit"/>
        </form>
        
    </body>
<html>
