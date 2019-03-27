<!DOCTYPE html>
<html>
    
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>MUSEUFODAO!!</title>
    </head>
    
    <body>
        
        <div>
            <?php
                require 'pages/header.php';
                require 'pages/menu.php'; 
            ?>
        </div>
        
        <div class="index-div-content">
            <div class="main-div">
                <?php 
                    require './pages/maincontent.php'; 
                ?>
            </div>
            <div class="side-div">
                <?php 
                    require './pages/sidecontent.php';
                ?>
            </div>
        </div>
        
        <div class="index-div-footer footer-div">
            <?php 
                require './pages/footer.php';
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