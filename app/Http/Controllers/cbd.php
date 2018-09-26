<?php


int dbase_create ( string $Clientes , array $fields );

$def = array(
array("nombres",""),
array("apellidos",""),
array("identificacion",""),
array("correo electronico",""),
array("telefono",""),
array("direccion",""),
);

if (!dbase_create('/tmp/test.dbf', $def)) {
  echo "Error, no se puede crear la base de datos\n";
}

?>