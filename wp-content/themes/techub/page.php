<?php get_header() ?>



      <!-- postbox area start -->
      <section class="tp-page-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="tp-page-wrapper">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <?php the_content(); ?>
            
                        <?php endwhile; else : ?> 
                                <p><?php _e( 'No Page To Display.' ); ?></p>
                        <?php endif; ?> 


                        </div>
                    </div>
                 </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->




<?php get_footer() ?>


