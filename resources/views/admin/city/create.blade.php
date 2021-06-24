@extends('admin.layout.index')

@section('title', 'اضافة عضو')

@section('content')
<x-create-form :route="$route">

    <div class="form-body text-white">
        <div class="row">
            <div class="col-md-6">
                <div class='form-group'>
                    {!! Form::label('name', 'الاسم') !!}
                    {!! Form::text('name', old('name'),['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-12 text-center">
                {!! Form::submit(trans('admin.add'),['class' => 'btn btn-primary']) !!}
            </div>
        </div>
</x-create-form>

@endsection