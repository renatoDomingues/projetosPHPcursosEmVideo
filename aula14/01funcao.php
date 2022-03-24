
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
                $s = $a + $b;
                echo "A soma de $a com $b é igual: ";
                echo "<p> Vale $s </p>";
            }

            soma(3, 4);
            soma(8, 2);

            $x =9;
            $y =15;
            soma($x, $y);
        ?> 

    </div>
</body>

</html>
