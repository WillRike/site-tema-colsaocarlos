<?php get_header(); ?>

<section>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <div class="background-title-single">
            <div class="container-title-single">
                <h2 class="title-single"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="container container-single">

            <article class="article-page">
                <div class="card card-single card-page">
                <p>
                    <?php the_content(); ?>
                </p>
                </div>



                <?php
                if (comments_open()) {
                    ?>
                    <hr>
                    <p>
                        <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?>
                    </p>
                    <?php
                    comments_template();
                }
                ?>

            </article>
    <?php endwhile ?>

        <?php get_sidebar(); ?>

        </div>



        <div style="clear:both"></div>
</section>

<?php get_footer(); ?>
