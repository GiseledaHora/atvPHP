 <?php
    $num1 = 0; //Instanciar uma variável
    $num2 = 0;


    function somar ($num1,$num2){
        return $num1 + $num2;
    }//fim do método

    function subtrair ($num1,$num2){
        return $num1 - $num2;
    } //fim de método

    function dividir($num1,$num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }
        else{
            return $num1/$num2;
        } 
    }//fim de método 

    function multiplicar ($num1, $num2){
        return $num1 * $num2;
    }//fim de método


    function exercicio02($num1, $num2){
        if(($num1 >= 0 && $num1 <= 10) && ($num2 >= 0 && $num2 <= 10))
        {
            return "A média é: ".($num1+$num2)/2;
        }else{
            return "Informe notas entre 0 e 10!";
        }
    }

    function exercicio3($num1,$num2){
        if($num1 > $num2){
            
            return "O maior número é ".$num1;
        }else if($num1 == $num2){
            return"Os números são iguais";
        }else{
            return"O maior número é ".$num2;
        }
    }
  
    
    function exercicio4($num1,$num2,$num3){
        if (($num1 >= 0 && $num1 <=10) && ($num2 >= 0 && $num2 <= 10) && ($num3 >= 0 && $num3 <= 10)) {
            $exercicio4 = ($num1 + $num2 + $num3) /3;  
        }if ($exercicio4 <= 4) {
            return "Você está de REC, ainda falta".(10 - $exercicio4 + 2);
        }if($exercicio4 >4 && $exercicio4 < 7)  
            return "Você pode fazer a prova FINAL.  Falta" (10 - $exercicio4);
        else {
            return "Você passou para prova FINAL";
        }
    }





?>