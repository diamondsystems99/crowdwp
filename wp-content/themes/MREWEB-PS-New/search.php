<?php get_header(); global $_URL, $_DIR; ?>

<section class="flat-section flat-recommended flat-sidebar">
    <div class="container">
        <div class="box-title-listing">
            <div class="box-left">
                <h3 class="fw-8">
                    جستجو برای
                    "<?php echo strip_tags($_GET['s']); ?>"
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <?php include 'inc/sidebar.php'; ?>
            </div>
            <div class="col-xl-8 col-lg-7 flat-animate-tab">
                <div class="row">
                    <?php include 'inc/loop.inc.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
