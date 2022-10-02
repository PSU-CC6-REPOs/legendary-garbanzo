<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric
        if(is_numeric($_POST["val1"]) && is_numeric($_POST["val2"]) && !empty($_POST["val1"]) && !empty($_POST["val2"])){
            # test if calc is not null
            if(isset($_POST["calc"])){
                $num1 = $_POST["val1"];
                $num2 = $_POST["val2"];
                $result = $_POST["calc"];
                # switch statement for value of calc
                switch($result){
                    case "add":
                        $result = $num1 + $num2;
                        break;
                    case "sub":
                        $result = $num1 - $num2;
                        break;
                    case "mul":
                        $result = $num1 * $num2;
                        break;
                    case "div":
                        $result = $num1 / $num2;
                        break;

                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>