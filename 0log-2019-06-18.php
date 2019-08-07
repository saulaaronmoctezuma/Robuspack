<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-06-18 08:24:19 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-06-18 11:38:54 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-06-18 11:45:18 --> Página no encontrada: Assets/font
ERROR - 2019-06-18 12:21:17 --> Página no encontrada: Main/sad
ERROR - 2019-06-18 12:21:18 --> Página no encontrada: Assets/images
ERROR - 2019-06-18 12:21:18 --> Página no encontrada: Assets/images
ERROR - 2019-06-18 12:24:52 --> Página no encontrada: Main/jj
ERROR - 2019-06-18 12:24:52 --> Página no encontrada: Assets/images
ERROR - 2019-06-18 13:27:14 --> Página no encontrada: Assets/font
ERROR - 2019-06-18 14:52:51 --> Página no encontrada: Assets/font
ERROR - 2019-06-18 14:52:51 --> Página no encontrada: Assets/font
ERROR - 2019-06-18 16:33:28 --> Query error: Unknown column 'ecoleccion_datos.vendedor' in 'field list' - Invalid query: SELECT `recoleccion_datos`.`id_recolecion_datos`, `ecoleccion_datos`.`vendedor`, `recoleccion_datos`.`identificador`, `recoleccion_datos`.`nombre_empresa`, `recoleccion_datos`.`estado`, `recoleccion_datos`.`ciudad`, `recoleccion_datos`.`domicilio`, `recoleccion_datos`.`nombre`, `recoleccion_datos`.`cargo`, `recoleccion_datos`.`email`, `recoleccion_datos`.`tel`, `recoleccion_datos`.`nombre2`, `recoleccion_datos`.`cargo2`, `recoleccion_datos`.`email2`, `recoleccion_datos`.`tel2`, `recoleccion_datos`.`comentarios`, `users`.`first_name`
FROM `recoleccion_datos`
JOIN `users` ON `recoleccion_datos`.`id`=`users`.`id`
ORDER BY `recoleccion_datos`.`identificador` ASC
ERROR - 2019-06-18 17:00:25 --> Query error: Unknown column 'recoleccion_datos.tipo_de_cliente' in 'field list' - Invalid query: SELECT `recoleccion_datos`.`id_recolecion_datos`, `recoleccion_datos`.`vendedor`, `recoleccion_datos`.`nivel`, `recoleccion_datos`.`tipo_de_cliente`, `recoleccion_datos`.`identificador`, `recoleccion_datos`.`nombre_empresa`, `recoleccion_datos`.`estado`, `recoleccion_datos`.`ciudad`, `recoleccion_datos`.`domicilio`, `recoleccion_datos`.`nombre`, `recoleccion_datos`.`cargo`, `recoleccion_datos`.`email`, `recoleccion_datos`.`tel`, `recoleccion_datos`.`nombre2`, `recoleccion_datos`.`cargo2`, `recoleccion_datos`.`email2`, `recoleccion_datos`.`tel2`, `recoleccion_datos`.`comentarios`, `users`.`first_name`
FROM `recoleccion_datos`
JOIN `users` ON `recoleccion_datos`.`id`=`users`.`id`
ORDER BY `recoleccion_datos`.`identificador` ASC
ERROR - 2019-06-18 17:00:51 --> Severity: error --> Exception: Too few arguments to function RecoleccionDatosPojo::__construct(), 17 passed in C:\xampp\htdocs\master\application\models\RecoleccionDatos\RecoleccionDatosModelo.php on line 117 and exactly 19 expected C:\xampp\htdocs\master\application\models\RecoleccionDatos\RecoleccionDatosPojo.php 35
ERROR - 2019-06-18 17:01:54 --> Severity: error --> Exception: Too few arguments to function RecoleccionDatosPojo::__construct(), 17 passed in C:\xampp\htdocs\master\application\models\RecoleccionDatos\RecoleccionDatosModelo.php on line 117 and exactly 18 expected C:\xampp\htdocs\master\application\models\RecoleccionDatos\RecoleccionDatosPojo.php 34
ERROR - 2019-06-18 17:01:55 --> Severity: error --> Exception: Too few arguments to function RecoleccionDatosPojo::__construct(), 17 passed in C:\xampp\htdocs\master\application\models\RecoleccionDatos\RecoleccionDatosModelo.php on line 117 and exactly 18 expected C:\xampp\htdocs\master\application\models\RecoleccionDatos\RecoleccionDatosPojo.php 34
