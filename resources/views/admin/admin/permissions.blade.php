@extends('admin.layout.index')

@section('title', ' تعديل صلاحيات ' . $admin->name)

@section('content')
    <div class="container pt-2" >
        <table class="table table-bordered text-center">
            @foreach(permissionsList() as $department => $list)
                <tr>
                    <th colspan="100">{{__('permissions.'.$department)}}</th>
                </tr>
                <tr>
                    @foreach($list as $permission)
                        <td>
                            {{__('permissions.'.$permission)}}
                            <br>
                            <a href="{{route('admin.admins.permissions.toggle',['id'=>$admin->id,'code'=>$department.'.'.$permission])}}"
                               class="btn btn-{{can($department.'.'.$permission,$admin) ? "success":"danger"}}">
                                {{can($department.'.'.$permission,$admin) ?  "مفعل":"غير مفعل"}}
                            </a>
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
@endsection
