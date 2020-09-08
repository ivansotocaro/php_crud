<?php

function conver($valor){

  $valor = $valor;

  $precio = number_format($valor, 2, ',', '.');
  
  return $precio;

}



?>