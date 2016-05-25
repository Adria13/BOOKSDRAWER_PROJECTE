//Background slider para la home
jQuery.fn.backgroundSlider = function () {
    this.each(function () {
        elem = jQuery(this);

        function repetir() {
            $active = elem.find("img.active");

            if ($active.length === 0) $active = jQuery('.background-slider img');

            // Las imágenes se muestran en el mismo orden en que están colocadas en la web
            var $next = $active.next().length ? $active.next() : elem.find('img:first');

            // Quitar el comentario para que pasen de forma aleatoria

            // var $sibs  = $active.siblings();
            // var rndNum = Math.floor(Math.random() * $sibs.length );
            // var $next  = $( $sibs[ rndNum ] );

            $active.addClass('last-active');

            $next.css({
                opacity: 0.0
            })
                .addClass('active')
                .animate({
                opacity: 1.0
            }, 1000, function () {
                $active.removeClass('active last-active');
            });
            setTimeout(repetir, 5000);
        }
        repetir();

    });
};
jQuery(document).ready(function ($) {
    $('.backgroundSlider').backgroundSlider();
});