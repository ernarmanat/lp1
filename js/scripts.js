//$(function(){
//    var $range = $("#range_1");
//
//    $range.ionRangeSlider({
//        type: "single",
//        min: 100,
//        max: 10000,
//        from: 1000
//    });
//
//    $range.on("change", function () {
//        var $this = $(this),
//            value = $this.prop("value");
//        $( "#count1" ).html( value );
//        var point1 = $("#count1").html();
//        var point2 = $("#count2").html();
//        var point3 = $("#count3").html();
//        $( "#counttext1" ).html( point1 * point2 * point3 /100 + ' руб.');
//        $( "#counttext2" ).html( point1 * point2 * point3 / 100 * 31 + ' руб.');
//        $( "#counttext3" ).html( point1 * point2 * point3 / 100 * 365 + ' руб.');
//    });
//
//    var $range2 = $("#range_2");
//
//    $range2.ionRangeSlider({
//        type: "single",
//        min: 100,
//        max: 10000,
//        from: 5000
//    });
//
//    $range2.on("change", function () {
//        var $this = $(this),
//            value2 = $this.prop("value");
//        $( "#count2" ).html( value2 );
//        var point1 = $("#count1").html();
//        var point2 = $("#count2").html();
//        var point3 = $("#count3").html();
//        $( "#counttext1" ).html( point1 * point2 * point3 / 100 + ' руб.');
//        $( "#counttext2" ).html( point1 * point2 * point3 / 100 * 31 + ' руб.');
//        $( "#counttext3" ).html( point1 * point2 * point3 / 100 * 365 + ' руб.');
//    });
//
//    var $range3 = $("#range_3");
//
//    $range3.ionRangeSlider({
//        type: "single",
//        min: 7,
//        max: 100,
//        from: 30
//    });
//
//    $range3.on("change", function () {
//        var $this = $(this),
//            value2 = $this.prop("value");
//        $( "#count3" ).html( value2 );
//        var point1 = $("#count1").html();
//        var point2 = $("#count2").html();
//        var point3 = $("#count3").html();
//        $( "#counttext1" ).html( point1 * point2 * point3 /100 + ' руб.');
//        $( "#counttext2" ).html( point1 * point2 * point3 / 100 * 31 + ' руб.');
//        $( "#counttext3" ).html( point1 * point2 * point3 / 100 * 365 + ' руб.');
//    });
//});
// ymaps.ready(function () {
//     var myMap = new ymaps.Map('map', {
//             center: [43.248020, 76.869106],
//             zoom: 17
//         }, {
//             searchControlProvider: 'yandex#search'
//         }),

//         // Создаём макет содержимого.
//         MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
//             '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
//         ),

//         myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
//             hintContent: 'Собственный значок метки',
//             balloonContent: 'Это красивая метка'
//         }, {
//             // Опции.
//             // Необходимо указать данный тип макета.
//             iconLayout: 'default#image',
//             // Своё изображение иконки метки.
//             iconImageHref: '../ymap.png',
//             // Размеры метки.
//             iconImageSize: [30, 42],
//             // Смещение левого верхнего угла иконки относительно
//             // её "ножки" (точки привязки).
//             iconImageOffset: [-5, -38]
//         }),

//         myPlacemarkWithContent = new ymaps.Placemark([43.248020, 76.869106], {
//             hintContent: 'Собственный значок метки с контентом',
//             balloonContent: 'А эта — новогодняя',
//             iconContent: ''
//         }, {
//             // Опции.
//             // Необходимо указать данный тип макета.
//             iconLayout: 'default#imageWithContent',
//             // Своё изображение иконки метки.
//             iconImageHref: 'images/ball.png',
//             // Размеры метки.
//             iconImageSize: [48, 48],
//             // Смещение левого верхнего угла иконки относительно
//             // её "ножки" (точки привязки).
//             iconImageOffset: [-24, -24],
//             // Смещение слоя с содержимым относительно слоя с картинкой.
//             iconContentOffset: [15, 15],
//             // Макет содержимого.
//             iconContentLayout: MyIconContentLayout
//         });

//     myMap.geoObjects
//         .add(myPlacemark)
//         .add(myPlacemarkWithContent);
// });

var options_num_rur =  {
		precision : 0,
		thousand: " "
	};
