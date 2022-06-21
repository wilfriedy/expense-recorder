<?php
//require all classes in directory
foreach(glob('src/classes/*.class.php') as $file){
    require_once $file;
}
// autoload class intances
function autoloading($classname){
    include('src/classes' . $classname . '.class.php');
}
//register auto load functions
spl_autoload_register('autoloading');

// require all neccessary functions / files

foreach(glob("db/*.php" ) as $file){
    require_once $file;
}