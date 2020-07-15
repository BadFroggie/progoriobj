<?php

require('src/Character.php');
require('src/Archer.php');

$hero = new Character("Gandalf", "Vous ne passerez paaaaaaas !!!");
$villain = new Character("Ouroukaï", "Grrrrrrrraaaarkrrrrr !");
$elfe = new Archer("Legolas", "Pour Arwen !", 25);
echo $hero->name;?> : 
<?php echo $hero->getWarcry() . "<br>";
echo $villain->name; ?> : 
<?php echo $villain->getWarcry() . "<br>";
echo $elfe->name; ?> : 
<?php echo $elfe->getWarcry() . "<br><br>";

echo $villain->hp . "<br>";
$elfe->rangeAttack($villain);

echo $villain->hp . "<br>";

echo Musique::getFx();