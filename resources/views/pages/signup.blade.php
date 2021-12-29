@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <form class="was-validated" action="{{route('store_signup_user')}}" method="post">
            @csrf
            <div class="form-row justify-content-center">
                <div class="col-8 mb-5">
                    <label>帳號</label>
                    <input type="text" class="form-control is-invalid" name="account" required>
                </div>
                <div class="col-6 mb-5">
                    <label>密碼</label>
                    <input type="text" class="form-control is-invalid" name="password" required>
                </div>
                <div class="col-6 mb-5">
                    <label>密碼確認</label>
                    <input type="text" class="form-control is-invalid" name="password2" required>
                </div>
                <div class="col-6 mb-5">
                    <label>姓名</label>
                    <input type="text" class="form-control is-invalid" name="name" required>
                </div>
                <div class="col-6 mb-5">
                    <label>email</label>
                    <input type="text" class="form-control is-invalid" name="email" required>
                </div>
            </div>
            <button class="btn btn-outline-info btn-block" type="submit">註冊</button>
        </form>
    </div>
@endsection
