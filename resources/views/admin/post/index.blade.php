@extends('admin.layout.index')

@section('title', 'المواضيع')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">العضو</th>
            <th scope="col">العنوان</th>
        </tr>
    </thead>
    <tbody>
        @foreach($index as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->user->name}}</td>
            <td>{{$post->title}}</td>
            <td>
                <x-actions :actions="['show','edit','delete']" :route="$route" :id="$post->id" />
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection