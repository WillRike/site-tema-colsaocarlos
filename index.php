<?php get_header(); ?>

<div class="container-grupo-flutuante">
    <div class="grupo-flutuante">


        <a class="flecha-rolagem-cima" href="#">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/vectors/arrow_up.svg" alt="arrow-up">
        </a>
    </div>
</div>

<section id="info-banner">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner carousel-inner-banner">
            <div class="carousel-item carousel-item-banner active">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/child.png" class="d-block w-100" alt="person1">
            </div>
            <div class="carousel-item carousel-item-banner">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/child.png" class="d-block w-100" alt="person2">
            </div>
            <div class="carousel-item carousel-item-banner">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/child.png" class="d-block w-100" alt="person3">
            </div>
            <div class="vector-banner">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/vectors/vector-banner.svg" alt="vector-svg">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</section>

<section id="plataformas-digitais">
    <div class="container-fluid container-digital" style="flex-direction: row; flex-wrap: wrap;">
        <div class="title-plt-digitais">
            <h1>Plataformas Digitais CSC</h1>
            <span>Only the most suitable plugins are integrated into Eduma to help users to build powerful and fully functional education website.</span>
            <div class="ret-digi"></div>
        </div>
        <div class="grid container-plt-icons">
            <div class="g-col-6 block-plt-icon">
                <div class="plt-digi-logo">
                    <div class="plt-digi-icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/eorbit.png" alt="eorbit">
                    </div>
                </div>
                <h3 class="plt-digi-title">E-orbit</h3>
            </div>
            <div class="g-col-6 block-plt-icon">
                <div class="plt-digi-logo">
                    <div class="plt-digi-icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/sas.png" alt="sas">
                    </div>
                </div>
                <h3 class="plt-digi-title">Portal SAS</h3>
            </div>
            <div class="g-col-6 block-plt-icon">
                <div class="plt-digi-logo">
                    <div class="plt-digi-icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/mente-ativa.png" alt="mente-ativa">
                    </div>
                </div>
                <h3 class="plt-digi-title">Mente Ativa</h3>
            </div>
            <div class="g-col-6 block-plt-icon">
                <div class="plt-digi-logo">
                    <div class="plt-digi-icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/interantional-school.png" alt="international-school">
                    </div>
                </div>
                <h3 class="plt-digi-title">International School</h3>
            </div>
        </div>
    </div>
</section>

<section class="bem-vindo-csc">
    <div class="container-fluid title-bem-vindo-csc">
        <h1>:: Bem-vindo ao Colégio São Carlos ::</h1>
        <span>O colégio São Carlos se orgulha de oferecer um ambiente de aprendizado favorável e qualidade de ensino.</span>
    </div>

    <div class="container-bem-vindo">
        <div class="content-bem-vindo">
            <div class="block-bem-vindo">
                <div class="block-icon-bem-vindo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/school.svg" alt="school">
                </div>
                <h1>APROVADOS</h1>
                <h2>+90%</h2>
            </div>
            <div class="block-bem-vindo">
                <div class="block-icon-bem-vindo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/psychology.svg" alt="psychology">
                </div>
                <h1>PROFESSORES</h1>
                <h2>+100</h2>
            </div>
            <div class="block-bem-vindo">
                <div class="block-icon-bem-vindo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/people.svg" alt="people">
                </div>
                <h1>ALUNOS</h1>
                <h2>+800</h2>
            </div>
            <div class="block-bem-vindo">
                <div class="block-icon-bem-vindo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/predio.svg" alt="predio">
                </div>
                <h1>SALAS DE AULA</h1>
                <h2>40</h2>
            </div>
        </div>
    </div>
</section>

