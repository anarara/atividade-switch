<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="num1">Insira a primeira nota dele:</label>
        <input type="text" name="num1">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if($_POST){
            $num1 = $_POST['num1'];
            if($num1 <= 10){
            for($i = 1; $i <= 10; $i++){
                echo $num1 . " X " . $i . " = " . $num1 * $i;
                echo '<br>';
            }
            switch($num1){
                case "1":
                echo "vc está na tabuada do 1";
                break;
                
                case "2":
                    echo "vc está na tabuada do 2";
                    break;
                
                case "3":
                echo "vc está na tabuada do 3";
                break;

                case "4":
                    echo "vc está na tabuada do 4";
                    break;
                
                case "5":
                echo "vc está na tabuada do 5";
                break;

                case "6":
                    echo "vc está na tabuada do 6";
                    break;
                
                case "7":
                echo "vc está na tabuada do 7";
                break;

                case "8":
                    echo "vc está na tabuada do 8";
                    break;
                
                case "9":
                echo "vc está na tabuada do 9";
                break;

                case "10":
                    echo "vc está na tabuada do 10";
                    break;

            }
            }
            else {
                echo "O número que você digitou só pode ser abaixo de 10";
            }
        }
    ?>
</body>
</html>