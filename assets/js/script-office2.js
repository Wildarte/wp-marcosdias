const card_office_uni = document.querySelectorAll('.card_office_uni');

let total_offices = card_office_uni.length;
let initial_slide = 2;
let index_slides = 0;

const load_more_office = document.querySelector('.load_more_office');
const load_more_office_img = document.querySelector('.load_more_office img');

if(card_office_uni.length){
    document.addEventListener('DOMContentLoaded', () =>{
        initialOffice(2);
    });
}

function initialOffice(cont){
    
    for(let n = 0; n < initial_slide; n++){
        card_office_uni[index_slides].style.display = "flex";
        index_slides++;
    }
}


// funcao que ao rolar a página vai inserindo os cards
document.addEventListener('scroll', () => {

    let altura_leta = window.screen.height;

    let dist_elemento = load_more_office.getBoundingClientRect().top

    if(altura_leta > (dist_elemento + 250)){

        if(index_slides < total_offices){

            setTimeout(function(){

                if(estaVisivel(load_more_office)){

                    if(card_office_uni[index_slides]){
                        card_office_uni[index_slides].style.display = "flex";
                        index_slides++;
                    }
        
                }else{
        
                }
            }, 200);

        }else{
            load_more_office_img.style.display = "none";
        }
    }

});

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

            const div_nav = document.querySelector(`#${id_slide} .slide_img_nav`);

            if(total_slide_img <= 1) div_nav.style.display = "none"
            
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

//adiciona a funcao de slide em todos os slides da página
for(let n = 1; n <= total_offices; n++){

    slide_img(`slide_img${n}`);

}


$(document).ready(function(){
    $('#office_cep').mask('00000-000');
});