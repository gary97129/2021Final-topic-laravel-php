@extends('layouts.master')

@section('content')

    @if($product==null)
        <div class="text-center mt-5" style="font-size: 4rem;color: firebrick">購物車空空如也</div>
    @else
        <div class="container mt-5">
            @foreach($product as $row)
                <div class="alert alert-primary" role="alert">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="
                                @if(stristr($row->image,'http') != false)
                                    {{$row->image}}
                                @else
                                    item_images/{{$row->image}}
                                @endif
                                " class="card-img-top" alt="..." style="max-width: 30rem;">
                        </div>
                        <div class="col-6">
                            <h1 class="card-title">{{$row->name}}</h1>
                        </div>
                        <div class="col-4">
                            <div class="row align-items-center">
                                <button class="btn btn-light col-2" style="width: 30px;height: 40px;" onclick="sub('amount{{$row->id}}')">-</button>
                                <input type="text" class="form-control col-2 mx-2 text-center" style="width: 40px" id="amount{{$row->id}}" value="1">
                                <button class="btn btn-light col-2" style="width: 30px;height: 40px;" onclick="add('amount{{$row->id}}')">+</button>
                                <button class="btn btn-danger col-4 mx-2" onclick="de({{$row->id}})"><h3>刪除</h3></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <button type="button" class="btn btn-outline-danger btn-block btn-lg mt-5 text-center">結帳</button>
        </div>
    @endif
    <script>
        function add(name){
            var a =document.getElementById(name).value;
            document.getElementById(name).value = Number(a)+1 ;
        }
        function sub(name){
            var a =document.getElementById(name).value;
            if(a!=0){
                document.getElementById(name).value = Number(a)-1 ;
            }else {

            }
        }
        function de(id) {
            window.location.href = `{{route('delete_data')}}?cartid=${id}`;
        }
    </script>

@endsection
