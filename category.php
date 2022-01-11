<?php get_header(); ?>

<section>

    <div class="background-title-single">
        <div class="container-title-single">
            <h2 class="title-single"><?php the_archive_title() ?></h2>
        </div>
    </div>
    <div class="container container-categorys ">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <?php get_template_part('template_parts/post') ?>
            <?php endwhile ?>
        <?php endif; ?>

        <!-- <?php get_sidebar(); ?> -->
    </div>

    <div class="container container-categorys">
        <div class="paginacao">
            <div class="pagina_anterior btn btn-primary" role="button"><?php previous_posts_link('<< Página Anterior'); ?></div>
            <div class="pagina_proxima btn btn-primary" role="button"><?php next_posts_link('Próxima Página >>'); ?></div>
        </div>
    </div>

    <div style="clear:both"></div>
</section>

<?php get_footer(); ?>
