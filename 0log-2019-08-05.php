<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-05 09:01:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No se puede establecer una conexi�n ya que el equipo de destino deneg� expresamente dicha conexi�n.
 C:\xampp\htdocs\master\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2019-08-05 09:01:28 --> Unable to connect to the database
ERROR - 2019-08-05 09:02:01 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-08-05 10:04:20 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 10:04:20 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 10:04:20 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 10:04:20 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 10:06:48 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 10:06:48 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 10:06:48 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 10:06:48 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 10:06:57 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 10:06:57 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 10:06:57 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 10:06:57 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 10:07:03 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 10:07:03 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 10:07:03 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 10:07:03 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 10:07:36 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 10:07:41 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 10:07:41 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 10:07:41 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 10:07:41 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 10:08:22 --> Query error: Unknown column 'users.first_name' in 'field list' - Invalid query: SELECT `bitacora`.`id_bitacora`, `bitacora`.`grupo`, `bitacora`.`cliente`, `bitacora`. `descripcion`, `bitacora`.`archivo1`, `bitacora`.`observacion`, DATE_ADD(bitacora.fecha_insercion, INTERVAL -5 HOUR), DATE_ADD(bitacora.fecha_modificar, INTERVAL -5 HOUR), `users`.`first_name`
FROM `bitacora`
ORDER BY `id_bitacora` DESC
ERROR - 2019-08-05 10:08:50 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 10:08:50 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 10:08:50 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 10:08:51 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 10:10:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'DATE_ADD(bitacora.fecha_modificar, INTERVAL -5 HOUR), `users`.`first_name`
FROM ' at line 2 - Invalid query: SELECT `bitacora`.`id_bitacora`, `bitacora`.`grupo`, `bitacora`.`cliente`, `bitacora`. `descripcion`, `bitacora`.`archivo1`, `bitacora`.`observacion`, DATE_ADD(bitacora.fecha_insercion, INTERVAL -5 HOUR)
DATE_ADD(bitacora.fecha_modificar, INTERVAL -5 HOUR), `users`.`first_name`
FROM `bitacora`
JOIN `users` ON `bitacora`.`id`=`users`.`id`
ORDER BY `id_bitacora` DESC
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:19 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:11:20 --> Severity: Notice --> Undefined property: stdClass::$fecha_modificar C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 97
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:12:54 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:24 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:13:25 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:23:23 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:24:59 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:33 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:25:34 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:26:43 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:27:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:28:17 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:29:35 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 99
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:02 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:43:36 --> Severity: Notice --> Undefined property: stdClass::$fecha_insercion C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$id_bitacora C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:44:38 --> Severity: Notice --> Undefined property: stdClass::$grupo C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 94
ERROR - 2019-08-05 10:45:35 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 10:45:35 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 10:45:35 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 10:45:35 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 10:45:52 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:04:53 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 11:04:53 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 11:04:53 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 11:04:53 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:05:08 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 11:05:08 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 11:05:08 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 11:05:08 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:06:39 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-08-05 11:06:49 --> Página no encontrada: ClienteSeguimiento/index
ERROR - 2019-08-05 11:06:49 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 11:06:49 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 11:06:56 --> Página no encontrada: ClienteSeguimiento/index
ERROR - 2019-08-05 11:06:57 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 11:09:28 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:10:38 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:10:45 --> Página no encontrada: Bitacora/obtener
ERROR - 2019-08-05 11:10:45 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 11:13:15 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\Bitacora\editar.php 40
ERROR - 2019-08-05 11:13:15 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 11:13:15 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 11:13:15 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 11:13:15 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:16:12 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\Bitacora\agregarBitacora.php 53
ERROR - 2019-08-05 11:16:12 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:17:20 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\Bitacora\editar.php 40
ERROR - 2019-08-05 11:17:20 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 11:17:20 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 11:17:20 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 11:17:20 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:18:28 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\Bitacora\editar.php 40
ERROR - 2019-08-05 11:18:28 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 11:18:28 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 11:18:28 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 11:18:28 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:18:49 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\Bitacora\editar.php 40
ERROR - 2019-08-05 11:18:49 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 11:18:49 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 11:18:49 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 11:18:49 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:18:52 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\Bitacora\editar.php 40
ERROR - 2019-08-05 11:18:52 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 11:18:52 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 11:18:52 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 11:18:52 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 11:19:06 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\Bitacora\editar.php 40
ERROR - 2019-08-05 11:19:06 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 11:19:06 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 11:19:06 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 11:19:06 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 12:28:00 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\Bitacora\editar.php 40
ERROR - 2019-08-05 12:28:00 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-08-05 12:28:00 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-08-05 12:28:00 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-08-05 12:28:00 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 12:28:51 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-08-05 12:28:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'DATE_ADD(bitacora.fecha_modificar, INTERVAL -5 HOUR), `users`.`first_name`
FROM ' at line 2 - Invalid query: SELECT `bitacora`.`id_bitacora`, `bitacora`.`grupo`, `bitacora`.`cliente`, `bitacora`. `descripcion`, `bitacora`.`archivo1`, `bitacora`.`observacion`, DATE_ADD(bitacora.fecha_insercion, INTERVAL -5 HOUR)
DATE_ADD(bitacora.fecha_modificar, INTERVAL -5 HOUR), `users`.`first_name`
FROM `bitacora`
JOIN `users` ON `bitacora`.`id`=`users`.`id`
ORDER BY `id_bitacora` DESC
ERROR - 2019-08-05 13:01:05 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:11:09 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-08-05 13:11:14 --> Página no encontrada: Bitacora/refacciones
ERROR - 2019-08-05 13:11:14 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 13:12:03 --> Página no encontrada: Bitacora/refacciones
ERROR - 2019-08-05 13:12:03 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 13:19:38 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2019-08-05 13:22:05 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 13:22:05 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 13:22:05 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 13:22:05 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 13:22:05 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:22:10 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 13:22:10 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 13:22:10 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 13:22:10 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 13:22:10 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:25:00 --> Severity: error --> Exception: Class 'BitacoraPojo' not found C:\xampp\htdocs\master\application\models\BitacoraRefacciones\BitacoraRefaccionesModelo.php 184
ERROR - 2019-08-05 13:26:40 --> Página no encontrada: BitacoraRefacciones/obtener
ERROR - 2019-08-05 13:26:40 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 13:26:48 --> Severity: Notice --> Undefined property: BitacoraRefacciones::$BitacoraModelo C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:26:48 --> Severity: error --> Exception: Call to a member function getCliente() on null C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:27:45 --> Severity: Notice --> Undefined property: BitacoraRefacciones::$BitacoraModelo C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:27:45 --> Severity: error --> Exception: Call to a member function getCliente() on null C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:27:52 --> Severity: Notice --> Undefined property: BitacoraRefacciones::$BitacoraModelo C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:27:52 --> Severity: error --> Exception: Call to a member function getCliente() on null C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:27:53 --> Severity: Notice --> Undefined property: BitacoraRefacciones::$BitacoraModelo C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:27:53 --> Severity: error --> Exception: Call to a member function getCliente() on null C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:28:11 --> Severity: Notice --> Undefined property: BitacoraRefacciones::$BitacoraModelo C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:28:11 --> Severity: error --> Exception: Call to a member function getCliente() on null C:\xampp\htdocs\master\application\controllers\BitacoraRefacciones.php 187
ERROR - 2019-08-05 13:28:56 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:29:06 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:29:31 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:29:36 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:29:47 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:38:25 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-08-05 13:38:37 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:38:47 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 13:38:47 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:38:56 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 13:38:56 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 13:40:02 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-08-05 13:40:06 --> Página no encontrada: Bitacora/refacciones
ERROR - 2019-08-05 13:40:07 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 15:31:12 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 15:34:10 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 15:34:16 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 15:34:42 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 15:35:19 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 15:36:26 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 15:36:41 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 15:36:57 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 15:40:38 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-08-05 16:03:36 --> Página no encontrada: BitacoraRefacciones/obtener
ERROR - 2019-08-05 16:03:36 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 16:03:40 --> Página no encontrada: BitacoraRefacciones/obtener
ERROR - 2019-08-05 16:03:40 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 16:03:55 --> Página no encontrada: BitacoraRefacciones/obtener
ERROR - 2019-08-05 16:03:55 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 16:05:20 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:05:31 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:05:54 --> Página no encontrada: BitacoraRefacciones/obtener
ERROR - 2019-08-05 16:05:54 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 16:05:58 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:05:58 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:06:16 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:06:16 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:06:37 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:06:37 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:07:15 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:07:15 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:07:15 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:07:15 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:07:15 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:07:53 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:08:18 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:08:18 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:08:18 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:08:18 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:08:18 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:10:03 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:10:03 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:10:04 --> Página no encontrada: BitacoraRefacciones/obtener
ERROR - 2019-08-05 16:10:04 --> Página no encontrada: Assets/images
ERROR - 2019-08-05 16:10:10 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:10:10 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:11:00 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:11:00 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:11:27 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:11:27 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:11:27 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:11:27 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:11:27 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:11:41 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:11:41 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:11:41 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:11:41 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:11:41 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:11:52 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:11:52 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:11:52 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:11:52 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:11:52 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:11:53 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:11:53 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:11:53 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:11:53 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:11:53 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:11:53 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:11:53 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:11:53 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:11:53 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:11:53 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:11:54 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:11:54 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:11:54 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:11:54 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:11:54 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:16 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:16 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:12:16 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:12:16 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:12:17 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:17 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:17 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:12:17 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:12:17 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:12:18 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:41 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:41 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 16:12:41 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 16:12:41 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 16:12:42 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:55 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:55 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:56 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:56 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:56 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:56 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:56 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:56 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:57 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:57 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:57 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:57 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:57 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:57 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:57 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:57 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:57 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:57 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:58 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:58 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:58 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:58 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:58 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:58 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:58 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:58 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:58 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:58 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:59 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:59 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:59 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:59 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:59 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:59 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:59 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:59 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:59 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:12:59 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:12:59 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:13:00 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:13:00 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:13:00 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:13:00 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:13:00 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:13:13 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:13:13 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:13:18 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:13:19 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:30:34 --> Severity: Notice --> Undefined property: stdClass::$fotopost C:\xampp\htdocs\master\application\views\Verificacion\editar.php 314
ERROR - 2019-08-05 16:30:34 --> Severity: Notice --> Undefined property: stdClass::$fotopostpdf C:\xampp\htdocs\master\application\views\Verificacion\editar.php 315
ERROR - 2019-08-05 16:30:34 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:42:37 --> Severity: Notice --> Undefined property: stdClass::$fotopost C:\xampp\htdocs\master\application\views\Verificacion\editar.php 314
ERROR - 2019-08-05 16:42:37 --> Severity: Notice --> Undefined property: stdClass::$fotopostpdf C:\xampp\htdocs\master\application\views\Verificacion\editar.php 315
ERROR - 2019-08-05 16:42:37 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:42:38 --> Severity: Notice --> Undefined property: stdClass::$fotopost C:\xampp\htdocs\master\application\views\Verificacion\editar.php 314
ERROR - 2019-08-05 16:42:38 --> Severity: Notice --> Undefined property: stdClass::$fotopostpdf C:\xampp\htdocs\master\application\views\Verificacion\editar.php 315
ERROR - 2019-08-05 16:42:38 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:52:05 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 16:52:05 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:52:13 --> Severity: Notice --> Undefined property: stdClass::$fotopost C:\xampp\htdocs\master\application\views\Verificacion\editar.php 314
ERROR - 2019-08-05 16:52:13 --> Severity: Notice --> Undefined property: stdClass::$fotopostpdf C:\xampp\htdocs\master\application\views\Verificacion\editar.php 315
ERROR - 2019-08-05 16:52:13 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:54:55 --> Severity: Notice --> Undefined property: stdClass::$fotopost C:\xampp\htdocs\master\application\views\Verificacion\editar.php 314
ERROR - 2019-08-05 16:54:55 --> Severity: Notice --> Undefined property: stdClass::$fotopostpdf C:\xampp\htdocs\master\application\views\Verificacion\editar.php 315
ERROR - 2019-08-05 16:54:55 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:54:57 --> Severity: Notice --> Undefined property: stdClass::$fotopost C:\xampp\htdocs\master\application\views\Verificacion\editar.php 314
ERROR - 2019-08-05 16:54:57 --> Severity: Notice --> Undefined property: stdClass::$fotopostpdf C:\xampp\htdocs\master\application\views\Verificacion\editar.php 315
ERROR - 2019-08-05 16:54:58 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:58:16 --> Severity: Notice --> Undefined property: stdClass::$fotopost C:\xampp\htdocs\master\application\views\Verificacion\editar.php 314
ERROR - 2019-08-05 16:58:16 --> Severity: Notice --> Undefined property: stdClass::$fotopostpdf C:\xampp\htdocs\master\application\views\Verificacion\editar.php 315
ERROR - 2019-08-05 16:58:16 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 16:58:23 --> Severity: Notice --> Undefined property: stdClass::$fotopost C:\xampp\htdocs\master\application\views\Verificacion\editar.php 315
ERROR - 2019-08-05 16:58:23 --> Severity: Notice --> Undefined property: stdClass::$fotopostpdf C:\xampp\htdocs\master\application\views\Verificacion\editar.php 316
ERROR - 2019-08-05 16:58:23 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:00:26 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:00:45 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:00:45 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:04:50 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:04:50 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 51
ERROR - 2019-08-05 17:04:50 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 60
ERROR - 2019-08-05 17:04:50 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 68
ERROR - 2019-08-05 17:04:50 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:05:00 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:05:00 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:05:27 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-08-05 17:05:31 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:05:31 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:06:02 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:06:02 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:06:04 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:06:04 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:06:10 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:06:10 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:06:10 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:06:32 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:06:32 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:06:36 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:06:36 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:06:42 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:06:43 --> Página no encontrada: Assets/font
ERROR - 2019-08-05 17:08:32 --> Severity: Notice --> Undefined variable: clienteCombo C:\xampp\htdocs\master\application\views\BitacoraRefacciones\editarBitacoraRefacciones.php 40
ERROR - 2019-08-05 17:08:32 --> Página no encontrada: Assets/font
