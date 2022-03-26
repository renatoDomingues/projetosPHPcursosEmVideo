
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

        <h4> str_word_count </h4>
        <?php
            $frase ="Eu vou estudar PHP agora!";
            //$cont = str_word_count($frase, 0);

            //$cont = str_word_count($frase, 1);
            //print_r($cont);

            $cont = str_word_count($frase, 2);
            print_r($cont);

            //echo $cont;
        ?>
        <p>
            <a href="javascript:history.go(-1)"> <=VOLTAR </a>
        </p>
        
    </div>
</body>

</html>