$(function(){

    var point1 = parseInt($("#storlek_testet").val(), 10);
    var point2 = parseInt($("#storlek_testet2").val(), 10);
    var point3 = parseInt($("#storlek_testet3").val(), 10);
    /* $( "#counttext1" ).html( (point1 * point2 * point3 /100) + ' руб.');
    $( "#counttext2" ).html( (point1 * point2 * point3 / 100 * 31) + ' руб.');
    $( "#counttext3" ).html( (point1 * point2 * point3 / 100 * 365) + ' руб.'); */
    $( "#counttext1" ).html(accounting.formatNumber(point1 * point2 * point3 /100 , options_num_rur) + ' тг.');
            $( "#counttext2" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 31, options_num_rur) + ' тг.');
            $( "#counttext3" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 365, options_num_rur) + ' тг.');

    $( "#storlekslider" ).slider({
        range: "max",
        min: 10,
        max: 10000,
        value: 1000,
        slide: function( event, ui ) {
            $( "#storlek_testet" ).val( ui.value );
            $(ui.value).val($('#storlek_testet').val());
            var point1 = parseInt($("#storlek_testet").val(), 10);
            var point2 = parseInt($("#storlek_testet2").val(), 10);
            var point3 = parseInt($("#storlek_testet3").val(), 10);
            /* $( "#counttext1" ).html( (point1 * point2 * point3 /100) + ' руб.');
            $( "#counttext2" ).html( (point1 * point2 * point3 / 100 * 31) + ' руб.');
            $( "#counttext3" ).html( (point1 * point2 * point3 / 100 * 365) + ' руб.'); */
            $( "#counttext1" ).html(accounting.formatNumber(point1 * point2 * point3 /100 , options_num_rur) + ' тг.');
            $( "#counttext2" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 31, options_num_rur) + ' тг.');
            $( "#counttext3" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 365, options_num_rur) + ' тг.');
        }
    });
    $("#storlek_testet").keyup(function() {
        $("#storlekslider").slider("value" , $(this).val())
    });
    var min = $( "#storlekslider" ).slider( "option", "min" );
    var max = $( "#storlekslider" ).slider( "option", "max" );
    $('#box-min1').append(min);
    $('#box-max1').append(max);

    $( "#storlekslider2" ).slider({
        range: "max",
        min: 100,
        max: 35000,
        value: 8000,
        slide: function( event, ui ) {
            $( "#storlek_testet2" ).val( ui.value );
            $(ui.value).val($('#storlek_testet2').val());
            var point1 = parseInt($("#storlek_testet").val(), 10);
            var point2 = parseInt($("#storlek_testet2").val(), 10);
            var point3 = parseInt($("#storlek_testet3").val(), 10);
           /*  $( "#counttext1" ).html( (point1 * point2 * point3 /100) + ' руб.');
            $( "#counttext2" ).html( (point1 * point2 * point3 / 100 * 31) + ' руб.');
            $( "#counttext3" ).html( (point1 * point2 * point3 / 100 * 365) + ' руб.'); */
            $( "#counttext1" ).html(accounting.formatNumber(point1 * point2 * point3 /100 , options_num_rur) + ' тг.');
            $( "#counttext2" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 31, options_num_rur) + ' тг.');
            $( "#counttext3" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 365, options_num_rur) + ' тг.');
        }
    });
    $("#storlek_testet2").keyup(function() {
        $("#storlekslider2").slider("value" , $(this).val())
    });
    var min2 = $( "#storlekslider2" ).slider( "option", "min" );
    var max2 = $( "#storlekslider2" ).slider( "option", "max" );
    $('#box-min2').append(min2);
    $('#box-max2').append(max2);

    $( "#storlekslider3" ).slider({
        range: "max",
        min: 1,
        max: 100,
        value: 1,
        slide: function( event, ui ) {
            $( "#storlek_testet3" ).val( ui.value );
            $(ui.value).val($('#storlek_testet3').val());
            var point1 = parseInt($("#storlek_testet").val(), 10);
            var point2 = parseInt($("#storlek_testet2").val(), 10);
            var point3 = parseInt($("#storlek_testet3").val(), 10);
            /* $( "#counttext1" ).html( (point1 * point2 * point3 /100) + ' руб.');
            $( "#counttext2" ).html( (point1 * point2 * point3 / 100 * 31) + ' руб.');
            $( "#counttext3" ).html( (point1 * point2 * point3 / 100 * 365) + ' руб.'); */
            $( "#counttext1" ).html(accounting.formatNumber(point1 * point2 * point3 /100 , options_num_rur) + ' тг.');
            $( "#counttext2" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 31, options_num_rur) + ' тг.');
            $( "#counttext3" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 365, options_num_rur) + ' тг.');
        }
    });
    $('.count').keyup(function() {
        var point1 = parseInt($("#storlek_testet").val(), 10);
            var point2 = parseInt($("#storlek_testet2").val(), 10);
            var point3 = parseInt($("#storlek_testet3").val(), 10);
            /* $( "#counttext1" ).html( (point1 * point2 * point3 /100) + ' руб.');
            $( "#counttext2" ).html( (point1 * point2 * point3 / 100 * 31) + ' руб.');
            $( "#counttext3" ).html( (point1 * point2 * point3 / 100 * 365) + ' руб.'); */
            $( "#counttext1" ).html(accounting.formatNumber(point1 * point2 * point3 /100 , options_num_rur) + ' тг.');
            $( "#counttext2" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 31, options_num_rur) + ' тг.');
            $( "#counttext3" ).html(accounting.formatNumber(point1 * point2 * point3 /100 * 365, options_num_rur) + ' тг.');
    });
    $("#storlek_testet3").keyup(function() {
        $("#storlekslider3").slider("value" , $(this).val())
    });
    var min3 = $( "#storlekslider3" ).slider( "option", "min" );
    var max3 = $( "#storlekslider3" ).slider( "option", "max" );
    $('#box-min3').append(min3);
    $('#box-max3').append(max3);

});




