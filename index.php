<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?
        if(isset($_GET['name'])) {
            echo("Hello, ". $_GET['name']);
        } else {
            ?>
            <form action="">
                <input type="text" name="name">
                <button type="submit">Send</button>
            </form>
            <?
        }
    ?>
    
</body>
</html>