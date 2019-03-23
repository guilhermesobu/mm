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
                require 'pages/header.html';
                require 'pages/menu.html'; 
            ?>
        </div>
        
        <table>
            <tbody>
                <tr class="index-div-content">
                    <td class="main-div">
                        <?php 
                            require './pages/maincontent.html'; 
                        ?>
                    </td>
                    <td class="side-div">
                        <?php 
                            require './pages/sidecontent.html';
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class="index-div-footer">
            <?php 
                require './pages/footer.html';
            ?>
        </div>
    </body>
</html>

<!-- 
    Git lab
Email da SSH: guilherme.sobu@outlook.com
File que salvou a chave: 153957
Senha PassPhrase: 153957
-->