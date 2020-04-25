<?php

  $producto = $_POST["producto"];
  $clave = $_POST["clave"];
  $precio = $_POST["precio"];
  $descuento = $_POST["descuento"];

  echo "Producto: ".$producto."<br>";
  echo "Precio original: $".$precio." mil Pesos"."<br>";
    if ($clave == 1) {
    $descuento1 = ($precio * 90)/100;
    echo "Descuento del 10%: $".$descuento1." mil Pesos"."<br>";
  }elseif ($clave == 2) {
    $descuento2 = ($precio * 80)/100;
    echo "Descuento del 20%: $".$descuento2." mil Pesos"."<br>";
  }

 ?>
