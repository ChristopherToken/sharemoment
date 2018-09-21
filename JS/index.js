 //nav black effect
 $(window).on("scroll", function() {
     if ($(this).scrollTop() > 10) {
         $("nav.navbar").addClass("mybg-dark");
         $("nav.navbar").addClass("navbar-shrink");


     } else {
         $("nav.navbar").removeClass("mybg-dark");
         $("nav.navbar").removeClass("navbar-shrink");

     }
 });


 $(document).ready(function() {
     var $lightbox = $('#lightbox');

     $('[data-target="#lightbox"]').on('click', function(event) {
         var $img = $(this).find('img'),
             src = $img.attr('src'),
             alt = $img.attr('alt'),
             css = {
                 'maxWidth': $(window).width() - 100,
                 'maxHeight': $(window).height() - 100
             };

         $lightbox.find('.close').addClass('hidden');
         $lightbox.find('img').attr('src', src);
         $lightbox.find('img').attr('alt', alt);
         $lightbox.find('img').css(css);
     });

     $lightbox.on('shown.bs.modal', function(e) {
         var $img = $lightbox.find('img');

         $lightbox.find('.modal-dialog').css({
             'width': $img.width()
         });
         $lightbox.find('.close').removeClass('hidden');
     });
 });