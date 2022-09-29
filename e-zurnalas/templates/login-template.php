<?php
/* Template name: Login */

get_header(); ?>

<div class="login-section">
    <div class="first-box">
    </div>
    <div class="second-box">
        <div class="login-container">
            <img class="login-logo" src="<?php echo get_template_directory_uri() . "/assets/images/logo.png"; ?>" width="240" height="60" alt="">
            <p class="welcome-text">
                <?php _e('Sveikas sugrįžęs! Prašome prisijungti prie savo paskyros.' , 'e-zurnalas'); ?>
            </p>
            <form method="post" id="login-form">
                <p class="form-row input-login-wrap">
                    <input id="username" name="username" type="text" autocomplete="username" placeholder="El. Paštas">
                </p>
                <p class="form-row">
                    <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Slaptažodis">
                </p>
                <p class="form-row last-row">
                    <input class="submit-btn" type="submit" name="login" value="<?php _e('Prisijungti', 'e-zurnalas'); ?>">
                    <a class="register-btn" href="#"><?php _e('Registruotis' , 'e-zurnalas'); ?></a>
                </p>
            </form>
        </div>
    </div>
</div>

<?php get_footer();
