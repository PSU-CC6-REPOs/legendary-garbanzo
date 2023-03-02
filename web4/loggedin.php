<?php
   // test cookies if is set, display if set

if(!isset($_COOKIE['auth']) || $_COOKIE['auth'] !== 'ok') {
  // redirect to the login page if not
  header('Location: login.php');
  exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In</title>
</head>
<body>
   <h1>Welcome!</h1>
<p>You are now logged in.</p>
<a href="anotherpage.php">Go to another page</a>
</body>
</html>



