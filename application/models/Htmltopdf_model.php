<?php

class Htmltopdf_model extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->base = $this->config->item('base_url');
        $this->css = $this->config->item('css');
        $this->load->library('session');
        //poner para el poner selet en un formulario
        $this->load->model('Htmltopdf_model');
        //para que tenga el mismo header
        $this->load->model('User_model', 'User_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
        $this->load->library('userlevel');
    }

    public function getAllSettings() {
        $this->db->select('*');
        $this->db->from('settings');
        return $this->db->get()->row();
    }

    public function getUsers() {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->row();
    }

    function fetch() {
        $this->db->order_by('id_cliente', 'DESC');
        return $this->db->get('cliente');
    }

    function buscar_detalles_individualesHtml($id_cliente) {

        $this->db->where('id_cliente', $id_cliente);
        $data = $this->db->get('cliente');
        $output = '<table width="100%" border="1" cellspacing="5" cellpadding="5">';
        foreach ($data->result() as $row) {
            $output .= '
               
			<tr>
				
				<td width="75%">
                             <td width="25%"></td>   
					<p><b>Grupo : </b>' . $row->grupo . '</p>
					<p><b>Cliente : </b>' . $row->cliente . '</p>
					<p><b>Cliente SAE Pesos: </b>' . $row->cliente_sae . '</p>
                                        <p><b>Cliente SAE Doláres: </b>' . $row->cliente_sae_dolares . '</p>
					<p><b>Razon Social: </b>' . $row->razon_soc . '</p>
					<p><b>RFC : </b> ' . $row->rfc . ' </p>
                                        
                                        <p><b>Dirección Fiscal: </b> ' . $row->direccion . ' </p>
                                            <p><b>Telefono Celular: </b> ' . $row->tel_cel . ' </p>

                                        <p><b>Extensión : </b> ' . $row->extension . ' </p>
                                        <p><b>Correo Compras : </b> ' . $row->correo . ' </p>
                                         <p><b>Correo CxP : </b> ' . $row->correo1 . ' </p>
                                           <p><b>Correo Mantenimiento : </b> ' . $row->correo2 . ' </p>
                                          <p><b>Otro Correo : </b> ' . $row->correo3 . ' </p>
                                         <p><b>Moneda : </b> ' . $row->moneda . ' </p>
                                         <p><b>Cuenta Bancaria Pesos: </b> ' . $row->cta_banc . ' </p>
                                         <p><b>Cuenta Bancaria Doláres: </b> ' . $row->cta_banc_dolares . ' </p>
                                         <p><b>Vendedor Refacciones: </b> ' . $row->vendedor_refacciones . ' </p>
                                         <p><b>Vendedor Maquinaria: </b> ' . $row->vendedor_maquinaria . ' </p>
                                         <p><b>Forma de pago: </b> ' . $row->forma_pago . ' </p>
                                         <p><b>Método de pago: </b> ' . $row->metodo_pago . ' </p>
                                         <p><b>Uso de CFDI: </b> ' . $row->uso_de_cfdi . ' </p>
                                         <p><b>Dirección de Entrega: </b> ' . $row->direccion_entrega . ' </p>
                                          <p><b>Empresa: </b> ' . $row->empresa . ' </p>   
				</td>
			</tr>
                        <img src="data:image/png;base64,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">
   
			';
        }
        $output .= '
		<!--<tr>
			<td colspan="2" align="center"><a href="' . base_url() . 'htmltopdf" class="btn btn-primary">Regresar</a></td>
		</tr>-->
		';
        $output .= '</table>';
        return $output;
    }

    function buscar_detalles_individualesPdf($id_cliente) {

        $this->db->where('id_cliente', $id_cliente);
        $data = $this->db->get('cliente');
        $output = ' <html lang="es">
<head>
    <meta charset="utf-8">
   
     <style>
    @page { margin: 100px 100px; }
    header { position: fixed; top: -90px; left: 0px; right: 0px; background-color: red; height: 50px; }
    footer { position: fixed; bottom: -60px; left: 0px; right: 0px; background-color: red; height: 50px; }
    p { page-break-after: always; }
    p:last-child { page-break-after: never; }
  </style>
</head>
<body>  	<header>
      <center> <img src="data:image/png;base64,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">
<i>
</center> </header> 
	    <table width="100%" cellspacing="2" cellpadding="5" border="1" > ';
        foreach ($data->result() as $row) {
            $output .= '
                                        <tr><th style="text-align: center">Grupo</b></th><th>' . $row->grupo . '</th></tr>
					<tr><th style="text-align: center"><b>Cliente</b></th><th>' . $row->cliente . '</th></tr>
					<tr><th style="text-align: center"><b>Cliente SAE Pesos</b></th><th>' . $row->cliente_sae . '</th></tr>
                                        <tr><th style="text-align: center"><b>Cliente SAE Doláres</b></th><th>' . $row->cliente_sae_dolares . '</th></tr>
					<tr><th style="text-align: center"><b>Razon Social</b></th><th>' . $row->razon_soc . '</th></tr>
					<tr><th style="text-align: center"><b>RFC </b></th><th> ' . $row->rfc . ' </th></tr>
                                        <tr><th style="text-align: center"><b>Dirección Fiscal  </b></th><th> ' . $row->direccion . ' </th></tr>
                                        <tr><th style="text-align: center"><b>Teléfono Celular  </b> </th><th>' . $row->tel_cel . ' </th></tr>
                                        <tr><th style="text-align: center"><b>Extensión  </b> </th><th>' . $row->extension . ' </th></tr>
                                        <tr><th style="text-align: center"><b>Correo Compras  </b></th><th> ' . $row->correo . '</th></tr>
                                        <tr><th style="text-align: center"><b>Correo CxP  </b> </th><th>' . $row->correo1 . ' </th></tr>
                                        <tr><th style="text-align: center"><b>Correo Mantenimiento  </b></th><th> ' . $row->correo2 . ' </th></tr>
                                        <tr><th style="text-align: center"> <b>Otro Correo  </b></th><th> ' . $row->correo3 . '</th></tr>
                                        <tr><th style="text-align: center"><b>Moneda  </b></th><th> ' . $row->moneda . ' </th></tr>
                                        <tr><th style="text-align: center"><b>Cuenta Bancaria Pesos </b></th><th> ' . $row->cta_banc . ' </th></tr>
                                       <tr><th style="text-align: center"><b>Cuenta Bancaria Doláres </b></th><th> ' . $row->cta_banc_dolares . ' </th></tr>
                                       <tr> <th style="text-align: center"><b>Vendedor Refacciones </b> </th><th>' . $row->vendedor_refacciones . ' </th></tr>
                                       <tr> <th style="text-align: center"><b>Vendedor Maquinaria </b> </th><th>' . $row->vendedor_maquinaria . ' </th></tr>
                                        <tr><th style="text-align: center"><b>Forma de Pago<br> </b></th><th> ' . $row->forma_pago . ' </th></tr>                                       
                                        <tr> <th style="text-align: center"><b>Método de Pago <br>  </b> </th><th>' . $row->metodo_pago . ' </th></tr>
                                        <tr><th style="text-align: center"><b>Uso de CFDI<br> </b></th><th> ' . $row->uso_de_cfdi . ' </th></tr>
                                       <tr> <th style="text-align: center"><b>Dirección de entrega <br> </b> </th><th>' . $row->direccion_entrega . ' </th></tr>
                                       <tr> <th style="text-align: center"><b>Empresa <br> </b> </th><th>' . $row->empresa . ' </th></tr>

		
			';
        }
        $output .= '
		<!--<tr>
			<td colspan="2" align="center"><a href="' . base_url() . 'htmltopdf" class="btn btn-primary">Regresar</a></td>
		</tr>-->
		';
        $output .= '</table>
       
   
  <footer><center><p style="color:#FFffff";><b>Robuspack, S. de R.L. de C.V.</b></p></center></footer>
</body>
</html>';
        return $output;
    }

    function bitacorasMantenimientoPdf($id_bitacora) {

        $this->db->join('users', 'bitacora_mtto.id=users.id');
        $this->db->where('id_bitacora', $id_bitacora);
        $data = $this->db->get('bitacora_mtto');
        $output = ' <html lang="es">
        <head>
          <meta charset="utf-8">
        
     <style>
    @page { margin: 100px 100px; }
    header { position: fixed; top: -90px; left: 0px; right: 0px; background-color: white; height: 50px; }
    
    footer { position: fixed; bottom: -100px; left: 0px; right: 0px; background-color: white; height: 50px; }
   
 #footer .page:after { content: counter(page, upper-roman); }


/* DivTable.com */
.divTable{
	display: table;
	width: 100%;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	border: 0px solid #999999;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}


s

  </style>
</head>
<body>  	<header>

<center> 

<!--<img src="data:image/png;base64,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" align="left">-->
<img src="data:image/png;base64,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" align="left">

</center> </header> 



 <!--<footer><center><p style="color:#FFffff";><b>Se imprimen 3 copias CLIENTE, ADMINSTRACIÓN , ROBUSPACK</b></p></center></footer>-->
 <footer><center><p style="color:#000";><b>Se imprimen 3 copias CLIENTE, ADMINISTRACIÓN , ROBUSPACK</b></p></center>
 
</footer>
<br><br>
    


	    <table style=" width: 300px; width: 250px;"
	  border="0" > ';
        foreach ($data->result() as $row) {
          $output .= '
            <tr>
            <th>Cliente :</th>
            <th style=" width: 450px;">' . $row->planta . '</th>
            </tr>
            

            <tr>
            <th>Modelo:</th>
            <th>' . $row->modelo . '</th>
            </tr>
            

	    <tr>
            <th>#Máquina:</th>
            <th>' . $row->maquina . '</th>
            </tr>
            

            <tr>
            <th>Fecha Reporte:</th>
            <th>' . $row->fecha . '</th>
            </tr>
            

            <tr>
            <th>Consecutivo</th>
            <th>' . $row->consecutivo . '</th>
            </tr>
            
            <tr>
            <th width="50" height="16" width="300" nowrap>Tipo de servicio:</th>
            <th>' . $row->tipo . '</th>
            </tr>
            
            <tr>
            <th>Mantenimiento:</th>
            <th>' . $row->mantenimiento . '</th>
            </tr>
            

           
            <tr>
            <th>Reporto:</th>
            <th>Ing.   ' . $row->first_name . ' ' . $row->last_name . '</th>
            </tr>
            </table>

	  <br>

<fieldset>
  <legend>Motivo de asistencia por parte del técnico</legend>
' . nl2br($row->motivo_asistencia) . ' 
  
  
</fieldset>

<br><br>
            
<!--<fieldset style="width:100%;height: 100%" >-->
<!--<fieldset>-->
  <legend><b>Descripción de Actividades Efectuadas</b></legend>
  <p ALIGN="justify">' . $row->des_acti1 . ' </p>
  <p ALIGN="justify">' . $row->des_acti2 . ' </p>
  <p ALIGN="justify">' . $row->des_acti3 . ' </p>
  <p ALIGN="justify">' . $row->des_acti4 . ' </p>
  <p ALIGN="justify">' . $row->des_acti5 . ' </p>
  <p ALIGN="justify">' . $row->des_acti6 . ' </p>
  <p ALIGN="justify">' . $row->des_acti7 . '</p>
  <p ALIGN="justify">' . $row->des_acti8 . '</p>
  <p ALIGN="justify">' . $row->des_acti9 . ' </p>
  <p ALIGN="justify">' . $row->des_acti10 . ' </p>
  <p ALIGN="justify">' . $row->des_acti11 . '</p>
  <p ALIGN="justify">' . $row->des_acti12 . '</p>
   <p ALIGN="justify">' . $row->des_acti13 . '</p>
  <p ALIGN="justify">' . $row->des_acti14 . ' </p>
  <p ALIGN="justify">' . $row->des_acti15 . ' </p>
<!--</fieldset>-->









			';
        }

        $output .= '
            

<br><br>

<!--<b>Refacciones Usadas:</b><br><br>-->';
 $output .= '';
        

 if ($row->ref_usadas1 == null) {
            $output .= '';
        } else {
            $output .= '
  <table border="1">
  <tr>
  <td colspan="2"><center><b>Refacciones Usadas:</b></center></td>
  </tr>
    <tr >
    <td style="width:300px;">1.-' . $row->ref_usadas1 . '</td>
    <td style="width:300px;">2.-' . $row->ref_usadas2 . '</td>
    </tr>
   
';}

 if ($row->ref_usadas3 == null) {
            $output .= '';
        } else {
            $output .= '


    <tr>
    <td>3.-' . $row->ref_usadas3 . '</td>
    <td>4.-' . $row->ref_usadas4 . '</td>
    </tr>
    ';}

 if ($row->ref_usadas5 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>5.-' . $row->ref_usadas5 . '</td>
    <td>6.-' . $row->ref_usadas6 . '</td>
    </tr>
    
';}

 if ($row->ref_usadas7 == null) {
            $output .= '';
        } else {
            $output .= '


    <tr>
    <td>7.-' . $row->ref_usadas7 . '</td>
    <td>8.-' . $row->ref_usadas8 . '</td>
    </tr>
    
';}

 if ($row->ref_usadas9 == null) {
            $output .= '';
        } else {
            $output .= '



    <tr>
    <td>9.-' . $row->ref_usadas9 . '</td>
    <td>10.-' . $row->ref_usadas10 . '</td>
    </tr>
    


';}

 if ($row->ref_usadas11 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>11.-' . $row->ref_usadas11 . '</td>
    <td>12.-' . $row->ref_usadas12 . '</td>
    </tr>
    

';}

 if ($row->ref_usadas13 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>13.-' . $row->ref_usadas13 . '</td>
    <td>14.-' . $row->ref_usadas14 . '</td>
    </tr>
    

';}

 if ($row->ref_usadas15 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>15.-' . $row->ref_usadas15 . '</td>
    <td>16.-' . $row->ref_usadas16 . '</td>
    </tr>
    

';}

 if ($row->ref_usadas17 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    
    <td>17.-' . $row->ref_usadas17 . '</td>
    <td>18.-' . $row->ref_usadas18 . '</td>
    </tr>
    
';}

 if ($row->ref_usadas19 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>19.-' . $row->ref_usadas19 . '</td>
    <td>20.-' . $row->ref_usadas20 . '</td>
    </tr>
    ';}

 if ($row->ref_usadas21 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>21.-' . $row->ref_usadas21 . '</td>
    <td>22.-' . $row->ref_usadas22 . '</td>
    </tr>
    

';}

 if ($row->ref_usadas23 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>23.-' . $row->ref_usadas23 . '</td>
    <td>24.-' . $row->ref_usadas24 . '</td>
    </tr>
   ';}

 if ($row->ref_usadas25 == null) {
            $output .= '';
        } else {
            $output .= ' 
    <tr>
    <td>25.-' . $row->ref_usadas25 . '</td>
    <td>26.-' . $row->ref_usadas26 . '</td>
    </tr>
    

';}

 if ($row->ref_usadas27 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>27.-' . $row->ref_usadas27 . '</td>
    <td>28.-' . $row->ref_usadas28 . '</td>
    </tr>
    

';}

 if ($row->ref_usadas29 == null) {
            $output .= '';
        } else {
            $output .= '
   <tr>
    <td>29.-' . $row->ref_usadas29 . '</td>
    <td>30.-' . $row->ref_usadas30 . '</td>
    </tr>' ;
       }     
            
 $output .= '
    
    

</table>
<br><br><br>';
        





$output .= '';
        
//
 if ($row->ref_recomen1 == null) {
            $output .= '';
        } else {
            $output .= '
  <table border="1">
  <tr>
  <td colspan="2"><center><b>Refacciones Recomendadas:</b></center></td>
  </tr>
    <tr >
    <td style="width:300px;">1.-' . $row->ref_recomen1 . '</td>
    <td style="width:300px;">2.-' . $row->ref_recomen2 . '</td>
    </tr>
   
';}

 if ($row->ref_recomen3 == null) {
            $output .= '';
        } else {
            $output .= '


    <tr>
    <td>3.-' . $row->ref_recomen3 . '</td>
    <td>4.-' . $row->ref_recomen4 . '</td>
    </tr>
    ';}

 if ($row->ref_recomen5 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>5.-' . $row->ref_recomen5 . '</td>
    <td>6.-' . $row->ref_recomen6 . '</td>
    </tr>
    
';}

 if ($row->ref_recomen7 == null) {
            $output .= '';
        } else {
            $output .= '


    <tr>
    <td>7.-' . $row->ref_recomen7 . '</td>
    <td>8.-' . $row->ref_recomen8 . '</td>
    </tr>
    
';}

 if ($row->ref_recomen9 == null) {
            $output .= '';
        } else {
            $output .= '



    <tr>
    <td>9.-' . $row->ref_recomen9 . '</td>
    <td>10.-' . $row->ref_recomen10 . '</td>
    </tr>
    


';}

 if ($row->ref_recomen11 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>11.-' . $row->ref_recomen11 . '</td>
    <td>12.-' . $row->ref_recomen12 . '</td>
    </tr>
    

';}

 if ($row->ref_recomen13 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>13.-' . $row->ref_recomen13 . '</td>
    <td>14.-' . $row->ref_recomen14 . '</td>
    </tr>
    

';}

 if ($row->ref_recomen15 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>15.-' . $row->ref_recomen15 . '</td>
    <td>16.-' . $row->ref_recomen16 . '</td>
    </tr>
    

';}

 if ($row->ref_recomen17 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    
    <td>17.-' . $row->ref_recomen17 . '</td>
    <td>18.-' . $row->ref_recomen18 . '</td>
    </tr>
    
';}

 if ($row->ref_recomen19 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>19.-' . $row->ref_recomen19 . '</td>
    <td>20.-' . $row->ref_recomen20 . '</td>
    </tr>
    ';}

 if ($row->ref_recomen21 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>21.-' . $row->ref_recomen21 . '</td>
    <td>22.-' . $row->ref_recomen22 . '</td>
    </tr>
    

';}

 if ($row->ref_recomen23 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>23.-' . $row->ref_recomen23 . '</td>
    <td>24.-' . $row->ref_recomen24 . '</td>
    </tr>
   ';}

 if ($row->ref_recomen25 == null) {
            $output .= '';
        } else {
            $output .= ' 
    <tr>
    <td>25.-' . $row->ref_recomen25 . '</td>
    <td>26.-' . $row->ref_recomen26 . '</td>
    </tr>
    

';}

 if ($row->ref_recomen27 == null) {
            $output .= '';
        } else {
            $output .= '
    <tr>
    <td>27.-' . $row->ref_recomen27 . '</td>
    <td>28.-' . $row->ref_recomen28 . '</td>
    </tr>
    

';}

 if ($row->ref_recomen29 == null) {
            $output .= '';
        } else {
            $output .= '
   <tr>
    <td>29.-' . $row->ref_recomen29 . '</td>
    <td>30.-' . $row->ref_recomen30 . '</td>
    </tr>' ;
       }     
            
 $output .= '
    
    

</table>
<br><br><br>';


       



        
        
        








        $output .= '
	

            
<fieldset>
  <legend>Observaciones del Técnico</legend>
 ' . nl2br($row->recomendaciones) . '
  
  
</fieldset>

<br><br>	

            
<fieldset>
  <legend>Proxima Fecha de Intervención Sugerida Robuspack:</legend>
 ' . nl2br($row->proxima_inter) . ' &nbsp;
  
  
</fieldset>



<br>';




        if ($row->capacitacion == null) {
            $output .= '';
        } else {
            $output .= '
            <fieldset>
  <legend>Capacitación:</legend>
 ' . $row->capacitacion . ' &nbsp;
  
  
</fieldset>
<br>';
        }



        if ($row->aceptacion_capacitacion == null) {
            $output .= '';
        } else {
            $output .= '
         <fieldset>
  <legend>Aceptación Capacitación: (Nombre Completo y Puesto del trabajo)</legend>
 ' . $row->aceptacion_capacitacion . ' &nbsp;
  
  
</fieldset>
';
        }








        $output .= '





<!--<center>Recibe ' . $row->planta . '</center>
<br><br><br>
<div class="divTable" style="width: 100%;border: 1px solid #000;" >
<div class="divTableBody">


<div class="divTableRow">
<div class="divTableCell"></div>
<div class="divTableCell" align="center"></div>
<div class="divTableCell"></div>
</div>

<div class="divTableRow">
<div class="divTableCell"></div>
<div class="divTableCell" align="center"><center>Recibe ' . $row->planta . '</center></div>
<div class="divTableCell"></div>
</div>









<div class="divTableRow">
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
</div>



<div class="divTableRow">
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
</div>


<div class="divTableRow">
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
</div>











<div class="divTableRow">
<div class="divTableCell"><hr/></div>
<div class="divTableCell"><hr/></div>
<div class="divTableCell"><hr/></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><center>Nombre de quien recibe</center></div>
<div class="divTableCell"><center>Firma de quien recibe</center></div>
<div class="divTableCell"><center>Sello&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></div>
</div>
</div>
</div>

<pre>
&nbsp;
</pre>
<div class="divTable" style="border: 1px solid #000;">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell"><hr/></div>
<div class="divTableCell"><hr/></div>
</div>
<div class="divTableRow">
<div class="divTableCell">Nombre de quien entrega</div>
<div class="divTableCell">Firma de quien entrega</div>
</div>
</div>
</div> -->
 
























<br>
 <div class="divTable" style="border: 1px solid #000;" >
<div class="divTableBody">


<div class="divTableRow">
<div class="divTableCell"><br><br><br><br><hr/>
<center>Nombre de quien recibe</center></div>
<div class="divTableCell"><center>Recibe ' . $row->planta . '<center><br><br><br><hr/><center>Firma de quien recibe</center></div>
<div class="divTableCell"><br><br><br><br><hr/><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sello&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></div>
</div>



</div>
</div>

<pre>
&nbsp;
&nbsp;
</pre>
 <div class="divTable" style="border: 1px solid #000;" >
<div class="divTableBody">


<div class="divTableRow">
<div class="divTableCell"><br><br><br><br><hr/>
<center>Nombre de quien entrega</center></div>
<div class="divTableCell"><center><br><center><br><br><br><hr/><center>Firma de quien entrega</center></div>

</div>











</body>
</html>';
        return $output;
    }

    function catClienteVendedores() {
        $this->db->order_by('id_catalogo', 'DESC');
        return $this->db->get('catalogo_ven_tec');
    }

    function buscar_detalles_individualesVendedoresPdf() {
        //$this->db->where('id_catalogo', $id_catalogo);
        //$this->db->where('id_cliente', $id_liente);
        $data = $this->db->get('catalogo_ven_tec');
        $output = ' <html lang="es">
            <head>
                <meta charset="utf-8">

                 <style>
                @page { margin: 100px 50px; }
                header { position: fixed; top: -100px; left: 0px; right: 0px; background-color: red; height: 50px; }
                footer { position: fixed; bottom: -60px; left: 0px; right: 0px; background-color: red; height: 50px; }
                p { page-break-after: always; }
                p:last-child { page-break-after: never; }
              </style>
            </head>
            <body>  	<header>
             <center> <img src="data:image/png;base64,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">
<i>
</center> </header> 
                    <table width="100%" cellspacing="2" cellpadding="5" border="1" > 
          <tr>
            <th style="text-align: center">No.</th>
            <th style="text-align: center">Nombre</th>
            <th style="text-align: center">Rol</th>
            <th style="text-align: center">Área</th>
            <th style="text-align: center">Comisión</th>
            <th style="text-align: center">Correo</th>

          </tr>            
        ';
        foreach ($data->result() as $row) {
            $output .= '

 <footer><center><p style="color:#FFffff";><b>Robuspack, S. de R.L. de C.V.</b></p></center></footer>

        <tr>
            <td>' . $row->id_catalogo . '</td>
          <td>' . $row->nombre . '</td>
          <td>' . $row->rol . '</td>
          <td>' . $row->area . '</td>
                <td style="text-align: center">' . $row->comision . '</td>
          <td>' . $row->correo . '</td>
        </tr>

                
                                     


                                ';
        }
        $output .= '
                        <!--<tr>
                                <td colspan="2" align="center"><a href="' . base_url() . 'htmltopdf" class="btn btn-primary">Regresar</a></td>
                        </tr>-->
                        ';
        $output .= '</table>


         

        </body>
        </html>';
        return $output;
    }

    function convertirListaUsuarioPdf() {
        //$this->db->where('id_catalogo', $id_catalogo);
        //$this->db->where('id_cliente', $id_liente);
        $data = $this->session->userdata;
        if (empty($data)) {
            redirect(site_url() . 'main/login/');
        }

        //check user level
        if (empty($data['role'])) {
            redirect(site_url() . 'main/login/');
        }
        $dataLevel = $this->userlevel->checkLevel($data['role']);
        //check user level
        $data['title'] = "Robuspack";
        if ($dataLevel == "is_admin") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $data = $this->db->query('select first_name  ,email,last_login from users where users.id <> 1 and users.id <> 2 and users.id <> 3 order by first_name asc ');
        }
        //condicions que realice la consulta solo si es refacciones
        else if ($dataLevel == "is_editor") {
            /* Para traerse el id del usuario */
            $data = $this->session->userdata;
            /* Para traerse el id del usuario */
            $data = $this->db->query('select first_name  ,email,last_login from users where users.id <> 1 and users.id <> 2 and users.id <> 3 order by first_name asc ');
        } else if ($dataLevel == "is_Gerente_Ventas") {
            /* Para traerse el id del usuario 
              $data = $this->session->userdata;
              $this->db->select('users.first_name,users.email,users.last_login');
              $this->db->from('users');
              $this->db->where("users.id='6' OR users.id='7'  OR users.id='8' OR users.id='9'  OR users.id='10'");
              $this->db->order_by("last_login", "desc"); */

            $data = $this->db->query('select first_name  ,email,last_login  from users where users.id=6 OR users.id=7 OR users.id=8 OR users.id=28');
        } else if ($dataLevel == "is_director") {
            /* Para traerse el id del usuario 
              $data = $this->session->userdata;
              $this->db->select('users.first_name,users.email,users.last_login');
              $this->db->from('users');
              $this->db->where("users.id='6' OR users.id='7'  OR users.id='8' OR users.id='9'  OR users.id='10'");
              $this->db->order_by("last_login", "desc"); */

            $data = $this->db->query('select first_name  ,email,last_login  from users where users.id=11 OR users.id=12 OR users.id=13');
        } else if ($dataLevel == "is_jefe_mantenimiento") {
            /* Para traerse el id del usuario 
              $data = $this->session->userdata;
              $this->db->select('users.first_name,users.email,users.last_login');
              $this->db->from('users');
              $this->db->where("users.id='6' OR users.id='7'  OR users.id='8' OR users.id='9'  OR users.id='10'");
              $this->db->order_by("last_login", "desc"); */

            $data = $this->db->query('select first_name  ,email,last_login  from users where users.id=11 OR users.id=12 OR users.id=13');
        } else {
            redirect(site_url() . 'main/');
        }

























        $output = ' <html lang="es">
            <head>
                <meta charset="utf-8">

                 <style>
                @page { margin: 100px 50px; }
                header { position: fixed; top: -100px; left: 0px; right: 0px; background-color: red; height: 50px; }
                footer { position: fixed; bottom: -60px; left: 0px; right: 0px; background-color: red; height: 50px; }
                p { page-break-after: always; }
                p:last-child { page-break-after: never; }
              </style>
            </head>
            <body>  	<header>
                  <center> <img src="data:image/png;base64,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" height="100" width="150">

        </center> </header> 
                    <table width="100%" cellspacing="2" cellpadding="5" border="1" > 
          <tr>
            
            <th style="text-align: center;width:130px;">Nombre</th>
            <th>Correo Electrónico</th>
            <th style="text-align: center">Último Acceso</th>
           

          </tr>            
        ';
        foreach ($data->result() as $row) {
            $output .= '

 <footer><center><p style="color:#FFffff";><b>Robuspack, S. de R.L. de C.V.</b></p></center></footer>

        <tr>
            <td>' . $row->first_name . '</td>
          <td>' . $row->email . '</td>
          <td>' . $row->last_login . '</td>
          
        </tr>

                
                                     


                                ';
        }
        $output .= '
                        <!--<tr>
                                <td colspan="2" align="center"><a href="' . base_url() . 'htmltopdf" class="btn btn-primary">Regresar</a></td>
                        </tr>-->
                        ';
        $output .= '</table>


         

        </body>
        </html>';
        return $output;
    }

}

?>