$( "a .dots" ).click(
    function() {
        $( 'a .dots' ).removeClass( "check" );
        $( this ).addClass( "check" );
    }
);


$( ".box-pict" ).hover(
    function() {
        $( this ).addClass( "show" );
        $('.show .modal-box').fadeIn(100);
    }, function() {
        $('.show .modal-box').fadeOut(100);
        $( this ).removeClass( "show" );
    }
);

$('.colum').hover(
    function() {
        var nameid = $(this).attr('id');
        var nameid2 = '#'+nameid+'2';
        $( '.columhover' ).removeClass( 'active');
        $( nameid2 ).addClass( 'active');
    },
    function() {
        var nameid = $(this).attr('id');
        var nameid2 = '#'+nameid+'2';
        $( nameid2 ).removeClass( 'active');
    }
);


$("#flexiselDemo3").flexisel({
    visibleItems: 4,
    animationSpeed: 1000,
    autoPlay: true,
    autoPlaySpeed: 3000,
    pauseOnHover: true,
    enableResponsiveBreakpoints: true,
    responsiveBreakpoints: {
        portrait: {
            changePoint:480,
            visibleItems: 1
        },
        landscape: {
            changePoint:640,
            visibleItems: 2
        },
        tablet: {
            changePoint:768,
            visibleItems: 3
        }
    }
});



$(function(){
    var mnfpict = $( ".section7" ).height();
    $('.section7 .right').css('top', mnfpict - 164);
});



//$(function(){
//    $(window).resize(function() {
//        var banner = $(window).height();
//        $('.banner').css('height', banner - 60);
//        $('.carousel-inner').css('height', banner -100);
////      $('.pict-phone').css('top', banner - 660);
//    })
//    var banner = $(window).height();
//    $('.banner').css('height', banner - 100);
//    $('.carousel-inner').css('height', banner -100);
//    //    $('.pict-phone').css('top', banner - 660);
//});



$('.carousel').carousel({
    interval: 5000
})



if ( $('.item.active').is('#item1')) {
    var page11 = new countUp("page11", 0, 145, 0, 2.5);
    page11.start();
    var page12 = new countUp("page12", 0, 3, 0, 2.5);
    page12.start();
    var page13 = new countUp("page13", 0, 5, 0, 2.5);
    page13.start();
    var page14 = new countUp("page14", 0, 79, 0, 2.5);
    page14.start();
}

$('#carousel-banner').on('slid.bs.carousel', function () {
    if ( $('.item.active').is('#item1')) {
        var page11 = new countUp("page11", 0, 145, 0, 2.5);
        page11.start();
        var page12 = new countUp("page12", 0, 3, 0, 2.5);
        page12.start();
        var page13 = new countUp("page13", 0, 5, 0, 2.5);
        page13.start();
        var page14 = new countUp("page14", 0, 79, 0, 2.5);
        page14.start();
    }

    if ( $('.item.active').is('#item3')) {
        var page31 = new countUp("page31", 0, 145, 0, 2.5);
        page31.start();
        var page32 = new countUp("page32", 0, 12, 0, 2.5);
        page32.start();
        var page33 = new countUp("page33", 0, 18, 0, 2.5);
        page33.start();
    }
});


$('#top-btn').click(function () {
    $('body, html').animate({
        scrollTop: 0
    }, 500);
});

$('.logo').click(function () {
    $('body, html').animate({
        scrollTop: 0
    }, 500);
});

