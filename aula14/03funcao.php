
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
        <h4> </h4>
        <?php
            function soma () {
                $p = func_get_args(); //cada vetores
                $t = func_num_args(); //todos os vetores somados
                $s =0;

                for($i =0; $i <$t; $i++) {
                    //$s = $s + $p[$i];
                    $s += $p[$i];
                }
                return $s;
            }
            echo "</br> Passar os parametros para a função ... ... </br>";

            $r = soma(3, 5, 2);
            echo "A soma dos valores é $r";
        ?> 

    </div>
</body>

</html>
