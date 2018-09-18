<?php
$host_name = $_SERVER['SERVER_NAME'];
define('URL', 'http://'.$host_name.'/Week4/');
// change the location of file from htdocs eg htdocs/abc :: hostname.'/abc/'
echo URL;
?>