<!-- ========== HEADER ========== -->

<header id="header" class="@if(isset($page)) {{ $page->header }} @endif u-header u-header--modern u-header--left-aligned-nav  u-header--bg-transparent u-header--white-nav-links u-header--sticky-top-lg">
    <div class="u-header__section">
        <div id="logoAndNav" class="container">
    @include('partials.navbar')

        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->