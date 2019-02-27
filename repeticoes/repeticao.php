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


   /* $meses = array(
        "Janeiro","Fevereiro","Março",
        "Abril","Maio","Junho","Julho",
        "Agosto","Setembro","Outubro",
        "Novembro","Dezembro"
    );

    foreach ($meses as $index => $mes){
        echo "indice: ".$index."<br>";
        echo "O mês é: ".$mes."<br>";
    }*/

/*
        $codicao = true;

        while($codicao){

            $numero = rand(1,10);

            if($numero=== 3){

                echo "tres";
                $condicao = false;
            }

            echo $numero . " ";
            
        } */


        $total = 150;
        $desconto = 0.9;

        do{
            $total *= $desconto;

        }while($total > 100);

        echo $total;

        


?>