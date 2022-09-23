<?php get_header() ?>
<div class="block-intro">
    <div class="module-product">
        <div class="container">
            <div class="bread-crumb">
                <a href="<?php bloginfo('url') ?>">Trang chủ</a>
                <span class="dot">/</span>
                <a href="<?php bloginfo('url') ?>/dichvu">Dịch vụ</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=dichvu'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="col-lg-4 item-intro">
                    <div class="img-height">
                        <a href="<?php the_permalink()?>"><img
                                src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt=""></a>
                    </div>
                    <div class="item-info">
                        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="lh2-pagging col-12">
            <?php if(paginate_links()!='') {?>
            <div class="quatrang">
                <?php
                        global $wp_query;
                        $big = 999999999;
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'prev_text'    => __('«'),
                            'next_text'    => __('»'),
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                            ) );
                        ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer() ?>