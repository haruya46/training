
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
        <p><a href="123.php">スタート</a></p>
        
        <?php for($d=1; $d<10; $d +=1): ?>
            <?php
            $a=rand(0,10);
            $b=rand(0,10);
            $c=$a+$b;
            ?>
            <p><?php echo $a."+".$b."="; ?></p>
           
            <input type="text" id="anser">
            <script>test();</script>
        <?php endfor ;?>
        <script>
            function test()
            {
            var anser='<?php echo $c; ?>'
            var id = document.getElementById('anser');
            if(anser==id){
                document.write("〇").value;
            }else{
                document.write("×").value;
            }
            }
        </script>
       
        <a href="123.php">もう一度解く</a>

    </main>
</body>
</html>