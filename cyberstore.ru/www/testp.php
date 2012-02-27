<?php
// Include the main Propel script
echo "ololo1";

require_once './vendor/propel/runtime/lib/Propel.php';
echo "ololo2";

// Initialize Propel with the runtime configuration
Propel::init("./cyberstore/build/conf/cyberstore-conf.php");
echo "ololo3";

// Add the generated 'classes' directory to the include path
set_include_path("./cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
echo "ololo4";

$author = new User();
echo "ololo5";
$author->setLogin("sdf");
echo "ololo6";
$author->setPassword("sdfsdf");
echo "ololo7";
$author->setSessionId(10);
echo "ololo8";
$author->setId(1);
echo "ololo9";
$author->save();
echo "ololo10";

?>
