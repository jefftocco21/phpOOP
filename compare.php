<?php

class Box {
    public $name ="box";
}

$box = new Box; 

$box_ref = $box;

$box_clone = clone $box;

$box_mod = clone $box;
$box_mod->name = "mod box";

$an_box = new Box;

echo 'Reference: ' . ($box == $box_ref ? 'T' : 'F') . "<br />";
echo 'Cloned: ' . ($box == $box_clone ? 'T' : 'F') . "<br />";
echo 'Modified: ' . ($box == $box_mod ? 'T' : 'F') . "<br />";
echo 'Another: ' . ($box == $an_box ? 'T' : 'F') . "<br />";

echo "<hr />";

echo 'Reference: ' . ($box === $box_ref ? 'T' : 'F') . "<br />";
echo 'Cloned: ' . ($box === $box_clone ? 'T' : 'F') . "<br />";
echo 'Modified: ' . ($box === $box_mod ? 'T' : 'F') . "<br />";
echo 'Another: ' . ($box === $an_box ? 'T' : 'F') . "<br />";
?>