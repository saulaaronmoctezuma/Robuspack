<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * Desarrolladores : Saúl Aarón González Moctezuma 
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
 
class ExportarExcel extends CI_Controller {

    // construct
    public function __construct() {
        parent::__construct();
        // load model
        $this->load->model('Excel/ExportarExcelModelo', 'export');
    }

    // export xlsx|xls file
    // create xlsx
    public function crearExcelRefacciones() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Control SIC');
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(45);
        
        
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(21);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(28);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('AJ')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AK')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AL')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Código');
         $object->getActiveSheet() ->getStyle('C2:C25611') ->getAlignment() ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $object->getActiveSheet()->getStyle('C2:C25611')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Cantidad Máxima');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Precio Unitario');


        $object->getActiveSheet()->setCellValue("F{$contador}", 'Vida Util Dias');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Periodo Surtimiento');

        $object->getActiveSheet()->setCellValue("H{$contador}", 'Periodo Surtimiento Vida util');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Cantidad Mínima');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Paqueteria');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Tipo Entrega');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Dias crédito');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Diametro Rodillo en Pulgadas');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Diametro Rodillo en Milimetros');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Máquina Cliente');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Capacitación');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'Capacitación Fecha');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Piezas Juego');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Costo Juego');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Juegos Mensuales');
        $object->getActiveSheet()->setCellValue("U{$contador}", 'Golpes promedio competencia');
        $object->getActiveSheet()->setCellValue("V{$contador}", 'Golpes promedio rodicut');
        $object->getActiveSheet()->setCellValue("W{$contador}", 'Beneficio golpes promedio');
        $object->getActiveSheet()->setCellValue("X{$contador}", 'Tiempo rotacion competencia');
        $object->getActiveSheet()->setCellValue("Y{$contador}", 'Tiempo rotacion promedio');
        $object->getActiveSheet()->setCellValue("Z{$contador}", 'Beneficio Rotacion Promedio');
        $object->getActiveSheet()->setCellValue("AA{$contador}", 'Precio Golpe');
        $object->getActiveSheet()->setCellValue("AB{$contador}", 'Ciudad/Planta');
        $object->getActiveSheet()->setCellValue("AC{$contador}", 'Observación');
       
        $object->getActiveSheet()->setCellValue("AD{$contador}", 'Marca de Máquina');

        $object->getActiveSheet()->setCellValue("AE{$contador}", 'Modelo de la máquina');
        $object->getActiveSheet()->setCellValue("AF{$contador}", 'Tipo Máquina');
        $object->getActiveSheet()->setCellValue("AG{$contador}", 'Troquel');
        $object->getActiveSheet()->setCellValue("AH{$contador}", 'Uso de CFDI');
        $object->getActiveSheet()->setCellValue("AI{$contador}", 'Método de pago');

        $object->getActiveSheet()->setCellValue("AJ{$contador}", 'Fecha Visita');
        $object->getActiveSheet()->setCellValue("AK{$contador}", 'Fecha Seguimiento');
        $object->getActiveSheet()->setCellValue("AL{$contador}", 'Golpes Máquina');
        $object->getActiveSheet()->setCellValue("AM{$contador}", 'Confirmación de Orden de Compra');
         $object->getActiveSheet()->setCellValue("AN{$contador}", 'Usuario');




        $listaClienteRefacciones = $this->export->ListaClienteRefacciones();

        $excel_row = 2;
        foreach ($listaClienteRefacciones as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->referencia);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->cantidad_maxima);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->precio_unitario);
            //$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->precio_unitario);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->vida_util_dias);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->periodo_surtimiento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->periodo_surtimiento_vida_util);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->cantidad_minima);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->paqueteria);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->tipo_entrega);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->dias_credito);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->pulgadas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->diametro_rod_ml);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->maquina_cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->capacitacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->capacitacion_fecha);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->piezas_juego);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->costo_juego);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->juego_mensuales);
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->golpes_prom_comp);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->golpes_prom_rodicut);
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->beneficio_golpes_prom);
            $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->tiempo_rot_com);
            $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->tiempo_rot_rodicut);
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->beneficio_rot_prom);
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->precio_golpe);
            $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->ciudad_planta);
            $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->observacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->marca_maquina);
            $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->contacto);
            $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->tipo_maquina);
            $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->troquel);
            $object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->uso_de_cfdi);
            $object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->metodo_pago);
            $object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row->fecha_visita);
            $object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row->fecha_seguimiento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row->golpes_maquina);
             $object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row->confirmacion_orden_compra);
            $object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row->first_name);
             
            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Control SIC.xlsx"');
        $object_writer->save('php://output');
    }
    
    
    public function crearExcelCensoMaquinariaProspectos() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Censo Maquinaria');
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Saúl González Moctezuma") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SIM")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrollador de Software Saúl ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 2;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(16);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        //$styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        //  $object->getActiveSheet()->getStyle('2')->applyFromArray($styleArray);
        //Le aplicamos negrita a los títulos de la cabecera.
        /*  $object->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("G{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("H{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("I{$contador}")->getFont()->setBold(true); */




        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'GRUPO');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'EMPRESA');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'CIUDAD / MUNICIPIO');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'PUESTO');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'NOMBRE');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'CELULAR');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'CORREO EMPRESARIAL');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'CORREO PERSONAL');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'TIPO DE CLIENTE');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'ASESOR');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'ESTATUS DE CLIENTE');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'TAMAÑO DE CLIENTE');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'TIPO DE MERCADO');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Usuario');



        $object->getActiveSheet()->getStyle('A2:G999')->getAlignment()->setWrapText(true);
        //   $object->getActiveSheet()->getStyle('A3:H'.$object->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
        $listaCensoMaquinaria = $this->export->ListaCensoMaquinariaProspectos();





        //        $sheet->mergeCells("G".($row_count+1).":I".($row_count+1));   
        //   $object->mergeCells("A:I");   
        $excel_row = 5;
        $renglon = 3;
        $aumentar = 1;
        /*
          $object->getActiveSheet()->removeRow(3);
          $object->getActiveSheet()->removeRow(4);
          $object->getActiveSheet()->removeRow(5);
          $object->getActiveSheet()->removeRow(6);
          $object->getActiveSheet()->removeRow(7);
          $object->getActiveSheet()->removeRow(8);
          $object->getActiveSheet()->removeRow(9);
          $object->getActiveSheet()->removeRow(10);
          $object->getActiveSheet()->removeRow(11);
          $object->getActiveSheet()->removeRow(12);
          $object->getActiveSheet()->removeRow(13);
          $object->getActiveSheet()->removeRow(14);
          $object->getActiveSheet()->removeRow(15); */


        $BStyle = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );


        $centrarTexto = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            )
        );

        $textoNegrita = array(
            'font' => array(
                'bold' => true
            )
        );

        $object->getActiveSheet()->getStyle('2:2')->applyFromArray($textoNegrita);


        foreach ($listaCensoMaquinaria as $row) {



            // $objPHPExcel->getActiveSheet()->mergeCells('A1:C1');
            //  $object->getActiveSheet()->mergeCells("A".($excel_row).":A".($excel_row+8));

            $object->getActiveSheet()->insertNewRowBefore($excel_row, 10);

            $object->getActiveSheet()->getStyle('A' . ($excel_row) . ':A' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('A' . ($excel_row + 10 ) . ':A' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('A' . ($excel_row) . ':A' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('A' . ($excel_row) . ':A' . ($excel_row + 7))->applyFromArray($centrarTexto);




            $object->getActiveSheet()->getStyle('B' . ($excel_row) . ':B' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('B' . ($excel_row + 10 ) . ':B' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('B' . ($excel_row) . ':B' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('B' . ($excel_row) . ':B' . ($excel_row + 7))->applyFromArray($centrarTexto);



            $object->getActiveSheet()->getStyle('C' . ($excel_row) . ':C' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('C' . ($excel_row    + 10 ) . ':C' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('C' . ($excel_row) . ':C' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('C' . ($excel_row) . ':C' . ($excel_row + 7))->applyFromArray($centrarTexto);



            $object->getActiveSheet()->getStyle('D' . ($excel_row) . ':D' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('D' . ($excel_row + 10 ) . ':D' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('D' . ($excel_row) . ':D' . ($excel_row + 7))->applyFromArray($textoNegrita);




            $object->getActiveSheet()->getStyle('E' . ($excel_row) . ':E' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('E' . ($excel_row + 10 ) . ':E' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('F' . ($excel_row) . ':F' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('F' . ($excel_row + 10 ) . ':F' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('G' . ($excel_row) . ':G' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('G' . ($excel_row + 10 ) . ':G' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('H' . ($excel_row) . ':H' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('H' . ($excel_row + 10 ) . ':H' . ($excel_row + 11))->applyFromArray($BStyle);



            $object->getActiveSheet()->getStyle('I' . ($excel_row) . ':I' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('I' . ($excel_row + 10 ) . ':I' . ($excel_row + 11))->applyFromArray($BStyle);
          /*  $object->getActiveSheet()->mergeCells('I' . ($excel_row) . ':I' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('I' . ($excel_row) . ':I' . ($excel_row + 7))->applyFromArray($centrarTexto);*/

            $object->getActiveSheet()->getStyle('J' . ($excel_row) . ':J' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('J' . ($excel_row + 10 ) . ':J' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('J' . ($excel_row) . ':J' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('J' . ($excel_row) . ':J' . ($excel_row + 7))->applyFromArray($centrarTexto);

            $object->getActiveSheet()->getStyle('K' . ($excel_row) . ':K' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('K' . ($excel_row + 10 ) . ':K' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('K' . ($excel_row) . ':K' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('K' . ($excel_row) . ':K' . ($excel_row + 7))->applyFromArray($centrarTexto);

            $object->getActiveSheet()->getStyle('L' . ($excel_row) . ':L' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('L' . ($excel_row + 10 ) . ':L' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('L' . ($excel_row) . ':L' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('L' . ($excel_row) . ':L' . ($excel_row + 7))->applyFromArray($centrarTexto);

            $object->getActiveSheet()->getStyle('M' . ($excel_row) . ':M' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('M' . ($excel_row + 10 ) . ':M' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('M' . ($excel_row) . ':M' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('M' . ($excel_row) . ':M' . ($excel_row + 7))->applyFromArray($centrarTexto);

            $object->getActiveSheet()->getStyle('N' . ($excel_row) . ':N' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('N' . ($excel_row + 10 ) . ':N' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('N' . ($excel_row) . ':N' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('N' . ($excel_row) . ':N' . ($excel_row + 7))->applyFromArray($centrarTexto);



            /* $object->setActiveSheetIndex()->mergeCells("A" . ($excel_row) . ":A" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("B" . ($excel_row) . ":B" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("C" . ($excel_row) . ":C" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("D" . ($excel_row) . ":D" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("E" . ($excel_row) . ":E" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("F" . ($excel_row) . ":F" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("G" . ($excel_row) . ":J" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("H" . ($excel_row) . ":H" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("I" . ($excel_row) . ":I" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("J" . ($excel_row) . ":J" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("K" . ($excel_row) . ":K" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("L" . ($excel_row) . ":L" . ($excel_row + 8));
              $object->setActiveSheetIndex(0)->mergeCells("M" . ($excel_row) . ":M" . ($excel_row + 8)); */

            //$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, ($excel_row), $row->grupo);



            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->empresa);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->ciudad_municipio);


            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, 'DUEÑO');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->nombre_dueno);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->celular_dueno);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->correo_empresarial_dueno);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->correo_personal_dueno);



            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 1, 'CEO');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 1, $row->nombre_ceo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 1, $row->celular_ceo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 1, $row->correo_empresarial_ceo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 1, $row->correo_personal_ceo);


            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 2, 'Gte. Planta/Director');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 2, $row->nombre_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 2, $row->celular_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 2, $row->correo_empresarial_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 2, $row->correo_personal_gerente);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 3, 'Gte. Produccion');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 3, $row->nombre_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 3, $row->celular_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 3, $row->correo_empresarial_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 3, $row->correo_personal_gerente);



            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 4, 'Gte. Mtto');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 4, $row->nombre_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 4, $row->celular_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 4, $row->correo_empresarial_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 4, $row->correo_personal_gerente);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 5, 'Gte. Compras');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 5, $row->nombre_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 5, $row->celular_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 5, $row->correo_empresarial_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 5, $row->correo_personal_gerente);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 6, 'Gte. Ventas');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 6, $row->nombre_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 6, $row->celular_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 6, $row->correo_empresarial_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 6, $row->correo_personal_gerente);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 7, 'Otros');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 7, $row->nombre_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 7, $row->celular_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 7, $row->correo_empresarial_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 7, $row->correo_personal_gerente);










            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->tipo_de_cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->asesor);
             $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row + 9, $row->asesor_maquinaria);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row + 10, $row->asesor_refacciones);
        
            
            
            //    $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->numero_maquina);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->estatus_cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->tamano_cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->tipo_mercado);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->first_name);

            // $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->cotizacion);



            $object->getActiveSheet()->setCellValueByColumnAndRow(0, ($excel_row + 9), 'CENSO');
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, ($excel_row + 10), 'VOLUMEN DE PRODUCCION');
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, ($excel_row + 10), 'NECESIDAD');
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, ($excel_row + 10), 'COMPROMISO');
            /*$object->getActiveSheet()->setCellValueByColumnAndRow(3, ($excel_row + 10), 'MÁQUINA 1');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, ($excel_row + 10), 'MÁQUINA 2');
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, ($excel_row + 10), 'MÁQUINA 3');
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, ($excel_row + 10), 'MÁQUINA 4');
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, ($excel_row + 10), 'MÁQUINA 5');
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, ($excel_row + 10), 'MÁQUINA  6');
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, ($excel_row + 10), 'MÁQUINA 7');
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, ($excel_row + 10), 'LISTADO DE REFACCIONES RECOMENDADO');*/

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, ($excel_row + 11), $row->volumen_produccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, ($excel_row + 11), $row->necesidad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, ($excel_row + 11), $row->compromiso);
            /*$object->getActiveSheet()->setCellValueByColumnAndRow(3, ($excel_row + 11), $row->info_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, ($excel_row + 11), $row->info_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, ($excel_row + 11), $row->info_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, ($excel_row + 11), $row->info_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, ($excel_row + 11), $row->info_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, ($excel_row + 11), $row->info_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, ($excel_row + 11), $row->info_maquina_7);
             $object->getActiveSheet()->setCellValueByColumnAndRow(10, ($excel_row + 11), $row->refacciones);*/




            //$object->getActiveSheet()->insertNewColumnBefore($excel_row);
            $object->getActiveSheet()->insertNewRowBefore($excel_row, 4);




            $excel_row++;

            //$object->getActiveSheet()->mergeCells('A' . ($excel_row) . ': A' . ($excel_row + 10) );
            //   $object->getActiveSheet()->insertNewRowBefore($excel_row+1,7);
        }

//            $object->getActiveSheet()->removeRow(11);
//            $object->getActiveSheet()->removeRow(12);
//            $object->getActiveSheet()->removeRow(13);
//           $object->getActiveSheet()->removeRow(14);
//            $object->getActiveSheet()->removeRow(15);
        // $object->getActiveSheet()->insertNewRowBefore(4, 4); 

        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="ClienteSeguimiento.xlsx"');
          $object_writer->save('php://output'); */



        $filename = 'Censo Maquinaria Prospectos.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }
    
    public function crearExcelReporteCensoMaquinasProspectos() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Control SIC');
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");


        /* $gdImage = imagecreatefrompng('http://robuspack.com/img/logo_blanco.png');
          $object->getActiveSheet()->freezePane('A2');
          $objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
          $objDrawing->setName('Robuspack');
          $objDrawing->setDescription('Robuspack');
          $objDrawing->setImageResource($gdImage);
          $objDrawing->setOffsetX(800);    // setOffsetX works properly
          $objDrawing->setOffsetY(800);  //setOffsetY has no effect
          $objDrawing->setCoordinates('D1');
          $objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
          $objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
          $objDrawing->setHeight(250);
          $objDrawing->setWidth(150);
          $objDrawing->setWorksheet($object->getActiveSheet()); */

        $contador = 1;
        //Le aplicamos ancho las columnas.


       /* $object->getActiveSheet()
                ->getStyle('A1')
                ->getFill()
                ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                ->getStartColor()
                ->setRGB('FF0000');*/

        $object->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(16);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(28);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AJ')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AK')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AL')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Empresa');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Ciudad / Municipio');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Maquinas');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Tipo');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Marca');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Medida');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Troquel');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Codigo de Cubiertas');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Como le llama el cliente');



        $listaCensoMaquiariaReporte = $this->export->ListaCensoMaquinariaProspectos();

        $excel_row = 7;
        $row=7;
        foreach ($listaCensoMaquiariaReporte as $row) {
               //   $object->getActiveSheet()->insertNewRowBefore($excel_row, 10);
                 // $objPHPExcel->getActiveSheet()->insertNewRowBefore(2,10); 
        
             $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
               $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row+1, $row->grupo);
                 $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row+2, $row->grupo);
                   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row+3, $row->grupo);
                     $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row+4, $row->grupo);
                       $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row+5, $row->grupo);
                         $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row+6, $row->grupo);
                      
             
              
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->empresa);
             $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row+1, $row->empresa);
              $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row+2, $row->empresa);
               $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row+3, $row->empresa);
                $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row+4, $row->empresa);
                 $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row+5, $row->empresa);
                  $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row+6, $row->empresa);
                  
                 
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row ,$row->ciudad_municipio);
               $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row+1 ,$row->ciudad_municipio);
                  $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row +2,$row->ciudad_municipio);
                     $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row +3,$row->ciudad_municipio);
                        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row +4,$row->ciudad_municipio);
                           $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row +5,$row->ciudad_municipio);
                              $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row +6,$row->ciudad_municipio);
                               
            
             $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->info_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+1, $row->info_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+2, $row->info_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+3, $row->info_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+4, $row->info_maquina_5);
           $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+5, $row->info_maquina_6);
           $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+6, $row->info_maquina_7);
           
           
           
           
            
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row, $row->tipo_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+1, $row->tipo_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+2, $row->tipo_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+3, $row->tipo_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+4, $row->tipo_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+5, $row->tipo_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+6, $row->tipo_maquina_7);
            
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->modelo_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+1, $row->modelo_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+2, $row->modelo_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+3, $row->modelo_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+4, $row->modelo_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+5, $row->modelo_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+6, $row->modelo_maquina_7);
            
            
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->medida_maquina_1);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+1, $row->medida_maquina_2);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+2, $row->medida_maquina_3);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+3, $row->medida_maquina_4);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+4, $row->medida_maquina_5);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+5, $row->medida_maquina_6);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+6, $row->medida_maquina_7);
            
            
            
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->troquel_maquina_1);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+1, $row->troquel_maquina_2);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+2, $row->troquel_maquina_3);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+3, $row->troquel_maquina_4);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+4, $row->troquel_maquina_5);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+5, $row->troquel_maquina_6);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+6, $row->troquel_maquina_7);
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->codigo_cubierta_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+1, $row->codigo_cubierta_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+2, $row->codigo_cubierta_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+3, $row->codigo_cubierta_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+4, $row->codigo_cubierta_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+5, $row->codigo_cubierta_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+6, $row->codigo_cubierta_maquina_7);
            
           
              //$object->getActiveSheet()->insertNewRowBefore($excel_row, 10);
        
            $excel_row+1;
            
        }

        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="Refacciones.xls"');
          $object_writer->save('php://output'); */



        //para bloquear la hoja de excel 
        //$object->getActiveSheet()->getProtection()->setSheet(true);

       // $object->getActiveSheet()->getCell('A1')->getHyperlink()->setUrl('http://www.scrobuspack.com');

        //$object->getActiveSheet()->getCell('A1')->setValueExplicit('SCROBUSPACK', PHPExcel_Cell_DataType::TYPE_STRING);
        $object->getActiveSheet()->getHeaderFooter()->setOddHeader('&C&HSistema de Control Robuspack');
        $object->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B ' . $object->getProperties()->getTitle() . '&RPaágina &P de &N');

        //->getActiveSheet()->setCellValue('A3', 'La fecha en la que se descargo el archivo es ' . date('d-m-Y'));
        //PARA  salto de línea en una celda 
        //$object->getActiveSheet()->getCell('A2')->setValue("hello\nworld");
        // $object->getActiveSheet()->getStyle('A2')->getAlignment()->setWrapText(true);

        $filename = 'Censo Reporte Prospectos.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    } 
  //

    
    
    
    
    
    
    
    
    public function crearExcelReporteFlexo() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Reporte Flexo');
        //Aquí puedes modificar algunas propiedades del archivo que será creado
        $object->getProperties()->setCreator("Saúl González ");
        $object->getProperties()->setLastModifiedBy("https://scrobuspack.com");
        $object->getProperties()->setTitle("Sistema de Control Robuspack");


        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(10);


        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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



        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Compañía');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Ciudad');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Estado');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Máquinas Flexograficas');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Usan troquel');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'YA ES CLIENTE RBK');
        $object->getActiveSheet()->setCellValue("G{$contador}", '% de Presencia');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Usuario');



        $listadeFlexos = $this->export->ListaFlexo();

        $excel_row = 2;


        //exporta los datos de la tabla
        foreach ($listadeFlexos as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->empresa_concatenada);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->municipio);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->estado);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->total_de_flexos);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->troquel);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->cliente_robuspack);
            
            
         //   $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row,  '= COUNTIF'   . '                                                                 (F' . ($excel_row) . '/D' . ($excel_row).', 0)');
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, '=IFERROR( F' . ($excel_row ) . '/E' . ($excel_row ). ',0)');
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->nombre_usuario);
         


            $excel_row++;
        }
        
        

       //PARA DAR FORMARO DE PORCENTAJE
        $object->getActiveSheet()->getStyle('G1:G' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);


        //para hacer las sumas 
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, 'Total');
       
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, '= SUM(D2:D' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, '= SUM(E2:E' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, '= SUM(F2:F' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, '=IFERROR( F' . ($excel_row ) . '/E' . ($excel_row ). ',0)');

        //APLICAR COLOR A CELDA
        
         $object->getActiveSheet() ->getStyle('A1:H1') ->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('CC0000');

         $object->getActiveSheet() ->getStyle('A' . ($excel_row ) . ':H' . ($excel_row )) ->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('B7DEE8');
         
         
         
           //Le aplicamos el tipo, color y tamaño de letra.
          $object->getActiveSheet()
            ->getStyle('A1:H1')
            ->getFont()
            ->getColor()
            ->setRGB ('FFFFFF')  ;
          
          
          
          $object->getActiveSheet()->getStyle('A2:A' . ($excel_row))->getAlignment()->setWrapText(true);
        $object->getActiveSheet()->getStyle('A2:A' . $object->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true);

        $object->getActiveSheet()->getStyle('A2:' . $object->getActiveSheet()->getHighestColumn() . $object->getActiveSheet()->getHighestRow())->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        /** Borders for heading */
        $BStyle = array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)));
        $object->getActiveSheet()->getStyle('A2:H' . ($excel_row))->applyFromArray($BStyle);
          
          
        $filename = 'Reporte de Flexo.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }

    
    
    
    
    
    
    
    
    
    
    public function crearExcelReporteCensoMaquinas() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Reporte Censo Maquinaria');
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");


        /* $gdImage = imagecreatefrompng('http://robuspack.com/img/logo_blanco.png');
          $object->getActiveSheet()->freezePane('A2');
          $objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
          $objDrawing->setName('Robuspack');
          $objDrawing->setDescription('Robuspack');
          $objDrawing->setImageResource($gdImage);
          $objDrawing->setOffsetX(800);    // setOffsetX works properly
          $objDrawing->setOffsetY(800);  //setOffsetY has no effect
          $objDrawing->setCoordinates('D1');
          $objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG);
          $objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
          $objDrawing->setHeight(250);
          $objDrawing->setWidth(150);
          $objDrawing->setWorksheet($object->getActiveSheet()); */

        $contador = 1;
        //Le aplicamos ancho las columnas.
    

       /* $object->getActiveSheet()
                ->getStyle('A1')
                ->getFill()
                ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                ->getStartColor()
                ->setRGB('FF0000');*/

        //$object->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(50);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(50);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(16);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(28);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AJ')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AK')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AL')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('A1:K1')->applyFromArray($styleArray);




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
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Empresa');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Ciudad / Municipio');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Maquinas');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Tipo');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Marca');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Medida');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Troquel');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Codigo de Cubiertas');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Como le llama el cliente');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Usuario');



        $listaCensoMaquiariaReporte = $this->export->ListaCensoMaquinaria();

        $excel_row = 2;
        $num_rows = $object->getActiveSheet()->getHighestRow();
