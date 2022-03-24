
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
        <h4> REPETIÇÃO - Crescente </h4>
        <?php
            $c = 1;

            while($c <=10) {
                echo $c."</br>";
                $c++;
            }
        ?>     

        </br>

        <?php
            $p = 1;

            while($p <=10) {
                echo $p."</br>";
                $p = $p +2;
            }
        ?>
    </div>
</body>

</html>
