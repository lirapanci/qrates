<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php wp_head() ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Londrina+Shadow&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Varela&display=swap');
    </style>

</head>

<body <?php body_class(); ?> >




<header class=" py-5 lg:flex items-center font-eina-light text-[16px] w-full relative">
    <div class="flex items-center justify-between px-9 ">
        <div class="w-[50px]">
            <?php echo get_custom_logo(); ?>
        </div>

        <div class="burger-nav lg:hidden">
            <button class="">
                <svg class="block h-6 w-6 fill-current menu-btn" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden x-btn" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>

        </div>
    </div>
    <div class="lg:px-24 lg:pt-0 lg:bg-none w-full lg:w-auto text-left my-5 lg:my-0 absolute lg:relative z-10 bg-white ">
        <?php wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'containers_class' => 'custom-menu-class')
        ); ?>
    </div>

</header>
