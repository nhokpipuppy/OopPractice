<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box {
            width:700px;
            margin:auto;
        }
        .news {
            width:100%;
        }
        h1 {
            text-align:center;
        }
        .back {
            display: flex;
            justify-content: flex-end;
        }
        .back a {
            text-decoration:none;
            background: green;
            padding:5px;
            border-radius:10px;
            color:yellow;
            margin-bottom:40px;
        }
    </style>
</head>
<body>
<div class="box">
<?php include('__autoload.php');
if (isset($_GET)) {
    $table = $_GET['table'];
    $id = $_GET['id'];
    $sql = "SELECT * FROM $table WHERE Id = $id";
    $a = new WordWithDatabase();
    
    $b = $a -> getRow($sql);
    echo '<div class="news">';
    echo "<h1>".$b['Title']."</h1>";
    echo "<p>".$b['Content']."</p>";
    echo '</div>';
}
?> 
<div class="back" style="text-align:center">
    <a href="index.php">Quay lại trang chủ</a>
</div>
</div>
</body>
</html>
