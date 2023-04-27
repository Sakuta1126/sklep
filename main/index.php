<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shinestore</title>
    <link rel="stylesheet" href="MainPageSTYLES.css">
    <link rel="stylesheet" href="php/product/productStyles.css">
</head>
<?php
    session_start();
    require_once('php/classes.php');
    if($_SESSION["loggedIn"] == null)
        $_SESSION["loggedIn"] = false;
?>
<body>
    <div class="headerDiv">
    <a href="https://pl.pornhub.com/view_video.php?viewkey=ph6182b31a53d26" target="_blank">
    <img src="../images/baner.png" class="headerDivLogo"></a>
        <input type="text" id="searchBarId" placeholder="czego szukasz?" class="headerDivSearch">
        <select class="headerDivCategorySelect" id="headerDivCategorySelectId">
            <option>Wszystkie kategorie</option>
            <optgroup label="Kategorie">
                <?php showCategories(); ?>
            </optgroup>
        </select>
     <input type="button" id="SearchButtonSubmit" class="headerDivSearchButton" value="SZUKAJ">
        <!-- <input type="button" id="starIconID" class="headerDivIcons" onclick="MainPageGoToFavoritesFunction()"> -->
        <a href= "cart/index.php" >Koszyk</a>&nbsp;
        <a href= "logging/singIn/index.php" >zaloguj</a>&nbsp;
        <a href= "logging/singUp/index.php" >zarejestruj</a>
    </div>
  
    <div class="theNewestProductsDiv" id="theNewestProductsDivID">
            <div class="items_name">
                <h2 class="text">Zajebiste produkciki</h2>
                <div class="line"></div>
            </div>
                <div class="theNewestProductsDivProductContainer" id="theNewestProductsDivProductContainer">
                        <?php
                        $result = $connect->query("SELECT * FROM product ORDER BY product_id DESC LIMIT 20");
                        while($row = mysqli_fetch_assoc($result)) {
                            $prdct = new Product($row['product_id'], $row['product_title'], $row['product_price'], $row['product_img']);
                            $prdct->createProduct();
                        }
                    ?>
            </div>
        </div>
    </div>



    <?php
        if(isset($_SESSION['loggedIn'])){
            if($_SESSION['loggedIn'] != true) {
                echo <<< html
                    <div class="logInMenu" id="logg">
                        <div class="logInMenuArrow"></div>
                        <p id="MainTitleLoginMenu">Witaj w gstore!</p>
                        <div id="LoginMenuParting"></div>
                        <p id="SmallTextLoginMenu">Zaloguj się i zobacz swoje zakupy, obserwowane oferty i powiadomienia.</p>
                        <a href="logging/singIn/index.php"><input type="button" id="logInButton" value="ZALOGUJ SIĘ"></a>
                        <p id="SingUpTitleLoginMenu">Nie masz konta? <a href="logging/singUp/index.php">Zarejestruj się</a></p>
                    </div>
                html;
            } else {
                echo <<< html
                    <div class="loggedUserMenu" id="logg">
                        <div class="loggedUserMenuArrow"></div>
                        <form action="account/index.php" method="POST">
                            <input type="submit" name="logOut" value="KONTO">
                        </form>
                        <form action="php/logOutUser.php" method="POST">
                            <input type="submit" name="logOut" value="WYLOGUJ">
                        </form>
                    </div>
                html;
            }
        }
    ?>

    <form action="search/index.php" id="searchBarFormId" method="POST">
        <input type="hidden" id="searchBarContextId" name="searchBarContext" value="">
        <input type="hidden" id="searchBarSelectedCategoryId" name="searchBarSelectedCategory" value="Wszystkie kategorie">
    </form>

    <script src="MainPageSCRIPT.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</body>
</html>
