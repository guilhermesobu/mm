<div class="main-p">
    <?php 
        require 'src/query/connection.php';
        require 'src/query/query.php';
        if (isset($_POST['query'])){
            $query = $_POST['query'];
            echo $query;
        } else {
            $results = mysqli_query($connection, $select_all);
            var_dump($results);
            echo "<br><br>";
            foreach($results as $info){
                print_r($info);
            }
            echo "<br>";
            foreach($results as $key => $info){
                print_r($info);
                var_dump($info);
                var_dump($key);
            }
        }
    ?>
</div>