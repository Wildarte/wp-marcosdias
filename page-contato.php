<?php
//Template Name: Contato
get_header()
?>

<main>

<section class="form_bottom container_full">
            <div class="form_bottom_content container d-flex">

                <div class="form_board d-flex">
                    <div class="f-50 left_contact_page">
                        <h2 class="title-default">Entre em contato conosco!</h2>
                        <p class="desc-default">Somos mais de 113 profissionais especializados e prontos para tirar todas as suas dúvidas sobre direitos trabalhistas. Agende a sua visita pelo formulário.</p>
                    </div>
                   
                    <div class="f-50">
                        <form action="" class="form form_page_contact" method="post" id="formHome">
                            <p style="width: 100%; text-align: center; padding: 0 10px" id="retorno_form_home"></p>

                            <div class="form_group f-50">
                                <input type="text" name="nome_home" id="nome_home" placeholder="Nome" required>
                            </div>
                            <input type="hidden" name="null1" value="">
                            <input type="hidden" name="null2" value="">
                            <input type="hidden" name="contato_from" value="<?= home_url() ?>/contato">
                            <div class="form_group f-50">
                                <input type="email" name="email_home" id="email_home" placeholder="E-mail" required>
                            </div>
                            <div class="form_group f-50">
                                <input type="text" name="empresa_home" id="empresa_home" placeholder="Empresa">
                            </div>
                            <div class="form_group f-50">
                                <input type="text" name="cargo_home" id="cargo_home" placeholder="Cargo">
                            </div>
                            <div class="form_group w-100">
                                <textarea name="msg_home" id="msg_home" cols="30" rows="8" placeholder="Deseja dizer algo sobre seu contato" required></textarea>
                            </div>
                            <div class="form_group w-100 form_group_button">
                                <button class="btn-blue" type="submit" id="sendHome">Enviar</button>
                            </div>
                        </form>
                    </div>
                    
                </div>

            </div>
            <div>

            </div>
        </section>


        <section class="office_slide">
            <header class="container header_office_slide">
                <h2 class="title-default">Escritórios em mais de 15 cidades</h2>
            </header>
            <div class="d-flex owl-carousel office_slide" id="office_slide">
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/minas1/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://g.page/marcosrdiasadv?share" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Belo Horizonte/MG</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/minas2/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/fKSBe6WbZb1yEKpdA" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Juiz de Fora/MG</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/saopaulo/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/LtNcZbgqyGrA815GA" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">São Paulo - Capital/SP</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/saopaulo2/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/PmZHWpozbp1aX4Fb9" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Santo Amaro - São Paulo</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/ribeirao/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/UwpiDFjFGdbNn8XW8" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Ribeirão Preto/SP</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/campinas/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/iaPFW3NQJpQ8jA5o7" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Campinas/SP</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/saocaetano/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/sACTGgAfiuwhVDBWA" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">São Caetano do Sul/SP</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/rio/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/mCSBkRcZU8LQpudw6" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Rio de Janeiro/RJ</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/es/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/b5PUCFLw3sKpiVbn6" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Vitória/ES</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/bahia/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/7n9kijAtbS9fWZNw7" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Salvador/BA</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/pe/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/huUv1PwDjtJjh4VMA" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Recife/PE</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/parana/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/f2CiD9bPWNiyB2D26" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Curitiba/PR</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/sc/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/ywTJrBpJdcZspLn9A" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Florianópolis/SC</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/riograndesul/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/7pskGrCYq3NHJrEf7" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Porto Alegre/RS</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/df/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://www.google.com/maps?ll=-15.831862,-48.055534&z=15&t=m&hl=pt-BR&gl=BR&mapclient=embed" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Brasília/DF</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/goias/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/zSVKNdkdnP8PRj8k8" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Goiânia/GO</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/matogrosso/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/XivnfDZRsMULMkpf6" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Cuiabá/MT</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="card_slide_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/offices/matogrossosul/img1.jpg" alt="">
                    <a class="link_slide_office" href="https://goo.gl/maps/TWxb8BxKhv8WggcR8" target="_blank">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="desc-default">Campo Grande/MS</strong>
                            <p class="desc-default">Saiba Mais</p>
                        </div>
                        <i class="arrow bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>


        <section class="clients">
            <div class="container">
                <header class="header_clients">
                    <h2 class="title-default">
                        O que dizem os nossos clientes?
                    </h2>
                </header>
                
            

                <?php get_template_part('template-parts/content', 'deps') ?>

            </div>
        </section>

</main>

<?php get_footer() ?>