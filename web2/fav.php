<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        if(!empty($_POST["username"])){ 
            if(!empty($_POST["dish"])){
                if (!empty($_POST["color"])){
                echo ("Thanks for your selection " . $_POST["username"] . "</br>");
                echo ("You really enjoyed " . $_POST["dish"] . "</br>");
                echo ("- especially with a nice " . $_POST["color"] . " wine" . "</br>");
            }else {echo "Please fill up all, thank you.";}
            }else {echo "Please fill up all, thank you.";}
        }
        else {
            echo "Please fill up all, thank you.";
        }
    ?>
</body>
</html>