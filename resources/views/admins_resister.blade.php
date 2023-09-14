@extends('layouts.app')

@section('title', '新規管理ユーザー登録画面')
@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('admins_login') }}">ログインはこちら</a>
            <h1>新規管理ユーザー登録</h1>
            <form action="#" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">ユーザーネーム</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="kana">カナ</label>
                    <input type="text" class="form-control" name="kana">
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="text" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <label for="confirm_password">パスワード確認</label>
                    <input type="text" class="form-control" name="confirm_password">
                </div>

                <button type="submit" class="btn btn-default">登録</button>
            </form>
        </div>
    </div>
@endsection