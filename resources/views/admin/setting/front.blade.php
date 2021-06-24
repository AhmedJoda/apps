@extends('admin.layout.index')

@section('title', 'اعدادات التواصل')

@section('content')

<div class="container">
        <div class="card">
                <form action="settings" method="POST" enctype="multipart/form-data">
                        @csrf
                        اعدادات الواجهه
                        <input type="submit" value="حفظ" class="btn btn-primary">
                </form>
        </div>
</div>

@endsection