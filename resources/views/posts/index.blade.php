@extends('main')
@section('title',' | All posts')
@section('content')
<div class="row">
    <div class="col-md-10">
        <h1>All Posts</h1>
    </div>
    <div class="col-md-2">
        <a href="{{route('posts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new post</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <hr>
        <table class="table">
           <thead>
              <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Body</th>
                  <th>Created at</th> 
                  <th></th>  
              </tr>
               
           </thead>
           <tbody>
              @foreach($posts as $post)
               <tr>
                   <td>{{$post->id}}</td>
                   <td>{{$post->title}}</td>
                   <td>{{substr($post->body,0,10)}}{{strlen($post->body) > 10?'...':''}}</td>
                   <td>{{$post->created_at->diffForHumans()}}</td>
                   <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-sm">View</a> <a href="{{route('posts.edit',$post->id)}}" class="btn btn-default btn-sm">Edit</a></td>
               </tr>
               @endforeach
           </tbody>
            
        </table>
    </div>
</div>

@endsection