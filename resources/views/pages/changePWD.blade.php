@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <form class="was-validated mb-5" action="{{route('changepwd')}}" method="post">
            @csrf
            <div class="col-6 mb-5">
                <label>舊密碼</label>
                <input type="password" class="form-control is-invalid" name="password" required>
            </div>
            <div class="col-6 mb-5">
                <label>新密碼</label>
                <input type="password" class="form-control is-invalid" name="password" required>
            </div>
            <div class="col-6 mb-5">
                <label>密碼確認</label>
                <input type="password" class="form-control is-invalid" name="password" required>
            </div>

            <button class="btn btn-outline-info btn-block" type="submit">change pwd</button>
        </form>
    </div>
@endsection
