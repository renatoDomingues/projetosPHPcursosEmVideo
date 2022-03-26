
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

        <h4> WordWrap </h4>
        <?php
            $t = " Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função WordWrap! ";
            //$r =wordwrap($t);
            //$r =wordwrap($t, 20); //=>Quebra só no codigo fonte
            //$r =wordwrap($t, 20, "<br/> "); //=>Quebra só no browser
            $r =wordwrap($t, 20, "<br/>\n "); //=>Quebra nos 02 tanto codigo fonte e broswer

            echo "</br>";
            
            $r =wordwrap($t, 20, "<br/>\n ", true); //=> true ou false

            echo $r;
        ?>
        <p>
            <a href="javascript:history.go(-1)"> <=VOLTAR </a>
        </p>
        
    </div>
</body>

</html>
