<?php get_header() ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="module-news-detail">
    <div class="container">
        <div class="bread-crumb">
            <a href="<?php bloginfo('url') ?>">Trang chủ</a>
            <span class="dot">/</span>
            <a href="<?php bloginfo('url') ?>/category/tin-tuc">Tin tức</a>
            <span class="name"> / <?php the_title() ?></span>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-9">
                <div class="border">
                    <?php setpostview(get_the_id());?>
                    <p class="lh2-title1"><?php the_title() ?></p>
                    <div class="lh2-date">
                        <span><i class="fas fa-calendar-alt"></i> Ngày đăng: <?php echo get_the_date('d/m/y') ?></span>
                        <span><i class="fas fa-eye"></i> Lượt xem: <?php echo getpostviews(get_the_id()); ?></span>
                    </div>

                    <b> <?php the_content() ?></b>
                    <p class="author"><?php the_author() ?></p>
                    <div class="mau2-share-7ncn">
                        <!-- <span> Chia sẻ: </span> -->
                        <span class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width=""
                            data-layout="standard" data-action="like" data-size="small" data-share="true"></span>

                        <!-- <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a href="" target="_blank"><i class="fab fa-skype"></i></a> -->
                        <a href=""><?php the_tags( ) ?></a>
                    </div>
                    <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="5">
                    </div>
                    <div class="mau2-other">
                        <!-- <p class="title-other">Bài viết liên quan</p> -->
                        <!-- <ul>

                            <li><a href=""><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Donec
                                    vitae hendrerit arcu</a></li>
                        </ul> -->
                        <?php
                        $categories = get_the_category($post->ID);
                        if ($categories) 
                        {
                            $category_ids = array();
                            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                    
                            $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts'=>3, // Số bài viết bạn muốn hiển thị.
                            'caller_get_posts'=>1
                            );
                            $my_query = new wp_query($args);
                            if( $my_query->have_posts() ) 
                            {
                                echo '<p class="title-other">Bài viết liên quan</p><ul>';
                                while ($my_query->have_posts())
                                {
                                    $my_query->the_post();
                                    ?>
                        <li><a href="<?php the_permalink() ?>"><span><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i></span><?php the_title() ?></a></li>
                        <?php
                                }
                                echo '</ul>';
                            }
                        }
                        ?>
                    </div>

                </div>

            </div>
            <?php get_sidebar() ?>
        </div>

    </div>
</div>
<?php endwhile; else : ?>
<p>Rất tiếc! Không có bài viết</p>
<?php endif; ?>

<?php get_footer() ?>