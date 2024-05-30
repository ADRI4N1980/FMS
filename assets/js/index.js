
$(function() {

    $(".donate-link").on('click', function() {
        window.location.href = 'https://www1.caixabank.es/apl/donativos/crowdfunding_es.html';
    });

    $(".go-inicio, .go-donaciones, .go-contacto, .go-proyectos").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top-65
            }, 800);

        }

    });

    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop() + 98.5;
        
        // Recorre cada div y verifica si está visible en la ventana
        $('.active-div').each(function() {
            var divOffsetTop = $(this).offset().top;
            var divHeight = $(this).outerHeight();
            
            // Comprueba si la parte superior del div está dentro de la ventana
            if (scrollTop >= divOffsetTop && scrollTop < divOffsetTop + divHeight) {
                // Obtiene el ID del div actual
                var currentDivId = $(this).attr('id');
                
                // Activa el enlace correspondiente en el navbar
                $('.navbar a').removeClass('active');
                $('.navbar a[href="#' + currentDivId + '"]').addClass('active');
            }
        });
    });

});
