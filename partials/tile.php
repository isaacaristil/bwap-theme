<?php
/**
 *  Tiles are a good way to provide a list of items
 *  
 *  They usually have an image, but it is optionnal
 *  
 *  Usage : 
 *  
set_query_var( 'url', '/get/the/permalink' );
set_query_var( 'title', 'Your post title' );
set_query_var( 'subtitle', 'Category or date' );
set_query_var( 'image', 'https://placeholdit.imgix.net/~text?w=450&h=350' );
get_template_part( 'partials/tile');
 */
?>
<a href="<?= get_query_var( 'url', '#' ) ?>">
    <div class="tile">
        <?php if(get_query_var( 'image', false )) { ?>
        <div class="tile__image-wrap">
            <div class="tile__image" style="background-image:url(<?= get_query_var( 'image' ) ?>)"></div>
        </div>
        <?php } ?>
        <div class="tile__title"><?= get_query_var( 'title', '' ) ?></div>
        <div class="tile__subtitle"><?= get_query_var( 'subtitle', '' ) ?></div>
    </div>
</a>