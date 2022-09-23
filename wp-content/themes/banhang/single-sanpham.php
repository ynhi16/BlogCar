<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="module-product-detail">
    <div class="container">
        <div class="bread-crumb">
            <a href="<?php bloginfo('url') ?>">Trang chủ</a>
            <span class="dot">/</span>
            <a href="<?php bloginfo('url') ?>/sanpham">Sản phẩm</a>
            <span class="name">
                / <?php the_title() ?>
            </span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="block-product-slider">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6  left">
                            <?php $gallery = get_field('hinh_ảnh') ?>
                            <ul id="imageGallery">
                                <?php foreach ($gallery as $key => $value) { ?>

                                <li data-thumb="<?php echo $value['sizes']['thumbnail'] ?>  "
                                    data-src="<?php echo $value['url'] ?>">
                                    <div class="img-height">
                                        <img class="img-fluid lh2-img" src="<?php echo $value['url'] ?>" />
                                        <div class="overlay">
                                            <a href="" class="zoom"><i class="fa fa-search-plus"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-md-6  col-sm-6 col-xs-6 right">
                            <div class="border">
                                <b class="name"><?php the_title() ?></b>
                                <p><b>Giá:</b> <?php the_field('gia'); ?></p>
                                <p><b>Số chỗ: </b><?php the_field('số_chỗ'); ?></p>
                                <p><b>Thương hiệu:</b> <?php the_field('thuong_hiệu'); ?></p>
                                <p><b>Màu sắc:</b> <?php the_field('mau_sac'); ?></p>
                                <p><b>Đời xe:</b> <?php the_field('dời_xe'); ?></p>
                                <button class="lh2-button lh-show-bk">Thuê ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end block-slider -->
                <div class="block-info-product-detail">
                    <p class="title-other"><span>Thông tin chi tiết</span></p>
                    <div class="box-content">
                        <?php the_content() ?>
                    </div>
                </div>

                <!-- popup -->
                <div class="popup-overlay">

                </div>
                <div class="my-popup">
                    <div class="popup-content">
                        <button class="lh-close-2 exit"></button>
                        <p class="title">Đặt xe</p>
                        <!-- <form action=""> -->
                        <div class="info-car">
                            <p class="box-title">Thông tin xe</p>
                            <div class="row">
                                <div class="col-4">
                                    <img class="img-fluid"
                                        src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="">
                                </div>
                                <div class="col-8">
                                    <p> <b class="name"><?php the_title() ?></b></p>
                                    <p class="price"> <b>Giá:</b> <?php the_field('gia') ?></p>
                                    <p><b>Số chỗ: </b><?php the_field('số_chỗ'); ?></p>
                                    <p><b>Thương hiệu:</b> <?php the_field('thuong_hiệu'); ?></p>
                                </div>
                            </div>
                        </div>
                        <p class="box-title">Thông tin khách hàng</p>
                        <?php echo do_shortcode('[contact-form-7 id="146" title="form thuê"]') ?>
                        <!-- <input type="" name="" placeholder="Họ và tên *">
                            <div class="row">
                                <div class="col-6">
                                    <input type="" name="" placeholder="Email *">
                                </div>
                                <div class="col-6">
                                    <input type="" name="" placeholder="Điện thoại *">
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="lh2-button" type="">Đặt xe ngay</button>
                            </div> -->

                        <!-- </form> -->
                    </div>
                </div>
                <!-- end popup -->
                <?php endwhile; else : ?>
                <p>Rất tiếc! Không có sản phẩm</p>
                <?php endif; ?>
                <!-- block-inffo -->
                <div class="block-product-other">
                    <p class="title-other"><span>Xe liên quan</span></p>
                    <div class="slider-product">
                        <?php
                            $terms = get_the_terms(get_the_ID(), 'danhmuc');
                            // echo '<pre>';
                            // print_r($terms);
                            // echo '</pre>';
                            $current_term = $terms[0]->slug;
                            if($current_term) {
                                
                            
                            $args = array(
                            'danhmuc' => $current_term,
                            'post__not_in' => array(get_the_ID()),
                            'showposts'=>6, // Số bài viết bạn muốn hiển thị.
                            'caller_get_posts'=>1,
                            'post-type' => 'sanpham'
                            );
                            $my_query = new wp_query($args);
                            if( $my_query->have_posts() ) 
                            {
                                while ($my_query->have_posts())
                                {
                                    $my_query->the_post();
                                    ?>
                        <div class="item-product">
                            <div class="bg">
                                <div class="img-height">
                                    <a class="img" href="<?php the_permalink(); ?>">
                                        <img class="img-fluid lh2-img"
                                            src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>"
                                            alt="">
                                    </a>
                                </div>
                                <div class="info-product">
                                    <a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia'); ?>
                                    </p>
                                    <p><b><i class="fab fa-accessible-icon"></i>Số chỗ:
                                        </b><?php the_field('số_chỗ'); ?>
                                    </p>
                                    <p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hiệu'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                                }
                            }
                        ?>
                        <!-- <div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="bg">
                                <div class="img-height">
                                    <a class="img" href="">
                                        <img class="img-fluid lh2-img" src="<?php bloginfo('template_directory') ?>/img/a4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-product">
                                    <a class="name" href="">Thuê xe 16 chỗ tại Đà Nẵng</a>
                                    <p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
                                    <p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
                                    <p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
                    <button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
                </div>
                <!-- end block-product-other -->
            </div>
            <?php get_sidebar() ?>
        </div>

    </div>
</div>


<?php get_footer() ?>