<?php

  $nombre = $_POST["nombre"];
  $peso = $_POST["peso"];
  $estatura = $_POST["estatura"];

  $imc = ($peso)/($estatura*$estatura);

  echo "Paciente: ".$nombre."<br>";
  echo "Masa corporal: ".$imc."<br>";
  if($imc<18.5){
    echo "Por debajo del peso";
  }else
  if($imc>=18.5 && $imc<=24.9){
    echo "Saludable";
  }else
  if($imc>=25 && $imc<=29.9){
      echo "Con sobrepeso";
  }else
  if($imc>=30 && $imc<=39.9){
      echo "Obeso";
  }else
  if($imc>=40){
    echo "obesidad morbida";
  }
 ?>
