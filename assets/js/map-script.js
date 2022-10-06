const states_map = document.querySelectorAll('svg g#mapa g');

            let states = ['sp','rj','mg','es','ba','pe','pr','sc','rs','df','go','mt','ms'];
            let offices_available = [
                ['mg', 'Escritório de Advocacia em Belo Horizonte/MG', 'Rua do Ouro, 558, Serra - Belo Horizonte/MG','https://g.page/marcosrdiasadv?share'],
                ['mg', 'Escritório de Advocacia em Juiz de Fora/MG', 'Av. Barão do Rio Branco, 1871, sala 1702, Centro Juiz de Fora/Minas Gerais','https://goo.gl/maps/evqihVH5VfdU81cN6'],
                ['sp', 'Escritório de Advocacia em São Paulo/Capital', 'Av. Ordem e Progresso, 157 - sala 705 - Várzea da Barra Funda São Paulo/SP','https://goo.gl/maps/muSRhB73C189LhYc9'],
                ['sp', 'Escritório de Advocacia em São Paulo/Capital', 'Av. das Nações Unidas 18801, sl. 1214 - Nova América Office Park, Santo Amaro','https://goo.gl/maps/iyv5wMdexin9XrAm6'],
                ['sp', 'Escritório de Advocacia em Ribeirão Preto/SP','Rua Milton José Robusti, 75 Centro Empresarial Jardim Botânico','https://goo.gl/maps/YU5oJFE3j8CJomCw8'],
                ['sp', 'Escritório de Advocacia em Campinas/SP', 'Rua Doutor Antônio Alvares Lobo, 660,sala 82, Bairro Botafogo - Campinas/SP','https://goo.gl/maps/qXy7bzk81z4vBXcN9'],
                ['sp', 'Escritório de Advocacia em São Caetano/SP', 'Rua Amazonas 439 - sala 77 Centro Edifício Monumental, São Caetano do Sul /São Paulo','https://goo.gl/maps/gKD3PUKTSyorFq2S8'],
                ['rj', 'Escritório de Advocacia em Rio de Janeiro/RJ', 'Rua da Quitanda, 52, 12º andar Edifício EMCO Centro / Rio de Janeiro - RJ','https://goo.gl/maps/5mxY6WxNSbDXdWMv6'],
                ['es', 'Escritório de Advocacia em Vitória/ES', 'Av. Desembargador Santos Neves nº 389 Sala 401 - Edifício Escort - Praia do Canto Vitória / Espírito Santo','https://goo.gl/maps/xdvWqtLjTEaH7F588'],
                ['ba', 'Escritório de Advocacia em Salvador/BA', 'Av. Tancredo Neves, 1632 - sala 1906 Caminho das Árvores Edifício Salvador Center Salvador/BA','https://goo.gl/maps/BSQaphqqL6tAe85S8'],
                ['pe', 'Escritório de Advocacia em Recife/PE', 'Rua Agenor Lopes, nº 25, Sala 503 Empresarial Itamaraty, Boa Viagem','https://goo.gl/maps/c9vKQC5tM8UeTn7N6'],
                ['pr', 'Escritório de Advocacia em Curitiba/PR', 'Rua Marechal Deodoro, 630, sala 1401, Centro Edifício Centro Comercial Itália Curitiba / Paraná','https://goo.gl/maps/SLcdnWr2qdS1w3EUA'],
                ['sc', 'Escritório de Advocacia em Florianópolis/SC', 'Rua Felipe Schmidt, 515 sala 502, Condomínio Pórtico - Florianópolis/SC','https://goo.gl/maps/zD6fk8eFvpjb5Ef69'],
                ['rs', 'Escritório de Advocacia em Porto Alegre/Rio Grande do Sul', 'Praça Dom Feliciano, nº 26, sala 403 Centro Histórico Porto Alegre / Rio Grande do Sul','https://goo.gl/maps/pL3UPzHkChy2D4GWA'],
                ['df', 'Escritório de Advocacia em Brasília - Distrito Federal', 'C 2, Lotes 04, 14 e 15 - Sala 511 Ed. Accioly Office Tower Taguatinga Centro, Brasília / DF','https://www.google.com/maps/@-15.831862,-48.055534,15z?hl=pt-BR'],
                ['go', 'Escritório de Advocacia em Goiânia/Goiás', 'Av. T-63, 1296, sala 504, Setor Bueno Edifício New World Goiânia / Goiás','https://goo.gl/maps/uxhgY6g97Lu2s8HaA'],
                ['mt', 'Escritório de Advocacia em Cuiabá/MT', 'Rua 13 de Junho, 877 - sala 602, Bairro Centro Sul, Ed. Dr. Albert Sabin - Cuiabá/MT','https://goo.gl/maps/ZBhFXc3cMkPCvMaA7'],
                ['ms', 'Escritório de Advocacia em Campo Grande/MS', 'Rua Eduardo Santos Pereira, 1550 sala 02, Bairro Vila Rosa - Campo Grande/MS','https://goo.gl/maps/djTG4wgTgt7xqesP6']
            ]

            states_map.forEach((item) => {
                
                for(let n = 0; n < states.length; n++){
                    if(item.getAttribute('id') == states[n]){
                        item.querySelector('path').style.fill = "#485D6F"
                    }
                }
                
            })

            states_map.forEach((item, index) => {
                item.addEventListener('click', () => {

                    let clicked_state = item.getAttribute('id');
                    let units_office_map = document.querySelector('.units_office_map');

                    let state_not_exist = 0;
                    
                    states_map.forEach((item2) => {
                        for(let n = 0; n < states.length; n++){
                            if(item2.getAttribute('id') == states[n]){
                                item2.querySelector('path').style.fill = "#485D6F";

                                if(item2.getAttribute('id') == clicked_state){
                                    item2.querySelector('path').style.fill = "#2D3740";
                                    units_office_map.style.height = "auto"
                                    add_search_offices(item2.getAttribute('id'), item2.getAttribute('data-uf'));
                                    state_not_exist++;
                                }
                                
                            } 
                        }
                        
                    })

                    if(state_not_exist == 0){
                        units_office_map.style.height = "0"
                    }
                    
                    console.log('id: '+item.getAttribute('id'));

                });
            });

            function add_search_offices(uf, title_uf){

                let units_office_map = document.querySelector('.units_office_map');
                
                let units_office_map_content = document.querySelector('.units_office_map_content');

                units_office_map_content.innerHTML = "";

                document.getElementById('title_uf').innerHTML = title_uf;

                console.log(offices_available[0][0]);

                for(let n = 0; n < offices_available.length; n++){

                    if(offices_available[n][0] == uf){
                        
                        let card_office_search = document.createElement('article');
                        card_office_search.classList.add('card_office_search');
                        card_office_search.innerHTML = `<a href="${offices_available[n][3]}" target="_blank"><h3 class="subtitle-default">${offices_available[n][1]}:</h3><p class="desc-default">${offices_available[n][2]}</p></a>`;

                        units_office_map_content.append(card_office_search);

                        units_office_map.scrollIntoView({
                            behavior: 'smooth'
                        });

                    }

                }

            }
            