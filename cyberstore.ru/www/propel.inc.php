<?
require_once './vendor/propel/runtime/lib/Propel.php';
// Initialize Propel with the runtime configuration
Propel::init("./cyberstore/build/conf/cyberstore-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path("./cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
?>