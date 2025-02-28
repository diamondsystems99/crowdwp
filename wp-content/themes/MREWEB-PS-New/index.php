<?php get_header(); global $_URL, $_DIR; ?>


<?php include 'inc/page-title.inc.php'; ?>

<section class="flat-section flat-recommended flat-sidebar">

    <div class="container">
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
