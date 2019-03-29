<p class = "main-p" >
    <?php
    require 'src/query/query.php';
    
    
        if (isset($_GET['query'])) {
            $query = $_GET['query'];
            echo $query;
        } elseif ($_GET['name'] || $_GET['description']) {
            require '../src/query/connection.php';
            require '../src/query/query.php';
            $connection;
            $name = $_GET['name'];
            $description = $_GET['description'];
            if(isset($name) && isset($description)){
                $insert;
            } else {
                echo "Curiosidade não registrada...";
            }
        } else {
    ?>
</p>
<form action = "../index.php" method = "get">
    Nome:<input type = "text" name = "name"><br>
    Descrição:<input type="text" name="description"><br> 
    <input type="submit" value="Registrar">
</form>
<?php 
    } 
?> 