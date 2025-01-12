<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>

    <h1>All Products</h1>

    <?php

    foreach ($products as $product):
        $product = (object) $product;

        ?>

        <h2><?= $product->title; ?></h2>
        <h4><?= $product->price; ?></h4>

        <?php

    endforeach;

    ?>

</body>

</html>