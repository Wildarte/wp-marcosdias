<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
<main>

    <section>

        <section>
            <header class="header-default">
                <h2 class="title-default">Conheça seus Direitos</h2>
            </header>
        </section>

        <section class="container d-flex container_post_page">

            <section class="post_body_page">
                <header class="header_post_page">
                    
                    <h2 class="title-default-post"><?= get_the_title() ?></h2>
                    
                    <div class="under_title_post">

                        <div class="author_post desc-default">
                            Por <strong><?= get_the_author(); ?></strong>
                        </div>

                        <div class="share_post container-post desc-default">
                            <span>Compartilhe este post:</span>

                            <ul class="links_share">
                                <li>
                                    <a href="https://www.facebook.com/sharer.php?u=<?= get_the_permalink() ?>"><i class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?text=Quando sentimos que estamos ajudando alguém isso faz com que a nossa vida ganhe um sentido diferente.&amp;url=<?= get_the_permalink() ?>"><i class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/shareArticle?mini=true&amp;url=<?= get_the_permalink() ?>&amp;title=Quando sentimos que estamos ajudando alguém isso faz com que a nossa vida ganhe um sentido diferente."><i class="bi bi-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="" onclick="copyLink(e)" data-link="<?= 'https' ?>"><i class="bi bi-three-dots"></i></a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </header>

                <figure class="img_post">
                    <img src="https://cdn.pixabay.com/photo/2015/01/08/18/30/entrepreneur-593371_960_720.jpg" alt="imagem post" style="width:100%">
                    <small><figcaption><?= get_the_post_thumbnail_caption() ?></figcaption></small>
                </figure>

                <div class="content_post">

                    <?= get_the_content() ?>

                </div>


                <div class="pos_post">

                    <div class="tags_post">
                        <h3>Tags:</h3>
                        <?php
                            wp_tag_cloud()
                        ?>

                    </div>

                    <div class="share_post container-post desc-default">
                            <span>Compartilhe este post:</span>

                            <ul class="links_share">
                            <li>
                                    <a href="https://www.facebook.com/sharer.php?u=<?= get_the_permalink() ?>"><i class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?text=Quando sentimos que estamos ajudando alguém isso faz com que a nossa vida ganhe um sentido diferente.&amp;url=<?= get_the_permalink() ?>"><i class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/shareArticle?mini=true&amp;url=<?= get_the_permalink() ?>&amp;title=Quando sentimos que estamos ajudando alguém isso faz com que a nossa vida ganhe um sentido diferente."><i class="bi bi-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="" onclick="copyLink(e)" data-link="<?= 'https' ?>"><i class="bi bi-three-dots"></i></a>
                                </li>
                            
                            </ul>
                        </div>

                </div>

                <div class="post_author">
                    <?php $mail_user = strval(get_the_author_meta('user_email', false)); ?>
                    <img class="thumb_post_author" style="border-radius: 50%" src="<?= get_avatar_url($mail_user, '32', '', '', null) ?>" class="avatar">
                    <!-- 
                    <img class="thumb_post_author" src="https://cdn.pixabay.com/photo/2013/07/12/15/24/woman-149861_960_720.png" alt="imagem author">
                     -->
                    <div class="post_author_info">
                        <h4><?= get_the_author() ?></h4>
                        <p><?= the_author_meta('description') ?></p>
                    </div>
                </div>

                <div class="post_related d-flex">
                    <article class="card_post_related">
                    <?php 
                
                        $prev_post = get_previous_post();

                        if($prev_post):

                            $args = [
                                'posts_per_page' => 1,
                                'post__in' => [$prev_post->ID]
                            ];

                            $result = new WP_Query($args);

                            if($result->have_posts()):
                                while($result->have_posts()):
                                    $result->the_post();
                
                    ?>
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'thumbnail') ?>" alt="">
                            <div class="card_post_related_info">
                                <p>Anterior</p>
                                <h4><?= get_the_title() ?></h4>
                            </div>
                        </a>
                        <?php endwhile; endif; endif; wp_reset_postdata(); ?>
                    </article>

                    <article class="card_post_related card_post_related_reverse">
                        <?php
                    
                            $next_post = get_next_post();

                            if($next_post):

                                $args = [
                                    'posts_per_page' => 1,
                                    'post__in' => [$next_post->ID]
                                ];

                                $result = new WP_Query($args);

                                if($result->have_posts()):
                                    while($result->have_posts()):
                                        $result->the_post();
                        
                        ?>
                        <a href="" class="card_post_related_reverse">
                            <img src="<?= get_the_post_thumbnail_url(null, 'thumbnail') ?>" alt="">
                            <div class="card_post_related_info">
                                <p>Próximo</p>
                                <h4><?= get_the_title() ?></h4>
                            </div>
                        </a>
                        <?php endwhile; endif; endif; wp_reset_postdata(); ?>
                    </article>
                </div>
