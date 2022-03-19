


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
        <h4>Variáveis de variáveis</h4>
        <?php 
            $x = "abc";
            $$x = "def";

            echo "O conteudo da variável 'X' é $x";
            echo "<br/> A variável 'ABC' criada acima, recebeu o valor é $abc";
        ?>
    </div>
</body>

</html>


