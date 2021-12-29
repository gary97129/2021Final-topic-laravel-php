@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <div id="demo" class="carousel slide" data-ride="carousel"  style="width: 900px;margin:0 auto;">

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

                <!-- 轮播图片 -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="item_images/title/0.png">
                    </div>
                    @for($i = 1; $i <= 7; $i++)
                        <div class="carousel-item">
                            <img src="item_images/title/{{$i}}.png">
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
    </div>






    <article class="bg-secondary py-5 text-center">
        <!-- footerInfo -->
        <div class="d-flex justify-content-center align-items-center flex-wrap">
            <a class="text-light border p-3 m-3" href="https://www.facebook.com/tsvts/" target="_blank">
                <i class="fab fa-facebook fa-3x"></i><br>泰山職業訓練場
            </a>
            <a href="https://tkyhkm.wda.gov.tw/Default.aspx" target="_blank">
                <img src="https://ws.wda.gov.tw/001/Upload/308/sites/pagebackimage/366d4144-bdac-4a20-a1f2-b0846004efc0.png" alt="勞動部勞動力發展署北基宜花金馬分署全球資訊網">
            </a>
            <a href="https://www.taiwanjobs.gov.tw/home/new_index.aspx" target="_blank">
                <img src="https://icmp-ws.chiayi.gov.tw/001/Upload/408/relpic/9352/408618/8e7e31cb-201c-4b6f-802f-920fb8f06e28@710x470.png" alt="台灣就業通">
            </a>
        </div>
        <div>
            <a class="text-light" href="tel:02-2901-8274">電話：02-2901-8274</a>　｜　
            <span class="text-light">傳真：02-2908-4773</span>　｜　
            <a class="text-light" href="mainto:service@toyugi.com.tw">信箱：service@toyugi.com.tw</a>
            <address>
                <a class="text-light" href="https://goo.gl/maps/NDzTUToVSbMQYLwv6" target="_blank">243 新北市泰山區貴子里致遠新村 55 之 1 號</a>
            </address>
        </div>
    </article>

@endsection
