<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define('ROOT_PATH', dirname(__FILE__));
        
        require_once ('./controller/HelloController.php');
        
        $controller = new HelloController();
        $controller->setView('primeira.php');
        require_once $controller->getView();       
        
        ?>
    </body>
</html>
