<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                    if(is_active_sidebar("sidebar-1")){
                    dynamic_sidebar( "sidebar-1" );
                }
                ?>
            </div>
            <div class="col-md-6">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu_class'      => 'list-inline text-center',
                            'menu_id'         => 'footermenucontainer',
                            'theme_location'       => 'footermenu',
                        )
                    )
                ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer( );?>
</body>
</html>