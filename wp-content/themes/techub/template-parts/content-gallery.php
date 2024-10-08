<?php

$post_format_url = function_exists('get_field')?  get_field('post_format_url') : '';

?>

<!-- ===================Single Post===================== -->
    
<?php if( is_single()  ) : ?> 

<article id="post-<?php the_ID()?>" <?php post_class('tp-postbox-item mb-50') ?>>
    
<?php if(has_post_thumbnail()) : ?>
            <div class="tp-postbox-thumb p-relative">
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail(); ?>
                    </a>
                <div class="tp-postbox-date-text">
                    <span><?php the_time( 'd' ); ?> <br> <?php the_time( 'M' ); ?> </span>
                </div>
                <?php if(!empty($post_format_url)) : ?>
                <div class="tp-postbox-thumb-video">
                    <a class="popup-video" href= "<?php echo esc_url($post_format_url); ?>"><i class="fa-regular fa-play"></i></a>
                </div>
                <?php endif ?>
            </div>
            <?php endif ?>


    <div class="tp-postbox-content">
    <?php echo get_template_part('template-parts/blog/meta');?>
        <h3 class="tp-postbox-title"> <?php the_title(); ?></h3>
        <div class="tp-postbox-details-text">

        <?php the_content();?>
            
    </div>
    </div>
</article>

<div class="tp-postbox-details-share-wrapper">
<div class="row">
<div class="col-xl-5 col-lg-6 col-md-6">
<?php if(has_tag()):?>
    <div class="tp-postbox-details-tag">
        <span> <?php echo esc_html__('Tag:','techub')?></span>
        <?php techub_tags();?>
    </div>
    <?php endif;?>
</div>
<div class="col-xl-7 col-lg-6 col-md-6">
    <div class="tp-postbox-details-share text-lg-end">
    <span> <?php echo esc_html__('Share:','techub')?></span>
    <a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" target="_blank">
        <i class="fa-brands fa-linkedin-in"></i>
    </a>
    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
        <i class="fab fa-facebook-f"></i>
    </a>
    </div>
</div>
</div>
</div>



<?php else :?>



<!-- ===================Post===================== -->


   
   <article id="post-<?php the_ID()?>" <?php post_class('tp-postbox-item mb-50') ?>>

        <?php if(has_post_thumbnail()) : ?>
        <div class="swiper tp-post-slider fix">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tp-postbox-thumb p-relative">                                          
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-postbox-thumb p-relative">                                          
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tp-postbox-thumb p-relative">                                          
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
            
            <div class="tp-postbox-content">
            <?php echo get_template_part('template-parts/blog/meta');?>

                <h3 class="tp-postbox-title">
                    
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h3>
                <div class="tp-postbox-text">
                    <?php the_excerpt();?>
                </div>
                <?php echo get_template_part('template-parts/blog/button');?>
            </div>
        </article>

        <?php endif ?>
