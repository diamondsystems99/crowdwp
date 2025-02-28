<?php
get_header();
global $_URL, $_DIR,$pageURl;
?>
<?php
$posts = get_posts([
    'post_type' => 'home_page_config',
    'post_status' => 'publish',
    'numberposts' => -1
]);
$configId = $posts[0]->ID;
?>
<section class="contact-divider-area bg-secondary-black" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 bg-secondary-black">
                <div class="contact-divider-content  bg-black" data-aos="fade-up" data-aos-duration="1100">
                    <div class="section-title">
                        <div class="subtitle-content">
                            <img src="<?php echo $_DIR; ?>assets/img/shape/line1.png" >
                            <h5 class="color-white"><?php echo get_field('عنوان_تماس_با_ما' , $configId); ?></h5>
                        </div>
                        <h2 class="title color-white"><?php echo get_field('زیر_عنوان_تماس_با_ما' , $configId); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-4 sm-text-start text-start">
                <a href="<?php echo get_field('لینک_تماس_با_ما' , $configId); ?>" class="btn btn-theme" data-aos="fade-up" data-aos-duration="1100">
                    <?php echo get_field('متن_لینک_تماس_با_ما' , $configId); ?>
                    <i class="icon icofont-long-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="layer-shape">
        <img class="shape-style1" src="<?php echo $_DIR; ?>assets/img/shape/15.png" alt="Image-HasTech">
    </div>
</section>