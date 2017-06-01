<div id="post-<?php the_ID(); ?>" class="apercu-article">
    <header class="entry-header">
        <div class="entry-meta">
            <div class="posted-on">
                <?php echo kiosque_time_link(); ?>
            </div>
            <div class="tag-list"><?php tag_list() ?></div>
        </div>
        <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );?>
    </header>
    <div class="entry-content" style="cursor:pointer" onclick="window.location.href='<?php echo get_permalink(); ?>'">
        <?php the_excerpt(); ?>
    </div>
</div>