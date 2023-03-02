<?php
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
    <title>Still Logged In</title>
</head>
<body>
<h1>Another Page</h1>
<p>You are still logged in.</p>
<a href="loggedin.php">Go back to the logged in page</a>

</body>
</html>


