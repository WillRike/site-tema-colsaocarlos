<?php get_header(); ?>

<section>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <div class="background-title-single">
                <div class="container-title-single">
                    <h2 class="title-single"><?php the_title(); ?></h2>
                    <div class="info-post">
                        <!-- logo calendário -->
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/event_note_white.svg" alt="event">
                        <!-- Data do post -->
                        <span>Publicado  em <?php the_date(); ?></span>
                    </div>
                </div>
            </div>

            <div class="container container-single">


                <article>

                    <div class="card card-single">
                        <!-- ***Foto de destaque*** -->
                        <img src="<?php if (has_post_thumbnail()) {
                                        echo get_the_post_thumbnail_url($post->ID, 'full');
                                  } ?>" class="card-img-top" alt="">

                        <div class="card-body card-body-single">
                            <p>
                                <?php the_content(); ?>
                            </p>

                        </div>

                        <div class="paginacao">
                            <div class="pagina_anterior btn btn-primary" role="button"><?php previous_post_link(); ?></div>
                            <div class="pagina_proxima btn btn-primary" role="button"><?php next_post_link(); ?></div>
                        </div>
                    </div>

        <?php endwhile ?>
    <?php endif; ?>

            <div style="clear:both"></div>

                </article>

                <?php get_sidebar(); ?>

            </div>
            <div style="clear:both"></div>
</section>

<?php get_footer(); ?>