//$object->getActiveSheet()->insertNewRowBefore($excel_row, 4);
        
       
        
        
        
       /* $con = 0;
    $i=0;
    while($con<=0){
    $Descripcion = ($object->getSheetByName('Reporte Censo Maquinaria')->getCell('A'.$i)->getOldCalculatedValue()==null) ? 'Valor por defecto' : $object->getSheetByName('Reporte Censo Maquinaria')->getCell('a'.$i)->getOldCalculatedValue();

    //Cortamos la mjestra de filas si se llega a la última
    if($object->getSheetByName('Reporte Censo Maquinaria')->getCell('A'.$i)->getOldCalculatedValue()==null){
        $con=1;
    }
    $i++;*/
    foreach ($listaCensoMaquiariaReporte as $row) {
            $maxCell = $object->getActiveSheet()->getHighestRowAndColumn(); 
     $data = $object->getActiveSheet()->rangeToArray('A1:' . $maxCell['column'] . $maxCell['row']); 
     $data = array_map('array_filter', $data); 
     $data = array_filter($data); 
        
            
            $object->getActiveSheet()->getStyle('A' . ($excel_row) . ':A' . ($excel_row + 7))->getFill()->getStartColor()->setRGB('FF0000');
            
            $object->getActiveSheet()->mergeCells('A' . ($excel_row) . ':A' . ($excel_row + 7));
               //   $object->getActiveSheet()->insertNewRowBefore($excel_row, 10);
                 // $objPHPExcel->getActiveSheet()->insertNewRowBefore(2,10); 
        //$object->getActiveSheet()->insertNewRowBefore($excel_row, 10);
        
       
        //Cortamos la mjestra de filas si se llega a la última
    //if($row->grupo==null &&$row->grupo_temporal==null&&$row->empresa==null&&$row->empresa_temporal==null){
       
    //}else{
//$object->getActiveSheet()->insertNewRowBefore($num_rows + 1, 10);
       
    //}
       
       
       
        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row,$row->grupo_temporal.' '.$row->grupo);
             
              
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->empresa.' '.$row->empresa_temporal);
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->ciudad_municipio);
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->info_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+1, $row->info_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+2, $row->info_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+3, $row->info_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+4, $row->info_maquina_5);
           $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+5, $row->info_maquina_6);
           $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row+6, $row->info_maquina_7);
           
           
           
           
            
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row, $row->tipo_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+1, $row->tipo_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+2, $row->tipo_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+3, $row->tipo_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+4, $row->tipo_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+5, $row->tipo_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow( 4,$excel_row+6, $row->tipo_maquina_7);
            
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->modelo_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+1, $row->modelo_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+2, $row->modelo_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+3, $row->modelo_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+4, $row->modelo_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+5, $row->modelo_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row+6, $row->modelo_maquina_7);
            
            
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->medida_maquina_1);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+1, $row->medida_maquina_2);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+2, $row->medida_maquina_3);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+3, $row->medida_maquina_4);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+4, $row->medida_maquina_5);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+5, $row->medida_maquina_6);
             $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row+6, $row->medida_maquina_7);
            
            
            
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->troquel_maquina_1);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+1, $row->troquel_maquina_2);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+2, $row->troquel_maquina_3);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+3, $row->troquel_maquina_4);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+4, $row->troquel_maquina_5);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+5, $row->troquel_maquina_6);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row+6, $row->troquel_maquina_7);
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->codigo_cubierta_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+1, $row->codigo_cubierta_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+2, $row->codigo_cubierta_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+3, $row->codigo_cubierta_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+4, $row->codigo_cubierta_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+5, $row->codigo_cubierta_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row+6, $row->codigo_cubierta_maquina_7);
            
             
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->cliente_conoce_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row+1, $row->cliente_conoce_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row+2, $row->cliente_conoce_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row+3, $row->cliente_conoce_maquina_4); 
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row+4, $row->cliente_conoce_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row+5, $row->cliente_conoce_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row+6, $row->cliente_conoce_maquina_7);
        
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->first_name);
            
            $object->getActiveSheet()->mergeCells('K' . ($excel_row) . ':K' . ($excel_row + 7));
            $object->getActiveSheet()->mergeCells('B' . ($excel_row) . ':B' . ($excel_row + 7));
            
            
            
