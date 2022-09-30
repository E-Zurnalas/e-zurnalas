<?php
/* Template name: Dashboard */

get_header(); ?>

<div id="admin-page-full-wrap">
    <div id="admin-menu-wrap">
        <div id="admin-page-back"></div>
        <div id="admin-page-top-bar" class=""></div>
        <div id="admin-page-menu">

        <?php
        wp_nav_menu(
            array(
            'theme_location' => 'admin_page_menu',
            'menu_id'        => 'admin_panel_menu',
            )
        );
        ?>
        </div>
    </div>




</div>


<?php get_footer();
