<?php get_header(); ?>


<?php get_template_part('slider') ?>

</div>
<!-- end lh-header -->
<div class="block-intro">
    <div class="container">
        <p class="lh2-title1">VỀ CHÚNG TÔI</p>
        <p class="lh2-caption">là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp dịch vụ về
            vận
            tải du lịch, tư vấn và lập kế hoạch đi du lịch tới các điểm đến nổi tiếng. Chúng tôi có một mạng
            lưới liên kết lữ hành rộng và cung cấp các dịch vụ hỗ trợ lập kế hoạch...</p>
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
            <!-- <div class="col-lg-4 item-intro">
                        <div class="img-height">
                            <a href=""><img src="<?php bloginfo('template_directory') ?>/img/icon3.png" alt=""></a>
                        </div>
                        <div class="item-info">
                            <a href="">THỦ TỤC Nhanh gọn</a>
                            <p>Với các mẫu xe mới nhất tại thị trường xe hơi tại Việt Nam. Giá cả cạnh tranh, ưu đãi
                                thường xuyên cho khách hàng và lịch thuê dài ngày.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 item-intro">
                        <div class="img-height">
                            <a href=""><img src="<?php bloginfo('template_directory') ?>/img/icon4.png" alt=""></a>
                        </div>
                        <div class="item-info">
                            <a href="">ĐẶT XE BẤT KỲ LÚC NÀO</a>
                            <p>Với các mẫu xe mới nhất tại thị trường xe hơi tại Việt Nam. Giá cả cạnh tranh, ưu đãi
                                thường xuyên cho khách hàng và lịch thuê dài ngày.</p>
                        </div>
                    </div> -->
        </div>
    </div>
</div>
<div class="block-contact">
    <div class="container">
        <p class="lh2-title1">DỊCH VỤ CHO Bán xe DU LỊCH</p>
        <p class="caption">Cung cấp dịch vụ cho Bán xe tự lái, du lịch từ 4 đến 45 chỗ</p>
        <p class="bottom">Thủ tục nhanh gọn - Nhận xe nhanh chóng</p>
        <button class="lh3-button" type=""><span>Xem ngay</span></button>
    </div>
</div>
<div class="block-product">
    <div class="container">
        <p class="lh2-title"> <span>Bán xe TOYOTA</span></p>
        <div class="row">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=sanpham&danhmuc=toyota'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

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
            <?php endwhile; wp_reset_postdata(); ?>

            <!--                    
                    <div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="bg">
                            <div class="img-height">
                                <a class="img" href="">
                                    <img class="img-fluid lh2-img"
                                        src="<?php bloginfo('template_directory') ?>/img/a2.jpg" alt="">
                                </a>
                            </div>
                            <div class="info-product">
                                <a class="name" href="">Bán xe 16 chỗ tại Đà Nẵng</a>
                                <p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
                                <p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
                                <p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
                            </div>
                        </div>
                    </div>
                     -->

        </div>
    </div>
</div>
<!-- end block-product -->
<div class="block-product">
    <div class="container">
        <p class="lh2-title"> <span>Bán xe Honda</span></p>
        <div class="row">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=sanpham&danhmuc=honda'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

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
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- end block-product -->
<div class="block-product">
    <div class="container">
        <p class="lh2-title">
            <span>Bán xe BMW</span>
        </p>
        <div class="row">
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=sanpham&danhmuc=bwn'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

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
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- end block-product -->
<div class="block-partner">
    <div class="container">
        <div class="responsive">
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/1.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/2.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/3.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/4.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/5.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/6.png" alt="">
                </div>
            </div>
            <div class="col-2 item-partner">
                <div class="bg">
                    <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/1.png" alt="">
                </div>
            </div>
        </div>
        <button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
        <button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
    </div>
</div>
<?php get_footer(); ?>