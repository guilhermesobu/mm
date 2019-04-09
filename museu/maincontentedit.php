<!DOCTYPE html>
<html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8"/>
        <title>MUSEUFODAO!!</title>
    </head>

    <body>

        <div>
            <?php
            require 'pages/default/header.php';
            require 'pages/default/menu.php';
            ?>
        </div>

        <div class="index-div-content">
            <div class="main-div">
                <div class="main-p">
                    <table>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Departamento</th>
                                <th style="width: 25px;">Modif.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'src/query/connection.php';
                            require 'src/query/query.php';
                            if (isset($_POST['query'])) {
                                $query = $_POST['query'];
                                $results = mysqli_query($connection, search($query));
                                foreach ($results as $info) {
                                    ?>            
                                    <tr>
                                        <td><?php echo $info['name']; ?></td>
                                        <td><?php echo $info['description']; ?></td>
                                        <td><?php echo (string) $info['department']; ?></td>
                                        <td class="form-edit">
                                            <form action="" method="get">
                                                <input type="submit" value="V">
                                            </form>
                                        </td>
                                    </tr>            
                                <?php
                                }
                            } else {
                                $results = mysqli_query($connection, $select_all);
                                foreach ($results as $info) {
                                    ?>
                                    <tr>
                                        <td><?php echo $info['name']; ?></td>
                                        <td><?php echo $info['description']; ?></td>
                                        <td><?php echo (string) $info['department']; ?></td>
                                        <td class="form-edit">
                                            <form action="" method="get">
                                                <input type="submit" value="V">
                                            </form>
                                        </td>
                                    </tr> 
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="side-div">
                <?php
                require 'pages/default/sidecontent.php';
                ?>
            </div>
        </div>

        <div class="footer-div">
            <?php
            require 'pages/default/footer.php';
            ?>
        </div>

    </body>
</html>