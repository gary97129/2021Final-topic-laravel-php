@extends('layouts.master')

@section('content')
    <form action="{{route('store_create_item')}}" method="post">
        @csrf
        <label>商品名稱</label>
        <input name="name">
        <label>商品描述</label>
        <input name="description">
        <label>商品圖片路徑</label>
        <input name="image">
        <label>商品價格</label>
        <input name="price">
        <button type="submit">上傳</button>
    </form>
@endsection
