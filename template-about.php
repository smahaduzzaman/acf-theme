<?php 
   /*
   Template Name: About Page
   */
   get_header();?>
   <?php get_template_part('template-parts/breadcumb'); ?>
   
      <section class="ftco-section ftco-no-pt bg-light">
         <div class="container">
            <div class="row d-flex no-gutters">
               <div class="col-md-6 d-flex">
                  <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(<?php echo $about_img['url'];?>)">
                  </div>
               </div>
               <div class="col-md-6 pl-md-5 py-md-5">
                  <div class="heading-section pl-md-4 pt-md-5">
                     <?php
                        $about_subtitle = get_field('about_subtitle', 'options');
                        $about_sec_title = get_field('about_sec_title', 'options');
                        $about_description = get_field('about_description', 'options');
                     ?>
                     <span class="subheading"><?php echo $about_subtitle;?></span>
                     <h2 class="mb-4"><?php echo $about_sec_title;?></h2>
                     <?php echo $about_description;?>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php get_template_part('template-parts/counter');?>

      <?php get_template_part('template-parts/testimonies');?>

      <?php get_template_part('template-parts/faq');?>

      <?php get_template_part('template-parts/cta');?>

<?php get_footer();?>
