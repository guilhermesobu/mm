<div class="main-p">
    <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Departamento</th>
          </tr>
        </thead>
        <tbody>
            <?php 
                require 'src/query/connection.php';
                require 'src/query/query.php';
                if (isset($_GET['query'])){
                    $query = $_GET['query'];
                    $results = mysqli_query($connection, search($query));
                    foreach ($results as $info){  
            ?>            
            <tr>
                <td><?php echo $info['name']; ?></td>
                <td><?php echo $info['description']; ?></td>
                <td><?php echo (string)$info['department']; ?></td>
            </tr>            
            <?php   }
                } else {
                    $results = mysqli_query($connection, $select_all);
                    foreach ($results as $info){ 
            ?>
            <tr>
                <td><?php echo $info['name']; ?></td>
                <td><?php echo $info['description']; ?></td>
                <td><?php echo (string)$info['department']; ?></td>
            </tr> 
            <?php        
                    }
                }
            ?>
        </tbody>
    </table>
</div>