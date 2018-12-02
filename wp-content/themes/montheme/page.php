<?php
get_header();
?>

<?php while (have_posts()) :
    the_post();
    ?>
    <div>
        <h1><?php echo  get_the_title(); ?> est une page</h1>
        <p>
            <?php
            echo get_the_content();
            ?>

    <h2><?php the_field('texte'); ?></h2>
    <h2><?php the_field('texte_2'); ?></h2>
    <?php if( get_field('images') ): ?>

    <img src="<?php the_field('images'); ?>" />

        </p>
    </div>


<?php endif; ?>
    <?php
endwhile; ?>
<?php get_footer(); ?>