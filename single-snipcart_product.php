<div id="product" class="site-content">

    <img src="<?php the_field('snipcart_image') ?>" />

    <button class="snipcart-add-item"
        data-item-id="<?php echo $post->ID ?>" 
        data-item-name="<?php the_field('snipcart_name') ?>" 
        data-item-url="<?php echo get_permalink(); ?>" 
        data-item-price="<?php the_field('snipcart_price') ?>" 
        data-item-description="<?php the_field('snipcart_description') ?>"
        data-item-image="<?php the_field('snipcart_image') ?>">
        Buy now for <?php the_field('snipcart_price') ?> $ 
    </button>
</div> 
