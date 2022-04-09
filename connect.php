<?php

$con = new mysqli('localhost', 'root', '', 'crudphp01');

if(!$con){
    die(mysqli_error($con));
}

?>