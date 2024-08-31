<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Str;




class HomeController extends Controller
{
    public function index()
    {
        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return view('dashboard', compact('premission')); 

    }

    public function profile()
    {

        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return view('profile.edit' , compact('premission'));
    }


    public function updateProfile(Request $request, $id)
    {
        // dd($request); 
        try {
            $user = User::findOrFail($id);
    
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->mobile = $request->input('phone');
            $user->address = $request->input('address');
    
            if ($request->hasFile('photo')) {
                $uploadedFile = $request->file('photo');
    
                // Generate a unique filename based on the original file name
                $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
    
                // Define the destination path
                $destinationPath = public_path('assets/media/avatars');
    
                // Move the uploaded file to the destination path
                $uploadedFile->move($destinationPath, $fileName);
    
                // Update the user's photo field with the file path
                $user->photo = 'assets/media/avatars/' . $fileName;
            } else {
                // If no photo is uploaded, set a default value
                $user->photo = 'assets/media/avatars/blank.png';
            }
    
            $user->save();
    
            return redirect()->back()->with('success', 'Profile Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function password()
    {
        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return view('profile.change-password', compact('premission')); 
    }


    public function changePassword(Request $request)
    {
        return view('users.change-password');
    }
 
    public function changePasswordSave(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string',
        ]);
    
        $auth = Auth::user();
    
        // Check if the current password is valid
        if (!Hash::check($request->get('current_password'), $auth->password)) {
            return redirect()->back()->with('error', 'Current Password is Invalid');
        }
    
        // Check if the new password is the same as the current password
        if (strcmp($request->get('current_password'), $request->new_password) == 0) {
            return redirect()->back()->with('error', 'New Password cannot be the same as your current password.');
        }
    
        // Update the user's password
        $user = User::find($auth->id);
        $user->password = Hash::make($request->new_password);
        $user->save();
    
        // Add a success message and redirect back
        return redirect()->back()->with('success', 'Password Changed Successfully');
    }

    public function blog()
    {
        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return view('blog.blog', compact('premission')); 
    }

    public function blog_store(Request $request)
{
    $blog = new Blog;
    $blog->tittle = $request['blogTitle'];
    $blog->content = $request['blogContent'];
    $blog->slug = Str::slug($request->input('blogTitle'), '-');

    if ($request->hasFile('photo')) {
        $uploadedFile = $request->file('photo');

        // Generate a unique filename based on the original file name
        $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();

        // Define the destination path
        $destinationPath = public_path('assets/media/blogthumbnail');

        // Move the uploaded file to the destination path
        $uploadedFile->move($destinationPath, $fileName);

        // Update the user's photo field with the file path
        $blog->Images = 'assets/media/blogthumbnail/' . $fileName;
    } else {
        // If no photo is uploaded, set a default value
        $blog->Images = 'assets/media/avatars/blank.png';
    }

    // echo '<pre>'; print_r($blog); exit;

    $blog->save();

    return redirect('/blog')->with('success', 'Blog submitted successfully');
}


public function getBlogBySlug($slug)
{
    $data['blog'] = Blog::where('slug', $slug)->first();
    $data['recent_post'] = Blog::latest()->take(3)->get();
    $data['title'] = $slug;
    $data['description'] = '';
    
            
    return view("blog-detail", compact('data'));
}

public function blogList()
{
    $role =  Auth::user()->role;
    $premission = DB::table('permission')->where('role_id', $role)->get();
    $data = [
        'blog' => Blog::orderBy('created_at', 'desc')->get(),
    ];

    return view("blog.blog-list" , compact('premission', 'data'));
}

public function destroyBlog($id)
{
    // Logic to delete the blog entry
    $blog = Blog::find($id);
    $blog->delete();

    // Redirect or respond as needed
    return redirect()->back()->with('success', 'Blog entry deleted successfully');
}



    
    

   
    







    
}

