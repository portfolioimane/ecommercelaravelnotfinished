<header>
    <div class="top-nav container">
    <div class="top-nav-left">
    <div class="logo"><a href="/">Laravel Ecommerce</a></div>
        @if (! (request()->is('checkout') || request()->is('guestcheckout')))
             {{menu('main', 'partials.menus.main')}}
        @endif
    </div>
                <div class="top-nav-right">
                @if (! (request()->is('checkout') || request()->is('guestcheckout')))
                @include('partials.menus.main-right')
        @endif
                
                </div>
       
    </div> <!-- end top-nav -->
</header>
