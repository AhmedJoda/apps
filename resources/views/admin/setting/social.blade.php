@extends('admin.layout.index')

@section('title', 'اعدادات التواصل')

@section('content')

<div class="container">
        <div class="card">
                <form action="settings" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group"><label for="">الجوال</label><input type="text" name="phone"
                                        value="{{ setting('phone') }}" class="form-control">
                        </div>
                        <div class="form-group"><label for="">تويتر</label><input type="text" name="twitter"
                                        value="{{ setting('twitter') }}" class="form-control"></div>
                        <div class="form-group"><label for="">سناب شات</label><input type="text" name="snapshot"
                                        value="{{ setting('snapshot') }}" class="form-control"></div>
                        <div class="form-group"><label for="">انستجرام</label><input type="text" name="instagram"
                                        value="{{ setting('instagram') }}" class="form-control"></div>
                        <div class="form-group"><label for="">فيسبوك</label><input type="text" name="facebook"
                                        value="{{ setting('facebook') }}" class="form-control"></div>
                        <input type="submit" value="حفظ" class="btn btn-primary">
                </form>
        </div>
</div>

@endsection