$object->getActiveSheet()->getStyle('A' . ($excel_row) . ':A' . ($excel_row + 7))->getAlignment()->applyFromArray(
    array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,)
);


$object->getActiveSheet()->getStyle('B' . ($excel_row) . ':B' . ($excel_row + 7))->getAlignment()->applyFromArray(
    array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,)
);

$object->getActiveSheet()->getStyle('K' . ($excel_row) . ':K' . ($excel_row + 7))->getAlignment()->applyFromArray(
    array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,)
);
       
       
 $object->getActiveSheet()->getStyle('A1:K999')->getAlignment()->setWrapText(true); 
        
$object->getActiveSheet()->getStyle('A1:K1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00B0F0');


$object->getActiveSheet()->getStyle('A1:K1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00B0F0');


               

           
            $excel_row=  $excel_row+8;
            $fondo= $excel_row+16;
            
            
        }
        
//}
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
/*
               
     $object->getActiveSheet()->getStyle('A1:K1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00B0F0');
        //$object->getActiveSheet()->getStyle('A2:AP' . ($excel_row) )->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        $object->getActiveSheet()->getStyle('A2:K' . $object->getActiveSheet()->getHighestColumn() . $object->getActiveSheet()->getHighestRow())->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        
        // $object->getActiveSheet()->getStyle('A2:AP' . ($excel_row))->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);
        $BStyle = array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)));
        $object->getActiveSheet()->getStyle('A2:K500')->applyFromArray($BStyle);
        //Le aplicamos el tipo, color y tamaño de letra del cuerpo.
        $styleArray2 = array('font' => array('bold' => FALSE, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('A2:K500')->applyFromArray($styleArray2);


        $object->getActiveSheet()->getStyle('A2:K2')->getAlignment()->setWrapText(true); 
        $object->getActiveSheet()->getStyle('A2:K2'.$object->getActiveSheet()->getHighestRow()) ->getAlignment()->setWrapText(true);
        */
        
        
        
        
        
        
        
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="Refacciones.xls"');
          $object_writer->save('php://output'); */



        //para bloquear la hoja de excel 
        //$object->getActiveSheet()->getProtection()->setSheet(true);

       // $object->getActiveSheet()->getCell('A1')->getHyperlink()->setUrl('http://www.scrobuspack.com');

        //$object->getActiveSheet()->getCell('A1')->setValueExplicit('SCROBUSPACK', PHPExcel_Cell_DataType::TYPE_STRING);
        $object->getActiveSheet()->getHeaderFooter()->setOddHeader('&C&HSistema de Control Robuspack');
        $object->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B ' . $object->getProperties()->getTitle() . '&RPaágina &P de &N');

        //->getActiveSheet()->setCellValue('A3', 'La fecha en la que se descargo el archivo es ' . date('d-m-Y'));
        //PARA  salto de línea en una celda 
        //$object->getActiveSheet()->getCell('A2')->setValue("hello\nworld");
        // $object->getActiveSheet()->getStyle('A2')->getAlignment()->setWrapText(true);

        $filename = 'Censo Reporte.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    } 
    
    
    
    
    
    
    
     // export xlsx|xls file
    // create xlsx
    public function crearExcelCensoMaquinaria() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();
        //$object->getActiveSheet()->setAutoFilter("A1:V1");
        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Censo Maquinaria');
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Saúl González Moctezuma") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SIM")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrollador de Software Saúl ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(16);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        //$styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        //  $object->getActiveSheet()->getStyle('2')->applyFromArray($styleArray);
        //Le aplicamos negrita a los títulos de la cabecera.
        /*  $object->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("F{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("G{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("H{$contador}")->getFont()->setBold(true);
          $object->getActiveSheet()->getStyle("I{$contador}")->getFont()->setBold(true); */




        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'GRUPO');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'EMPRESA');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'CIUDAD / MUNICIPIO');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'PUESTO');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'NOMBRE');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'CELULAR');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'CORREO EMPRESARIAL');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'CORREO PERSONAL');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'TIPO DE CLIENTE');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'ASESOR');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'ESTATUS DE CLIENTE');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'TAMAÑO DE CLIENTE');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'TIPO DE MERCADO');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Usuario');



        $object->getActiveSheet()->getStyle('A2:G999')->getAlignment()->setWrapText(true);
        //   $object->getActiveSheet()->getStyle('A3:H'.$object->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
        $listaCensoMaquinaria = $this->export->ListaCensoMaquinaria();





        //        $sheet->mergeCells("G".($row_count+1).":I".($row_count+1));   
        //   $object->mergeCells("A:I");   
        $excel_row =2;
        $renglon = 1;
        $aumentar = 1;
        /*
          $object->getActiveSheet()->removeRow(3);
          $object->getActiveSheet()->removeRow(4);
          $object->getActiveSheet()->removeRow(5);
          $object->getActiveSheet()->removeRow(6);
          $object->getActiveSheet()->removeRow(7);
          $object->getActiveSheet()->removeRow(8);
          $object->getActiveSheet()->removeRow(9);
          $object->getActiveSheet()->removeRow(10);
          $object->getActiveSheet()->removeRow(11);
          $object->getActiveSheet()->removeRow(12);
          $object->getActiveSheet()->removeRow(13);
          $object->getActiveSheet()->removeRow(14);
          $object->getActiveSheet()->removeRow(15); */


        $BStyle = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );


        $centrarTexto = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            )
        );

        $textoNegrita = array(
            'font' => array(
                'bold' => true
            )
        );
        
        $object->getActiveSheet()->getStyle('A1:N1')->applyFromArray($textoNegrita);
            

        foreach ($listaCensoMaquinaria as $row) {


            
            // $objPHPExcel->getActiveSheet()->mergeCells('A1:C1');
            //  $object->getActiveSheet()->mergeCells("A".($excel_row).":A".($excel_row+8));

            //$object->getActiveSheet()->insertNewRowBefore($excel_row, 10);

            $object->getActiveSheet()->getStyle('A' . ($excel_row) . ':A' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('A' . ($excel_row + 10 ) . ':A' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('A' . ($excel_row) . ':A' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('A' . ($excel_row) . ':A' . ($excel_row + 7))->applyFromArray($centrarTexto);




            $object->getActiveSheet()->getStyle('B' . ($excel_row) . ':B' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('B' . ($excel_row + 10 ) . ':B' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('B' . ($excel_row) . ':B' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('B' . ($excel_row) . ':B' . ($excel_row + 7))->applyFromArray($centrarTexto);



            $object->getActiveSheet()->getStyle('C' . ($excel_row) . ':C' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('C' . ($excel_row + 10 ) . ':C' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('C' . ($excel_row) . ':C' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('C' . ($excel_row) . ':C' . ($excel_row + 7))->applyFromArray($centrarTexto);



            $object->getActiveSheet()->getStyle('D' . ($excel_row) . ':D' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('D' . ($excel_row + 10 ) . ':D' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('D' . ($excel_row) . ':D' . ($excel_row + 7))->applyFromArray($textoNegrita);
            
            
            
            
            $object->getActiveSheet()->getStyle('E' . ($excel_row) . ':E' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('E' . ($excel_row + 10 ) . ':E' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('F' . ($excel_row) . ':F' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('F' . ($excel_row + 10 ) . ':F' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('G' . ($excel_row) . ':G' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('G' . ($excel_row + 10 ) . ':G' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('H' . ($excel_row) . ':H' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('H' . ($excel_row + 10 ) . ':H' . ($excel_row + 11))->applyFromArray($BStyle);



            $object->getActiveSheet()->getStyle('I' . ($excel_row) . ':I' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('I' . ($excel_row + 10 ) . ':I' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('I' . ($excel_row) . ':I' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('I' . ($excel_row) . ':I' . ($excel_row + 7))->applyFromArray($centrarTexto);

            $object->getActiveSheet()->getStyle('J' . ($excel_row) . ':J' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('J' . ($excel_row + 10 ) . ':J' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('J' . ($excel_row) . ':J' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('J' . ($excel_row) . ':J' . ($excel_row + 7))->applyFromArray($centrarTexto);

            $object->getActiveSheet()->getStyle('K' . ($excel_row) . ':K' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('K' . ($excel_row + 10 ) . ':K' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('K' . ($excel_row) . ':K' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('K' . ($excel_row) . ':K' . ($excel_row + 7))->applyFromArray($centrarTexto);

            $object->getActiveSheet()->getStyle('L' . ($excel_row) . ':L' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('L' . ($excel_row + 10 ) . ':L' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('L' . ($excel_row) . ':L' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('L' . ($excel_row) . ':L' . ($excel_row + 7))->applyFromArray($centrarTexto);

            $object->getActiveSheet()->getStyle('M' . ($excel_row) . ':M' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('M' . ($excel_row + 10 ) . ':M' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('M' . ($excel_row) . ':M' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('M' . ($excel_row) . ':M' . ($excel_row + 7))->applyFromArray($centrarTexto);
            
            $object->getActiveSheet()->getStyle('N' . ($excel_row) . ':N' . ($excel_row + 7))->applyFromArray($BStyle);
            $object->getActiveSheet()->getStyle('N' . ($excel_row + 10 ) . ':N' . ($excel_row + 11))->applyFromArray($BStyle);
            $object->getActiveSheet()->mergeCells('N' . ($excel_row) . ':N' . ($excel_row + 7));
            $object->getActiveSheet()->getStyle('N' . ($excel_row) . ':N' . ($excel_row + 7))->applyFromArray($centrarTexto);



            /* $object->setActiveSheetIndex()->mergeCells("A" . ($excel_row) . ":A" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("B" . ($excel_row) . ":B" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("C" . ($excel_row) . ":C" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("D" . ($excel_row) . ":D" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("E" . ($excel_row) . ":E" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("F" . ($excel_row) . ":F" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("G" . ($excel_row) . ":J" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("H" . ($excel_row) . ":H" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("I" . ($excel_row) . ":I" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("J" . ($excel_row) . ":J" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("K" . ($excel_row) . ":K" . ($excel_row + 8));
              $object->setActiveSheetIndex()->mergeCells("L" . ($excel_row) . ":L" . ($excel_row + 8));
              $object->setActiveSheetIndex(0)->mergeCells("M" . ($excel_row) . ":M" . ($excel_row + 8)); */

            //$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, ($excel_row), $row->grupo .' '. $row->grupo_temporal );



            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->empresa . ' '. $row->empresa_temporal );
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->ciudad_municipio);


            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, 'DUEÑO');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->nombre_dueno);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->celular_dueno);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->correo_empresarial_dueno);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->correo_personal_dueno);



            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 1, 'CEO');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 1, $row->nombre_ceo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 1, $row->celular_ceo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 1, $row->correo_empresarial_ceo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 1, $row->correo_personal_ceo);


            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 2, 'Gte. Planta/Director');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 2, $row->nombre_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 2, $row->celular_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 2, $row->correo_empresarial_gerente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 2, $row->correo_personal_gerente);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 3, 'Gte. Produccion');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 3, $row->nombre_produccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 3, $row->celular_produccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 3, $row->correo_empresarial_produccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 3, $row->correo_personal_produccion);



            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 4, 'Gte. Mtto');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 4, $row->nombre_mtto);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 4, $row->celular_mtto);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 4, $row->correo_empresarial_mtto);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 4, $row->correo_personal_mtto);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 5, 'Gte. Compras');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 5, $row->nombre_compras);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 5, $row->celular_compras);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 5, $row->correo_empresarial_compras);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 5, $row->correo_personal_compras);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 6, 'Gte. Ventas');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 6, $row->nombre_ventas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 6, $row->celular_ventas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 6, $row->correo_empresarial_ventas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 6, $row->correo_personal_ventas);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row + 7, 'Otros');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row + 7, $row->nombre_otros);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row + 7, $row->celular_otros);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row + 7, $row->correo_empresarial_otros);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row + 7, $row->correo_personal_otros);










            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->tipo_de_cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->asesor);
            //    $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->numero_maquina);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->estatus_cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->tamano_cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->tipo_mercado);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->first_name);

            // $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->cotizacion);



           /* 
           
           $object->getActiveSheet()->setCellValueByColumnAndRow(0, ($excel_row + 9), 'CENSO');
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, ($excel_row + 10), 'VOLUMEN DE PRODUCCION');
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, ($excel_row + 10), 'NECESIDAD');
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, ($excel_row + 10), 'COMPROMISO');
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, ($excel_row + 10), 'MÁQUINA 1');
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, ($excel_row + 10), 'MÁQUINA 2');
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, ($excel_row + 10), 'MÁQUINA 3');
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, ($excel_row + 10), 'MÁQUINA 4');
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, ($excel_row + 10), 'MÁQUINA 5');
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, ($excel_row + 10), 'MÁQUINA  6');
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, ($excel_row + 10), 'MÁQUINA 7');
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, ($excel_row + 10), 'LISTADO DE REFACCIONES RECOMENDADO');

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, ($excel_row + 11), $row->volumen_produccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, ($excel_row + 11), $row->necesidad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, ($excel_row + 11), $row->compromiso);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, ($excel_row + 11), $row->info_maquina_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, ($excel_row + 11), $row->info_maquina_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, ($excel_row + 11), $row->info_maquina_3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, ($excel_row + 11), $row->info_maquina_4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, ($excel_row + 11), $row->info_maquina_5);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, ($excel_row + 11), $row->info_maquina_6);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, ($excel_row + 11), $row->info_maquina_7);

            $object->getActiveSheet()->setCellValueByColumnAndRow(10, ($excel_row + 11), $row->refacciones);

*/


            //$object->getActiveSheet()->insertNewColumnBefore($excel_row);
//$object->getActiveSheet()->insertNewRowBefore($excel_row, 4);



      $excel_row=  $excel_row+9;
            //$excel_row+10;

            //$object->getActiveSheet()->mergeCells('A' . ($excel_row) . ': A' . ($excel_row + 10) );
            //   $object->getActiveSheet()->insertNewRowBefore($excel_row+1,7);
        }
       
//            $object->getActiveSheet()->removeRow(11);
//            $object->getActiveSheet()->removeRow(12);
//            $object->getActiveSheet()->removeRow(13);
//           $object->getActiveSheet()->removeRow(14);
//            $object->getActiveSheet()->removeRow(15);
        // $object->getActiveSheet()->insertNewRowBefore(4, 4); 

        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="ClienteSeguimiento.xlsx"');
          $object_writer->save('php://output'); */



        $filename = 'Censo Maquinaria.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

   public function crearExcelConsumibles() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Lista de Precios');
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        
        
        
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(60);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(10);
$object->getActiveSheet()->getColumnDimension('S')->setWidth(10);
$object->getActiveSheet()->getColumnDimension('T')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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
         $object->getActiveSheet()->setCellValue("T{$contador}", 'Fecha Corte de Rotación');


        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Código');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Fecha');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Fabricante');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Máquina');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Precio 1');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Precio 2');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Precio 3');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Precio 4');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Precio 5');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Pc Exwork');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Pc Fob');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Pc CIF');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Pc CIP');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Ancho');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Espesor');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Diámetro');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'Cue');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Dicar');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Stock');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Fecha Corte de Rotación');




        $ListaConsumibles = $this->export->ListaConsumibles();

        $excel_row = 2;
        foreach ($ListaConsumibles as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->referencia);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->fecha);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->fabricante);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->maquina);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->precio1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->precio2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->precio3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->precio4);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->precio5);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->pcexwork);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->pcfob);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->pccif);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->pccip);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->ancho);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->espesor);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->diametro);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->empresa_competencia_1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->empresa_competencia_2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->inventario);
