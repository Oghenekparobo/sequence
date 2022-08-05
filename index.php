<?php include 'function.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sorting algorithm</title>
</head>


<body>


    <div class="input">
        <h1>sequence</h1>
        <form class="form" method="POST">
            <input type="text"  name="numbers" class="input-s">
            <input type="submit" name="submit"  value="run" class="b-s"> <br> <br>
            
    <?php sequence() ?>
        
        </form>

    </div>







</body>

</html>