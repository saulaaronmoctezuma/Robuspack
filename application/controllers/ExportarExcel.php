<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

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
        // Se asignan las propiedades del libro
        $object->getProperties()->setCreator("Karen & Saúl") //Autor
                ->setLastModifiedBy("SISTEMA DE CONTROL ROBUSPACK") //Ultimo usuario que lo modificó
                ->setTitle("SISTEMA DE CONTROL ROBUSPACK")
                ->setSubject("SISTEMA DE CONTROL ROBUSPACK")
                ->setDescription("Desarrolladores de Software Karen & Saúl  ")
                ->setKeywords("SISTEMA DE CONTROL ROBUSPACK")
                ->setCategory("Descargado de SCR");


        $gdImage = imagecreatefrompng('http://robuspack.com/img/logo_blanco.png');
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
        $objDrawing->setWorksheet($object->getActiveSheet());

        $contador = 5;
        //Le aplicamos ancho las columnas.


        $object->getActiveSheet()
                ->getStyle('A1')
                ->getFill()
                ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
                ->getStartColor()
                ->setRGB('FF0000');

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
        $styleArray = array('font' => array('bold' => true, 'color' => array('rgb' => 'FF0000'), 'size' => 12, 'name' => 'Arial'));
        $object->getActiveSheet()->getStyle('4')->applyFromArray($styleArray);




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
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Cantidad máxima');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Precio Unitario');


        $object->getActiveSheet()->setCellValue("F{$contador}", 'Vida Util Dias');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Periodo Surtimiento');

        $object->getActiveSheet()->setCellValue("H{$contador}", 'Periodo Surtimiento Vida util');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Cantidad Máxima');
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

        $excel_row = 6;
        foreach ($listaClienteRefacciones as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->referencia);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->cantidad_maxima);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->precio_unitario);
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

        /* $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');

          header('Content-Disposition: attachment;filename="Refacciones.xls"');
          $object_writer->save('php://output'); */



        //para bloquear la hoja de excel 
        //$object->getActiveSheet()->getProtection()->setSheet(true);

        $object->getActiveSheet()->getCell('A1')->getHyperlink()->setUrl('http://www.scrobuspack.com');

        $object->getActiveSheet()->getCell('A1')->setValueExplicit('SCROBUSPACK', PHPExcel_Cell_DataType::TYPE_STRING);
        $object->getActiveSheet()->getHeaderFooter()->setOddHeader('&C&HSistema de Control Robuspack');
        $object->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B ' . $object->getProperties()->getTitle() . '&RPaágina &P de &N');

        $object->getActiveSheet()->setCellValue('A3', 'La fecha en la que se descargo el archivo es ' . date('d-m-Y'));
        //PARA  salto de línea en una celda 
        //$object->getActiveSheet()->getCell('A2')->setValue("hello\nworld");
        // $object->getActiveSheet()->getStyle('A2')->getAlignment()->setWrapText(true);

        $filename = 'Control SIC.xlsx';
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
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Grupo');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Prioridad');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Estatus');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Necesidad');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Fecha de Cotización');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Fecha a Contactar');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Compromiso');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Notas');
        ;





        $listaClienteSeguimiento = $this->export->ListaClienteSeguimiento();

        $excel_row = 2;
        foreach ($listaClienteSeguimiento as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->prioridad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->estatus);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->necesidad);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->fecha_cotizacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->fecha_contactar);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->compromiso);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->notas);



            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="ClienteSeguimiento.xlsx"');
        $object_writer->save('php://output');
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

    // create xlsx
    public function crearExcelRotacionInventario2() {
        // create file name
        //  $fileName = 'feedbackdata-' . time() . '.xls'; 
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setTitle('Máximo y Mínimo');
        //Aquí puedes modificar algunas propiedades del archivo que será creado
        $object->getProperties()->setCreator("Saúl & Karen ");
        $object->getProperties()->setLastModifiedBy("https://scrobuspack.com");
        $object->getProperties()->setTitle("Sistema de Control Robuspack");


        $contador = 1;
        //Le aplicamos ancho las columnas.
        $object->getActiveSheet()->getColumnDimension('A')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(15);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('E')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('F')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('G')->setWidth(13);
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
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Código');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Fecha Corte de Rotación');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Total Requerido Mensual');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Total Requerido Trimestral');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'Total Req. Mensual con Oc y Cons');
        $object->getActiveSheet()->setCellValue("F{$contador}", 'Total Req. Trimestral con Oc y Cons');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Inventario');
        $object->getActiveSheet()->setCellValue("H{$contador}", 'Piezas a recibir');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Disponibilidad Total');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Piezas a solicitar');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Meses Cubiertos');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Fecha Cubierta');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Pc Fob');



        $listaRotacionInventario = $this->export->ListaRotacionInventario2();

        $excel_row = 2;


        //exporta los datos de la tabla
        foreach ($listaRotacionInventario as $row) {

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->codigo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->fecha_corte_rotacion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->total_requerido_mensual);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->total_requerido_trimestral);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->total_requerido_mensual_con_or_cons);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->total_requerido_trimestral_con_or_cons);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->inventario);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->piezas_a_recibir);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->disponibilidad_total);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->piezas_a_solicitar);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->meses_cubiertos);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->fecha_cubierta);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->pcfob);


            $excel_row++;
        }
        /*$object->getActiveSheet()->getStyle(
                'A2:' .
                $object->getActiveSheet()->getHighestColumn() .
                $object->getActiveSheet()->getHighestRow()
        )->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);*/
        
        
        
        // Combino las celdas desde A1 hasta E1
        //x$object->setActiveSheetIndex(0)->mergeCells('A1:F1');

        
        
        
        /*$object->getActiveSheet()->getStyle(1)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $object->getActiveSheet()->getStyle(1)->getFill()->getStartColor()->setARGB('29bb04');*/
        // Add some data
       /* $object->getActiveSheet()->getStyle(1)->getFont()->setBold(true);
        $object->getActiveSheet()->getStyle(1)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);*/



        //para hacer las sumas 
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, 'Total');
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, '= SUM(C2:C' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, '= SUM(D2:D' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, '= SUM(E2:E' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, '= SUM(F2:F' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, '= SUM(G2:G' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, '= SUM(H2:H' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, '= SUM(I2:I' . ($excel_row - 1) . ')');
        $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, '= SUM(J2:J' . ($excel_row - 1) . ')');



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
        $object->getActiveSheet()->setCellValue("A{$contador}", 'Grupo');
        $object->getActiveSheet()->setCellValue("B{$contador}", 'Cliente');
        $object->getActiveSheet()->setCellValue("C{$contador}", 'Cliente SAE');
        $object->getActiveSheet()->setCellValue("D{$contador}", 'Razón Social');
        $object->getActiveSheet()->setCellValue("E{$contador}", 'RFC');


        $object->getActiveSheet()->setCellValue("F{$contador}", 'Dirección Fiscal');
        $object->getActiveSheet()->setCellValue("G{$contador}", 'Teléfono ');

        $object->getActiveSheet()->setCellValue("H{$contador}", 'Extensión');
        $object->getActiveSheet()->setCellValue("I{$contador}", 'Correo Compras');
        $object->getActiveSheet()->setCellValue("J{$contador}", 'Correo Cxp');
        $object->getActiveSheet()->setCellValue("K{$contador}", 'Correo Mantenimiento');
        $object->getActiveSheet()->setCellValue("L{$contador}", 'Otro Correo');
        $object->getActiveSheet()->setCellValue("M{$contador}", 'Moneda');
        $object->getActiveSheet()->setCellValue("N{$contador}", 'Cuenta Bancaria');
        $object->getActiveSheet()->setCellValue("O{$contador}", 'Vendedor Refacciones');
        $object->getActiveSheet()->setCellValue("P{$contador}", 'Vendedor Maquinaria');
        $object->getActiveSheet()->setCellValue("Q{$contador}", 'CFDI');
        $object->getActiveSheet()->setCellValue("R{$contador}", 'Método de pago');
        $object->getActiveSheet()->setCellValue("S{$contador}", 'Dirección de Entrega');
        $object->getActiveSheet()->setCellValue("T{$contador}", 'Empresa');




        $listaCliente = $this->export->ListaCliente();

        $excel_row = 2;
        foreach ($listaCliente as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->grupo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cliente);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->cliente_sae);

            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->razon_soc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->rfc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->direccion);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->tel_cel);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->extension);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->correo);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->correo1);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->correo2);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->correo3);
            $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->moneda);
            $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->cta_banc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->vendedor_refacciones);
            $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->vendedor_maquinaria);
            $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->uso_de_cfdi);
            $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->metodo_pago);
            $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->direccion_entrega);
            $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->empresa);
            $excel_row++;
        }



        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');

        header('Content-Disposition: attachment;filename="Clientes.xlsx"');
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

        header('Content-Disposition: attachment;filename="R  otación Inventario.xlsx"');
        $object_writer->save('php://output');
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
        $object->getActiveSheet()->getColumnDimension('M')->setWidth(40);
        $object->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $object->getActiveSheet()->getColumnDimension('O')->setWidth(18);
        $object->getActiveSheet()->getColumnDimension('P')->setWidth(45);
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
}