$object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->fecha_corte_rotacion);


            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Lista De Precios.xlsx"');
        $object_writer->save('php://output');
    }
    
    public function crearExcelEmpresa() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Empresa');
        
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(60);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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




        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Estado');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Ciudad');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Nombre de la Empresa');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Estatus');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Vendedor');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Nombre');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Cargo');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Email');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Email 2');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Email 3');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Página Web');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Marketing');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Teléfono 1');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Teléfono 2');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Teléfono 3');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Dirección');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'Domicilio Secundario');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Código Postal');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Integrados');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Corrugadora');
        $object->getActiveSheet()->setCellValue("U{$contador}", 'Sheet Plant Size');
        $object->getActiveSheet()->setCellValue("V{$contador}", 'Single Face');
        $object->getActiveSheet()->setCellValue("W{$contador}", 'Comercializadora');
        $object->getActiveSheet()->setCellValue("X{$contador}", 'Litografía');
        $object->getActiveSheet()->setCellValue("Y{$contador}", 'Flexos Actuales');
        $object->getActiveSheet()->setCellValue("Z{$contador}", 'Volúmen en Pesos');
        $object->getActiveSheet()->setCellValue("AA{$contador}", 'Comentarios');






        $listaEmpresa = $this->export->ListaEmpresa();

        $excel_row = 2;
        foreach ($listaEmpresa as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->estado);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->ciudad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nombre_empresa);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->estatus);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->vendedor);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->nombre);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->cargo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->email);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->email2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->email3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->pag_web);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->marketing);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->tel1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->tel2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->tel3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->direccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->dom_secundario);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->cp);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->integrados);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->corrugadora);
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->sheet);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->single);
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->comercializadora);
            $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->litografia);
            $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->flexos);
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->volumen);
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->comentarios);
            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Empresa.xlsx"');
        $object_writer->save('php://output');
    }

    // export xlsx|xls file
    // create xlsx
    public function crearExcelClienteSeguimiento() {
    
       // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();
        




        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Cliente Seguimiento');
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Saúl González Moctezuma") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SIM")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrollador de Software Saúl ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(16);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('1')->applyFromArray($styleArray);
        
           $object->getActiveSheet()->getStyle('A1:AA1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('538DD5');
        $object->getActiveSheet()->getStyle('A1:AA1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('538DD5');




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




        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Nivel');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Necesidad');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Compromiso');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Notas');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Modelo Máquina');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Número Máquina');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Valor Cotización');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Fecha Última Visita');
        
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Pedido');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Contrato');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Cotización');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Usuario');
        
           $object->getActiveSheet()->setCellValue("J{$contador}", 'Cotización');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Contrato');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Pedido');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Usuario');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Fecha Prospección');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Llamadas del Cliente');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Fecha en que nos contacto el cliente');
        $object->getActiveSheet()->setCellValue("Q{$contador}", '5 llamadas hechas');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Fecha de la última llamada hecha');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'No Visitas');
        $object->getActiveSheet()->setCellValue("T{$contador}", '¿Esta cerrada la venta?');
        $object->getActiveSheet()->setCellValue("U{$contador}", '¿Es un cliente asignado?');
        $object->getActiveSheet()->setCellValue("V{$contador}", '¿Es un cliente nuevo?');




        $object->getActiveSheet()->getStyle('A2:G999')->getAlignment()->setWrapText(true);
        //   $object->getActiveSheet()->getStyle('A3:H'.$object->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
        $listaClienteSeguimiento = $this->export->ListaClienteSeguimiento();




        $excel_row = 2;
        foreach ($listaClienteSeguimiento as $row) {
            //$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nivel);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->necesidad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->compromiso);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->notas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->modelo_maquina);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->numero_maquina);
             $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->valor_cotizacion);
             $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row,PHPExcel_Shared_Date::PHPToExcel( $row->fecha_ultima_visita));
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->cotizacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->pedido);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->contrato);
            //    $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->numero_maquina);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->first_name);
            // $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->cotizacion);
            
            
            
                     $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row,PHPExcel_Shared_Date::PHPToExcel( $row->fecha_prospeccion));
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->llamadas_cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, PHPExcel_Shared_Date::PHPToExcel($row->fecha_contacto_cliente));
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->llamdas_hechas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, PHPExcel_Shared_Date::PHPToExcel($row->fecha_ult_llamada));
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, PHPExcel_Shared_Date::PHPToExcel($row->numero_visitas));
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->ventas_cerrada);
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->cliente_asignado);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->cliente_nuevo);



            $excel_row++;
        }
