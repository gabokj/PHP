<?php
$data = file_get_contents(filename: "https://www.linkedin.com/in/gabriel-ricca-b41643343/");
$data = json_decode($data, associative: true );

$chatterCount = $data ["chatter_count"];
$chatterWhitRoles = $data ["chatters"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="Container">
    <h1>Systems Development Student</h1>
    <div class="chatters">
        <?php
        foreach ($chatterWhitRoles as $roles => $chatters) {
            if(count($chatters) == 0) {
                continue;
            }
            ?>
            <div class="chatter-<?= $roles ?>">
                <h3><?= ucfirst($roles) ?></h3>
                <?= implode(", ", array_map('htmlspecialchars', $chatters)) ?>.
            </div>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>