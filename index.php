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

        
        // $vardas = "Arnas";
        // $pavarde = "Daugela";
        // $gimimo_metai = 1988;
        // $sia_data = date('Y');

        // $amzius = $sia_data - $gimimo_metai;

        // echo "<h1>" . "Aš esu $vardas $pavarde. Man yra $amzius metai(ų)." . "</h1>";

        // echo "<hr>";

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
        // Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
        
        $s = rand(1, 6);

        echo "<h$s>$s</h$s>";

        echo "<hr>";

        // 7 uzduotis
        // Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

        $skaicius1 = rand(-10, 10);
        $skaicius2 = rand(-10, 10);
        $skaicius3 = rand(-10, 10);

        echo $skaicius1 . " " . $skaicius2 . " " . $skaicius3;

        echo "<br>";

        if ($skaicius1 < 0) {
            $color1 = "green";
          } elseif ($skaicius1 == 0) {
            $color1 = "red";
          } else {
            $color1 = "blue";
          }
          
          if ($skaicius2 < 0) {
            $color2 = "green";
          } elseif ($skaicius2 == 0) {
            $color2 = "red";
          } else {
            $color2 = "blue";
          }
          
          if ($skaicius3 < 0) {
            $color3 = "green";
          } elseif ($skaicius3 == 0) {
            $color3 = "red";
          } else {
            $color3 = "blue";
          }
          
          echo "<span style='color: $color1;'>$skaicius1</span>, <span style='color: $color2;'>$skaicius2</span>, <span style='color: $color3;'>$skaicius3</span>";

          echo "<hr>";


          // 2-1 uzduotis

        //   Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

        $vardas = "Jonas";
        $pavarde = "Jonaitis";

        if (strlen($vardas) < strlen($pavarde)) {
            echo $vardas;
        } else {
            echo $pavarde;
        }

        echo "<hr>";

        // 2-2 uzduotis

        // Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

        $vardas = "Brad";
        $pavarde = "Pitt";

        echo strtoupper($vardas);
        echo strtolower($pavarde);

        echo "<hr>";


        // 2-3 uzduotis

        // Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

        $vardas = "Brad";
        $pavarde = "Pitt";
        $inicialai = substr($vardas,0,1) . substr($pavarde,0,1);
        echo $inicialai;

        echo "<hr>";

        // 2-4 uzduotis

        // Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

        $vardas = "Brad";
        $pavarde = "Pitt";
        $inicialai = substr($vardas, -3) . substr($pavarde, -3);
        echo $inicialai;

        echo "<hr>";

        // 2-5 uzduotis

        // Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

        $name = "An American in Paris";
        $name1 = strtolower($name);
        $replaces = array("a");
        $to = array("*");
        echo str_replace($replaces, $to, $name1);  

        echo "<hr>";
        
        // 2-6 uzduotis

        // Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

        $name = "An American in Paris";
        $skaicius = substr_count(strtolower($name), 'a');
        echo $skaicius;


        // 2-7 uzduotis
        
        // Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

        

        // ciklai PHP


        // $text = "labas";

        // for ($i=0; $i < strlen($text); $i++) { 
        //     echo $text[$i] . "<br>";
        // }

        // echo "<hr>";

        // foreach ($arr as $key => $letter) {
        //     echo $letter . "<br>";
        // }


    ?>
    <!-- <h1>Va ir veikia</h1>
    <h2>Atnaujinimas</h2> -->
</body>
</html>