/*
$object->getActiveSheet()->getStyle('I2:I' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);*/

/*
  $object->getActiveSheet()->getStyle('B1:B9999')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);*/
  
  
    $object->getActiveSheet()->getStyle('I1:I9999')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
      $object->getActiveSheet()->getStyle('N1:N9999')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
        
          $object->getActiveSheet()->getStyle('P1:P9999')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
          $object->getActiveSheet()->getStyle('R1:R9999')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
 
/*

$object->getActiveSheet()
    ->getStyle('I')
    ->getNumberFormat()
    ->setFormatCode('dd--------mmm-yyyy');*/
        
        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="ClienteSeguimiento.xlsx"');
          $object_writer->save('php://output'); */



        $filename = 'Control SIM.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }

     // crear el excel
    public function crearExcelMaximoMinimo() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Máximo y Mínimo');
        //Aquí puedes modificar algunas propiedades del archivo que será creado
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(38);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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



        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Descripción');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Código');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Fecha Corte Rotación');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Grupo');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Cantidad Máxima');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Fecha Último Consumo');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Periodo Surtimiento');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Fecha Requiere Piezas');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Pedido Inteligente');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Total Requerido Mensual');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Total Requerido Trimestral');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Total Requerido Mensual con OC o CONS');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Total Requerido Trimestral con OC o CONS');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Inventario');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Piezas a recibir');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'Disponibilidad Total');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Piezas a solicitar');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Meses Cubiertos');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Fecha Cubierta');





        $listaMaximoMinimo = $this->export->ListaMaximoMinimo();

        $excel_row = 2;
        foreach ($listaMaximoMinimo as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->descripcion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->codigo);

            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->fecha_corte_rotacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->cantidad_maxima);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->fecha_ultimo_consumo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->periodo_surtimiento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->fecha_requiere_piezas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->pedido_inteligente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->suma_total_requerido_mensual);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->suma_total_requerido_trimestral);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->suma_total_requerido_mensual_con_oc_y_consignacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->suma_total_requerido_trimestral_con_oc_y_consignacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->inventario);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->piezas_a_recibir);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->disponibilidad_total);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->piezas_a_solicitar);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->meses_cubiertos);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->fecha_cubierta);




            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Maximo Minimo.xlsx"');
        $object_writer->save('php://output');
    }

    // crear el excel
    public function crearExcelRotacionInventario() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Rotación Inventario');
        //Aquí puedes modificar algunas propiedades del archivo que será creado
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(38);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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



        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Código');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Fecha Corte Rotación');
        
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Fecha Último Consumo');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Fecha Requiere Piezas');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Pedido Inteligente');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Total Requerido Mensual');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Total Requerido Trimestral');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Total Requerido Mensual con OC o CONS');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Total Requerido Trimestral con OC o CONS');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Inventario');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Piezas a recibir');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Disponibilidad Total');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Piezas a solicitar');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Meses Cubiertos');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Fecha Cubierta');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'PC FOB');




        $listaRotacionInventaro = $this->export->ListaRotacionInventario();

        $excel_row = 2;
        foreach ($listaRotacionInventaro as $row) {
           
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->codigo);

            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->fecha_corte_rotacion);
            
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->fecha_ultimo_consumo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->fecha_requiere_piezas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->pedido_inteligente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->suma_total_requerido_mensual);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->suma_total_requerido_trimestral);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->suma_total_requerido_mensual_con_oc_y_consignacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->suma_total_requerido_trimestral_con_oc_y_consignacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->inventario);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row, $row->piezas_a_recibir);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row, $row->disponibilidad_total);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row, $row->piezas_a_solicitar);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->meses_cubiertos);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->fecha_cubierta);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->pc_fob);
            
            
            
            $excel_row++;
        }
         //para hacer las sumas 
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, 'Total');
        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, '= SUM(F2:F' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, '= SUM(G2:G' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, '= SUM(H2:H' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, '= SUM(I2:I' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, '= SUM(J2:J' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, '= SUM(K2:K' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, '= SUM(L2:L' . ($excel_row - 1) . ')');
        
        
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Rotación Inventario.xlsx"');
        $object_writer->save('php://output');
    }
    
    public function crearExcelCliente() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Clientes');
         $object->getActiveSheet()->freezePane('C2'); 
         
         //$object->getActiveSheet()->setAutoFilter('A1:C2');
         
         /* $object->getActiveSheet()->getAutoFilter();
 $object->getColumn('A1:V1');*/

        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrollador de Software Saúl")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");

        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(28);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(35);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('A1:V1')->applyFromArray($styleArray);

        $object->getActiveSheet()->getStyle('A1:V1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('538DD5');
        $object->getActiveSheet()->getStyle('A1:V1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('538DD5');


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

        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Grupo');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Cliente SAE Pesos');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Cliente SAE Dolares');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Razón Social');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'RFC');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Dirección Fiscal');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Teléfono ');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Extensión');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Correo Compras');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Correo Cxp');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Correo Mantenimiento');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Otro Correo');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Moneda');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Cuenta Bancaria Pesos');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Cuenta Bancaria Dolares');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'Vendedor Refacciones');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Vendedor Maquinaria');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'CFDI');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Método de pago');
        $object->getActiveSheet()->setCellValue("U{$contador}", 'Dirección de Entrega');
        $object->getActiveSheet()->setCellValue("V{$contador}", 'Empresa');




        $listaCliente = $this->export->ListaCliente();

        $excel_row = 2;
        foreach ($listaCliente as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->cliente_sae);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->cliente_sae_dolares);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->razon_soc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->rfc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->direccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->tel_cel);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->extension);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->correo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->correo1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->correo2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->correo3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->moneda);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->cta_banc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->cta_banc_dolares);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->vendedor_refacciones);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->vendedor_maquinaria);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->uso_de_cfdi);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->metodo_pago);
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->direccion_entrega);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->empresa);
            $excel_row++;
        }

        $object->getActiveSheet()->getStyle('A2:A' . ($excel_row))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('CCCCCC');
        $object->getActiveSheet()->getStyle('B2:A' . ($excel_row))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('CCCCCC');
        $object->getActiveSheet()->getStyle('A2:A' . ($excel_row))->getAlignment()->setWrapText(true);
        $object->getActiveSheet()->getStyle('A2:A' . $object->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true);

        /* $object->getActiveSheet()->getStyle('A2:U' . ($excel_row))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('DCE6F1');
         */
        $object->getActiveSheet()->getStyle('A2:' . $object->getActiveSheet()->getHighestColumn() . $object->getActiveSheet()->getHighestRow())->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        /** Borders for heading */
        $BStyle = array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)));
        $object->getActiveSheet()->getStyle('A2:V' . ($excel_row))->applyFromArray($BStyle);
        //Le aplicamos el tipo, color y tamaño de letra del cuerpo.
        $styleArray2 = array('font' => array('bold' => FALSE, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('A2:V' . ($excel_row))->applyFromArray($styleArray2);


        $object->getActiveSheet()->getStyle('A2:V' . ($excel_row))->getAlignment()->setWrapText(true);
        $object->getActiveSheet()->getStyle('A2:V' . $object->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true);

        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="Clientes.xlsx"');
          $object_writer->save('php://output'); */



        $filename = 'Clientes.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
     public function crearExcelEmpresaRecoleccionDatos() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Empresa');
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(40);
         $object->getActiveSheet()->getColumnDimension('J')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(60);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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




        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Vendedor');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Identificador');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Nombre de la Empresa');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Estado');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Ciudad');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Domicilio');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Nombre');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Cargo');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Email');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Telefono ');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Nombre 2');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Cargo 2');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Email 2');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Teléfono 2');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Comentarios');
       $object->getActiveSheet()->setCellValue("P{$contador}", 'Usuario');





        $ListaRecoleccionDatos = $this->export->ListaRecoleccionDatos();

        $excel_row = 2;
        foreach ($ListaRecoleccionDatos as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->vendedor);
           $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->identificador);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nombre_empresa);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->estado);
           $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->ciudad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->domicilio);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->nombre);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->cargo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->email);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->tel);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->nombre2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->cargo2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->email2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->tel2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->comentarios);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->first_name);
            
           
            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Empresa.xlsx"');
        $object_writer->save('php://output');
    }














   public function crearExcelFuventas() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Fu Ventas');

        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");

        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(28);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AJ')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AK')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AL')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Ref');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Direccion');

        $object->getActiveSheet()->setCellValue("D{$contador}", 'Código');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Tipo de Producto');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'RFC');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Factura');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Remisión');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Fecha de Remisión');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'OC');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Cantidad');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'PU USD');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Subtotal');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'IVA');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'TOTAL USD');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'TC');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'PU MXN');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Descuento');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Subtotal');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Iva');
        $object->getActiveSheet()->setCellValue("U{$contador}", 'Total MXN');
        $object->getActiveSheet()->setCellValue("V{$contador}", 'Fecha Elaboracion Factura');
        $object->getActiveSheet()->setCellValue("W{$contador}", 'Pedimento');
        $object->getActiveSheet()->setCellValue("X{$contador}", 'Fecha Pedimento');
        $object->getActiveSheet()->setCellValue("Y{$contador}", 'Días de crédito');
        $object->getActiveSheet()->setCellValue("Z{$contador}", 'Fecha de Vencimiento');
        $object->getActiveSheet()->setCellValue("AA{$contador}", 'Fecha de Pago');
        $object->getActiveSheet()->setCellValue("AB{$contador}", 'Status de Pago');
        $object->getActiveSheet()->setCellValue("AC{$contador}", 'Refacturación');
        $object->getActiveSheet()->setCellValue("AD{$contador}", 'Nueva');
        $object->getActiveSheet()->setCellValue("AE{$contador}", 'Observaciones');
        $object->getActiveSheet()->setCellValue("AF{$contador}", 'Vendedor');
        $object->getActiveSheet()->setCellValue("AG{$contador}", 'Fecha de cobro de comisiones');
    


        $listaFuventas = $this->export->ListaFuventas();

        $excel_row = 2;
        foreach ($listaFuventas as $row) {


            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->ref);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->direccion);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->codigo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->tipo_de_prod);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->rfc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->factura);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->remision);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, PHPExcel_Shared_Date::PHPToExcel($row->fecha_de_remision));
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->orden_compra);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->cantidad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->pu_usd);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->subtotal);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->iva);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->total_usd);
              $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row,  $row->tipo_de_cambio);
            //$object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, '= SUM(D2:D' . ($excel_row - 1) . ')');
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, '=P'.$excel_row.'*L'.$excel_row);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->descuento_mxn);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, '=Q'.$excel_row.'*K'.$excel_row.'*(1-R'.$excel_row.')');
           // $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->iva_mxn);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, '=S'.$excel_row.'*16%');
            //$object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->total_mxn);
             $object->getActiveSheet()->setCellValueByColumnAndRow(20,$excel_row, '=S'.$excel_row.'+ T'.$excel_row);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, PHPExcel_Shared_Date::PHPToExcel($row->fecha));
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->pedimento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->fecha_pedimento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->dias_de_credito);
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, PHPExcel_Shared_Date::PHPToExcel($row->fecha_vencimiento));
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, PHPExcel_Shared_Date::PHPToExcel($row->fecha_de_pago));
            $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->status_de_pago);
            $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->refacturacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->nueva);
            $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->observaciones);
            $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->vendedor);
            $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, PHPExcel_Shared_Date::PHPToExcel($row->fecha_de_cobro_de_comisiones));
          
            $excel_row++;
        }


        $object->getActiveSheet()->getStyle('I1:I' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);
        $object->getActiveSheet()->getStyle('R2:R' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
        $object->getActiveSheet()->getStyle('S2:S' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
        $object->getActiveSheet()->getStyle('T2:T' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
        $object->getActiveSheet()->getStyle('U2:U' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER_00);
        //$object->getActiveSheet()->getStyle('K1:K' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('L1:L' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('M1:M' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('N1:N' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('R2:R' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
        
     $object->getActiveSheet()->getStyle('V1:V9999')->getNumberFormat()->setFormatCode('dd/mm/yyyy');

        /*  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="Fuventas.xlsx"');
          $object_writer->save('php://output'); */

        $filename = 'Fu V Refacciones.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }











public function crearExcelFuvservicio() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Fu V Servicio');

        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");

        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(28);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AJ')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AK')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AL')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Ref');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Direccion');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Código');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Tipo de Producto');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'RFC');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Factura');
        // $object->getActiveSheet()->setCellValue("H{$contador}", 'Remisión');
        // $object->getActiveSheet()->setCellValue("I{$contador}", 'Fecha de Remisión');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'OC');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Cantidad');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'PU USD');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Subtotal');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'IVA');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'TOTAL USD');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Fecha Elaboracion Factura');
        //$object->getActiveSheet()->setCellValue("Q{$contador}", 'Pedimento');
        // $object->getActiveSheet()->setCellValue("R{$contador}", 'Fecha Pedimento');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Días de crédito');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Fecha de Vencimiento');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'Fecha de Pago');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Status de Pago');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Refacturación');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Nueva');
        $object->getActiveSheet()->setCellValue("U{$contador}", 'Observaciones');
        $object->getActiveSheet()->setCellValue("V{$contador}", 'Vendedor');
        $object->getActiveSheet()->setCellValue("W{$contador}", 'Fecha de cobro de comisiones');


        $listaFuvservicio = $this->export->ListaFuvservicio();

        $excel_row = 2;
        foreach ($listaFuvservicio as $row) {


            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->ref);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->direccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->codigo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->tipo_de_prod);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->rfc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->factura);
            // $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->remision);
            // $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->fecha_de_remision);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->orden_compra);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->cantidad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->pu_usd);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->subtotal);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->iva);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->total_usd);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->fecha);
            // $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->pedimento);
            // $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->fecha_pedimento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->dias_de_credito);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->fecha_vencimiento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->fecha_de_pago);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->status_de_pago);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->refacturacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->nueva);
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->observaciones);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->vendedor);
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->fecha_de_cobro_de_comisiones);

            $excel_row++;
        }
        $object->getActiveSheet()->getStyle('J1:J9999')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('K1:K9999')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('L1:L9999')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('L1:M9999')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);


        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="FuvServicio.xlsx"');
          $object_writer->save('php://output'); */

        $filename = 'Fu V Servicio.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }









