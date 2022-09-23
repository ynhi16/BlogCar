<?php get_header(); ?>

<!-- end block-slider -->
</div>
<!-- end lh-header -->
<div class="module-news">
    <div class="container">
        <div class="bread-crumb">
            <a href="<?php bloginfo('url') ?>">Trang chủ</a>
            <span class="dot">/</span>
            <a href="<?php bloginfo('url') ?>/category/tin-tuc">Tin tức</a>
            <span class="name"></span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="item-news">
                    <div class="row">
                        <div class="col-4 img">
                            <a href="<?php the_permalink() ?>">
                                <img class="img-fluid lh2-img"
                                    src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-8 text">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            <p><?php the_excerpt(); ?></p>
                            <div class="lh2-date"><i
                                    class="fas fa-calendar-alt"></i><?php echo get_the_date('d/m/y'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; else : ?>
                <p>Rất tiếc! Không có tin tức</p>
                <?php endif; ?>


                <!-- <div class="item-news">
                    <div class="row">
                        <div class="col-4 img">
                            <a href="">
                                <img class="img-fluid lh2-img" src="img/a2.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-8 text">
                            <a href="">This icon replaces Font Awesome 4's fa-file-text</a>
                            <p>Giới chức Thái Lan thông báo một người trong đội thợ lặn đã chết vào ngày 6/7 vì thiếu
                                oxy trong quá trình giải cứu đội bóng đang mắc kẹt trong hang động.</p>
                            <div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
                        </div>
                    </div>
                </div> -->
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

            <?php get_sidebar() ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>