<?php if (have_posts()) : ?>

    <h2><?php _e('Search Results','html5reset'); ?></h2>

    <?php post_navigation(); ?>

    <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <h2><?php echo one_of(simple_fields_fieldgroup('short_title'), get_the_title()); ?></h2>

            <?php posted_on(); ?>

            <div class="entry">

                <?php the_excerpt(); ?>

            </div>

        </article>

    <?php endwhile; ?>

    <?php post_navigation(); ?>

<?php else : ?>

    <h2><?php _e('Nothing Found','html5reset'); ?></h2>

<?php endif; ?>