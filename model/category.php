<?php
class Category {

    private $id = NULL;
    private $name = NULL;
    private $value = NULL;

    public function __construct() {
        $this->id = $id;
        $this->name = $name;
    }

    public function getID() {
        return $this->id;
    }

    public function setID() {
        $this->id = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setName() {
        $this->name = $value;
    }
}
?>