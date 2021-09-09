{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'SNS掲示板')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ホーム</h2>
                <form action="{{ action('Admin\TweetController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="body" value="{{ old('body') }}" placeholder="今どうしてる？">
                            <input type="hidden" class="user_id" name="user_id" value="{{ Auth::id() }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="ツイート">
                </form>
            </div>
        </div>
        <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th width="10%">アカウント名</th>
                            <th width="50%">本文</th>
                            <th width="30%">時間</th>
                            <th width="30%">削除</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th>{{ optional($post->user)->name}}</th>
                                <th>{{ $post->body }}</th>
                                <th>{{ $post->created_at }}</th>
                                <!-- ログイン情報と同じログインの者は削除ボタンを出す -->
                                @if ($post->user_id == auth()->id())
                                <th>
                                <span><a href="{{ action('Admin\TweetController@delete', ['id' => $post->id]) }}">削除</a></span>
                                @else
                                <span></span>
                                </th>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
