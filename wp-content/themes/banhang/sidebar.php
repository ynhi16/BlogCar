<div class="col-lg-3 d-none d-lg-block">
    <div class="box-cate">
        <p class="title-sidebar"><i class="fas fa-bars"></i>Dịch vụ thuê xe</p>
        <div class="box-border">
            <ul class="lh2-ul">
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=dichvu'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><i class="fas fa-caret-right"></i><?php the_title() ?></a></li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
    <div class="box-contact">
        <p class="title-sidebar"><i class="fas fa-bars"></i>Hỗ trợ trực tuyến</p>
        <div class="box-border">
            <ul class="lh2-ul">
                <li>Hotline: 0915 17 12 19</li>
                <li>Email: inb.mycar@gmail.com</li>
            </ul>
        </div>
    </div>
    <div class="box-hightlight-news">
        <p class="title-sidebar"><i class="fas fa-bars"></i>Tin nổi bật</p>
        <div class="box-border">
            <?php $i=1; ?>
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="list-news">
                <a class="img" href="<?php the_permalink() ?>"><img class="img-fluid lh2-img"
                        src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt=""></a>
                <div class="right-list">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <div class="lh2-date"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date('d/m/ys') ?></div>
                </div>
            </div>
            <?php $i++ ?>
            <?php endwhile; wp_reset_postdata(); ?>


            <!-- <div class="list-news">
                <a class="img" href=""><img class="img-fluid lh2-img" src="img/a1.jpg" alt=""></a>
                <div class="right-list">
                    <a href="">Giới chức Thái Lan thông báo một người trong đội thợ lặn</a>
                    <div class="lh2-date"><i class="fas fa-calendar-alt"></i> 20/08/1993</div>
                </div>
            </div> -->
            <!-- end item -->

        </div>
    </div>
</div>