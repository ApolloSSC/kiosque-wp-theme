<div id="post-<?php the_ID(); ?>" class="apercu-article apercu-article-aside">
    <header class="entry-header">
        <div class="entry-meta">
            <div class="posted-on">
                <?php echo kiosque_time_link(); ?>
            </div>
            <div class="tag-list"><?php tag_list() ?></div>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</div>