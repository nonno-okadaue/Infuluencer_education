@extends('layouts.app')

@section('title', 'ユーザー時間割画面')
@section('content')
    <div class="container">
        <div class="row">

        <header>
            <button>授業管理</button>
            <button>お知らせ管理</button>
            <button>バナー管理</button>
            <a href="#">ログアウト</a>
        </header>

            <a href="#">←戻る</a>
            <a href="#">スケジュール</a>
            <button>○年生</button>
            <div class="classes">
            <table>
                    <tr><td><button>小学校1年生</button></td></tr>
                    <tr><td><button>小学校2年生</button></td></tr>
                    <tr><td><button>小学校3年生</button></td></tr>
                    <tr><td><button>小学校4年生</button></td></tr>
                    <tr><td><button>小学校5年生</button></td></tr>
                    <tr><td><button>小学校6年生</button></td></tr>
                    <tr><td><button>中学校1年生</button></td></tr>
                    <tr><td><button>中学校2年生</button></td></tr>
                    <tr><td><button>中学校3年生</button></td></tr>
                    <tr><td><button>高校1年生</button></td></tr>
                    <tr><td><button>高校2年生</button></td></tr>
                    <tr><td><button>高校3年生</button></td></tr>
            </table>
            </div>

            <div class="classes">
            <table>
                    <tr>
                        <td>
                            <div>
                                <img src="">
                                <p>授業タイトル</p>
                                <p>スケジュール</p>
                            </div>
                        </td> 
                        <td>
                            <div>
                                <img src="">
                                <p>授業タイトル</p>
                                <p>スケジュール</p>
                            </div>
                        </td> 
                        <td>
                            <div>
                                <img src="">
                                <p>授業タイトル</p>
                                <p>スケジュール</p>
                            </div>
                        </td> 
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <img src="">
                                <p>授業タイトル</p>
                                <p>スケジュール</p>
                            </div>
                        </td> 
                        <td>
                            <div>
                                <img src="">
                                <p>授業タイトル</p>
                                <p>スケジュール</p>
                            </div>
                        </td> 
                        <td>
                            <div>
                                <img src="">
                                <p>授業タイトル</p>
                                <p>スケジュール</p>
                            </div>
                        </td> 
                    </tr>      
                </table>
            </div>
        </div>
    </div>
@endsection