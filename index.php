<?php


echo "here <br />";

echo(getcwd());
$dbh = new PDO('mysql:host=localhost;dbname=aihara', "root", "");

$res = $dbh->query("SELECT * FROM users");
foreach($res->fetch() as $key => $val ) {
    echo $key . "===" . $val . "<br />";
};
?>