@extends('admin.layout.index')

@section('title', 'المواضيع')

@section('content')

<div class='text-white text-center'>
    <h2>
        {{$show->title}}
    </h2>
    @if($show->mai_photo)
    <img src="{{getUrl($show->mai_photo)}}" alt="">
    @endif
    <p>
        {!! $show->content !!}
    </p>
</div>

<div>
    @foreach($show->comments as $comment)

    {{$comment->content}}

    @endforeach
</div>

@endsection