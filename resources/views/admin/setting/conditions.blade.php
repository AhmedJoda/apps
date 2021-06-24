@extends('admin.layout.index')

@section('title', 'شروط الاشتراك')

@section('content')
<div class="container">
    <div class="card">
        <form action="settings" method="POST" enctype="multipart/form-data">
            @csrf



            <textarea name="conditions" class="editor">
            {{setting('conditions')}}
            </textarea>
            <input type="submit" value="حفظ" class="btn btn-primary">
        </form>
    </div>
</div>

@endsection