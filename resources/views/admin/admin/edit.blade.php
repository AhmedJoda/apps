@extends('admin.layout.index')

@section('title', 'تعديل مشرف')

@section('content')

<x-edit-form :route="$route" :edit="$edit">
    <div class="form-body text-white">
        <div class="row">
            <div class="col-md-6">
                <div class='form-group'>
                    {!! Form::label('name', 'الاسم') !!}
                    {!! Form::text('name', $edit->name,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class='form-group'>
                    {!! Form::label('email', 'البريد الاكتروني') !!}
                    {!! Form::email('email', $edit->email ,['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class='form-group'>
                    {!! Form::label('password', 'كلمة السر') !!}
                    {!! Form::password('password' ,['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            {!! Form::submit(trans('admin.edit'),['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</x-edit-form>

@endsection