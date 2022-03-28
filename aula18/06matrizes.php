
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

        <h4> Matrizes </h4>
                <pre>
                    <?php
                        $vetor= array(3,
                                   4,
                                   5);

                        print_r($vetor);

                        echo "</br>";

                        $matriz = array(array(6, 4),
                                   array(4, 9),
                                   array(3, 2));

                        $matriz[0][1] = $matriz[2][0]; //Mudar o resultado

                        print_r($matriz);
                    ?>
                </pre>
    </div>
</body>

</html>
