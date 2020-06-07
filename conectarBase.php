<?php
 $moradia = '127.0.0.1';
 $quem = 'root';
 $segredo = '';
 $deposito = 'cursinzin';
 
 $plugavi = mysqli_connect($moradia,$quem,$segredo,$deposito);
 
 if(mysqli_connect_errno($plugavi)){
     echo "Problemas para conectar";
 }else{
     echo "conexão realizada";
 }
 
?>