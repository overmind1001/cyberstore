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

$author = new User("Anton","passw");
echo "ololo5";
$author->save();
echo "ololo6";

?>
