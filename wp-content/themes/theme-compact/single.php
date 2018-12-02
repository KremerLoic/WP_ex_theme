<?php
get_header();
?>
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo the_title(); ?></h1>
                    <ul class="breadcrumbs">
                        <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- content begin -->
<h1>LOLOLOLOLOL</h1>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-single">
                        <!-- post begin -->
                        <?php while (have_posts()) : the_post(); ?>
                            <article>
                                <div class="post-media">
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive">
                                </div>
                                <div class="post-content">
                                    <div class="post-title">
                                        <h1><?php echo the_title(); ?></h1>
                                    </div>
                                    <div class="post-metadata">
                                    <span class="posted-on">
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                        <span class="byline">
                                        <i class="fa fa-user"></i>
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a>
                                    </span>
                                        <span class="cat-links">
                                        <i class="fa fa-folder-open"></i>
                                            <?php
                                            foreach (get_the_category() as $key => $cat):
                                                ?>
                                                <a href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name; ?></a>
                                                <?php
                                            endforeach;
                                            ?>
                                    </span>
                                    </div>
                                    <div class="hr"></div>
                                    <div class="post-entry">
                                        <?php echo get_the_content(); ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                        <!-- post close -->
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="main-sidebar">
                        <?php dynamic_sidebar( 'sidebar' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content close -->
<?php while (have_posts()) :
    the_post();
    ?>

    <?php
endwhile; ?>
<?php get_footer(); ?>