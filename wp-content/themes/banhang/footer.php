<div class="footer-bg">
    <div class="block-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                    <p class="title">GIỚI THIỆU</p>
                    <p class="caption">ABC là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp
                        dịch vụ về vận tải du lịch, tư vấn và lập kế hoạch đi...</p>
                    <ul class="lh2-ul">
                        <li><i class="fas fa-map-marker-alt"></i> 09 Nguyễn Sinh Sắc, Hoà Minh, Liên Chiểu, Đà Nẵng
                        </li>
                        <li><i class="fas fa-phone"></i> 0905 548 836</li>
                        <li><i class="fas fa-envelope"></i> Email: inb.mycar@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                    <p class="title">Hỗ trợ khách hàng</p>
                    <ul class="lh2-ul">
                        <li><a href="<?php bloginfo('url') ?>/lien-he">Liên hệ với chúng tôi</a></li>
                        <li><a href="">Câu hỏi thường gặp</a></li>
                        <li><a href="">Điều khoản và chính sách</a></li>
                        <li><a href="">Chăm sóc khách hàng</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                    <p class="title">DỊCH VỤ</p>
                    <ul class="lh2-ul">
                        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=dichvu'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
                    <p class="title">GỬI LIÊN HỆ</p>
                    <p>Liên hệ ngay với chúng tôi để nhận được những ưu đãi mới nhất</p>
                    <input type="" name="" placeholder="Nhập email của bạn">
                    <button type="">Gửi</button>
                    <p class="title">Kết nối</p>
                    <ul class="lh2-ul share-h2">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-skype"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="block-copyright">
        <div class="container">
            <p>Copyright © 2019 BABYLON Group. All Right Reserved.</p>
        </div>
    </div> -->
</div>
<a class="btn-top" id="bttop" href="javascript:void(0);" title="Top" style="display: inline;"><i
        class="fa fa-chevron-up" aria-hidden="true"></i></a>
</div>
<!-- Javascript -->
<script src="<?php bloginfo('template_directory')?>/js/tether.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/jquery.mmenu.all.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/slick.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/smoothscroll.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/lightslider.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/lightGallery.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/main.js"></script>
<?php  wp_footer() ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
    nonce="3YbnnmYG"></script>
</body>

</html>