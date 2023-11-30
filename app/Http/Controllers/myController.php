<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\models\posts;
use carbon\carbon;


class myController extends Controller
{
     public function home(){
      
      // $check = posts::latest()->get();
      // $posts = Posts::where('approved', true)->get();
      $post = posts::latest()->get();

      // if($check === 'published')

        return view('home.index',compact('post'));
      }
      // end methode

     public function adminLogin(){

      return view('home.login');
     }
     // end methode

     public function adminRegister(){

      return view('home.register');
     }
     public function storeRegister(Request $request){

      User::insert([
         'name' => $request->name,
         'uaername' => $request->username,
         'email' => $request->email,
         'phone' => $request->mobile,
         'address' => $request->address,
         'password' => Hash::make($request->password),
      ]);


      return redirect()->route('admin.login');
     }
     // end methode
     public function adminDashboard(){
      $id = Auth::user()->id;
  
      
      $posts = Posts::where('author_id', $id)->get();
     
  
      
      return view('admin2.admin_dashboard', compact('posts'));
  }
  
  public function superAdminDashboard(){
    $role = Auth::user()->role;
    if($role == 'superadmin'){
      $alldata = posts::get();
      return view('superadmin.approval',compact('alldata'));
    }else{

      return redirect()->route('welcome.home');

    }
    $posts = Posts::where('author_id', $id)->get();


    
  }
    
   
    public function userDashboard(){

      return view('user.user_dashboard');
    }

    public function alllogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



    // storePost methode start 

    public function storePost(Request $request){

      posts::insert([
        'author_id' => Auth::user()->id,
        'author_name' =>Auth::user()->name,
        'post_heading' => $request->heading,
        'details_post' => $request->post,
        'created_at' => carbon::now(),
      ]);

      return redirect()->back();

    }


    // store post methode end


    // start edit and update post methode

    public function editPost($id){

     

      $data = posts::findOrFail($id);

       

      return view('admin2.edit_post',compact('data'));

    }

    public function updatePost(Request $request){
      $dataid = $request->id;

      posts::findOrFail($dataid)->update([
            

        'author_id' => Auth::user()->id,
        'author_name' =>Auth::user()->name,
        'post_heading' => $request->heading,
        'details_post' => $request->post,
        'updated_at' => carbon::now(),

      ]);

      return redirect()->route('admin.dashboard');


    }
// end edit and update post methode

public function deletePost($id){

  $delete = posts::findOrFail($id)->delete();

  return redirect()->route('admin.dashboard')->with('success', 'Post deleted successfully.');
}



public function approvalForm()
{
    $unapprovedPosts = Posts::where('approved', false)->get();
    return view('superadmin.approval', compact('unapprovedPosts'));
}

public function approvePost($id)
{
    $post = Posts::findOrFail($id);
    $posst->approved = true;
    $posts->save();

    return redirect()->route('posts.approval.form')->with('success', 'Post approved successfully.');
}

     }

