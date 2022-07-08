<div class="font-roboto">

    <div class="lg:grid grid-cols-2 pt-24">
        <div class="pr-9 z-50 md:my-24 my-12 pl-9 leading-tight" >
            <span class="uppercase border-2 border-black p-2 text-[14px] font-bold">
                <?php echo get_sub_field('label'); ?>
            </span>
                <h2 class="main-heading md:text-[64px] text-[40px] font-semibold py-12 relative">
                    <?php echo get_sub_field('title'); ?>
                </h2>
                <p class="lg:text-[29px] text-[22px] py-9">
                    <?php echo get_sub_field('text'); ?>
                </p>


        </div>

        <div class="z-0 ml-16 md:ml-[304px] lg:ml-0">
            <img src="<?php echo get_sub_field('main_image'); ?>" alt="" class="rotate-6 border-2 border-black">

        </div>

    </div>

    <div class="mt-[-90px]">
        <div class="flex justify-between items-center lg:mx-[120px]">
            <div class="">
                <img src="<?php  echo get_sub_field('secondary_image');?>" alt="" class="
                        rotate-[-7deg] border-2 border-black w-full">
            </div>
            <div class="flex justify-center items-center">
                <img src="<?php echo get_sub_field('logo'); ?>" alt="" class="lg:w-3/4 w-1/2">
            </div>

        </div>



</div>