<section id="aconteceu-csc">
    <div class="title-sections-csc">
        <h1>Aconteceu CSC</h1>
        <span>Leia nossas postagens úteis sobre a vida estudantil e a história educacional no Blog do Colégio São Carlos.</span>
    </div>

    <div id="carouselAconteceu" class="carousel slide" data-bs-ride="carousel">

        <div id="carouselAconteceu" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button class="button-slide-aconteceu active " type="button" data-bs-target="#carouselAconteceu" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                </button>
                <button class="button-slide-aconteceu" type="button" data-bs-target="#carouselAconteceu" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <!-- <button class="button-slide-aconteceu" type="button" data-bs-target="#carouselAconteceu" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>

            <div class="carousel-inner acontece-inner">
                <div class="carousel-item active">
                    <div class="carousel-item-aconteceu">

                        <!-- Card unitario 1 e 2 -->
                        <?php query_posts('showposts=2&category_name=acontece'); ?>
                        <?php if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                                <div class="card card-carouselAconteceu">
                                    <!-- ***Foto de destaque*** -->
                                    <img src="<?php if (has_post_thumbnail()) {
                                                    echo get_the_post_thumbnail_url($post->ID, 'full');
                                              } ?>" class="card-img-top" alt="">

                                    <div class="card-body">
                                        <div class="info-post">
                                            <!-- logo calendário -->
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/event_note.svg" alt="event">
                                            <!-- Data do post -->
                                            <span><?php the_time('j M Y'); ?></span>
                                        </div>
                                        <div>
                                            <!-- Tituto do post Aconteceu -->
                                            <h2><?php the_title(); ?></h2>
                                            <!-- Resumo do post Aconteceu -->
                                            <p class="card-text"><i>nenhuma descrição.</i></p>
                                        </div>
                                        <!-- Link do post  para o botão ler mais -->
                                        <a href="<?php the_Permalink() ?>" type="button" class="btn btn-primary card-button">Ler Mais ></a>
                                    </div>
                                </div>
                            <?php endwhile;
                        else : ?>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-item-aconteceu">
                        <!-- Card unitario 3 e 4 -->

                        <?php query_posts('showposts=2&offset=2&category_name=acontece'); ?>
                        <?php if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
                                <div class="card card-carouselAconteceu">
                                    <!-- ***Foto de destaque*** -->
                                    <img src="<?php if (has_post_thumbnail()) {
                                                    echo get_the_post_thumbnail_url($post->ID, 'full');
                                              } ?>" class="card-img-top" alt="">

                                    <div class="card-body">
                                        <div class="info-post">
                                            <!-- logo calendário -->
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/event_note.svg" alt="event">
                                            <!-- Data do post -->
                                            <span><?php the_time('j M Y'); ?></span>
                                        </div>
                                        <div>
                                            <!-- Tituto do post Aconteceu -->
                                            <h2><?php the_title(); ?></h2>
                                            <!-- Resumo do post Aconteceu -->
                                            <p class="card-text"><i>nenhuma descrição.</i></p>
                                        </div>
                                        <!-- Link do post  para o botão ler mais -->
                                        <a href="<?php the_Permalink() ?>" type="button" class="btn btn-primary card-button">Ler Mais ></a>
                                    </div>
                                </div>
                            <?php endwhile;
                        else : ?>
                        <?php endif;
                        wp_reset_query();
                        ?>

                    </div>
                </div>
            </div>
            <a href="http://localhost/wordpress/category/colegio/acontece/" target="_blank" type="button" class="btn btn-outline-primary ver-todos-aconteceu" role="button">Ver Todos</a>
        </div>
    </div>
</section>

<!-- Site em desenvolvimento!
    Não preocupe se algo estiver errado... estamos resolvendo tudo!
-->

<section id="text-banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-item-banner active">
                <div class="carousel-item-text">
                    <div class="text-carousel">
                        <h5>Ensino Bilíngue</h5>
                        <p>A <b>International School</b> traz soluções bilíngues para serem implementadas na matriz escolar desde a Educação Infantil até o Ensino Médio.</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item carousel-item-banner">
                <div class="carousel-item-text">
                    <div class="text-carousel">
                        <h5>Desenvolvimente Pessoal</h5>
                        <p>O <b>Mente Ativa</b> é um projeto desenvolvido para inovar a educação nas instituições de ensino básico. </p>
                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item carousel-item-text">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item carousel-item-text">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div> -->
        </div>
    </div>
</section>


<section id="galeria-fotos">
    <div class="title-sections-csc">
        <h1>:: Galeria de Fotos ::</h1>
        <span>Veja nossas fotos sobre a vida estudantil e a história educacional na Galeria do Colégio São Carlos.</span>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 galeria-fotos-container">

        <?php wp_reset_query(); ?>
        <?php query_posts('showposts=6&offset=0&category_name=acontece'); ?>
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>



                <div class="col col-galeria-fotos">
                    <a href="<?php the_Permalink() ?>">
                        <div class="card card-galeria-fotos">

                            <!-- Imagem de destaque -->
                            <img class="card-img" src="<?php if (has_post_thumbnail()) {
                                                            echo get_the_post_thumbnail_url($post->ID, 'full');
                                                       } ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <!-- Titulo galeria -->
                                <h5 class="card-title "><?php the_title(); ?></h5>
                                <div class="info-post-galeria">
                                    <!-- logo calendário -->
                                    <img class="calendar" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/event_note.svg" alt="event">
                                    <!-- Data do post -->
                                    <span><?php the_time('j M Y'); ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>



            <?php endwhile;
        else : ?>
        <?php endif; ?>
    </div>
    <a href="http://colsaocarlos.com.br/index.php/categoria/colegio/acontece" target="_blank" type="button" class="btn btn-primary galeria-fotos-button" role="button">Ver Todos</a>
</section>

<section id="tour-colegio">
    <h1>Tour pelo Colégio São Carlos</h1>
    <iframe id="ytplayer" type="text/html" width="100%" height="100%" src="https://www.youtube.com/embed/vKbQitQlCQo?autoplay=1&controls=0&loop=1&color=white" frameborder="0" allowfullscreen>
    </iframe>
</section>
<section id="maps">
    <div class="bar-tour"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1849.4629274574695!2d-47.892599865969075!3d-22.014151762351027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8772fd9781ccb%3A0xd9d51fe0bd06d521!2zQ29sw6lnaW8gU8OjbyBDYXJsb3M!5e0!3m2!1spt-BR!2sbr!4v1633614837359!5m2!1spt-BR!2sbr" width="100%" height="289" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<?php get_footer(); ?>
