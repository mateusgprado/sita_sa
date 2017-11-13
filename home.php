<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <title>Digital Tech</title>
    </head>
    <body>
        <div class="fundo">
            <div id="container">
                <header> 
                    <?php
                    include "menu.php";
                    ?>
                </header>
                <br/>
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
