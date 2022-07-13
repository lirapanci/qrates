<div style="color: <?php echo get_sub_field('text_color');?>" class="font-roboto">
    <div style="background-color: <?php echo get_sub_field('background_color');?>" class="border-b-2 border-t-2 border-black">
        <div class="py-20 lg:text-[20px] text-lg px-9 text-center">
            <span class="block mr-9"><?php echo get_sub_field('caption');?> </span>
                <a href="<?php the_sub_field('link');?>" class=""> <?php the_sub_field('link_name');?>  </a>
        </div>
    </div>
</div>