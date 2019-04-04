<!DOCTYPE html>
<html>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="../css/style.css">
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
                        Descrição:<select>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select><br>
                    <button type="submit">Registrar</button><br>
                    <?php
                    require '../src/query/connection.php';
                    require '../src/query/query.php';
                    isset($_GET['query']) != "" ? $query = $_GET['query'] : $query = NULL;
                    isset($_GET['name']) != "" ? $name = $_GET['name'] : $name = NULL;
                    isset($_GET['description']) != "" ? $description = $_GET['description'] : $description = NULL;
                    if (($name) != NULL || ($description) != NULL) {
                        if (($name) != NULL && ($description) != NULL) {                            
                            mysqli_query($connection, insert($name, $description));
                            mysqli_close($connection);
                            echo "Curiosidade Registrada com sucesso!!";
                        } else {
                            if ($name) {
                                echo "Faltou escrever a descrição!";
                            } else {
                                echo "Faltou escrever o nome!";
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