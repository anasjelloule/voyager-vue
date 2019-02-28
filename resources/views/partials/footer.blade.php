<!-- ========== FOOTER ========== -->
<footer class="bg-primary">
    <div class="container-fluid space-1 px-6">
        <div class="row justify-content-between">
            <div class=" col-md-2">
                <img src="{{asset('./img/logo_footer.png')}}" class="img-fluid" alt="logo abrar" />
            </div>
            <div class="col-md-8 p-0">
                <div class="row">
                    <div class="col-md-7 pl-0">
                        {!! setting('site.map') !!}
                    </div>
                    <div class="col-md-5 text-white">
                        <h4><b> Adresse siège Social</b></h4>
                        <p class="text-white"> {{ setting('site.adresse') }}</p>
                        <h4><b>Contact</b></h4>
                        <p class="text-white"> Email: {{ setting('site.email') }} <br/> Téléphone: {{ setting('site.telephone') }}</p>
                    </div>
                    <div class="col-md-2 d-none">

                        {{ menu('Top_menu','partials.menufooter') }}
                    </div>
                    <div class="col-md-12">
                        <ul class="icon-social space-1-top">
                            <li class="ml-0">
                                <a href="{{ setting('site.facebook') }}" target="_blank">
                                    <!-- <img src="{{asset('https://www.ev-qlik.com/wp-content/themes/elephantvert/assets/img/facebook.png')}}"> -->
                                    <span class="soci fa"><i class="fab fa-facebook-f"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ setting('site.twitter') }}" target="_blank">
                                        <span class="soci twi"><i class="fab fa-twitter"></i></span>
                                    </a>
                            </li>
                            <li>
                                <a href="{{ setting('site.instagram') }}" target="_blank">
                                        <span class="soci inst"><i class="fab fa-instagram"></i></span>
                                    </a>
                            </li>
                            <li>
                                <a href="{{ setting('site.youtube') }}" target="_blank">
                                        <span class="soci yout"><i class="fab fa-youtube"></i></span>
                                    </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <form class="js-validate ">
                    <header class="mb-2">
                        <h5 class="h5 mb-0 text-white">S'INSCRIRE</h5>
                    </header>
                    <div class="js-form-message mb-3">
                        <div class="js-focus-state input-group form">

                            <input type="text" class="border-0 p-1 rounded form__input" name="name" required="" placeholder="Nom/Prénom" aria-label="name"
                                data-msg="Please enter a valid name address." data-error-class="u-has-error" data-success-class="u-has-success">
                        </div>
                    </div>
                    <div class="js-form-message mb-3">
                        <div class="js-focus-state input-group form">

                            <input type="email" class="border-0 p-1 rounded form__input" name="email" required="" placeholder="Email" aria-label="Email"
                                data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                        </div>
                    </div>
                    <div class="js-form-message mb-3">
                        <div class="js-focus-state input-group form">

                            <input type="tel" class="border-0 p-1 rounded form__input" name="tel" required="" placeholder="Tel" aria-label="Tel" data-msg="Your password is invalid. Please try again."
                                data-error-class="u-has-error" data-success-class="u-has-success">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-primary">Envoyer</button>
                    </div>
                    <form>
                        {{-- <img src="{{asset('./img/form.png')}}" class="img-fluid w-80" /> --}}
            </div>

        </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

<!-- Go to Top -->
<a class="js-go-to u-go-to" href="javascript:;" data-position="{&quot;bottom&quot;: 15, &quot;right&quot;: 15 }" data-type="fixed"
    data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
        <span class="fa fa-arrow-up u-go-to__inner"></span>
    </a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<!-- <script src="{{asset('assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script> -->
<script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>


<!-- JS Space -->
<script src="{{asset('assets/js/hs.core.js')}}"></script>
<script src="{{asset('assets/js/components/hs.header.js')}}"></script>
<script src="{{asset('assets/js/components/hs.go-to.js')}}"></script>
<script src="{{asset('assets/js/components/hs.slick-carousel.js')}}"></script>
<!-- JS Plugins Init. -->

<script>
    $(document).on("ready", function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($("#header"));

            // initialization of go to
            $.HSCore.components.HSGoTo.init(".js-go-to");
        });

        $(window).on("load", function () {
            // initialization of HSMegaMenu component
            $(".js-mega-menu").HSMegaMenu({
                event: "hover",
                pageContainer: $(".container"),
                breakpoint: 768,
                hideTimeOut: 0
            });

           

            // initialization of slick carousel
            $(".js-slick-carousel").not('.slick-initialized').slick({
autoplay: true,
arrows: false,
infinite: true,
speed: 300,
slidesToShow: 5,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1024,
settings: "unslick"
},
{
breakpoint: 600,
settings: "unslick"
},
{
breakpoint: 481,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
]
});;
            $.HSCore.components.HSSlickCarousel.init(".js-slick-carousel");
        });
        jQuery(function($){
   /*$("div.holder").jPages({
      containerID: "product_list"
    });*/
$(".menu_footer a").filter(function(){

    return this.href == location.href.replace(/#.*/, "");
}).addClass("active");
$(".menu_top li.nav-item a").filter(function(){
 

    return this.href == location.href.replace(/#.*/, "");
}).parent().addClass("active");
  });

</script>
@yield('script')
</body>

</html>