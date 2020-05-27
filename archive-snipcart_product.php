<h1>Products</h1>
<?php if ( have_posts() ) : ?>
<table>
    <thead>
        <th>
            Name
        </th>
        <th>
            Price
        </th>
    </thead>
    <tbody>
        <?php while ( have_posts() ) : the_post(); ?>
        <tr>
            <td>
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_field('snipcart_name') ?>
                </a>
            </td>
            <td>
                <?php the_field('snipcart_price') ?> $
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php endif; ?>
