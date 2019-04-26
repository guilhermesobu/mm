<?php

function insert($name, $description, $department){ // Para inserir novas curiosidades
    return $insert = "INSERT INTO curiosity (name, description, id_department) VALUES ('{$name}', '{$description}', {$department})";    
}



//PESQUISAS
$select_all = "SELECT c.id, c.name, c.description, d.department FROM curiosity c JOIN department d ON c.id_department = d.id";

function search($query){
    return $search = "SELECT c.name, c.description, d.department FROM curiosity c JOIN department d ON c.id_department = d.id WHERE name LIKE ('%{$query}%')";
}

