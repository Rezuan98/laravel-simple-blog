<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>@yield('pageTitle')</title>

<link rel="stylesheet" href=
"https://unpkg.com/purecss@1.0.1/build/pure-min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>
    /* Custom styles */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .blog {
        margin: 0 auto;
        max-width: 800px;
    }

    .blog-header {
        text-align: center;
        padding: 20px;
    }

    .blog-title {
        font-size: 36px;
        font-weight: bold;
    }

    .blog-subtitle {
        font-size: 24px;
        color: gray;
    }

    .blog-post {
        margin-bottom: 20px;
        padding: 20px;
        border: 1px solid lightgray;
    }

    .blog-post-title {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .blog-post-date {
        font-size: 18px;
        color: gray;
        margin-bottom: 20px;
    }

    .blog-post-content {
        font-size: 18px;
        line-height: 1.5;
    }
</style>



</head>



<body>

   


       


      

         @include('home.layouts.header')
       
        @include('home.layouts.navbar')
       

        <div class="content">

       @yield('blogposts')

    </div>








@include('home.layouts.footer')



       


   


    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	
	
	


 
</html>