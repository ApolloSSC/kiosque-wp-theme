<div id="post-<?php the_ID(); ?>"
     class="apercu-article apercu-article-image"
     style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
     onclick="window.location.href='<?php echo get_permalink(); ?>'">
    <header class="entry-header">
        <div class="entry-meta">
            <div class="posted-on">
                <?php echo kiosque_time_link(); ?>
            </div>

            <div class="tag-list"><?php tag_list() ?></div>
        </div>
        <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );?>
    </header>
    <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>">
        </a>
    </div>
</div>