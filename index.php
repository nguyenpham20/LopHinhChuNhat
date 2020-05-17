<?php
class Rectangle  {
    //khai bao cac thuoc tinh
    public $width;
    public $height;
    //ding nghia phuong thuc khoi tao
    public function  __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    //  dinh nghia phuong thuc getArea de tinh dien tich
    public function getArea() {
        return $this->width * $this->height;
    }
    //dinh nghia phuong thuc de tinh chu vi
    public function getPerimeter() {
        return (($this->width + $this->height)*2);
    }
    //dinh nghia phuong thuc tra ve do dai va do rong cua hinh chu nhat
    public function display() {
        return "Rectangle{" . "width" . $this->width . "heght" . $this->height . "}";
    }
}

?>
