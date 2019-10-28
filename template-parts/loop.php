        <?php while (have_posts()) : the_post(); ?>
            <article class="microsite-posts-grid_post">
                <div class="microsite-posts-grid_post_thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <div class="microsite-posts-grid_post_thumbnail_filter"></div>
                            <?php the_post_thumbnail(); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="microsite-posts-grid_post_data">
                    <p class="date"><?php echo get_the_date(); ?></p>
                    <p class="author"><span>Por</span> <?php the_author(); ?></p>
                </div>
                <div class="microsite-posts-grid_post_content">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_excerpt(); ?></p>
                </div>
            </article>
        <?php endwhile; ?>