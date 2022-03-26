
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

        <h4>strpos();</h4>
        <?php
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP"); //Buscara nas posições em letras que está escrito, nesse caso só maiusculas

            echo "$frase </br> A string foi encontrada na posição $pos";
        ?>
        
    </div>
</body>

</html>
