<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{   
    use SoftDeletes;

    protected $fillable = ['deadline','number','title','body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function helpedusers()
    {
        return $this->belongsToMany(User::class, 'helps');
    }
}
