<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MainPage extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
      'main_heading',
      'banner_img'
    ];
    
}
