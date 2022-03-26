
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

        <h4> Printf </h4>
        <?php
            $p = "Leite";
            $pr = 4.5;

            //echo "O $p custa R$ $pr";
            //echo "O $p custa R$ ".number_format($pr, 2); //=>Codigo antigo

            //printf ("O .. custa R$ ..", $p, $pr);
            printf ("O %s custa R$ %.2f", $p, $pr);
        ?>
        
    </div>
</body>

</html>
