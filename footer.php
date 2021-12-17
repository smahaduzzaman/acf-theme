<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-9 py-5">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <?php
                        $about_title = get_field('about_title', 'options');
                        $about_des = get_field('about_des', 'options');

                        ?>
                        <h2 class="footer-heading"><?php echo $about_title; ?></h2>
                        <p><?php echo $about_des; ?></p>
                        <ul class="ftco-footer-social p-0">
                            <?php
                            $about_socials = get_field('about_social', 'options');
                            foreach ($about_socials as $social) {
                            ?>
                                <li class="ftco-animate"><a href="<?php echo $social['about_social_url']; ?>" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa <?php echo $social['about_social_icon']; ?>"></span></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <?php 
                                        if (is_active_sidebar('footer-1')) { 
                                            dynamic_sidebar('footer-1');
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <?php 
                                        if (is_active_sidebar('footer-2')) { 
                                            dynamic_sidebar('footer-2');
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <?php 
                                        if (is_active_sidebar('footer-3')) { 
                                            dynamic_sidebar('footer-3');
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-md-5">
                    <div class="col-md-12">
                        <p class="copyright">
                            <?php the_field('copyright', 'options'); ?>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <!-- Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a> -->
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                <?php $form_heading = get_field('form_heading', 'options');?>
                <h2 class="footer-heading"><?php echo $form_heading;?></h2>
                <div class="form-consultation">
                    <?php echo do_shortcode('[contact-form-7 id="155" title="Footer Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div>
<?php wp_footer(); ?>
</body>

</html>