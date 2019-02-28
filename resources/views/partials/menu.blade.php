<ul class="menu_top navbar-nav u-header__navbar-nav">
    @foreach ($items as $item)
    <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
        <a id="{{ strtolower(str_replace(' ', '', $item->title))  }}" class="nav-link u-header__nav-link" href="{{ $item->url }}">&nbsp;&nbsp;{{
            $item->title }}&nbsp;&nbsp; @if (count($item->children)!=0)<span class="fa fa-angle-down u-header__nav-link-icon"></span>@endif
            </a> @if (count($item->children)!=0)
        <ul id="{{ strtolower(str_replace(' ', '', $item->title))  }}" class="list-inline hs-sub-menu u-header__sub-menu mb-0 animated fadeOut"
            style="min-width: 220px; display: none;" aria-labelledby="{{ strtolower(str_replace(' ', '', $item->title))  }}">
            @foreach ($item->children as $item_children)
            <li class="dropdown-item hs-has-sub-menu">
                <a id="{{ strtolower(str_replace(' ', '', $item_children->title))  }}" class="nav-link u-header__sub-menu-nav-link" href="{{ $item->url }}"
                    aria-haspopup="true" aria-expanded="false" aria-controls="{{ strtolower(str_replace(' ', '', $item_children->title))  }}">
                    {{ $item_children->title }}
               
                </a>

            </li>
            @endforeach
        </ul>@endif
    </li>@endforeach
</ul>