<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;
use App\Models\Menus;
use App\Models\Submenus;
use App\Models\Role;
use App\Models\permission;
use Auth;



class MenusController extends Controller
{
    public function index()
    {
        $menus = Menus::all(); 
        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        // echo '<pre>'; print_r($menus);
        return view('menu.menu', compact('menus','premission')); 
    }

    public function insert_menu(Request $request)
{
    $Menu = new Menus;
    $Menu->menu_name = $request->input('menu_name');
    $Menu->routes = $request->input('route');
    $Menu->icon_class = $request->input('icon');
    $Menu->is_parent = $request->input('parent');
    $Menu->show_menu = $request->input('status');
    $Menu->save();

    return redirect()->back()->with('success', 'Menu Added Successfully');
}

public function destroy(Menus $menu)
{
    if ($menu->delete()) {
        return redirect()->route('menus')->with('success', 'Menu item deleted successfully');
    } else {
        return redirect()->route('menus')->with('error', 'Failed to delete menu item');
    }
}

public function update(Request $request, $id)
{
    $menu = Menus::findOrFail($id);

    $menu->menu_name = $request->input('menu_name');
    $menu->routes = $request->input('route');
    $menu->icon_class = $request->input('icon');
    $menu->is_parent = $request->input('parent');
    $menu->show_menu = $request->input('status');
    $menu->save();

    return redirect()->back()->with('success', 'Menu Updated Successfully');
}



public function submenu()
{
  
    $data['submenus'] = Submenus::with('menu')->get()->toArray();

    $data['parent'] = Menus::all()->toArray();
    $role =  Auth::user()->role;
    $premission = DB::table('permission')->where('role_id', $role)->get();

    return view('menu.submenu', compact('data','premission'));
}

public function delete(Submenus $submenus)
{
    if ($submenus->delete()) {
        return redirect()->back()->with('success', 'Menu Delete Successfully');
    } else {
        return redirect()>back()->with('error', 'Failed to delete menu item');
    }
}

public function submenu_insert(Request $request)
{
    $submenus = new Submenus;
    $submenus->sub_menu_name = $request->input('menu_name');
    $submenus->routes = $request->input('route');
    $submenus->menus_id = $request->input('parent');
    $submenus->show = $request->input('status');
    $submenus->save();

    return redirect()->back()->with('success', 'Menu Added Successfully');
}

public function submenu_update(Request $request, $id)
{
    try {
        // Find the Submenus instance by its ID
        $submenus = Submenus::findOrFail($id);

        // Update the Submenus instance with the validated data
        $submenus->sub_menu_name = $request->input('menu_name');
        $submenus->routes = $request->input('route');
        $submenus->menus_id = $request->input('parent');
        $submenus->show = $request->input('status');
        $submenus->save();

        return redirect()->back()->with('success', 'Menu Updated Successfully');
    } catch (\Exception $e) {
        // Handle exceptions, such as not finding the record
        return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
    }
}


public function userright()
{
    $roles = Role::all(); // Rename $role to $roles
    $role =  Auth::user()->role;
    $premission = DB::table('permission')->where('role_id', $role)->get();
    return view('menu.userright', compact('roles','premission')); // Use 'roles' as the variable name
}

    public function permission(Request $req)
    {
        // $menu_id = json_encode($req->input('menu_id'));
        // $permission = new permission;
        // $permission->role_id = $req->input('role_id');
        // $permission->menu_id = $menu_id;
        // $permission->submenu_id = $req->input('submenus_id');
        // $permission->save();
        // $roles = Role::all(); // Rename $role to $roles
        // Session::put('role','1');
        // $role = Session::get('role');
        // $premission = DB::table('permission')->where('role_id','=',$role)->get();
        // return view('menu.userright', compact('roles','premission'));
        
        $role = $req->input('role_id');
        $menu_id = json_encode($req->input('menu_id'));
        $submenu_id = json_encode($req->input('submenu_id'));

        // Attempt to update or create a permission record
        Permission::updateOrCreate(
            ['role_id' => $role],
            ['menu_id' => $menu_id, 'submenu_id' => $submenu_id]
        );

        $roles = Role::all();
        $role =  Auth::user()->role;
        $premission = DB::table('permission')->where('role_id', $role)->get();
        return redirect()->back()->with('success', 'Premission Granted Successfully',compact('roles','premission'));
        // return view('menu.userright', compact('roles', 'premission'));
    }


    function rolePermission(Request $request){
        $role_id = $request->input('role_id');
        $premission = DB::table('permission')->where('role_id', $role_id)->get();
        $menuid = json_decode($premission[0]->menu_id);
        $submenuid = json_decode($premission[0]->submenu_id);
        $data = [
            'menuid' => $menuid,
            'submenuid' => $submenuid,
        ];
        return response()->json($data);
    }
}
