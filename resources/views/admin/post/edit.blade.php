@extends('admin.layout.index')

@section('title', 'المواضيع')

@section('content')

<x-edit-form :route="$route" :edit="$edit">
    <div class=' text-center'>
        <h2>
            <div class='form-group text-white'>
                {!! Form::label('title', 'العنوان') !!}
                {!! Form::text('title', $edit->title ,['class' => 'form-control']) !!}
            </div>
        </h2>
        <div class='form-group text-white'>
            {!! Form::label('main_photo', 'الصورة الرئيسية') !!}
            {!! Form::file('main_photo', old('main_photo') ,['class' => 'form-control']) !!}
            @if($edit->main_photo)
            <img src="{{getUrl($edit->main_photo)}}" alt="">
            @endif
        </div>

        <textarea name="content" class="editor">
        {{$edit->content}}
        </textarea>
        <div class="col-md-12 text-center">
            {!! Form::submit(trans('admin.edit'),['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</x-edit-form>

@endsection