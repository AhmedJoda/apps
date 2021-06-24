@extends('admin.layout.index')

@section('title', 'المشرفين')

@section('content')

<style>
  /**
 * Panels
 */
  /*** General styles ***/
  .panel {
    box-shadow: none;
  }

  .panel-heading {
    border-bottom: 0;
  }

  .panel-title {
    font-size: 17px;
  }

  .panel-title>small {
    font-size: .75em;
    color: #999999;
  }

  .panel-body *:first-child {
    margin-top: 0;
  }

  .panel-footer {
    border-top: 0;
  }

  .panel-default>.panel-heading {
    color: #333333;
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.07);
  }

  form label {
    color: #999999;
    font-weight: 400;
  }

  .form-horizontal .form-group {
    margin-left: -15px;
    margin-right: -15px;
  }

  @media (min-width: 768px) {
    .form-horizontal .control-label {
      text-align: right;
      margin-bottom: 0;
      padding-top: 7px;
    }
  }

  .profile__contact-info-icon {
    float: left;
    font-size: 18px;
    color: #999999;
  }

  .profile__contact-info-body {
    overflow: hidden;
    padding-left: 20px;
    color: #999999;
  }

  .profile-avatar {
    width: 200px;
    position: relative;
    margin: 0px auto;
    margin-top: 196px;
    border: 4px solid #f3f3f3;
  }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
  <div class="row">
    <div class="col-xs-12 col-sm-9">
      <form class="form-horizontal" method="post" action="{{url('admin/profile')}}">
        @csrf
        <div class="panel panel-default">
          <div class="panel-body text-center">
            @if(auth()->user()->photo)
            <img src="{{ url('upload/'.auth()->user()->photo)}}" class="img-circle profile-avatar" alt="User avatar">

            @else
            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-circle profile-avatar"
              alt="User avatar">
            @endif
          </div>
        </div>

        <div class="panel panel-default">

          <div class="panel-body">
            <div class="form-group">
              <label class="col-sm-2 control-label">كلمة المرور الحالية </label>
              <div class="col-sm-10">
                <input type=password name="oldPassword" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">كلمة المرور الجديدة </label>
              <div class="col-sm-10">
                <input type=password name="newPassword" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">حفظ</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@stop