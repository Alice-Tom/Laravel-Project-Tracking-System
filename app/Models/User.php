<?php

namespace App\Models;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Models\Manager;
use App\Models\Employee;
use App\Models\Status;
use App\Models\Comment;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function projects()
    {
         return $this->hasMany(Project::class);
    }

    public function status()
    {
         return $this->hasMany(Status::class);
    }

    public function comment()
    {
         return $this->hasMany(Comment::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function manager()
    {
        return $this->hasOne(Manager::class);
    }

    public function login($credentials)
    {
        $for = [
            'manager' => 'manager.dashboard',
            'employee'  => 'employee.dashboard',
           
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route($for[auth()->user()->getRoleNames()[0]]);
        }

        $credentials->session()->flash('success', 'Your details have now been updated!');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

       return redirect()->route('/');
    }
}
