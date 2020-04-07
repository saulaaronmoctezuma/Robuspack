<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= '<font size="2" color="red">El campo {field} es obligatorio.</font>';
$lang['form_validation_isset']			= '<font size="2" color="red">El campo {field} debe tener algún valor. </font>';
$lang['form_validation_valid_email']		= '<font size="2" color="red">El campo {field} debe contener una dirección de correo electrónico válida</font>';
$lang['form_validation_valid_emails']		= '<font size="2" color="red">El campo {field} contener todas las direcciones de correo electrónico válidas.  </font>';
$lang['form_validation_valid_url']		= '<font size="2" color="red">El campo {field}  debe contener una URL válida. </font>';
$lang['form_validation_valid_ip']		= '<font size="2" color="red">El campo {field} debe contener una IP válida.   </font>';
$lang['form_validation_min_length']		= '<font size="2" color="red">El campo {field} debe tener al menos {param} caracteres de longitud.   </font>';
$lang['form_validation_max_length']		= '<font size="2" color="red">El campo {field} no puede exceder de {param} caracteres de longitud.  </font>';
$lang['form_validation_exact_length']		= '<font size="2" color="red">El campo {field} debe tener exactamente {param} caracteres de longitud   </font>';
$lang['form_validation_alpha']			= '<font size="2" color="red">El campo {field} solo puede contener caracteres alfabéticos.</font>';
$lang['form_validation_alpha_numeric']		= '<font size="2" color="red">El campo {field} solo puede contener caracteres alfanuméricos.  </font>';
$lang['form_validation_alpha_numeric_spaces']	= '<font size="2" color="red">El campo {field}  solo puede contener caracteres y espacios alfanuméricos.  </font>';
$lang['form_validation_alpha_dash']		= '<font size="2" color="red">El campo {field} solo puede contener caracteres alfanuméricos, guiones bajos y guiones.   </font>';
$lang['form_validation_numeric']		= '<font size="2" color="red">El campo {field}  debe contener solo números.  </font>';
$lang['form_validation_is_numeric']		= '<font size="2" color="red">El campo {field}  debe contener solo caracteres numéricos. </font>';
$lang['form_validation_integer']		= '<font size="2" color="red">El campo {field} el campo debe contener un entero   </font>';
$lang['form_validation_regex_match']		= '<font size="2" color="red">El campo {field} no está en el formato correcto.  </font>';



//$lang['form_validation_matches']		= '<font size="2" color="red">El campo {field} no coincide con el campo {param}  </font>';
$lang['form_validation_matches']		= '<font size="2" color="red">Las contraseñas no coinciden</font>';




$lang['form_validation_differs']		= '<font size="2" color="red">El campo {field}   debe diferir del campo {param}. </font>';
$lang['form_validation_is_unique'] 		= '<font size="2" color="red">El {field} ya esta registrado </font>';
$lang['form_validation_is_natural']		= '<font size="2" color="red">El campo {field}  solo debe contener dígitos.  </font>';
$lang['form_validation_is_natural_no_zero']	= '<font size="2" color="red">El campo {field}  solo debe contener dígitos y debe ser mayor que cero. </font>';
$lang['form_validation_decimal']		= '<font size="2" color="red">El campo {field} debe contener un número decimal   </font>';
$lang['form_validation_less_than']		= '<font size="2" color="red">El campo {field} debe contener un número menor que {param}.  </font>';
$lang['form_validation_less_than_equal_to']	= '<font size="2" color="red">El campo {field}  debe contener un número menor o igual que {param}.  </font>';
$lang['form_validation_greater_than']		= '<font size="2" color="red">El campo {field}  debe contener un número mayor que {param}.  </font>';
$lang['form_validation_greater_than_equal_to']	= '<font size="2" color="red">El campo {field} debe contener un número mayor o igual que {param}.  </font>';
$lang['form_validation_error_message_not_set']	= '<font size="2" color="red"> No se puede acceder al mensaje de error correspondiente a su nombre de campo {field}   </font>';
$lang['form_validation_in_list']		= '<font size="2" color="red">El campo {field} debe ser uno de: {param}.  </font>';
