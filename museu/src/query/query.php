<?php

function insert($name, $description){ // Para inserir novas curiosidades
    return $insert = "INSERT INTO curiosity (name, description) VALUES ('{$name}', '{$description}')";    
}



//PESQUISAS
$select_all = "SELECT name, description FROM curiosity";

function search($query){
    return $search = "SELECT name, description FROM curiosity WHERE name LIKE ('%{$query}%')";
}

