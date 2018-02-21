<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Functions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <?php
        echo "<h1>Reverse string</h1>";

        function revInput($input){
            return  strrev($input);
        }

        echo "The word 'hello' reversed becomes ".revInput("hello");
    ?>
</body>
</html>