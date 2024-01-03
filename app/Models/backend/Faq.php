<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'submenu_id',
        'question',
        'answer',
        'status',
        'sequence',
        'created_by',
        'updated_by',
    ];
}
