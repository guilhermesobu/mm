<form action = "index.php" method = "post" class="main-p">
    Nome:<input type="text" name="name"><br>
    Descrição:<input type="text" name="description"><br> 
    <button type="submit">Registrar</button><br>
    <?php
        require 'src/query/connection.php';
        if (isset($_POST['query'])){
            $query = $_POST['query'];
        }
        if(isset($_POST['name'])||isset($_POST['description'])){
            $name = $_POST['name'];
            $description = $_POST['description']; 
        }
        if (isset($query)) {
            echo $query;
        } elseif ((isset($name)) && (isset($description))) {
            $insert = "INSERT INTO curiosity (name, description) VALUES ('{$name}', '{$description}')";
            mysqli_query($connection, $insert);
            mysqli_close($connection);
            echo "Curiosidade Registrada com sucesso!!";
        } else {
            echo "Curiosidade não registrada...";
        }
    ?>
</form>