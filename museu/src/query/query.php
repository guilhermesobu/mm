<?php
require 'src/query/connection.php';

function insert($name,$description){
 $insert = "INSERT INTO curiosity VALUES ('{$name}', '{$description}')";    
}


$select_all = "SELECT * FROM curiosity";

