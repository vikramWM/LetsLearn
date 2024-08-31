<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenus extends Model
{
    use HasFactory;
    protected $table = 'submenus';


    public function menu()
    {
        return $this->belongsTo(Menus::class, 'menus_id');
    }

    public function create()
    {
         // Fetch all categories from the database

        return view('menus.submenu', compact('parent'));
    }
}
