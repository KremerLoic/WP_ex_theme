
<?php
/**
 * Header
 *
 * @package WordPress
 * @subpackage DecobootsTheme
 * @since Decoboots Theme 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>



<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li><?php
                $args = array(
                    'menu' => 'Menu 1',
                    'container_class' => false,
                    'items_wrap' => '%3$s',
                    'container' => false,

                );
                wp_nav_menu($args);
                ?></li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<div class="jumbotron">
    <div class="container">
        <h1 class="display-3"><?php wp_title() ?></h1>
        <p><?php bloginfo("description") ?></p>

    </div>
</div>


<div class="top-bar">
    <div class="container">
        <div class="col-md-6 col-sm-12">

        </div>
    </div>
</div>

<!--<nav class="navbar navbar-default" role="navigation">-->
<!--    <!-- Brand and toggle get grouped for better mobile display -->
<!--    <div class="navbar-header">-->
<!--        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">-->
<!--            <span class="sr-only">Toggle navigation</span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--            <span class="icon-bar"></span>-->
<!--        </button>-->
<!--        <a class="navbar-brand" href="#">--><?php //_e('La traduction de Philippe Bloom', 'wp-theme-base-translate'); ?><!--</a>-->
<!--    </div>-->
<!---->
<!--    <!-- Collect the nav links, forms, and other content for toggling -->
<!--    <div class="collapse navbar-collapse navbar-ex1-collapse">-->
<!--        <ul class="nav navbar-nav">-->
<!--            --><?php
//            $args = array(
//                'menu' => 'Menu 1',
//                'container_class' => false,
//                'items_wrap' => '%3$s',
//                'container' => false
//            );
//            wp_nav_menu($args);
//            ?>
<!--            <li>-->
<!--                <a href="--><?php //echo get_post_type_archive_link( 'formation' ); ?><!--">Formation Archive</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div><!-- /.navbar-collapse -->
<!--</nav>-->
