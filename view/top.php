<?php
require_once('lib/print.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            print_title()
        ?> 
    
    </title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <!-- <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JAVASCRIPT">JAVASCRIPT</a></li>
        <li><a href="index.php?id=PHP">PHP</a></li> -->
        <?php
            print_list()
        ?>
    </ol>