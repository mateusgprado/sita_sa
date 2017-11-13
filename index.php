<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <title>Digital Tech</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function () {
                // Animate loader off screen
                $(".se-pre-con").delay(1000).fadeOut("slow");
                ;
            });
        </script>
    </head>
    <body>
        <div class="se-pre-con"></div>        
        <div class="fundo">
            <div id="container">
                <header> 
                    <img src="img/logo.png" alt='logo' id='logo'>
                </header>
                <div id="menu">
                    <?php
                    include "menu.php";
                    ?>
                </div>
                <section class="titulo">
                    <h1><p>BEM VINDO AO NOSSO SITE!</p></h1>
                </section>
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
                <br/>
                <footer> 
                    <p> Apendizagem em informática -2017 &copy; todos os direitos reservados. </p>
                </footer>  
            </div>
        </div>
    </body>
</html>