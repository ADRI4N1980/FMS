// idioma.js

const languages = {
    "ca": {
        "donar": "Donar",
        "inicio": "Inici",
        "donaciones": "Donacions",
        "que_hacemos": "Què feim",
        "contacto": "Contacte",
        "descubre_mas": "Descobreix més",
        "lema_1": "<strong>Crowdfunding solidari</strong>",
        "lema_2": "<strong>FMS + Caixabank</strong>",
        "nuestras_causas": "La nostra causa",
        "participa": "Participa! Dona ara i per cada 1€ dipositat, l'Obra Social \"la Caixa\" aportarà 1€ més!",
        "dona_ahora": "Dona ara via CXBNK",
        "recaudado": "Recaptat",
        "objetivo": "Objectiu",
        "creado": "Creat:",
        "fecha_inicio": "25 de juny, 2024",
        "localizacion": "Localització:",
        "causa_lema": "Un gest, un carro, un somriure",
        "causa_texto": "Programa d'ajuda a l'alimentació dels més vulnerables. Dissenyat per a oferir un suport essencial subministrant nutrició i constituint un suport vital per al creixement i desenvolupament saludable de les persones.",
        "hazte_voluntario": "Fes-te voluntari",
        "voluntario": "Voluntari",
        "titulo_bloque_voluntario": "Tenim actualment 18 programes actius, en els quals podries encaixar en un d'ells",
        "texto_bloque_voluntario": "En la Fundació Monti-Sión Solidària un total de 1.947 famílies es beneficien del projecte, gairebé 5.000 persones, de les quals 1.100 són menors de 10 anys. Els nostres programes són: Repartiment d'aliments, Alimentació per a nounats, Berenar solidari per a nens i adolescents, Cistella per a nounats, Armari infantil, Sensibilitat en centres escolars, Coral solidària, Atenció a la gent gran, Motxilla solidària, Cap nen sense joguina, Clínica jurídica, Assessorament social i personal, Cursos de formació i borsa de treball, Ludoteca infantil, Hospitalitat... Per a més informació visita la nostra web.",
        "unete_ahora": "Uneix-te ara",
        "ultimos_eventos": "Darrers esdeveniments <br> a la FMS",
        "texto_que_hacemos": "A la Fundació Monti-Sión Solidària comptem amb una agenda variada d'activitats i esdeveniments. Visita les nostres xarxes socials per a assabentar-te de totes les novetats.",
        "ver_todos": "Veure tots",
        "titulo_salud_bucodental": "Visita Marga Prohens (Goib)",
        "salud_bucodental": "Salut bucodental",
        "ok_mobility": "Visita Othman Ktiri (Ok Mobility)",
        "clinica_juridica": "Clínica jurídica",
        "nuevo_programa": "Nou programa!",
        "peluqueria": "Perruqueria solidària",
        "ropero_solidario": "Rober solidari",
        "revisiones": "Revisions",
        "salud_visual": "Salut visual",
        "fira_solidaria": "Fira solidària",
        "jugueteria": "Botiga de joguines",
        "dona_hoy": "Dona avui",
        "bloque_donar": "Dona ara i obtindràs al moment el teu certificat fiscal.",
        "bloque_donar_2": "L'import íntegre del recaptat es destina al programa seleccionat.",
        "bloque_donar_3": "Té alguna pregunta sobre la donació?",
        "bloque_donar_4": "Cridi ara:",
        "lema_footer": "Missió: acollir, protegir, promoure, integrar. Fundació d'ajuda integral a les persones Monti-Sion Solidària.",
        "informacion_contacto": "Informació de contacte",
        "direccion": "Dirección:",
        "telefono": "Telèfon:",
        "progreso_causas": "Progrés de les causes",
        "diseñado_por": "Dissenyat per",
        "terminos": "Termes",
        "privacidad": "Privacitat",
        "ayuda": "Ajuda",
        "con_tarjeta": "Amb targeta",
        "cuenta_caixabank": "Amb compte CaixaBank",
        "aportar": "Aportar:",
        "obra_social": "Obra Social \"la Caixa\"",
        "resto_aportaciones": "Resto aportacions",
        "pendiente": "Pendent",
        "total_recaudado": "Total recaptat",
        "aportaciones": "Aportacions",
        "quedan": "Queden",
        "del": "Del",
        "al": "al",
        "dias": "dies",
        "bizum": "Donatiu Bizum a ONG 09776"
    },
    "es": {
        "donar": "Donar",
        "inicio": "Inicio",
        "donaciones": "Donaciones",
        "que_hacemos": "Qué hacemos",
        "contacto": "Contacto",
        "descubre_mas": "Descubre más",
        "lema_1": "<strong>Crowdfunding solidario</strong>",
        "lema_2": "<strong>FMS + Caixabank</strong>",
        "nuestras_causas": "Nuestra causa",
        "participa": "¡Participa! ¡Dona ahora y por cada 1€ depositado, la Obra Social \"la Caixa\" aportará 1€ más!",
        "dona_ahora": "Dona ahora vía CXBNK",
        "recaudado": "Recaudado",
        "objetivo": "Objetivo",
        "creado": "Creado:",
        "fecha_inicio": "25 junio, 2024",
        "localizacion": "Localización:",
        "causa_lema": "Un gesto, un carro, una sonrisa",
        "causa_texto": "Programa de ayuda a la alimentación de los más vulnerables. Diseñado para ofrecer un apoyo esencial suministrando nutrición y constituyendo un apoyo vital para el crecimiento y desarrollo saludable de las personas.",
        "hazte_voluntario": "Hazte voluntario",
        "voluntario": "Voluntario",
        "titulo_bloque_voluntario": "Tenemos actualmente 18 programas activos, en los cuales podrías encajar en uno de ellos",
        "texto_bloque_voluntario": "En la Fundación Monti-Sión Solidària un total de 1.947 familias se benefician del proyecto, casi 5.000 personas, de las cuales 1.100 son menores de 10 años. Nuestros programas son: Reparto de alimentos, Alimentación para recién nacidos, Merienda solidaria para niños y adolescentes, Cesta para recién nacidos, Armario infantil, Sensibilidad en centros escolares, Coral solidaria, Atención a la gente mayor, Mochila solidaria, Ningún niño sin juguete, Clínica jurídica, Asesoramiento social y personal, Cursos de formación y bolsa de trabajo, Ludoteca infantil, Hospitalidad... Para más información visita nuestra web.",
        "unete_ahora": "Únete ahora",
        "ultimos_eventos": "Últimos eventos <br> en la FMS",
        "texto_que_hacemos": "En la Fundació Monti-Sión Solidària contamos con una agenda variada de actividades y eventos. Visita nuestras redes sociales para enterarte de todas las novedades.",
        "ver_todos": "Ver todos",
        "titulo_salud_bucodental": "Visita Marga Prohens (Goib)",
        "salud_bucodental": "Salud bucodental",
        "ok_mobility": "Visita Othman Ktiri (Ok Mobility)",
        "clinica_juridica": "Clínica jurídica",
        "nuevo_programa": "¡Nuevo programa!",
        "peluqueria": "Peluquería solidaria",
        "ropero_solidario": "Ropero solidario",
        "revisiones": "Revisiones",
        "salud_visual": "Salud visual",
        "fira_solidaria": "Feria solidaria",
        "jugueteria": "Juguetería",
        "dona_hoy": "Dona hoy",
        "bloque_donar": "Dona ahora y obtendrás al momento tu certificado fiscal.",
        "bloque_donar_2": "El importe íntegro de lo recaudado se destina al programa seleccionado.",
        "bloque_donar_3": "¿Tiene alguna pregunta sobre la donación?",
        "bloque_donar_4": "Llame ahora:",
        "lema_footer": "Misión: acoger, proteger, promover, integrar. Fundación de ayuda integral a las personas Monti-Sion Solidària.",
        "informacion_contacto": "Información de contacto",
        "direccion": "Dirección:",
        "telefono": "Teléfono:",
        "progreso_causas": "Progreso de las causas",
        "diseñado_por": "Diseñado por",
        "terminos": "Términos",
        "privacidad": "Privacidad",
        "ayuda": "Ayuda",
        "con_tarjeta": "Con tarjeta",
        "cuenta_caixabank": "Con cuenta CaixaBank",
        "aportar": "Aportar:",
        "obra_social": "Obra Social \"la Caixa\"",
        "resto_aportaciones": "Resto aportaciones",
        "pendiente": "Pendiente",
        "total_recaudado": "Total recaudado",
        "aportaciones": "Aportaciones",
        "quedan": "Quedan",
        "del": "Del",
        "al": "al",
        "dias": "días",
        "bizum": "Donativo Bizum a ONG 09776"
    },
    "en": {
        "donar": "Donate",
        "inicio": "Home",
        "donaciones": "Donations",
        "que_hacemos": "What we do",
        "contacto": "Contact",
        "descubre_mas": "Discover more",
        "lema_1": "<strong>Solidary Crowdfunding</strong>",
        "lema_2": "<strong>FMS + Caixabank</strong>",
        "nuestras_causas": "Our cause",
        "participa": "Take part! Donate now and for every €1 you deposit, Obra Social \"la Caixa\" will contribute €1 more!",
        "dona_ahora": "Donate now by CXBNK",
        "recaudado": "Collected",
        "objetivo": "Goal",
        "creado": "Created:",
        "fecha_inicio": "June 25th, 2024",
        "localizacion": "Location:",
        "causa_lema": "A gesture, a cart, a smile",
        "causa_texto": "Food aid program for the most vulnerable. Designed to provide essential support by supplying nutrition and constituting vital support for the healthy growth and development of individuals.",
        "hazte_voluntario": "Become a volunteer",
        "voluntario": "Volunteer",
        "titulo_bloque_voluntario": "We currently have 18 active programs, in which you could fit into one of them",
        "texto_bloque_voluntario": "At the Monti-Sión Solidària Foundation, a total of 1,947 families benefit from the project, almost 5,000 people, of which 1,100 are under 10 years old. Our programs are: Food distribution, Food for newborns, Solidarity snack for children and adolescents, Basket for newborns, Children's wardrobe, Sensitivity in schools, Solidarity choir, Elderly care, Solidarity backpack, No child without a toy, Legal clinic, Social and personal advice, Training courses and job bank, Children's playroom, Hospitality... For more information visit our website.",
        "unete_ahora": "Join now",
        "ultimos_eventos": "Latest events <br> at FMS",
        "texto_que_hacemos": "At the Monti-Sión Solidària Foundation we have a varied program of activities and events. Visit our social networks to find out all the news.",
        "ver_todos": "See all",
        "titulo_salud_bucodental": "Visit Marga Prohens (Goib)",
        "salud_bucodental": "Oral health",
        "ok_mobility": "Visit Othman Ktiri (Ok Mobility)",
        "clinica_juridica": "Legal clinic",
        "nuevo_programa": "New programme!",
        "peluqueria": "Solidarity hairdressing",
        "ropero_solidario": "Solidarity wardrobe",
        "revisiones": "Revisions",
        "salud_visual": "Visual health",
        "fira_solidaria": "Solidarity fair",
        "jugueteria": "Toy Shop",
        "dona_hoy": "Donate today",
        "bloque_donar": "Donate now and you will receive your tax certificate instantly.",
        "bloque_donar_2": "The entire amount collected is allocated to the selected program.",
        "bloque_donar_3": "Do you have any questions about the donation?",
        "bloque_donar_4": "Call now:",
        "lema_footer": "Mission: welcome, protect, promote, integrate. Comprehensive aid foundation for people Monti-Sion Solidària.",
        "informacion_contacto": "Contact Information",
        "direccion": "Address:",
        "telefono": "Phone:",
        "progreso_causas": "Progress of the causes",
        "diseñado_por": "Designed by",
        "terminos": "Terms",
        "privacidad": "Privacy",
        "ayuda": "Help",
        "con_tarjeta": "By card",
        "cuenta_caixabank": "With CaixaBank account",
        "aportar": "Contribute:",
        "obra_social": "\"La Caixa\" Welfare Projects",
        "resto_aportaciones": "Other contributions",
        "pendiente": "Pending",
        "total_recaudado": "Total collected",
        "aportaciones": "Contributions",
        "quedan": "Remaining",
        "del": "From",
        "al": "to",
        "dias": "days",
        "bizum": "Donation Bizum to NGO 09776"
    }
};

