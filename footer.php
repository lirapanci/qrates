<?php if (!defined('ABSPATH')) {
    exit;
} ?>
<footer class="bg-black">

   <div class="text-white grid lg:grid-cols-4 grid-cols-2 font-roboto lg:px-24 px-12 tracking-wider">
       <div class="sidebar">
           <?php dynamic_sidebar( 'footer-1' ); ?>
       </div>
       <div class="sidebar">
           <?php dynamic_sidebar( 'footer-2' ); ?>
       </div>
       <div class="sidebar">
           <?php dynamic_sidebar( 'footer-3' ); ?>
       </div>
       <div class="sidebar">
           <?php dynamic_sidebar( 'footer-4' ); ?>
       </div>
   </div>

<div class="bg-black">
    <div class="py-48 px-12 lg:grid grid-cols-2">
        <div class="flex justify-center py-12 lg:py-0">
            <img src="<?php the_field('footer_logo', 'options'); ?>" alt="" class="">
        </div>
        <div class="lg:grid grid-rows-2 place-items-end text-center">
            <div class="px-12 lg:py-9 py-12">
                <?php
                if( have_rows('socials', 'options') ):

                    while( have_rows('socials', 'options') ) : the_row(); ?>
                        <a href="<?php the_sub_field('social_link');?>" class="mx-2 my-auto bg-white rounded-full p-4" >
                            <?php the_sub_field('social_icon');?></a>
                    <?php endwhile;

                endif;
                ?>
            </div>
           <div>
               <div class="lg:inline lg:float-left">
                   <div class="font-roboto text-white text-sm flex lg:justify-end justify-between">
                       <?php
                       if( have_rows('legal_links', 'options') ):

                           while( have_rows('legal_links', 'options') ) : the_row(); ?>
                               <a href="<?php the_sub_field('link');?>" class="lg:mx-5" >
                                   <?php the_sub_field('title');?></a>
                           <?php endwhile;

                       endif;
                       ?>
                   </div>
               </div>

               <div class="text-white text-sm lg:inline lg:float-left">
                   <p class="mx-5 my-4 lg:my-0 block">© TDMS Inc.</p>
               </div>
           </div>
           </div>

    </div>

</div>

</footer>
<?php wp_footer();?>
</body>
