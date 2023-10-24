<?php
include './partials/menu.php';
include './partials/products.php';
include './partials/social.php';
?>

<?php
include './partials/header.php';
?>

<main>
    <div class="container">
        <section class="single-pizza">
        <?php
        if (!isset($_GET['id'])) {
        ?>
            <h3>ERROR 404.</h3>
            <a href='./pizzas.php'>Back to Products</a>
        <?php
        } else{
            if (array_key_exists($_GET['id'], $pizzas)) {
                $pizza = $pizzas[$_GET['id']];
        ?>
            <aside class="pizza-image">
                <img src='<?php echo $pizza['image'] ?>'>
            </aside>
            <article class="pizza-detail">
                <h1 class="pizza-title"><?php echo $pizza['name'] ?></h1>
                <p class="pizza-description">
                    <?php echo $pizza['description'] ?>  
                </p>
                <div class="price">
                    <p><b>Size:</b><span class="size"><?php echo ' M ' . '(' . $pizza['size']['M']['radius'] . 'cm' . ')'?></span> : <b class="price"><?php echo $pizza['size']['M']['price'] ?></b> &euro;</p>
                    <p><b>Size:</b><span class="size"><?php echo ' L ' . '(' . $pizza['size']['L']['radius'] . 'cm' . ')'?></span> : <b class="price"><?php echo $pizza['size']['L']['price'] ?></b> &euro;</p>
                    <p><b>Size:</b><span class="size"><?php echo ' XL ' . '(' . $pizza['size']['XL']['radius'] . 'cm' . ')'?></span> : <b class="price"><?php echo $pizza['size']['XL']['price'] ?></b> &euro;</p>
                </div>
                    <p><b>Preparation time</b>: <span class="preparation-time"><?php echo $pizza['preparationTime'] ?></span> min</p>
                    <p><b>Customer rate</b>: <span class="rate"><?php echo $pizza['rating'] ?></span> <span class="fa fa-star"></span></p>
            </article>
        <?php
    }else{
        ?>
            <h3>Product with the given parameters does not exist! </h3> 
            <a href='./pizzas.php'>Back to Products</a>
        <?php        
    }
}
?>
        </section>
    </div>
</main>

    <?php
        include './partials/footer.php';
    ?>