public function crearExcelCalendario() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Calendario SCROBUSPACK.COM');

        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");

        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(50);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(70);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('1')->applyFromArray($styleArray);

        //Le aplicamos negrita a los títulos de la cabecera.
        $object->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
        $object->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
        $object->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
        $object->getActiveSheet()->getStyle("D{$contador}")->getFont()->setBold(true);
        $object->getActiveSheet()->getStyle("E{$contador}")->getFont()->setBold(true);


        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Titulo');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Descripción');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Fecha Inicio');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Fecha Fin');

        $listaCalendario = $this->export->ListaCalendario();
        $excel_row = 2;
        foreach ($listaCalendario as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->title);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->description);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->start);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->end);


            $excel_row++;
        }
        /*  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="Calendario.xlsx"');
          $object_writer->save('php://output'); */

        $filename = 'Calendario.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }




















public function crearExcelFucompras() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('INV. COMPRAS CP');
        
        
        
        
        
        $object->getActiveSheet()->freezePane('C2'); 
        
        
        
        
        
        
        
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");

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
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AJ')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AK')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AL')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AM')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AN')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AO')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AP')->setWidth(20);
        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('1')->applyFromArray($styleArray);

    
    
    
    
    
    
    
    
    
    
    
    
    
     $object->getActiveSheet()->getStyle('A1:AP1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('538DD5');
        

    
    
    
    


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
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Ref');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Estatus');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Compañia Importadora');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Cliente / Proveedor');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Awb');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Courier');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Clave');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Tipo de prod');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Descripción');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Factura');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'IMN');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'OCV');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'QTY');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'PU USD');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Total USD');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Tipo de embarque');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'Tc Pedimento');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Importación por partida pz mxn');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Importación por partida pz usd');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Impx Unidad');
        $object->getActiveSheet()->setCellValue("U{$contador}", 'Costo total compra usd lab  Qro');
        $object->getActiveSheet()->setCellValue("V{$contador}", 'Costo Unitario Compra Usd lab Qro');
        $object->getActiveSheet()->setCellValue("W{$contador}", 'Com');
        $object->getActiveSheet()->setCellValue("X{$contador}", 'Cm');
        $object->getActiveSheet()->setCellValue("Y{$contador}", 'Cm c');
        $object->getActiveSheet()->setCellValue("Z{$contador}", 'Ent');
        $object->getActiveSheet()->setCellValue("AA{$contador}", 'Pedimento');
        $object->getActiveSheet()->setCellValue("AB{$contador}", 'Fecha pedimento');
        $object->getActiveSheet()->setCellValue("AC{$contador}", 'Valor Aduana');
        $object->getActiveSheet()->setCellValue("AD{$contador}", 'Arancel Igi');
        $object->getActiveSheet()->setCellValue("AE{$contador}", 'Arancel');
        $object->getActiveSheet()->setCellValue("AF{$contador}", 'Dta');
        $object->getActiveSheet()->setCellValue("AG{$contador}", 'Iva del pedimento');
        $object->getActiveSheet()->setCellValue("AH{$contador}", 'Costo del Flete Mxn');
        $object->getActiveSheet()->setCellValue("AI{$contador}", 'Honorarios courier');
        $object->getActiveSheet()->setCellValue("AJ{$contador}", 'costo del flete usd');
        $object->getActiveSheet()->setCellValue("AK{$contador}", 'Pv extra bajo ref x pz');
        $object->getActiveSheet()->setCellValue("AL{$contador}", 'Utilidad refx pz');
        $object->getActiveSheet()->setCellValue("AM{$contador}", 'Utilidad');
        $object->getActiveSheet()->setCellValue("AN{$contador}", 'Observaciones');
        $object->getActiveSheet()->setCellValue("AO{$contador}", 'Fecha pi');
        $object->getActiveSheet()->setCellValue("AP{$contador}", 'Código arancelario');


        $listaFucompras = $this->export->ListaFucompras();

        $excel_row = 2;
        foreach ($listaFucompras as $row) {


            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->ref);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->estatus);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->compania_importadora);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->cliente_proveedor);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->awb);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->courier);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->clave);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->tipo_de_prod);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->descripcion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->factura);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->imn);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->ocv);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->qty);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->pu_usd);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->total_usd);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->tipo_de_embarque);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->tc_pedimento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->importacion_por_partida_pz_mxn);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->importacion_por_partida_pz_usd);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->impx_unidad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->costo_total_compra_usd_lab_qro);
            $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->costo_unitario_compra_usd_lab_qro);
            $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->com);
            $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->cm);
            $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->cm_c);
            $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->ent);
            $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->pedimento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->fecha_pedimento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->valor_aduana);
            $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->arancel_igi);
            $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->arancel);
            $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->dta);
            $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->iva_del_pedimento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->costo_del_flete_mxn);
            $object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->honorarios_courier);
            $object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row->costo_del_flete_usd);
            $object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row->pv_extra_bajo_ref_x_pz);
            $object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row->utilidad_refx_pz);
            $object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row->utilidad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row->observaciones);
            $object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row->fecha_pi);
            $object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row->codigo_arancelario);
    
    
        
        











            $excel_row++;
            
            
            
        } 
            
            
            
            
            
     $object->getActiveSheet()->getStyle('A2:AP' . ($excel_row))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('DCE6F1');
        //$object->getActiveSheet()->getStyle('A2:AP' . ($excel_row) )->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        $object->getActiveSheet()->getStyle('A2:' . $object->getActiveSheet()->getHighestColumn() . $object->getActiveSheet()->getHighestRow())->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        /** Borders for heading */
        // $object->getActiveSheet()->getStyle('A2:AP' . ($excel_row))->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);
        $BStyle = array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)));
        $object->getActiveSheet()->getStyle('A2:AP' . ($excel_row))->applyFromArray($BStyle);
        //Le aplicamos el tipo, color y tamaño de letra del cuerpo.
        $styleArray2 = array('font' => array('bold' => FALSE, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('A2:AP' . ($excel_row))->applyFromArray($styleArray2);


        $object->getActiveSheet()->getStyle('A2:AP' . ($excel_row)) ->getAlignment()->setWrapText(true); 
        $object->getActiveSheet()->getStyle('A2:AP'.$object->getActiveSheet()->getHighestRow()) ->getAlignment()->setWrapText(true); 












 $object->getActiveSheet()->getStyle('J1:J'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_NUMBER);
 






        $object->getActiveSheet()->getStyle('L1:L'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('M1:M'.($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('N1:N'.($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('O1:O'.($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('O1:O'.($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);



         $object->getActiveSheet()->getStyle('Q1:Q'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        
        $object->getActiveSheet()->getStyle('R1:R'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('S1:S'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('T1:T'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('U1:U'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);



        $object->getActiveSheet()->getStyle('V1:V'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('W1:W'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
        $object->getActiveSheet()->getStyle('X1:X'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('Y1:Y'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);


        $object->getActiveSheet()->getStyle('Z1:Z'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AC1:AC'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AD1:AD'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00);
        $object->getActiveSheet()->getStyle('AE1:AE'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AF1:AF'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AG1:AG'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AH1:AH'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AI1:AI'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AJ1:AJ'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AK1:AK'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AL1:AL'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE);
        $object->getActiveSheet()->getStyle('AM1:AM'. ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE);
     
     
     
      /*  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="Fuventas.xlsx"');
          $object_writer->save('php://output'); */

        $filename = 'Fu Compras.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }


// crear el excel
    public function crearExcelRotacionInventarioR() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Rotación Inventario');
        //Aquí puedes modificar algunas propiedades del archivo que será creado
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(00);
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
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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



        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Código');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Fecha Corte Rotación');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Pedido Inteligente');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Total Requerido Mensual con OC o CONS');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Total Requerido Trimestral con OC o CONS');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Inventario');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Piezas a recibir');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Piezas requeridas con oc consig mensual');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Piezas requeridas con oc consig trimestral');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Meses Cubiertos');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Fecha Cubierta');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Total Mensaul sin oc');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Informativo Prospectación Mercado');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Pc Fob');




        $listaRotacionInventarioR = $this->export->ListaRotacionInventarioR();

        $excel_row = 2;
        foreach ($listaRotacionInventarioR as $row) {

                    $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->codigo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->fecha_corte_rotacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->pedido_inteligente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->suma_total_requerido_mensual_con_oc_y_consignacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->suma_total_requerido_trimestral_con_oc_y_consignacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->inventario);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->piezas_a_recibir);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->piezas_requeridas_con_oc_consig_mensual);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->piezas_requeridas_con_oc_consig_trimestral);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->meses_cubiertos);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->fecha_cubierta);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->total_mensual_sin_oc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->informativo_prospectacion_mercado);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->pc_fob);



            $excel_row++;
        }
        
              $object->getActiveSheet()->getStyle('B1:B' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);
              $object->getActiveSheet()->getStyle('C1:C' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);
              $object->getActiveSheet()->getStyle('K1:K' . ($excel_row))->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_DDMMYYYY);
        //para hacer las sumas 
        /* $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, 'Total');
          $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, '= SUM(F2:F' . ($excel_row - 1) . ')');
          $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, '= SUM(G2:G' . ($excel_row - 1) . ')');
          $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, '= SUM(H2:H' . ($excel_row - 1) . ')');
          $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, '= SUM(I2:I' . ($excel_row - 1) . ')');
          $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, '= SUM(J2:J' . ($excel_row - 1) . ')');
          $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, '= SUM(K2:K' . ($excel_row - 1) . ')');
          $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, '= SUM(L2:L' . ($excel_row - 1) . ')');

         */
        /*$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Rotación Inventario.xlsx"');
        $object_writer->save('php://output');*/
        
        $filename = 'Rotación Inventario.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }
    
    
    
    
    
    
    
    
    // crear el excel
    public function crearExcelMaximoMinimo2() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Máximo y Mínimo');
        //Aquí puedes modificar algunas propiedades del archivo que será creado
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(38);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(35);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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



        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Descripción');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Código');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Fecha Corte Rotación');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Grupo');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Cantidad Máxima');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Fecha Último Consumo');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Periodo Surtimiento');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Fecha Requiere Piezas');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Pedido Inteligente');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Total Requerido Mensual con OC o CONS');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Total Requerido Trimestral con OC o CONS');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Inventario');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Piezas a recibir');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Disponibilidad Total');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Meses Cubiertos');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'Fecha Cubierta');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Total Mensual sin OC');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Propectación Mercado Mensual');




        $listaMaximoMinimo = $this->export->ListaMaximoMinimo2();

        $excel_row = 2;
        foreach ($listaMaximoMinimo as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->descripcion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->codigo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->fecha_corte_rotacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->cantidad_maxima);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->fecha_ultimo_consumo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->periodo_surtimiento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->fecha_requiere_piezas);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->pedido_inteligente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->suma_total_requerido_mensual_con_oc_y_consignacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->suma_total_requerido_trimestral_con_oc_y_consignacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->inventario);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->piezas_a_recibir);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->disponibilidad_total);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->meses_cubiertos);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->fecha_cubierta);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->total_mensual_sin_oc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->informativo_prospectacion_mercado);



            $excel_row++;
        }

        $filename = 'Maximo Minimo.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // create xlsx
    public function crearExcelControlMaquinaria() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Control Maqquinaria');
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Saúl González Moctezuma") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("Control Maquinaria")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrollador de Software  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR - CONTROL MAQUINARIA");
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('I')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('J')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('K')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('L')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('R')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('S')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('T')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('U')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('V')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('W')->setWidth(32);
        $object->getActiveSheet()->getColumnDimension('X')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AA')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AB')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AC')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AF')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('AG')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('AI')->setWidth(20);

        //Le aplicamos el tipo, color y tamaño de letra.
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => '000000'), 'size' => 12, 'name' => 'Arial'));
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




        //Definimos los títulos de la cabecera.
        $object->getActiveSheet()->setCellValue("A{$contador}", 'No. Máquina');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Modelo');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Empresa');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Serie');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'No. Pedimento');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Obeservacion');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Comentario');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Pedimento PDF');

        $object->getActiveSheet()->setCellValue("J{$contador}", 'Placa');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Numero Factura');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Factura PDF');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Refacciones');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Contrato');

        




        $object->getActiveSheet()->getStyle('A2:N999')->getAlignment()->setWrapText(true);
        //   $object->getActiveSheet()->getStyle('A3:H'.$object->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
        $listaControlMaquinaria = $this->export->ListaControlMaquinaria();




        $excel_row = 2;
        foreach ($listaControlMaquinaria as $row) {
            //$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row,"". $row->no_maqui);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->modelo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->empresa);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->serie);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->cliente . " ". $row->cliente_temporal );
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->pedimento);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->observacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->comentario);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row,$row->pedimentopdf);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->foto);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->num_factura);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row,$row->factura);
           $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->refacciones);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->contrato);





            // $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->cotizacion);



            $excel_row++;
        }

        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="ClienteSeguimiento.xlsx"');
          $object_writer->save('php://output'); */



        $filename = 'Control Maquinaria.xlsx';
        ob_start();
        $objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        //obligar al usuario a descargar el archivo de Excel sin escribirlo en el disco duro del servidor
        $objWriter->save('php://output');
        $this->load->helper('download');
        $excelFileContents = ob_get_clean();
        force_download($filename, $excelFileContents);
    }
    
    
    
    



}
