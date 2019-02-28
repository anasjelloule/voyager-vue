<!-- Nav -->
<nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">
    <!-- Logo -->
    <div class="u-header__navbar-brand-wrapper">
        <a class="navbar-brand u-header__navbar-brand" href="/" aria-label="Abrar">
                <img class="u-header__navbar-brand-default" src="{{ asset('storage/'.setting('site.logo')) }}" alt="Logo" />
                <img class="u-header__navbar-brand-on-scroll" src="{{ asset('storage/'.setting('site.logo')) }}" alt="Logo" style="height: 60px;" />
                <img class="u-header__navbar-brand-mobile" src="{{ asset('storage/'.setting('site.logo')) }}" alt="Logo" />
            </a>
    </div>
    <!-- End Logo -->

    <!-- Responsive Toggle Button -->
    <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger" aria-label="Toggle navigation" aria-expanded="false"
        aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span class="d-none d-sm-inline-block">Menu</span>
            <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
                <span class="u-hamburger__inner"></span>
            </span>
        </button>
    <!-- End Responsive Toggle Button -->

    <!-- Navigation -->
    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
        {{--
    @include('partials.menu') --}} {{ menu('Top_menu','partials.menu') }}
    </div>
    <!-- End Navigation -->
</nav>
<!-- End Nav -->