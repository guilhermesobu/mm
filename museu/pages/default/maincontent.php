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
                if (isset($_POST['query'])){
                    $query = $_POST['query'];
                    $results = mysqli_query($connection, search($query));
                    foreach ($results as $info){  
            ?>            
            <tr>
                <td>    <?php echo "Nome: " . $info['name'] . "<br>"; ?> </td>
                        <?php echo "Descrição: " . $info['description'] . "<br>"; ?>
                        <?php echo "Departamento: " . $info['department'] . "<br><br>"; ?>
                        
                        
            <?php   }
                } else {
                    $results = mysqli_query($connection, $select_all);
                    foreach ($results as $info){ ?>
            
            
                        <?php echo "Nome: " . $info['name'] . "<br>"; ?>
                        <?php echo "Descrição: " . $info['description'] . "<br>"; ?>
                        <?php echo "Departamento: " . $info['department'] . "<br><br>"; ?>
            
            
            <?php        }
                }
            ?>
        </tbody>
    </table>
</div>