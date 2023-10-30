<?php

include('./class/cookie.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        $cookie = new Cookie();
        $cookie->setType('Песочное печенье');
        $cookie->setType('Бисквитное печенье');
        $cookie->setType('Творожное печенье');
        $cookie->setType('Крекеры');

        $types = implode(", ", $cookie->getType());
        ?>
        <p>
            Виды печенья:
            <?= $types ?>
        </p>
        <img src="https://media.tenor.com/z74qDfKjS1oAAAAd/chocolate-turtles-cookies-spiderwebs-cookie.gif" alt="">
    </div>
</body>

</html>

<?php
function showCookiesType($cookie)
{
    $types = implode(",", $cookie->getType());
    echo "<p>{$types}</p>";
}
?>