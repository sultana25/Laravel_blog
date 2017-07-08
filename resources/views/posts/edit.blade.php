@extends('main')
@section('title',' | View Post')
@section('stylesheets')
{!!Html::style('css/parsley.css')!!}
@endsection
@section('content')
{!!Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id],'data-parsley-validate'=>''])!!}
<div class="row">
   <div class="col-md-8">
       <div class="form-group">
           {!!Form::label('title','Title:')!!}
           {!!Form::text('title',null,['class'=>'form-control input-lg','required'=>'','maxlength'=>255])!!}
       </div> 
       <div class="form-group">
           {!!Form::label('body','Body')!!}
           {!!Form::textarea('body',null,['class'=>'form-control','required'=>''])!!}
       </div>
    </div>
    <div class="col-md-4" >
        <div class="well">
            <dl class="dl-horizontal">
                
                <dt>Created at</dt>
                <dd>{{date('M j,Y h:ia',strtotime($post->created_at))}}</dd>
                
            </dl>
            <dl class="dl-horizontal">
                
                <dt>Last update</dt>
                <dd>{{date('M j,Y h:ia',strtotime($post->updated_at))}}</dd>
                
            </dl>
            <hr>
            <div class="row">
                <div class="col-md-6">
                   {!!Html::linkRoute('posts.show','Cancel ',[$post->id],['class'=>'btn btn-danger btn-block'])!!}
                </div>
                
                <div class="col-md-6">
                    {!!Form::submit('Save Changes',['class'=>'btn btn-success btn-block'])!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!!Html::script('js/parsley.min.js')!!}
@endsection