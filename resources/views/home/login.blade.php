@extends('home.home')
@section('pageTitle','Admin Login')



@section('blogposts')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

 <div class="container mt-5">
        <h3>Nijhum Dwip Blog</h3>
    <h2>Please Login to Create Post</h2>

       <!-- Email input -->
<form method="post" action="{{route('login')}}">
    @csrf
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="email" name="email" id="form2Example1" class="form-control" />
            
          </div>
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" name="password" id="form2Example2" class="form-control" />
           
          </div>
          <br><br>
        
          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input color-success" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>
        
            <div class="col">
              
              <a href="#!">Forgot password?</a>
            </div>
          </div>
        
    <br>
          <button type="submit" class="btn btn-success btn-block mb-4"><span class="text-white">Sign in</span></button>
</form>
    
      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member yet? <br> 

            <a href="{{route('admin.register')}}">Click To Register</a></p>
        
      </div>
    </form>
      
 </div>
@endsection