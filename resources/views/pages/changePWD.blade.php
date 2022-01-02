@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <form class="was-validated mb-5" action="{{route('changepwd')}}" method="post">
            @csrf
            <div class="form-row justify-content-center">
                <div class="col-8 mb-5">
                    <label>舊密碼</label>
                    <input type="password" class="form-control is-invalid" name="oldpassword" required>
                    @if(isset($old_not_match))
                        @if ($old_not_match)
                            <div class="invalid-feedback">
                                舊密碼錯誤
                            </div>
                        @endif
                    @endif
                </div>
                <div class="col-8 mb-5">
                    <label>新密碼</label>
                    <input type="password" class="form-control is-invalid" name="newpassword" required>
                </div>
                <div class="col-8 mb-5">
                    <label>密碼確認</label>
                    <input type="password" class="form-control is-invalid" name="newpassword2" required>
                    @if(isset($not_match))
                        @if($not_match)
                            <div class="invalid-feedback">
                                輸入的兩個密碼不同
                            </div>
                        @endif
                    @endif
                </div>
            </div>
            <button class="btn btn-outline-info btn-block" type="submit">確認</button>
        </form>
        @if(isset($change_done))
            @if($change_done)
                <div class="alert alert-success text-center" role="alert">
                    修改密碼成功
                </div>
            @endif
        @endif
    </div>
@endsection
