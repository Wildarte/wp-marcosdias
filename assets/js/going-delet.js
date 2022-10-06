//aqui é o arrays dos escritórios que serão inseridos nos cards
let offices = [
    ['Escritório de Advocacia em Belo Horizonte/MG', 'Rua do Ouro, 558, Serra - Belo Horizonte/MG', '30.220-000', '(31)32677665', ' <div class="slide_imgs" id="slide_img4"> <div class="content_slide_img"> <img class="show_img_slide" src="assets/img/slide1.jpg" alt=""> <img class="" src="assets/img/slide2.jpg" alt=""> <img class="" src="assets/img/slide3.jpg" alt=""> </div> <div class="slide_img_nav"> <button class="btn_prev_slide_img"> <span><</span> </button> <button class="btn_next_slide_img"> <span>></span> </button> </div> </div>', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3750.7111317014064!2d-43.9241994!3d-19.9365742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699be53fc79d3%3A0x56ca690d5574055f!2sMarcos%20Roberto%20Dias%20Sociedade%20de%20Advogados!5e0!3m2!1spt-BR!2sbr!4v1664374486789!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'],

    ['Escritório de Advocacia em Juiz de Fora/MG', 'Av. Barão do Rio Branco, 1871, sala 1702, Centro Juiz de Fora/Minas Gerais', '36.013-020', '00 0000-0000', 'assets/img/office-juiz-de-fora2.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.5661570171183!2d-43.35025739999999!3d-21.758338799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989c9f6b133315%3A0x2aaa7ac2b42498a1!2sAv.%20Bar%C3%A3o%20do%20Rio%20Branco%2C%201871%20-%20Centro%2C%20Juiz%20de%20Fora%20-%20MG%2C%2036013-020!5e0!3m2!1spt-BR!2sbr!4v1664375567221!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'],

    ['Escritório de Advocacia em São Paulo/Capital', 'Av. Ordem e Progresso, 157 - sala 705 - Várzea da Barra Funda São Paulo/SP', '01.141-030', '00 0000-0000', 'assets/img/office-sp.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.3842577578757!2d-46.6677049!3d-23.518677999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef7fefb67f003%3A0xeb4cdb9758ea9dfe!2sAv.%20Ordem%20e%20Progresso%2C%20157%20-%20V%C3%A1rzea%20da%20Barra%20Funda%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001141-030!5e0!3m2!1spt-BR!2sbr!4v1664375716541!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'],

    ['Escritório de Advocacia em São Paulo/Capital', 'Av. das Nações Unidas 18801, sl. 1214 - Nova América Office Park, Santo Amaro', '04795-100', '(11) 3080-2100', 'assets/img/office-sp2.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14618.541071792724!2d-46.7204575!3d-23.6532296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce510838530ccf%3A0xa71e84a82b3c1f10!2sNovAm%C3%A9rica%20Office%20Park!5e0!3m2!1spt-BR!2sbr!4v1664376806079!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'],

    ['Escritório de Advocacia em Ribeirão Preto/SP', 'Rua Milton José Robusti, 75 Centro Empresarial Jardim Botânico', '14021-613', '(16) 3325-2830', 'assets/img/office-ribeirao.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.588147893261!2d-47.794321599999996!3d-21.208513800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9b8d23f3200db%3A0x2ddb7e8a07abe5ed!2sCentro%20Empresarial%20Jardim%20Botanico!5e0!3m2!1spt-BR!2sbr!4v1664377444490!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'],

    ['Escritório de Advocacia em Ribeirão Preto/SP', 'Rua Milton José Robusti, 75 Centro Empresarial Jardim Botânico', '14021-613', '(16) 3325-2830', 'assets/img/office-ribeirao.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.588147893261!2d-47.794321599999996!3d-21.208513800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9b8d23f3200db%3A0x2ddb7e8a07abe5ed!2sCentro%20Empresarial%20Jardim%20Botanico!5e0!3m2!1spt-BR!2sbr!4v1664377444490!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'],

    
];

const load_more_office = document.querySelector('.load_more_office');
const load_more_office_img = document.querySelector('.load_more_office img');


//================================ CONFIGURÇÃO DO SLIDE DE ESCRITÓRIO ==========================================
let total_offices = offices.length; //total offices card
let count_office = 0; // contador para colocar os cards dos escritórios
let initial_offices = 0; //quantos offices card iniciam na página
//================================ CONFIGURÇÃO DO SLIDE DE ESCRITÓRIO ==========================================


//funcao que addiciona card de escritório
function put_office(title, address, cep, tel, img_src, iframe_mapa){

    let article = document.createElement('article');
    article.classList.add('card_office_uni', 'd-flex');

    let office_uni_img = document.createElement('div');
    office_uni_img.classList.add('f-50', 'office_uni_img');

    

    article.innerHTML = `<div class="f-50 office_uni_img"> ${img_src} </div> <div class="f-50 office_uni_info"> <div class="office_content"> <header class="office_header_info"> <i class="bi bi-geo-alt-fill title-default"></i> <h2 class="title-default">${title}</h2> </header> <div class="office_contact"> <div class="office_contact_row"> <span>Endereço:</span> <p class="desc-default">${address}</p> </div> <div class="office_contact_row"> <span>CEP:</span> <p class="desc-default">${cep}</p> </div> <div class="office_contact_row"> <span>Tel:</span> <p class="desc-default">${tel}</p> </div> </div> ${iframe_mapa} </div> </div>`;

    office_uni.append(article);
    

}


//funcao que verifica se o arquivo de imagem existe
/*
function verificaUrl(url) {
    var http = new XMLHttpRequest();
    http.open('HEAD', url, false);
    http.send();
    return http.status != 404;
}
*/
//console.log('existe o arquivo: '+verificaUrl('assets/img/sig.png'))

//funcao que add slide de imagens dos escritórios
function add_silde_office(pasta){

    let count_img = 2;

    let div_carousel = document.createElement('div');
    div_carousel.classList.add('office_carousel', 'owl-carousel');
    div_carousel.setAttribute('id', `office_slide${count_img}`);

    let content_carousel = '';

    while(verificaUrl(`assets/img/offices/${pasta}/img${count_img}.jpg`)){
        console.log(`imagem ${count_img} existe`);
        content_carousel += `<img src="assets/img/offices/${pasta}/img${count_img}.jpg">`;
        count_img++;
    }

    div_carousel.innerHTML = content_carousel;
    
    return div_carousel;
    
}

//console.log(add_silde_office('ribeirao'));

//function check if element exist
function estaVisivel(el) {

    const posicoes = el.getBoundingClientRect();
    const inicio = posicoes.top;
    const fim = posicoes.bottom;

    let estaVisivel = false
    
    if((inicio >= 0) && (fim <= window.innerHeight)) {
        estaVisivel = true;
    }
    
    return estaVisivel;   
}


//função que add cards de escritórios ao carregar a página
function initialOffice(contagem){

    for(let n = 0; n < contagem; n++){

        put_office(offices[count_office][0], offices[count_office][1], offices[count_office][2], offices[count_office][3], offices[count_office][4], offices[count_office][5]);
        count_office++;

    }

}

document.addEventListener('DOMContentLoaded', () =>{
    initialOffice(2);
});


document.addEventListener('scroll', () => {

    let altura_leta = window.screen.height;

    let dist_elemento = load_more_office.getBoundingClientRect().top

    if(altura_leta > (dist_elemento + 300)){

        if(count_office < total_offices){

            setTimeout(function(){

                if(estaVisivel(load_more_office)){

                    load_more_office_img.style.display = "flex";
        
                    put_office(offices[count_office][0], offices[count_office][1], offices[count_office][2], offices[count_office][3], offices[count_office][4], offices[count_office][5]);

                    document.querySelector('.scripts_slides').innerHTML += "slide_img('slide_img4');";

                    count_office++;
        
                }else{
        
                }
            }, 200);

        }else{
            load_more_office_img.style.display = "none";
        }
        
    }


});



//=========================================== função dos slides de office =====================================================
function slide_img(id_slide){

    if(id_slide){

        const slide_imgs = document.getElementById(`${id_slide}`);//slide geral
        
        if(slide_imgs){
            const slide_item = document.querySelectorAll(`#${id_slide} img`); //imagens do slide
            const total_slide_img = slide_item.length; //contagem de imagens do slide
            let count_slide = 0; //contador para as imagens
    
            const btn_prev = document.querySelector(`#${id_slide} .btn_prev_slide_img`); //btn prev
            const btn_next = document.querySelector(`#${id_slide} .btn_next_slide_img`); //btn next
    
            
            setInterval(function(){
                if(count_slide < total_slide_img){
    
                    slide_item.forEach((item) => {
    
                        item.classList.remove('show_img_slide');
    
                    });
    
                    slide_item[count_slide].classList.add('show_img_slide');
                    count_slide++;
                }else{
                    count_slide = 0;
    
                    slide_item.forEach((item) => {
    
                        item.classList.remove('show_img_slide');
    
                    });
    
                    slide_item[count_slide].classList.add('show_img_slide');
                    count_slide++;
                }
    
            },3200);
            
            
            btn_next.addEventListener('click', () => {
    
                if(count_slide < total_slide_img){
    
                    slide_item.forEach((item) => {
    
                        item.classList.remove('show_img_slide');
    
                    });
    
                    slide_item[count_slide].classList.add('show_img_slide');
                    count_slide++;
    
                }else{
                    count_slide = 0;
    
                    slide_item.forEach((item) => {
    
                        item.classList.remove('show_img_slide');
    
                    });
    
                    slide_item[count_slide].classList.add('show_img_slide');
                    count_slide++;
                }
    
            });
    
            btn_prev.addEventListener('click', () => {
    
                if(count_slide > 0 && count_slide < total_slide_img){
                    
                    count_slide--;
    
                    slide_item.forEach((item) => {
    
                        item.classList.remove('show_img_slide');
    
                    });
    
                    slide_item[count_slide].classList.add('show_img_slide');
    
                }else{
                    count_slide = (total_slide_img - 1);
    
                    slide_item.forEach((item) => {
    
                        item.classList.remove('show_img_slide');
    
                    });
    
                    slide_item[count_slide].classList.add('show_img_slide');
                    
                }
                console.log('valor: '+count_slide);
    
    
            });
            console.log('valor: '+count_slide);
            console.log('total_slide_img: '+total_slide_img);
        }

    }
    
}
slide_img('slide_img1');
slide_img('slide_img2');
slide_img('slide_img3');

                