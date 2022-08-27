<?php
// error_reporting(E_ALL);
error_reporting(0);
$db = new mysqli('localhost', 'root', '', 'adressbuch');
print_r ($db->connect_error);

if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem');
}
?>