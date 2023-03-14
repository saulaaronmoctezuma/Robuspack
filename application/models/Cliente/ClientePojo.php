<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class ClientePojo {

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
    private $empresa;

    
    function __construct($id_cliente, $grupo, $cliente, $cliente_sae, $cliente_sae_dolares, $razon_soc, $rfc, $direccion, $tel_cel, $extension, $correo, $correo1, $correo2, $correo3, $moneda, $cta_banc, $cta_banc_dolares, $vendedor_refacciones, $vendedor_maquinaria, $forma_pago, $metodo_pago, $uso_de_cfdi, $direccion_entrega, $empresa) {
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
        $this->empresa = $empresa;
    }

    
    public function getId_cliente() {
        return $this->id_cliente;
    }

    public function getGrupo() {
        return $this->grupo;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getCliente_sae() {
        return $this->cliente_sae;
    }

    public function getCliente_sae_dolares() {
        return $this->cliente_sae_dolares;
    }

    public function getRazon_soc() {
        return $this->razon_soc;
    }

    public function getRfc() {
        return $this->rfc;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTel_cel() {
        return $this->tel_cel;
    }

    public function getExtension() {
        return $this->extension;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getCorreo1() {
        return $this->correo1;
    }

    public function getCorreo2() {
        return $this->correo2;
    }

    public function getCorreo3() {
        return $this->correo3;
    }

    public function getMoneda() {
        return $this->moneda;
    }

    public function getCta_banc() {
        return $this->cta_banc;
    }

    public function getCta_banc_dolares() {
        return $this->cta_banc_dolares;
    }

    public function getVendedor_refacciones() {
        return $this->vendedor_refacciones;
    }

    public function getVendedor_maquinaria() {
        return $this->vendedor_maquinaria;
    }

    public function getForma_pago() {
        return $this->forma_pago;
    }

    public function getMetodo_pago() {
        return $this->metodo_pago;
    }

    public function getUso_de_cfdi() {
        return $this->uso_de_cfdi;
    }

    public function getDireccion_entrega() {
        return $this->direccion_entrega;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setCliente_sae($cliente_sae) {
        $this->cliente_sae = $cliente_sae;
    }

    public function setCliente_sae_dolares($cliente_sae_dolares) {
        $this->cliente_sae_dolares = $cliente_sae_dolares;
    }

    public function setRazon_soc($razon_soc) {
        $this->razon_soc = $razon_soc;
    }

    public function setRfc($rfc) {
        $this->rfc = $rfc;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTel_cel($tel_cel) {
        $this->tel_cel = $tel_cel;
    }

    public function setExtension($extension) {
        $this->extension = $extension;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setCorreo1($correo1) {
        $this->correo1 = $correo1;
    }

    public function setCorreo2($correo2) {
        $this->correo2 = $correo2;
    }

    public function setCorreo3($correo3) {
        $this->correo3 = $correo3;
    }

    public function setMoneda($moneda) {
        $this->moneda = $moneda;
    }

    public function setCta_banc($cta_banc) {
        $this->cta_banc = $cta_banc;
    }

    public function setCta_banc_dolares($cta_banc_dolares) {
        $this->cta_banc_dolares = $cta_banc_dolares;
    }

    public function setVendedor_refacciones($vendedor_refacciones) {
        $this->vendedor_refacciones = $vendedor_refacciones;
    }

    public function setVendedor_maquinaria($vendedor_maquinaria) {
        $this->vendedor_maquinaria = $vendedor_maquinaria;
    }

    public function setForma_pago($forma_pago) {
        $this->forma_pago = $forma_pago;
    }

    public function setMetodo_pago($metodo_pago) {
        $this->metodo_pago = $metodo_pago;
    }

    public function setUso_de_cfdi($uso_de_cfdi) {
        $this->uso_de_cfdi = $uso_de_cfdi;
    }

    public function setDireccion_entrega($direccion_entrega) {
        $this->direccion_entrega = $direccion_entrega;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }


}
