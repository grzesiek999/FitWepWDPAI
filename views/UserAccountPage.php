<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/Main.css">

    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Menu.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Footer.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/UserAccountPage.css">

    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Menu.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Footer.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/UserAccountPage.css">


</head>
<body>
    
    <?
        if ($_SESSION["username"] == null) include("organisms/menu.php");
        else include("organisms/menuLoggedUser.php");
    ?>

    <main>
        <div class="content">
            <div class="container">
                <h3>Mój Profil</h3>
                <h4>Twoje imię:</h4>
                <h4>Twoje nazwisko:</h4>
                <h4>Data urodzenia:</h4>
                <h4>Twój email:</h4>
                <h4>Twóje diety:</h4>
                <h4>Twóje treningi:</h4>

            </div>
        </div>
    </main>
     
    <footer>
        <? include("organisms/footer.php"); ?>
    </footer>
    
</body>
</html>