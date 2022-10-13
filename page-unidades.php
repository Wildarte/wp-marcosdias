<?php
//Template Name: Unidades
get_header();
?>

<main>

    <section>
        <section>
            <header class="header-default">
                <h2 class="title-default">Conheça nossos escritórios</h2>
            </header>
        </section>
    </section>

    <section class="main_slide_office">
        <img class="img_o" src="assets/img/o.png" alt="">
        <div class="main_slide_office_content d-flex">
            <div class="f-50 main_slide_office_left">

                <div class="owl-carousel slide_carousel_main_office" id="slide_carousel_main_office">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_office.jpg" alt="">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_office.jpg" alt="">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_office.jpg" alt="">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_office.jpg" alt="">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_office.jpg" alt="">
                </div>

                <img class="img_gray" src="assets/img/bg-gray.jpg" alt="">
                <img class="dot_one" src="assets/img/dot.png" alt="">
                <img class="dot_two" src="assets/img/dot.png" alt="">
            </div>
            <div class="f-50 d-flex main_slide_office_right">
                
                <div class="main_slide_office_right_content">
                    <h2 class="title-default">Sede integrada e equipe conectada</h2>

                    <p class="desc-default">Estrutura completa e equipe altamente qualificada para lhe atender, presencial ou virtualmente. Atendimento em diversos locais do Brasil.</p>

                    <img src="assets/img/video_teste.jpg" alt="">
                </div>

            </div>
        </div>
        
    </section>

    <section class="cta_find_office">
        <div class="container d-flex">
            <div class="f-50">
                <h2 class="title-default">Encontre uma MRD mais próximo de você</h2>
                <p class="desc-default">Preencha os dados ao lado para encontrar o escritório mais próximo da sua localidade.</p>
            </div>

            <div class="f-50">

                <div class="form_office d-flex">

                    <p id="resturn_cep_erro" class="p-0-10 color-red"></p>
                    <div class="form_group f-100">
                        <input type="text" name="" id="office_cidade" placeholder="Cidade">
                    </div>
                    <div class="form_group f-50 d-column">
                        <input type="text" name="" id="office_cep" placeholder="CEP">
                    </div>
                    <div class="form_group f-50">
                        <input type="text" name="" id="office_estado" placeholder="Estado">
                    </div>
                    <div class="form_group w-100 form_group_button">
                        <button class="btn-blue" type="submit" onclick="consultaEndereco()" id="btn_busca_cep">Buscar</button>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php get_template_part('template-parts/content','select-office') ?>

    <section class="search_offices" style="display: none;">

        <h2 class="title-default" style="text-align: center; margin: 15px auto">Algumas unidades próximas <i class="bi bi-geo-fill"></i></h2>
        
        <div class="search_offices_content"></div>

    </section>  

    <?php get_template_part('template-parts/content','list-office') ?>

    <div class="btn_see" style="width: 100%; text-align: center; padding: 10px; justify-content: center; display: none">
        <button class="btn-blue" id="see_all_units" onclick="see_all_offices()">Ver Todas</button>
    </div>

    <div class="load_more_office active">
        <img class="spinner" src="assets/img/loading.png" alt="">
    </div>

</main>

<?php get_footer() ?>