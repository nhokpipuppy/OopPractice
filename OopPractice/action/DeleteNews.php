<?php 
include('../__autoload.php');
if (isset($_GET)) {
    $table = $_GET['table'];
    $id = $_GET['id'];
    $a = new Db();
    $a -> remove($table, "Id = $id");
    header('location:../index.php');
}
?> 
