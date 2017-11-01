<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <title>Digital Tech</title>
    </head>
    <body>
        <div id="container">
            <header> 
                <div id='logo'>
                    <img src="img/logo.png" alt="logo" class="logo"/>
                </div>
            </header>
            <div id='menu'>
                <?php
                    include "menu.php";
                ?>
            </div>
            <div id="banner">
                <?php
                                include 'banner.php';
                ?>
            </div>
            <div id="galeria">
                <?php
                include 'novidades.php';
                ?>
            </div>
            <div id="promacao">
                <?php
                                include 'promocao.php';
                ?>
            </div>
            <footer> 
            </footer>  
        </div>
    </body>
</html>