$(document).ready(function() {

    var basePath = window.location.pathname.split('/').slice(0, -1).join('/') + '/';
    var linkLaCaixa = "https://www1.caixabank.es/apl/donativos/crowdfunding_es.html?DON_codigoCausa=737";
    var linkTrgt = "https://www1.caixabank.es/apl/donativos/detalle_es.html?DON_codigoCausa=737";

    $('#selectorIdioma a').click(function(event) {
        event.preventDefault();
        var lang = $(this).data('lang');
        $('.flag_lang').attr('src', basePath + '/crowdfundingWeb/img/flags/' + lang + '.png');
        localStorage.setItem('lang', lang);

        changeLangText(lang);
    });

    function changeLangText(lang) {
        for (let key in languages[lang]) {
            $('.lang_' + key).html(languages[lang][key]);
        }
        if (lang == 'ca') {
            $('.link_la_caixa').attr('href', "https://www1.caixabank.es/apl/donativos/crowdfunding_ca.html?DON_codigoCausa=737");
            $('.link_trgt').attr('href', "https://www1.caixabank.es/apl/donativos/detalle_ca.html?DON_codigoCausa=737");
        } else {
            $('.link_la_caixa').attr('href', linkLaCaixa);
            $('.link_trgt').attr('href', linkTrgt);
        }
    }

    // Función para cargar el idioma desde localStorage
    function initializeLanguage() {
        let savedLang = localStorage.getItem('lang') || 'ca'; // Idioma por defecto
        changeLangText(savedLang);
        $('.flag_lang').attr('src', basePath + '/crowdfundingWeb/img/flags/' + savedLang + '.png');
    }

    // Llamar a la función para cargar el idioma al cargar la página
    initializeLanguage();
});
