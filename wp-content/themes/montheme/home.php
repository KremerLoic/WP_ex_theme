<?php
get_header();
?>
    <div class="container">
    <div class="row">
<?php while (have_posts()) :
    the_post();
    ?>

    <div class="col-md-4">
        <h1><?php echo  get_the_title(); ?> est la page home</h1>
        <p>
            <?php
            echo get_the_content();
            ?>
        </p>
    </div>


    <?php
endwhile; ?>
    </div>
    </div>
<?php get_footer(); ?>