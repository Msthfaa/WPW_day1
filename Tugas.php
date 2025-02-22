<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <?php
    $val1 = 2;
    $val2 = 5;
    $val3 = 0;
    $val4 = 1;
    $val5 = "aku";
    $val6 = "dia";
    echo "bilangan $val1 + $val2 =" . $val1 + $val2;
    echo "<br>"; 

    echo "bilangan 0 and 1 = ";
    echo $val3 & $val4;
    echo "<br>";
    
    echo "hasil dari sisa hasil bagi dari $val2 dan $val1 adalah ". $val2 % $val1;
    echo "<br>";
    
    echo "bilangan $val2 x $val2 = " . $val2 * $val2 ;
    echo "<br>";

    echo "kata $val5 dan $val6 digabung menjadi " . $val5." ".$val6;
    ?>
</body>
</html>