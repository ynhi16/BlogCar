<div class="block-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <ol class="carousel-indicators">
                <?php $i=0; ?>
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=slider'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"
                    class="<?php if($i==0) { echo "active";}; ?>"></li>
                <?php $i++; ?>
                <!-- <?php echo $i; ?> -->
                <?php endwhile; wp_reset_postdata(); ?>


            </ol>
            <!-- Get post News Query -->
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=slider'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

            <div class="carousel-item active">
                <a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn "
                        src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt=" First slide"></a>

            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=slider&offset=1'); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

            <div class="carousel-item ">
                <a href=""><img style="width: 100%" class="d-block img-fluid animated zoomIn "
                        src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="First slide"></a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- end block-slider -->