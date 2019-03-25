<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */ 
class BitacoraMttoPojo {

    private $id_bitacora;
    private $planta;
     private $modelo;
    private $maquina;
    private $fecha;
    private $oc;
    private $tipo;
    private $mantenimiento;
    private $reporto;
    private $des_acti;
    private $ref_usadas1;
    private $ref_usadas2;
    private $ref_usadas3;
    private $ref_usadas4;
    private $ref_usadas5;
    private $ref_usadas6;
    private $ref_usadas7;
    private $ref_usadas8;
    private $ref_usadas9;
    private $ref_usadas10;
    private $ref_usadas11;
    private $ref_usadas12;
    private $ref_usadas13;
    private $ref_usadas14;
    private $ref_usadas15;
    private $ref_usadas16;
    private $ref_usadas17;
    private $ref_usadas18;
    private $ref_usadas19;
    private $ref_usadas20;
    private $ref_usadas21;
    private $ref_usadas22;
    private $ref_usadas23;
    private $ref_usadas24;
    private $ref_usadas25;
    private $ref_usadas26;
    private $ref_usadas27;
    private $ref_usadas28;
    private $ref_usadas29;
    private $ref_usadas30;
    private $ref_recomen1;
    private $ref_recomen2;
    private $ref_recomen3;
    private $ref_recomen4;
    private $ref_recomen5;
    private $ref_recomen6;
    private $ref_recomen7;
    private $ref_recomen8;
    private $ref_recomen9;
    private $ref_recomen10;
    private $ref_recomen11;
    private $ref_recomen12;
    private $ref_recomen13;
    private $ref_recomen14;
    private $ref_recomen15;
    private $ref_recomen16;
    private $ref_recomen17;
    private $ref_recomen18;
    private $ref_recomen19;
    private $ref_recomen20;
    private $ref_recomen21;
    private $ref_recomen22;
    private $ref_recomen23;
    private $ref_recomen24;
    private $ref_recomen25;
    private $ref_recomen26;
    private $ref_recomen27;
    private $ref_recomen28;
    private $ref_recomen29;
    private $ref_recomen30;
    
    
    private $recomendaciones;
    private $proxima_inter;
    private $first_name;


