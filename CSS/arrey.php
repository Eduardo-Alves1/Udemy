<?php

//ARRAY BIDIMENCIONAIS

       /* $frutas = array("laranja","melancia","maçãn");

        print_r ($frutas);*/


       /* $carros [0][0] = "GM";
        $carros [0][1] = "COBALT";
        $carros [0][2] = "ONIX";
        $carros [0][3] = "CAMARO";

        $carros [1][0] = "FORD";
        $carros [1][1] = "FIESTA";
        $carros [1][2] = "FUSION";
        $carros [1][3] = "ECO ESPORT";

        echo $carros [0][3];
        echo end($carros[1]); */


      /*  $pessoas = array();

        array_push($pessoas, array('nome'=>'joão','idade'=>25));

        array_push($pessoas, array('nome'=>'Eduardo','idade'=>26));

        print_r($pessoas[0]['nome']);*/

        //JASON

       /* $pessoas = array();

        array_push($pessoas, array('nome'=>'joão','idade'=>25));

        array_push($pessoas, array('nome'=>'Eduardo','idade'=>26));

        
        echo json_encode($pessoas);*/
        //json par $array Name = array('' => , );
//json par $array 
/*
        $json = '[
            {
              "nome": "joão",
              "idade": 25
            },
            {
              "nome": "Eduardo",
              "idade": 26
            }
          ]';

          $data = json_decode($json,true);

          var_dump($data);

*/
         


//CONSTANTE


/*define("SERVIDOR","127.0.0.1");

echo SERVIDOR;*/
/*
define("BANCO_DE_DADOS",['127.0.0.1','root','password','test']);

print_r(BANCO_DE_DADOS);*/


echo PHP_VERSION;

echo "<br>";
echo DIRECTORY_SEPARATOR;















?>