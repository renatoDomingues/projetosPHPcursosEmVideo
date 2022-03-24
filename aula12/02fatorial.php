
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

        <h4> Fatorial </h4>
        <?php
            $v = isset($_GET["val"]) ?$_GET["val"]:1;
            echo " <h1> Calculando o fatorial de $v </h1> ";

            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            } while($c >=1);
            echo " <h2> $v! = $fat </h2>";
        ?>
        <p> 
        <a href="02index.html" class="button"> VOLTAR </a>
        </p>
        
    </div>
</body>

</html>
