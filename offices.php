<?php include('./header.php'); ?>

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
                    <img src="assets/img/img_office.jpg" alt="">
                    <img src="assets/img/img_office.jpg" alt="">
                    <img src="assets/img/img_office.jpg" alt="">
                    <img src="assets/img/img_office.jpg" alt="">
                    <img src="assets/img/img_office.jpg" alt="">
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

                <script>

                    function return_erro_cep(){
                        let return_cep_erro = document.querySelector('#resturn_cep_erro');
                        return_cep_erro.innerHTML = "Não encontramos uma unidade próxima!";
                        let btn_busca_cep = document.querySelector('#btn_busca_cep');

                        setTimeout(function(){
                            return_cep_erro.innerHTML = "";
                            btn_busca_cep.innerHTML = "Buscar";
                            btn_busca_cep.disabled = false;
                        }, 3000)
                    }

                    function consultaEndereco(){

                        

                        let cidade = document.querySelector('#office_cidade').value;
                        let cep = document.querySelector('#office_cep').value;
                        let office = document.querySelector('#office_estado').value;

                        let cep_clean = cep.replace(/[^\d]+/g,'');

                        if(cep != "" && cep_clean.length == 8){

                            let btn_busca_cep = document.querySelector('#btn_busca_cep');

                            btn_busca_cep.innerHTML = "Buscando...";
                            btn_busca_cep.disabled = true;

                            console.log(cep_clean)

                            if(cep_clean.length != 8){
                                return_erro_cep();
                                return
                            }

                            let url = `https://viacep.com.br/ws/${cep}/json/`;

                            fetch(url).then(function(response){

                                response.json().then(function(data){
                                    console.log (data)
                                    mostraDados(data);
                                });

                            });
                        }else{
                            document.querySelector('#office_cep').style.border = "1px solid red";
                            let return_cep_erro = document.querySelector('#resturn_cep_erro');
                            return_cep_erro.innerHTML = "Preencha o campo CEP";

                            setTimeout(function(){
                                document.querySelector('#office_cep').style.border = "none";
                                return_cep_erro.innerHTML = "";

                            },2000)
                        }

                        

                    }

                    function mostraDados(dados){

                        let btn_busca_cep = document.querySelector('#btn_busca_cep');

                        btn_busca_cep.innerHTML = "Buscar";
                        btn_busca_cep.disabled = false;

                        let resultado = document.querySelector('#resultado');

                        if(dados.erro){
                           return_erro_cep();
                        }else{
                            document.querySelector('.load_more_office').style.display = "none"
                            list_offices(dados.uf);
                            
                        }

                    }

                    function list_offices(uf){
                        
                        const card_office_uni = document.querySelectorAll('.office_uni .card_office_uni');

                        //document.querySelector('.office_uni').innerHTML = "";

                        //document.querySelector('.office_uni').style.display = "none";
                    
                        //document.querySelector('.search_offices_content').innerHTML = "";

                        let new_div = document.createElement('div');

                        console.log('contagem de itens: '+card_office_uni.length);

                        document.querySelector('.search_offices').style.display = "block";
                        document.querySelector('.btn_see').style.display = "flex";

                        index_slides = card_office_uni.length;

                        card_office_uni.forEach((item) => {
                            
                            if(item.getAttribute('data-uf') == uf){
                                
                                item.style.display = "flex";
                                
                            }else{
                                item.style.display = "none";
                            }
                            
                        });
                        
                        document.querySelector('.search_offices_content').append(new_div);

                    }
                  
                    function see_all_offices(){

                        const card_office_uni = document.querySelectorAll('.office_uni .card_office_uni');

                        card_office_uni.forEach((item) => {

                            item.style.display = "flex";
                                 
                        });


                        document.querySelector('.search_offices').style.display = "none";
                        document.querySelector('.btn_see').style.display = "none";

                    }
                    
                </script>

            </div>

        </div>

    </section>

    <section class="search_offices" style="display: none;">

        <h2 class="title-default" style="text-align: center; margin: 15px auto">Algumas unidades próximas <i class="bi bi-geo-fill"></i></h2>
        
        <div class="search_offices_content"></div>

        

    </section>

    <section class="office_uni">

        <article class="card_office_uni d-flex" data-uf="MG">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img1">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/minas1/img1.jpg" alt="">
                        <img class="" src="assets/img/offices/minas1/img2.jpg" alt="">
                        <img class="" src="assets/img/offices/minas1/img3.jpg" alt="">
                        <img class="" src="assets/img/offices/minas1/img4.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
                
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Belo Horizonte/MG</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua do Ouro, 558, Serra - Belo Horizonte/MG</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">30.220-000</p> 
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(31)32677665</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3750.7111317014064!2d-43.9241994!3d-19.9365742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699be53fc79d3%3A0x56ca690d5574055f!2sMarcos%20Roberto%20Dias%20Sociedade%20de%20Advogados!5e0!3m2!1spt-BR!2sbr!4v1664374486789!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>

        <article class="card_office_uni d-flex" data-uf="MG">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img2">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/minas2/img1.jpg" alt="">
                        <img class="" src="assets/img/offices/minas2/img2.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Juiz de Fora/MG</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Av. Barão do Rio Branco, 1871, sala 1702, Centro Juiz de Fora/Minas Gerais</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">36.013-020</p> 
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">00 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.5661570171183!2d-43.35025739999999!3d-21.758338799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989c9f6b133315%3A0x2aaa7ac2b42498a1!2sAv.%20Bar%C3%A3o%20do%20Rio%20Branco%2C%201871%20-%20Centro%2C%20Juiz%20de%20Fora%20-%20MG%2C%2036013-020!5e0!3m2!1spt-BR!2sbr!4v1664375567221!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="SP">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img3">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/saopaulo/img1.jpg" alt="">
                        <img class="" src="assets/img/offices/saopaulo/img2.jpg" alt="">
                        <img class="" src="assets/img/offices/saopaulo/img3.jpg" alt="">
                        <img class="" src="assets/img/offices/saopaulo/img4.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em São Paulo/Capital</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Av. Ordem e Progresso, 157 - sala 705 - Várzea da Barra Funda São Paulo/SP</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">01.141-030</p> 
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">00 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3842577578757!2d-46.6677049!3d-23.518677999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef7fefb67f003%3A0xeb4cdb9758ea9dfe!2sAv.%20Ordem%20e%20Progresso%2C%20157%20-%20V%C3%A1rzea%20da%20Barra%20Funda%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001141-030!5e0!3m2!1spt-BR!2sbr!4v1664375716541!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="SP">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img4">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/saopaulo2/img1.jpg" alt="">
                        <img class="" src="assets/img/offices/saopaulo2/img2.jpg" alt="">
                        <img class="" src="assets/img/offices/saopaulo2/img3.jpg" alt="">
                        <img class="" src="assets/img/offices/saopaulo2/img4.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em São Paulo/Capital</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Av. das Nações Unidas 18801, sl. 1214 - Nova América Office Park, Santo Amaro</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">04795-100</p> 
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(11) 3080-2100</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14618.541071792724!2d-46.7204575!3d-23.6532296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce510838530ccf%3A0xa71e84a82b3c1f10!2sNovAm%C3%A9rica%20Office%20Park!5e0!3m2!1spt-BR!2sbr!4v1664376806079!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="SP">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img5">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/ribeirao/img1.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Ribeirão Preto/SP</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua Milton José Robusti, 75 Centro Empresarial Jardim Botânico</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">14021-613</p> 
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(16) 3325-2830</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.588147893261!2d-47.794321599999996!3d-21.208513800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9b8d23f3200db%3A0x2ddb7e8a07abe5ed!2sCentro%20Empresarial%20Jardim%20Botanico!5e0!3m2!1spt-BR!2sbr!4v1664377444490!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="SP">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img6">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/campinas/img1.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Campinas/SP</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua Doutor Antônio Alvares Lobo, 660,sala 82, Bairro Botafogo - Campinas/SP</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">13020-110</p> 
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(00) 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.4314009876703!2d-47.06997568454327!3d-22.897453685016593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c96fcee10489%3A0x4d93b474f17d44e1!2sR.%20Dr.%20Ant%C3%B4nio%20%C3%81lvares%20L%C3%B4bo%2C%20660%20-%20Vila%20Itapura%2C%20Campinas%20-%20SP%2C%2013020-110!5e0!3m2!1spt-BR!2sbr!4v1664835262559!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="SP">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img7">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/saocaetano/img1.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em São Caetano/SP</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua Amazonas 439 - sala 77 Centro Edifício Monumental, São Caetano do Sul /São Paulo</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">09520-070</p> 
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(00) 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d456.9639252920498!2d-46.5694539!3d-23.614681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5cee9ee117a1%3A0x17896a272eed7c60!2sR.%20Amazonas%2C%20439%20-%20Centro%2C%20S%C3%A3o%20Caetano%20do%20Sul%20-%20SP%2C%2009520-070!5e0!3m2!1spt-BR!2sbr!4v1664835439761!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="RJ">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img8">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/rio/img1.jpg" alt="">
                        <img class="show_img_slide" src="assets/img/offices/rio/img2.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Rio de Janeiro/RJ</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua da Quitanda, 52, 12º andar Edifício EMCO Centro / Rio de Janeiro - RJ</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">20011-030</p> 
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(00) 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58799.06125873703!2d-43.1864542!3d-22.9155348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5f100bd4bd%3A0x3d9c1e6538aeb74!2sR.%20da%20Quitanda%2C%2052%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020011-030!5e0!3m2!1spt-BR!2sbr!4v1664836002778!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>

        <article class="card_office_uni d-flex" data-uf="ES">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img9">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/es/img1.jpg" alt="">
                        <img class="show_img_slide" src="assets/img/offices/es/img2.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Vitória/ES</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Av. Desembargador Santos Neves nº 389 Sala 401 - Edifício Escort - Praia do Canto Vitória / Espírito Santo</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">29.055-721</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(00) 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3741.828240280104!2d-40.2973722!3d-20.3073754!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb817c3e8c6edc3%3A0xc4edfea8ea221fdf!2sATIT%C3%9A%20Moda%20Feminina!5e0!3m2!1spt-BR!2sbr!4v1664836220512!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="BA">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img10">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/bahia/img1.jpg" alt="">
                        <img class="show_img_slide" src="assets/img/offices/bahia/img2.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Salvador/BA</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Av. Tancredo Neves, 1632 - sala 1906 Caminho das Árvores Edifício Salvador Center Salvador/BA</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">41.820-020</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(00) 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.813037983504!2d-38.4536515!3d-12.983806900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b1003358b8b%3A0x5c2838ad0eb56dc3!2sCondom%C3%ADnio%20do%20Salvador%20Trade%20Center%20-%20Av.%20Tancredo%20Neves%2C%201632%20-%20Caminho%20das%20%C3%81rvores%2C%20Salvador%20-%20BA%2C%2041820-000!5e0!3m2!1spt-BR!2sbr!4v1664890084737!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="PE">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img11">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/pe/img1.jpg" alt="">
                        <img class="show_img_slide" src="assets/img/offices/pe/img2.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Recife/PE</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua Agenor Lopes, nº 25, Sala 503 Empresarial Itamaraty, Boa Viagem</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">51021-110</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(00) 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.8066692477837!2d-34.90573500000001!3d-8.121157199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1fb2da4ccb57%3A0x63cf871fbd4bdc04!2sR.%20Agenor%20Lopes%2C%2025%20-%20Boa%20Viagem%2C%20Recife%20-%20PE%2C%2051021-110!5e0!3m2!1spt-BR!2sbr!4v1664890159962!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>



        <article class="card_office_uni d-flex" data-uf="PR">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img12">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/parana/img1.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Curitiba/PR</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua Marechal Deodoro, 630, sala 1401, Centro Edifício Centro Comercial Itália Curitiba / Paraná</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">80020-320</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">(41) 3338-1442</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.2514487827148!2d-49.266766!3d-25.429855699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce46adf818cdb%3A0x631eb29e253820f!2sCondom%C3%ADnio%20do%20Edif%C3%ADcio%20Centro%20Comercial%20It%C3%A1lia!5e0!3m2!1spt-BR!2sbr!4v1664890259310!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>



        <article class="card_office_uni d-flex" data-uf="SC">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img13">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/sc/img1.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Florianópolis/SC</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua Felipe Schmidt, 515 sala 502, Condomínio Pórtico - Florianópolis/SC</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">88010-001</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">00 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.2514487827148!2d-49.266766!3d-25.429855699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce46adf818cdb%3A0x631eb29e253820f!2sCondom%C3%ADnio%20do%20Edif%C3%ADcio%20Centro%20Comercial%20It%C3%A1lia!5e0!3m2!1spt-BR!2sbr!4v1664890259310!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="RS">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img14">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/riograndesul/img1.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Porto Alegre/Rio Grande do Sul</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Praça Dom Feliciano, nº 26, sala 403 Centro Histórico Porto Alegre / Rio Grande do Sul</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">90.020-160</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">00 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.257071596362!2d-51.222898799999996!3d-30.029481899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197907df0f168b%3A0xc79575f3658cbb74!2sPra%C3%A7a%20Dom%20Feliciano%2C%2026%20-%20Centro%20Hist%C3%B3rico%2C%20Porto%20Alegre%20-%20RS%2C%2090020-160!5e0!3m2!1spt-BR!2sbr!4v1664890998369!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="DF">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img15">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/df/img1.jpg" alt="">
                        <img class="show_img_slide" src="assets/img/offices/df/img2.jpg" alt="">
                        <img class="show_img_slide" src="assets/img/offices/df/img3.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Brasília - Distrito Federal</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">C 2, Lotes 04, 14 e 15 - Sala 511 Ed. Accioly Office Tower Taguatinga Centro, Brasília / DF</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">72.010-020</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">00 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3838.4702625217515!2d-48.0555338!3d-15.8318624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a336b69cbbb43%3A0x6dbc2a366dace0b6!2sAccioly%20Office%20Tower!5e0!3m2!1spt-BR!2sbr!4v1664891180105!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>


        <article class="card_office_uni d-flex" data-uf="GO">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img16">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/goias/img1.jpg" alt="">
                        <img class="show_img_slide" src="assets/img/offices/goias/img2.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Goiânia/Goiás</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Av. T-63, 1296, sala 504, Setor Bueno Edifício New World Goiânia / Goiás</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">74230-100</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">00 0000-0000</p>
                             </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.2591429421204!2d-49.27076339999999!3d-16.7139168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef127100bc4bd%3A0xf88346a3f823b997!2sEdif%C3%ADcio%20New%20World!5e0!3m2!1spt-BR!2sbr!4v1664891352367!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>



        <article class="card_office_uni d-flex" data-uf="MT">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img17">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/matogrosso/img1.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Cuiabá/MT</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua 13 de Junho, 877 - sala 602, Bairro Centro Sul, Ed. Dr. Albert Sabin - Cuiabá/MT</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">78020-000</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">00 0000-0000</p>
                        </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.7649428792056!2d-56.1002343!3d-15.6042027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939db1ec535f1ae7%3A0xa7ea6f15b98796f5!2sRua%2013%20de%20Junho%2C%20877%20-%20Centro%20Sul%2C%20Cuiab%C3%A1%20-%20MT%2C%2078020-000!5e0!3m2!1spt-BR!2sbr!4v1664891488388!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>



        <article class="card_office_uni d-flex" data-uf="MS">
            <div class="f-50 office_uni_img">

                <div class="slide_imgs" id="slide_img18">
                    <div class="content_slide_img">
                        <img class="show_img_slide" src="assets/img/offices/matogrossosul/img1.jpg" alt="">
                    </div>
                    <div class="slide_img_nav">
                        <button class="btn_prev_slide_img">
                            <span><</span>
                        </button>
                        <button class="btn_next_slide_img">
                            <span>></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="f-50 office_uni_info">
                <div class="office_content"> 
                    <header class="office_header_info"> 
                        <i class="bi bi-geo-alt-fill title-default"></i> 
                        <h2 class="title-default">Escritório de Advocacia em Campo Grande/MS</h2> 
                    </header> 
                    <div class="office_contact"> 
                        <div class="office_contact_row"> 
                            <span>Endereço:</span> 
                            <p class="desc-default">Rua Eduardo Santos Pereira, 1550 sala 02, Bairro Vila Rosa - Campo Grande/MS</p> 
                        </div> 
                        <div class="office_contact_row"> 
                            <span>CEP:</span> 
                            <p class="desc-default">79020-170</p>
                        </div> 
                        <div class="office_contact_row">
                             <span>Tel:</span> 
                             <p class="desc-default">00 0000-0000</p>
                        </div> 
                    </div> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3738.363824376666!2d-54.6054083!3d-20.4502448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e88490c6cdd7%3A0xf5b46c93b096a7ec!2sR.%20Eduardo%20Santos%20Pereira%2C%201550%20-%20Cruzeiro%2C%20Campo%20Grande%20-%20MS%2C%2079020-170!5e0!3m2!1spt-BR!2sbr!4v1664891575836!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
            </div>
        </article>

    </section>

    <div class="btn_see" style="width: 100%; text-align: center; padding: 10px; justify-content: center; display: none">
        <button class="btn-blue" id="see_all_units" onclick="see_all_offices()">Ver Todas</button>
    </div>

    <div class="load_more_office active">
        <img class="spinner" src="assets/img/loading.png" alt="">
    </div>

</main>

<?php include('./footer.php'); ?>