@extends('admin.layout.index')

@section('title', 'من نحن')

@section('content')
<div class="container">
    <div class="card">
        <form action="settings" method="POST" enctype="multipart/form-data">
            @csrf



            <textarea name="about_us" class="editor">
            {{setting('about_us')}}
            </textarea>
            <input type="submit" value="حفظ" class="btn btn-primary">
        </form>
    </div>
</div>

@endsection