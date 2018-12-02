<?php
/**
 * Template Name: Contact
 *
 */
get_header();
?>

<?php while (have_posts()) :
    the_post();
    ?>

    <!-- content begin -->
    <div id="content" class="no-padding">

        <!-- section begin -->
        <section id="section-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="intro-text text-center">
                            <h2>Contact Us</h2>
                            <p>Send us an email vulpoutate bibendum justo sed, tincidunt quisque <br> dictum eget dolor vel maximus.</p>
                        </div>
                        <form method="post" class="wpcf7-form">
                            <div class="col-one-third">
                                <input type="text" placeholder="Your Name" name="name">
                            </div>
                            <div class="col-one-third margin-one-third">
                                <input type="email" placeholder="Your Email" name="email">
                            </div>
                            <div class="col-one-third">
                                <input type="text" placeholder="Your Phone" name="phone">
                            </div>
                            <div class="col-full"><textarea placeholder="Your Message" name="message"></textarea></div>
                            <div class="clearfix"></div>
                            <div class="text-center">
                                <div class="divider-single"></div>
                                <input type="submit" class="btn btn-primary btn-big" value="Send Email">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- section gmap begin -->
        <section id="section-gmap" class="no-padding">
            <div id="map-canvas" class="map-canvas">
            </div>
        </section>
        <!-- section gmap close -->

    </div>
    <!-- content close -->

    <?php
endwhile; ?>
<?php get_footer(); ?>