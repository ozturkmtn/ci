<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        
        <?php
        echo $content;
        
        foreach ($classes as $class){
        ?>
        <br/>
        <?php
        echo $class->type_id;
        }
        ?>
    </body>
</html>