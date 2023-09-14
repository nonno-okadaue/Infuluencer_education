@extends('layouts.app')

@section('title', '管理者ログイン画面')
@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('admins_resister') }}">新規会員登録はこちら</a>
            <h1>管理画面ログイン</h1>
            <form action="#" method="post">
                @csrf

                <div class="form-group">
                    <label for="mail">メールアドレス</label>
                    <input type="text" class="form-control" name="mail">
                </div>

                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="text" class="form-control" name="password">
                </div>

                <a class="btn btn-success" href="{{ route('admins_top') }}">ログイン</a>
            </form>
        </div>
    </div>
@endsection