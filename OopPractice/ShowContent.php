<?php include('__autoload.php');
if (isset($_GET)) {
    $table = $_GET['table'];
    $id = $_GET['id'];
    $sql = "SELECT * FROM $table WHERE Id = $id";
    $a = new WordWithDatabase();
    
    $b = $a -> getRow($sql);
    echo "<h1>"."</h1>"
}
?> 