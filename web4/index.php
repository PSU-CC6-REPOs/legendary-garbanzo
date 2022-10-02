<?php
    if(isset($_POST['username'] )){
        if(isset($_POST['password'])){
            $username = htmlentities($_POST['username']);
            $password = htmlentities($_POST['password']);
            $user = empty($username);
            $pass = empty($password);        
            header('Location: loggedin.php');
       

            if($user != 1 & $pass != 1){
            setcookie('auth', 'ok', time()+3600);   
            setcookie('username', $username, time()+3600);          
            }
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>