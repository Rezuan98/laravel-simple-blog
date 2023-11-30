@extends('home.home')



@section('blogposts')

   
 
<div class="blog">
    <h2 class="text-info pt-3 ">All Post</h2>
    <div class="blog-posts pure-g pt-4">

      

        <div class="pure-u-1 pure-u-md-1-2">
        <article class="blog-post">
            @foreach ($post as $item)
            <h2 class="blog-post-title">{{$item->post_heading}}</h2>
            <p class="blog-post-date">{{$item->created_at->format('l, F j, Y')}}</p>
            <p class="blog-post-content">
                {{ \Illuminate\Support\Str::words($item->details_post, 100, '...') }}
                <span id="postContent_{{ $item->id }}" style="display:none;">{{ $item->details_post }}</span>
            </p><a href="#" onclick="togglePostContent({{ $item->id }})">See More</a>
            @endforeach
        </article>
     </div>
    
    </div>
  
</div>

<script>
    function togglePostContent(postId) {
        var postContent = document.getElementById('postContent_' + postId);
        if (postContent.style.display === 'none') {
            postContent.style.display = 'inline';
        } else {
            postContent.style.display = 'none';
        }
    }
</script>
@endsection