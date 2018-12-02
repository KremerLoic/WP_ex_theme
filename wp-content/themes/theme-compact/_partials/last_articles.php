<div class="row">
    <div class="col-md-12">
        <div class="latest-projects clearfix">
            <div class="latest-projects-intro">
                <h2 class="box-title">Derniers articles</h2>
                <div class="tiny-border-light"></div>
                <p>Pellentesque gravida diam orci, vitae venenatis est eleifend sed. Proin non pretium
                    turpis</p>
            </div>
            <div class="latest-projects-wrapper">
                <div id="latest-projects-items" class="latest-projects-items">


                    <?php $args = array(
                        'posts_per_page'   => 6,
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => '',
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '',
                        'meta_value'       => '',
                        'post_type'        => 'post',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'author'	   => '',
                        'author_name'	   => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true,
                        'fields'           => '',
                    );
                    $post_array = get_posts( $args );


                    foreach ($post_array as $key => $post):
                        ?>

                        <div class="item">
                            <img src="<?php the_post_thumbnail_url( 'medium') ?>" alt=""
                                 class="img-responsive">
                            <div class="project-details">
                                <p class="folio-title"><a href="#"<"<?php echo $post->guid ?>"><?php echo $post->post_title; ?> </a></p>
                                <p class="folio-cate"><i class="fa fa-tag"></i>

                                    <?php
                                    foreach (get_the_category() as $key => $cat):
                                        ?>
                                        <a href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name; ?>,</a>
                                        <?php
                                    endforeach;
                                    ?>

                                </p>
                                <div class="folio-buttons">
                                    <a href="<?php the_post_thumbnail_url( 'full') ?>"
                                       title="<?php echo $post->post_title; ?>" class="folio"><i
                                            class="fa fa-search"></i></a>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>

                        <?php
                    endforeach;
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>