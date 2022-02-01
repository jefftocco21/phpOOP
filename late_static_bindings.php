<?php

class Sofa {
    protected static $identity = "Sofa Class";

    public static function identity_test() {
        echo 'self: ' . self::$identity . "<br />";    
        echo 'static: ' . static::$identity . "<br />";

        echo 'get class: ' . get_class() . "<br />";
        echo 'get called class: ' . get_called_class() . "<br />";
    }
}

class Loveseat extends Sofa {
    protected static $identity = 'Loveseat class';
}

Sofa::identity_test();
echo "<hr/>";
Loveseat::identity_test(); 

?>