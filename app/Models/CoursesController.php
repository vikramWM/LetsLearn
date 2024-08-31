<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesController extends Model
{
    use HasFactory;

    public function index()
    {
        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return view("courses.category", compact("premission"));
    }
}
