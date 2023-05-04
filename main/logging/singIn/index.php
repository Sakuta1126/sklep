<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> logowanie</title>
    <link rel="stylesheet" href="singInPageStyle.css">
</head>
<body>
    <div class="headerDiv">
        <a href="../../index.php"><img src="../../../images/baner.png" class="headerDivLogo"></a>
    </div>
    <form action="singInUser.php" method="POST">
        <div class="container">
            <h1>Zaloguj się</h1> 
            <br>
            <br> <br> <br> <br>
            
            <div class="text-field">
                <a>Email/login</a> 
                <input type="text" name="email" id="email" class="input" required>
                
                
            </div>
            <div class="text-field">
                <a>Haslo:</a> 
                <input type="password" name="password" id="password" class="input" required>
               
             
            </div>
            <input type="submit" name="singInUser" value="ZALOGUJ SIĘ" class="logInButton">
            <br><br><br><br>
            
            <a href="../singUp/index.php"><input type="button" value="ZAREJESTRUJ SIĘ" class="singUpButton"></a>
        </div>
    </form>
</body>
<script>
    const email = document.getElementById('email');
    const password = document.getElementById('password');
</script>
</html>