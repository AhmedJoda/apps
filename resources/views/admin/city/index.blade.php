@extends('admin.layout.index')

@section('title', 'الاعضاء')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">التحكم</th>
        </tr>
    </thead>
    <tbody>
        @foreach($index as $city)
        <tr>
            <th scope="row">{{$city->id}}</th>
            <td>{{$city->name}}</td>
            <td>
                <x-actions :actions="['edit','delete']" :route="$route" :id="$city->id" />
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection