
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - cursoemvideo.com</title> 
    <style></style>   
</head>

<body>
    <div>

        <h4> Mostrando a TABUADA </h4>
        <?php
            $num = isset($_GET["numtab"]) ?$_GET["numtab"]:0;
            $vezes = 0;
            echo "<h6> Sendo gerado a tabuada de $num ... </h6>";

            do {
                $res = $num * $vezes;
                echo "$num X $vezes = $res <br/>";
                $vezes ++;
            } while ($vezes <= 10);
        ?>
        <p>
            <a href="03exercicio.html" class="botao"> <= VOLTAR a pagina anterior </a>
        </p>
        
    </div>
</body>

</html>
