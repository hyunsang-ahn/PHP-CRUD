<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('hyunsang', 'hodoo', 'mandoo', );
    echo $coworkers[2];
    echo count($coworkers);
    array_push($coworkers, 'jadoo');
    var_dump($coworkers);
    ?>
</body>
</html>