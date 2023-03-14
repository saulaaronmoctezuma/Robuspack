<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

interface IModeloAbstracto1 {
    public function add($objeto);
    public function delete($id);
    public function update($objeto);
    public function query();
}
