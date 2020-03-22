<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic(){
            print('lorem ipsum dolor1<br>');
            print('lorem ipsum dolor2<br>');

        }

        basic()
    ?>
    <h2>Parameter &amp; argument</h2>
    <?php
    function sum($left, $right){
        print($left + $right);
        print('<br>');
    }
    sum(2,4);
    sum(9999999,11111);
    ?>
    <h2>return</h2>
    <?php
    function sum2($left, $right){
        return $left + $right;
    }
    print(sum2(4,54545));
    file_put_contents('result.txt', sum2(1213123,212121))
    ?>
</body>
</html>