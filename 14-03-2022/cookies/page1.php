<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check cookies</title>
</head>
<body>
<form method="post" >
Username: <input name="username" type="text">
Password: <input name="password" type="password"><br/>
<input type="submit" name="login" value="Login">
</form>
</body>
</html>
<?php
if($_POST['login']){
    setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
    header('Location:page2.php');
}
?>

