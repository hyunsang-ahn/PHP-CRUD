<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <!-- <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JAVASCRIPT">JAVASCRIPT</a></li>
        <li><a href="index.php?id=PHP">PHP</a></li> -->
        <?php
         $list = scandir('./data');
        $i = 0;
        while($i < count($list)){
            if($list[$i] != '.'){
                if($list[$i] != '..'){

                    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }

            }
            $i = $i + 1;
        }
        ?>
    </ol>

    <h2>

    <?php 
    if(isset($_GET['id'])){
        echo $_GET['id'];
    }else{
        echo 'Welcome';
    }
    ?>
    </h2>
    <?php
    if(isset($_GET['id'])){

        echo file_get_contents("data/".$_GET['id']);
    }else{
        echo 'Hello PHP';
    }
    ?>
</body>
</html>