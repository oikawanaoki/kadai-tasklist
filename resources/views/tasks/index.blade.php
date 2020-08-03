@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
  <h1>メッセージ一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $tasks)
                <tr>
                    {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $tasks->id, ['task' => $tasks->id]) !!}</td>
                    <td>{{ $tasks->content }}</td>
                    <td>{{ $tasks->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}
@endsection