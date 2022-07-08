<div class="lg:grid grid-cols-2 my-24 font-roboto">

    <div class="">

        <div class="text-center">
                <span class="uppercase border-2 border-black p-2 text-[14px] font-semibold bg-white">
                <?php the_sub_field('label');?>
                </span>
        </div>

        <div>
            <h4 class="py-9 font-semibold text-center md:text-[36px] text-2xl font-londrina uppercase tracking-widest
            leading-snug">
                <?php the_sub_field('title');?>
            </h4>
        </div>

        <div class="mx-auto w-1/2 my-9 rotate-[-6deg] border-2 border-black">
            <img src="<?php the_sub_field('image');?>" alt="">
        </div>

        <div class="m-12 px-9 text-center md:text-[20px] text-lg ">
            <p>
                <?php the_sub_field('caption');?>
            </p>
        </div>

        <div class="text-center font-semibold my-12">
                <span class="uppercase py-4 px-14 px-auto md:text-[16px] text-xs border-black border-2 rounded-full tracking-wider">
                     <a href="<?php the_sub_field('button_link');?>"> <?php the_sub_field('button_name'); ?> </a>
                </span>
        </div>

    </div>

    <div class="lg:mx-16 mx-0 font-roboto">

        <?php
            if( have_rows('services_tab') ):

            // Loop through rows.
            while( have_rows('services_tab') ) : the_row();
        ?>

        <div class="grid grid-flow-row">
            <div class="">
                <div class="bg-black text-white p-9 text-3xl">
                    <h2>
                        <?php the_sub_field('category_title'); ?>
                    </h2>
                </div>

                <div class="accordion">
                    <?php
                    if( have_rows('services_categories') ):
                        while( have_rows('services_categories') ) : the_row();
                            ?>

                            <div class="px-9 py-3 border-x-2 border-b-2 border-black accordion-container">
                                <div class="label">
                                    <h3 class="text-xl py-3 font-bold">
                                        <?php the_sub_field('services'); ?>
                                    </h3>
                                </div>
                               <div class="content">
                                   <div>
                                       <p class="text-xl py-3">
                                           <?php the_sub_field('services_description');?>
                                       </p>
                                   </div>
                                   <div class="uppercase underline font-bold py-3">
                                       <a href="#" class=""><?php the_sub_field('services_button_name');?></a>
                                   </div>
                               </div>
                            </div>

                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>



        <?php

            endwhile;

            endif;
        ?>

    </div>

</div>