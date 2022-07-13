<div class="swiper mySwiper lg:border-black lg:border-2">
    <div class="swiper-wrapper">
        <?php
        $slider_label = get_sub_field('slider_label');
        if( have_rows('slide') ):
            while( have_rows('slide') ) : the_row();
        ?>
            <div style="background-color: <?php the_sub_field('background_color');?>" class="swiper-slide flex flex-wrap lg:flex-nowrap">
                <div class="font-roboto text-left pb-36 lg:py-4 px-4 lg:px-12 order-2 lg:order-1 flex-[1_90%] text-sm lg:text-xl">
                    <div class="text-black border-black py-12">
                        <span class="bg-white p-2 border-black border-2"><?php echo $slider_label; ?></span>
                    </div>
                   <div class="font-roboto">
                       <p class="text-xl lg:text-3xl"><?php the_sub_field('quote'); ?></p>
                       <p class="text-xl underline lg:my-9 my-4"><?php the_sub_field('artist_name');?></p>
                   </div>
                </div>
                <div  class="w-full  order-1 lg:order-2 p-4 lg:p-0">
                    <img src="<?php the_sub_field('artist_image');?>" alt="" class="h-full border-2 border-black lg:border-l-2 lg:border-r-none lg:border-y-0">
                </div>
            </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
    <div class="swiper-pagination"></div>
</div>