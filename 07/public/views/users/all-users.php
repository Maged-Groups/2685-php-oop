<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All users</title>
</head>

<body>
    <h1>All users</h1>

    <?php
    foreach ($users as $user):
        // Casting = convert from type to another type
        $user = (object) $user;
        ?>

        <h2><?= $user->name; ?></h2>
        <h4><?= $user->email; ?></h4>

        <?php

    endforeach;
    ?>
</body>

</html>