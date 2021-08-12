<?php

namespace App\Models;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    use HasRoles;
    protected $guarded = [];
    
    public function project()
    {
         return $this->belongsTo(Project::class);
    }

    public function status()
    {
         return $this->belongsTo(User::class);
    }

    public function user()
    {
         return $this->belongsTo(User::class);
    }
}
