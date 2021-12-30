<nav class="navbar sticky-top navbar-expand-lg navbar-info" style="background-color: #d4ed94;">
    <a class="navbar-brand text-success" style="font-size: 2.5rem;" href="{{route('get_index_page')}}">首頁</a>
    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </button>

    <div class="collapse navbar-collapse" style="font-size: 1.2rem;" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-success" href="{{route('get_create_page')}}">新增商品<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0 mr-3">
            @if(session('account') == null)
                <li class="nav-item mr-2">
                    <a class="btn btn-outline-danger" href="{{route('get_signup_page')}}" >註冊</a>
                </li>
                <li class="nav-item mr-2">
                    <a class="btn btn-outline-info" href="{{route('get_signin_page')}}" >登入</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="btn bg-dark text-light" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user" style="font-size: 25px;"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('get_cart_page')}}">購物車</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><b>登出</b></a>
                    </div>
                </li>
            @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 mr-3" type="search" placeholder="Search" aria-label="Search" style="max-width: 20rem;">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
