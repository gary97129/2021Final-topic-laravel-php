@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div id="demo" class="carousel slide col-9 mt-5 mb-5" data-ride="carousel"  style="margin:0 auto;">
                <!-- 指示符 -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                    <li data-target="#demo" data-slide-to="5"></li>
                    <li data-target="#demo" data-slide-to="6"></li>
                    <li data-target="#demo" data-slide-to="7"></li>
                </ul>

                <!-- 輪播圖片 -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="item_images/title/0.png" class="img-fluid">
                    </div>
                    @for($i = 1; $i <= 7; $i++)
                        <div class="carousel-item">
                            <img src="item_images/title/{{$i}}.png" class="img-fluid">
                        </div>
                    @endfor
                </div>

                <!-- 左右切换按钮 -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="row">
            @for($i =$pa-20;$i<$pa;$i++)
                @if($i < count($data))
                    <div class="card mb-5 col-lg-3 col-md-4 col-6" style="width: 18rem;">
                        <img src="{{$data[$i]->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$data[$i]->description}}</h5>
                            <p class="card-text text-right">NT${{$data[$i]->price}}</p>
                            <div class="text-center"><a href="#" class="btn btn-info  btn-lg btn-block">加入購物車</a></div>
                        </div>
                    </div>
                @endif
            @endfor
        </div>


        <ul class="pagination justify-content-center" style="font-size: 1.5rem;">
            @for($i=1;$i<=ceil(count($data)/20);$i++)
                <li class="page-item " id = "act{{$i}}"><a class="page-link " id="page_{{$i}}" onclick="change_page('{{$i}}')" style="cursor: pointer;">{{$i}}</a></li>
            @endfor
        </ul>

    </div>


    <script>
        function change_page(id) {
            window.location.href = `{{route('get_index_page')}}?id=${id}`;
        }
    </script>
    <script>
        document.getElementById('act{{$pa/20}}').className+='active';
        document.getElementById('page_{{$pa/20}}').className+='page_y';
    </script>
@endsection
