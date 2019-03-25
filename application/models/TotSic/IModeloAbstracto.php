<?php


interface IModeloAbstracto {
    public function add($objeto);
    public function delete($id);
    public function update($objeto);
    public function query();
}
