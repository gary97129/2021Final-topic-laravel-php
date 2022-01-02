@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">新增商品</h1>
        <form class="was-validated" action="{{route('store_create_item')}}" method="post">
            @csrf
            <div class="form-row justify-content-center">
                <div class="col-8 mb-5">
                    <label>商品名稱</label>
                    <input type="text" class="form-control is-invalid" name="name" required>
                </div>
                <div class="col-8 mb-5">
                    <label>商品描述</label>
                    <textarea class="form-control" name="description" rows="5"></textarea>
                </div>
                <div class="col-8 mb-5">
                    <label>商品圖片路徑</label>
                    <input type="text" class="form-control" name="image">
                </div>
                <div class="col-4 mb-5">
                    <label>商品價格</label>
                    <input type="text" class="form-control is-invalid" name="price" required>
                </div>
            </div>
            <button class="btn btn-outline-info btn-block" type="submit">上傳</button>
        </form>
    </div>
@endsection
