@extends('admin.layout.index')

@section('title', 'الاعدادات العامة')

@section('content')

<div class="container">

    <div class="card">
        <form action="settings" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group"><label for="">الشعار</label><input type="file" name="logo" class="form-control">
            </div>
            @if (setting('logo'))
            <img width="100" height="100" src="{{getUrl(setting('logo'))}}" alt="">
            @endif
            <div class="form-group"><label for="">اسم الموقع</label><input type="text" name="site_name"
                    value="{{ setting('site_name') }}" class="form-control"></div>

            <div class="form-group"><label for="">تشغيل الموقع</label>
                <input type="hidden" name="active" value="0" />
                <input type="checkbox" name="active" {{ setting('active') ? 'checked' : '' }} value="1"
                    class="form-control">
            </div>

            <div class="form-group"><label for="">رسالة ايقاف الموقع</label><textarea name="msg"
                    class="form-control">{{ setting('msg') }}</textarea></div>

            <div class="form-group">
                <label for="">تفعيل الاعضاء</label>
                {!! Form::select('users_activation', ['direct' => 'مباشرة', 'email' => 'البريد
                الالكتروني'],setting('users_activation'),["class" =>
                "form-control"]) !!}
            </div>

            <div cl ass="form-group">
                <label for="">تفعيل المواضيع</label>
                {!! Form::select('posts_activation', ['direct' => 'مباشرة', 'admin' => 'بعد الرجوع الى الادارة
                الالكتروني'],setting('posts_activation'),["class" =>
                "form-control"]) !!}
            </div>

            <div cl ass="form-group">
                <label for="">نشر المواضيع</label>
                {!! Form::select('posts_sharing', ['direct' => 'مباشرة', 'admin' => 'بعد الرجوع الى الادارة
                الالكتروني'],setting('posts_sharing'),["class" =>
                "form-control"]) !!}
            </div>

            <div cl ass="form-group">
                <label for="">عدد المواضيع المجانية </label>
                {!! Form::number('free_posts', old('free_posts') ,['class' => 'form-control']) !!}
            </div>
    </div>

    <input type="submit" value="حفظ" class="btn btn-primary">
    </form>
</div>
</div>

@endsection