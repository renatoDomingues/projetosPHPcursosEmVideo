
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

        <h4>Vetor - chaves associativas </h4>
                <pre>
                    <?php
                        $v = array("nome"=> "Ana",
                                    "idade"=> 23,
                                    "peso"=> 65.5);

                        $v["fuma"] = true; // Acrescentar

                        print_r($v);

                        echo "</br>";

                        foreach($v as $k => $c) {
                            echo "O campo $k possui o conteudo $c </br>";
                        }
                    ?>
                </pre>
    </div>
</body>

</html>
