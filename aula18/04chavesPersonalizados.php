
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

        <h4>Vetor - chaves personalizado </h4>
        <pre>
            <table border="1"> </tr>
                <?php
                    $v = array(0=>5,
                               1=>9,
                               2=>8,
                               7=>7);

                    print_r($v);

                    $n = array(3=>5,
                               1=>9,
                               0=>8,
                               7=>7);

                    print_r($n);
                ?>
            </table>
        </pre>
    </div>
</body>

</html>
