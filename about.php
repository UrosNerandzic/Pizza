<?php 
include './partials/menu.php';
include './partials/aboutSections.php';
include './partials/social.php';
?>

<?php
include './partials/header.php';
?>

    <main>
        <div class="container">

            <section class="about-section">
                <aside class="about-image">
                    <img src="<?php echo $aboutSections['about']['image']?>" alt="">
                </aside>
                <article class="about-info">
                    <h2 class="section-title"><?php echo $aboutSections['about']['title']?></h2>
                    <div class="about-info-data">
                        <?php echo $aboutSections['about']['fullText'] ?>
                    </div>
                </article>
            </section>
            
            <section class="about-section" id="preparation">
                <article class="about-info">
                    <h2 class="section-title"><?php echo $aboutSections['preparation']['title']?></h2>
                    <div class="about-info-data">
                        <?php echo $aboutSections['preparation']['fullText'] ?>
                    </div>
                </article>
                <aside class="about-image">
                    <img src="<?php echo $aboutSections['preparation']['image']?>" alt="">
                </aside>       
            </section>
            
            <section class="about-section" id="quality">
                <aside class="about-image">
                    <img src="<?php echo $aboutSections['quality']['image']?>" alt="">
                </aside>
                <article class="about-info">
                    <h2 class="section-title"><?php echo $aboutSections['quality']['title']?></h2>
                    <div class="about-info-data">
                        <?php echo $aboutSections['quality']['fullText'] ?>
                    </div>
                </article>
            </section>
            
            <section class="about-section" id="fresh">
                <article class="about-info">
                    <div class="about-info-data">
                        <h2 class="section-title"><?php echo $aboutSections['fresh']['title']?></h2>
                        <div class="about-info-data">
                             <?php echo $aboutSections['fresh']['fullText'] ?>
                        </div>
                    </div>
                </article>
                <aside class="about-image">
                    <img src="<?php echo $aboutSections['fresh']['image']?>" alt="">
                </aside>
            </section>
        </div>
    </main>

    <?php
        include './partials/footer.php';
    ?>