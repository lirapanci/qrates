<div class="py-4 font-roboto">

    <div class="lg:grid grid-cols-3 pt-24">
        <div class="pr-9 z-50 lg:my-24 my-12 pl-9 leading-tight" >
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

        <div class="z-0 grid col-span-2 lg:ml-16 md:ml-0 ml-16">
            <img src="<?php echo get_sub_field('main_image'); ?>" alt="" class="rotate-6 border-2 border-black">

        </div>

    </div>

    <div class="">
        <div class="grid grid-cols-3 pr-9 lg:ml-36">
            <img src="<?php  echo get_sub_field('secondary_image');?>" alt="" class="grid col-span-2
            rotate-[-7deg] border-2 border-black lg:w-3/4 w-full">
            <img src="<?php echo get_sub_field('logo'); ?>" alt="" class="m-auto w-3/4">
        </div>
    </div>

</div>