    function __construct($id_bitacora, $planta, $modelo, $maquina, $fecha, $oc, $tipo, $mantenimiento, $reporto, $des_acti, $ref_usadas1, $ref_usadas2, $ref_usadas3, $ref_usadas4, $ref_usadas5, $ref_usadas6, $ref_usadas7, $ref_usadas8, $ref_usadas9, $ref_usadas10, $ref_usadas11, $ref_usadas12, $ref_usadas13, $ref_usadas14, $ref_usadas15, $ref_usadas16, $ref_usadas17, $ref_usadas18, $ref_usadas19, $ref_usadas20, $ref_usadas21, $ref_usadas22, $ref_usadas23, $ref_usadas24, $ref_usadas25, $ref_usadas26, $ref_usadas27, $ref_usadas28, $ref_usadas29, $ref_usadas30, $ref_recomen1, $ref_recomen2, $ref_recomen3, $ref_recomen4, $ref_recomen5, $ref_recomen6, $ref_recomen7, $ref_recomen8, $ref_recomen9, $ref_recomen10, $ref_recomen11, $ref_recomen12, $ref_recomen13, $ref_recomen14, $ref_recomen15, $ref_recomen16, $ref_recomen17, $ref_recomen18, $ref_recomen19, $ref_recomen20, $ref_recomen21, $ref_recomen22, $ref_recomen23, $ref_recomen24, $ref_recomen25, $ref_recomen26, $ref_recomen27, $ref_recomen28, $ref_recomen29, $ref_recomen30, $recomendaciones, $proxima_inter, $first_name) {
        $this->id_bitacora = $id_bitacora;
        $this->planta = $planta;
        $this->modelo = $modelo;
        $this->maquina = $maquina;
        $this->fecha = $fecha;
        $this->oc = $oc;
        $this->tipo = $tipo;
        $this->mantenimiento = $mantenimiento;
        $this->reporto = $reporto;
        $this->des_acti = $des_acti;
        $this->ref_usadas1 = $ref_usadas1;
        $this->ref_usadas2 = $ref_usadas2;
        $this->ref_usadas3 = $ref_usadas3;
        $this->ref_usadas4 = $ref_usadas4;
        $this->ref_usadas5 = $ref_usadas5;
        $this->ref_usadas6 = $ref_usadas6;
        $this->ref_usadas7 = $ref_usadas7;
        $this->ref_usadas8 = $ref_usadas8;
        $this->ref_usadas9 = $ref_usadas9;
        $this->ref_usadas10 = $ref_usadas10;
        $this->ref_usadas11 = $ref_usadas11;
        $this->ref_usadas12 = $ref_usadas12;
        $this->ref_usadas13 = $ref_usadas13;
        $this->ref_usadas14 = $ref_usadas14;
        $this->ref_usadas15 = $ref_usadas15;
        $this->ref_usadas16 = $ref_usadas16;
        $this->ref_usadas17 = $ref_usadas17;
        $this->ref_usadas18 = $ref_usadas18;
        $this->ref_usadas19 = $ref_usadas19;
        $this->ref_usadas20 = $ref_usadas20;
        $this->ref_usadas21 = $ref_usadas21;
        $this->ref_usadas22 = $ref_usadas22;
        $this->ref_usadas23 = $ref_usadas23;
        $this->ref_usadas24 = $ref_usadas24;
        $this->ref_usadas25 = $ref_usadas25;
        $this->ref_usadas26 = $ref_usadas26;
        $this->ref_usadas27 = $ref_usadas27;
        $this->ref_usadas28 = $ref_usadas28;
        $this->ref_usadas29 = $ref_usadas29;
        $this->ref_usadas30 = $ref_usadas30;
        $this->ref_recomen1 = $ref_recomen1;
        $this->ref_recomen2 = $ref_recomen2;
        $this->ref_recomen3 = $ref_recomen3;
        $this->ref_recomen4 = $ref_recomen4;
        $this->ref_recomen5 = $ref_recomen5;
        $this->ref_recomen6 = $ref_recomen6;
        $this->ref_recomen7 = $ref_recomen7;
        $this->ref_recomen8 = $ref_recomen8;
        $this->ref_recomen9 = $ref_recomen9;
        $this->ref_recomen10 = $ref_recomen10;
        $this->ref_recomen11 = $ref_recomen11;
        $this->ref_recomen12 = $ref_recomen12;
        $this->ref_recomen13 = $ref_recomen13;
        $this->ref_recomen14 = $ref_recomen14;
        $this->ref_recomen15 = $ref_recomen15;
        $this->ref_recomen16 = $ref_recomen16;
        $this->ref_recomen17 = $ref_recomen17;
        $this->ref_recomen18 = $ref_recomen18;
        $this->ref_recomen19 = $ref_recomen19;
        $this->ref_recomen20 = $ref_recomen20;
        $this->ref_recomen21 = $ref_recomen21;
        $this->ref_recomen22 = $ref_recomen22;
        $this->ref_recomen23 = $ref_recomen23;
        $this->ref_recomen24 = $ref_recomen24;
        $this->ref_recomen25 = $ref_recomen25;
        $this->ref_recomen26 = $ref_recomen26;
        $this->ref_recomen27 = $ref_recomen27;
        $this->ref_recomen28 = $ref_recomen28;
        $this->ref_recomen29 = $ref_recomen29;
        $this->ref_recomen30 = $ref_recomen30;
        $this->recomendaciones = $recomendaciones;
        $this->proxima_inter = $proxima_inter;
        $this->first_name = $first_name;
    }


    function getId_bitacora() {
        return $this->id_bitacora;
    }

