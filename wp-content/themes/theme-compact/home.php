<?php
/**
 * Template Name: Home
 *
 */
get_header();
?>
<?php include_once '_partials/slider.php' ?>

    <div class="clearfix"></div>

    <!-- content begin -->
    <div id="content" class="no-padding">

        <!-- section begin -->
        <section id="section-about">
            <div class="container">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="about-box">
                                <h2 class="box-title"><?php echo  get_the_title(); ?></h2>
                                <div class="tiny-border"></div>
                                <div>
                                    <?php echo the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-project" class="no-padding">
            <div class="container">
                <?php include_once '_partials/last_articles.php' ?>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section>
            <!-- Container Begin -->
            <div class="container">
                <?php include_once '_partials/assets.php' ?>
            </div>
            <!-- Container End -->
        </section>
        <!-- section close -->

    </div>
    <!-- content close -->

<?php get_footer(); ?>