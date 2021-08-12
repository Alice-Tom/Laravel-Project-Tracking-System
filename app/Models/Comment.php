<?php

namespace App\Models;
use App\Models\Manager;
use App\Models\User;
use App\Models\Project;
use App\Models\Employee;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    use HasRoles;
    protected $guarded = [];
    
        public function employee()
        {
             return $this->belongsTo(Employee::class);
        }

        public function manager()
        {
             return $this->belongsTo(Manager::class);
        }

        public function comment()
        {
             return $this->belongsTo(User::class);
        }

        public function user()
        {
             return $this->belongsTo(User::class);
        }

        public function project()
        {
             return $this->belongsTo(Project::class);
        }
}
