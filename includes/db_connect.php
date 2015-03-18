<?php

$server="localhost";
$dbname="blogv1";
$user="blogv1";
$pwd="pat1809";

// PDO
$dsn = 'mysql:dbname='.$dbname.';host='.$server. ';';

$db = new PDO($dsn, $user, $pwd);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// détruire les autres variables
unset($server, $dbname, $user, $pwd, $dsn);
