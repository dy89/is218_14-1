<?php
class Product {
    private $category = NULL;
    private $id = NULL;
    private $code = NULL; 
    private $name = NULL; 
    private $price = NULL;

    public function __construct() {
        $this->category = $category;
        $this->code = $code;
        $this->name = $name;
        $this->price = $price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory() {
        $category = $this->category;
    }

    public function getID() {
        return $this->id;
    }

    public function setID() {
        $id = $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function setCode() {
        $code = $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function setName() {
        $name = $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getPriceFormatted() {
        $formatted_price = number_format($this->price, 2);
        return $formatted_price;
    }

    public function setPrice() {
        $price = $this->price;
    }

    public function getDiscountPercent() {
        $discount_percent = 30;
        return $discount_percent;
    }

    public function getDiscountAmount() {
        $discount_percent = $this->getDiscountPercent() / 100;
        $discount_amount = $this->price * $discount_percent;
        $discount_amount_r = round($discount_amount, 2);
        $discount_amount_f = number_format($discount_amount_r, 2);
        return $discount_amount_f;
    }

    public function getDiscountPrice() {
        $discount_price = $this->price - $this->getDiscountAmount();
        $discount_price_f = number_format($discount_price, 2);
        return $discount_price_f;
    }

    public function getImageFilename() {
        $image_filename = $this->code . '.png';
        return $image_filename;
    }

    public function getImagePath() {
        $image_path = '../images/' . $this->getImageFilename();
        return $image_path;
    }

    public function getImageAltText() {
        $image_alt = 'Image: ' . $this->getImageFilename();
        return $image_alt;
    }
}
?>