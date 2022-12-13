<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head( ); ?>
</head>
<body <?php body_class( );?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline">
                  <?php bloginfo("description")?>
                </h3>
                <h1 class="align-self-center display-1 text-center heading">
                  <a href="<?php echo get_home_url( );?>"><?php bloginfo("name")?></a>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="posts">
    <?php
    while(have_posts( )):
        the_post( );
    ?>

    <div class="post" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="post-title"><a href="<?php the_permalink( ) ?>"><?php the_title(); ?></a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(); ?></strong><br/>
                        <?php echo get_the_date(); ?>
                    </p>
                        <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>","</li><li>", "</li></ul>")?>
                </div>
                <div class="col-md-8">
                    <p>
                    <?php
                        if(has_post_thumbnail( )){
                            the_post_thumbnail("large", array("class"=>"img-fluid"));
                        }
                    ?>
                    </p>
                    <p>
                        <?php 
                            the_excerpt();
                        ?>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <?php
    endwhile;
    ?>

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <?php echo the_posts_pagination(  ) ?>
            </div>
        </div>
    </div>
    
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; LWHH - All Rights Reserved
            </div>
        </div>
    </div>
</div>
<?php wp_footer( );?>
</body>
</html>