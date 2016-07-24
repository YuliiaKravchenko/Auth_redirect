<?php

 session_start();
    $str = file_get_contents('text.txt');
    $person = unserialize($str);
    if($_SESSION['name']==$person['name'] && $_SESSION['password']==md5($person['password'].'c1c1c1')){
    
      echo '<div><p>Welcome '.$_SESSION['name'].'</p></div>';
    
    } else{
        //header("Location: login.php");
    }
    
    if(!empty($_POST['exit'])){
        header("Location: login.php");
        session_destroy();
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body>
    
<form method="post" value="auth">
    <input type="submit" name="exit" value="Login out">
</form>

    
    
    </body>
</html>

