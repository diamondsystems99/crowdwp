
<?php
$posts = get_posts([
    'post_type' => 'home_page_config',
    'post_status' => 'publish',
    'numberposts' => -1
]);
$configId = $posts[0]->ID;
?>

<div class="contact-info-content">
    <div class="contact-info-item">
        <div class="icon">
            <img class="icon-img" src="<?php echo $_DIR; ?>assets/img/icons/c1.png" alt="Icon">
        </div>
        <div class="content">
            <h4>با ما تماس بگیرید.</h4>
            <img class="line-icon" src="<?php echo $_DIR; ?>assets/img/shape/line-s1.png" alt="Icon">
            <a href="tel:<?php echo get_field('تلفن_1', $configId); ?>"><?php echo get_field('تلفن_1', $configId); ?></a>
            <a href="tel:<?php echo get_field('تلفن_2', $configId); ?>"><?php echo get_field('تلفن_2', $configId); ?></a>
        </div>
    </div>
    <div class="contact-info-item">
        <div class="icon">
            <img class="icon-img" src="<?php echo $_DIR; ?>assets/img/icons/c2.png" alt="Icon">
        </div>
        <div class="content">
            <h4>پست الکترونیک.</h4>
            <img class="line-icon" src="<?php echo $_DIR; ?>assets/img/shape/line-s1.png" alt="Icon">
            <a href="mailto:<?php echo get_field('ایمیل_1', $configId); ?>"><?php echo get_field('ایمیل_1', $configId); ?></a>
            <a href="mailto:<?php echo get_field('ایمیل_2', $configId); ?>"><?php echo get_field('ایمیل_2', $configId); ?></a>
        </div>
    </div>
    <div class="contact-info-item">
        <div class="icon">
            <img class="icon-img" src="<?php echo $_DIR; ?>assets/img/icons/c3.png" alt="Icon">
        </div>
        <div class="content">
            <h4>محل.</h4>
            <img class="line-icon" src="<?php echo $_DIR; ?>assets/img/shape/line-s1.png" alt="Icon">
            <p>
                <?php echo get_field('آدرس', $configId); ?>
            </p>
        </div>
    </div>
</div>