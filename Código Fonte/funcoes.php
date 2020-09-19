<?php
function posi_negat($num){
    if($num>0){
        echo "<p>POSITIVO</p>";
    }elseif($num<0){
        echo "<p>NEGATIVO</p>";
    }else{
        echo "<p>NEUTRO</p>";
    }
}

function par_impar($num){
    if($num%2 == 0){
        echo "<p>PAR</p>";
    }else{
        echo "<p>IMPAR</p>";
    }
}

function tabuada($num){
    for($i=0;$i<=9;$i++){
        echo "<p>" . $num . " x " . $i . " = " . ($num*$i) . "</p>";
    }
}
