<?php
    
    $user = ['name'=>'Yuliia','password'=>md5('1702'.'c1c1c1')];
    //echo md5('1702'.'c1c1c1');
    $user_check = serialize($user);
    file_put_contents('text.txt',$user_check);
    $str = file_get_contents('text.txt');
    $person = unserialize($str);
    
    if(isset($_POST['name']) && isset($_POST['password'])){
        
     if($person['name'] == $_POST['name'] && $person['password'] == md5($_POST['password'].'c1c1c1')){   
        
         //echo md5($_POST['password'].'c1c1c1');
         
        session_start();
        
        $login = ['name' => $POST['name'],'password' => md5($_POST['passord'].'c1c1c1')];
        
        $_SESSION['name'] = $login['name'];
        $_SESSION['password'] = md5($login['password'].'c1c1c1');
        
            header("Location: profile.php");
                 
        } else { 
            
            echo ('Your put wrong login or email. If your are not a member you can log in');
             
            
       }
   
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

<h3>Authorization</h3>
    <hr>
    
<form method="post" value="auth">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="password" placeholder="Password">
    <input type="submit" value="Login in">
</form>
    
  
    
    </body>
</html>
