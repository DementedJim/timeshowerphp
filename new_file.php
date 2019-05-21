<?php
require('./a.php');
if (isset($_GET['print'])){
    header('Content-type: text/plain; charset=utf-8');
    echo file_get_contents(basename(__FILE__));
}
if (isset($_GET['public'])){
    header('Access-Control-Allow-Origin: *');
    header('Content-type: text/plain; charset=utf-8');
    header('Access-Control-Allow-Methods: GET,POST,DELETE');
}
$cb = new timeshower\TimeOnline();
echo $cb->show();
?>