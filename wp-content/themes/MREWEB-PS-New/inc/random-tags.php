<?php
$alltags = get_tags( $args );
shuffle($alltags);
$count=0;
if ($alltags) {
    foreach ($alltags as $tag) {
        $count++;
        echo '<a href="'.get_tag_link($tag->term_id).'" class="tag-cloud-link tag-link-45 tag-link-position-1" aria-label="'.$tag->name.'">'.$tag->name.'</a>';
        if ($count > 19) break;
    }
}
?>