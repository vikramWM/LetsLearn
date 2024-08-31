<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $searchUserId = $request->input('user_id');
        $query = User::query();
    
        if ($searchUserId) {
            $query->where('id', $searchUserId);
        }
    
        $data['users'] = $query->orderBy('id', 'desc')->get();

        $data['all_user'] = User::orderBy('id', 'desc')->get();
        $data['role'] = Role::all();

        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return view('user.user_view', compact('data','premission'));
    
    }

    public function EditUser(Request $request ,$id)
    {
        try {
            $user = User::findOrFail($id);
    
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->mobile = $request->input('phone');
            $user->role = $request->input('role');
            $user->address = $request->input('address');
    
            if ($request->hasFile('photo')) {
                $uploadedFile = $request->file('photo');
    
                $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
                $destinationPath = public_path('assets/media/avatars');
                $uploadedFile->move($destinationPath, $fileName);
                $user->photo = 'assets/media/avatars/' . $fileName;
            } else {
                $user->photo = 'assets/media/avatars/blank.png';
            }
            // dd($user);
    
            $user->save();
    
            return redirect()->back()->with('success', 'Profile Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    public function new_user()
    {
        $data['role'] = Role::all();
        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return view('user.new_user', compact('premission', 'data'));
    }

    public function insert_new_user(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string',
            'role' => 'required|string',
            'address' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
        ]);
    
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->mobile = $validatedData['phone'];
        $user->role = $validatedData['role'];
        $user->address = $validatedData['address'];
    
        $user->password = Hash::make('user@123'); // You should consider generating a random password or prompting the user for one.
    
        if ($request->hasFile('photo')) {
            $uploadedFile = $request->file('photo');
            $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
            $destinationPath = public_path('assets/media/avatars');
            $uploadedFile->move($destinationPath, $fileName);
            $user->photo = 'assets/media/avatars/' . $fileName;
        } else {
            $user->photo = 'assets/media/avatars/blank.png';
        }
    
        $user->save();
    
        return redirect()->back()->with('success', 'User created successfully. Users Login Password Is "user@123"');
    }


    
    
    
    
}
