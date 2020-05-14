<?php

  $producto = $_POST["producto"];
  $clave = $_POST["clave"];
  $precio = $_POST["precio"];


  echo "Producto: ".$producto."<br>";
  echo "Precio original: $".$precio." mil Pesos"."<br>";
    if ($clave == 1) {
    $desc1 = ($precio * 90)/100;
    echo "Descuento del 10%: $".$desc1." mil Pesos"."<br>";
  }elseif ($clave == 2) {
    $desc2 = ($precio * 80)/100;
    echo "Descuento del 20%: $".$desc2." mil Pesos"."<br>";
  }

 ?>
