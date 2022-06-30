<?php
require './autoload.php';

$db_function = dbConnect();

DbObj::set_database($db_function);
echo '<br>';
print_r(DbObj::getARecord(0));
echo '<br>';
$datas =  DbObj::getAll()
// print_r(Dbaction::pri)
?>

<html>

<body>
    <?php foreach ($datas as $data) :  ?>
        <p><?php echo $data->category ?></p>
    <?php endforeach ?>
</body>

</html>