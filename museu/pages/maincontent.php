<div class="main-p">
    <?php 
        require 'src/query/connection.php';
        require 'src/query/query.php';
        if (isset($_POST['query'])){
            $query = $_POST['query'];
            $results = mysqli_query($connection, search($query));
            foreach ($results as $info){    
                echo "Nome: " . $info['name'] . "<br>";
                echo "Descrição: " . $info['description'] . "<br><br>";
            }
        } else {
            $results = mysqli_query($connection, $select_all);
            foreach($results as $info){
                echo "Nome: " . $info['name'] . "<br>";
                echo "Descrição: " . $info['description'] . "<br><br>";
            }
        }
    ?>
</div>