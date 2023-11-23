@extends('home.home')
@section('pageTitle','Admin Register')



@section('blogposts')


    <div class="container mt-5">
   
       <h2>Please Register</h2>
           
         <form method="POST" action="{{route('store.register')}}">
           @csrf

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Enter Name:</label>
                <input type="text" name="name" id="form2Example1" class="form-control" />
                
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Enter Username</label>
                <input type="text" name="username" id="form2Example1" class="form-control" />
                
              </div>
           <div class="form-outline mb-4">
               <label class="form-label" for="form2Example1">Enter Email Address</label>
               <input type="email" name="email" id="form2Example1" class="form-control" />
               
             </div>
             <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Enter Mobile:</label>
                <input type="text" name="mobile" id="form2Example1" class="form-control" />
                
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Enter Address:</label>
                <input type="text" name="address" id="form2Example1" class="form-control" />
                
              </div>
           
            
             <div class="form-outline mb-4">
               <label class="form-label" for="form2Example2">Enter Password</label>
               <input type="password" name="password" id="form2Example2" class="form-control" />
              
             </div>
           
            
           
             <!-- Submit button -->
             <button type="submit" class="btn btn-success btn-block mb-4"><span class="text-white">Sign up</span></button>
        
       </form>
    </div>
@endsection