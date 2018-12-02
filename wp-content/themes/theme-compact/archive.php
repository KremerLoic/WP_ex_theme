<?php
get_header();
?>

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div id="blog-grid" class="blog-grid">

                <?php while (have_posts()) : ?>
                    <!-- post begin -->
                    <article class="item col-md-4 col-sm-6">
                        <div class="post-media">
                            <img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/images/news/2.jpg"
                                 class="img-responsive">
                            <div class="post-date">
                                <span class="date-day">22</span>
                                <span class="date-month">May</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="post-title">
                                <h5><a href="article.html"></a></h5>
                                <?php echo get_the_title(); ?>
                                <?php the_post() ?>
                            </div>

                            <div class="post-metadata">
                                    <span class="byline">
                                        <i class="fa fa-user"></i>
                                        <a href="#"><?php echo get_the_author() ?></a>
                                    </span>
                                <span class="cat-links">
                                        <i class="fa fa-folder-open"></i>
                                        <a href="#">
                                            <?php
                                            foreach (get_the_category() as $key => $cat):
                                                ?>
                                                <a href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name; ?></a>/
                                                <?php
                                            endforeach;
                                            ?>
                                        </a>
                                    </span>

                            </div>
                            <div class="post-entry">
                                <p><?php
                                    echo get_the_content();
                                    ?></p>
                            </div>
                        </div>
                    </article>
                    <!-- post close -->
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>




