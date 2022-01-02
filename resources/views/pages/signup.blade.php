@extends('layouts.master')

@section('content')
    <div class="container" style="margin-top:80px;margin-bottom: 70px">
        <div class="card bg-light" style="max-width: 35rem;margin:0 auto;">
            <h1 class="text-center card-header">註冊</h1>
            <div class="card-body">
                <form class="was-validated mb-5" action="{{route('store_signup_user')}}" method="post">
                    @csrf
                    <div class="form-row justify-content-center">
                        <div class="col-8 mb-5">
                            <label>帳號</label>
                            <input type="text" class="form-control is-invalid" name="account" required>
                            @if($same_account)
                                <div class="invalid-feedback">
                                    已有相同帳號
                                </div>
                            @endif
                        </div>
                        <div class="col-6 mb-5">
                            <label>密碼</label>
                            <input type="password" class="form-control is-invalid" name="password" required>
                        </div>
                        <div class="col-6 mb-5">
                            <label>密碼確認</label>
                            <input type="password" class="form-control is-invalid" name="password2" required>
                            @if($not_match)
                                <div class="invalid-feedback">
                                    輸入的兩個密碼不同
                                </div>
                            @endif
                        </div>
                        <div class="col-6 mb-5">
                            <label>姓名</label>
                            <input type="text" class="form-control is-invalid" name="name" required>
                        </div>
                        <div class="col-6 mb-5">
                            <label>email</label>
                            <input type="email" class="form-control is-invalid" name="email" required>
                            @if($same_email)
                                <div class="invalid-feedback">
                                    此email已註冊過
                                </div>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-outline-info btn-block" type="submit">註冊</button>
                </form>
                @if($signup_done)
                    <div class="alert alert-success text-center" role="alert">
                        成功註冊帳號:<i>{{$account}}</i>，註冊email:<i>{{$email}}</i>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
