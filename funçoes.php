
<?php
function soma(){
        $s=0;
        $p=func_get_args();//pega os valores passado e armazena em um vetor
        $tot=func_num_args();//mostra a quantidade de valores passados
        for($i=0;$i<$tot;$i++){
            $s=$s+$p[$i];
        }
        return $s;
    }
    
    function test(&$x){
        $x=$x+2;
        echo "$x <br>";
    }
    ?>