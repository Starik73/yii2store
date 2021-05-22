function showCart(cart) {
    $('#modal-cart .modal-body').html(cart);
    $('#modal-cart').modal();
    let cartSum = $('#cart-sum').html() ? $('#cart-sum').html() : '$0';
    if (cartSum) {
        $('.cart-sum').html(cartSum);
    }
}

function getCart() {
    $.get({
        url: 'cart/show',
        success: function (res) {
            if (!res) { alert('Ошибка добавления товара в корзину!..') };
            showCart(res);
        },
        error: function(){
            alert('Error!');
        }
    });
    return false;
}

function clearCart() {
    $.get({
        url: 'cart/clear',
        success: function (res) {
            if (!res) { alert('Ошибка добавления товара в корзину!..') };
            showCart(res);
        },
    });
    return false;
}

jQuery(document).ready(function ($) {

    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    });

    var navoffeset = $(".agileits_header").offset().top;
    $(window).scroll(function () {
        var scrollpos = $(window).scrollTop();
        if (scrollpos >= navoffeset) {
            $(".agileits_header").addClass("fixed");
        } else {
            $(".agileits_header").removeClass("fixed");
        }
    });

    $(".dropdown").hover(
        function () {
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function () {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );

    $().UItoTop({ easingType: 'easeOutQuart' });

    $('#example').okzoom({
        width: 150,
        height: 150,
        border: "1px solid black",
        shadow: "0 0 5px #000"
    });

    $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });

    /* Cart */

    $(".add-to-cart").on("click", function () {
        console.log($(this).text());
        let id = $(this).data("id");
        $.get({
            url: 'cart/add',
            data: { id: id },
            success: function (res) {
                if (!res) { alert('Ошибка добавления товара в корзину!..') };
                showCart(res);
            },
            error: function () {
                alert('Error! Try again later');
            }
        });
        return false;
    });

    $("#modal-cart .modal-body").on("click", ".del-item", function () {
        let id = $(this).data("id");
        $.get({
            url: 'cart/del-item',
            data: { id: id },
            success: function (res) {
                if (!res) { alert('Ошибка добавления товара в корзину!..') };
                let now_location = document.location.pathname;
                if (now_location == '/cart/checkout') {
                    location = 'cart/checkout';
                };
                showCart(res);
            },
            error: function () {
                alert('Error! Try again later');
            }
        });
    });
    /* Cart */

});



