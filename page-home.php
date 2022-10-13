<?php
//Template Name: Home
get_header();
$number_whatsapp = get_post_meta(get_the_ID(), 'number_whatsapp', true);
$msg_whatsapp = get_post_meta(get_the_ID(), 'msg_whatsapp', true);
$link_whatsapp = 'https://api.whatsapp.com/send?phone='.$number_whatsapp.'&text='.$msg_whatsapp;
?>

    <main>

        <section class="slide_hero">
            <?php
                $banners = get_post_meta(get_the_ID(), 'slider_banner', true);
                if($banners):
            ?>
            <div class="owl-carousel slide_hero_content" id="slide_hero">
                <?php
                   

                    foreach($banners as $banner):
                ?>
                <<?= $banner['banner_link'] != '' ? 'a' : 'div';  ?> href="<?= $banner['banner_link'] ?>">
                    <img src="<?= $banner['banner_img'] ?>" alt="">
                </<?= $banner['banner_link'] != '' ? 'a' : 'div';  ?>>

                    <?php endforeach; endif; ?>

                
            </div>
        </section>

        <section class="section_default section_one">
            <div class="container d-flex">
                <div class="f-50 about_dr">
                    <h2 class="title-default">Marcos Roberto Dias 20 anos de experiência</h2>
                    <p class="desc-default text-italic">Advogado especialista em Ações Trabalhistas voltadas para empregados do varejo de todo o Brasil.</p>
                    <p class="desc-default">Conheça a Marcos Roberto Dias Sociedade de Advogados e conte com a experiência de quem defende, há mais de 20 anos, os direitos dos trabalhadores.</p>
                    
                    <div class="d-flex w-100 m-bottom-20">
                        <img class="d-block center_mobile" src="<?= get_template_directory_uri() ?>/assets/img/sign.png" alt="">
                    </div>

                    <p class="desc-default d-block w-100"><strong>Marcos Roberto Dias</strong> - Advogado</p>

                    <a class="btn-blue" href="<?= $link_whatsapp ?>">Fale com a minha equipe</a>
                </div>

                <div class="f-50 img_about_dr">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/marcos-roberto-dias1.png" alt="">
                </div>
            </div>
        </section>

        <section class="bg-gray-2 section_two">
            <div class="d-flex section_two_content">

                <div class="f-50 section_two_img">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/bg.jpg" alt="">
                </div>

                <div class="f-50 half-container section_two_info">
                    <h2 class="title-default">Você conhece os seus direitos e nós atuamos na sua causa.</h2>

                    <p class="desc-default">Irregularidades nos direitos básicos são comuns no cotidiano dos trabalhadores, ainda mais quando se trata dos empregados do varejo. Segundo o TST, aproximadamente 2 milhões de processos trabalhistas constavam nos fóruns de todo o Brasil em 2019. Situações que ferem os direitos são tão naturais que muitos nem percebem o quanto são lesados. A MRD atua em defesa dos direitos do trabalhador, especialmente do comércio varejista</p>

                    <div class="section_two_contact d-flex">
                        <div class="contact_uni f-50 d-flex">
                            <a href="https://api.whatsapp.com/send?phone=5531982688311" class="icon_contact">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <div class="contact_uni_info">
                                <span>Tire suas dúvidas</span>
                                <strong>(31) 9 8268-8311</strong>
                            </div>
                        </div>

                        <div class="contact_uni d-flex f-50">
                            <a href="tel:31982688311" class="icon_contact">
                                <i class="bi bi-telephone"></i>
                            </a>
                            <div class="contact_uni_info">
                                <span>Tire suas dúvidas</span>
                                <strong>(31) 9 8268-8311</strong>
                            </div>
                        </div>

                        
                    </div>

                    <a class="btn-blue m-20-0" href="<?= $link_whatsapp ?>">Converse com um especialista</a>
                </div>

            </div>
        </section>


        <section class="section_three">

            <div class="container">
                <header class="section_three_header">
                    <h2 class="title-default">Algumas das reclamações mais comuns na Justiça do Trabalho</h2>
                </header>

                <section class="d-flex">
                    <article class="f-33 card_simple">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon1.png" alt="">
                        </div>
                        <h3>Horas Extras</h3>
                        <p>Receber a remuneração correta por qualquer período trabalhado em hora extra é seu direito</p>
                    </article>
                    <article class="f-33 card_simple">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon2.png" alt="">
                        </div>
                        <h3>Dano e Assédio Moral</h3>
                        <p>Exposição de pessoas a situações humilhantes e constrangedoras no ambiente de trabalho. A conduta traz danos à dignidade e à integridade do indivíduo</p>
                    </article>
                    <article class="f-33 card_simple">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon3.png" alt="">
                        </div>
                        <h3>Prêmios e Comissões</h3>
                        <p>Às vezes, os valores de prêmios e comissões são menores do que os acertados em contrato, ou mesmo deixam de ser pagos</p>
                    </article>
                    <article class="f-33 card_simple">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon4.png" alt="">
                        </div>
                        <h3>Desvios e Acúmulo de Função</h3>
                        <p>O trabalhador pode reclamar seus direitos caso exijam que ele cumpra atividades para as quais não foi contratado ou diferentes daquelas previstas em contrato.</p>
                    </article>
                    <article class="f-33 card_simple">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon5.png" alt="">
                        </div>
                        <h3>Verbas Rescisórias</h3>
                        <p>Frequentemente, os empregados recebem pagamentos de verbas rescisórias menores do que as devidas</p>
                    </article>
                    <article class="f-33 card_simple">
                        <div class="icon_card_simple">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Icon6.png" alt="">
                        </div>
                        <h3>Vínculo Empregatício</h3>
                        <p>Muitas empresas contratam empregados, porém deixam de assinar a carteira de trabalho para não pagarem verbas trabalhistas</p>
                    </article>
                </section>
            </div>

        </section>

        <section class="section_five">
            <h2 class="title-default">A sua reclamação trabalhista se enquadra em algum desses casos?</h2>

            <p class="desc-default">Busque agora os seus direitos! Entre em contato com a Marcos Roberto Dias Sociedade de Advogados</p>

            <a class="btn-blue bg-blue-2" href="<?= $link_whatsapp ?>">CONVERSE AGORA COM UM ESPECIALISTA</a>
        </section>

        <section class="section_numbers">

            <div class="container">
                <div class="frame_video">
                <iframe width="" height="" src="https://www.youtube.com/embed/qwAUHeLSQPQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
    
                <div class="numbers_info">
                    <header class="header_numbers">
                        <h2 class="title-default">A nossa atuação é personalizada, efetiva e ética</h2>
                    </header>
    
                    <p class="desc-default">Foco na perspectiva do trabalhador varejista, atuação que preserva os direitos dos trabalhadores. Essa é a nossa especialidade.</p>
    
                    <section class="d-flex">
                        <article class="card_numbers">
                            <p class="desc-default">Mais de</p>
    
                            <span>20</span>
    
                            <p class="desc-default">anos de experiência no varejo</p>
                        </article>
    
                        <article class="card_numbers">
                            <p class="desc-default">Mais de</p>
                            <span>18.000</span>
    
                            <p class="desc-default">processos em todo o Brasil</p>
                        </article>
    
                        <article class="card_numbers">
                            <p class="desc-default">Mais de</p>
    
                            <span>6500</span>
    
                            <p class="desc-default">casos resolvidos até agora</p>
                        </article>
    
                        <article class="card_numbers">
                            <p class="desc-default">Mais de</p>
                            <span>16</span>
                            <p class="desc-default">Escritórios pelo Brasil</p>
                        </article>
                    </section>
                </div>
            </div>

        </section>

        <section class="section_office">

            <div class="container">
                <header class="header_office">
                    <h2 class="title-default">Por que o nosso escritório de advocacia é o número 1 em Ações Trabalhistas do varejo no Brasil?</h2>
                </header>

                <section class="d-flex cards_office">

                    <article class="card_simple_office">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/libra.png" alt="">
                        <p class="desc-default left-mobile">Conhecemos profundamente legislações, súmulas, resoluções, Orientações Jurisprudenciais, provimentos e jurisprudências que vigoram na Justiça do Trabalho e nos Tribunais.</p>
                    </article>

                    <article class="card_simple_office">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/libra.png" alt="">

                        <p class="desc-default left-mobile">Profissionais altamente qualificados e preparados para oferecer a melhor atuação na Justiça do Trabalho, esclarecer dúvidas e orientar até o final do processo. Tratamos o seu caso de maneira única e personalizada.</p>
                    </article>

                    <article class="card_simple_office">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/libra.png" alt="">
                        <p class="desc-default left-mobile">Equipe de suporte acompanhando cada passo do seu processo, com diversos canais de interação entre cliente e advogado.</p>
                    </article>

                    <article class="card_simple_office">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/libra.png" alt="">

                        <p class="desc-default left-mobile">Escritório inovador, com atendimento para trabalhadores do varejo de todo o Brasil, por meio de diversos canais: WhatsApp, e-mail, telefone e redes sociais. </p>
                    </article>

                    <article class="card_simple_office">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/libra.png" alt="">
                        <p class="desc-default left-mobile">Contamos com escritórios em mais de 10 estados brasileiros e estamos presentes em mais de 15 cidades.</p>
                    </article>

                    <article class="card_simple_office">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/libra.png" alt="">

                        <p class="desc-default left-mobile">Atuamos em contrato de êxito: os honorários são pagos única e exclusivamente após o recebimento do valor da causa.</p>
                    </article>

                </section>
            </div>

        </section>

    
        <section>
            <div class="container container_mapa">
                <?php

                    include('inc/mapa.php')

                ?>
            </div>
        </section>


        

        <section class="clients">
            <div class="container">
                <header class="header_clients">
                    <h2 class="title-default">
                        O que dizem os nossos clientes?
                    </h2>
                </header>
                
                <?php get_template_part('template-parts/content','deps'); ?>

            </div>
        </section>

        <section class="cta_simple">
            <div class="container d-flex">
                <div class="card_simple_left">
                    <h3 class="desc-default color-white"><strong>Busque agora os seus direitos</strong></h3>
                    <p class="desc-default color-white">Entre em contato com a Marcos Roberto Dias Sociedade de Advogados.</p>
                </div>

                <div class="card_simple_right">
                    <a class="btn-blue" href="<?= $link_whatsapp ?>">Converse com um especialista</a>
                </div>
            </div>
        </section>

        <section class="section_adv">
            <div class="container d-flex section_adv_content">
                <div class="f-50 section_adv_left">
                    <h2 class="title-default">Compromisso constante com a defesa dos seus direitos</h2>

                    <ul class="list_check">
                        <li>
                            <p class="desc-default left-mobile">Especialistas na defesa dos direitos dos trabalhadores do varejo;</p>
                        </li>
                        <li>
                            <p class="desc-default left-mobile">Mais de 20 anos de experiência na área;</p>
                        </li>
                        <li>
                            <p class="desc-default left-mobile">Atendimento personalizado. Acreditamos que cada caso é único e merece atenção especial;</p>
                        </li>
                        <li>
                            <p class="desc-default left-mobile">Aproximadamente 15 mil processos no Jusbrasil;</p>
                        </li>
                        <li>
                            <p class="desc-default left-mobile">Nota 5 estrelas no Google, com mais de 1.000 avaliações.</p>
                        </li>
                    </ul>

                    <a class="btn-blue cta_adv" href="<?= $link_whatsapp ?>">Converse com um advogado</a>
                </div>

                <div class="f-50 section_adv_img">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/marcos-roberto-dias2.png" alt="">
                </div>
            </div>
        </section>

        <section class="section_faq">

            <div class="container">

                <h2 class="title-default">Dúvidas frequentes dos trabalhadores</h2>

                <div class="faq_ask">
    
                    <ul class="list_ask">
    
                        <li>
                            <h4><i class="bi bi-dash"></i>Preciso me deslocar até o escritório? Não encontrei a MRD na minha cidade.</h4>
                            <p>Não! Você não precisa se deslocar até o escritório. Um de nossos diferenciais encontra-se justamente na equipe de suporte, que possibilita o acompanhamento passo a passo do seu processo com diversos canais de interação entre cliente e advogado. Ou seja, você pode conversar diretamente com a nossa equipe em um de nossos canais de comunicação (Site, whatsapp, Redes sociais) e, caso queira uma conversa presencialmente, um de nossos especialistas vai até você.
                            </p>
                        </li>
    
                        <li>
                            <h4><i class="bi bi-dash"></i>Quanto tempo demora uma Ação Trabalhista?</h4>
                            <p>Essas situações sempre geram uma ansiedade e é normal que você esteja se perguntando quanto tempo tudo isso vai levar. Em média, um processo demora cerca de três anos para ser concluído. Mas é importante frisar que este tempo é somente uma estimativa. Cada caso é único e demanda um tempo para sua solução.
                            </p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Quanto tempo tenho para buscar os meus direitos trabalhistas na Justiça?</h4>
                            <p>Você tem dois anos, contados da data do desligamento da empresa para buscar seus direitos na justiça. Caso esse prazo seja ultrapassado, mesmo que tenha direitos a receber, tais direitos já estão prescritos e não podem mais ser objeto de discussão.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Posso processar a empresa enquanto ainda estou trabalhando?</h4>
                            <p>Sim! Você não precisa sair da empresa para entrar na Justiça contra ela, podendo iniciar uma ação trabalhista ainda como funcionário.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Quais provas e documentos são necessários para abrir uma Reclamação Trabalhista?</h4>
                            <p>Para iniciar uma Reclamatória Trabalhista será necessário cópia da identidade; cópia do CPF;
                            comprovante de endereço; cópia da CTPS; termo de rescisão do contrato de trabalho (quando houver); recibos de pagamentos (quando houver); Documentos que sirvam como prova para a causa trabalhista, tais como e-mails, comunicados, gravações de áudio e vídeo, fotos e afins e a procuração assinada para que o advogado possa te representar judicialmente. </p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Quanto custa a contratação de um advogado para ação trabalhista?</h4>
                            <p>Normalmente, o honorário de um advogado trabalhista é cobrado a partir de uma porcentagem sobre o valor da causa vencida. Essa modalidade de pagamento é conhecida como “contrato de êxito”. Aqui no escritório não é diferente. Ou seja, na prática você não irá ter nenhum custo com o seu processo enquanto ele estiver tramitando. Você paga para gente única e exclusivamente após o recebimento da ação.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Perdi o processo. Quanto tenho que pagar para o escritório?</h4>
                            <p>Nada! Justamente porque confiamos em nossa metodologia e competência de nossa equipe, nosso escritório trabalha em contrato de êxito. Sendo assim, você só paga se ganhar o processo, mesmo assim, somente quando receber os valores da ação. Se você não ganhar nada, não terá que pagar nenhum valor para nós.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Processei a empresa e não ganhei. Posso tentar novamente?</h4>
                            <p>Se um juiz já analisou o caso e entendeu que não há direito ali, não será possível entrar com outro processo com os mesmos pedidos. Ou seja, o juiz já terá analisado o mérito.
                            O que é possível é entrar com uma nova Ação Trabalhista, com outros pedidos, necessariamente diferentes daqueles do primeiro processo.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Um colega também processou a empresa, mas o valor que ele ganhou foi maior do que o meu. Por que?</h4>
                            <p>Primeiramente é importante destacar que, ainda que você e seu colega tenham os mesmos cargos e recebam o mesmo salário, pode acontecer de vocês trabalharem em horários diferentes, dos ganhos de comissão serem diferentes, do tempo de empresa ser diferentes. Somente por estas questões, o valor recebido no processo já será diferente. Além disso, há outros fatores que podem fazer uma pessoa ganhar mais ou menos em um processo, como as verbas trabalhistas que não foram pagas no momento da rescisão e as possíveis indenizações. Então, os valores vão depender do caso específico de cada trabalhador.</p>
                        </li>
                        <li>
                            <h4><i class="bi bi-dash"></i>Entrei com uma Ação Trabalhista. Terei problemas para ser contratado futuramente?</h4>
                            <p>É normal ter medo de não ser contratado por outras empresas por ter entrado com um processo trabalhista contra o antigo empregador. Mas entenda uma coisa: exigir os seus direitos na justiça não marca a sua vida profissional. Se ficar comprovado que você deixou de ser contratado por causa de um processo trabalhista em andamento ou já encerrado, essa atitude é passível de indenização.</p>
                        </li>
                    </ul>
    
                </div>

                <div class="cta_ask">
                    <a class="btn-blue" href="#formCon">Deixe sua dúvida</a>
                </div>

            </div>

        </section>

        

        <section class="section_form" id="formCon">

            <div class="container d-flex section_form_content">
                <div class="section_form_left">

                    <h2 class="title-default title_form">Ligamos para você</h2>
                    <p class="desc-default desc_form">Se você tiver qualquer problema ou dúvidas sobre os seus direitos, preencha o formulário que entraremos em contato assim que recebermos a sua solicitação.</p>

                    <form action="" class="form_call d-flex" id="formHome">
                        <p style="width: 100%; text-align: center; padding: 0 10px" id="retorno_form_home"></p>

                        <div class="form_group f-50">
                            <input type="text" name="nome_home" id="nome_home" placeholder="Nome" required>
                        </div>
                        <input type="hidden" name="null1" value="">
                        <input type="hidden" name="null2" value="">
                        <input type="hidden" name="contato_from" value="<?= home_url() ?>">
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

                <div class="section_form_img">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/telefonista.png" alt="">   
                </div>

            </div>

        </section>

        <section class="section_post">

            <div class="container">
                <header class="header_post">
                    <h2 class="title-default">Leia os posts e conheça seus direitos</h2>
                </header>

                <div class="post_slide d-flex">
                    <?php
                        $args = [
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ];
                        $result = new WP_Query($args);

                        if($result->have_posts()):
                            while($result->have_posts()):
                                $result->the_post();
                    ?>
                    <article class="card_post">
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">
                            <div class="card_post_info">
                                <h4 class="subtitle-default"><?= get_the_title() ?></h4>
                                <span><?= get_the_author() ?></span>
                                <p class="desc-default">
                                    <?= get_the_excerpt() ?>
                                </p>
                            </div>
                        </a>
                    </article>

                    <?php endwhile; endif; wp_reset_query() ?>

                </div>

                <div class="see_more">
                    <a class="subtitle-default text-uppercase" href="<?= home_url() ?>/blog">+ Veja Todos os Posts</a>
                </div>
            </div>

        </section>

    </main>

<?php get_footer() ?>