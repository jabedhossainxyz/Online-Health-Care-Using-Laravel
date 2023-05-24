@extends('layouts.admin')

@section('content')
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
        @foreach($newsList as $news)
            <tr>
                <td>{{ $news->title }}</td>
                <td>{{ $news->content }}</td>
                <td>
                    <a href="{{ route('admin.updateNews', ['id' => $news->id]) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('admin.editNews', ['id' => $news->id]) }}">Edit</a>

@endsection
