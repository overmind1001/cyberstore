<?php
// Include the main Propel script
echo "ololo1";

include 'propel.inc.php';

$author = new User("Anton","passw");
echo "ololo5";
$author->save();
echo "ololo6";

?>
