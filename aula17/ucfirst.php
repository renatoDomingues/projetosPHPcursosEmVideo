
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

        <h4>ucfirst();</h4>
        <?php
            $nome ="renaTo doMingues S";
            //$nome2 = ucfirst($nome); //Só vai se importar deixar letra maiuscula a primeira letra
            $nome2 = ucfirst(strtolower($nome));

            echo "Seu nome é $nome2";
        ?>
        
    </div>
</body>

</html>
