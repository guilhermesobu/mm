<?php
require './connection.php';

$insert = "INSERT INTO curiosity VALUES ('{$name}', '{$description}')";

$select_all = "SELECT * FROM curiosity";

