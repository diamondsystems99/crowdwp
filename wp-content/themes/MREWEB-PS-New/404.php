<?php
get_header();
global $_URL, $_DIR, $pageURl;
?>

<main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="<?php echo $_DIR; ?>assets/img/photos/bg-page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h2 class="title text-white">خطای 404</h2>
                        <div class="bread-crumbs"><img class="line-shape" src="<?php echo $_DIR; ?>assets/img/shape/line-s3.png" alt="Virtuf-HasTech"><a href="index.html">خانه<span class="breadcrumb-sep">//</span></a><span class="active">صفحات</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-sidebar" data-aos="fade-left" data-aos-duration="1100">
            <div class="social-icon">
                <a href="<?php echo $pageURl; ?>"><i class="icofont-facebook"></i></a>
                <a href="<?php echo $pageURl; ?>"><i class="icofont-skype"></i></a>
                <a href="<?php echo $pageURl; ?>"><i class="icofont-twitter"></i></a>
            </div>
        </div>
        <div class="layer-shape">
            <img class="layer-shape-one" src="<?php echo $_DIR; ?>assets/img/shape/1.png" alt="Virtuf-Image">
            <img class="layer-shape-two" src="<?php echo $_DIR; ?>assets/img/shape/4.png" alt="Virtuf-Image">
            <img class="layer-shape-three" src="<?php echo $_DIR; ?>assets/img/shape/5.png" alt="Virtuf-Image">
            <img class="layer-shape-four" src="<?php echo $_DIR; ?>assets/img/shape/3.png" alt="Virtuf-Image">
        </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Page Not Found Wrapper Area ==-->
    <section class="page-not-found-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="thumb" data-aos="fade-up" data-aos-duration="1000">
                        <img src="<?php echo $_DIR; ?>assets/img/photos/page-not-found.png" alt="Virtuf-Image">
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="section-title xs-text-center" data-aos="fade-in" data-aos-duration="1000">
                        <h2 class="title text-theme-color">متاسفیم ...</h2>
                        <h2 class="title">صفحه درخواستی <span>وجود ندارد.</span></h2>
                        <div class="separator-line">
                            <img class="me-1" src="<?php echo $_DIR; ?>assets/img/shape/line1.png" alt="Virtuf-HasTech">
                            <img src="<?php echo $_DIR; ?>assets/img/shape/line2.png" alt="Virtuf-HasTech">
                        </div>
                        <div class="desc">
                            <p>ما پیشنهاد می کنیم به صفحه اصلی بروید.</p>
                            <a href="<?php echo $_URL; ?>" class="btn btn-theme btn-border"><i class="icofont-long-arrow-right"></i> بازگشت به خانه</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Not Found Wrapper Area ==-->
</main>
<?php get_footer(); ?>
