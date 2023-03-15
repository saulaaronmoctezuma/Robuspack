<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-01 11:16:03 --> Página no encontrada: Assets/login
ERROR - 2021-07-01 11:16:03 --> Página no encontrada: Assets/login
ERROR - 2021-07-01 11:16:03 --> Página no encontrada: Assets/login
ERROR - 2021-07-01 11:16:03 --> Página no encontrada: Assets/login
ERROR - 2021-07-01 11:16:03 --> Página no encontrada: Assets/login
ERROR - 2021-07-01 11:16:03 --> Página no encontrada: Assets/login
ERROR - 2021-07-01 11:16:03 --> Página no encontrada: Assets/login
ERROR - 2021-07-01 11:18:31 --> Severity: Notice --> Trying to get property 'qty' of non-object C:\xampp\htdocs\master\application\models\Model_products.php 286
ERROR - 2021-07-01 11:40:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`id_pedimento`, `pedimento`.`numero`, sum(pedimento.cantidad) as cantidad, `ped' at line 1 - Invalid query: SELECT `DISTINCT` `pedimento`.`id_pedimento`, `pedimento`.`numero`, sum(pedimento.cantidad) as cantidad, `pedimento`.`activo`, `pedimento`.`fecha_aduana`, `pedimento`.`fecha_ultimo_movimiento`, `pedimento`.`id_producto`, `pedimento`.`id_entradas`, `pedimento`.`fecha_insercion`, `pedimento`.`fecha_modificacion`
FROM `pedimento`
JOIN `products` ON `pedimento`.`id_producto`=`products`.`id`
WHERE `pedimento`.`numero` = '194317649001408'
AND `products`.`sku` = '80426'
GROUP BY `pedimento`.`id_producto`, `pedimento`.`numero`
ORDER BY `products`.`id` ASC
ERROR - 2021-07-01 11:40:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`id_pedimento`, `pedimento`.`numero`, sum(pedimento.cantidad) as cantidad, `ped' at line 1 - Invalid query: SELECT `DISTINCT` `pedimento`.`id_pedimento`, `pedimento`.`numero`, sum(pedimento.cantidad) as cantidad, `pedimento`.`activo`, `pedimento`.`fecha_aduana`, `pedimento`.`fecha_ultimo_movimiento`, `pedimento`.`id_producto`, `pedimento`.`id_entradas`, `pedimento`.`fecha_insercion`, `pedimento`.`fecha_modificacion`
FROM `pedimento`
JOIN `products` ON `pedimento`.`id_producto`=`products`.`id`
WHERE `pedimento`.`numero` = '194317649001408'
AND `products`.`sku` = '80426'
GROUP BY `pedimento`.`id_producto`, `pedimento`.`numero`
ORDER BY `products`.`id` ASC
ERROR - 2021-07-01 11:40:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.`id_pedimento`, `pedimento`.`numero`, sum(pedimento.cantidad) as cantidad, `ped' at line 1 - Invalid query: SELECT `DISTINCT` `pedimento`.`id_pedimento`, `pedimento`.`numero`, sum(pedimento.cantidad) as cantidad, `pedimento`.`activo`, `pedimento`.`fecha_aduana`, `pedimento`.`fecha_ultimo_movimiento`, `pedimento`.`id_producto`, `pedimento`.`id_entradas`, `pedimento`.`fecha_insercion`, `pedimento`.`fecha_modificacion`
FROM `pedimento`
JOIN `products` ON `pedimento`.`id_producto`=`products`.`id`
WHERE `pedimento`.`numero` = '204317640001080'
AND `products`.`sku` = '80426'
GROUP BY `pedimento`.`id_producto`, `pedimento`.`numero`
ORDER BY `products`.`id` ASC
ERROR - 2021-07-01 12:01:16 --> Severity: error --> Exception: Call to undefined method Model_orders::get_sub_category() C:\xampp\htdocs\master\application\controllers\Orders.php 881
ERROR - 2021-07-01 12:03:00 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::group_by() C:\xampp\htdocs\master\application\models\Model_orders.php 335
ERROR - 2021-07-01 12:05:34 --> Severity: error --> Exception: Call to a member function result() on string C:\xampp\htdocs\master\application\controllers\Orders.php 881
ERROR - 2021-07-01 12:07:00 --> Severity: error --> Exception: Call to undefined method Model_orders::get_where() C:\xampp\htdocs\master\application\models\Model_orders.php 335
ERROR - 2021-07-01 12:07:18 --> Severity: error --> Exception: Call to undefined method Model_orders::get_where() C:\xampp\htdocs\master\application\models\Model_orders.php 337
ERROR - 2021-07-01 12:07:39 --> Severity: error --> Exception: Call to undefined method Model_orders::get_where() C:\xampp\htdocs\master\application\models\Model_orders.php 337
ERROR - 2021-07-01 12:07:49 --> Severity: error --> Exception: Call to undefined method Model_orders::get_where() C:\xampp\htdocs\master\application\models\Model_orders.php 336
ERROR - 2021-07-01 12:08:00 --> Severity: error --> Exception: Call to undefined method Model_orders::get_where() C:\xampp\htdocs\master\application\models\Model_orders.php 336
ERROR - 2021-07-01 12:09:10 --> Severity: Notice --> Undefined property: CI_DB_mysqli_driver::$distinct C:\xampp\htdocs\master\application\models\Model_orders.php 339
ERROR - 2021-07-01 12:09:10 --> Severity: error --> Exception: Call to a member function order_by() on null C:\xampp\htdocs\master\application\models\Model_orders.php 339
ERROR - 2021-07-01 12:12:02 --> Severity: Notice --> Undefined variable: query C:\xampp\htdocs\master\application\models\Model_orders.php 353
ERROR - 2021-07-01 12:12:02 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\master\application\controllers\Orders.php 881
ERROR - 2021-07-01 12:15:47 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::result() C:\xampp\htdocs\master\application\controllers\Orders.php 881
ERROR - 2021-07-01 12:16:08 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::result() C:\xampp\htdocs\master\application\controllers\Orders.php 881
ERROR - 2021-07-01 12:17:00 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_result::where() C:\xampp\htdocs\master\application\models\Model_orders.php 342
ERROR - 2021-07-01 16:27:37 --> Página no encontrada: Assets/images
ERROR - 2021-07-01 16:39:21 --> Página no encontrada: Assets/images
ERROR - 2021-07-01 16:40:27 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 90 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 145 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:41:33 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 89 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 144 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:42:36 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 67 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 133 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:44:07 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:44:30 --> Severity: Notice --> Undefined variable: DSAF C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:44:30 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:44:30 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 90 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 156 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:44:43 --> Severity: Notice --> Undefined property: stdClass::$DSAF C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:44:43 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 90 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 156 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:44:47 --> Página no encontrada: ClienteRefacciones/agrega
ERROR - 2021-07-01 16:44:47 --> Página no encontrada: Assets/images
ERROR - 2021-07-01 16:44:47 --> Página no encontrada: Assets/images
ERROR - 2021-07-01 16:44:49 --> Severity: Notice --> Undefined property: stdClass::$DSAF C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:44:49 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 90 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 156 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:45:49 --> Severity: Notice --> Undefined property: stdClass::$DSAF C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:45:49 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 90 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 156 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:45:51 --> Severity: Notice --> Undefined property: stdClass::$DSAF C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:45:51 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 90 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 156 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:46:07 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:46:07 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 90 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 156 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 113
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:40 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:41 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:53 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:48:54 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:42 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:42 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:42 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:42 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 156
ERROR - 2021-07-01 16:50:43 --> Severity: Notice --> Undefined property: stdClass::$precio_del_inserto_11 C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php 158
ERROR - 2021-07-01 16:50:59 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 69 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 135 and exactly 91 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 91
ERROR - 2021-07-01 16:51:50 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 69 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 135 and exactly 70 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 84
ERROR - 2021-07-01 16:51:51 --> Severity: error --> Exception: Too few arguments to function ClienteRefaccionesPojo::__construct(), 69 passed in C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesModelo.php on line 135 and exactly 70 expected C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 84
ERROR - 2021-07-01 16:53:04 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC), expecting end of file C:\xampp\htdocs\master\application\models\ClienteRefacciones\ClienteRefaccionesPojo.php 143
ERROR - 2021-07-01 16:59:13 --> Página no encontrada: Assets/images
