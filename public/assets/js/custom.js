jQuery(document).ready(function() {


          $('.top-click a i.fa-minus').hide();
          $('.top-bar').hide();
          $('.top-click a i.fa-plus').click(function(){
            $(this).hide();
            $('.top-click a i.fa-minus').show();
            $('.top-bar').slideDown();
          });
          $('.top-click a i.fa-minus').click(function(){
            $(this).hide();
            $('.top-click a i.fa-plus').show();
            $('.top-bar').slideUp();
          });

          // filters
          $('.filters li').click(function() {
            $(".filters li.active").removeClass("active");
            $(this).addClass('active');
        });

          //mixitup
          $(function(){
              $('.works').mixItUp();
          });


});