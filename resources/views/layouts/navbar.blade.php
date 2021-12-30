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
            <li class="nav-item mr-2">
                <a class="btn btn-outline-info" href="{{route('get_signup_page')}}" role="button">註冊</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-danger" href="{{route('get_signin_page')}}" role="button">登入</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 mr-3" type="search" placeholder="Search" aria-label="Search" style="max-width: 20rem;">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
