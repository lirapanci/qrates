<?php if (!defined('ABSPATH')) {
    exit;
}
get_header();
if (have_rows('content')):
    while (have_rows('content')) : the_row();
        include(get_template_directory() . '/components/' . get_row_layout() . '.php');
    endwhile;
else :
    echo 'NO CONTENT';
endif;
get_footer();