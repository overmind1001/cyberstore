<!--?php
// Include the main Propel script
include_once '../initPropel.php';
//require_once 'U:/usr/local/php5/PEAR/propel/Propel.php';
// Initialize Propel with the runtime configuration
Propel::init("../bookstore/build/conf/bookstore-conf.php");
// Add the generated 'classes' directory to the include path
set_include_path("../bookstore/build/classes" . PATH_SEPARATOR . get_include_path());

$author = new Author();
$author->setFirstName('Jane');
$author->setLastName('Austen');
$author->save();
?-->

<?php
// Include the main Propel script
include_once '../initPropel.php';
//require_once 'U:/usr/local/php5/PEAR/propel/Propel.php';
// Initialize Propel with the runtime configuration
Propel::init("../cyberstore/build/conf/cyberstore-conf.php");
// Add the generated 'classes' directory to the include path
set_include_path("../cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());

$i=9;
$user = new User();
//$user->setLogin("alex$i");
//$user->setPassword("alex$i");
//$user->setId($i);
$user->save();

//function makecoffee($type = "капуччино")
//{
//    return "Готовим чашку $type.\n";
//}
//echo makecoffee();
//echo makecoffee(null);
//echo makecoffee("эспрессо");

?>