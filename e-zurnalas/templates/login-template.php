<?php
/* Template name: Login */

get_header(); ?>

<div class="login-section">
    <div class="second-box">
        <div class="login-container">
            <p class="Sign-in-text"><?php _e('Prisijungti' , 'e-zurnalas'); ?></p>
            <p class="welcome-text">
                <?php _e('Sveikas sugrįžęs! Prašome prisijungti prie savo paskyros.' , 'e-zurnalas'); ?>
            </p>
            <form id="login-form">
                <p class="form-row input-login-wrap">
                    <input id="username" name="username" type="text" autocomplete="username" placeholder="El. Paštas">
                </p>
                <p class="form-row input-login-wrap-pass">
                    <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Slaptažodis">
                </p>
                <p class="form-row last-row buttons-login">
                    <input class="submit-btn" type="submit" name="login" value="<?php _e('Prisijungti', 'e-zurnalas'); ?>">
                    <a class="register-btn" href="#"><?php _e('Registruotis' , 'e-zurnalas'); ?></a>
                </p>
            </form>
        </div>
    </div>

    <div class="first-box">
        <img class="login-logo" src="<?php echo get_template_directory_uri() . "/assets/images/logo-white.svg"; ?>" width="240" height="60" alt="">
        <img class="login-auth" src="<?php echo get_template_directory_uri() . "/assets/images/auth.png"; ?>" alt="">
    </div>
</div>

<?php get_footer();
