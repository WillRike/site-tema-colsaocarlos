<article class="card-category">
    <!-- Card unitario -->
            <div class="card card-carouselAconteceu ">
                <!-- ***Foto de destaque*** -->
                <img src="<?php if (has_post_thumbnail()) {
                                echo get_the_post_thumbnail_url($post->ID, 'full');
                          } ?>" class="card-img-top" alt="">

                <div class="card-body">
                    <div class="info-post">
                        <!-- logo calendário -->
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/event_note.svg" alt="event">
                        <!-- Data do post -->
                        <span><?php the_time('j M Y');?> | Categorias: <?php the_category(', '); ?></span>
                    </div>
                    <div>
                        <!-- Tituto do post Aconteceu -->
                        <h2><?php the_title(); ?></h2>
                        <!-- Resumo do post Aconteceu -->
                        <p class="card-text"><?php the_excerpt();?></p>
                    </div>
                    <!-- Link do post  para o botão ler mais -->
                    <a href="<?php the_Permalink() ?>" type="button" class="btn btn-primary card-button">Ler Mais ></a>
                </div>
            </div>
</article>
