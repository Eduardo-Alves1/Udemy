<?php

       /* $dt = new DateTime();

        echo $dt->format("d/m/Y H:i:s");*/

            //somando 15 dias
         /*   setlocale(LC_ALL, "pt_BR.utf-8", "portuguese");
        $dt = new DateTime();

        $periodo = new DateInterval("P15D");

        echo $dt->format("d/m/Y H:i:s");

        $dt->add($periodo);

        echo"<br>";

        echo $dt->format("d/m/Y H:i:s");*/

        
        //hora atual

        date_default_timezone_set("America/Sao_Paulo");

        $data = date("d/m/Y H:i");

        echo $data;

?>