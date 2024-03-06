<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nota1">Insira a primeira nota dele:</label>
        <input type="text" name="nota1">
        <br>
        <br>
        <label for="nota2">Insira a segunda nota dele:</label>
        <input type="text" name="nota2">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if($_POST){
            $nota1 = floatval($_POST['nota1']);
            $nota2 = floatval($_POST['nota2']);

            if($nota1 < 0 || $nota1 > 10){
                echo "precisa ser um valor entre 0 e 10";
            }

            if($nota2 < 0 || $nota2 > 10){
                echo "precisa ser um valor entre 0 e 10";
            }
        
            $conta = ($nota1 + $nota2) / 2;

            switch($conta){
                case $conta > 0 && $conta < 5:
                    echo "aluno não aprovado";
                    break;
              
                case $conta > 5 && $conta < 7:
                        echo "aluno em recuperação";
                        break;
                
                case $conta > 7:
                    echo "aluno aprovado";
                    break;
            }
        }
    ?>
</body>
</html>