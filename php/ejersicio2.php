<?php

  $nombre = $_POST["nombre"];
  $autosVendidos = $_POST["autosVendidos"];
  $precioTotal = $_POST["precioTotal"];

  $salarioMinimo = 450000;
  for ($i=0; $i < $autosVendidos; $i++) {
  $comision =  50000 * $autosVendidos;
  }
  $porcentaje = ($precioTotal * 5)/100;
  echo "Nombre del Empleado: ".$nombre."<br>";
  echo "comision total: ".$comision."<br>";
  echo "5% por las venta en total: ".$porcentaje."<br>";

  // $total = ($autosVendidos * 5)/100;

 ?>
