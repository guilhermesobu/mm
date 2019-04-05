<!DOCTYPE html>
<html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <meta charset="utf-8">
        <title>MUSEUFODAO!!</title>
    </head>

    <body>

        <div>
            <?php
            require 'default/header.php';
            require 'default/menu.php';
            ?>
        </div>

        <div class="index-div-content">
            <div class="main-div">
                <form action="insert.php" method="get" class="main-p"> 
                    Nome:<input type="text" name="name"><br>
                    Descrição:<input type="text" name="description"><br>
                        Departamento:<select name="department">
                            <option value="0"></option>
                            <option value="1">História</option>
                            <option value="2">Ciência</option>
                            <option value="3">Alimentação</option>
                        </select><br>
                    <button type="submit">Registrar</button><br>
                    <?php
                    require '../src/query/connection.php';
                    require '../src/query/query.php';
                    isset($_GET['query']) != "" ? $query = $_GET['query'] : $query = NULL;
                    isset($_GET['name']) != "" ? $name = $_GET['name'] : $name = NULL;
                    isset($_GET['description']) != "" ? $description = $_GET['description'] : $description = NULL;
                    isset($_GET['department']) != 0 ? $department = $_GET['department'] : $department = 0;
                    if (($name) != NULL || ($description) != NULL || ($department == 0)) {
                        if ($name != NULL && $description != NULL && $department != 0) {                            
                            mysqli_query($connection, insert($name, $description, $department));
                            mysqli_close($connection);
                            echo "Curiosidade Registrada com sucesso!!";
                        } else {
                            if ($name == "") {
                                echo "Faltou escrever o nome!";
                            } elseif ($description == "") {
                                echo "Faltou escrever a descrição!";
                            } else {
                                echo "Faltou escrever o departamento!";
                            }
                        }
                    } else {
                        echo "Nada foi feito";   
                    }
                    ?>
                </form>
            </div>
            <div class="side-div">
                <?php
                require 'default/sidecontent.php';
                ?>
            </div>
        </div>

        <div class="footer-div">
            <?php
            require 'default/footer.php';
            ?>
        </div>

    </body>
</html>