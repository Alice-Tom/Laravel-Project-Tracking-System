<?php

namespace App\Models;
use App\Models\User;
use App\Models\Status;
use App\Models\Manager;
use App\Models\Comment;
use App\Models\Employee;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use HasRoles;
    protected $guarded = [];
    
        public function projects()
        {
             return $this->belongsTo(User::class);
        }

        public function user()
        {
             return $this->belongsTo(User::class);
        }

        public function status()
        {
             return $this->hasMany(Status::class);
        }

        public function comment()
        {
             return $this->hasMany(Comment::class);
        }

        public function manager()
        {
             return $this->belongsTo(Manager::class);
        }

        public function employee()
        {
             return $this->belongsTo(Employee::class);
        }
}

