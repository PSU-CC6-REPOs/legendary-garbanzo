<?php
if(isset($_POST['submit'])) {
  // get the input values
  $username = $_POST['username'];
  $password = $_POST['password'];

  // check if both inputs are not empty
  if(!empty($username) && !empty($password)) {
    // set the auth cookie with a value of "ok"
    setcookie('auth', 'ok');

    // redirect to the logged in page
    header('Location: loggedin.php');
    exit();
  } else {
    // prompt to fill in both fields if either is empty
    $message = "Please enter both your username and password.";
  }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
   <form method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  <br>
  <button type="submit" name="submit">Log In</button>
</form>
<?php if(isset($message)) { echo $message; } ?>
</body>
</html>




