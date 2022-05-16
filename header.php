<?php if (!defined('ABSPATH')) {
    exit;
} ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Varela&display=swap');
    </style>
</head>

<body <?php body_class(); ?> >

<header class="flex mx-9">

    <div class="w-[38px] h-[57px]">
        <?php echo get_custom_logo(); ?>
    </div>

    <div class="flex items-center uppercase">
        <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'containers_class' => 'custom-menu-class')
        ); ?>
    </div>

</header>


