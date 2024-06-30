<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Dessert Shop</title>

    <link rel="stylesheet" type="text/css" href="mystyles.css"/>
</head>
<body>
    <main id="main-div">
        <?php
        
            $newdata = implode("|", $_POST);

            file_put_contents("locationfile.txt", $newdata."\n", FILE_APPEND);

            print "Dessert Shop saved! Go back <a href='index.html'> home </a>.";
        ?>
    </main>
</body>
</html>