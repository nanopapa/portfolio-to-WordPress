<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/Top__img/R.png">
    <title><?php bloginfo('Ryohei Portfolio'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--==============================================================
    header
============================================================== -->
    <header>
        <div class="header__inner wrapper">
                <div class="header__logo">    
                    <h1>
                        <a href="<?php echo home_url();?>">Ryohei Takahashi</a>
                    </h1>
                </div>
                <div class="header__menu">
                    <nav>
                        <ul>
                            <li><a href="<?php echo home_url();?> ">Home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/service/')); ?>">Service</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
                            <li><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div class="toggle_btn" id="open">
                <i></i>
                <i></i>
                <i></i>
            </div>
        </div>

    <div class="sp__menu">
        <nav>
            <ul>
                <li><a href="<?php echo home_url();?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/service/')); ?>">Service</a></li>
                <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
            </ul>
        </nav>
    </div>