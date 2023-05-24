@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.updateNews', ['id' => $news->id]) }}" method="POST">
        @csrf
        <input type="text" name="title" value="{{ $news->title }}">
        <textarea name="content">{{ $news->content }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
