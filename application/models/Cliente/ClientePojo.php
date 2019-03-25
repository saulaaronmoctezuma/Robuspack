<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class ClientePojo{
    
    private $id_cliente;
    private $grupo;
    private $cliente;
    private $cliente_sae;
     private $cliente_sae_dolares;
    private $razon_soc;
    private $rfc;
    private $direccion;
    private $tel_cel;
    private $extension;
    private $correo;
    private $correo1;
    private $correo2;
    private $correo3;
    private $moneda;
    private $cta_banc;
    private $cta_banc_dolares;
    private $vendedor_refacciones;
    private $vendedor_maquinaria;
    private $forma_pago;
    private $metodo_pago;
    private $uso_de_cfdi;
    private $direccion_entrega;
    
    function __construct($id_cliente, $grupo, $cliente, $cliente_sae, $cliente_sae_dolares, $razon_soc, $rfc, $direccion, $tel_cel, $extension, $correo, $correo1, $correo2, $correo3, $moneda, $cta_banc, $cta_banc_dolares, $vendedor_refacciones, $vendedor_maquinaria, $forma_pago, $metodo_pago, $uso_de_cfdi, $direccion_entrega) {
        $this->id_cliente = $id_cliente;
        $this->grupo = $grupo;
        $this->cliente = $cliente;
        $this->cliente_sae = $cliente_sae;
        $this->cliente_sae_dolares = $cliente_sae_dolares;
        $this->razon_soc = $razon_soc;
        $this->rfc = $rfc;
        $this->direccion = $direccion;
        $this->tel_cel = $tel_cel;
        $this->extension = $extension;
        $this->correo = $correo;
        $this->correo1 = $correo1;
        $this->correo2 = $correo2;
        $this->correo3 = $correo3;
        $this->moneda = $moneda;
        $this->cta_banc = $cta_banc;
        $this->cta_banc_dolares = $cta_banc_dolares;
        $this->vendedor_refacciones = $vendedor_refacciones;
        $this->vendedor_maquinaria = $vendedor_maquinaria;
        $this->forma_pago = $forma_pago;
        $this->metodo_pago = $metodo_pago;
        $this->uso_de_cfdi = $uso_de_cfdi;
        $this->direccion_entrega = $direccion_entrega;
    }


    function getId_cliente() {
        return $this->id_cliente;
    }

    function getGrupo() {
        return $this->grupo;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getCliente_sae() {
        return $this->cliente_sae;
    }

    function getCliente_sae_dolares() {
        return $this->cliente_sae_dolares;
    }

    function getRazon_soc() {
        return $this->razon_soc;
    }

    function getRfc() {
        return $this->rfc;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTel_cel() {
        return $this->tel_cel;
    }

    function getExtension() {
        return $this->extension;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getCorreo1() {
        return $this->correo1;
    }

    function getCorreo2() {
        return $this->correo2;
    }

    function getCorreo3() {
        return $this->correo3;
    }

    function getMoneda() {
        return $this->moneda;
    }

    function getCta_banc() {
        return $this->cta_banc;
    }

    function getCta_banc_dolares() {
        return $this->cta_banc_dolares;
    }

    function getVendedor_refacciones() {
        return $this->vendedor_refacciones;
    }

    function getVendedor_maquinaria() {
        return $this->vendedor_maquinaria;
    }

    function getForma_pago() {
        return $this->forma_pago;
    }

    function getMetodo_pago() {
        return $this->metodo_pago;
    }

    function getUso_de_cfdi() {
        return $this->uso_de_cfdi;
    }

    function getDireccion_entrega() {
        return $this->direccion_entrega;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setCliente_sae($cliente_sae) {
        $this->cliente_sae = $cliente_sae;
    }

    function setCliente_sae_dolares($cliente_sae_dolares) {
        $this->cliente_sae_dolares = $cliente_sae_dolares;
    }

    function setRazon_soc($razon_soc) {
        $this->razon_soc = $razon_soc;
    }

    function setRfc($rfc) {
        $this->rfc = $rfc;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTel_cel($tel_cel) {
        $this->tel_cel = $tel_cel;
    }

    function setExtension($extension) {
        $this->extension = $extension;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setCorreo1($correo1) {
        $this->correo1 = $correo1;
    }

    function setCorreo2($correo2) {
        $this->correo2 = $correo2;
    }

    function setCorreo3($correo3) {
        $this->correo3 = $correo3;
    }

    function setMoneda($moneda) {
        $this->moneda = $moneda;
    }

    function setCta_banc($cta_banc) {
        $this->cta_banc = $cta_banc;
    }

    function setCta_banc_dolares($cta_banc_dolares) {
        $this->cta_banc_dolares = $cta_banc_dolares;
    }

    function setVendedor_refacciones($vendedor_refacciones) {
        $this->vendedor_refacciones = $vendedor_refacciones;
    }

    function setVendedor_maquinaria($vendedor_maquinaria) {
        $this->vendedor_maquinaria = $vendedor_maquinaria;
    }

    function setForma_pago($forma_pago) {
        $this->forma_pago = $forma_pago;
    }

    function setMetodo_pago($metodo_pago) {
        $this->metodo_pago = $metodo_pago;
    }

    function setUso_de_cfdi($uso_de_cfdi) {
        $this->uso_de_cfdi = $uso_de_cfdi;
    }

    function setDireccion_entrega($direccion_entrega) {
        $this->direccion_entrega = $direccion_entrega;
    }



}