    function getPlanta() {
        return $this->planta;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getMaquina() {
        return $this->maquina;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getOc() {
        return $this->oc;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getMantenimiento() {
        return $this->mantenimiento;
    }

    function getReporto() {
        return $this->reporto;
    }

    function getDes_acti() {
        return $this->des_acti;
    }

    function getRef_usadas1() {
        return $this->ref_usadas1;
    }

    function getRef_usadas2() {
        return $this->ref_usadas2;
    }

    function getRef_usadas3() {
        return $this->ref_usadas3;
    }

    function getRef_usadas4() {
        return $this->ref_usadas4;
    }

    function getRef_usadas5() {
        return $this->ref_usadas5;
    }

    function getRef_usadas6() {
        return $this->ref_usadas6;
    }

    function getRef_usadas7() {
        return $this->ref_usadas7;
    }

    function getRef_usadas8() {
        return $this->ref_usadas8;
    }

    function getRef_usadas9() {
        return $this->ref_usadas9;
    }

    function getRef_usadas10() {
        return $this->ref_usadas10;
    }

    function getRef_usadas11() {
        return $this->ref_usadas11;
    }

    function getRef_usadas12() {
        return $this->ref_usadas12;
    }

    function getRef_usadas13() {
        return $this->ref_usadas13;
    }

    function getRef_usadas14() {
        return $this->ref_usadas14;
    }

    function getRef_usadas15() {
        return $this->ref_usadas15;
    }

    function getRef_usadas16() {
        return $this->ref_usadas16;
    }

    function getRef_usadas17() {
        return $this->ref_usadas17;
    }

    function getRef_usadas18() {
        return $this->ref_usadas18;
    }

    function getRef_usadas19() {
        return $this->ref_usadas19;
    }

    function getRef_usadas20() {
        return $this->ref_usadas20;
    }

    function getRef_usadas21() {
        return $this->ref_usadas21;
    }

    function getRef_usadas22() {
        return $this->ref_usadas22;
    }

    function getRef_usadas23() {
        return $this->ref_usadas23;
    }

    function getRef_usadas24() {
        return $this->ref_usadas24;
    }

    function getRef_usadas25() {
        return $this->ref_usadas25;
    }

    function getRef_usadas26() {
        return $this->ref_usadas26;
    }

    function getRef_usadas27() {
        return $this->ref_usadas27;
    }

    function getRef_usadas28() {
        return $this->ref_usadas28;
    }

    function getRef_usadas29() {
        return $this->ref_usadas29;
    }

    function getRef_usadas30() {
        return $this->ref_usadas30;
    }

    function getRef_recomen1() {
        return $this->ref_recomen1;
    }

    function getRef_recomen2() {
        return $this->ref_recomen2;
    }

    function getRef_recomen3() {
        return $this->ref_recomen3;
    }

    function getRef_recomen4() {
        return $this->ref_recomen4;
    }

    function getRef_recomen5() {
        return $this->ref_recomen5;
    }

    function getRef_recomen6() {
        return $this->ref_recomen6;
    }

    function getRef_recomen7() {
        return $this->ref_recomen7;
    }

    function getRef_recomen8() {
        return $this->ref_recomen8;
    }

    function getRef_recomen9() {
        return $this->ref_recomen9;
    }

    function getRef_recomen10() {
        return $this->ref_recomen10;
    }

    function getRef_recomen11() {
        return $this->ref_recomen11;
    }

    function getRef_recomen12() {
        return $this->ref_recomen12;
    }

    function getRef_recomen13() {
        return $this->ref_recomen13;
    }

    function getRef_recomen14() {
        return $this->ref_recomen14;
    }

    function getRef_recomen15() {
        return $this->ref_recomen15;
    }

    function getRef_recomen16() {
        return $this->ref_recomen16;
    }

    function getRef_recomen17() {
        return $this->ref_recomen17;
    }

    function getRef_recomen18() {
        return $this->ref_recomen18;
    }

    function getRef_recomen19() {
        return $this->ref_recomen19;
    }

    function getRef_recomen20() {
        return $this->ref_recomen20;
    }

    function getRef_recomen21() {
        return $this->ref_recomen21;
    }

    function getRef_recomen22() {
        return $this->ref_recomen22;
    }

    function getRef_recomen23() {
        return $this->ref_recomen23;
    }

    function getRef_recomen24() {
        return $this->ref_recomen24;
    }

    function getRef_recomen25() {
        return $this->ref_recomen25;
    }

    function getRef_recomen26() {
        return $this->ref_recomen26;
    }

    function getRef_recomen27() {
        return $this->ref_recomen27;
    }

    function getRef_recomen28() {
        return $this->ref_recomen28;
    }

    function getRef_recomen29() {
        return $this->ref_recomen29;
    }

    function getRef_recomen30() {
        return $this->ref_recomen30;
    }

    function getRecomendaciones() {
        return $this->recomendaciones;
    }

    function getProxima_inter() {
        return $this->proxima_inter;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function setId_bitacora($id_bitacora) {
        $this->id_bitacora = $id_bitacora;
    }

    function setPlanta($planta) {
        $this->planta = $planta;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setMaquina($maquina) {
        $this->maquina = $maquina;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setOc($oc) {
        $this->oc = $oc;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setMantenimiento($mantenimiento) {
        $this->mantenimiento = $mantenimiento;
    }

    function setReporto($reporto) {
        $this->reporto = $reporto;
    }

    function setDes_acti($des_acti) {
        $this->des_acti = $des_acti;
    }

    function setRef_usadas1($ref_usadas1) {
        $this->ref_usadas1 = $ref_usadas1;
    }

    function setRef_usadas2($ref_usadas2) {
        $this->ref_usadas2 = $ref_usadas2;
    }

    function setRef_usadas3($ref_usadas3) {
        $this->ref_usadas3 = $ref_usadas3;
    }

    function setRef_usadas4($ref_usadas4) {
        $this->ref_usadas4 = $ref_usadas4;
    }

    function setRef_usadas5($ref_usadas5) {
        $this->ref_usadas5 = $ref_usadas5;
    }

    function setRef_usadas6($ref_usadas6) {
        $this->ref_usadas6 = $ref_usadas6;
    }

    function setRef_usadas7($ref_usadas7) {
        $this->ref_usadas7 = $ref_usadas7;
    }

    function setRef_usadas8($ref_usadas8) {
        $this->ref_usadas8 = $ref_usadas8;
    }

    function setRef_usadas9($ref_usadas9) {
        $this->ref_usadas9 = $ref_usadas9;
    }

    function setRef_usadas10($ref_usadas10) {
        $this->ref_usadas10 = $ref_usadas10;
    }

    function setRef_usadas11($ref_usadas11) {
        $this->ref_usadas11 = $ref_usadas11;
    }

    function setRef_usadas12($ref_usadas12) {
        $this->ref_usadas12 = $ref_usadas12;
    }

    function setRef_usadas13($ref_usadas13) {
        $this->ref_usadas13 = $ref_usadas13;
    }

    function setRef_usadas14($ref_usadas14) {
        $this->ref_usadas14 = $ref_usadas14;
    }

    function setRef_usadas15($ref_usadas15) {
        $this->ref_usadas15 = $ref_usadas15;
    }

    function setRef_usadas16($ref_usadas16) {
        $this->ref_usadas16 = $ref_usadas16;
    }

    function setRef_usadas17($ref_usadas17) {
        $this->ref_usadas17 = $ref_usadas17;
    }

    function setRef_usadas18($ref_usadas18) {
        $this->ref_usadas18 = $ref_usadas18;
    }

    function setRef_usadas19($ref_usadas19) {
        $this->ref_usadas19 = $ref_usadas19;
    }

    function setRef_usadas20($ref_usadas20) {
        $this->ref_usadas20 = $ref_usadas20;
    }

    function setRef_usadas21($ref_usadas21) {
        $this->ref_usadas21 = $ref_usadas21;
    }

    function setRef_usadas22($ref_usadas22) {
        $this->ref_usadas22 = $ref_usadas22;
    }

    function setRef_usadas23($ref_usadas23) {
        $this->ref_usadas23 = $ref_usadas23;
    }

    function setRef_usadas24($ref_usadas24) {
        $this->ref_usadas24 = $ref_usadas24;
    }

    function setRef_usadas25($ref_usadas25) {
        $this->ref_usadas25 = $ref_usadas25;
    }

    function setRef_usadas26($ref_usadas26) {
        $this->ref_usadas26 = $ref_usadas26;
    }

    function setRef_usadas27($ref_usadas27) {
        $this->ref_usadas27 = $ref_usadas27;
    }

    function setRef_usadas28($ref_usadas28) {
        $this->ref_usadas28 = $ref_usadas28;
    }

    function setRef_usadas29($ref_usadas29) {
        $this->ref_usadas29 = $ref_usadas29;
    }

    function setRef_usadas30($ref_usadas30) {
        $this->ref_usadas30 = $ref_usadas30;
    }

    function setRef_recomen1($ref_recomen1) {
        $this->ref_recomen1 = $ref_recomen1;
    }

    function setRef_recomen2($ref_recomen2) {
        $this->ref_recomen2 = $ref_recomen2;
    }

    function setRef_recomen3($ref_recomen3) {
        $this->ref_recomen3 = $ref_recomen3;
    }

    function setRef_recomen4($ref_recomen4) {
        $this->ref_recomen4 = $ref_recomen4;
    }

    function setRef_recomen5($ref_recomen5) {
        $this->ref_recomen5 = $ref_recomen5;
    }

    function setRef_recomen6($ref_recomen6) {
        $this->ref_recomen6 = $ref_recomen6;
    }

    function setRef_recomen7($ref_recomen7) {
        $this->ref_recomen7 = $ref_recomen7;
    }

    function setRef_recomen8($ref_recomen8) {
        $this->ref_recomen8 = $ref_recomen8;
    }

    function setRef_recomen9($ref_recomen9) {
        $this->ref_recomen9 = $ref_recomen9;
    }

    function setRef_recomen10($ref_recomen10) {
        $this->ref_recomen10 = $ref_recomen10;
    }

    function setRef_recomen11($ref_recomen11) {
        $this->ref_recomen11 = $ref_recomen11;
    }

    function setRef_recomen12($ref_recomen12) {
        $this->ref_recomen12 = $ref_recomen12;
    }

    function setRef_recomen13($ref_recomen13) {
        $this->ref_recomen13 = $ref_recomen13;
    }

    function setRef_recomen14($ref_recomen14) {
        $this->ref_recomen14 = $ref_recomen14;
    }

    function setRef_recomen15($ref_recomen15) {
        $this->ref_recomen15 = $ref_recomen15;
    }

    function setRef_recomen16($ref_recomen16) {
        $this->ref_recomen16 = $ref_recomen16;
    }

    function setRef_recomen17($ref_recomen17) {
        $this->ref_recomen17 = $ref_recomen17;
    }

    function setRef_recomen18($ref_recomen18) {
        $this->ref_recomen18 = $ref_recomen18;
    }

    function setRef_recomen19($ref_recomen19) {
        $this->ref_recomen19 = $ref_recomen19;
    }

    function setRef_recomen20($ref_recomen20) {
        $this->ref_recomen20 = $ref_recomen20;
    }

    function setRef_recomen21($ref_recomen21) {
        $this->ref_recomen21 = $ref_recomen21;
    }

    function setRef_recomen22($ref_recomen22) {
        $this->ref_recomen22 = $ref_recomen22;
    }

    function setRef_recomen23($ref_recomen23) {
        $this->ref_recomen23 = $ref_recomen23;
    }

    function setRef_recomen24($ref_recomen24) {
        $this->ref_recomen24 = $ref_recomen24;
    }

    function setRef_recomen25($ref_recomen25) {
        $this->ref_recomen25 = $ref_recomen25;
    }

    function setRef_recomen26($ref_recomen26) {
        $this->ref_recomen26 = $ref_recomen26;
    }

    function setRef_recomen27($ref_recomen27) {
        $this->ref_recomen27 = $ref_recomen27;
    }

    function setRef_recomen28($ref_recomen28) {
        $this->ref_recomen28 = $ref_recomen28;
    }

    function setRef_recomen29($ref_recomen29) {
        $this->ref_recomen29 = $ref_recomen29;
    }

    function setRef_recomen30($ref_recomen30) {
        $this->ref_recomen30 = $ref_recomen30;
    }

    function setRecomendaciones($recomendaciones) {
        $this->recomendaciones = $recomendaciones;
    }

    function setProxima_inter($proxima_inter) {
        $this->proxima_inter = $proxima_inter;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }



}