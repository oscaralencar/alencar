jQuery(document).ready(function () {


    $('.top-click a i.fa-minus').hide();
    $('.top-bar').hide();
    $('.top-click a i.fa-plus').click(function () {
        $(this).hide();
        $('.top-click a i.fa-minus').show();
        $('.top-bar').slideDown();
    });
    $('.top-click a i.fa-minus').click(function () {
        $(this).hide();
        $('.top-click a i.fa-plus').show();
        $('.top-bar').slideUp();
    });

    // filters
    $('.filters li').click(function () {
        $(".filters li.active").removeClass("active");
        $(this).addClass('active');
    });

    //mixitup
    $(function () {
        $('.works').mixItUp();
    });

    $('#mailingForm').submit(function (e) {
        var email_mailing = $('#email_mailing').val();
        e.preventDefault();
        $.ajax(
            {
                url: "mailing/cadastrar",
                type: 'post',
                data: {
                    email : email_mailing
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).done(function() {
                    alert('Seu email foi cadastrado! Obrigado!')
            }).fail(function() {
                    alert( "Houve um erro. Tente novamente mais tarde." );
            });
    })

});