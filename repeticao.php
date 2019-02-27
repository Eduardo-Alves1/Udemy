<?php


   /* for($i = 0; $i <1000; $i+=5){

        if($i>=200 && $i < 800) continue;
        if($i===900)break;

        echo $i."<br>";
    }*/


/*echo "<select>";

for($i=date("Y");$i >=date("Y")-100; $i--){
    echo '<option value="'.$i.'">'.$i.'</option>';

}
echo"</select>" */


    $meses = array(
        "Janeiro","Fevereiro","Março",
        "Abril","Maio","Junho","Julho",
        "Agosto","Setembro","Outubro",
        "Novembro","Dezembro"
    );

    foreach ($meses as $index => $mes){
        echo "indice: ".$index."<br>";
        echo "O mês é: ".$mes."<br>";
    }


?>