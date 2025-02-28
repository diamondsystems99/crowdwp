<?php  global $_URL, $_DIR; ?>
<div class="widget-sidebar fixed-sidebar">
    <div class="flat-tab flat-tab-form widget-filter-search widget-box">
        <div class="tab-content">
            <div class="tab-pane fade active show" role="tabpanel">
                <div class="form-sl">
                    <form method="get" action="<?php echo $_URL; ?>">
                        <div class="wd-filter-select">
                            <div class="inner-group">
                                <div class="box">
                                    <div class="form-style">
                                        <input
                                                class="form-control"
                                                name="s"
                                                placeholder="کلمه کلیدی را تایپ کنید ...."
                                                required=""
                                                title="Search for"
                                                type="text"
                                                value=""
                                        />
                                    </div>
                                </div>
                                <div class="form-style">
                                    <button class="tf-btn btn-view primary hover-btn-view" type="submit">
                                        جستجو
                                        <span class="icon icon-arrow-left2"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-box box-latest-property">
        <h5 class="fw-6 title">محبوب ترین مطالب</h5>
        <ul>
            <?php
            $sideSlider = get_posts(array('category' => 2));
            $index = 0;
            foreach ($sideSlider as $row) {
                $title = $row->post_title;
                $permalink = get_permalink($row->ID);
                $image = get_the_post_thumbnail_url($row->ID);
                $date = _jDate(get_the_date(NULL,$row->ID));
                ?>
                <li class="latest-property-item">
                    <a class="images-style" href="<?php echo $permalink; ?>">
                        <img alt="img" src=" <?php echo $image; ?>" />
                    </a>
                    <div class="content">
                        <div class="text-capitalize text-btn">
                            <a class="link" href="<?php echo $permalink; ?>">
                                <?php echo $title; ?>
                            </a>
                        </div>
                    </div>
                </li>
                <?php $index +=1; } ?>
        </ul>
    </div>
</div>