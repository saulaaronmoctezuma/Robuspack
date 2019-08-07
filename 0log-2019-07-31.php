<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-07-31 08:42:53 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-07-31 09:14:15 --> Severity: Notice --> Undefined property: ClienteRefacciones::$upload C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 527
ERROR - 2019-07-31 09:14:15 --> Severity: error --> Exception: Call to a member function initialize() on null C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 527
ERROR - 2019-07-31 09:17:08 --> Severity: Notice --> Undefined property: ClienteRefacciones::$load C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 15
ERROR - 2019-07-31 09:17:08 --> Severity: error --> Exception: Call to a member function library() on null C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 15
ERROR - 2019-07-31 09:17:43 --> Severity: Notice --> Undefined property: ClienteRefacciones::$load C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 15
ERROR - 2019-07-31 09:17:43 --> Severity: error --> Exception: Call to a member function library() on null C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 15
ERROR - 2019-07-31 09:18:53 --> Query error: Unknown column 'confirmación_orden_compra' in 'field list' - Invalid query: UPDATE `venta` SET `grupo` = 'NO APLICA', `cliente` = 'Acer Hidalgo', `referencia` = 'Acer Hidalgo', `cantidad_maxima` = '0', `precio_unitario` = '0', `vida_util_dias` = ' ', `periodo_surtimiento` = 'Semanal', `periodo_surtimiento_vida_util` = NULL, `cantidad_minima` = '0', `paqueteria` = 'Tres guerras', `tipo_entrega` = 'Domicilio prepagado', `dias_credito` = 'Ninguno', `pulgadas` = '0', `diametro_rod_ml` = '0.00', `maquina_cliente` = NULL, `capacitacion` = '50', `capacitacion_fecha` = '0000-00-00', `piezas_juego` = '0', `costo_juego` = '0', `ciudad_planta` = '19', `observacion` = '19', `marca_maquina` = 'WARD V', `contacto` = 'Transline NT/ RS', `tipo_maquina` = 'FRDC', `formato` = 'J4500', `ancho` = '100', `troquel` = 'Sí', `uso_de_cfdi` = 'G01 Adquisión de mercancías', `metodo_pago` = '01-Efectivo', `fecha_visita` = '2019-06-08', `fecha_seguimiento` = '2019-06-05', `golpes_maquina` = '0', `confirmación_orden_compra` = 'Consignación', `fecha_ultima_factura` = '', `fecha_busqueda` = NULL
WHERE `id_venta` = '32'
ERROR - 2019-07-31 09:22:20 --> Página no encontrada: ClienteRefacciones/actuazalizar
ERROR - 2019-07-31 09:22:20 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 09:22:20 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 11:27:13 --> Severity: Warning --> imagecreatefrompng(http://robuspack.com/img/logo_blanco.png): failed to open stream: HTTP request failed! HTTP/1.1 404 Not Found
 C:\xampp\htdocs\master\application\controllers\ExportarExcel.php 35
ERROR - 2019-07-31 11:27:13 --> Severity: Warning --> imagesx() expects parameter 1 to be resource, bool given C:\xampp\htdocs\master\application\libraries\PHPExcel\Worksheet\MemoryDrawing.php 107
ERROR - 2019-07-31 11:27:13 --> Severity: Warning --> imagesy() expects parameter 1 to be resource, bool given C:\xampp\htdocs\master\application\libraries\PHPExcel\Worksheet\MemoryDrawing.php 108
ERROR - 2019-07-31 11:27:13 --> Severity: Warning --> imagejpeg() expects parameter 1 to be resource, bool given C:\xampp\htdocs\master\application\libraries\PHPExcel\Writer\Excel2007.php 375
ERROR - 2019-07-31 11:52:07 --> Severity: Notice --> Undefined variable: konxdisi C:\xampp\htdocs\master\application\models\ClienteSeguimiento\ClienteSeguimientoModelo.php 481
ERROR - 2019-07-31 11:52:07 --> Severity: Notice --> Undefined variable: konxdisi C:\xampp\htdocs\master\application\models\ClienteSeguimiento\ClienteSeguimientoModelo.php 481
ERROR - 2019-07-31 11:52:25 --> Severity: Notice --> Undefined variable: konxdisi C:\xampp\htdocs\master\application\models\ClienteSeguimiento\ClienteSeguimientoModelo.php 481
ERROR - 2019-07-31 11:57:00 --> Query error: Unknown column 'juegos_mensuales' in 'field list' - Invalid query: UPDATE `venta` SET `grupo` = 'Acer', `cliente` = 'Acer Hidalgo', `referencia` = 'Acer Hidalgo', `cantidad_maxima` = '0', `precio_unitario` = '0', `vida_util_dias` = '', `periodo_surtimiento` = '', `periodo_surtimiento_vida_util` = NULL, `cantidad_minima` = '0', `paqueteria` = '', `tipo_entrega` = '', `dias_credito` = '', `pulgadas` = '0', `diametro_rod_ml` = '0.00', `maquina_cliente` = NULL, `capacitacion` = '0', `capacitacion_fecha` = '0000-00-00', `piezas_juego` = '0', `costo_juego` = '0', `juegos_mensuales` = NULL, `golpes_prom_comp` = '0', `golpes_prom_rodicut` = '0', `beneficio_golpes_prom` = '0', `tiempo_rot_com` = '0', `tiempo_rot_rodicut` = NULL, `precio_golpe` = '0.00', `ciudad_planta` = '98', `observacion` = '98', `marca_maquina` = 'HOPPER', `contacto` = 'DRO', `tipo_maquina` = 'FFG', `formato` = '1228', `ancho` = '3000 mm 125', `troquel` = 'Sí', `uso_de_cfdi` = '', `metodo_pago` = '', `fecha_visita` = '2019-06-12', `fecha_seguimiento` = '2019-06-17', `golpes_maquina` = '0', `confirmacion_orden_compra` = '', `fecha_ultima_factura` = '0020-02-29', `fecha_busqueda` = NULL
WHERE `id_venta` = '33'
ERROR - 2019-07-31 11:59:26 --> Severity: Notice --> Undefined variable: juego_mensuales C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 560
ERROR - 2019-07-31 11:59:38 --> Severity: Notice --> Undefined variable: juego_mensuales C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 560
ERROR - 2019-07-31 12:00:39 --> Severity: Notice --> Undefined variable: juego_mensuales C:\xampp\htdocs\master\application\controllers\ClienteRefacciones.php 560
ERROR - 2019-07-31 12:06:14 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\master\system\libraries\Email.php 1906
ERROR - 2019-07-31 12:49:13 --> Página no encontrada: Assets/ClienteRefacciones
ERROR - 2019-07-31 12:49:13 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 12:49:37 --> Página no encontrada: Bitacora/refacciones
ERROR - 2019-07-31 12:49:37 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 12:51:40 --> Página no encontrada: Assets/ClienteRefacciones
ERROR - 2019-07-31 12:51:40 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 12:52:10 --> Página no encontrada: Assets/ClienteRefacciones
ERROR - 2019-07-31 12:52:11 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 12:52:19 --> Página no encontrada: Assets/ClienteRefacciones
ERROR - 2019-07-31 12:52:19 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 12:56:52 --> Página no encontrada: Bitacora/refacciones
ERROR - 2019-07-31 12:56:52 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 12:56:57 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 50
ERROR - 2019-07-31 12:56:57 --> Severity: Notice --> Undefined property: stdClass::$necesidad C:\xampp\htdocs\master\application\views\Bitacora\editar.php 59
ERROR - 2019-07-31 12:56:57 --> Severity: Notice --> Undefined property: stdClass::$compromiso C:\xampp\htdocs\master\application\views\Bitacora\editar.php 67
ERROR - 2019-07-31 12:56:57 --> Página no encontrada: Assets/font
ERROR - 2019-07-31 12:57:05 --> Severity: Notice --> Undefined variable: archivo1 C:\xampp\htdocs\master\application\controllers\Bitacora.php 473
ERROR - 2019-07-31 12:57:05 --> Severity: Notice --> Undefined variable: konxdisi C:\xampp\htdocs\master\application\models\Bitacora\BitacoraModelo.php 486
ERROR - 2019-07-31 13:03:20 --> Página no encontrada: Assets/images
ERROR - 2019-07-31 14:29:05 --> Página no encontrada: Assets/images
