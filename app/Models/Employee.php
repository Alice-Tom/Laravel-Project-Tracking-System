<?php

namespace App\Models;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    use HasRoles;

    protected $guarded = [];

    public function project()
    {
         return $this->hasMany(Project::class);
    }

    public function comment()
    {
         return $this->hasMany(Comment::class);
    }

    public function user()
        {
             return $this->belongsTo(User::class);
        }

}
