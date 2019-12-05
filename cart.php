<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet">
<title>Bruhe</title>
</head>
    <body>

        <h1 class="rainbow">Choose a option</h1>

        <h2 class= "rainbow">
        <img src="sexyHamster.jpg"> <br>
        1. this sexy beast? <br>
        <img src="PeterSexy.jpg"> <br>
        2. this sexi peter? <br>
        <img src="obama.png"> <br>
        3. bama? <br>
        </h2> 

        </h3>
        <form action="cart.php" method="post" class="number">
            <div class="number">
                <label for="number"> Enter your number: </label>
                <input type="number" name="number" id="num" required>
            </div>
            <div class="button">
                <input type="submit" name="button" value="submit" id="sub">
            </div>
        </form>

        <?php

            session_start();
            if(isset($_POST["button"])) { 
                if (!isset($_POST["number"]) < 1 || !isset($_POST["number"]) > 3) {
                    setcookie("ChocolateChip", $_POST["number"]);        
                } else {
                    exit("faulthy input");
                }
            header("refresh: 0");
            }
        

            if(isset($_COOKIE["ChocolateChip"])) { 
                echo "you chose #" . $_COOKIE["ChocolateChip"];
            }
             
        ?>
    </body>
</html>
