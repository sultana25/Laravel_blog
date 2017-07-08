@extends('main')
@section('title',' | Create Post')
@section('stylesheets')
{!!Html::style('css/parsley.css')!!}
@endsection
@section('content')
<div>
    

<h1>Create Post</h1>
{!!Form::open(['method'=>'POST','action'=>'PostController@store','data-parsley-validate'=>''])!!}
<div class="form-group">
    {!!Form::label('title','Title:')!!}
    {!!Form::text('title',null,['class'=>'form-control','required'=>'','maxlength'=>'255'])!!}
</div>
<div class="form-group">
    {!!Form::label('body','Body:')!!}
    {!!Form::textarea('body',null,['class'=>'form-control','required'=>''])!!}
</div>
<div class="form-group">
    {!!Form::submit('Create Post',['class'=>'btn btn-success'])!!}
</div>
{!!Form::close()!!}
</div>
@endsection
@section('scripts')
{!!Html::script('js/parsley.min.js')!!}
@endsection
