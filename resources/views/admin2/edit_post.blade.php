@extends('home.home')
@section('pageTitle','Edit Post')

@section('blogposts')

<div class="container mt-5 mb-5">
 
    <h4>Author Name: <span class="text-info mb-3">{{$data->author_name}}</span></h4>

    <h1>Edit your Post</h1>
    <form method="post" action="{{route('update.post')}}">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}" id="">
        <div class="form-outline">
            <h3>Edit Heading</h3>
            <textarea name="heading" class="form-control mt-3" id="textAreaExample1" rows="5">
                {!! $data->post_heading !!}
            </textarea>
           
             <h3>Edit Details Post:</h3>
            <textarea name="post" class="form-control mt-3" id="textAreaExample1" rows="16">
                {!! $data->details_post !!}
            </textarea>
            
          </div>

          <button type="submit" class="btn btn-success mt-3 mb-3">Update Post</button>
    </form>
</div>


@endsection