@extends('home.home')
@section('pageTitle','Admin Dashboard')

@section('blogposts')
<div class="container mt-5 mb-5">
    <h4>Admin</h4>
    <h1><span class="text-warning">Write a Post</span></h1>
    <form method="post" action="{{route('store.post')}}">
        @csrf
        <div class="form-outline">
            <h3>Make a Heading</h3>
            <textarea name="heading" class="form-control mt-3" id="textAreaExample1" rows="2"></textarea>
            
             <h3>Post Details:</h3>
            <textarea name="post" class="form-control mt-3" id="textAreaExample1" rows="8"></textarea>
            
          </div>

          <button type="submit" class="btn btn-success mt-3 mb-3">Submit Post</button>
    </form>
</div>

<div class="container">
  <h1>All Post</h1>
    <table class="table">
        <thead class="thead-dark">
          <tr>
           
            <th scope="col">Name</th>
            <th scope="col">Post Heading</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            <th scope="col">status</th>
          </tr>
        </thead>
        <tbody>
            @if ($posts)
            @foreach ($posts as $key => $item)
                
            
          <tr>
          
            <td>{{{$item->author_name}}}</td>
            <td>{{{$item->post_heading}}}</td>
           
            <td><a href="{{route('edit.post',$item->id)}}">Edit</a></td>
            <td><a href="{{route('delete.post',$item->id)}}">Delete</a></td>
            <td><button class="btn btn-info">{{$item->status}}</button></td>
          </tr>
          @endforeach
          @else
        <tr>
            <td colspan="4">No posts found</td>
        </tr>
    @endif
        </tbody>
      </table>
</div>
<a class="btn btn-success mb-5 ml-2" href="{{route('all.logout')}}">Logout from admin</a>

@endsection