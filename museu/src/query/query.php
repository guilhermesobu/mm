<?php

function insert($name, $description){
    $insert = "INSERT INTO curiosity (name, description) VALUES ('{$name}', '{$description}')";    
}

$select_all = "SELECT * FROM curiosity";

