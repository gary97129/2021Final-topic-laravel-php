@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <form class="was-validated mb-5" action="{{route('signin_go')}}" method="post">
            @csrf
            <div class="form-row justify-content-center">
                <div class="col-8 mb-5">
                    <label>帳號</label>
                    <input type="text" class="form-control is-invalid" name="account" required>
                </div>
                <div class="col-8 mb-5">
                    <label>密碼</label>
                    <input type="password" class="form-control is-invalid" name="password" required>
                </div>
            </div>
            <button class="btn btn-outline-info btn-block" type="submit">登入</button>
        </form>
    </div>
@endsection
