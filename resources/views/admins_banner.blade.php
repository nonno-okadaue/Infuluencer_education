@extends('layouts.app')

@section('title', '管理バナー画面')
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
            <h2>バナー管理</h2>
            <div>
                <table>
                    <tr>
                        <td><img src=""></td>
                        <td><input type="file" name="img_path" class="form-control-file" ></td>
                        <form action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <td><button type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button></td>
                        </form>
                    </tr>

                    <tr>
                        <td><img src=""></td>
                        <td><input type="file" name="img_path" class="form-control-file" ></td>
                        <form action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <td><button type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button></td>
                        </form>
                    </tr>

                    <tr>
                        <td><img src=""></td>
                        <td><input type="file" name="img_path" class="form-control-file" ></td>
                        <form action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <td><button type="submit">
                            <i class="fas fa-trash-alt"></i>
                        </button></td>
                        </form>
                    </tr>
                </table>
            </div>

                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>

                <form action="#" method="post">
                @csrf
                <button type="submit" class="btn btn-default">登録</button>
                </form>
        </div>
    </div>
@endsection