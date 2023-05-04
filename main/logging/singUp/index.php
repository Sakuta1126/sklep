<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> rejestracja</title>
    <link rel="stylesheet" href="singUpPageStyle.css">
</head>
<body>
    <div class="headerDiv">
        <a href="../../index.php"><img src="../../../images/baner.png" class="headerDivLogo"></a>
    </div>
    <form action="singUpUser.php" method="POST">
        <div class="container">
            <h1>Zarejestruj się</h1>
            <br>            <br>
            <br>
            <br>

            <div class="text-field">
            <a>Email</a>   

                <input type="text" name="email" id="email" class="input" required>
               
            </div>
            <div class="text-field">
              <a>Haslo</a>  
            <input type="password" name="password" id="password" class="input" required>
               
                
            </div><br>
         
            <input type="submit" name="singUpUser" value="ZAREJESTRUJ SIĘ" class="singUpButton">
            <br><br>
          
            <a href="../singIn/index.php"><input type="button" value="ZALOGUJ SIĘ" class="logInButton"></a>
        </div>
    </form>
</body>
<script>
    const email = document.getElementById('email');
    const password = document.getElementById('password');


 
</script>
</html>