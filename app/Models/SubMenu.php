<?php

namespace App\Models;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubMenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'display_name',  
        'sequence',
        'status',
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
