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
                            <img src="{{$row->image}}" class="card-img-top" alt="..." style="max-width: 30rem;">
                        </div>
                        <div class="col-8">
                            <h4 class="card-title">{{$row->description}}</h4>
                        </div>
                        <div class="col-2">

                        </div>
                    </div>
                </div>
            @endforeach
            <button type="button" class="btn btn-outline-danger btn-block btn-lg mt-5 text-center">結帳</button>
        </div>
    @endif

@endsection
