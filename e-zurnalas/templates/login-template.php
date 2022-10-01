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
                    <p class="dont-have-acc"> <?php _e('Dar neturite paskyros?' , 'e-zurnalas'); ?>
                    <a class="register-btn" href="#"><?php _e('Registruotis' , 'e-zurnalas'); ?></a>
                    </p>
                </p>
            </form>
        </div>
    </div>

    <div class="first-box">
        <img class="login-logo" src="<?php echo get_template_directory_uri() . "/assets/images/logo-white.svg"; ?>" width="240" height="60" alt="">
        <img class="login-auth" src="<?php echo get_template_directory_uri() . "/assets/images/auth.png"; ?>" alt="">
        <p class="back-text-main">
            <?php _e('Fast, Efficient and Productive' , 'e-zurnalas'); ?>
        </p>
        <p class="back-text-second">
            <?php _e('In this kind of post, the bloggerintroduces a person they’ve interviewed
and provides some background information about the intervieweeand their
work following this is a transcript of the interview.' , 'e-zurnalas'); ?>
        </p>
    </div>
</div>

<?php get_footer();
