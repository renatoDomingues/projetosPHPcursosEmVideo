
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

        <h4> explode(); </h4>
        <?php
            $site = "Curso Em Video";
            $vetor = explode(" ", $site);
            print_r($vetor);
        ?>
        <p>
            <a href="javascript:history.go(-1)"> <=VOLTAR </a>
        </p>
        
    </div>
</body>

</html>
