@extends('admin.layout.index')

@section('title', 'المشرفين')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">البريد الاكتروني</th>
            <th scope="col">التحكم</th>
        </tr>
    </thead>
    <tbody>
        @foreach($index as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @if($user->super_admin == 0)
                <x-actions :actions="['edit','delete','edit_permissions']" :route="$route" :id="$user->id" />
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
