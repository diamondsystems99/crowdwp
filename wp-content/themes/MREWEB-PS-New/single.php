<?php
get_header();
global $_URL, $_DIR,$pageURl;
the_post();
wpb_set_post_views(get_the_ID());
$news_comments = get_comments(
    array(
        'status' => 'approve',
        'post_id' => get_the_ID(),
        'orderby' => 'comment_date',
        'order' => 'DESC'
    )
);
$postId = get_the_ID();
$postLink = get_the_permalink();
$title = get_the_title();
$excerpt = get_the_excerpt();
$date = _jDate(get_the_date());
$commentNumber = get_comments_number($postId);
$tags = get_the_tags($postId);
$authorName = get_the_author();
$authorUrl = get_author_posts_url(get_the_author_meta('ID'));
$permailnk = get_permalink(get_the_ID());
$imageURl = get_the_post_thumbnail_url(get_the_ID(), 'full');
$catName = get_the_category($postId)[0]->name;
$catLink = get_category_link(get_the_category($postId)[0]->cat_ID);
?>

<?php get_header(); global $_URL, $_DIR; ?>

<?php include 'inc/single-title.inc.php'; ?>
<style>
    h1{
        font-size: 24px;
    }
    h2{
        font-size: 22px;
    }
    h3{
        font-size: 20px;
    }
    h4{
        font-size: 18px;
    }
    h5{
        font-size: 16px;
    }
    h6{
        font-size: 16px;
    }
    .flat-section ul{
        font-size: 16px;
        line-height: 35px;
        padding: 0 0;
        padding-right: 30px;
    }
    .flat-section ul li{
        list-style: disc;
    }
    .flat-section p{
        font-size: 16px;
        line-height: 35px;
    }
</style>
<section class="flat-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="flat-blog-detail">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include 'inc/sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


