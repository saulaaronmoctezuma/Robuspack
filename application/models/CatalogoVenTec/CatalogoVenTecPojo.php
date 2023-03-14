<?php



/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */
 
class CatalogoVenTecPojo {
    
     private $id_catalogo;
     private $nombre;
     private $rol;
     private $area;
     private $comision;
     private $correo;
     
     function __construct($id_catalogo, $nombre, $rol, $area, $comision, $correo) {
         $this->id_catalogo = $id_catalogo;
         $this->nombre = $nombre;
         $this->rol = $rol;
         $this->area = $area;
         $this->comision = $comision;
         $this->correo = $correo;
     }

     function getId_catalogo() {
         return $this->id_catalogo;
     }

     function getNombre() {
         return $this->nombre;
     }

     function getRol() {
         return $this->rol;
     }

     function getArea() {
         return $this->area;
     }

     function getComision() {
         return $this->comision;
     }

     function getCorreo() {
         return $this->correo;
     }

     function setId_catalogo($id_catalogo) {
         $this->id_catalogo = $id_catalogo;
     }

     function setNombre($nombre) {
         $this->nombre = $nombre;
     }

     function setRol($rol) {
         $this->rol = $rol;
     }

     function setArea($area) {
         $this->area = $area;
     }

     function setComision($comision) {
         $this->comision = $comision;
     }

     function setCorreo($correo) {
         $this->correo = $correo;
     }   
}
