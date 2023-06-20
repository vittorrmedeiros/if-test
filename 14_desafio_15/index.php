<?php

 $nome = "José";
 $idade = 18;
 $maioridade = 18;
 $empregado = false;

 if($maioridade >= $idade) {
    echo "$nome é maior de idade. <br>"; 
 } else {
    echo "$nome é menor de idade. <br>";
 }

 if($empregado == true) {
    echo "$nome é empregado. <br>";
 } else {
    echo "$nome é desempregado. <br>";
 }
 
?>