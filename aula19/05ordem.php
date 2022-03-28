
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

        <h4> Ordem </h4>
        <pre>
            <?php
                echo " <h6> Ordem crescente </h6> ";

                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                
                echo "</br>";

                sort($v);
                print_r($v);

                echo " <h6> Ordem decrescente </h6> ";

                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                
                echo "</br>";

                rsort($v);
                print_r($v);

                echo " <h6> Ordenação associativa </h6> ";

                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                
                echo "</br>";

                asort($v); //=>Alem dos valores, também vai juntos alterar os indices 
                print_r($v);

                echo " <h6> Usando o ksort(); </h6> ";

                $v = array(2=>"A",5=> "J",0=> "M",3=> "X",4=> "K");
                print_r($v);
                
                echo "</br>";

                ksort($v);
                print_r($v);
            ?>
        </pre>
        
    </div>
</body>

</html>
