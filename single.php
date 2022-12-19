<?php get_header();?>
<body <?php body_class( );?>>
<?php get_template_part("hero"); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="posts">
                <?php
                while(have_posts( )):
                    the_post( );
                ?>

                <div class="post" <?php post_class(); ?>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <strong><?php the_author(); ?></strong><br/>
                                    <?php echo get_the_date(); ?>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p>
                                <?php
                                    if(has_post_thumbnail( )){
                                        the_post_thumbnail("large", array("class"=>"img-fluid"));
                                    }
                                ?>
                                </p>
                                <p>
                                    <?php 
                                    the_content( );

                                    next_post_link(  );
                                    echo "<br>";
                                    previous_post_link();
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <?php /* if(comments_open( )){ ?>
                            <div class="col-lg-10">
                                <?php comments_template( ); ?>
                            </div>
                        <?php } */?> 
                        </div>
                    </div>
                </div>

                <?php
                endwhile;
                ?>
                
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>


<?php get_footer();?>