
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <p><a href="page.html">Вторая страница</a></p>
  <img src="/image.php"/>  
  <span>Количество показов: </span>
 
  <?php 
    $count = file_get_contents(__DIR__.'/count.txt') ;
    echo $count;

    $count = $count+1;
    file_put_contents(__DIR__.'/count.txt', $count);
  ?>
</body>
</html>

