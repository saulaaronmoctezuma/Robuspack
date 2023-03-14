<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class UsuarioPojo{
    
    private $first_name;
   
    private $email;
    private $last_login;
   
    function __construct($first_name, $email, $last_login) {
        $this->first_name = $first_name;
        $this->email = $email;
        $this->last_login = $last_login;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function getEmail() {
        return $this->email;
    }

    function getLast_login() {
        return $this->last_login;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLast_login($last_login) {
        $this->last_login = $last_login;
    }


}