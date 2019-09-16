<?php
require 'View/header.php';
require 'Model/Model.php';

$connect = New Model();
$connect->connect();
$connect->execute();






require 'View/footer.php';


?>
