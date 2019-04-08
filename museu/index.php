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
                <?php 
                    isset($_GET['home']) ? require './pages/default/maincontent.php' : ''; 
                ?>
            </div>
            <div class="side-div">
                <?php 
                    require './pages/default/sidecontent.php';
                ?>
            </div>
        </div>
        
        <div class="footer-div">
            <?php 
                require './pages/default/footer.php';
            ?>
        </div>
        
    </body>
</html>

<!-- 
    Git lab
Email da SSH: guilherme.sobu@outlook.com
File que salvou a chave: 153957
Senha PassPhrase: 153957


TESTE
-->