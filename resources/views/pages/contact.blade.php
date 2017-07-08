@extends('main')
@section('title',' | Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h3>Contact Me</h3>
                <form action="">
                   <div class="form-group">
                       <label name="email">Email</label>
                       <input type="email" id="email" name="email" class="form-control">
                   </div>
                   
                   <div class="form-group">
                       <label name="subject">Subject</label>
                       <input type="text" id="subject" name="subject" class="form-control">
                   </div>
                   <div class="form-group">
                       <label name="message">Message</label>
                       <textarea id="message" name="message" class="form-control">Type your message......</textarea>
                   </div>
                   <div>
                       <input type="submit" value="Submit" class="btn btn-success">
                   </div>
                    
                </form>
            </div>
        </div>
  @endsection