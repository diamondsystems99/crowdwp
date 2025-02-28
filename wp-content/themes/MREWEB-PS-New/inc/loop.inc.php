<div class="row col-xs-12">
    <div class="widget-content feed-widget-content widget-content-Label7">
        <?php
        if (have_posts()) {
            $index = 0;
            while (have_posts()) {
                the_post();
                $postId = get_the_ID();
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $postDate = (get_the_date());
                $authorUrl = get_author_posts_url(get_the_author_meta('ID'));
                $authorName = get_the_author_meta('display_name', get_the_author_meta('ID'));
                $postExcerpt = get_the_excerpt($postId);
                $tag = get_the_tags($postId);
                $link = get_permalink($postId);
                $image = get_the_post_thumbnail_url($postId, 'large');
	            $catName = get_the_category( $postId )[0]->name;
                ?>



                <div class="col-md-12">
                    <div class="homelengo-box list-style-1 list-style-2 line">
                        <div class="archive-top">
                            <a class="images-group" href="<?php echo $link; ?>">
                                <div class="images-style">
                                    <img alt="img-property"
                                         class="lazyload"
                                         data-src="<?php echo $image; ?>"
                                         src="<?php echo $image; ?>"/>
                                </div>
<!--                                <div class="top">-->
<!--                                    <ul class="d-flex gap-6 flex-wrap">-->
<!--                                        <li class="flag-tag primary">برجسته</li>-->
<!--                                    </ul>-->
<!--                                </div>-->
                            </a>
                        </div>
                        <div class="archive-bottom">
                            <div class="content-top">
                                <h6 class="text-capitalize">
                                    <a class="link text-line-clamp-1" href="<?php echo $link; ?>">
                                        <?php echo strip_tags($title); ?>
                                    </a>
                                </h6>
                                <p class="description mt-20 text-line-clamp-2 text-variant-1">
                                    <?php echo strip_tags($postExcerpt); ?>
                                </p>
                            </div>
                            <div class="content-bottom">
                                <a href="<?php echo $link; ?>">
                                    <button class="tf-btn btn-view primary hover-btn-view">
                                        <p class="price">ادامه مطلب</p>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $index += 1; } }
        else{
            echo "<div class='alert alert-warning text-center' style='margin-top: 20px;font-size: 18px;'>موردی یافت نشد....</div>";
        }
        ?>
        <div class="col-xs-12">
            <div class="pagination-area text-center pt-10 pb-60" data-aos="fade-up" data-aos-duration="1000">
                <nav>
                    <?php wp_bootstrap_pagination(); ?>
                </nav>
            </div>
        </div>
    </div>

</div>
