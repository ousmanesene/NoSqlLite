<?php
error_reporting(0);
$db = new SQLite3('mysqlitedb.db');

$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO foo (bar) VALUES ('This is a test')");

$result = $db->query('SELECT bar FROM foo');
print_r($result->fetchArray());
?>