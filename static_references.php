<?php

class Bicycle {
    public static $instance_count = 0;

    public $brand;
    public $model; 
    public $year;
    public $category; 
    public $description = "Used bicycle";
    protected $weight_kg = 0.0;
    protected static $wheels = 2;

    public const CATEGORIES = ['road', 'mountain', 'hybrid'];

    public static function create(){
        $class_name = get_called_class();
        $obj = new $class_name;
        //$obj = new static
        self::$instance_count++;
        return $obj;
    }

    public function name() {
        return $this->brand . " " . $this->model . "(" . $this->year . ")";
    }

    public static function wheel_deltails(){
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
        return "It has " . $wheel_string;
    }

    public function weight_kg(){
        return $this->weight_kg . ' kg';
    }

    public function set_weight_kg($value){
        $this->weight_kg = floatval($value);
    }

    public function weight_lbs(){
        $weight_lbs = floatval($this->weight_kg) * 2.204;
        return $weight_lbs . 'lbs';
    }
}

class Unicycle extends Bicycle{
    protected static $wheels = 1;

    public function bug_test(){
        return $this->weight_kg;
    }
}

$trek = new Bicycle;
$trek->brand = "Emonda";
$trek->year = "2017";

echo "Bicycle count: " . Bicycle::$instance_count . '<br />';
echo "Unicycle count: " . Unicycle::$instance_count . '<br />';

$bike  = Bicycle::create();
$uni = Unicycle::create();

echo "Bicycle Count: " . Bicycle::$instance_count . '<br />';
echo "Unicycle Count: " . Unicycle::$instance_count . '<br />';

echo "<hr />";
echo 'Categories: ' . implode(", ", Bicycle::CATEGORIES) . '<br />';
$trek->category = Bicycle::CATEGORIES[0];
echo "Category: " . $trek->category . '<br />';

echo "Bicyle: " . Bicycle::wheel_deltails() . '<br />';
echo "Unicycle: " . Unicycle::wheel_deltails() . '<br />';
?>