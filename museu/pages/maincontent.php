<p class = "main-p" >
</p>
<form action = "index.php" method = "post" id="#submit">
    Nome:<input type = "text" name = "name"><br>
    Descrição:<input type="text" name="description"><br> 
 <?php
    require 'src/query/query.php';
    require 'src/query/connection.php';
        $query = $_POST['query'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        if (isset($_POST['query'])) {
            echo $query;
        } elseif (isset($_POST['name']) || isset($_POST['description'])) {
            if(isset($name) && isset($description)){
                connection();
                mysqli_query(connection(), insert($name, $description));
                mysqli_close(connection());
            } else {
                echo "Curiosidade não registrada...";
            }
        } else {
    ?>
    <input type="submit" value="Registrar">
</form>
<?php 
    } 