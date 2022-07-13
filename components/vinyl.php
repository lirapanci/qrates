<div class="bg-black">
    <div class="text-center py-16">
        <span class="uppercase border-2 border-white p-2 text-[14px] font-semibold text-white">
            <?php the_sub_field('label');?>
        </span>
        <div class="py-9 font-roboto text-white">
            <h3 class="text-3xl lg:text-5xl leading-normal">
                <?php the_sub_field('title');?>
            </h3>
            <p class="text-lg lg:text-2xl px-12 lg:px-72 py-16">
                <?php the_sub_field('subtitle');?>
            </p>
        </div>
        <div class="flex lg:justify-center vinyls mx-auto px-7 w-1/2 h-auto lg:w-auto">
            <img src="<?php the_sub_field('vinyl_cover');?>" alt="" class="z-10 object-contain">
            <img src="<?php the_sub_field('vinyl_plate');?>" alt="" class="plate ml-[-90px] lg:ml-[-250px] ease-in duration-300 object-contain w-3/4 h-auto lg:w-auto">
        </div>
        <div  class="py-24 font-semibold">
            <span style="background-color: <?php the_sub_field('button_color');?>" class="uppercase py-4 lg:py-7 px-36 md:text-[16px] text-xs border-black border-2 rounded-full tracking-wider">
                <a href="<?php the_sub_field('button_link');?>"> <?php the_sub_field('button_name'); ?> </a>
            </span>
        </div>
    </div>
</div>