<?php get_header(); ?>
<!-- ==============  BEGGIN ================ -->




<?php
if (is_page('about-us')):
    get_template_part('about');
elseif (is_page('contact-us')):
    get_template_part(slug: 'contact');
elseif (is_page('login')): ?>

    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>authentication us</h4>
                            <h2>Login</h2>
                            <?= do_shortcode('[ultimatemember form_id="17"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php elseif (is_page('members')): ?>

    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>User</h4>
                            <h2>Member</h2>
                            <?= do_shortcode('[ultimatemember form_id="19"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php elseif (is_page('password-reset')):
    ?>
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>authentication</h4>
                            <h2>Password reset</h2>
                            <?= do_shortcode('[ultimatemember_password]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php elseif (is_page('account')): ?>
    <div class="heading-page header-text">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Informations</h4>
                            <h2>Your account</h2>
                            <?= do_shortcode('[ultimatemember_account]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php elseif (is_page('user')): ?>
    <div class="heading-page header-text mx-0">
        <section class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-content">
                            <h4>Informations</h4>
                            <h2>User</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="background: linear-gradient(178.6deg, rgb(20, 36, 50) 11.8%, rgb(124, 143, 161) 83.8%); margin-bottom: -100px; width: 100%;">
            <?= do_shortcode('[ultimatemember form_id="18"]'); ?>
        </section>
    </div>
<?php endif; ?>

<!-- ==============  END ================ -->
<?php get_footer(); ?>