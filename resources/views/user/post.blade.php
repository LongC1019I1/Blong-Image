@extends('user.app')


@section('bg-img',asset('user/img/post-bg.jpg'));
@section('title', $post->title);
@section('sub-heading',$post->subtitle);

@section('main-content')


    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <small>Created at {{ $post->created_at->diffForHumans() }}</small>
                    @foreach ($post->categories as $category)
                        <small class="pull-right" style="margin-right: 20px">
                            <a href="">{{ $category->name }}</a>
                        </small>
                    @endforeach
                    {!! htmlspecialchars_decode($post->body) !!}


                    <h3>Tag Clouds</h3>
                    @foreach ($post->tags as $tag)
                        <a href=""><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
                                {{ $tag->name }}
                            </small></a>
                    @endforeach
                </div>
                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
            </div>
        </div>
    </article>
@endsection
