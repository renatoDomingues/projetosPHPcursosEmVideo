
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

        <h4>str_replace();</h4>
        <?php
            $frase = "Gosto de estudar Matematica";
            echo "$frase </br>";
            
            echo "para </br>";
            
            $novaFrase = str_replace("Matematica", "PHP", $frase);
            echo "$novaFrase";

            //Trocar str_replace(); <=> para str_ireplace =>O PHP ignora o seus erros de portugues
        ?>
        
    </div>
</body>

</html>
