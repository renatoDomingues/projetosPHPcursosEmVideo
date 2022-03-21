
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
            $mapaBrasil = isset($_GET["est"])?$_GET["est"]:1;

            switch($mapaBrasil) {
                case 1:
                case 3:
                case 21:
                case 23:
                case 4:
                case 27:
                case 14:
                    echo "O Estado selecionado está na região Norte do Brasil";
                    break;

                case 10:
                case 18:
                case 10:
                case 6:
                case 20:
                case 15:
                case 17:
                case 2:
                case 25:
                case 5:
                    echo "O Estado selecionado está na região Nordeste do Brasil";
                    break;

                case 11:
                case 12:
                case 9:
                    echo "O Estado selecionado está na região Centro-Oeste do Brasil";
                    break;

                case 13:
                case 7:
                case 8:
                case 19:
                case 26:
                    echo "O Estado selecionado está na região Sudeste do Brasil";
                    break;

                case 24:
                case 16:
                case 22:
                    echo "O Estado selecionado está na região Sul do Brasil";
                    break;

                default:
                    echo "O Estado selecionado é INVALIDO!!";
            }
        ?>
        </br> 
        <a href="javascript:history.go(-1)" class="botao"> VOLTAR para selecionar o Estado </a>
        
    </div>
</body>

</html>
