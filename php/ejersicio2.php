<?php

  $nombre = $_POST["nombre"];
  $autosVendidos = $_POST["autosVendidos"];
  $precioTotal = $_POST["precioTotal"];
  $salario = 450000;
  $comisionT = ($autosVendidos * 50000) + ( $precioTotal * 0.05);
  $salarioT = ($salario) + ($comisionT);
  echo "Nombre del Empleado: ".$nombre."<br>";
  echo "Salario total: ".$salarioT."<br>";
 ?>
