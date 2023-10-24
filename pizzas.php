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
            <section class="pizzas">
                
                    <?php
                    if(empty($pizzas)){
                        echo 'pizzas empty';
                    }else{
                        foreach ($pizzas as $key => $value) {
                    ?>
                    <article class="pizza-item">
                        <a href="/single-pizza.php?id=<?php echo $key ?>">
                            <img src="<?php echo $value['image'] ?>">
                        </a>
                    <?php
                    if($value['favorite'] === true){
                    ?>
                      <span class="favorite fa fa-heart"></span> 
                    <?php
                    }else{
                    ?>
                        <span class="favorite fa fa-heart-o"></span>
                    <?php 
                    }
                    ?>
                    <span class="favorite fa fa-heart-o"></span>
                    <div class="pizza-item-info">
                    <h3 class="pizza-item-title"><?php echo $value['name'] ?></h3>
                    <div class="pizza-item-info-detail">
                        <p>
                            <span class="icon fa fa-clock-o"></span>
                            <span><?php echo $value['preparationTime']. ' min'?></span>
                        </p>
                        <p>
                            <span class="icon fa fa-star"></span>
                            <span><?php echo $value['rating'] ?></span>
                        </p>
                        </div>
                    </div>
                    </article>
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