<!-- 

                <div class="m-comments container-post">

                    <h3 class="subtitle-default"><span>(6) Comentários</span></h3>

                    <ul class="list_comments">
                        <li>
                            <img src="https://cdn.pixabay.com/photo/2018/08/28/12/41/avatar-3637425_960_720.png" alt="">
                            <div class="comments_info">
                                <h3>Esther Howard</h3>
                                <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                                <div class="comment_time">
                                    <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <img src="https://cdn.pixabay.com/photo/2017/10/24/07/09/matrix-2883623_960_720.jpg" alt="">
                            <div class="comments_info">
                                <h3>Esther Howard</h3>
                                <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                                <div class="comment_time">
                                    <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                                </div>
                            </div>
                        </li>
                        <ul>
                            <li>
                                <img src="https://cdn.pixabay.com/photo/2018/08/28/12/41/avatar-3637425_960_720.png" alt="">
                                <div class="comments_info">
                                    <h3>Esther Howard</h3>
                                    <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                                    <div class="comment_time">
                                        <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <img src="https://cdn.pixabay.com/photo/2017/10/24/07/09/matrix-2883623_960_720.jpg" alt="">
                                <div class="comments_info">
                                    <h3>Esther Howard</h3>
                                    <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                                    <div class="comment_time">
                                        <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <li>
                            <img src="https://cdn.pixabay.com/photo/2018/08/28/12/41/avatar-3637425_960_720.png" alt="">
                            <div class="comments_info">
                                <h3>Esther Howard</h3>
                                <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                                <div class="comment_time">
                                    <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <img src="https://cdn.pixabay.com/photo/2017/10/24/07/09/matrix-2883623_960_720.jpg" alt="">
                            <div class="comments_info">
                                <h3>Esther Howard</h3>
                                <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                                <div class="comment_time">
                                    <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>

                <div class="form_comment container-post">

                    <h2 class="title-default">Deixe seu comentário</h2>

                    <p class="desc-default">Seu endereço de email não será publicado. Campos obrigatórios estão marcados com *</p>

                    <form action="" class="d-flex" style="justify-content: space-between;">
                        <div class="form_group f-50" style="margin: 10px 0;">
                            <label for="name">Nome:</label>
                            <input type="text" name="" id="nome">
                        </div>
                        <div class="form_group f-50" style="margin: 10px 0;">
                            <label for="empresa">Empresa:</label>
                            <input type="text" name="" id="empresa">
                        </div>
                        <div class="form_group f-100" style="margin: 10px 0;">
                            <textarea name="" id="mensagem" cols="30" rows="10"></textarea>
                        </div>
                        <div class="f-100">
                            <label for="savename">
                                <input type="checkbox" name="" id="savename">
                                Salve meu nome e email nesse navegador para a próxima vez que eu comentar.
                            </label>
                        </div>
                        <button class="btn-blue" type="submit" style="margin: 10px 0;">Enviar</button>
                    </form>

                </div>
 -->
            </section>

            <aside class="sidebar sidebar_post">

                <?php get_template_part('template-parts/content', 'sidebar') ?>

                <section class="recents_posts_page">

                    <h3 class="subtitle-default">Post Recentes</h3>

                    <?php
                            
                        $args = [
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ];

                        $results =  new WP_Query($args);

                        if($results->have_posts()):
                            while($results->have_posts()):
                                $results->the_post();
                    ?>

                    <article class="card_recents_post">

                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'thumbnail') ?>" alt="">
                            <div>
                                <h4><?= get_the_title() ?></h4>
                                <time><i class="bi bi-calendar3"></i> <span><?= get_the_date('d/m/Y') ?></span></time>
                            </div>
                        </a>

                    </article>

                    <?php endwhile; endif; wp_reset_query() ?>

                </section>
            
            </aside>
            
        </section>

    </section>

</main>
<?php endwhile; endif; ?>
<?php get_footer() ?>