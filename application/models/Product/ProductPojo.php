<?php

/*
 * Desarrolladores : Saúl Aarón González Moctezuma && Ana Karen González Palma
 * Sistema de Control Robuspack SCR
 * https://scrobuspack.com 
 * "Controlar la complejidad es la esencia de la programación"
 */

class ProductPojo {

    private $id;
    private $name;
    private $sku;
    private $price;
    private $min;
    private $max;
    private $qty;
    private $image;
    private $description;
    private $location;
    private $attribute_value_id;
    private $brand_id;
    private $category_id;
    private $store_id;
    private $availability;

    function __construct($id, $name, $sku, $price, $min, $max, $qty, $image, $description, $location, $attribute_value_id, $brand_id, $category_id, $store_id, $availability) {
        $this->id = $id;
        $this->name = $name;
        $this->sku = $sku;
        $this->price = $price;
        $this->min = $min;
        $this->max = $max;
        $this->qty = $qty;
        $this->image = $image;
        $this->description = $description;
        $this->location = $location;
        $this->attribute_value_id = $attribute_value_id;
        $this->brand_id = $brand_id;
        $this->category_id = $category_id;
        $this->store_id = $store_id;
        $this->availability = $availability;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSku() {
        return $this->sku;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getMin() {
        return $this->min;
    }

    public function getMax() {
        return $this->max;
    }

    public function getQty() {
        return $this->qty;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getAttribute_value_id() {
        return $this->attribute_value_id;
    }

    public function getBrand_id() {
        return $this->brand_id;
    }

    public function getCategory_id() {
        return $this->category_id;
    }

    public function getStore_id() {
        return $this->store_id;
    }

    public function getAvailability() {
        return $this->availability;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSku($sku) {
        $this->sku = $sku;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setMin($min) {
        $this->min = $min;
    }

    public function setMax($max) {
        $this->max = $max;
    }

    public function setQty($qty) {
        $this->qty = $qty;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setAttribute_value_id($attribute_value_id) {
        $this->attribute_value_id = $attribute_value_id;
    }

    public function setBrand_id($brand_id) {
        $this->brand_id = $brand_id;
    }

    public function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    public function setStore_id($store_id) {
        $this->store_id = $store_id;
    }

    public function setAvailability($availability) {
        $this->availability = $availability;
    }




}
