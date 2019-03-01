<?php

    //fuFUNÇÕES RECURSIVAS

    $hierarquia = array(
        array(

            'nome_cargo'=>'CEO',
            'subordinado'=> array(
                //inicio:Diretor Comercial
                array(
                    'nome_cargo'=>'Diretor Comercial',
                    'subordinado'=> array(
                        //inicio:Diretor gerente de vendas
                        array (
                            'nome_cargo'=>'Gerente de vendas'
                        )
                       //TERMINO:Diretor gerente de vendas
                    )
                ),
                //Termono:Diretor
                //INICIO DIRETOR FINANCEIRO
                array(
                    'nome_cargo'=>'Diretor financeiro',
                    'subordinado'=> array(
                        //Incio de gerente de contas a pagar
                        array(
                            'nome_cargo'=>'Gerente de contas a pagar',
                            'subordinado'=>array(
                                //inicio de supervisor
                                array(
                                    'nome_cargo'=> 'suppervisor de pagamentos'
                                )
                                //termino de supervisor
                            )
                                ),
                       // termiono de gerente de contas
                       //inicio gerente de compras
                       array(
                           'nome_cargo'=> 'Gerente de compras',
                           'subordinado'=>array(

                            array(
                                'nome_cargo'=>'supervisor de Suprimentos'
                            )
                           )
                       )
                    )
                )
                //TERMINO DIRETOR FINANCEIRO
            )
        )




    );

    function exibe($cargos){
        $html='<ul>';

        foreach($cargos as $cargo){
            $html .="<li>";
            $html .=$cargo['nome_cargo'];

            if(isset($cargo['subordinado']) && count($cargo['subordinado'])>0){
                $html.= exibe($cargo['subordinado']);
            }
            $html .="</li>";
        }

        $html .= '</ul>';

        return $html;

    }
    echo exibe($hierarquia);

?>