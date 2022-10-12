const card_office_uni = document.querySelectorAll('.card_office_uni');

let total_offices = card_office_uni.length;
let initial_slide = 0;
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
/*
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
*/

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



const select_offices = document.getElementById('select_offices');
if(select_offices){
    select_offices.addEventListener('change', (e) => {

        let state = e.target.value;
    
        card_office_uni.forEach((item) => {
            if(item.getAttribute('data-uf') == state){
                item.style.display = "flex"
    
            }else{
                item.style.display = "none";
            }
        });
    
    
    });
}



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

    select_offices.value = "Selecione o Estado"

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