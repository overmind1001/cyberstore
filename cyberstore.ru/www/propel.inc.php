<?
$www = $_SERVER['DOCUMENT_ROOT'];
require_once "$www/vendor/propel/runtime/lib/Propel.php";
// Initialize Propel with the runtime configuration
Propel::init("$www/cyberstore/build/conf/cyberstore-conf.php");

// Add the generated 'classes' directory to the include path
set_include_path("$www/cyberstore/build/classes" . PATH_SEPARATOR . get_include_path());
?>