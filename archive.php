<?php 
//Template Name: Blog
get_header();
?>

<main>

    <section>
        <header class="header-default">
            <h2 class="title-default"><?php the_archive_title() ?></h2>
        </header>
    </section>

    <section class="container d-flex body_blog">

        <aside class="sidebar">
            
            <?php get_template_part('template-parts/content', 'sidebar') ?>

        </aside>

        <section class="posts_blog d-flex">
            <?php 
                if(have_posts()):
                    while(have_posts()):
                        the_post();
            ?>
            <article class="card_blog">
                <a href="<?= get_permalink() ?>">
                    <header class="card_blog_header"> 
                        <h3 class="subtitle-default"><?= get_the_title() ?></h3>
                    </header>
                    <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                    <div class="card_blog_excerpt desc-default">
                        <p><?= get_the_excerpt() ?>..<strong>Ler mais</strong></p>
                    </div>
                </a>
            </article>
            <?php
                endwhile; endif;
            ?>
            <article class="card_blog">
                <a href="">
                    <header class="card_blog_header"> 
                        <h3 class="subtitle-default">Metas abusivas: cobrança ou humilhação?</h3>
                    </header>
                    <img src="https://cdn.pixabay.com/photo/2015/02/02/15/28/bar-621033_960_720.jpg" alt="">
                    <div class="card_blog_excerpt desc-default">
                        <p>Cobrar metas inalcançáveis de maneira abusiva. Quando a cobrança passa a ferir os direitos do trabalhador?... <strong>Ler mais</strong></p>
                    </div>
                </a>
            </article>
            <article class="card_blog">
                <a href="">
                    <header class="card_blog_header"> 
                        <h3 class="subtitle-default">Metas abusivas: cobrança ou humilhação?</h3>
                    </header>
                    <img src="https://cdn.pixabay.com/photo/2015/02/02/15/28/bar-621033_960_720.jpg" alt="">
                    <div class="card_blog_excerpt desc-default">
                        <p>Cobrar metas inalcançáveis de maneira abusiva. Quando a cobrança passa a ferir os direitos do trabalhador?... <strong>Ler mais</strong></p>
                    </div>
                </a>
            </article>
            <article class="card_blog">
                <a href="">
                    <header class="card_blog_header"> 
                        <h3 class="subtitle-default">Metas abusivas: cobrança ou humilhação?</h3>
                    </header>
                    <img src="https://cdn.pixabay.com/photo/2015/02/02/15/28/bar-621033_960_720.jpg" alt="">
                    <div class="card_blog_excerpt desc-default">
                        <p>Cobrar metas inalcançáveis de maneira abusiva. Quando a cobrança passa a ferir os direitos do trabalhador?... <strong>Ler mais</strong></p>
                    </div>
                </a>
            </article>
        </section>

    </section>

</main>

<?php get_footer() ?>