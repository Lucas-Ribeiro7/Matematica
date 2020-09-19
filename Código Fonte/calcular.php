<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemática</title>
</head>
<body>
    <?php
        include_once 'funcoes.php';
            $num = $_POST['num'];
            $escolha = $_POST['escolha'];

            switch($escolha){
                case 'posit_negati' :
                    $escolha = posi_negat($num);
                break;
                case 'par_impar' :
                    $escolha = par_impar($num);
                break;
                case 'tabuada' :
                    $escolha = tabuada($num);
                break;
            }
    ?>
</body>
</html>