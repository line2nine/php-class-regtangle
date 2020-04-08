<?php

class Rectangle
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
         return $this->height * $this->width;
    }

    public function getPerimeter()
    {
        return ($this->height + $this->width) * 2;
    }

    public function display()
    {
        return "Hinh chu nhat co Chieu Rong va Chieu Dai la: " . $this->width . "x" . $this->height;
    }
}