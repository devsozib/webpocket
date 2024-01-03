<?php

namespace App\Models;

use App\Models\SubMenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'display_name',
        'url',
        'childable',
        'sequence',
        'status',
    ];
    public function submenu()
    {
        return $this->hasMany(SubMenu::class)->where('status','1')->orderBy('sequence', 'asc');
    }
}
