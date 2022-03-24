
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
            function soma ($a, $b) {
                //$s = $a + $b;
                //return $s;
                return $a + $b;
            }

            $x =3;
            $y =8;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual a $r";
        ?> 

    </div>
</body>

</html>
