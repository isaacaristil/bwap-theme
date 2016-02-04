<?php
$fields = get_query_var('fields', false);

if($img = wp_get_attachment_image_src(get_post_thumbnail_id($fields['ID']),'thumbnail')) {
    $img = $img[0];
} else {
    $img = false;
}

?>
<a href="<?= get_permalink($fields['ID']) ?>">
    <div class="tile">
        <?php if($img) { ?>
        <div class="tile__image-wrap">
            <div class="tile__image" style="background-image:url(<?= $img ?>)"></div>
        </div>
        <?php }
            if(isset($fields['title'])) {
                echo '<div class="tile__title">'.$fields['title'].'</div>';
            }

            if(isset($fields['subtitle'])) {
                echo '<div class="tile__subtitle">'.$fields['subtitle'].'</div>';
            }
        ?>
    </div>
</a>
