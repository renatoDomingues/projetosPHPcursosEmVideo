
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
        <h4> REPETIÇÃO </h4>        
        <form method="get" action="02parte2.php">
            <?php
            $c = 1;
            while ($c <= 5){
                echo "Valor $c : <input type='number' name='v$c' max='100' min='0' value='0'/> <br/>";
                $c ++;
            }
            ?>
            <input type="submit" value="Enviar">
        </form>
        
    </div>
</body>

</html>
