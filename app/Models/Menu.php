<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $primaryKey = 'menu_id'; 
    public $incrementing = true; 
    protected $fillable = ['name', 'url', 'parent_id','sequence'];
}
