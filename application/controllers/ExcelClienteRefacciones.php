<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class ExcelClienteRefacciones extends CI_Controller {

    // construct
    public function __construct() {
        parent::__construct();
        // load model
        $this->load->model('ExportarClienteRefaccionesmodelo', 'export');
    }

    // export xlsx|xls file
    public function index() {
        
        $data['title'] = 'Cliente Refacciones';
        $data['listaClienteRefacciones'] = $this->export->listaClienteRefacciones();
           
        // load view file for output
        $this->load->view('users/feedbacklist', $data);
    }
     // create xlsx
    public function crearExcel() {
        // create file name
   //  $fileName = 'feedbackdata-' . time() . '.xls'; 
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);
$object->getActiveSheet()->setTitle('AUXILIARMASTER');

$contador = 1;
	        //Le aplicamos ancho las columnas.
	        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('F')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('J')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('M')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('O')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('R')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('S')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('T')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('U')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('V')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('W')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('AF')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
                $object->getActiveSheet()->getColumnDimension('AH')->setWidth(25);
                $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);
               
                //Le aplicamos el tipo, color y tamaño de letra.
                $styleArray = array('font'  => array( 'bold'  => true, 'color' => array('rgb' => '000000'),'size'  => 12,'name'  => 'Arial'));
                $object->getActiveSheet()->getStyle('1')->applyFromArray($styleArray);          
                           
                 
                
                
	        //Le aplicamos negrita a los títulos de la cabecera.
	        $object->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("G{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("H{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("I{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("J{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("K{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("L{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("M{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("N{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("O{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("P{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("Q{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("R{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("S{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("T{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("U{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("V{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("W{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("X{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("Y{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("Z{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("AA{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("AB{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("AC{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("AD{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("AE{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("AF{$contador}")->getFont()->setBold(true);
                $object->getActiveSheet()->getStyle("AG{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("AH{$contador}")->getFont()->setBold(true);
	        $object->getActiveSheet()->getStyle("AI{$contador}")->getFont()->setBold(true);
               
	        

                //Definimos los títulos de la cabecera.
	       $object->getActiveSheet()->setCellValue("A{$contador}", 'Grupo');	        
	       $object->getActiveSheet()->setCellValue("B{$contador}", 'Cliente');
	       $object->getActiveSheet()->setCellValue("C{$contador}", 'Referencia');
               $object->getActiveSheet()->setCellValue("D{$contador}", 'Cantidad máxima');
               $object->getActiveSheet()->setCellValue("E{$contador}", 'Precio Unitario');
               $object->getActiveSheet()->setCellValue("F{$contador}", 'Periodo Surtimiento');	        
	       $object->getActiveSheet()->setCellValue("G{$contador}", 'Cantidad Máxima');
	       $object->getActiveSheet()->setCellValue("H{$contador}", 'Paqueteria');
               $object->getActiveSheet()->setCellValue("I{$contador}", 'Tipo Entrega');
               $object->getActiveSheet()->setCellValue("J{$contador}", 'Dias crédito');
               $object->getActiveSheet()->setCellValue("K{$contador}", 'Pulgadas');	        
	       $object->getActiveSheet()->setCellValue("L{$contador}", 'Máquina Cliente');
	       $object->getActiveSheet()->setCellValue("M{$contador}", 'Capacitación');
               $object->getActiveSheet()->setCellValue("N{$contador}", 'Capacitación Fecha');
               $object->getActiveSheet()->setCellValue("O{$contador}", 'Piezas Juego');
               $object->getActiveSheet()->setCellValue("P{$contador}", 'Costo Juego');
               $object->getActiveSheet()->setCellValue("Q{$contador}", 'Juegos Mensuales');	        
	       $object->getActiveSheet()->setCellValue("R{$contador}", 'Golpes promedio competencia');
	       $object->getActiveSheet()->setCellValue("S{$contador}", 'Golpes promedio rodicut');
               $object->getActiveSheet()->setCellValue("T{$contador}", 'Beneficio golpes promedio');
               $object->getActiveSheet()->setCellValue("U{$contador}", 'Tiempo rotacion competencia');
               $object->getActiveSheet()->setCellValue("V{$contador}", 'Tiempo rotacion promedio');
               $object->getActiveSheet()->setCellValue("W{$contador}", 'Beneficio Rotacion Promedio');	        
	       $object->getActiveSheet()->setCellValue("X{$contador}", 'Precio Golpe');
	       $object->getActiveSheet()->setCellValue("Y{$contador}", 'Ciudad/Planta');
               $object->getActiveSheet()->setCellValue("Z{$contador}", 'Observación');
               $object->getActiveSheet()->setCellValue("AA{$contador}", 'Contacto');
               $object->getActiveSheet()->setCellValue("AB{$contador}", 'Tipo Máquina');	        
	       $object->getActiveSheet()->setCellValue("AC{$contador}", 'Troquel');
	       $object->getActiveSheet()->setCellValue("AD{$contador}", 'Uso de CFDI');
               $object->getActiveSheet()->setCellValue("AE{$contador}", 'Método de pago');
               $object->getActiveSheet()->setCellValue("AF{$contador}", 'Forma de pago');
               $object->getActiveSheet()->setCellValue("AG{$contador}", 'Fecha Visita');	        
	       $object->getActiveSheet()->setCellValue("AH{$contador}", 'Fecha Seguimiento');
	       $object->getActiveSheet()->setCellValue("AI{$contador}", 'Golpes Máquina');
             
               
               


  $listaClienteRefacciones = $this->export->ListaClienteRefacciones();

  $excel_row = 2;


  foreach($listaClienteRefacciones as $row)
  {
   


   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cliente);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->referencia);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->cantidad_maxima);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->precio_unitario);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->periodo_surtimiento);
   $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->cantidad_minima);
   $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->paqueteria);
    $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->tipo_entrega);
   $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->dias_credito);
   $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->pulgadas);
    $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->maquina_cliente);
   $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->capacitacion);
   $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->capacitacion_fecha);
      $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->piezas_juego);
   $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->costo_juego);
   $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->juego_mensuales);
    $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->golpes_prom_comp);
   $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->golpes_prom_rodicut);
   $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->beneficio_golpes_prom);
    $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->tiempo_rot_com);
   $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->tiempo_rot_rodicut);
   $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->beneficio_rot_prom);
   $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->precio_golpe);
    $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->ciudad_planta);
   $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->observacion);
   $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->contacto);
      $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->tipo_maquina);
   $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->troquel);
   $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->uso_de_cfdi);
    $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->metodo_pago);
   $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->forma_pago);
   $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->fecha_visita);
    $object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->fecha_seguimiento);
   $object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->golpes_maquina);
 
   
   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Refacciones.xls"');
        $object_writer->save('php://output');
 }
    }
        


