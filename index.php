<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <title>Digital Tech</title>
    </head>
    <body>
        <div class="fundo">
            <div id="conteudo">
                <div id="intro">
                    <iframe id="myFrame" src="home.php"></iframe>
                    <p id="demo"></p> 
                    <script>
                        document.getElementById("myFrame").addEventListener("load", myFunction);

                        function myFunction() {
                            document.getElementById("demo").innerHTML = "Iframe is loaded.";
                        }
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>