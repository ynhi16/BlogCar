<?php get_header() ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="module-news-detail">
    <div class="container">
        <div class="bread-crumb">
            <a href="<?php bloginfo('url') ?>">Trang chủ</a>
            <span class="dot">/</span>
            <a href="<?php bloginfo('url') ?>/dichvu">Dịch vụ</a>
            <span class="name">/ <?php the_title() ?></span>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-9">
                <div class="border">

                    <p class="lh2-title1"><?php the_title() ?></p>
                    <div class="lh2-date"><i class="fas fa-calendar-alt"></i> Ngày đăng:
                        <?php echo get_the_date('d/m/y') ?></div>
                    <b> <?php the_content() ?></b>

                    <!-- <div class="mau2-share-7ncn">
                        <span> Chia sẻ: </span>
                        <span class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width=""
                            data-layout="standard" data-action="like" data-size="small" data-share="true"></span>

                        <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="" target="_blank"><i class="fab fa-skype"></i></a>
                    </div> -->


                </div>

            </div>
            <?php get_sidebar() ?>
        </div>

    </div>
</div>
<?php endwhile; else : ?>
<p>Rất tiếc! Không có dịch vụ</p>
<?php endif; ?>

<?php get_footer() ?>