<?php
require "consulta.php";
$usuario = new Consulta();
$salida = "";
$salida .= "<table>";
$salida .= "<thead> <th>ID</th> <th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th><th>DEPENDENCIA</th><th>SEXO</th><th>RANGO DE EDAD</th><th>TELÉFONO</th><th>EMAIL</th><th>PROBLEMÁTICA</th><th>OBSERVACIÓN DELA PROBLEMÁTICA</th><th>PROPUESTA</th></thead>";
foreach($usuario->buscar() as $r){
    $salida .= "<tr> <td>".$r->id."</td> <td>".$r->nombre."</td><td>".$r->ap."</td><td>".$r->am."</td><td>".$r->dependencia."</td><td>".$r->sexo."</td><td>".$r->rangoEdad."</td><td>".$r->telefono."</td><td>".$r->correo."</td><td>".$r->tpoProblematica."</td><td>".$r->problematicaObser."</td><td>".$r->propuesta."</td></tr>";
}
$salida .= "</table>";
header('Content-type: application/vnd-ms-excel; charset=utf-8');
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
header("Content-Disposition: attachment; filename=$file");
header("Content-Disposition: attachment; filename=usuarios_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $salida;