<div class="main-p">
    <?php 
        require 'src/query/connection.php';
        require 'src/query/query.php';
        if (isset($_POST['query'])){
            $query = $_POST['query'];
            echo $query;
        } else {
            $results = mysqli_query($connection, $select_all);
            foreach($results as $info){
                //print_r($info);
                echo "Nome: " . $info['name'] . "<br>";
                echo "Descrição: " . $info['description'] . "<br><br>";
            }
        }
    ?>
</div>