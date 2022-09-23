<?php get_header() ?>
<div class="module-contact">
    <div class="container">
        <div class="bread-crumb">
            <a href="<?php bloginfo('url') ?>">Trang chủ</a>
            <span class="dot">/</span>
            <a href="<?php bloginfo('url') ?>/lien-he">Liên hệ</a>
        </div>
    </div>
    <div class="form">
        <div class="container">
            <div class="row">

                <div class="col-xl-6  col-lg-6 right h-100">
                    <p class="lh2-title1"><span>THÔNG TIN LIÊN HỆ</span></p>
                    <p><b>Địa chỉ: </b>Nguyễn Sinh Sắc</p>
                    <p><b>Điện thoại: </b>0962 309 111</p>
                    <p><b>Fax: </b>+997 318 323</p>
                    <p><b>Email: </b>personal@website.com</p>

                </div>
                <div class="col-xl-6  col-lg-6 col-md-12 h-100 d-inline w-100 left">
                    <?php echo do_shortcode('[contact-form-7 id="147" title="Form liên hệ"]') ?>
                    <!-- <p class="lh2-title1">Gửi liên hệ</p>

                    <form action="">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 col-12">
                                <div class="input-position">
                                    <input type="text" placeholder="Name *">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col-12">
                                <div class="input-position">
                                    <input type="text" placeholder="Email *">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col-12">
                                <div class="input-position">
                                    <input type="text" placeholder="Phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col-12">
                                <div class="input-position">
                                    <input type="text" placeholder="Subject *">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                        </div>

                        <div class="input-position">
                            <textarea rows="5" placeholder="Tin nhắn"></textarea>
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <button class="lh2-button float-right">Gửi</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
    <div class="block-map">
        <!-- <img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/map.jpg" alt=""> -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.7382559692974!2d108.16295191417008!3d16.079066743446756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219a19330bf35%3A0x51a307d9ba55166f!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gSk9CS0VZ!5e0!3m2!1svi!2s!4v1662342172976!5m2!1svi!2s"
            width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<?php get_footer() ?>