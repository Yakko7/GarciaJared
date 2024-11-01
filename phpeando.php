<?php
    echo "Hola Mundo como estamos jiji";
    print("Hola mi gente indigena color llanta (yo)");

   // $variableName = "foo";
    //$foo = "bar";

    //echo $foo
    //echo ${variableName};
    //echo $variableName;
?>


<?php

    //$foo = true;
    //$bar
    //if ($foo ==true) {
     //{   echo "Es la variable foo";
    //}

    //for ($i = 0; $j = 0; $i < 10; $j += i, print $i.'', $i++) {
     //   echo $i;

     //}

     //foreach($array as $index => $item) {
       // print $item;
     //}

     //do {
       // print $i;
         //   $i++;
  //} while ($i > 25);

  //function foo($name){
    //return echo 'wasa'.$name;
  //}

  //foo("Bar")

    function variadic_func($nonVariadic, ...$variadic) {
        print 'Parametro no Variadic: '. $nonVariadic;
        foreach($variadic as $value){
            print 'Value: '.$value;
        }
    }
    variadic

    ?>