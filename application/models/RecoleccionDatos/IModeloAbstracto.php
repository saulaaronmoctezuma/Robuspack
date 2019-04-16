<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación
 * Fecha: 11-04-2019 10:19 am "
 */

interface IModeloAbstracto {
    public function add($objeto);
    public function delete($id);
    public function update($objeto);
    public function query();
}
