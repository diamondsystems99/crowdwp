<?php
$mainSlider = get_posts(array('category' => 13));
foreach ($mainSlider as $row) {
    $title = $row->post_title;
    $postDate = _jDate($row->post_date);
    $authorUrl = get_author_posts_url($row->post_author);
    $authorName = get_the_author_meta('display_name', $row->post_author);
    $image = get_the_post_thumbnail_url($row->ID , 'Full');
    $permalink = get_permalink($row->ID);
    ?>
    <div class="item slider-item">
        <div class="slider-item-inner">
            <a href="<?php echo $permalink; ?>" class="thumbnail item-thumbnail">
                            <span class="item-thumbnail-resize-portrait">
                                <img alt="<?php echo $title; ?>" src="<?php echo $image; ?>" class="optimized">
                            </span>
            </a>
            <div class="slider-item-content">
                <div class="meta-items hidden">
                    <a href="<?php echo $permalink; ?>" target="_blank" class="meta-item meta-item-author">
                        <i class="fa fa-edit"></i>
                        <span>ثبت نام کارگاه</span>
                    </a>
                    <a class="meta-item meta-item-date" href="<?php echo $permalink; ?>">
                        <i class="fa fa-clock"></i><span><?php echo $postDate; ?></span>
                    </a>
                </div>
                <h3 class="item-title">
                    <a href="<?php echo $permalink; ?>">
                        <?php echo $title; ?>
                    </a>
                </h3>
                <div class="item-readmore-wrapper">
                    <a class="item-readmore" href="<?php echo $permalink; ?>">جزئیات بیشتر</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>