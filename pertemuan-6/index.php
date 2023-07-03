<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login form</h1>
    <?php 
        if(isset($_GET)){
            if($_GET["status"] == "gagal"){
                echo "<h3> username/password salah!</h3>";
            }
        }
    ?>
    <form action="login.php" method="post">
        <input type="email" name="username" placeholder="username" /><br />
        <input type="password" name="password" placeholder="password" /><br />  
        <button type="submit">Login</button>
    </form>
</body>
</html>
