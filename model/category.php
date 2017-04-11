<?php
class Category {

    public $id = NULL;
    public $name = NULL;
    public $value = NULL;

    public function __construct() {
        $this->id = $id;
        $this->name = $name;
    }

    public function getID() {
        return $this->id;
    }

    public function setID() {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName() {
        $this->name = $name;
    }
}
?>