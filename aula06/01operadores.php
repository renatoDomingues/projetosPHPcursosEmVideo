
<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - Cursoemvideo.com</title>
    </head>

    <body>
        <div>
            <h4>Operadores de Atribuição</h4>
            <?php
                $preco = $_GET["p"];

                echo "O preço do produto é R$". number_format($preco, 2, ",", ".");
            ?>
            <h4>Porcentagem de aumento</h4>
            <?php
                $preco = $_GET["p"];
                //$preco = $preco + ($preco*10/100);
                $preco += (($preco*10)/100);

                echo "<br/> E o novo preço com 10% de aumento será R$". number_format($preco, 2, ",", ".");
            ?>
            <h4>Porcentagem de desconto</h4>
            <?php
                $preco = $_GET["p"];
                $preco -= ($preco*10)/100;

                echo "<br/> E o novo preço com 10% de desconto será R$ ". number_format($preco, 2, ",", ".");;
            ?>
        </div>
    </body>

</html>
