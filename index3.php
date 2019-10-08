<?php

$host = 'localhost';
$user = 'root';
$pw = 'ghkfkd12';
$dbName = 'php_kjw';

//echo 'MySQL 사용 '.(class_exists('mysqli') ? '가능' : '불가').'<br>';
$mysqli = mysqli_connect($host, $user, $pw, $dbName);

if($mysqli){
    $query = "select * from test";
    $result = $mysqli->query($query);
    while($row = $result->fetch_row()){
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>";
        echo $row[0];
        echo "</td>";
        echo "<td>";
        echo $row[1];
        echo "</td>";
        echo "</tr>";
        echo "</table>";

    }
}else{
    echo 22;
}
?>

