@extends('layouts.app')

@section('title', '管理トップ画面')
@section('content')
    <div class="container">
        <div class="row">
            <button>授業管理</button>
            <button>お知らせ管理</button>
            <button>バナー管理</button>
            <a href="#">ログアウト</a>

                <div class="information">
                <p>ユーザーネーム：</p>
                <p>メールアドレス：</p>
                </div>
        </div>
    </div>
@endsection