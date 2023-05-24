<?php
   $vm = readline();//Velocidade Permitida
   $vmot = readline();//Velocidade do motorista
   
   $v10 =($vm * 0.1) + $vm;
   $v20 = ($vm * 0.2) + $vm;
   
   if($vmot <= $vm){
     echo "Sem multa";
   }
  
   else if($vmot > $vm && $vmot <= $v10){
     echo "Multa de R$ 50,00";
   }
   
   else if($vmot > $v10 && $vmot <= $v20){
     echo "Multa de R$ 100,00";
   }
   
   else{
     echo "Multa de R$ 200,00";
   }
 ?>
