

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
        <h4>Operadaores de Atribuição</h4>
        <?php 
            echo "<h5>Pré-decremento</h5>";
            /* COMENTARIOS EM VARIAS LINHAS:
            Esse exercicio pretende demonstrar o uso
            de operadores de incremento e decremento */
            //Pré-decremento $atual = $atual-1 ou --$atual
            
            $atual = $_GET["aa"]; //ou# COMENTARIO EM UMA LINHA: Essa linha vai pegar o ano na URL

            echo "O ano atual é $atual e o ano anterior é ". --$atual;
        ?>
        <?php 
            echo "<h5>Pré-incremento</h5>";            
            $atual = $_GET["aa"];
            //Pré-incremento $atual = $atual+1 ou ++$atual 

            echo "O ano atual é $atual e o ano posterior é ". ++$atual;
        ?>
        <?php 
        /*
            echo "<h5>Pós-incremento</h5>";            
            $atual = $_GET["aa"];
            //Pós-incremento $atual = $atual+1 ou $atual++ 

            echo "O ano atual é $atual e o ano posterior é ". $atual++;
        */
        ?>
        <?php 
        /*
            echo "<h5>Pós-decremento</h5>";            
            $atual = $_GET["aa"];
            //Pós-decremento $atual = $atual-1 ou $atual-- 

            echo "O ano atual é $atual e o ano posterior é ". $atual--;
        */
        ?>
    </div>
</body>

</html>

