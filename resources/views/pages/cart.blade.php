@extends('layouts.master')

@section('content')

    @if($product==null)
        <div class="text-center mt-5" style="font-size: 4rem;color: firebrick">購物車空空如也</div>
    @else
        <div class="container mt-5">
            @foreach($product as $row)
                <div class="alert alert-primary" role="alert">
                    <div class="row">
                        <div class="col-2">
                            <img src="
                                @if(stristr($row->image,'http') != false)
                                    {{$row->image}}
                                @else
                                    item_images/{{$row->image}}
                                @endif
                                " class="card-img-top" alt="..." style="max-width: 30rem;">
                        </div>
                        <div class="col-8">
                            <h1 class="card-title">{{$row->name}}</h1>
                        </div>
                        <div>
                            <button class="btn btn-info")>-</button>
                            <h1><span class="badge bg-primary">1</span></h1>
                            <button class="btn btn-info")>+</button>
                        </div>
                        <div>

                        </div>
                        <div>
                            <button class="btn btn-danger")><h1>刪除</h1></button>
                        </div>
                    </div>
                </div>
            @endforeach
            <button type="button" class="btn btn-outline-danger btn-block btn-lg mt-5 text-center">結帳</button>
        </div>
    @endif
{{--    <script>--}}
{{--        function delete_data(id){--}}
{{--            window.location.href = "{{route('delete_data')}}"+"?id="+id;--}}
{{--        }--}}
{{--    </script>--}}

@endsection
