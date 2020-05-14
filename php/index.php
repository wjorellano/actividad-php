
<?php
  $nombre = $_POST['nombre'];
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];
  $examen = $_POST['examen_final'];
  $trabajo = $_POST['trabajo_final'];

  $notas = ($nota1 + $nota2 + $nota3)/3;
  $resultado = ($notas*0.35) + ($examen*0.35) + ($trabajo*0.3);


  echo "Estudiante: ".$nombre."<br>";
    echo "Nota: ".$resultado."<br>";
  if ($resultado < 2.9) {
    echo "El estudiande desaprobo el Periodo";
  }else{
    echo "El estudiande aprobo el Periodo";
  }
?>
