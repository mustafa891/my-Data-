<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideBar extends Model
{
    use HasFactory;

    protected $table = 'side_bars';

    protected $guarded = [];
}
