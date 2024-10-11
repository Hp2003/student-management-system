<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit</title>
</head>
<body>
    <?php 
        foreach($fruits as $fruit){
            echo "Name : " . $fruit->name . "<br>";
            echo "Price : " . $fruit->price . "<br>";
            echo "Fresh : " . ($fruit->is_fresh ? "Yes" : "No") . "<br><br>";
        }
    ?>
</body>
</html>