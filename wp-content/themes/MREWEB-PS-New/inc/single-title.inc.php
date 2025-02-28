<?php get_header(); global $_URL, $_DIR; ?>
<!-- Page Title -->
<section class="flat-title-page" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
    <div class="container">
        <div class="breadcrumb-content">
            <h1 class="text-center text-white title">
                <?php echo get_the_title(); ?>
            </h1>
        </div>
    </div>
</section>
<!-- End Page Title -->