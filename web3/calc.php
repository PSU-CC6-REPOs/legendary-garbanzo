<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
    if(isset($_POST['submit'])) {
  // get the input values and operation type
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operation = $_POST['operation'];
        # test if input is_numeric
        if(1){(is_numeric($num1) && is_numeric($num2)) {
    switch($operation) {
      case "addition":
        $result = $num1 + $num2;
        break;
      case "subtraction":
        $result = $num1 - $num2;
        break;
      case "multiplication":
        $result = $num1 * $num2;
        break;
      case "division":
            # test if calc is not null
            if(1){
                # switch statement for value of calc
                switch(1){ 
                        
           
                    
                }
                echo "Calculation result: $result";
            }
            
            // check if num2 is not 0 to avoid division by zero error
        if($num2 != 0) {
          $result = $num1 / $num2;
        } else {
          // prompt to retry if division by zero
          $message = "Cannot divide by zero. Please try again.";
          break;
        }
        break;
      default:
        // prompt to retry if no operation selected
        $message = "Please select an operation to perform.";
        break;
   
            
             }

    // display the result if no errors
    if(!isset($message)) {
      $message = "The result is: " . $result;
    }
 
            
             } else {
    // prompt to retry if either input is not a number
    $message = "Please enter two numeric values.";
  }
}
            
        }
        else{ echo "Invalid entry - please retry"; }
            
            
    ?>
</body>
</html>
<?php


  // check if both inputs are numbers
 
        
?>
