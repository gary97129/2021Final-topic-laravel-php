@extends('layouts.master')

@section('content')

    <div class="container" style="margin-top:100px;margin-bottom: 100px">
        <div class="card bg-light" style="max-width: 25rem;margin:0 auto;">
            <h1 class="text-center card-header">登入</h1>
            <div class="card-body">
                <form class="was-validated mb-5" action="{{route('signin_go')}}" method="post">
                    @csrf
                    <div class="justify-content-center">
                        <div class="mb-5">
                            <label>帳號</label>
                            <input type="text" class="form-control is-invalid" name="account" required>
                        </div>
                        <div class="mb-5">
                            <label>密碼</label>
                            <input type="password" class="form-control is-invalid" name="password" required>
                            @if($not_match)
                                <div class="invalid-feedback">
                                    帳號或密碼錯誤
                                </div>
                            @endif
                        </div>
                    </div>
                    <button class="btn btn-outline-info btn-block" type="submit">登入</button>
                </form>
            </div>
        </div>
    </div>
@endsection
