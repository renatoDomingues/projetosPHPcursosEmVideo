
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
        <h4></h4>

        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["oper"])?$_GET["oper"]:1;

            switch($o) {
                case 1:
                    $r = $n *2;
                    break;
                case 2:
                    $r = $n ^3;
                    break;
                case 3:
                    //$r = sqrt($n); || $n ^(1/5); || $n ^(0.5);
                    $r = sqrt($n);
            }

            echo "O resultado da operação solicitada foi <span class='foco'> $r </span> </br>";
        ?>
        <a href="exercicio01.html"> <input type="submit" class="botao" value="VOLTAR A PAGINA ANTERIOR" /> </a>
        
    </div>
</body>

</html>
