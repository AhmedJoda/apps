@extends('admin.layout.index')

@section('title', 'كل الاقسام')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">قسم رئيسي</th>
            <th scope="col">التحكم</th>
        </tr>
    </thead>
    <tbody>
        @foreach($index as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->category->name ?? "بدون"}}</td>
            <td>
                <x-actions :actions="['edit','delete']" :route="$route" :id="$item->id" />
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
