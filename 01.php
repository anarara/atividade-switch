<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="sla">Try to get the number right</label>
        <input type="text" name="sla">
        <br>

    </form>
    <?php 
        if($_POST){

            $sla = $_POST['sla'];
            switch($sla){
                case $sla  > "0" && $sla < "20":
                    echo    "you were unlucky";
                    break;
                case $sla > "20" && $sla < "22":
                    echo "almost";
                    break;
                case $sla > "24" && $sla < "25":
                    echo "almost";
                    break;
                case "23":
                    echo "Congratulations, you got it right!";
                    break;
                case $sla > "25" && $sla < "100":
                    echo "you were unlucky";
                    break;
                case $sla  > "100":
                    echo    "The number is less then 100!";
                    break;
                }
        }

    ?>
    
</body>
</html>

