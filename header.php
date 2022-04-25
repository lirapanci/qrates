<?php if (!defined('ABSPATH')) {
    exit;
} ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?> >

<header class="flex mx-9">

    <div class="w-[38px] h-[57px]">
        <?php echo get_custom_logo(); ?>
    </div>

    <div class="flex items-center uppercase underline">
        <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'containers_class' => 'custom-menu-class')
        ); ?>
    </div>

</header>


