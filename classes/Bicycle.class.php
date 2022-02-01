<?
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
?>