@extends('layouts.master')
@section('content')
    <div class="container mt-5">
        <form class="was-validated mb-5">
            <input type="hidden" id="csrf_token" value="{{ csrf_token() }}">
            <input type="hidden" id="account" value="{{ session('account') }}">
            <div class="col-6 mb-5">
                <label>舊密碼</label>
                <input type="password" class="form-control is-invalid" id="oldpassword" required>
            </div>
            <div class="col-6 mb-5">
                <label>新密碼</label>
                <input type="password" class="form-control is-invalid" id="newpassword" required>
            </div>
            <div class="col-6 mb-5">
                <label>密碼確認</label>
                <input type="password" class="form-control is-invalid" id="newpassword2" required>
            </div>
            <div id="test">

            </div>
            <button class="btn btn-outline-info btn-block" type="button" onclick="changePwd()">change pwd</button>
        </form>
        <script>
            function changePwd(){
                let account = document.getElementById('account').value
                let oldpassword = document.getElementById('oldpassword').value
                let newpassword = document.getElementById('newpassword').value
                let newpassword2 = document.getElementById('newpassword2').value
                let csrf_token = document.getElementById('csrf_token').value
                let data = ""

                if(newpassword != newpassword2){
                    alert("密碼確認錯誤")
                    document.getElementById('newpassword').value = ""
                    document.getElementById('newpassword2').value = ""
                    return
                }

                data = data.concat("account=" + account + "&" + "oldpassword=" + oldpassword + "&" + "newpassword=" + newpassword)

                var xmlhttp = new XMLHttpRequest()
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var el = document.createElement('div')
                        el.setAttribute('class','alert alert-success text-center')
                        el.setAttribute('role','alert')
                        if(this.responseText == "true"){
                            el.textContent = "成功修改密碼"
                        }
                        else{
                            el.textContent = "舊密碼錯誤"
                        }
                        document.querySelector('#test').appendChild(el)
                        document.getElementById('oldpassword').value = ""
                        document.getElementById('newpassword').value = ""
                        document.getElementById('newpassword2').value = ""
                    }
                };
                xmlhttp.open("POST", "{{route('changepwd')}}", true)
                xmlhttp.setRequestHeader('X-CSRF-TOKEN',csrf_token)
                xmlhttp.send(data)
            }
        </script>
    </div>
@endsection
