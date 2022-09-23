<?php get_header() ?>
<div class="module-product">
    <div class="container">
        <div class="bread-crumb">
            <a href="<?php bloginfo('url') ?>">Trang chủ</a>
            <span class="dot">/</span>
            <a href="<?php bloginfo('url') ?>/sanpham">Sản phẩm</a>
            <span class="dot">/</span>
            <span class="dot"><?php single_cat_title() ?></span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="bg">
                    <div class="img-height">
                        <a class="img" href="<?php the_permalink(); ?>">
                            <img class="img-fluid lh2-img"
                                src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="">
                        </a>
                    </div>
                    <div class="info-product">
                        <a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia'); ?></p>
                        <p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('số_chỗ'); ?>
                        </p>
                        <p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hiệu'); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; else : ?>
            <p>Rất tiếc! Không có sản phẩm</p>
            <?php endif; ?>

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