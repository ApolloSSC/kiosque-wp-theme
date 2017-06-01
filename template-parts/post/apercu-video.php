<div id="post-<?php the_ID(); ?>" class="apercu-article apercu-article-video">
    <?php
    $content = apply_filters( 'the_content', get_the_content() );
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
    foreach ( $video as $video_html ) {
        echo '<div class="entry-video">';
        echo $video_html;
        echo '</div>';
    }
    ?>
    <div class="apercu-article-video-wrapper">
        <header class="entry-header">
            <div class="entry-meta">
                <div class="posted-on">
                    <?php echo kiosque_time_link(); ?>
                </div>
                <div class="tag-list"><?php tag_list() ?></div>
            </div>
            <?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );?>
        </header>
    </div>
</div>