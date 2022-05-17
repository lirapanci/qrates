<?php

if (have_rows('column_table')):

    echo '<div class="lg:grid grid-cols-2 font-roboto lg:flex">';

    // loop through the rows of data
    while (have_rows('column_table')) : the_row();
    $color = get_sub_field('color');
    ?>
        <div style="background-color: <?php echo $color;?>" class="border border-black flex flex-col">
            <?php
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $image = get_sub_field('image');
            $button_name = get_sub_field('button_name');
            ?>

            <div class="pt-20 text-center">
                <span class="uppercase border-2 border-black p-2 text-[14px] font-semibold bg-white">
                <?php the_sub_field('label');?>
                </span>
            </div>

            <h4 class="py-9 font-semibold text-center md:text-[36px] text-2xl">
                <?php echo $title;?>
            </h4>

            <p class="text-center md:px-32 px-9 md:text-[20px] text-lg">
                <?php echo $paragraph?>
            </p>

            <div class="lg:px-32 px-9 lg:my-9 my-3 flex flex-1 items-center">
                <img src="<?php echo $image;?>" alt="">
            </div>

            <div class="lg:py-20 py-9 text-center">
                <span class="uppercase text-white bg-black py-4 px-14 md:text-[16px] text-xs rounded-full tracking-wider">
                     <a href="<?php the_sub_field('button_link');?>"> <?php the_sub_field('button_name'); ?> </a>
                </span>
            </div>

        </div>
    <?php

    endwhile;

    echo '</div>';

endif;
?>