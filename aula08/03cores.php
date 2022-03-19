
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - cursoemvideo.com</title>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?> 
    <style>
        span.texto {
            font-size: <?php 
                            echo $tam; 
                        ?>;
            color: <?php 
                        echo $cor; 
                    ?>;
        }
    </style>

</head>

<body>
    <div>

        <h4></h4>
        <h5> </h5>
        <?php
            echo "<span class='texto'> $txt </span>";
        ?>
        
    </div>
</body>

</html>
