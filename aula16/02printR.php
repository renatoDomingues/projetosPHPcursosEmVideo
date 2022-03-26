
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

        <h4> Print_r </h4>
        <?php
            $v[0] =4;
            $v[1] =8;
            $v[2] =3;

            print_r($v);

            echo "</br>";

            $v2 = array (3, 7, 6, 2, 1, 9);
            print_r($v2);

            // var_dump($v); =>Faz o serviço parecido com a do -> print_r();
            // var_export($v2); =>Faz o serviço parecido com a do -> print_r();
        ?>
        
    </div>
</body>

</html>
