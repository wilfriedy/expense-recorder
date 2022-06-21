<?php
require './autoload.php';

$db_function = dbConnect();

DbObj::set_database($db_function);
echo '<br>';
print_r(DbObj::getAll());
// print_r(Dbaction::pri)