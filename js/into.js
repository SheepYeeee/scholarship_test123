
    //多行溢出
    shave( '.info', 70, { 
        // 參數設定[註1]

        character: '...', // 隱藏文字的符號
        spaces: false 
    } );

    shave( '.info-post', 100, { 
        // 參數設定[註1]

        character: '...', // 隱藏文字的符號
        spaces: false 
    } );

    
    //banner輪播
    var sliderSwiper = new Swiper('#slider',{
        slidesPerView: 1,
        loop : true,
        //動態檢查器
        observer:true,
        //自動切換
        autoplay: {
            delay: 5000,
            stopOnLastSlide: false,
            disableOnInteraction: true,
        },
        //分頁器
        pagination: {
            el: '.slider-pagination',
            clickable: true,
        },
        //前進後退按鈕
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        //啟用鍵盤控制swiper切換
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
    }) 

    //AD輪播
    var adSwiper = new Swiper('#ad-slider',{
        slidesPerView: 1,
        loop : true,
        //動態檢查器
        observer:true,
        //自動切換
        autoplay: {
            delay: 3000,
            stopOnLastSlide: false,
            disableOnInteraction: true,
        },
        //分頁器
        pagination: {
            el: '.ad-pagination',
            clickable: true,
        },
        //前進後退按鈕
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        //啟用鍵盤控制swiper切換
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
    }) 


    function stellarParallax() {
        if ($(window).width() > 1024) {
            $.stellar();
        } else {
            $.stellar('destroy');
            $('.parallax').css('background-position', '');
        }
    }


    // 錨點跳轉動畫
    $(document).on("click", '.ui-navbar-nav .ui-nav-item a[href^="#"]', function(event) {
      event.preventDefault();

      $("html, body").animate(
        {
          scrollTop: $($.attr(this, "href")).offset().top-50
        },
        700
      );
    });


    //Top鍵跳轉動畫
    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) 
            {
                $('#btn-top').fadeIn();
            } 
            else 
            {
                $('#btn-top').fadeOut();
            }
        });
        
        $('#btn-top').click(function(){
            $('html, body').animate({scrollTop : 0},700);
            return false;
        });
  
    });

    //選單點開
    $(function(){
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
            //點擊時避免跟隨href位置
            event.preventDefault();
             //避免在點擊時關閉菜單
            event.stopPropagation();
            if($(this).parent().hasClass('open') == false){ //當class=open為否時
              $(this).parent().addClass('open');
            }else{
              $(this).parent().removeClass('open');
            }
        });
    });

    //當有下拉選單時，出現箭頭
    $(function(){
        $('.dropdown > a.dropdown-toggle').append('<div class="arrow-bottom"></div>');
        $('ul.dropdown-menu > .dropdown-submenu:has(ul) > a').append('<div class="arrow-right"></div>');
    });

    //寄至信箱
    $(document).ready(function(){
        $(".btn-mail").click(function(){
            $(".table-record .thead .table-th:first").toggleClass("table-check");
            $(".table-record .table-tr .table-td:first-child").toggleClass("table-check");
            $(".btn-email-box").toggleClass("btn-email-box-block");
        });
    });