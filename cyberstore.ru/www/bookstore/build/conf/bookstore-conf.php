<?php
// This file generated by Propel 1.6.4 convert-conf target
// from XML runtime conf file U:\usr\local\php5\bookstore\runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'bookstore' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=bookstore',
        'user' => 'root',
        'password' => '',
      ),
    ),
    'default' => 'bookstore',
  ),
  'generator_version' => '1.6.4',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-bookstore-conf.php');
return $conf;
?>