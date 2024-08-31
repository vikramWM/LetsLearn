<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    protected $table = 'menus';

    protected $fillable = [
        'menu_name',
        'routes',
        'icon_class',
        'is_parent',
        'show_menu',
    ];

    public function Submenus()
    {
        return $this->hasMany('App\Models\Submenus')->where('show', 'Y');
    }

    public function submenus_get()
    {
        return $this->hasMany(Submenus::class, 'menus_id');
    }
    
}
