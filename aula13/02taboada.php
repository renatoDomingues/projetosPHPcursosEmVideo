
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
            $n = isset($_GET["num"])?$_GET["num"]:1;
            echo "Gerando a tabuada escolhida ... ... </br>";
            echo "<fieldset> Tabuada de $n </fieldset> </br>";

            for($c =1; $c <=10; $c++) {
                $r = $n *$c;
                echo "$n X $c = $r </br>";
            }
        ?> 
        <br/>
        <p>
            <fieldset>
                <a href="javascript:history.go(-1)"> <=Voltar </a>
            </fieldset>
        </p>

    </div>
</body>

</html>
