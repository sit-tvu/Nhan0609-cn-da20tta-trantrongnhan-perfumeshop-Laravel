<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/categories') }}">Perfume Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Trang Chủ</a>
        <a class="nav-link" href="{{ url('category' )}}">Danh Mục</a>
        <a class="nav-link" href="{{ url('my-orders' )}}">Đơn Hàng</a>
        <a class="nav-link" href="{{ url('cart' )}}"><i style="font-size: 30px;" class="fa fa-shopping-cart"></i></a>
        <a class="nav-link" href="{{ url('wishlist' )}}"><i style="font-size: 30px;" class="fa fa-heart"></i></a>

        {{-- @guest
            @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}"> {{__('Đăng Nhập')}} </a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}"> {{__('Đăng Ký')}} </a>
                </li>
            @endif

            @else
                <li>
                  
                </li>

        @endguest --}}

        @if (Route::has('login'))
            <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                @auth
                <a href="{{ route('logout') }}" class="nav-link underline" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Đăng Xuất') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              
                @else
                    <a href="{{ route('login') }}" class="nav-link underline" >Đăng Nhập</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link underline">Đăng Ký</a>
                    @endif
                @endauth
            <!-- </div> -->
        @endif

      </div>
    </div>
  </div>
</nav>