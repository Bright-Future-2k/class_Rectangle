<?php


class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function areaRect()
    {
        return $this->width * $this->height;
    }

    public function perimeter()
    {
        return ($this->width + $this->height) * 2;
    }
    public function display(){
        return "Result: Width " . $this->width . " and Height " . $this->height;
    }
}
