@extends('home.home')
@section('pageTitle','Admin Dashboard')

@section('blogposts')

<div class="container pt-3">
    <h1 class=" pt-4">This is Super Admin dashboard</h1>
    <h1 class="text-danger pt-4">All Submitted post waiting for Approval</h1>

    <table class="table-striped pt-4 pb-4">
        <thead class="thead-dark">
            <tr class="">
             
              <th scope="col">Name</th>
              <th scope="col">Post Heading</th>
              <th scope="col">Details post</th>
              <th scope="col">Approval</th>
              
            </tr>
          </thead>
          <tbody>
              @if ($alldata)
              @foreach ($alldata as $key => $item)
                  
              
            <tr class="mt-4 ml-4">
            
              <td>{{$item->author_name}}</td>
              <td>{{$item->post_heading}}</td>
             
              <td>{{$item->details_post}}</td>
              
              <td><button class="btn btn-info">{{$item->Approval}}</button></td>
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


@endsection