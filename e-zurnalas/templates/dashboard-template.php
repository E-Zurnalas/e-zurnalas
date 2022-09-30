<?php
/* Template name: Dashboard */

get_header(); ?>

<div id="admin-page-full-wrap">
    <div id="admin-menu-wrap">
         <div id="admin-page-back"></div>
            <div id="admin-page-top-bar" class=""></div>
            <div id="admin-page-menu">
                <div class="main-logo">
                    <img class="login-logo" src="<?php echo get_template_directory_uri() . "/assets/images/logo.svg"; ?>" width="167" height="41" alt="">
                </div>
                <?php
                    wp_nav_menu(
                    array(
                    'theme_location' => 'admin_page_menu',
                    'menu_id'        => 'admin_panel_menu',
                    )
                    );
                ?>
                <button class="new-project-button"><?php _e('Naujas Projektas' , 'e-zurnalas'); ?></button>
        </div>
</div>




</div>


<?php get_footer();
