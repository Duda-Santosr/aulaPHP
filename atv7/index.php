<?php

    $bebida=4;
    switch($bebida){
        case 1:
            $bebida = "Água";
            $preço = 2.00;
            break;
    
        case 2:
            $bebida = "Refrigerante";
            $preço = 4.00;
            break;

        case 3:
            $bebida ="Suco";
            $preço = 3.00;
            break;

        default:
        echo "Opção inválida";
        exit;

    }

    echo "<p>Você escolheu:$bebida</p>";
    echo "Preço: ". number_format($preço, 2, ',', ',');
  
?>