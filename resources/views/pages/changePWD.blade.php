@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <form class="was-validated mb-5" action="{{route('changepwd')}}" method="post">
            @csrf
            <input type="hidden" name="account" value="{{ session('account') }}">
            <div class="col-6 mb-5">
                <label>舊密碼</label>
                <input type="password" class="form-control is-invalid" name="oldpassword" required>
            </div>
            <div class="col-6 mb-5">
                <label>新密碼</label>
                <input type="password" class="form-control is-invalid" name="newpassword" required>
            </div>
            <div class="col-6 mb-5">
                <label>密碼確認</label>
                <input type="password" class="form-control is-invalid" name="newpassword2" required>
            </div>
            @if(isset($change_done))
                @if($change_done)
                    <div class="alert alert-success text-center" role="alert">
                        修改密碼成功
                    </div>
                @else
                    <div class="alert alert-success text-center" role="alert">
                        舊密碼錯誤
                    </div>
                @endif
            @endif
            <button class="btn btn-outline-info btn-block" type="submit">change pwd</button>
        </form>
    </div>
@endsection
