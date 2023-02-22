<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // echo "<h1> as PHP! </h1>";
        // $number = 12;
        // echo "<h1>" . $number . "</h1>";
        // $arr = [5,13,2];
        // for ($i=0; $i < count($arr) ; $i++) { 
        //      echo "<h1>" . $arr[$i] . "</h1>";
        // }
        // print_r($arr);
        // echo "<br>";
        // var_dump ($arr);
        // echo "<hr>"; 

        
        $vardas = "Arnas";
        $pavarde = "Daugela";
        $gimimo_metai = 1988;
        $sia_data = date('Y');

        $amzius = $sia_data - $gimimo_metai;

        echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų).";

        echo "<hr>";

        $num1 = rand(0, 4);
        $num2 = rand(0, 4);

        if ($num1 > $num2 and $num1 != 0 and $num2 != 0) {
            $result = $num1 / $num2;
        } else if ($num2 > $num1 and $num1 != 0 and $num2 != 0) {
            $result = $num2 / $num1;
        } else {
            $result = 0;
        }

        echo round($result, 2);

    ?>
    <!-- <h1>Va ir veikia</h1>
    <h2>Atnaujinimas</h2> -->
</body>
</html>

