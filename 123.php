<?php 
require_once('abc.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <h1>脳トレ</h1>
    </header> 
    <main>
        <p> スタート</p>
        <?php 
         
        //十問出す処理
        $c=1;
        ?>
        <?php while($c < 10) : ?>
            
            <input type="text" id="anser">
            <br>
            <?php $c +=1; ?>
        <?php endwhile ?>
        <a href="123.php">もう一度解く</a>

    </main>
</body>
</html>