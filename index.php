   <?php get_header(); ?>

   <?php get_template_part('template-parts/breadcumb'); ?>

   <section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post();
            ?>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="<?php the_permalink(); ?>" class="block-20 rounded" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                        </a>
                        <div class="text p-4">
                            <div class="meta mb-2">
                                <div><a href="#"><?php the_date(); ?></a></div>
                                <div><a href="#"><?php the_author(); ?></a></div>
                                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> <?php echo get_comments_number(); ?></a></div>
                            </div>
                            <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
   <?php get_template_part('template-parts/cta'); ?>

   <!-- <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
      <div class="container py-5">
         <div class="row">
            <div class="col-md-7 d-flex align-items-center">
               <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for Your Free 1st Accounting Consultation</h2>
            </div>
            <div class="col-md-5 d-flex align-items-center">
               <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                     <input type="text" class="form-control" placeholder="Enter email address">
                     <input type="submit" value="Subscribe" class="submit px-3">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section> -->
   <?php get_footer(); ?>