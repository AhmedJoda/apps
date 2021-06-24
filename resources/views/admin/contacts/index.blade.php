@extends('admin.layout.index')

@section('title', 'كل رسائل اتصل بنا')

@section('content')

<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">البريد</th>
            <th scope="col">موضوع الرساله</th>
            <th scope="col">محتوي الرساله</th>
            <th scope="col">التحكم</th>
        </tr>
    </thead>
    <tbody>
        @forelse($index as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->content}}</td>
            <td>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="100">
                    لا يوجد
                </td>
            </tr>
        @endforelse

    </tbody>
</table>
@endsection
