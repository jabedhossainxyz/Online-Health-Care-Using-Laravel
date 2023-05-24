@extends('layouts.app')
@extends('admin.admin')

@section('content')
    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest News</h1>
            <div class="row mt-5">
                @foreach($data as $newsItem)
                    <div class="col-lg-4 py-2 wow zoomIn">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-category">
                                    <a href="#">{{ $newsItem->category }}</a>
                                </div>
                                <a href="blog-details.html" class="post-thumb">
                                    <img src="{{ asset('newsImage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title"><a href="blog-details.html">{{ $newsItem->title }}</a></h5>
                                <div class="site-info">
                                    <div class="avatar mr-2">
                                        <div class="avatar-img">
                                            <img src="{{ asset('authorImage/' . $newsItem->author_image) }}" alt="{{ $newsItem->author_name }}">
                                        </div>
                                        <span>{{ $newsItem->author_name }}</span>
                                    </div>
                                    <span class="mai-time"></span> {{ $newsItem->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <h2 class="text-center wow fadeInUp">Add News</h2>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6">
                    <form action="{{ route('admin.storeNews') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" name="category" id="category" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="author_name">Author Name</label>
                            <input type="text" name="author_name" id="author_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author_image">Author Image</label>
                            <input type="file" name="author_image" id="author_image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
