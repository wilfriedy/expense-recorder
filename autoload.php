<?php
//require all classes in directory
foreach (glob('src/classes/*.class.php') as $file) {
    require_once $file;
}

// define paths components files
define("MAIN_PATH", dirname(__FILE__));
define("COMPONENTS_PATH", MAIN_PATH . '/src/components');


// autoload class intances
// function autoloading($classname){
//     include('src/classes' . $classname . '.class.php');
// }
//register auto load functions
// spl_autoload_register('autoloading');

// require all neccessary functions / files

foreach (glob("db/*.php") as $file) {
    require_once $file;
}
