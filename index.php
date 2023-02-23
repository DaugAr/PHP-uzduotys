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

        echo "<h1>" . "Aš esu $vardas $pavarde. Man yra $amzius metai(ų)." . "</h1>";

        echo "<hr>";

        $num1 = rand(0, 4);
        $num2 = rand(0, 4);

        echo $num1 . " " . $num2;
        echo "<br>";

        if ($num1 >= $num2 and $num1 != 0 and $num2 != 0) {
            $result = $num1 / $num2;
            echo round($result, 2);
        } else if ($num2 >= $num1 and $num1 != 0 and $num2 != 0) {
            $result = $num2 / $num1;
            echo round($result, 2);
        } else {
            echo "Dalyba negalima iš 0";
        }

        echo "<hr>";
        // 3 uzduotis

        $a = rand(0, 25);
        $b = rand(0, 25);
        $c = rand(0, 25);

        echo $a . " " . $b . " " . $c;
        echo "<br>";


        if ($a > $b and $b > $c or $a < $b and $b < $c) {
            echo $b;
        } else if ($b > $a and $a > $c or $b < $a and $a < $c) {
            echo $a;
        } else if ($b > $c and $c > $a or $b < $c and $c < $a) {
            echo $c;
        } else {
            echo "kita";
        }

        echo "<hr>";

        // 4 uzduotis

        $aa = rand(1, 10);
        $bb = rand(1, 10);
        $cc = rand(1, 10);

        if (($aa + $bb > $cc) && ($aa + $cc > $bb) && ($cc + $bb > $aa)) {
            echo $aa . " " . $bb . " " . $cc;
            echo "<br>";
            echo "Trikampis galimas";
        } else {
            echo "Trikampis negalimas";
        }


        echo "<hr>";

        // 5 uzduotis

        $a1 = rand(0, 2);
        $a2 = rand(0, 2);
        $a3 = rand(0, 2);
        $a4 = rand(0, 2);

        echo $a1 . " " . $a2. " " . $a3 . " " . $a4;

        $nulis = 0;
        $vienas = 0;
        $du = 0;

        if ($a1 == 0) {
            $nulis++;
        }

        if ($a1 == 1) {
            $vienas++;
        }

        if ($a1 == 2) {
            $du++;
        }


        if ($a2 == 0) {
            $nulis++;
        }

        if ($a2 == 1) {
            $vienas++;
        }

        if ($a2 == 2) {
            $du++;
        }


        if ($a3 == 0) {
            $nulis++;
        }

        if ($a3 == 1) {
            $vienas++;
        }

        if ($a3 == 2) {
            $du++;
        }


        if ($a4 == 0) {
            $nulis++;
        }

        if ($a4 == 1) {
            $vienas++;
        }

        if ($a4 == 2) {
            $du++;
        }

        echo "<br>";
        echo "nuliai:" . $nulis . " vienetai:" . $vienas . " dvejetai:" . $du;


        echo "<hr>";

        // 6 uzduotis

    ?>
    <!-- <h1>Va ir veikia</h1>
    <h2>Atnaujinimas</h2> -->
</body>
</html>

