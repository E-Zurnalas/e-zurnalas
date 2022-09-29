<?php
/* Template name: Login */

get_header(); ?>

<div class="login-section">
    <div class="first-box">
    </div>
    <div class="second-box">
        <div class="login-container">
            <img class="login-logo" src="<?php echo get_template_directory() . "assets/images/logo.png"; ?>" width="" height="" alt="">
            <p class="welcome-text">
                <?php _e('Sveikas sugrįžęs! Prašome prisijungti prie savo paskyros.' , 'e-zurnalas'); ?>
            </p>
        </div>
    </div>
</div>

<?php get_footer();