$('.right-box a[href^="#"]').click(function(){
//Сохраняем значение атрибута href в переменной:
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top - 80}, 800);
    return false;
});

$('.menu a[href^="#"]').click(function(){
//Сохраняем значение атрибута href в переменной:
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top - 80}, 800);
    return false;
});


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var banner = $( "#banner").position().top;
    var calc = $( "#calc").position().top;
    var map = $( "#map").position().top;
    var section2 = $( "#section2").position().top;
    var section3 = $( "#section3").position().top;
    var section4 = $( "#section4").position().top;
    var section5 = $( "#section5").position().top;
    var section6 = $( "#section6").position().top;
    var section7 = $( "#section7").position().top;
    $( 'a .dots' ).removeClass( "check" );
    if (scroll >= banner - 80) {
        $("a #bannerd").addClass("check");
    }
    if (scroll >= section2 - 90) {
        $( 'a .dots' ).removeClass( "check" );
        $("a #section2d").addClass("check");
    }
    if (scroll >= section3 - 90) {
        $( 'a .dots' ).removeClass( "check" );
        $("a #section3d").addClass("check");
    }
    if (scroll >= section4 - 90) {
        $( 'a .dots' ).removeClass( "check" );
        $("a #section4d").addClass("check");
    }
    if (scroll >= section5 - 90) {
        $( 'a .dots' ).removeClass( "check" );
        $("a #section5d").addClass("check");
    }
    if (scroll >= calc - 90) {
        $( 'a .dots' ).removeClass( "check" );
        $("a #calcd").addClass("check");
    }
    if (scroll >= section6 - 90) {
        $( 'a .dots' ).removeClass( "check" );
        $("a #section6d").addClass("check");
    }
    if (scroll >= section7 - 90) {
        $( 'a .dots' ).removeClass( "check" );
        $("a #section7d").addClass("check");
    }
    if (scroll >= map - 500) {
        $( 'a .dots' ).removeClass( "check" );
        $("a #mapd").addClass("check");
    }

});

$(function(){
    $( '#modalDialog2' ).addClass( "hideclass" );
    /* $('#openModal a').click(function () {
        $( '#modalDialog1' ).addClass( "hideclass" );
        $( '#modalDialog2' ).addClass('showclass');
    }); */
    
    $('.submit-form-one').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Обязательное поле",
                email: "Введите правильный email"
            },
            phone: {
                required: "Обязательное поле",
            }
        },
        submitHandler: function(form) {
             $(form).ajaxSubmit(function() { 
                $( '#modalDialog1' ).addClass( "hideclass" );
                $( '#modalDialog2' ).addClass('showclass');

                setTimeout(function() {
                        //location.reload();
                        location.href="http://lp.sitebuild.kz/";
                    }, 2500
                );
            }); 
          }
   });
   $('.submit-form-two').validate({
            rules: {
            name: {
                required: true,
            },
            phone: {
                required: true
            }
        },
        submitHandler: function(form) {
             $(form).ajaxSubmit(function() { 
                $('#openModal').addClass('show--sc');
                $( '#modalDialog1' ).addClass( "hideclass" );
                $( '#modalDialog2' ).addClass('showclass');  

                setTimeout(function() {
                        location.href="http://lp.sitebuild.kz/";
                    }, 2500
                );
            }); 
          }
   });
   
   $('.submit-form-three').validate({
            rules: {
            name: {
                required: true,
            },
            phone: {
                required: true
            }
        },
        submitHandler: function(form) {
             $(form).ajaxSubmit(function() { 
                $('#openModal').addClass('show--sc');
                $( '#modalDialog1' ).addClass( "hideclass" );
                $( '#modalDialog2' ).addClass('showclass');

                setTimeout(function() {
                        //location.reload();
                        location.href="http://lp.sitebuild.kz/";
                    }, 2500
                );
            }); 
          }
   });
   $('.closed').click(function(){
        $('#openModal').removeClass('show--sc');
   });
   
   $('.byu').click(function(){
        $('#packet').val($(this).attr('data-packet'));
   });
   /* $('.submit-form-two').ajaxForm(function() { 
        $('#openModal').addClass('show--sc');
        $( '#modalDialog1' ).addClass( "hideclass" );
        $( '#modalDialog2' ).addClass('showclass'); 
   });  */

    //Lazy load
    $('.box-pict').mouseover(function(){
        var n = $(this).find('img').attr('src').substr(13, 1);
        $('#SectionModal'+ n +' .SectionModalInner-pict img').attr('src', 'img/section5/primer' + n + '.jpg');
    });
});
