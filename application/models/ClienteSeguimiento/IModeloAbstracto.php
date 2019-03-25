<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface IModeloAbstracto {
    public function add($objeto);
    public function delete($id);
    public function update($objeto);
    public function query();
}
