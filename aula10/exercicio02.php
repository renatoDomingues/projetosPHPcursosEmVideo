
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
            $d = isset($_GET["ds"])?$_GET["ds"]:0;

            switch($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;

                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto!! ;)";
                    break;
                
                default:
                    echo "Desculpe, o dia da semana invalido";
            }

            //"javascript:history.go(-1)" =>Codigo do javascript para voltar uma pagina da minha navegação
        ?>
        </br> <a href="javascript:history.go(-1)" class="botao"> VOLTAR </a>
        
    </div>
</body>

</html>
