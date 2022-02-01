<?php 

class Sofa{
    public static $instance_count = 0;

    public function __construct($args=[]){
        self::$instance_count++;
        $this->seats = $args['seats'] ?? NULL;
        $this->arms = $args['arms'] ?? NULL;
    }

    public function __destruct(){
        self::$instance_count--;
    }
}

class Couch extends Sofa{
}

class Loveseat extends Sofa{
}

$sofa = new Sofa(['seats' => 3, 'arms' => 2]);
echo 'Sofa<br />';
echo '- seats: ' . $sofa->seats . '<br />';
echo '- arms: ' . $sofa->arms . '<br />';
echo '<br />';


$couch = new Couch(['seats' => 1, 'arms' => 2]);
echo 'Couch<br />';
echo '- seats: ' . $couch->seats . '<br />';
echo '- arms: ' . $couch->arms . '<br />';
echo '<br />';

$loveseat = new Loveseat(['seats' => 1, 'arms' => 3]);
echo 'loveseat<br />';
echo '- seats: ' . $loveseat->seats . '<br />';
echo '- arms: ' . $loveseat->arms . '<br />';
echo '<br />';

echo 'Instance count: ' . Sofa::$instance_count . "<br />";
?>