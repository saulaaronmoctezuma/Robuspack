<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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