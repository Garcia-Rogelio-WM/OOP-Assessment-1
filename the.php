<?php

class phones {
    public $type;
    public $brand;
    public $color;


function __construct($type, $brand, $color)
{

    $this->type=$type;
    $this->brand=$brand;
    $this->color=$color;
}
    public function get_type(){

        return $this->type;

    }
    public function get_brand(){

        return $this->brand;

    }
    public function get_color(){

        return $this->color;

    }

}

?>

