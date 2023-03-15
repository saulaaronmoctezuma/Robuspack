<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
<<<<<<< HEAD
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
=======
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
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
<<<<<<< HEAD
 * @copyright	Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
=======
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
$lang['form_validation_required']		= 'The {field} field is required.';
$lang['form_validation_isset']			= 'The {field} field must have a value.';
$lang['form_validation_valid_email']		= 'The {field} field must contain a valid email address.';
$lang['form_validation_valid_emails']		= 'The {field} field must contain all valid email addresses.';
$lang['form_validation_valid_url']		= 'The {field} field must contain a valid URL.';
$lang['form_validation_valid_ip']		= 'The {field} field must contain a valid IP.';
$lang['form_validation_valid_base64']		= 'The {field} field must contain a valid Base64 string.';
$lang['form_validation_min_length']		= 'The {field} field must be at least {param} characters in length.';
$lang['form_validation_max_length']		= 'The {field} field cannot exceed {param} characters in length.';
$lang['form_validation_exact_length']		= 'The {field} field must be exactly {param} characters in length.';
$lang['form_validation_alpha']			= 'The {field} field may only contain alphabetical characters.';
$lang['form_validation_alpha_numeric']		= 'The {field} field may only contain alpha-numeric characters.';
$lang['form_validation_alpha_numeric_spaces']	= 'The {field} field may only contain alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']		= 'The {field} field may only contain alpha-numeric characters, underscores, and dashes.';
$lang['form_validation_numeric']		= 'The {field} field must contain only numbers.';
$lang['form_validation_is_numeric']		= 'The {field} field must contain only numeric characters.';
$lang['form_validation_integer']		= 'The {field} field must contain an integer.';
$lang['form_validation_regex_match']		= 'The {field} field is not in the correct format.';
$lang['form_validation_matches']		= 'The {field} field does not match the {param} field.';
$lang['form_validation_differs']		= 'The {field} field must differ from the {param} field.';
$lang['form_validation_is_unique'] 		= 'The {field} field must contain a unique value.';
$lang['form_validation_is_natural']		= 'The {field} field must only contain digits.';
$lang['form_validation_is_natural_no_zero']	= 'The {field} field must only contain digits and must be greater than zero.';
$lang['form_validation_decimal']		= 'The {field} field must contain a decimal number.';
$lang['form_validation_less_than']		= 'The {field} field must contain a number less than {param}.';
$lang['form_validation_less_than_equal_to']	= 'The {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']		= 'The {field} field must contain a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']	= 'The {field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']	= 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_in_list']		= 'The {field} field must be one of: {param}.';
=======
$lang['form_validation_required']		= '<font size="2" color="red">El campo {field} es obligatorio.</font>';
$lang['form_validation_isset']			= '<font size="2" color="red">El campo {field} debe tener algún valor. </font>';
$lang['form_validation_valid_email']		= '<font size="2" color="red">El campo {field} debe contener una dirección de correo electrónico válida</font>';
$lang['form_validation_valid_emails']		= '<font size="2" color="red">El campo {field} contener todas las direcciones de correo electrónico válidas.  </font>';
$lang['form_validation_valid_url']		= '<font size="2" color="red">El campo {field}  debe contener una URL válida. </font>';
$lang['form_validation_valid_ip']		= '<font size="2" color="red">El campo {field} debe contener una IP válida.   </font>';
$lang['form_validation_min_length']		= '<font size="2" color="red">El campo {field} debe tener al menos {param} caracteres de longitud.   </font>';
$lang['form_validation_max_length']		= '<font size="2" color="red">El campo {field} no puede exceder de {param} caracteres de longitud.  </font>';
$lang['form_validation_exact_length']		= '<font size="2" color="red">El campo {field} debe tener exactamente {param} caracteres de longitud   </font>';
$lang['form_validation_alpha']			= '<font size="2" color="red">El campo {field} solo puede contener caracteres alfabético.   </font>';
$lang['form_validation_alpha_numeric']		= '<font size="2" color="red">El campo {field} solo puede contener caracteres alfanuméricos.  </font>';
$lang['form_validation_alpha_numeric_spaces']	= '<font size="2" color="red">El campo {field}  solo puede contener caracteres y espacios alfanuméricos.  </font>';
$lang['form_validation_alpha_dash']		= '<font size="2" color="red">El campo {field} solo puede contener caracteres alfanuméricos, guiones bajos y guiones.   </font>';
$lang['form_validation_numeric']		= '<font size="2" color="red">El campo {field}  debe contener solo números.  </font>';
$lang['form_validation_is_numeric']		= '<font size="2" color="red">El campo {field}  debe contener solo caracteres numéricos. </font>';
$lang['form_validation_integer']		= '<font size="2" color="red">El campo {field} el campo debe contener un entero   </font>';
$lang['form_validation_regex_match']		= '<font size="2" color="red">El campo {field} no está en el formato correcto.  </font>';
$lang['form_validation_matches']		= '<font size="2" color="red">El campo {field} no coincide con el campo {param}  </font>';
$lang['form_validation_differs']		= '<font size="2" color="red">El campo {field}   debe diferir del campo {param}. </font>';
$lang['form_validation_is_unique'] 		= '<font size="2" color="red">El campo {field} ya esta registrado</font>';
$lang['form_validation_is_natural']		= '<font size="2" color="red">El campo {field}  solo debe contener dígitos.  </font>';
$lang['form_validation_is_natural_no_zero']	= '<font size="2" color="red">El campo {field}  solo debe contener dígitos y debe ser mayor que cero. </font>';
$lang['form_validation_decimal']		= '<font size="2" color="red">El campo {field} debe contener un número decimal   </font>';
$lang['form_validation_less_than']		= '<font size="2" color="red">El campo {field} debe contener un número menor que {param}.  </font>';
$lang['form_validation_less_than_equal_to']	= '<font size="2" color="red">El campo {field}  debe contener un número menor o igual que {param}.  </font>';
$lang['form_validation_greater_than']		= '<font size="2" color="red">El campo {field}  debe contener un número mayor que {param}.  </font>';
$lang['form_validation_greater_than_equal_to']	= '<font size="2" color="red">El campo {field} debe contener un número mayor o igual que {param}.  </font>';
$lang['form_validation_error_message_not_set']	= '<font size="2" color="red"> No se puede acceder al mensaje de error correspondiente a su nombre de campo {field}   </font>';
$lang['form_validation_in_list']		= '<font size="2" color="red">El campo {field} debe ser uno de: {param}.  </font>';
>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
