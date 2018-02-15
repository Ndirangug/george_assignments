<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add 15</title>
</head>
<body>
    <?php

        $add15 = [5, 254, 12, 47, 3];
       for ($i=0; $i < 5 ; $i++) { 
           echo "The value of number at position $i before adding 15 is ". $add15[$i]." and after adding 15 is ".($add15[$i] += 15)."<br/>";
       }
      


    ?>
</body>
</html>